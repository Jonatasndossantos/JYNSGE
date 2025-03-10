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
        
        // Prepare user data
        $userData = [
            'username' => $user->username,
            'fullName' => $user->name,
            'shortBio' => $perfil->biografia,
            'profileImage' => $perfil->linkImg,
            'bio' => $perfil->biografia,
            'stats' => [
                'articlesPublished' => 42, // Replace with actual data
                'followers' => 1337, // Replace with actual data
                'following' => 890, // Replace with actual data
                'createdAt' => $user->created_at,
            ],
            'socials' => [
                'github' => 'https://github.com', // Replace with actual data
                'twitter' => 'https://twitter.com', // Replace with actual data
                'linkedin' => 'https://linkedin.com', // Replace with actual data
            ],
            'articles' => [], // Fetch articles related to the user
        ];

        return view('perfil.index', compact('userData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerfilRequest $request)
    {
        $validated = $request->validate([
            'biografia' => 'required',
            'linkImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tipoUsuario' => 'required',
        ]);

        $perfil = new Perfil();
        $perfil->biografia = $validated['biografia'];
        $perfil->tipoUsuario = $validated['tipoUsuario'];
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
        //
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
            'biografia' => 'required',
            'linkImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tipoUsuario' => 'required|boolean',
        ]);

        $perfil->biografia = $validated['biografia'];
        $perfil->tipoUsuario = $validated['tipoUsuario'];

        if ($request->hasFile('linkImg')) {
            $path = $request->file('linkImg')->store('perfil', 'public');
            $perfil->linkImg = $path;
        }

        $perfil->save();

        return redirect()->route('perfil.index')->with('success', 'Perfil atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
