@if(isset($noticias))
<!-- Recent News Section -->
<div class="bg-white rounded-lg shadow-sm p-6">
    <h2 class="text-lg font-semibold mb-4">Recent News</h2>
    <div class="space-y-4">
        @foreach ($noticias as $noticia)
            <div class="group relative">
                <div class="aspect-w-16 aspect-h-9 mb-2">
                    @if(isset($noticia->linkImg))
                        <img src="{{ asset('storage/' . $noticia->linkImg) }}" 
                            alt="{{ $noticia->titulo }}"
                            class="rounded-lg object-cover w-full max-h-30" />
                    @endif
                </div>
                <h3 class="font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                    {{ $noticia->titulo }}
                </h3>
                <p class="text-sm text-gray-500">
                    {{ \Carbon\Carbon::parse($noticia->publishedAt)->format('M d, Y') }}
                </p>
                <div class="absolute top-2 right-2 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                    <a href="{{ route('noticias.edit', $noticia->id) }}" 
                        class="p-2 bg-white rounded-full shadow-md hover:bg-gray-100">
                        <i data-lucide="edit" class="w-4 h-4 text-blue-600"></i>
                    </a>
                    <form action="{{ route('noticias.destroy', $noticia->id) }}" 
                        method="POST" 
                        class="inline"
                        onsubmit="return confirm('Are you sure you want to delete this news item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                            class="p-2 bg-white rounded-full shadow-md hover:bg-gray-100">
                            <i data-lucide="trash-2" class="w-4 h-4 text-red-600"></i>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    @if($noticias->isEmpty())
        <div class="text-center py-8">
            <div class="mb-4">
                <i data-lucide="newspaper" class="w-12 h-12 mx-auto text-gray-400"></i>
            </div>
            <p class="text-gray-500 mb-2">No news articles yet</p>
            <a href="{{ route('noticias.create') }}" 
                class="text-blue-600 hover:text-blue-700 transition-colors">
                Create your first article
            </a>
        </div>
    @endif

    <!-- Pagination -->
    @if(method_exists($noticias, 'links'))
        <div class="mt-6">
            {{ $noticias->links() }}
        </div>
    @endif
</div>
@endif 