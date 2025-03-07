<x-app-layout>
    @include('layouts/header')
    
    <div class="min-h-screen bg-gray-50">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-2xl mx-auto">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">Nova Categoria</h1>
                        <a href="{{ route('categorias.index') }}" 
                           class="text-gray-600 hover:text-gray-900 flex items-center space-x-1">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            <span>Voltar</span>
                        </a>
                    </div>

                    <form action="{{ route('categorias.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome *</label>
                            <input type="text" 
                                   name="nome" 
                                   id="nome" 
                                   value="{{ old('nome') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nome') border-red-500 @enderror"
                                   required>
                            @error('nome')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">
                                Slug
                                <span class="text-gray-400">(opcional, será gerado automaticamente)</span>
                            </label>
                            <input type="text" 
                                   name="slug" 
                                   id="slug" 
                                   value="{{ old('slug') }}"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('slug') border-red-500 @enderror">
                            @error('slug')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">
                                Descrição * <span class="text-sm text-gray-500">(<span id="contadorDescricao">0</span>/500)</span>
                            </label>
                            <textarea 
                                name="descricao" 
                                id="descricao" 
                                maxlength="500"
                                rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('descricao') border-red-500 @enderror"
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
                            <label for="cor" class="block text-sm font-medium text-gray-700 mb-1">Cor *</label>
                            <div class="flex items-center space-x-2">
                                <input type="color" 
                                       name="cor" 
                                       id="cor" 
                                       value="{{ old('cor', '#3B82F6') }}"
                                       class="h-10 w-20 border border-gray-300 rounded-md cursor-pointer @error('cor') border-red-500 @enderror"
                                       required>
                                <input type="text" 
                                       id="corHex"
                                       class="w-32 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       readonly>
                            </div>
                            @error('cor')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" 
                                       name="ativo" 
                                       value="1" 
                                       {{ old('ativo', true) ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <span class="ml-2 text-sm text-gray-600">Categoria ativa</span>
                            </label>
                        </div>

                        <div class="flex justify-end pt-6">
                            <button type="submit" 
                                    class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md transition">
                                Criar Categoria
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Update hex input when color changes
        const colorInput = document.getElementById('cor');
        const hexInput = document.getElementById('corHex');

        function updateHexInput() {
            hexInput.value = colorInput.value.toUpperCase();
        }

        colorInput.addEventListener('input', updateHexInput);
        updateHexInput(); // Initial value
    </script>
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