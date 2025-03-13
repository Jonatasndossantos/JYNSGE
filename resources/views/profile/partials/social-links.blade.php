{{-- Seção principal de links sociais --}}
<div class="bg-white rounded-lg shadow-sm p-6 mb-6">
    <h2 class="text-lg font-semibold mb-4">Connect</h2>
    
    {{-- Container para lista de links sociais --}}
    <div class="flex flex-col gap-3">
        @php
            // Processa os dados sociais do perfil
            // Se vier como string JSON, converte para array
            $sociaisData = $perfil->sociais;
            if (!empty($sociaisData)) {
                if (is_string($sociaisData)) {
                    $sociaisData = json_decode($sociaisData, true);
                }
            }
        @endphp

        {{-- Exibe os links sociais se existirem --}}
        @if(!empty($sociaisData) && is_array($sociaisData))
            @foreach($sociaisData as $social)
                <a href="{{ $social['url'] }}"
                    class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors"
                    target="_blank" 
                    rel="noopener noreferrer">
                    <i data-lucide="{{ strtolower($social['platform']) }}" class="w-5 h-5"></i>
                    {{ ucfirst($social['platform']) }}
                </a>
            @endforeach
            <div class="text-center py-4">
                <p class="text-gray-500">No social links added yet</p>
                <button onclick="openSocialLinksModal()" 
                    class="mt-2 text-blue-600 hover:text-blue-700 transition-colors">
                    Add Social Links
                </button>
            </div>
        {{-- Mensagem quando não há links sociais --}}
        @else
            <div class="text-center py-4">
                <p class="text-gray-500">No social links added yet</p>
                <button onclick="openSocialLinksModal()" 
                    class="mt-2 text-blue-600 hover:text-blue-700 transition-colors">
                    Add Social Links
                </button>
            </div>
        @endif
    </div>
</div>

{{-- Modal para gerenciar links sociais --}}
<div id="socialLinksModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg w-full max-w-md">
        <h2 class="text-lg font-bold mb-4">Manage Social Links</h2>

        {{-- Formulário de atualização usando Laravel routes --}}
        <form id="socialLinksForm" action="{{ route('perfil.update', $perfil) }}" method="POST">
            @csrf
            @method('PATCH')
            
            {{-- Container dinâmico para campos de links sociais --}}
            <div id="socialLinksContainer" class="space-y-4">
                @if(!empty($sociaisData) && is_array($sociaisData))
                    @foreach($sociaisData as $index => $social)
                        <div class="flex items-center gap-3">
                            <select name="socials[{{ $index }}][platform]" class="flex-1 border rounded p-2">
                                @foreach(['github' => 'GitHub', 'twitter' => 'Twitter', 'linkedin' => 'LinkedIn', 'instagram' => 'Instagram'] as $value => $label)
                                    <option value="{{ $value }}" {{ $social['platform'] == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <input type="url" 
                                name="socials[{{ $index }}][url]" 
                                value="{{ $social['url'] }}"
                                placeholder="https://" 
                                class="flex-2 border rounded p-2"
                                required>
                            <button type="button" 
                                onclick="removeSocialLinkField(this)"
                                class="text-red-500 hover:text-red-600">
                                <i data-lucide="trash-2" class="w-5 h-5"></i>
                            </button>
                        </div>
                    @endforeach
                @endif
            </div>

            {{-- Botões de ação do formulário --}}
            <button type="button" 
                onclick="addSocialLinkField()"
                class="mt-4 w-full py-2 px-4 border border-blue-500 text-blue-500 rounded hover:bg-blue-50 transition-colors">
                Add Another Link
            </button>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" 
                    onclick="closeSocialLinksModal()"
                    class="px-4 py-2 text-gray-600 hover:text-gray-700 transition-colors">
                    Cancel
                </button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Scripts JavaScript para manipulação do modal e campos --}}
<script>
// Abre o modal e adiciona um campo se não houver nenhum
function openSocialLinksModal() {
    document.getElementById('socialLinksModal').classList.remove('hidden');
    if (!document.querySelector('#socialLinksContainer div')) {
        addSocialLinkField();
    }
}

// Fecha o modal de links sociais
function closeSocialLinksModal() {
    document.getElementById('socialLinksModal').classList.add('hidden');
}

// Adiciona um novo campo de link social dinamicamente
function addSocialLinkField() {
    const container = document.getElementById('socialLinksContainer');
    const fieldIndex = container.children.length;
    
    // Template HTML para o novo campo
    const fieldHTML = `
        <div class="flex items-center gap-3">
            <select name="socials[${fieldIndex}][platform]" class="flex-1 border rounded p-2">
                <option value="github">GitHub</option>
                <option value="twitter">Twitter</option>
                <option value="linkedin">LinkedIn</option>
                <option value="instagram">Instagram</option>
            </select>
            <input type="url" 
                name="socials[${fieldIndex}][url]" 
                placeholder="https://" 
                class="flex-2 border rounded p-2"
                required>
            <button type="button" 
                onclick="removeSocialLinkField(this)"
                class="text-red-500 hover:text-red-600">
                <i data-lucide="trash-2" class="w-5 h-5"></i>
            </button>
        </div>
    `;
    
    // Insere o novo campo e atualiza os ícones
    container.insertAdjacentHTML('beforeend', fieldHTML);
    lucide.createIcons();
}

// Remove um campo de link social
function removeSocialLinkField(button) {
    button.closest('div').remove();
}
</script> 