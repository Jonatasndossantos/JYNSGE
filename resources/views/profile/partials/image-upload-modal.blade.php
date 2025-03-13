<!-- Image Upload Modal -->
<div id="uploadModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg max-w-md w-full">
        <h2 class="text-lg font-bold mb-4">Upload Profile Picture</h2>
        <form id="profileImageForm" action="{{ route('perfil.update', $perfil) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label for="imageInput" class="block text-sm font-medium text-gray-700 mb-2">
                    Choose an image
                </label>
                <input type="file" 
                    id="imageInput" 
                    name="linkImg" 
                    accept="image/*"
                    onchange="previewImage(event);" 
                    class="block w-full text-sm text-gray-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700
                        hover:file:bg-blue-100"
                    required />
            </div>
            <div class="mt-4">
                <img id="imagePreview" class="hidden max-w-full h-auto rounded-lg" />
            </div>
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" 
                    class="px-4 py-2 text-gray-600 hover:text-gray-700 transition-colors"
                    onclick="closeUploadModal();">
                    Cancel
                </button>
                <button type="button" 
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors"
                    onclick="openCropModal();">
                    Next
                </button>
            </div>
        </form>
        
        @if($perfil->linkImg)
        <button type="button" 
            onclick="deleteProfileImage()"
            class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition-colors">
            Delete Profile Picture
        </button>
        @endif 
    </div>
</div>

<!-- Crop Modal -->
<div id="cropModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg max-w-2xl w-full">
        <h2 class="text-lg font-bold mb-4">Crop Your Image</h2>
        <div class="mb-4">
            <img id="cropImage" class="max-w-full h-auto" />
        </div>
        <div class="flex justify-end space-x-3">
            <button type="button"
                class="px-4 py-2 text-gray-600 hover:text-gray-700 transition-colors"
                onclick="closeCropModal();">
                Back
            </button>
            <button type="button"
                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition-colors"
                onclick="saveCroppedImage();">
                Save
            </button>
        </div>
    </div>
</div>

<script>
let cropper;

function openUploadModal() {
    document.getElementById('uploadModal').classList.remove('hidden');
}

function closeUploadModal() {
    document.getElementById('uploadModal').classList.add('hidden');
    document.getElementById('imageInput').value = '';
    document.getElementById('imagePreview').classList.add('hidden');
}

function previewImage(event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        const preview = document.getElementById('imagePreview');
        preview.src = e.target.result;
        preview.classList.remove('hidden');
    }
    reader.readAsDataURL(file);
}

function openCropModal() {
    const image = document.getElementById('imagePreview');
    if (!image.src) {
        alert('Please select an image first');
        return;
    }

    document.getElementById('cropModal').classList.remove('hidden');
    const cropImage = document.getElementById('cropImage');
    cropImage.src = image.src;

    if (cropper) {
        cropper.destroy();
    }

    cropper = new Cropper(cropImage, {
        aspectRatio: 1,
        viewMode: 1,
        dragMode: 'move',
        autoCropArea: 1,
        restore: false,
        guides: true,
        center: true,
        highlight: false,
        cropBoxMovable: true,
        cropBoxResizable: true,
        toggleDragModeOnDblclick: false,
    });
}

function closeCropModal() {
    document.getElementById('cropModal').classList.add('hidden');
    if (cropper) {
        cropper.destroy();
    }
}

function saveCroppedImage() {
    if (!cropper) return;

    const canvas = cropper.getCroppedCanvas({
        width: 400,
        height: 400,
        fillColor: '#fff',
        imageSmoothingEnabled: true,
        imageSmoothingQuality: 'high',
    });

    canvas.toBlob(function(blob) {
        const formData = new FormData();
        formData.append('linkImg', blob, 'profile.jpg');
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('_method', 'PATCH');

        // Show loading state
        const saveButton = document.querySelector('#cropModal button:last-child');
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
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Update profile image with the new path from server
                document.getElementById('profileImage').src = data.path;
                closeCropModal();
                closeUploadModal();
                // Optional: Show success message
                alert('Profile picture updated successfully');
            } else {
                throw new Error(data.message || 'Error saving image');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error saving image: ' + error.message);
        })
        .finally(() => {
            // Restore button state
            saveButton.innerHTML = originalText;
            saveButton.disabled = false;
        });
    }, 'image/jpeg', 0.9);
}

function deleteProfileImage() {
    if (!confirm('Are you sure you want to delete your profile picture?')) {
        return;
    }

    fetch('{{ route("perfil.delete-image", $perfil) }}', {
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
            // Update the profile image to a default image or remove it
            const profileImage = document.getElementById('profileImage');
            profileImage.src = '{{ asset("images/default-profile.png") }}'; // Replace with your default image path
            alert('Profile picture deleted successfully');
        } else {
            throw new Error(data.message || 'Error deleting image');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error deleting image: ' + error.message);
    });
}
</script>
