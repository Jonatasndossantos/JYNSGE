<!-- resources/views/admin/perfils/index.blade.php -->
<x-app-layout>
<script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  
    <div class="py-12 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-900 dark:to-indigo-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white dark:bg-gray-800 rounded-lg p-6 shadow-lg">
                <div>
                    <h1 class="text-2xl font-semibold text-indigo-600 dark:text-indigo-400">Gerenciamento de Perfis</h1>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Gerencie os perfis e permissões dos usuários</p>
                </div>
                
                <!-- Search and Filter Section -->
                <div class="mt-4 sm:mt-0 flex flex-col sm:flex-row gap-4">
                    <div class="relative">
                        <input type="text" 
                               placeholder="Buscar perfis..." 
                               class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 w-full sm:w-64"
                               id="searchInput">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    
                    <select id="typeFilter" class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                        <option value="">Todos os Tipos</option>
                        <option value="1">Administrador</option>
                        <option value="0">Usuário Padrão</option>
                    </select>
                </div>
            </div>

            <!-- Profile Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($perfils as $perfil)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 profile-card border border-gray-200 dark:border-gray-700">
                        <div class="relative">
                            <!-- Profile Banner -->
                            <div class="h-32 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
                                @if($perfil->linkImgCover)
                                    <img src="{{ Storage::url($perfil->linkImgCover) }}" 
                                         alt="Banner do Perfil"
                                         class="w-full h-full object-cover">
                                @endif
                            </div>
                            
                            <!-- Profile Image -->
                            <div class="absolute bottom-0 left-6 transform translate-y-1/2">
                                <div class="w-24 h-24 rounded-full border-4 border-white dark:border-gray-800 overflow-hidden bg-gradient-to-r from-indigo-200 to-purple-200">
                                    @if($perfil->linkImg)
                                        <img src="{{ Storage::url($perfil->linkImg) }}" 
                                             alt="Imagem do Perfil"
                                             class="w-full h-full object-cover">
                                    @else
                                        <svg class="w-full h-full text-gray-400 p-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Profile Content -->
                        <div class="pt-16 p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 profile-name">
                                        {{ $perfil->user->name ?? 'Usuário Desconhecido' }}
                                    </h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 profile-type" data-type="{{ $perfil->tipoUser }}">
                                        {{ $perfil->tipoUser ? 'Administrador' : 'Usuário Padrão' }}
                                    </p>
                                </div>
                                
                                <!-- Status Badge with Edit Button -->
                                <div class="flex items-center space-x-2">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full {{ $perfil->tipoUser ? 'bg-indigo-100 text-indigo-800' : 'bg-purple-100 text-purple-800' }}">
                                        {{ $perfil->tipoUser ? 'Admin' : 'Usuário' }}
                                    </span>
                                    <button onclick="openEditModal({{ $perfil->id }}, {{ $perfil->tipoUser }})" 
                                            class="text-xs px-2 py-1 rounded bg-indigo-100 hover:bg-indigo-200 text-indigo-700 dark:bg-indigo-700 dark:hover:bg-indigo-600 dark:text-indigo-200 transition-colors duration-200">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Bio -->
                            <p class="mt-4 text-sm text-gray-600 dark:text-gray-300 line-clamp-3 profile-bio">
                                {{ $perfil->bio ?? 'Biografia não disponível' }}
                            </p>

                            <!-- Action Buttons -->
                            <div class="mt-6 flex justify-end space-x-3">
                                <a href="{{ route('admin.perfils.edit', $perfil->id) }}" 
                                   class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Editar
                                </a>
                                
                                <form action="{{ route('admin.perfils.destroy', $perfil->id) }}" 
                                      method="POST" 
                                      class="inline-block"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este perfil?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all duration-200">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full">
                        <div class="text-center py-12 bg-white dark:bg-gray-800 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700">
                            <svg class="mx-auto h-12 w-12 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nenhum perfil encontrado</h3>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Comece criando um novo perfil.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($perfils->hasPages())
                <div class="mt-6">
                    {{ $perfils->links() }}
                </div>
            @endif
        </div>
    </div>

    <!-- Edit User Type Modal -->
    <div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full" style="z-index: 50;">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white dark:bg-gray-800">
            <div class="mt-3">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-100">Editar Tipo de Usuário</h3>
                <div class="mt-4">
                    <form id="editTypeForm" class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Tipo de Usuário
                            </label>
                            <select id="editTipoUser" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                <option value="0">Usuário Padrão</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="closeEditModal()" 
                                    class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                                Cancelar
                            </button>
                            <button type="submit" 
                                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Search and filter functionality
            const searchInput = document.getElementById('searchInput');
            const typeFilter = document.getElementById('typeFilter');
            const editModal = document.getElementById('editModal');
            const editTypeForm = document.getElementById('editTypeForm');
            const editTipoUser = document.getElementById('editTipoUser');
            let currentPerfilId = null;

            function filterProfiles() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedType = typeFilter.value;
                
                document.querySelectorAll('.profile-card').forEach(card => {
                    const name = card.querySelector('.profile-name').textContent.toLowerCase();
                    const bio = card.querySelector('.profile-bio').textContent.toLowerCase();
                    const type = card.querySelector('.profile-type').dataset.type;
                    
                    const matchesSearch = name.includes(searchTerm) || bio.includes(searchTerm);
                    const matchesType = !selectedType || type === selectedType;
                    
                    card.style.display = (matchesSearch && matchesType) ? '' : 'none';
                });
            }

            window.openEditModal = function(perfilId, currentType) {
                currentPerfilId = perfilId;
                editTipoUser.value = currentType ? "1" : "0";
                editModal.classList.remove('hidden');
            }

            window.closeEditModal = function() {
                editModal.classList.add('hidden');
                currentPerfilId = null;
            }

            editTypeForm.addEventListener('submit', async (e) => {
                e.preventDefault();
                
                if (!currentPerfilId) return;

                try {
                    const response = await fetch(`/admin/perfils/${currentPerfilId}/toggle-type`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({ 
                            tipoUser: editTipoUser.value === "1"
                        })
                    });

                    if (response.ok) {
                        window.location.reload();
                    } else {
                        const data = await response.json();
                        alert(data.message || 'Erro ao alterar o tipo de usuário. Tente novamente.');
                    }
                } catch (error) {
                    console.error('Erro:', error);
                    alert('Erro ao alterar o tipo de usuário. Tente novamente.');
                }
            });

            // Close modal when clicking outside
            editModal.addEventListener('click', (e) => {
                if (e.target === editModal) {
                    closeEditModal();
                }
            });

            // Add event listeners for search and filter
            if (searchInput) searchInput.addEventListener('input', filterProfiles);
            if (typeFilter) typeFilter.addEventListener('change', filterProfiles);
        });
    </script>
</x-app-layout>