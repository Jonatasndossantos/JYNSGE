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
                            <label for="descricao" class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
                            <textarea name="descricao" 
                                      id="descricao" 
                                      rows="3"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('descricao') border-red-500 @enderror">{{ old('descricao') }}</textarea>
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
</x-app-layout> 