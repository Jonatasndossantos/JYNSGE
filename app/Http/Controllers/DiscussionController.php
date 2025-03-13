<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Categoria;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    public function index()
    {
        $discussions = Comment::with(['user.perfil', 'noticia', 'replies'])
            ->whereNull('parent_id')
            ->latest()
            ->paginate(10);

        $categorias = Categoria::all();

        return view('discussions.index', compact('discussions', 'categorias'));
    }

    public function like(Comment $comment)
    {
        $user = auth()->user();
        
        // Verifica se o usuário já curtiu
        if ($comment->isLikedBy($user)) {
            // Remove o like
            $comment->likes()->detach($user->id);
            $isLiked = false;
        } else {
            // Adiciona o like
            $comment->likes()->attach($user->id);
            $isLiked = true;
        }

        return response()->json([
            'success' => true,
            'likes' => $comment->likes()->count(),
            'isLiked' => $isLiked
        ]);
    }
} 