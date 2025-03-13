<x-app-layout>
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  
    <div class="max-w-[1600px] mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-white mb-2">Discussões da Comunidade</h1>
                    <p class="text-gray-400">Participe das conversas sobre tecnologia e inovação</p>
                </div>

                @auth
                    <a href="{{ route('noticias.create') }}" 
                       class="inline-flex justify-center items-center transition-colors duration-100 pl-12 pr-12 rounded min-h-48 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold">
                        <span class="mr-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </span>
                        Iniciar Nova Discussão
                    </a>
                @endauth
            </div>
        </div>

        <!-- Filters Section -->
        <div class="bg-gray-800/50 rounded-lg p-6 mb-8">
            <div class="flex flex-col md:flex-row justify-between gap-4">
                <!-- Left side filters -->
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('discussions.index') }}" 
                       class="px-4 py-2 rounded-full {{ request()->routeIs('discussions.index') ? 'bg-blue-600 text-white' : 'text-gray-300 hover:text-white' }}">
                        Todas as Discussões
                    </a>
                    <a href="#" class="px-4 py-2 rounded-full text-gray-300 hover:text-white hover:bg-gray-700">
                        Populares esta Semana
                    </a>
                    <a href="#" class="px-4 py-2 rounded-full text-gray-300 hover:text-white hover:bg-gray-700">
                        Sem Respostas
                    </a>
                </div>

                <!-- Right side category filter -->
                <div class="relative">
                    <select class="bg-gray-700 text-white rounded-lg px-4 py-2 w-full md:w-auto">
                        <option value="">Todas as Categorias</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Discussions List -->
        <div class="space-y-4">
            @foreach($discussions as $discussion)
                <div class="bg-gray-800/50 rounded-lg p-6 hover:bg-gray-800/70 transition-all">
                    <div class="flex gap-6">
                        <!-- Author Avatar -->
                        <div class="flex-shrink-0">
                            <img src="{{ Storage::url($discussion->user->perfil->linkImg ?? 'default-avatar.png') }}" 
                                 alt="{{ $discussion->user->name }}"
                                 class="w-12 h-12 rounded-lg object-cover">
                            <div class="mt-2 text-center">
                                <span class="text-xs text-gray-400">Level 1</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1">
                            <div class="flex items-start justify-between mb-4">
                                <div>
                                    <h2 class="text-xl font-semibold text-white hover:text-blue-400">
                                        <a href="{{ route('comments.show', $discussion) }}">
                                            {{ Str::limit($discussion->content, 100) }}
                                        </a>
                                    </h2>
                                    <div class="flex items-center gap-2 mt-2 text-sm text-gray-400">
                                        <a href="#" class="text-blue-400 hover:underline">{{ $discussion->user->name }}</a>
                                        <span>•</span>
                                        <span>{{ $discussion->created_at->diffForHumans() }}</span>
                                        @if($discussion->noticia)
                                            <span>•</span>
                                            <a href="{{ route('noticias.show', $discussion->noticia) }}" 
                                               class="text-gray-400 hover:text-blue-400">
                                                {{ Str::limit($discussion->noticia->titulo, 50) }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Stats -->
                                <div class="flex items-center gap-4">
                                    <button id="like-button-{{ $discussion->id }}"
                                            onclick="likeDiscussion({{ $discussion->id }})" 
                                            class="like-button flex items-center bg-gray-700/50 px-3 py-1 rounded-full hover:bg-gray-600/50 transition-colors cursor-pointer">
                                        <svg id="like-icon-{{ $discussion->id }}"
                                             class="w-4 h-4 mr-2 {{ $discussion->isLikedBy(auth()->user()) ? 'text-blue-400' : 'text-gray-400' }}" 
                                             fill="none" 
                                             stroke="currentColor" 
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" 
                                                  stroke-linejoin="round" 
                                                  stroke-width="2" 
                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                        </svg>
                                        <span id="likes-count-{{ $discussion->id }}">{{ $discussion->likes()->count() }}</span>
                                    </button>
                                    <div class="flex items-center bg-gray-700/50 px-3 py-1 rounded-full">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                        <span>{{ $discussion->replies->count() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $discussions->links() }}
        </div>
    </div>
</x-app-layout>

@push('scripts')
<script>
function likeDiscussion(id) {
    // Desabilita o botão durante o processamento
    const button = document.getElementById(`like-button-${id}`);
    button.disabled = true;

    fetch(`/comments/${id}/like`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        credentials: 'same-origin'
    })
    .then(response => {
        if (!response.ok) {
            if (response.status === 401) {
                window.location.href = '{{ route("login") }}';
                throw new Error('Não autenticado');
            }
            throw new Error('Erro na requisição');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            // Atualiza o contador
            const likesCount = document.getElementById(`likes-count-${id}`);
            likesCount.textContent = data.likes;
            
            // Atualiza o ícone
            const likeIcon = document.getElementById(`like-icon-${id}`);
            if (data.isLiked) {
                likeIcon.classList.remove('text-gray-400');
                likeIcon.classList.add('text-blue-400');
            } else {
                likeIcon.classList.remove('text-blue-400');
                likeIcon.classList.add('text-gray-400');
            }
        } else {
            throw new Error(data.message || 'Erro ao processar like');
        }
    })
    .catch(error => {
        console.error('Erro:', error);
        if (error.message !== 'Não autenticado') {
            alert('Erro ao processar sua curtida. Tente novamente.');
        }
    })
    .finally(() => {
        // Reabilita o botão
        button.disabled = false;
    });
}
</script>
@endpush

<style>
.like-button {
    transition: all 0.2s ease;
}

.like-button:active {
    transform: scale(0.95);
}

.like-button:disabled {
    opacity: 0.5;
    cursor: not-allowed;
}
</style>
