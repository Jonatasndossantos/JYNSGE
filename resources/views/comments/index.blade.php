<x-app-layout>

@section('content')
<div class="max-w-[1600px] mx-auto">
    <div class="panel relative transition-colors duration-300 hoverable px-4 lg:px-5 mb-3 flex items-center justify-between py-4 pr-6 pl-5 gap-6">
        <div>
            <p class="font-kanit text-grey-600 text-lg font-normal pl-6 leading-tighter tracking-normal">
                <span class="mr-1 text-blue-400 absolute left-4">//</span> 
                {{ $noticia->titulo }}
            </p>
        </div>
        <div class="hidden md:flex relative text-center ml-auto md:flex-row-reverse gap-2">
            <div class="flex items-center justify-center bg-[#232c3d] py-1 px-2 min-w-[3rem]">
                <span class="text-left text-2xs font-medium leading-none">{{ $comments->total() }}</span>
            </div>
        </div>
    </div>

    @auth
    <div class="mb-6">
        <form action="{{ route('noticias.comments.store', $noticia) }}" method="POST" class="bg-card-default/60 p-4 rounded">
            @csrf
            <div class="mb-4">
                <textarea name="content" rows="3" class="w-full p-2 bg-card-default border border-gray-700 rounded" placeholder="Escreva seu comentário..."></textarea>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Comentar
            </button>
        </form>
    </div>
    @else
    <p class="text-center mb-6">
        <a href="{{ route('login') }}" class="text-blue-400 hover:underline">Faça login</a> para comentar
    </p>
    @endauth

    <div id="comments-list">
        @foreach($comments as $comment)
        <div class="panel forum-comment mb-3 px-4 py-4 transition-colors duration-300 bg-card-default/60 relative" id="comment-{{ $comment->id }}">
            <div class="flex">
                <div class="mr-5 hidden md:block">
                    <a href="{{ route('perfil.show', $comment->user) }}" class="relative flex items-start mb-2">
                        <img src="{{ $comment->user->perfil_photo_url }}" alt="{{ $comment->user->name }}" class="w-[78px] h-[78px] rounded">
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
                        
                        <a href="{{ route('comments.show', $comment) }}" class="text-sm text-grey-600 hover:text-blue-400">
                            Responder
                        </a>

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
                    </div>

                    @if($comment->replies->count() > 0)
                    <div class="mt-4 pl-4 border-l border-gray-700">
                        @foreach($comment->replies as $reply)
                        <div class="mb-4 last:mb-0">
                            <div class="flex items-start gap-3">
                                <img src="{{ $reply->user->perfil_photo_url }}" alt="{{ $reply->user->name }}" class="w-8 h-8 rounded">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('perfil.show', $reply->user) }}" class="font-semibold text-blue-400">
                                            {{ $reply->user->name }}
                                        </a>
                                        <span class="text-2xs text-grey-600/70">
                                            {{ $reply->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                    <div class="mt-1 text-sm text-grey-100">
                                        {!! nl2br(e($reply->content)) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach

        {{ $comments->links() }}
    </div>
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
</script>
@endpush
</x-app-layout>