<x-app-layout>
    
@include('layouts/header')
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    


<div class="min-h-screen bg-gray-50">
    {{-- Header Section --}}
    <div 
        class="h-70 bg-cover bg-center relative"
        style="background-image: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.9)), url('{{URL ('assets/media/24-cta-2523_ces25-topicpage-ai-robotic_3200x1600.webp')}}'); background-blend-mode: overlay;"
    >
        <div class="container mx-auto px-4">
            <div class="relative pt-25">
                <div class="absolute -bottom-16 left-4 md:left-8">
                    <div class="relative">
                        <img
                            src="{{URL ('assets/media/24-cta-2523_ces25-topicpage-ai-robotic_3200x1600.webp')}}"
                            alt=""
                            class="w-50 h-50 rounded-full border-4 border-white shadow-lg"
                        />
                        <label class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-full cursor-pointer hover:bg-blue-700 transition-colors">
                            <input
                                type="file"
                                class="hidden"
                                accept="image/*"
                                onchange="document.getElementById('profileImageForm').submit();"
                            />
                            <FaEdit class="w-4 h-4" />
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Profile Content --}}
    <div class="container mx-auto px-4 pt-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Left Column --}}
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">aaa</h1>
                    <p class="text-gray-600">aaa</p>
                    <p class="text-gray-700 mt-2">aaa</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Biography</h2>
                        <div class="flex gap-2">
                            <button
                                onclick="toggleEditBio()"
                                class="flex items-center gap-2 px-3 py-1 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 transition-colors"
                            >
                                <span id="bioToggleText">Edit</span>
                            </button>
                            <button
                                id="saveBioButton"
                                onclick="saveBio()"
                                class="hidden px-3 py-1 rounded bg-green-100 text-green-600 hover:bg-green-200 transition-colors"
                            >
                                Save
                            </button>
                        </div>
                    </div>
                    
                    <div id="bioContent" class="prose markdown-content">
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumWhat is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumWhat is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumWhat is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumWhat is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumWhat is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </div>
                    <textarea id="bioInput" class="hidden w-full h-64 p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                </div>
            </div>

            {{-- Right Column --}}
            <div>
                

                {{-- Social Links --}}
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h2 class="text-lg font-semibold mb-4">Connect</h2>
                    <div class="flex flex-col gap-3">
                        <a href="" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors" target="_blank" rel="noopener noreferrer">
                            <FaGithub class="w-5 h-5" />
                            GitHub
                        </a>
                        <a href="" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors" target="_blank" rel="noopener noreferrer">
                            <FaTwitter class="w-5 h-5" />
                            Twitter
                        </a>
                        <a href="" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors" target="_blank" rel="noopener noreferrer">
                            <FaLinkedin class="w-5 h-5" />
                            LinkedIn
                        </a>
                    </div>
                </div>

                {{-- Recent Articles --}}
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h2 class="text-lg font-semibold mb-4">Recent Articles</h2>
                    <div class="space-y-4">
                        <div class="group relative">
                            <div class="aspect-w-16 aspect-h-9 mb-2">
                                <img src="" alt="" class="rounded-lg object-cover w-full h-32" />
                            </div>
                            <h3 class="font-medium text-gray-900 group-hover:text-blue-600 transition-colors">aaa</h3>
                            <p class="text-sm text-gray-500">aaaa</p>
                            <div class="absolute top-2 right-2 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-100">
                                    <FaEdit class="w-4 h-4 text-blue-600" />
                                </button>
                                <button class="p-2 bg-white rounded-full shadow-md hover:bg-gray-100">
                                    <FaTrash class="w-4 h-4 text-red-600" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleEditBio() {
        const bioContent = document.getElementById('bioContent');
        const bioInput = document.getElementById('bioInput');
        const saveButton = document.getElementById('saveBioButton');
        const toggleText = document.getElementById('bioToggleText');

        if (bioInput.classList.contains('hidden')) {
            bioInput.value = bioContent.innerHTML; // Set the textarea value to the current bio
            bioInput.classList.remove('hidden');
            bioContent.classList.add('hidden');
            saveButton.classList.remove('hidden');
            toggleText.innerText = 'Preview';
        } else {
            bioInput.classList.add('hidden');
            bioContent.classList.remove('hidden');
            saveButton.classList.add('hidden');
            toggleText.innerText = 'Edit';
        }
    }

    function saveBio() {
        const bioInput = document.getElementById('bioInput');
        const bioContent = document.getElementById('bioContent');
        bioContent.innerHTML = bioInput.value; // Update the displayed bio
        toggleEditBio(); // Toggle back to preview mode
        // Here you would typically send the updated bio to the server via AJAX or a form submission
    }
</script>

</x-app-layout>