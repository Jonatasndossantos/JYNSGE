<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\User;
use App\Http\Requests\StorePerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user(); // Assuming the user is authenticated
        $perfil = Perfil::with(['user'])->where('user_id', $user->id)->first();
        return view('perfil.index', compact('perfil'));
        
        // Prepare user data
        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            
            'bio' => $perfil->bio,
            'biografia' => $perfil->biografia,
            'linkImg' => $perfil->linkImg,
            
            'sociais' => $perfil->sociais,
            
            'tipoUser' => $perfil->tipoUser
        ];

        return view('perfil.index', compact('userData'));
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
            'bio' => 'required|max:500',
            'biografia' => 'required',
            'linkImg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sociais' => 'array',
            'tipoUser' => 'required'
        ]);

        $perfil = new Perfil();
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
        

        return redirect()->route('profile.edit')
            ->with('success', 'Perfil criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfil $perfil)
    {
        return view('', compact('perfil'));
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
        $validated = $request->validate([
            'bio' => 'required|max:500',
            'biografia' => 'required',
            'linkImg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sociais' => 'array',
            'tipoUser' => 'required'
        ]);

        $perfil->bio = $validated['bio'];
        $perfil->biografia = $validated['biografia'];
        $perfil->sociais = $validated['sociais'];
        $perfil->tipoUser = $validated['tipoUser'];

        if ($request->hasFile('linkImg')) {
            $path = $request->file('linkImg')->store('perfil', 'public');
            $perfil->linkImg = $path;
        }

        $perfil->save();

        return redirect()->route('perfil.edit')->with('success', 'Perfil atualizado com sucesso!');
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
}
