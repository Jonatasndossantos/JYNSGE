<x-app-layout>

    @include('layouts/header')
    <div class="min-h-screen bg-gray-50">

        <main class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Profile Section -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col items-center mb-6">
                            <div class="relative mb-4">
                                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-100">
                                    <img src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}" 
                                         alt="{{ Auth::user()->name }}" 
                                         class="w-full h-full object-cover">
                                </div>
                                <button class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 transition"
                                        aria-label="Upload profile picture">
                                    <i data-lucide="upload" class="w-4 h-4"></i>
                                </button>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                        </div>

                        <div class="space-y-4 mb-6">
                            <div class="flex items-start space-x-3">
                                <i data-lucide="mail" class="text-blue-500 mt-1 flex-shrink-0 w-5 h-5"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="text-gray-700">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i data-lucide="calendar" class="text-blue-500 mt-1 flex-shrink-0 w-5 h-5"></i>
                                <div>
                                    <p class="text-sm text-gray-500">Member Since</p>
                                    <p class="text-gray-700">{{ Auth::user()->created_at->format('F d, Y') }}</p>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="text-sm text-gray-500 mb-2">Bio</p>
                                <p class="text-gray-700">{{ Auth::user()->bio ?? 'No bio available.' }}</p>
                            </div>
                        </div>

                        <button onclick="document.getElementById('update-profile-form').scrollIntoView({behavior: 'smooth'})"
                                class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition flex items-center justify-center space-x-2">
                            <i data-lucide="edit" class="w-4 h-4"></i>
                            <span>Edit Profile</span>
                        </button>
                    </div>
                </div>

                <!-- News Articles Section -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-bold text-gray-800">My News Articles</h2>
                            <a href="{{ route('noticias.create') }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition flex items-center space-x-2">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                                <span>Create New Article</span>
                            </a>
                        </div>

                        <!-- Search and Filter -->
                        <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-4 mb-6">
                            <div class="relative flex-grow">
                                <input type="text"
                                       id="searchArticles"
                                       placeholder="Search articles..."
                                       class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i data-lucide="search" class="absolute left-3 top-2.5 text-gray-400 w-5 h-5"></i>
                            </div>
                            <div class="relative w-full md:w-48">
                                <select id="statusFilter"
                                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option value="all">All Status</option>
                                    <option value="published">Published</option>
                                    <option value="draft">Draft</option>
                                </select>
                                <i data-lucide="filter" class="absolute left-3 top-2.5 text-gray-400 w-5 h-5"></i>
                            </div>
                        </div>

                        <!-- News Articles List -->
                        <div class="space-y-4">
                            @if(isset($noticias) && count($noticias) > 0)
                                @foreach($noticias as $noticia)
                                    <div class="article-card flex items-center space-x-4 p-4 border border-gray-200 rounded-lg hover:border-blue-500 transition">
                                        <div class="flex-shrink-0 w-24 h-24">
                                            @if($noticia->linkImg)
                                                <img src="{{ asset('storage/' . $noticia->linkImg) }}" 
                                                     alt="{{ $noticia->titulo }}"
                                                     class="w-full h-full object-cover rounded-lg">
                                            @else
                                                <div class="w-full h-full bg-gray-200 rounded-lg flex items-center justify-center">
                                                    <i data-lucide="image" class="w-8 h-8 text-gray-400"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="flex-grow min-w-0">
                                            <h3 class="text-lg font-semibold text-gray-800 truncate">{{ $noticia->titulo }}</h3>
                                            <p class="text-sm text-gray-500">
                                                @if($noticia->published_at)
                                                    Published: {{ \Carbon\Carbon::parse($noticia->published_at)->format('F d, Y') }}
                                                @else
                                                    Last updated: {{ \Carbon\Carbon::parse($noticia->updated_at)->format('F d, Y') }}
                                                @endif
                                            </p>
                                            <div class="mt-2 flex items-center space-x-2">
                                                <span class="status-badge px-2 py-1 text-xs rounded-full {{ $noticia->status == 'publicado' ? 'bg-green-100 text-green-800' : ($noticia->status == 'arquivado' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                                    {{ ucfirst($noticia->status) }}
                                                </span>
                                                @if($noticia->categoria)
                                                    <span class="px-2 py-1 text-xs rounded-full" style="background-color: {{ $noticia->categoria->cor }}20; color: {{ $noticia->categoria->cor }};">
                                                        {{ $noticia->categoria->nome }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-2 flex-shrink-0">
                                            <a href="{{ route('noticias.show', $noticia) }}" 
                                               class="p-2 text-gray-500 hover:text-blue-500 transition"
                                               title="View article">
                                                <i data-lucide="eye" class="w-5 h-5"></i>
                                            </a>
                                            <a href="{{ route('noticias.edit', $noticia) }}" 
                                               class="p-2 text-gray-500 hover:text-blue-500 transition"
                                               title="Edit article">
                                                <i data-lucide="edit" class="w-5 h-5"></i>
                                            </a>
                                            <form action="{{ route('noticias.destroy', $noticia) }}" 
                                                  method="POST" 
                                                  class="inline"
                                                  onsubmit="return confirm('Are you sure you want to delete this article?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="p-2 text-gray-500 hover:text-red-500 transition"
                                                        title="Delete article">
                                                    <i data-lucide="trash-2" class="w-5 h-5"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center py-8">
                                    <div class="mb-4">
                                        <i data-lucide="newspaper" class="w-12 h-12 mx-auto text-gray-400"></i>
                                    </div>
                                    <p class="text-gray-500 mb-2">No articles found</p>
                                    <p class="text-sm text-gray-400">Create your first article by clicking the button above</p>
                                </div>
                            @endif
                        </div>

                        <!-- Pagination -->
                        @if(isset($noticias) && method_exists($noticias, 'links'))
                            <div class="mt-8">
                                {{ $noticias->links() }}
                            </div>
                        @endif
                    </div>

                    <!-- Forms Section -->
                    <div class="space-y-6">
                        <!-- Profile Information -->
                        <div id="update-profile-form" class="bg-white rounded-lg shadow-md p-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

                        <!-- Update Password -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

                        <!-- Delete Account -->
                        <div class="bg-white rounded-lg shadow-md p-6">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
            </div>
        </main>
    </div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Search and filter functionality
        const searchInput = document.getElementById('searchArticles');
        const statusFilter = document.getElementById('statusFilter');
        const articleCards = document.querySelectorAll('.article-card');

        function filterArticles() {
            const searchTerm = searchInput.value.toLowerCase();
            const status = statusFilter.value.toLowerCase();

            articleCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const statusBadge = card.querySelector('.status-badge').textContent.trim().toLowerCase();
                const summary = card.querySelector('.text-gray-500.truncate').textContent.toLowerCase();
                
                const matchesSearch = title.includes(searchTerm) || summary.includes(searchTerm);
                const matchesStatus = status === 'all' || statusBadge === status;

                card.style.display = matchesSearch && matchesStatus ? 'flex' : 'none';
            });

            // Show/hide empty state
            const visibleCards = Array.from(articleCards).filter(card => card.style.display !== 'none');
            const emptyState = document.querySelector('.text-center.py-8');
            
            if (emptyState) {
                if (visibleCards.length === 0) {
                    emptyState.style.display = 'block';
                    emptyState.querySelector('p.text-gray-500').textContent = 'No articles found matching your criteria.';
                } else {
                    emptyState.style.display = 'none';
                }
            }
        }

        if (searchInput && statusFilter) {
            searchInput.addEventListener('input', filterArticles);
            statusFilter.addEventListener('change', filterArticles);
        }
    </script>
</x-app-layout>
