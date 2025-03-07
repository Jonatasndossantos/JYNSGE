<x-app-layout>
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
@include('layouts/header')
  
    @auth
        <div class="min-h-[35rem] w-full bg-default text-primary">
            <div class="container mx-auto px-4 py-8">
                    <x-alert/>
                    <h1 class="f-display-1 text-secondary mb-8 rounded-lg">
                        Create and Preview News Article
                    </h1>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Article Form Section -->
                        <div class="bg-layer rounded-lg p-6 shadow-sm">
                            <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6" onsubmit="return prepareSubmission()">
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
                                    <label for="categorias" class="block f-body-2 text-secondary mb-2">Categorias *</label>
                                    <div class="relative">
                                        <select name="categorias[]" 
                                                id="categorias" 
                                                class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                                multiple
                                                size="4"
                                                required>
                                            @foreach($categorias as $categoria)
                                                <option value="{{ $categoria->id }}" 
                                                        data-color="{{ $categoria->cor }}"
                                                        class="py-2 px-4 hover:bg-gray-100"
                                                        {{ in_array($categoria->id, old('categorias', [])) ? 'selected' : '' }}>
                                                    <div class="flex items-center">
                                                        <span class="w-3 h-3 rounded-full mr-2" style="background-color: {{ $categoria->cor }}"></span>
                                                        {{ $categoria->nome }}
                                                    </div>
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="mt-2 flex flex-wrap gap-2" id="selectedCategories">
                                            <!-- Selected categories will be displayed here -->
                                        </div>
                                    </div>
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
                                    <label for="resumo" class="block text-sm font-medium text-gray-700 mb-1">
                                        Summary * <span class="text-sm text-gray-500">(<span id="contadorDescricao">0</span>/500)</span>
                                    </label>
                                    <textarea 
                                        name="resumo" 
                                        id="resumo" 
                                        maxlength="500"
                                        rows="4"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('descricao') border-red-500 @enderror"
                                        placeholder="Write a brief summary of your article"
                                        required
                                        oninput="autoResize(this); atualizarContadorAvancado(this, 'contadorDescricao', 500)"
                                    >{{ old('descricao') }}</textarea>
                                    <div class="mt-1 h-1 bg-gray-200 rounded-full overflow-hidden">
                                        <div id="progressoDescricao" class="h-full bg-blue-500 transition-all duration-300" style="width: 0%"></div>
                                    </div>
                                    @error('descricao')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="texto" class="block f-body-2 text-secondary mb-2">Full Text *</label>
                                    <div id="editor" class="min-h-[300px] border border-subtle rounded-lg"></div>
                                    <input type="hidden" name="conteudo" id="conteudoHidden">
                                </div>

                                <div>
                                    <label for="dtPublicacao" class="block f-body-2 text-secondary mb-2">Publication Date *</label>
                                    <input type="date" 
                                           name="dtPublicacao" 
                                           id="dtPublicacao" 
                                           class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                           required>
                                </div>

                                <div>
                                    <label for="status" class="block f-body-2 text-secondary mb-2">Status *</label>
                                    <select name="status" 
                                            id="status" 
                                            class="w-full px-4 py-3 border border-subtle rounded-lg focus:outline-none focus:border-primary transition"
                                            required>
                                        <option value="rascunho">Draft</option>
                                        <option value="publicado">Published</option>
                                        <option value="arquivado">Archived</option>
                                    </select>
                                </div>

                                <div class="flex justify-end pt-6">
                                    <button type="submit" 
                                            class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                                        Create Article
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Live Preview Section -->
                        <div class="bg-layer rounded-lg p-6 shadow-sm">
                            <h2 class="f-heading-5 text-secondary mb-6">Live Preview</h2>
                            
                            <div class="preview-content space-y-4">
                                <h1 id="previewTitle" class="f-heading-4 text-primary">Your Article Title</h1>
                                
                                <div class="flex items-center space-x-4 text-sm">
                                    <span id="previewDate" class="text-tertiary">Publication Date: DD/MM/YYYY</span>
                                    <span id="previewStatus" class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Draft</span>
                                    <span id="previewCategoria" class="px-2 py-1 text-xs rounded-full">Select a category</span>
                                </div>
                                
                                <div id="previewImageContainer" class="bg-subtle rounded-lg flex items-center justify-center min-h-[300px]">
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
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'header': [1, 2, 3, false, 5, 6] }],
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
                            <img src="${imageUrl}" alt="Article preview image" class="w-full h-full object-cover rounded-lg max-h-[300px]">
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
            const statusInput = document.getElementById('status');
            const previewTitle = document.getElementById('previewTitle');
            const previewDate = document.getElementById('previewDate');
            const previewStatus = document.getElementById('previewStatus');
            const previewSummary = document.getElementById('previewSummary');
            const previewContent = document.getElementById('previewContent');
            const conteudoHidden = document.getElementById('conteudoHidden');

            function updatePreview() {
                previewTitle.textContent = titleInput.value || 'Your Article Title';
                previewSummary.textContent = summaryInput.value || 'Your article summary will appear here...';
                
                const date = dateInput.value ? new Date(dateInput.value) : null;
                previewDate.textContent = date 
                    ? `Publication Date: ${date.toLocaleDateString()}`
                    : 'Publication Date: DD/MM/YYYY';

                const status = statusInput.value;
                previewStatus.textContent = status.charAt(0).toUpperCase() + status.slice(1);
                previewStatus.className = `px-2 py-1 text-xs rounded-full ${
                    status === 'published' 
                        ? 'bg-green-100 text-green-800' 
                        : 'bg-yellow-100 text-yellow-800'
                }`;

                const content = quill.root.innerHTML;
                previewContent.innerHTML = content || 'Your full article content will appear here...';
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
                        const span = document.createElement('span');
                        span.textContent = cat.text;
                        span.className = 'px-2 py-1 text-xs rounded-full mr-2 mb-2 inline-block';
                        span.style.backgroundColor = cat.color + '20';
                        span.style.color = cat.color;
                        previewCategoria.appendChild(span);
                    });
                } else {
                    previewCategoria.textContent = 'Select categories';
                }
            }

            titleInput.addEventListener('input', updatePreview);
            summaryInput.addEventListener('input', updatePreview);
            dateInput.addEventListener('input', updatePreview);
            statusInput.addEventListener('change', updatePreview);
            quill.on('text-change', updatePreview);

            // Set default date to today
            const today = new Date().toISOString().split('T')[0];
            dateInput.value = today;
            updatePreview();

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
                <p class="f-body-2 mb-6">You need to be logged in to create a news article.</p>
                <a href="{{ route('login') }}" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors">
                    Login
                </a>
            </div>
        </div>
    @endauth
    <script>
