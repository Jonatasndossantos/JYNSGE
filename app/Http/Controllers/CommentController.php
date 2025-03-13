<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    

    /**
     * Display a listing of the resource.
     */
    public function index(Noticia $noticia)
    {
        $comments = $noticia->comments()
            ->with(['user', 'replies.user'])
            ->whereNull('parent_id')
            ->latest()
            ->paginate(10);

        return view('comments.index', compact('noticia', 'comments'));
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
    public function store(Request $request, Noticia $noticia)
    {
        $validated = $request->validate([
            'content' => 'required|min:3',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        $comment = $noticia->comments()->create([
            'user_id' => Auth::id(),
            'content' => $validated['content'],
            'parent_id' => $validated['parent_id'] ?? null
        ]);

        if ($request->wantsJson()) {
            return response()->json($comment->load('user'));
        }

        return back()->with('success', 'Comentário adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        $comment->load(['user', 'noticia', 'replies.user']);
        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);

        $validated = $request->validate([
            'content' => 'required|min:3'
        ]);

        $comment->update($validated);

        if ($request->wantsJson()) {
            return response()->json($comment);
        }

        return back()->with('success', 'Comentário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        
        $comment->delete();

        if (request()->wantsJson()) {
            return response()->json(['message' => 'Comentário excluído com sucesso!']);
        }

        return back()->with('success', 'Comentário excluído com sucesso!');
    }

    public function like(Comment $comment)
    {
        try {
            $user = auth()->user();
            
            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuário não autenticado'
                ], 401);
            }

            // Busca o registro de like
            $existingLike = $comment->likes()
                ->where('user_id', $user->id)
                ->exists();

            if ($existingLike) {
                // Remove o like
                $comment->likes()->detach($user->id);
                $isLiked = false;
            } else {
                // Adiciona o like
                $comment->likes()->attach($user->id);
                $isLiked = true;
            }

            // Retorna apenas os dados necessários
            return response()->json([
                'success' => true,
                'likes' => $comment->likes()->count(),
                'isLiked' => $isLiked
            ]);

        } catch (\Exception $e) {
            \Log::error('Erro ao processar like: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Erro ao processar like'
            ], 500);
        }
    }

    public function markAsSolution(Comment $comment)
    {
        $this->authorize('markAsSolution', $comment);
        
        $comment->update(['is_solution' => true]);
        return back()->with('success', 'Comentário marcado como solução!');
    }

    public function allComments()
    {
        $comments = Comment::with(['user', 'noticia', 'user.perfil'])
            ->latest()
            ->paginate(10);

        return view('comments.all', compact('comments'));
    }
}
