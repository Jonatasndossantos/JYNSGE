@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header Section -->
    <div class="h-64 bg-cover bg-center relative"
        style="background-image: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.9)), url('{{ $user->profileImage }}'); background-blend-mode: overlay;">
        <div class="container mx-auto px-4">
            <div class="relative pt-32">
                <div class="absolute -bottom-16 left-4 md:left-8">
                    <div class="relative">
                        <img src="{{ $user->profileImage }}" alt="{{ $user->fullName }}"
                            class="w-32 h-32 rounded-full border-4 border-white shadow-lg" />
                        <label
                            class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700 transition-colors">
                            <input type="file" class="hidden" accept="image/*" onchange="handleImageUpload(event)" />
                            <i class="fas fa-edit"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Content -->
    <div class="container mx-auto px-4 pt-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">{{ $user->fullName }}</h1>
                    <p class="text-gray-600">@{{ $user->username }}</p>
                    <p class="text-gray-700 mt-2">{{ $user->shortBio }}</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Biography</h2>
                        <div class="flex gap-2">
                            <button onclick="toggleEditBio()"
                                class="flex items-center gap-2 px-3 py-1 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 transition-colors">
                                <i class="fas fa-markdown"></i> Edit
                            </button>
                            <button id="saveBioButton" onclick="saveBio()"
                                class="hidden px-3 py-1 rounded bg-green-100 text-green-600 hover:bg-green-200 transition-colors">
                                Save
                            </button>
                        </div>
                    </div>

                    <div id="bioContent" class="prose markdown-content">
                        {!! $user->bio !!}
                    </div>
                    <textarea id="bioInput"
                        class="hidden w-full h-64 p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <!-- Stats Cards -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h2 class="text-lg font-semibold mb-4">Statistics</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">{{ $user->stats->articlesPublished }}</div>
                            <div class="text-sm text-gray-600">Articles</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">{{ $user->stats->followers }}</div>
                            <div class="text-sm text-gray-600">Followers</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600">{{ $user->stats->following }}</div>
                            <div class="text-sm text-gray-600">Following</div>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <div class="text-sm font-medium text-blue-600">{{
                                \Carbon\Carbon::parse($user->stats->createdAt)->format('M Y') }}</div>
                            <div class="text-sm text-gray-600">Joined</div>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h2 class="text-lg font-semibold mb-4">Connect</h2>
                    <div class="flex flex-col gap-3">
                        <a href="{{ $user->socials->github }}"
                            class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                            target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                        <a href="{{ $user->socials->twitter }}"
                            class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                            target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                        <a href="{{ $user->socials->linkedin }}"
                            class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                            target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                    </div>
                </div>

                <!-- Recent Articles -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h2 class="text-lg font-semibold mb-4">Recent Articles</h2>
                    <div class="space-y-4">
                        @foreach ($user->articles as $article)
                        <div class="group relative">
                            <div class="aspect-w-16 aspect-h-9 mb-2">
                                <img src="{{ $article->thumbnail }}" alt="{{ $article->title }}"
                                    class="rounded-lg object-cover w-full h-32" />
                            </div>
                            <h3 class="font-medium text-gray-900 group-hover:text-blue-600 transition-colors">{{
                                $article->title }}</h3>
                            <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($article->publishedAt)->format('M
                                d, Y') }}</p>
                            <div
                                class="absolute top-2 right-2 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-100">
                                    <i class="fas fa-edit text-blue-600"></i>
                                </button>
                                <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-100">
                                    <i class="fas fa-trash text-red-600"></i>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function handleImageUpload(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onloadend = () => {
                document.querySelector('img[alt="{{ $user->fullName }}"]').src = reader.result;
            };
            reader.readAsDataURL(file);
        }
    }

    function toggleEditBio() {
        const bioContent = document.getElementById('bioContent');
        const bioInput = document.getElementById('bioInput');
        const saveBioButton = document.getElementById('saveBioButton');

        if (bioContent.classList.contains('hidden')) {
            bioContent.classList.remove('hidden');
            bioInput.classList.add('hidden');
            saveBioButton.classList.add('hidden');
        } else {
            bioContent.classList.add('hidden');
            bioInput.classList.remove('hidden');
            bioInput.value = bioContent.innerHTML;
            saveBioButton.classList.remove('hidden');
        }
    }

    function saveBio() {
        const bioInput = document.getElementById('bioInput');
        const bioContent = document.getElementById('bioContent');
        bioContent.innerHTML = bioInput.value;
        toggleEditBio();
    }
</script>
@endsection