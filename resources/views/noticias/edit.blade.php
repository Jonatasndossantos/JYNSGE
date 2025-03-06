<x-app-layout>
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  
    @auth
        <div class="min-h-[35rem] w-full bg-default text-primary">
            <div class="container mx-auto px-4 py-8">
                    <div class="flex items-center justify-between mb-8">
                        <h1 class="f-display-1 text-secondary">
                            Edit News Article
                        </h1>
                        <a href="{{ route('profile.edit') }}" 
                           class="text-gray-600 hover:text-gray-900 flex items-center space-x-1">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            <span>Back to Profile</span>
                        </a>
                    </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Article Form Section -->
                    <div class="bg-layer rounded-lg p-6 shadow-sm">
                        <form action="{{ route('noticias.update', $noticia) }}" method="POST" enctype="multipart/form-data" class="space-y-6" onsubmit="return prepareSubmission()">
                            @csrf
                            @method('PUT')

                            <div>
                                <label for="titulo" class="block f-body-2 text-secondary mb-2">Title *</label>
                                <input type="text" 
                                       name="titulo" 
                                       id="titulo" 
                                       value="{{ old('titulo', $noticia->titulo) }}"
                                       class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                       placeholder="Enter article title"
                                       required>
                            </div>

                            <div>
                                <label for="categorias" class="block f-body-2 text-secondary mb-2">Categories *</label>
                                <select name="categorias[]" 
                                        id="categorias" 
                                        class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                        multiple
                                        required>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" 
                                                data-color="{{ $categoria->cor }}"
                                                {{ in_array($categoria->id, old('categorias', $noticia->categorias->pluck('id')->toArray())) ? 'selected' : '' }}>
                                            {{ $categoria->nome }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="block f-body-2 text-secondary mb-2">Main Image</label>
                                <div class="border-2 border-dashed border-subtle rounded-lg p-6 text-center cursor-pointer hover:border-primary hover:bg-primary/5 transition" id="imageUploadContainer">
                                    <div class="image-upload-placeholder {{ $noticia->linkImg ? 'hidden' : '' }}">
                                        <svg class="w-12 h-12 mx-auto text-primary mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <p class="f-body-2 text-secondary">Click to upload or drag and drop</p>
                                        <p class="text-sm text-tertiary mt-1">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                    <img id="imagePreview" 
                                         src="{{ $noticia->linkImg ? asset('storage/' . $noticia->linkImg) : '' }}" 
                                         class="{{ $noticia->linkImg ? '' : 'hidden' }} max-h-48 mx-auto rounded-lg" 
                                         alt="Image preview">
                                    <input type="file" 
                                           name="linkImg" 
                                           id="linkImg" 
                                           class="hidden"
                                           accept="image/*">
                                </div>
                            </div>

                            <div>
                                <label for="resumo" class="block f-body-2 text-secondary mb-2">Summary *</label>
                                <textarea name="resumo" 
                                          id="resumo" 
                                          rows="3" 
                                          class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                          placeholder="Write a brief summary of your article"
                                          required>{{ old('resumo', $noticia->resumo) }}</textarea>
                            </div>

                            <div>
                                <label for="texto" class="block f-body-2 text-secondary mb-2">Full Text *</label>
                                <div id="editor" class="min-h-[300px] border border-subtle rounded-lg">
                                    {!! old('conteudo', $noticia->conteudo) !!}
                                </div>
                                <input type="hidden" name="conteudo" id="conteudoHidden">
                            </div>

                            <div>
                                <label for="dtPublicacao" class="block f-body-2 text-secondary mb-2">Publication Date *</label>
                                <input type="date" 
                                       name="dtPublicacao" 
                                       id="dtPublicacao" 
                                       value="{{ old('dtPublicacao', $noticia->published_at ? $noticia->published_at->format('Y-m-d') : '') }}"
                                       class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                       required>
                            </div>

                            <div>
                                <label for="status" class="block f-body-2 text-secondary mb-2">Status *</label>
                                <select name="status" 
                                        id="status" 
                                        class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                        required>
                                    <option value="rascunho" {{ old('status', $noticia->status) == 'rascunho' ? 'selected' : '' }}>Draft</option>
                                    <option value="publicado" {{ old('status', $noticia->status) == 'publicado' ? 'selected' : '' }}>Published</option>
                                    <option value="arquivado" {{ old('status', $noticia->status) == 'arquivado' ? 'selected' : '' }}>Archived</option>
                                </select>
                            </div>

                            <div class="flex justify-end pt-6">
                                <button type="submit" 
                                        class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Live Preview Section -->
                    <div class="bg-layer rounded-lg p-6 shadow-sm">
                        <h2 class="f-heading-5 text-secondary mb-6">Live Preview</h2>
                        
                        <div class="preview-content space-y-4">
                            <h1 id="previewTitle" class="f-heading-4 text-primary">{{ $noticia->titulo }}</h1>
                            
                            <div class="flex items-center space-x-4 text-sm">
                                <span id="previewDate" class="text-tertiary">Publication Date: {{ $noticia->published_at ? $noticia->published_at->format('d/m/Y') : 'DD/MM/YYYY' }}</span>
                                <span id="previewStatus" class="px-2 py-1 text-xs rounded-full">{{ ucfirst($noticia->status) }}</span>
                                <div id="previewCategoria" class="flex flex-wrap gap-2">
                                    @foreach($noticia->categorias as $categoria)
                                        <span class="px-2 py-1 text-xs rounded-full"
                                              style="background-color: {{ $categoria->cor }}20; color: {{ $categoria->cor }};">
                                            {{ $categoria->nome }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div id="previewImageContainer" class="bg-subtle rounded-lg flex items-center justify-center min-h-[300px]">
                                @if($noticia->linkImg)
                                    <img src="{{ asset('storage/' . $noticia->linkImg) }}" 
                                         alt="Article preview image" 
                                         class="w-full h-full object-cover rounded-lg max-h-[300px]">
                                @else
                                    <p class="text-tertiary">Image will appear here</p>
                                @endif
                            </div>
                            
                            <div id="previewSummary" class="f-body-2 text-secondary italic">
                                {{ $noticia->resumo }}
                            </div>
                            
                            <div id="previewContent" class="prose max-w-none">
                                {!! $noticia->conteudo !!}
                            </div>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="mt-6">
                        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            
            </div>
        </div>

        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <script>
            // Initialize Quill editor
            const quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{ 'header': 1 }, { 'header': 2 }],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'script': 'sub'}, { 'script': 'super' }],
                        [{ 'indent': '-1'}, { 'indent': '+1' }],
                        [{ 'size': ['small', false, 'large', 'huge'] }],
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                        [{ 'color': [] }, { 'background': [] }],
                        [{ 'font': [] }],
                        [{ 'align': [] }],
                        ['link', 'image'],
                        ['clean']
                    ]
                }
            });

            // Image upload preview
            const imageUploadContainer = document.getElementById('imageUploadContainer');
            const imageInput = document.getElementById('linkImg');
            const imagePreview = document.getElementById('imagePreview');
            const uploadPlaceholder = document.querySelector('.image-upload-placeholder');

            imageUploadContainer.addEventListener('click', () => {
                imageInput.click();
            });

            imageInput.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const imageUrl = e.target.result;
                        // Update upload area preview
                        imagePreview.src = imageUrl;
                        imagePreview.classList.remove('hidden');
                        uploadPlaceholder.classList.add('hidden');
                        
                        // Update live preview section
                        const previewImageContainer = document.getElementById('previewImageContainer');
                        previewImageContainer.innerHTML = `
                            <img src="${imageUrl}" alt="Article preview image" class="w-full h-full object-cover rounded-lg max-h-[200px]">
                        `;
                        
                        updatePreview();
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Live preview updates
            const titleInput = document.getElementById('titulo');
            const statusInput = document.getElementById('status');
            const previewTitle = document.getElementById('previewTitle');
            const previewStatus = document.getElementById('previewStatus');
            const previewContent = document.getElementById('previewContent');
            const conteudoHidden = document.getElementById('conteudoHidden');

            function updatePreview() {
                previewTitle.textContent = titleInput.value;

                const status = statusInput.value;
                previewStatus.textContent = status.charAt(0).toUpperCase() + status.slice(1);
                previewStatus.className = `px-2 py-1 text-xs rounded-full ${
                    status === 'publicado' 
                        ? 'bg-green-100 text-green-800' 
                        : status === 'arquivado'
                            ? 'bg-red-100 text-red-800'
                            : 'bg-yellow-100 text-yellow-800'
                }`;
                
                const content = quill.root.innerHTML;
                previewContent.innerHTML = content;
                conteudoHidden.value = content;

                const categoriaSelect = document.getElementById('categorias');
                const selectedCategories = Array.from(categoriaSelect.selectedOptions).map(option => {
                    return {
                        text: option.text,
                        color: option.dataset.color
                    };
                });

                const previewCategoria = document.getElementById('previewCategoria');
                
                previewCategoria.innerHTML = '';

                if (selectedCategories.length > 0) {
                    selectedCategories.forEach(cat => {
                        // Preview
                        const previewSpan = document.createElement('span');
                        previewSpan.textContent = cat.text;
                        previewSpan.className = 'px-2 py-1 text-xs rounded-full mr-2 mb-2 inline-block';
                        previewSpan.style.backgroundColor = cat.color + '20';
                        previewSpan.style.color = cat.color;
                        previewCategoria.appendChild(previewSpan);
                    });
                } else {
                    previewCategoria.textContent = 'Selecione as categorias';
                }
            }

            titleInput.addEventListener('input', updatePreview);
            statusInput.addEventListener('change', updatePreview);
            quill.on('text-change', updatePreview);

            // Function to prepare form submission
            function prepareSubmission() {
                const content = quill.root.innerHTML;
                if (!content || content.trim() === '') {
                    alert('O campo de conteúdo é obrigatório.');
                    return false;
                }
                document.getElementById('conteudoHidden').value = content;
                return true;
            }
        </script>
    @else
        <div class="container mx-auto px-4 py-8">
            <div class="text-center">
                <h2 class="f-display-2 text-secondary mb-4">Access Restricted</h2>
                <p class="f-body-2 mb-6">You need to be logged in to edit news articles.</p>
                <a href="{{ route('login') }}" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                    Login
                </a>
            </div>
        </div>
    @endauth
</x-app-layout> 