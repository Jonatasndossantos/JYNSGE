<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $noticiasRecentes = Noticia::with(['categorias', 'user'])
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->get();

    // Buscar notícias de robótica
    $noticiasRobotica = Noticia::with(['categorias', 'user'])
        ->whereHas('categorias', function($query) {
            $query->where('nome', 'like', '%Robótica%');
        })
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

    // Buscar notícias de Inteligência Artificial
    $noticiasArtificial = Noticia::with(['categorias', 'user'])
        ->whereHas('categorias', function($query) {
            $query->where('nome', 'like', '%Inteligência Artificial%');
        })
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

    return view('home', [
        'noticiasRecentes' => $noticiasRecentes,
        'noticiasRobotica' => $noticiasRobotica,
        'noticiasArtificial' => $noticiasArtificial
    ]);
}

    public function noticiasPorCategoria($categoria = 'Robótica')
    {
        $noticias = Noticia::with(['categorias', 'user'])
            ->whereHas('categorias', function($query) use ($categoria) {
                $query->where('nome', 'like', "%{$categoria}%");
            })
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('components.noticias', ['noticias' => $noticias]);
    }

    public function noticiasPorCategoria2($categoria = 'Inteligência Artificial')
    {
        $noticias = Noticia::with(['categorias', 'user'])
            ->whereHas('categorias', function($query) use ($categoria) {
                $query->where('nome', 'like', "%{$categoria}%");
            })
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('components.noticias', ['noticias' => $noticias]);
    }
}