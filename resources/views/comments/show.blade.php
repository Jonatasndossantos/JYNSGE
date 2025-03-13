<x-app-layout>
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  

@section('content')
<div class="max-w-[1600px] mx-auto">
    <div class="mb-6">
        <a href="{{ route('noticias.comments.index', $comment->noticia) }}" class="text-blue-400 hover:underline">
            &larr; Voltar para todos os comentários
        </a>
    </div>

    <div class="panel relative transition-colors duration-300 hoverable px-4 lg:px-5 mb-3 flex items-center justify-between py-4 pr-6 pl-5 gap-6">
        <div>
            <p class="font-kanit text-grey-600 text-lg font-normal pl-6 leading-tighter tracking-normal">
                <span class="mr-1 text-blue-400 absolute left-4">//</span> 
                {{ $comment->noticia->titulo }}
            </p>
        </div>
    </div>

    <div class="panel forum-comment mb-6 px-4 py-4 transition-colors duration-300 bg-card-default/60 relative">
        <div class="flex">
            <div class="mr-5 hidden md:block">
                <a href="{{ route('perfil.show', $comment->user) }}" class="relative flex items-start mb-2">
                    <img src="{{ $comment->user->profile_photo_url }}" alt="{{ $comment->user->name }}" class="w-[78px] h-[78px] rounded">
                </a>
            </div>
            
            <div class="flex-1">
                <header class="mb-4 flex items-center justify-between">
                    <div class="flex-1">
                        <div class="flex items-center">
                            <a href="{{ route('perfil.show', $comment->user) }}" class="text-blue-400 text-lg font-bold uppercase">
                                {{ $comment->user->name }}
                            </a>
                            @if($comment->is_solution)
                            <span class="ml-2 px-2 py-1 text-xs font-semibold bg-green-600/20 text-green-400">
                                Solução
                            </span>
                            @endif
                        </div>
                        <div class="mt-1 text-2xs text-grey-600/70">
                            {{ $comment->created_at->diffForHumans() }}
                        </div>
                    </div>
                </header>

                <div class="content user-content text-sm text-grey-100">
                    {!! nl2br(e($comment->content)) !!}
                </div>

                <div class="mt-4 flex items-center gap-4">
                    <button class="like-button flex items-center gap-2 text-sm text-grey-600 hover:text-blue-400" data-comment-id="{{ $comment->id }}">
                        <svg width="16" height="16" viewBox="0 0 16 16" class="fill-current">
                            <path d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                        <span class="likes-count">{{ $comment->likes }}</span>
                    </button>

                    @can('update', $comment)
                    <button class="text-sm text-grey-600 hover:text-blue-400 edit-comment">
                        Editar
                    </button>
                    @endcan

                    @can('delete', $comment)
                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-sm text-grey-600 hover:text-red-400">
                            Excluir
                        </button>
                    </form>
                    @endcan

                    @if(!$comment->is_solution && auth()->id() === $comment->noticia->user_id)
                    <form action="{{ route('comments.mark-solution', $comment) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-sm text-green-400 hover:text-green-500">
                            Marcar como solução
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @auth
    <div class="mb-6">
        <form action="{{ route('noticias.comments.store', $comment->noticia) }}" method="POST" class="bg-card-default/60 p-4 rounded">
            @csrf
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            <div class="mb-4">
                <textarea name="content" rows="3" class="w-full p-2 bg-card-default border border-gray-700 rounded" placeholder="Responda a este comentário..."></textarea>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Responder
            </button>
        </form>
    </div>
    @else
    <p class="text-center mb-6">
        <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Faça login</a> para responder
    </p>
    @endauth

    @if($comment->replies->count() > 0)
    <h3 class="text-lg font-semibold mb-4">Respostas</h3>
    <div class="space-y-4">
        @foreach($comment->replies as $reply)
        <div class="panel forum-comment px-4 py-4 transition-colors duration-300 bg-card-default/60 relative">
            <div class="flex">
                <div class="mr-5 hidden md:block">
                    <a href="{{ route('perfil.show', $reply->user) }}" class="relative flex items-start mb-2">
                        <img src="{{ $reply->user->profile_photo_url }}" alt="{{ $reply->user->name }}" class="w-[60px] h-[60px] rounded">
                    </a>
                </div>
                
                <div class="flex-1">
                    <header class="mb-4 flex items-center justify-between">
                        <div class="flex-1">
                            <div class="flex items-center">
                                <a href="{{ route('perfil.show', $reply->user) }}" class="text-blue-400 font-bold uppercase">
                                    {{ $reply->user->name }}
                                </a>
                            </div>
                            <div class="mt-1 text-2xs text-grey-600/70">
                                {{ $reply->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </header>

                    <div class="content user-content text-sm text-grey-100">
                        {!! nl2br(e($reply->content)) !!}
                    </div>

                    <div class="mt-4 flex items-center gap-4">
                        <button class="like-button flex items-center gap-2 text-sm text-grey-600 hover:text-blue-400" data-comment-id="{{ $reply->id }}">
                            <svg width="16" height="16" viewBox="0 0 16 16" class="fill-current">
                                <path d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                            <span class="likes-count">{{ $reply->likes }}</span>
                        </button>

                        @can('update', $reply)
                        <button class="text-sm text-grey-600 hover:text-blue-400 edit-comment">
                            Editar
                        </button>
                        @endcan

                        @can('delete', $reply)
                        <form action="{{ route('comments.destroy', $reply) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm text-grey-600 hover:text-red-400">
                                Excluir
                            </button>
                        </form>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>

@push('scripts')
<script>
document.querySelectorAll('.like-button').forEach(button => {
    button.addEventListener('click', async () => {
        const commentId = button.dataset.commentId;
        const response = await fetch(`/comments/${commentId}/like`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        });
        const data = await response.json();
        button.querySelector('.likes-count').textContent = data.likes;
    });
});

document.querySelectorAll('.edit-comment').forEach(button => {
    button.addEventListener('click', function() {
        const commentDiv = this.closest('.forum-comment');
        const contentDiv = commentDiv.querySelector('.user-content');
        const content = contentDiv.textContent.trim();
        
        contentDiv.innerHTML = `
            <form class="edit-comment-form">
                <textarea class="w-full p-2 bg-card-default border border-gray-700 rounded mb-2">${content}</textarea>
                <div class="flex gap-2">
                    <button type="submit" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Salvar</button>
                    <button type="button" class="cancel-edit px-3 py-1 bg-gray-600 text-white rounded hover:bg-gray-700">Cancelar</button>
                </div>
            </form>
        `;
    });
});

document.addEventListener('click', function(e) {
    if (e.target.classList.contains('cancel-edit')) {
        const form = e.target.closest('form');
        const contentDiv = form.closest('.user-content');
        contentDiv.innerHTML = form.querySelector('textarea').value;
    }
});

document.addEventListener('submit', async function(e) {
    if (e.target.classList.contains('edit-comment-form')) {
        e.preventDefault();
        const form = e.target;
        const commentDiv = form.closest('.forum-comment');
        const commentId = commentDiv.id.replace('comment-', '');
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
                const contentDiv = form.closest('.user-content');
                contentDiv.innerHTML = content;
            }
        } catch (error) {
            console.error('Error updating comment:', error);
        }
    }
});
</script>
@endpush
</x-app-layout>