@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    {{-- Conteúdo da Notícia --}}
    <article class="bg-white rounded-lg shadow-lg overflow-hidden">
        @if($noticia->linkImg)
        <img src="{{ $noticia->linkImg }}" alt="{{ $noticia->titulo }}" class="w-full h-64 object-cover">
        @endif
        
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $noticia->titulo }}</h1>
            
            <div class="flex items-center text-gray-500 text-sm mb-4">
                <span>{{ $noticia->created_at->format('d/m/Y H:i') }}</span>
                <span class="mx-2">•</span>
                <span>Por {{ $noticia->user->name }}</span>
            </div>

            <div class="prose max-w-none">
                {!! $noticia->conteudo !!}
            </div>

            {{-- Categorias --}}
            <div class="mt-6 flex flex-wrap gap-2">
                @foreach($noticia->categorias as $categoria)
                <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                    {{ $categoria->nome }}
                </span>
                @endforeach
            </div>
        </div>
    </article>

    {{-- Seção de Comentários --}}
    <div class="mt-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Comentários</h2>
            <a href="{{ route('noticias.comments.index', $noticia) }}" 
               class="text-blue-500 hover:text-blue-600">
                Ver todos os comentários ({{ $noticia->comments()->count() }})
            </a>
        </div>

        {{-- Formulário de Comentário --}}
        @auth
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <form action="{{ route('noticias.comments.store', $noticia) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                        Deixe seu comentário
                    </label>
                    <textarea
                        name="content"
                        id="content"
                        rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        placeholder="O que você achou desta notícia?"
                    ></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Comentar
                    </button>
                </div>
            </form>
        </div>
        @else
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6 text-center">
            <p class="text-gray-600">
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Faça login</a>
                para deixar um comentário
            </p>
        </div>
        @endauth

        {{-- Lista de Comentários Recentes --}}
        <div class="space-y-6">
            @foreach($noticia->comments()->whereNull('parent_id')->latest()->take(3)->get() as $comment)
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <img src="{{ $comment->user->profile_photo_url }}" 
                             alt="{{ $comment->user->name }}" 
                             class="h-10 w-10 rounded-full">
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-bold">{{ $comment->user->name }}</h4>
                                <p class="text-sm text-gray-500">
                                    {{ $comment->created_at->diffForHumans() }}
                                </p>
                            </div>
                            @if($comment->is_solution)
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded">
                                Solução
                            </span>
                            @endif
                        </div>
                        
                        <div class="mt-2 text-gray-700">
                            {!! nl2br(e($comment->content)) !!}
                        </div>

                        <div class="mt-4 flex items-center space-x-4">
                            <button class="like-button flex items-center space-x-1 text-gray-500 hover:text-blue-500" 
                                    data-comment-id="{{ $comment->id }}">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                                </svg>
                                <span class="likes-count">{{ $comment->likes }}</span>
                            </button>

                            <a href="{{ route('comments.show', $comment) }}" 
                               class="text-gray-500 hover:text-blue-500">
                                Responder
                            </a>

                            @can('update', $comment)
                            <button class="text-gray-500 hover:text-blue-500 edit-comment">
                                Editar
                            </button>
                            @endcan

                            @can('delete', $comment)
                            <form action="{{ route('comments.destroy', $comment) }}" 
                                  method="POST" 
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-gray-500 hover:text-red-500">
                                    Excluir
                                </button>
                            </form>
                            @endcan
                        </div>

                        @if($comment->replies->count() > 0)
                        <div class="mt-4 pl-4 border-l-2 border-gray-200">
                            @foreach($comment->replies->take(2) as $reply)
                            <div class="mb-4 last:mb-0">
                                <div class="flex items-start space-x-3">
                                    <img src="{{ $reply->user->profile_photo_url }}" 
                                         alt="{{ $reply->user->name }}" 
                                         class="h-8 w-8 rounded-full">
                                    <div>
                                        <div class="flex items-center space-x-2">
                                            <span class="font-semibold">{{ $reply->user->name }}</span>
                                            <span class="text-sm text-gray-500">
                                                {{ $reply->created_at->diffForHumans() }}
                                            </span>
                                        </div>
                                        <p class="text-gray-700 mt-1">
                                            {!! nl2br(e($reply->content)) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            @if($comment->replies->count() > 2)
                            <a href="{{ route('comments.show', $comment) }}" 
                               class="text-blue-500 hover:underline text-sm">
                                Ver mais respostas
                            </a>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script>
// Script para likes
document.querySelectorAll('.like-button').forEach(button => {
    button.addEventListener('click', async () => {
        const commentId = button.dataset.commentId;
        try {
            const response = await fetch(`/comments/${commentId}/like`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            });
            const data = await response.json();
            button.querySelector('.likes-count').textContent = data.likes;
        } catch (error) {
            console.error('Error liking comment:', error);
        }
    });
});

// Script para edição inline
document.querySelectorAll('.edit-comment').forEach(button => {
    button.addEventListener('click', function() {
        const commentDiv = this.closest('.bg-white');
        const contentDiv = commentDiv.querySelector('.text-gray-700');
        const content = contentDiv.textContent.trim();
        
        contentDiv.innerHTML = `
            <form class="edit-comment-form">
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 mb-2">${content}</textarea>
                <div class="flex justify-end space-x-2">
                    <button type="submit" class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Salvar
                    </button>
                    <button type="button" class="cancel-edit px-3 py-1 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                        Cancelar
                    </button>
                </div>
            </form>
        `;
    });
});

// Cancelar edição
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('cancel-edit')) {
        const form = e.target.closest('form');
        const contentDiv = form.closest('.text-gray-700');
        contentDiv.innerHTML = form.querySelector('textarea').value;
    }
});

// Salvar edição
document.addEventListener('submit', async function(e) {
    if (e.target.classList.contains('edit-comment-form')) {
        e.preventDefault();
        const form = e.target;
        const commentDiv = form.closest('.bg-white');
        const commentId = commentDiv.querySelector('.like-button').dataset.commentId;
        const content = form.querySelector('textarea').value;
        
        try {
            const response = await fetch(`/comments/${commentId}`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ content })
            });
            
            if (response.ok) {
                const contentDiv = form.closest('.text-gray-700');
                contentDiv.innerHTML = content;
            }
        } catch (error) {
            console.error('Error updating comment:', error);
        }
    }
});
</script>
@endpush
@endsection 