<x-app-layout>

    @include('layouts/header')
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />



    <div class="min-h-screen bg-default text-primary">
        {{-- Header Section --}}
        @if(isset($perfil->linkImg))
        <div class="h-70 bg-cover bg-center relative"
            style="background-image: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.9)), url('{{ asset('storage/' . $perfil->linkImg) }}'); background-blend-mode: overlay;">
            @else
            <div class="h-70 bg-cover bg-center relative " style="background-image: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.9)),
             url(''); background-blend-mode: overlay;">

            </div><!--  -->

            @endif

            @if(isset($perfil->linkImg))
            <div class="bg-cover bg-center relative">
                <div class="container mx-auto px-4">
                    <div class="absolute top-0 left-0 right-0 flex flex-col items-center justify-center h-full">
                        <div class="mb-4">
                            <img id="profileImage"
                                src="{{ $perfil->linkImg ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                alt="{{ Auth::user()->name }}"
                                class="w-32 h-32 rounded-full border-4 border-white shadow-lg cursor-pointer"
                                onclick="openUploadModal();" />
                            <button
                                class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 transition"
                                aria-label="Upload profile picture">
                                <i data-lucide="upload" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <h2 class="outline-none f-display-3 font-bold text-light text-center">{{ Auth::user()->name }}</h2>
                    </div>
                </div>
            </div>
            @else
            <div class=" bg-cover bg-center">
                <div class="container mx-auto px-4 static">
                        <div class="absolute top-50 left-40 md:left-8 flex">
                            <div class="mb-4">
                                <img id="profileImage"
                                    src="{{ $perfil->linkImg ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                    alt="{{ Auth::user()->name }}"
                                    class="w-50 h-50 rounded-full border-4 border-white shadow-lg cursor-pointer"
                                    onclick="openUploadModal();" />
                                <button
                                    class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 transition"
                                    aria-label="Upload profile picture">
                                    <i data-lucide="upload" class="w-4 h-4"></i>
                                </button>
                            </div>
                            <div class="mb-4 h-10 w-10">
                            </div>
                            <div class="m-auto">
                                <h2 class="outline-none f-display-3 lg:w-12-cols font-bold text-light">{{ Auth::user()->name }}</h2>
                            </div>
                        </div>
                </div>
            </div>
            @endif



            {{-- Profile Content --}}
            <div class="container mx-auto px-4 pt-20">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
                    {{-- Left Column --}}
                    <div class="md:col-span-2">
                        @if(isset($perfil) && $perfil->count() > 0)
                        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                            

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
                                        <p class="text-sm text-gray-500">Membro desde</p>
                                        <p class="text-gray-700">{{ Auth::user()->created_at->format('F d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                            <h1 class="text-3xl font-bold text-gray-900">Criar um Novo Perfil</h1>
                            <form action="{{ route('perfil.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="biografia"
                                        class="block text-sm font-medium text-gray-700">Biografia</label>
                                    <textarea id="biografia" name="biografia" rows="4"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                                        required></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="linkImg" class="block text-sm font-medium text-gray-700">Imagem de
                                        Perfil</label>
                                    <input type="file" id="linkImg" name="linkImg"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                                        accept="image/*">
                                </div>

                                <div class="mb-4">
                                    <label for="tipoUser" class="block text-sm font-medium text-gray-700">Tipo de
                                        Usuário</label>
                                    <select id="tipoUser" name="tipoUser"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500"
                                        required>
                                        <option value="1">Usuário</option>
                                        <option value="0">Admin</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        Criar Perfil
                                    </button>
                                </div>
                            </form>
                        </div>
                        @endif

                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-semibold">Biography</h2>
                                <div class="flex gap-2">
                                    <button onclick="toggleEditBio()"
                                        class="flex items-center gap-2 px-3 py-1 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 transition-colors">
                                        <span id="bioToggleText">Edit</span>
                                    </button>
                                    <button id="saveBioButton" onclick="saveBio()"
                                        class="hidden px-3 py-1 rounded bg-green-100 text-green-600 hover:bg-green-200 transition-colors">
                                        Save
                                    </button>
                                </div>
                            </div>

                            <div id="bioContent" class="prose markdown-content">
                                @if(isset($perfil->biografia))
                                {{$perfil->biografia}}
                                @else
                                Criar uma Biografia
                                @endif
                            </div>
                            <textarea id="bioInput"
                                class="hidden w-full h-64 p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        </div>
                    </div>


                    {{-- Right Column --}}
                    <div>


                        {{-- Social Links --}}
                        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                            <h2 class="text-lg font-semibold mb-4">Connect</h2>
                            <div class="flex flex-col gap-3">

                                <a href=""
                                    class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                                    target="_blank" rel="noopener noreferrer">
                                    GitHub
                                </a>
                                <a href=""
                                    class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                                    target="_blank" rel="noopener noreferrer">
                                    Twitter
                                </a>
                                <a href=""
                                    class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                                    target="_blank" rel="noopener noreferrer">
                                    LinkedIn
                                </a>
                                <a href="{{ route('perfil.edit', $perfil->id) }}"
                                    class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                                    target="_blank" rel="noopener noreferrer">
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
                                    <h3 class="font-medium text-gray-900 group-hover:text-blue-600 transition-colors">
                                        aaa</h3>
                                    <p class="text-sm text-gray-500">aaaa</p>
                                    <div
                                        class="absolute top-2 right-2 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
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


            <!-- Modal for Upload -->
            <div id="uploadModal"
                class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg">
                    <h2 class="text-lg font-bold">Upload Profile Picture</h2>
                    <form id="profileImageForm" action="{{ route('perfil.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="imageInput" name="linkImg" accept="image/*"
                            onchange="previewImage(event);" required />
                        <div class="mt-4">
                            <img id="imagePreview" class="hidden" />
                        </div>
                        <button type="button" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded"
                            onclick="openCropModal();">Add</button>
                        <button type="button" class="mt-4 bg-red-600 text-white px-4 py-2 rounded"
                            onclick="closeUploadModal();">Cancel</button>
                    </form>
                </div>
            </div>

            <!-- Modal for Crop -->
            <div id="cropModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg">
                    <h2 class="text-lg font-bold">Crop Your Image</h2>
                    <img id="cropImage" />
                    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded"
                        onclick="saveCroppedImage();">Save</button>
                    <button class="mt-4 bg-red-600 text-white px-4 py-2 rounded"
                        onclick="closeCropModal();">Cancel</button>
                </div>
            </div>

            <script>
                let cropper;

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

                function openUploadModal() {
                    document.getElementById('uploadModal').classList.remove('hidden');
                }

                function closeUploadModal() {
                    document.getElementById('uploadModal').classList.add('hidden');
                    document.getElementById('imageInput').value = ''; // Reset input
                    document.getElementById('imagePreview').classList.add('hidden'); // Hide preview
                }

                function previewImage(event) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        document.getElementById('imagePreview').src = e.target.result;
                        document.getElementById('imagePreview').classList.remove('hidden');
                    }
                    reader.readAsDataURL(file);
                }

                function openCropModal() {
                    const image = document.getElementById('imagePreview');
                    if (image.src) {
                        document.getElementById('cropModal').classList.remove('hidden');
                        const cropImage = document.getElementById('cropImage');
                        cropImage.src = image.src;

                        cropper = new Cropper(cropImage, {
                            aspectRatio: 1,
                            viewMode: 1,
                        });
                    }
                }

                function closeCropModal() {
                    document.getElementById('cropModal').classList.add('hidden');
                    if (cropper) {
                        cropper.destroy();
                    }
                }

                function saveCroppedImage() {
                    const canvas = cropper.getCroppedCanvas();
                    canvas.toBlob(function (blob) {
                        const formData = new FormData();
                        formData.append('linkImg', blob);
                        formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token

                        fetch("{{ route('perfil.store') }}", {
                            method: 'POST',
                            body: formData,
                        }).then(response => {
                            if (response.ok) {
                                location.reload(); // Reload the page to see the new image
                            } else {
                                return response.text().then(text => {
                                    alert('Error saving image: ' + text); // Mostra a resposta do servidor
                                });
                            }
                        }).catch(error => {
                            console.error('Error:', error);
                        });
                    });
                }
            </script>

</x-app-layout>