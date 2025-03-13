<div class="relative">
    @if(isset($perfil->linkImgCover))
        <div class="h-70 bg-cover bg-center relative"
             style="background-image: linear-gradient(rgba(26, 54, 93, 0.8), rgba(26, 54, 93, 0.9)), url('{{ asset('storage/' . $perfil->linkImgCover) }}'); background-blend-mode: overlay;">
            <!-- Add edit/delete banner buttons -->
            <div class="absolute top-4 right-4 flex gap-2">
                <button onclick="openBannerUploadModal()" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                    <i class="fas fa-edit"></i> Edit Banner
                </button>
                <button onclick="deleteBanner()" 
                    class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors text-sm">
                    <i class="fas fa-trash"></i> Delete
                </button>
            </div>
        </div>
    @else
        <div onclick="openBannerUploadModal()" class="h-70 bg-gradient-to-r from-gray-100 to-gray-200 flex items-center justify-center relative  cursor-pointer">
            <div class="text-center">
                <div class="mb-4 text-gray-400">
                    <i class="fas fa-image text-6xl"></i>
                </div>
                <button onclick="openBannerUploadModal()" 
                    class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <i class="fas fa-plus"></i> Add Banner Image
                </button>
            </div>
        </div>
    @endif
    <div class="container mx-auto px-4 static">
        <div class="absolute top-30 flex">
            <div class="mb-4">
                @if(isset($perfil->linkImg))
                <img id="profileImage" src="{{ asset('storage/' . $perfil->linkImg)}}"
                alt="{{ Auth::user()->name }}"
                class="w-50 h-50 rounded-full border-4 border-white shadow-lg cursor-pointer"
                onclick="openUploadModal();" />
                @else
                <img id="profileImage"
                        src="{{ $perfil->linkImg ??'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                        alt="{{ Auth::user()->name }}"
                        class="w-50 h-50 rounded-full border-4 border-white shadow-lg cursor-pointer"
                        onclick="openUploadModal();" />
                    @endif
                </div>
                <div class="mb-4 h-10 w-10">
                    </div>
                    <div class="m-auto">
                        <h2 class="outline-none f-display-3 lg:w-12-cols font-bold text-light">{{ Auth::user()->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
        
<!-- Banner Upload Modal -->
<div id="bannerUploadModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg max-w-xl w-full">
        <h2 class="text-lg font-bold mb-4">Upload Banner Image</h2>
        <form id="bannerImageForm" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="bannerInput" class="block text-sm font-medium text-gray-700 mb-2">
                    Choose an image
                </label>
                <input type="file" 
                    id="bannerInput" 
                    name="linkImgCover" 
                    accept="image/*"
                    onchange="previewBanner(event);" 
                    class="block w-full text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700
                        hover:file:bg-blue-100"
                    required />
            </div>
            <div class="mt-4">
                <img id="bannerPreview" class="hidden max-w-full h-auto rounded-lg" />
            </div>
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" 
                    class="px-4 py-2 text-gray-600 hover:text-gray-700 transition-colors"
                    onclick="closeBannerUploadModal()">
                    Cancel
                </button>
                <button type="button" 
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors"
                    onclick="saveBanner()">
                    Save Banner
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openBannerUploadModal() {
    document.getElementById('bannerUploadModal').classList.remove('hidden');
}

function closeBannerUploadModal() {
    document.getElementById('bannerUploadModal').classList.add('hidden');
    document.getElementById('bannerInput').value = '';
    document.getElementById('bannerPreview').classList.add('hidden');
}

function previewBanner(event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        const preview = document.getElementById('bannerPreview');
        preview.src = e.target.result;
        preview.classList.remove('hidden');
    }
    reader.readAsDataURL(file);
}

function saveBanner() {
    const formData = new FormData();
    const bannerInput = document.getElementById('bannerInput');
    
    if (!bannerInput.files[0]) {
        alert('Please select an image first');
        return;
    }

    formData.append('linkImgCover', bannerInput.files[0]);
    formData.append('_token', '{{ csrf_token() }}');
    formData.append('_method', 'PATCH');

    const saveButton = document.querySelector('#bannerUploadModal button:last-child');
    const originalText = saveButton.innerHTML;
    saveButton.innerHTML = 'Saving...';
    saveButton.disabled = true;

    fetch('{{ route("perfil.update", $perfil) }}', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.reload(); // Reload page to show new banner
        } else {
            throw new Error(data.message || 'Error saving banner');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error saving banner: ' + error.message);
    })
    .finally(() => {
        saveButton.innerHTML = originalText;
        saveButton.disabled = false;
    });
}

function deleteBanner() {
    if (!confirm('Are you sure you want to delete your banner image?')) {
        return;
    }

    fetch('{{ route("perfil.delete-banner", $perfil) }}', {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.reload(); // Reload page to show default state
        } else {
            throw new Error(data.message || 'Error deleting banner');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error deleting banner: ' + error.message);
    });
}
</script>