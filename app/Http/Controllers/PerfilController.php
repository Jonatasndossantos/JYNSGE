<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\User;
use App\Models\Noticia;
use App\Http\Requests\StorePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage; //permite guardar arquivos e claro as funçoes pra isso


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user(); // Assuming the user is authenticated

        $perfil = Perfil::where('user_id', $user->id)->first(); // Pega o perfil do usuário

        $noticias = Noticia::where('user_id', $user->id)
                          ->orderBy('published_at', 'desc')
                          ->get();
        

        return view('perfil.index', compact('perfil', 'user','noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perfil = Perfil::all();
        return view('perfil.create', compact('perfil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerfilRequest $request)
    {
        $validated = $request->validate([
            'bio' => 'max:500',
            'biografia' => '',
            'linkImg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sociais' => 'array',
            'tipoUser' => ''
        ]);

        $perfil = new Perfil();
        if($validated['bio']);
        $perfil->bio = $validated['bio'];
        
        $perfil->biografia = $validated['biografia'];
        $perfil->sociais = $validated['sociais'];
        $perfil->tipoUser = $validated['tipoUser'];
        $perfil->user_id = auth()->id();

        if ($request->hasFile('linkImg')) {
            $path = $request->file('linkImg')->store('perfil', 'public');
            $perfil->linkImg = $path;
        }       

        $perfil->save();
        

        return redirect()->route('profile.index')
            ->with('success', 'Perfil criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfil $perfil)
    {
        return view('perfil.index', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perfil $perfil)
    {
        return view('perfil.edit', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perfil $perfil)
    {
        if ($request->has('biografia')) {
            try {
                $perfil->biografia = $request->biografia;
                $perfil->save();
                
                return response()->json([
                    'success' => true,
                    'message' => 'Biography updated successfully'
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error updating biography: ' . $e->getMessage()
                ], 422);
            }
        }

        $validated = $request->validate([
            'bio' => 'max:500|nullable',
            'linkImg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'tipoUser' => '',
            'socials' => 'array|nullable'
        ]);

        try {
            if ($request->hasFile('linkImg')) {
                // Delete old image if exists
                if ($perfil->linkImg) {
                    Storage::disk('public')->delete($perfil->linkImg);
                }
                
                $path = $request->file('linkImg')->store('perfil', 'public');
                $perfil->linkImg = $path;
                
                $perfil->save();
                
                return response()->json([
                    'success' => true,
                    'message' => 'Image updated successfully',
                    'path' => Storage::url($path)
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating image: ' . $e->getMessage()
            ], 422);
        }

        // Add this condition for banner upload
        if ($request->hasFile('linkImgCover')) {
            try {
                if ($perfil->linkImgCover) {
                    Storage::disk('public')->delete($perfil->linkImgCover);
                }
                
                $path = $request->file('linkImgCover')->store('banner', 'public');
                $perfil->linkImgCover = $path;
                $perfil->save();
                
                return response()->json([
                    'success' => true,
                    'message' => 'Banner updated successfully',
                    'path' => Storage::url($path)
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Error updating banner: ' . $e->getMessage()
                ], 422);
            }
        }

        try{
            if ($request->has('bio')) {
                $perfil->bio = $validated['bio'];
            }

            return response()->json([
                'success' => true,
                'message' => 'Bio updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating bio: ' . $e->getMessage()
            ], 422);
        }



        try{            
            // Handle social links
            if($request->has('socials')) {
                $socialLinks = [];
                foreach($request->socials as $social) {
                    if (!empty($social['url']) && !empty($social['platform'])) {
                        $socialLinks[] = [
                            'platform' => $social['platform'],
                            'url' => $social['url']
                        ];
                    }
                }
                $perfil->sociais = $socialLinks;
            }

            $perfil->save();

            return redirect()->route('perfil.index', $perfil)
                ->with('success', 'Perfil atualizado com sucesso!');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating biography: ' . $e->getMessage()
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perfil $perfil)
    {
        if (perfil->linkImg) {
            Storage::disk('public')->delete(perfil->linkImg); //
        }

        perfil->delete();

        return redirect()->route('home')
            ->with('success', 'Perfil excluída com sucesso!');
    }

    public function deleteImage(Perfil $perfil)
    {
        try {
            if ($perfil->linkImg) {
                // Delete the image from storage
                Storage::disk('public')->delete($perfil->linkImg);
                
                // Remove the image path from the database
                $perfil->linkImg = null;
                $perfil->save();
                
                return response()->json([
                    'success' => true,
                    'message' => 'Image deleted successfully'
                ]);
            }
            
            return response()->json([
                'success' => false,
                'message' => 'No image found to delete'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting image: ' . $e->getMessage()
            ], 422);
        }
    }

    public function deleteBanner(Perfil $perfil)
    {
        try {
            if ($perfil->linkImgCover) {
                Storage::disk('public')->delete($perfil->linkImgCover);
                $perfil->linkImgCover = null;
                $perfil->save();
                
                return response()->json([
                    'success' => true,
                    'message' => 'Banner deleted successfully'
                ]);
            }
            
            return response()->json([
                'success' => false,
                'message' => 'No banner found to delete'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting banner: ' . $e->getMessage()
            ], 422);
        }
    }

    /**
     * Display a listing of profiles.
     */
    public function adminIndex()
    {
        $perfils = Perfil::with('user')  // Eager load user relationship
                        ->orderBy('created_at', 'desc')
                        ->paginate(9);  // Paginate results
        
        return view('admin.perfils.index', compact('perfils'));
    }

    /**
     * Toggle user type between admin and regular user.
     */
    public function toggleType(Request $request, Perfil $perfil)
    {
        try {
            $perfil->tipoUser = $request->tipoUser;
            $perfil->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Tipo de usuário alterado com sucesso'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao alterar tipo de usuário: ' . $e->getMessage()
            ], 422);
        }
    }
}