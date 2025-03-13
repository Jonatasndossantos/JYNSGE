<!-- Biography Section -->
<div class="bg-white rounded-lg shadow-sm p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Biography</h2>
        <div class="flex gap-2">
            <button onclick="toggleEditBio()"
                class="flex items-center gap-2 px-3 py-1 rounded bg-blue-100 text-blue-600 hover:bg-blue-200 transition-colors">
                <span id="bioToggleText">Edit</span>
            </button>
            <button id="saveBioButton" onclick="saveBio()"
                class="hidden px-3 py-1 rounded bg-green-100 text-green-600 hover:bg-green-200 transition-colors">
                Save
            </button>
        </div>
    </div>

    <div id="bioContent" class="prose markdown-content">
        @if(isset($perfil->biografia))
            {{$perfil->biografia}}
        @else
            Criar uma Biografia
        @endif
    </div>
    <textarea id="bioInput"
        class="hidden w-full h-64 p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
</div>

<script>
function toggleEditBio() {
    const bioContent = document.getElementById('bioContent');
    const bioInput = document.getElementById('bioInput');
    const saveButton = document.getElementById('saveBioButton');
    const toggleText = document.getElementById('bioToggleText');

    if (bioInput.classList.contains('hidden')) {
        // Get the raw text content instead of HTML
        bioInput.value = bioContent.textContent.trim();
        bioInput.classList.remove('hidden');
        bioContent.classList.add('hidden');
        saveButton.classList.remove('hidden');
        toggleText.innerText = 'Preview';
    } else {
        bioInput.classList.add('hidden');
        bioContent.classList.remove('hidden');
        saveButton.classList.add('hidden');
        toggleText.innerText = 'Edit';
    }
}

function saveBio() {
    const bioInput = document.getElementById('bioInput');
    const bioContent = document.getElementById('bioContent');
    
    // Create form data
    const formData = new FormData();
    formData.append('biografia', bioInput.value.trim());
    formData.append('_token', '{{ csrf_token() }}');
    formData.append('_method', 'PATCH');

    // Send AJAX request
    fetch('{{ route("perfil.update", $perfil) }}', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            return response.text().then(text => {
                try {
                    // Try to parse as JSON first
                    const json = JSON.parse(text);
                    throw new Error(json.message || 'Error saving biography');
                } catch (e) {
                    // If not JSON, there might be a server error
                    console.error('Server response:', text);
                    throw new Error('Server error occurred');
                }
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            bioContent.textContent = bioInput.value.trim();
            toggleEditBio();
        } else {
            throw new Error(data.message || 'Error saving biography');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert(error.message || 'Error saving biography');
    });
}
</script> 