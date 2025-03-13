<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;


use App\Models\Noticia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage; //permite guardar arquivos e claro as funçoes pra isso


class TopicosController extends Controller
{
    public function index()
    {
        $topicos = Categoria::orderBy('nome')->get();
        return view('topicos.todosTopicos', compact('topicos'));
    }

    public function show(Categoria $topico)
    {
        
        // Busca as notícias relacionadas usando a relação many-to-many
        $noticias = $topico->noticias()->latest()->get();
        
        return view('topicos.topico', compact('topico', 'noticias'));
    }
}
