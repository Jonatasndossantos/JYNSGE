<x-app-layout>
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  
    @auth
        <div class="min-h-[35rem] w-full bg-default text-primary">
            <div class="container mx-auto px-4 py-8">
                <div class="md:w-10-cols xl:w-8-cols">
                    <h1 class="f-display-1 text-secondary mb-8">
                        Create and Preview News Article
                    </h1>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Article Form Section -->
                        <div class="bg-layer rounded-lg p-6 shadow-sm">
                            <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                                @csrf

                                <div>
                                    <label for="titulo" class="block f-body-2 text-secondary mb-2">Title *</label>
                                    <input type="text" 
                                           name="titulo" 
                                           id="titulo" 
                                           class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                           placeholder="Enter article title"
                                           required>
                                </div>

                                <div>
                                    <label class="block f-body-2 text-secondary mb-2">Main Image *</label>
                                    <div class="border-2 border-dashed border-subtle rounded-lg p-6 text-center cursor-pointer hover:border-primary hover:bg-primary/5 transition" id="imageUploadContainer">
                                        <div class="image-upload-placeholder">
                                            <svg class="w-12 h-12 mx-auto text-primary mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                            <p class="f-body-2 text-secondary">Click to upload or drag and drop</p>
                                            <p class="text-sm text-tertiary mt-1">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                        <img id="imagePreview" class="hidden max-h-48 mx-auto rounded-lg" alt="Image preview">
                                        <input type="file" 
                                               name="linkImg" 
                                               id="linkImg" 
                                               class="hidden"
                                               accept="image/*"
                                               required>
                                    </div>
                                </div>

                                <div>
                                    <label for="resumo" class="block f-body-2 text-secondary mb-2">Summary *</label>
                                    <textarea name="resumo" 
                                              id="resumo" 
                                              rows="3" 
                                              class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                              placeholder="Write a brief summary of your article"
                                              required></textarea>
                                </div>

                                <div>
                                    <label for="texto" class="block f-body-2 text-secondary mb-2">Full Text *</label>
                                    <div id="editor" class="min-h-[300px] border border-subtle rounded-lg"></div>
                                    <input type="hidden" name="texto" id="textoHidden">
                                </div>

                                <div>
                                    <label for="dtPublicacao" class="block f-body-2 text-secondary mb-2">Publication Date *</label>
                                    <input type="date" 
                                           name="dtPublicacao" 
                                           id="dtPublicacao" 
                                           class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                           required>
                                </div>

                                <div class="flex justify-end pt-6">
                                    <button type="submit" 
                                            class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                                        Publish Article
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Live Preview Section -->
                        <div class="bg-layer rounded-lg p-6 shadow-sm">
                            <h2 class="f-heading-5 text-secondary mb-6">Live Preview</h2>
                            
                            <div class="preview-content space-y-4">
                                <h1 id="previewTitle" class="f-heading-4 text-primary">Your Article Title</h1>
                                
                                <div class="text-sm text-tertiary">
                                    <span id="previewDate">Publication Date: DD/MM/YYYY</span>
                                </div>
                                
                                <div id="previewImageContainer" class="bg-subtle rounded-lg flex items-center justify-center min-h-[200px]">
                                    <p class="text-tertiary">Image will appear here</p>
                                </div>
                                
                                <div id="previewSummary" class="f-body-2 text-secondary italic">
                                    Your article summary will appear here...
                                </div>
                                
                                <div id="previewContent" class="prose max-w-none">
                                    Your full article content will appear here...
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
            const summaryInput = document.getElementById('resumo');
            const dateInput = document.getElementById('dtPublicacao');
            const previewTitle = document.getElementById('previewTitle');
            const previewDate = document.getElementById('previewDate');
            const previewSummary = document.getElementById('previewSummary');
            const previewContent = document.getElementById('previewContent');
            const textoHidden = document.getElementById('textoHidden');

            function updatePreview() {
                previewTitle.textContent = titleInput.value || 'Your Article Title';
                previewSummary.textContent = summaryInput.value || 'Your article summary will appear here...';
                
                const date = dateInput.value ? new Date(dateInput.value) : null;
                previewDate.textContent = date 
                    ? `Publication Date: ${date.toLocaleDateString()}`
                    : 'Publication Date: DD/MM/YYYY';
                
                const content = quill.root.innerHTML;
                previewContent.innerHTML = content || 'Your full article content will appear here...';
                textoHidden.value = content;
            }

            titleInput.addEventListener('input', updatePreview);
            summaryInput.addEventListener('input', updatePreview);
            dateInput.addEventListener('input', updatePreview);
            quill.on('text-change', updatePreview);

            // Set default date to today
            const today = new Date().toISOString().split('T')[0];
            dateInput.value = today;
            updatePreview();
        </script>
    @else
        <div class="container mx-auto px-4 py-8">
            <div class="text-center">
                <h2 class="f-display-2 text-secondary mb-4">Access Restricted</h2>
                <p class="f-body-2 mb-6">You need to be logged in to create a news article.</p>
                <a href="{{ route('login') }}" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                    Login
                </a>
            </div>
        </div>
    @endauth
</x-app-layout>