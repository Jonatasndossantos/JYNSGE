<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::orderBy('dtPublicacao', 'desc')->get();
        return view('topicos.inteligenciaArtificial', compact('noticias'));
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:250',
            'linkImg' => 'max:45',
            'texto' => 'required',
            'resumo' => 'required|max:500',
            'dtPublicacao' => 'required|date',
        ]);

        $noticia = new Noticia($validated);
        $noticia->user_id = auth()->id();
        $noticia->save();

        return redirect()->route('ia.index')
            ->with('success', 'Notícia cadastrada com sucesso!');
    }
}