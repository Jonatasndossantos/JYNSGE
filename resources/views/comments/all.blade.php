<x-app-layout>

@section('content')
<div class="max-w-[1600px] mx-auto">
    <div class="mb-6">
        <h1 class="text-2xl font-bold mb-2">Discussões Recentes</h1>
    </div>

    @foreach($comments as $comment)
    <div class="panel relative transition-colors duration-300 hoverable px-4 lg:px-5 mb-3">
        <div class="flex items-center py-4">
            <div class="flex-shrink-0 mr-4">
                <img src="{{ $comment->user->perfil->linkImg ?? asset('storage/default-avatar.png') }}" 
                     alt="{{ $comment->user->name }}" 
                     class="w-12 h-12 rounded-full">
            </div>
            
            <div class="flex-grow">
                <div class="flex items-center">
                    <a href="{{ route('comments.show', $comment) }}" 
                       class="text-lg font-semibold hover:text-blue-400">
                        {{ Str::limit($comment->content, 100) }}
                    </a>
                </div>
                
                <div class="text-sm text-gray-500 mt-1">
                    <span>{{ $comment->user->name }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                    <span class="mx-2">•</span>
                    <a href="{{ route('noticias.show', $comment->noticia) }}" 
                       class="hover:text-blue-400">
                        {{ Str::limit($comment->noticia->titulo, 50) }}
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-4 ml-4">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>{{ $comment->likes()->count() }}</span>
                </div>
                
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                    </svg>
                    <span>{{ $comment->replies()->count() }}</span>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="mt-6">
        {{ $comments->links() }}
    </div>
</div>
</x-app-layout>