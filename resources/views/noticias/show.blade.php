<x-app-layout>
    @include('layouts/header')

    <div class="min-h-screen bg-gray-50">
        <main class="container mx-auto px-4 py-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Imagem Principal -->
                @if($noticia->linkImg)
                    <div class="w-full h-96 overflow-hidden">
                        <img src="{{ asset('storage/' . $noticia->linkImg) }}" 
                             alt="{{ $noticia->titulo }}"
                             class="w-full h-full object-cover">
                    </div>
                @endif

                <!-- Conteúdo -->
                <div class="p-6">
                    <!-- Categoria e Status -->
                    <div class="flex items-center space-x-4 mb-4">
                        @if($noticia->categoria)
                            <span class="px-3 py-1 rounded-full text-sm font-medium" 
                                  style="background-color: {{ $noticia->categoria->cor }}20; color: {{ $noticia->categoria->cor }};">
                                {{ $noticia->categoria->nome }}
                            </span>
                        @endif
                        <span class="px-3 py-1 rounded-full text-sm font-medium {{ 
                            $noticia->status == 'publicado' ? 'bg-green-100 text-green-800' : 
                            ($noticia->status == 'arquivado' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') 
                        }}">
                            {{ ucfirst($noticia->status) }}
                        </span>
                    </div>

                    <!-- Título -->
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $noticia->titulo }}</h1>

                    <!-- Metadados -->
                    <div class="flex items-center text-gray-500 text-sm mb-6">
                        <span>Por {{ $noticia->user->name }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ $noticia->published_at ? $noticia->published_at->format('d/m/Y H:i') : 'Não publicado' }}</span>
                    </div>

                    <!-- Conteúdo da Notícia -->
                    <div class="prose max-w-none">
                        {!! $noticia->conteudo !!}
                    </div>

                    <!-- Botões de Ação -->
                    @if(auth()->id() === $noticia->user_id)
                        <div class="mt-8 flex space-x-4">
                            <a href="{{ route('noticias.edit', $noticia) }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition">
                                <i data-lucide="edit" class="w-4 h-4 mr-2"></i>
                                Editar Notícia
                            </a>
                            <form action="{{ route('noticias.destroy', $noticia) }}" 
                                  method="POST" 
                                  class="inline-block"
                                  onsubmit="return confirm('Tem certeza que deseja excluir esta notícia?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-md transition">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-2"></i>
                                    Excluir Notícia
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</x-app-layout> 