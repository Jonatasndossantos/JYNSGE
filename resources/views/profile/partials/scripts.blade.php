<script>
// Shared variables
let cropper;
const translations = {
    confirmDelete: '{{ __("Are you sure you want to delete?") }}',
    selectImage: '{{ __("Please select an image first") }}',
    saving: '{{ __("Saving...") }}',
    success: {
        profileUpdate: '{{ __("Profile picture updated successfully") }}',
        profileDelete: '{{ __("Profile picture deleted successfully") }}',
        bannerUpdate: '{{ __("Banner updated successfully") }}',
        bannerDelete: '{{ __("Banner deleted successfully") }}'
    },
    errors: {
        networkError: '{{ __("Network response was not ok") }}',
        savingError: '{{ __("Error saving image: ") }}',
        deletingError: '{{ __("Error deleting image: ") }}'
    }
};

// Modal Controls
const modals = {
    upload: {
        open: () => document.getElementById('uploadModal').classList.remove('hidden'),
        close: () => {
            document.getElementById('uploadModal').classList.add('hidden');
            document.getElementById('imageInput').value = '';
            document.getElementById('imagePreview').classList.add('hidden');
        }
    },
    crop: {
        open: () => document.getElementById('cropModal').classList.remove('hidden'),
        close: () => {
            document.getElementById('cropModal').classList.add('hidden');
            if (cropper) cropper.destroy();
        }
    },
    banner: {
        open: () => document.getElementById('bannerUploadModal').classList.remove('hidden'),
        close: () => {
            document.getElementById('bannerUploadModal').classList.add('hidden');
            document.getElementById('bannerInput').value = '';
            document.getElementById('bannerPreview').classList.add('hidden');
        }
    }
};

// Image Preview Functions
function previewImage(event, previewId) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        const preview = document.getElementById(previewId);
        preview.src = e.target.result;
        preview.classList.remove('hidden');
    }
    reader.readAsDataURL(file);
}

// Initialize Cropper
function initCropper() {
    const image = document.getElementById('imagePreview');
    if (!image.src) {
        alert(translations.selectImage);
        return;
    }

    modals.crop.open();
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

// API Calls
async function makeRequest(url, formData, method = 'POST') {
    const response = await fetch(url, {
        method: method,
        body: formData,
        headers: {
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });

    if (!response.ok) {
        throw new Error(translations.errors.networkError);
    }

    return response.json();
}

// Save Profile Image
function saveCroppedImage() {
    if (!cropper) return;

    const canvas = cropper.getCroppedCanvas({
        width: 400,
        height: 400,
        fillColor: '#fff',
        imageSmoothingEnabled: true,
        imageSmoothingQuality: 'high',
    });

    canvas.toBlob(async function(blob) {
        const formData = new FormData();
        formData.append('linkImg', blob, 'profile.jpg');
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('_method', 'PATCH');

        const saveButton = document.querySelector('#cropModal button:last-child');
        const originalText = saveButton.innerHTML;
        saveButton.innerHTML = translations.saving;
        saveButton.disabled = true;

        try {
            const data = await makeRequest('{{ route("perfil.update", $perfil) }}', formData);
            if (data.success) {
                document.getElementById('profileImage').src = data.path;
                modals.crop.close();
                modals.upload.close();
                alert(translations.success.profileUpdate);
            }
        } catch (error) {
            console.error('Error:', error);
            alert(translations.errors.savingError + error.message);
        } finally {
            saveButton.innerHTML = originalText;
            saveButton.disabled = false;
        }
    }, 'image/jpeg', 0.9);
}

// Save Banner Image
async function saveBanner() {
    const bannerInput = document.getElementById('bannerInput');
    if (!bannerInput.files[0]) {
        alert(translations.selectImage);
        return;
    }

    const formData = new FormData();
    formData.append('linkImgCover', bannerInput.files[0]);
    formData.append('_token', '{{ csrf_token() }}');
    formData.append('_method', 'PATCH');

    const saveButton = document.querySelector('#bannerUploadModal button:last-child');
    const originalText = saveButton.innerHTML;
    saveButton.innerHTML = translations.saving;
    saveButton.disabled = true;

    try {
        const data = await makeRequest('{{ route("perfil.update", $perfil) }}', formData);
        if (data.success) {
            window.location.reload();
        }
    } catch (error) {
        console.error('Error:', error);
        alert(translations.errors.savingError + error.message);
    } finally {
        saveButton.innerHTML = originalText;
        saveButton.disabled = false;
    }
}

// Delete Functions
async function deleteImage(type) {
    if (!confirm(translations.confirmDelete)) return;

    const route = type === 'profile' 
        ? '{{ route("perfil.delete-image", $perfil) }}'
        : '{{ route("perfil.delete-banner", $perfil) }}';

    try {
        const data = await makeRequest(route, null, 'DELETE');
        if (data.success) {
            if (type === 'profile') {
                document.getElementById('profileImage').src = '{{ asset("images/default-profile.png") }}';
                alert(translations.success.profileDelete);
            } else {
                window.location.reload();
            }
        }
    } catch (error) {
        console.error('Error:', error);
        alert(translations.errors.deletingError + error.message);
    }
}

// Event Listeners
document.getElementById('imageInput').addEventListener('change', (e) => previewImage(e, 'imagePreview'));
document.getElementById('bannerInput').addEventListener('change', (e) => previewImage(e, 'bannerPreview'));
</script> 