// Função para auto-resize do textarea
function autoResize(textarea) {
    // Resetar a altura para calcular corretamente
    textarea.style.height = 'auto';
    
    // Definir altura mínima de 4 linhas (aproximadamente 100px)
    const minHeight = 100;
    
    // Calcular nova altura baseada no conteúdo
    const newHeight = Math.max(textarea.scrollHeight, minHeight);
    
    // Definir nova altura com uma pequena margem
    textarea.style.height = newHeight + 'px';
}
                
// Inicializar o auto-resize para textareas existentes
document.addEventListener('DOMContentLoaded', function() {
    const textareas = document.querySelectorAll('textarea');
    textareas.forEach(textarea => {
        autoResize(textarea);
        
        // Também atualizar quando a janela for redimensionada
        window.addEventListener('resize', () => autoResize(textarea));
    });
});
                
function atualizarContadorAvancado(input, contadorId, maxLength) {
    const contador = document.getElementById(contadorId);
    const progresso = document.getElementById('progresso' + contadorId.replace('contador', ''));
    const comprimento = input.value.length;
    const porcentagem = (comprimento / maxLength) * 100;
    
    contador.textContent = comprimento;
    progresso.style.width = porcentagem + '%';
    
    // Mudar cor baseado no comprimento
    if (porcentagem < 80) {
        progresso.classList.remove('bg-yellow-500', 'bg-red-500');
        progresso.classList.add('bg-blue-500');
        contador.parentElement.classList.remove('text-yellow-500', 'text-red-500');
        contador.parentElement.classList.add('text-gray-500');
    } else if (porcentagem < 90) {
        progresso.classList.remove('bg-blue-500', 'bg-red-500');
        progresso.classList.add('bg-yellow-500');
        contador.parentElement.classList.remove('text-gray-500', 'text-red-500');
        contador.parentElement.classList.add('text-yellow-500');
    } else {
        progresso.classList.remove('bg-blue-500', 'bg-yellow-500');
        progresso.classList.add('bg-red-500');
        contador.parentElement.classList.remove('text-gray-500', 'text-yellow-500');
        contador.parentElement.classList.add('text-red-500');
    }
}
                
// Inicializar contadores para campos preenchidos
document.addEventListener('DOMContentLoaded', function() {
    const campos = document.querySelectorAll('input[maxlength]');
    campos.forEach(campo => {
        const contadorId = 'contador' + campo.id.charAt(0).toUpperCase() + campo.id.slice(1);
        atualizarContadorAvancado(campo, contadorId, campo.maxlength);
    });
});
</script>
</x-app-layout>