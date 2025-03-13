<div class="bg-white rounded-lg shadow-sm p-6 mb-6">
    <div class="space-y-4 mb-6">
        <div class="flex items-start space-x-3">
            <i data-lucide="mail" class="text-gray-700 hover:text-blue-600 transition-colors mt-1 flex-shrink-0 w-5 h-5"></i>
            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="text-gray-700">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="flex items-start space-x-3">
            <i data-lucide="calendar" class="text-gray-700 hover:text-blue-600 transition-colors mt-1 flex-shrink-0 w-5 h-5"></i>
            <div>
                <p class="text-sm text-gray-500">Membro desde</p>
                <p class="text-gray-700">{{ Auth::user()->created_at->format('F d, Y') }}</p>
            </div>
        </div>
        <div class="flex items-start space-x-3">
            <i data-lucide="file-text" class="text-gray-700 hover:text-blue-600 transition-colors mt-1 flex-shrink-0 w-5 h-5"></i>
            <div class="flex-grow">
                <div class="flex justify-between items-center">
                    <p class="text-sm text-gray-500">Bio</p>
                    <div class="flex gap-2">
                        <button onclick="toggleShortBio()"
                            class="flex items-center gap-2 px-2 py-1 text-sm rounded bg-blue-100 text-blue-600 hover:bg-blue-200 transition-colors">
                            <span id="shortBioToggleText">Edit</span>
                        </button>
                        <button id="saveShortBioButton" onclick="saveShortBio()"
                            class="hidden px-2 py-1 text-sm rounded bg-green-100 text-green-600 hover:bg-green-200 transition-colors">
                            Save
                        </button>
                    </div>
                </div>
                <div id="shortBioContent" class="text-gray-700">
                    @if(isset($perfil->bio))
                        {{$perfil->bio}}
                    @else
                        Add a short bio
                    @endif
                </div>
                <textarea id="shortBioInput"
                    class="hidden w-full h-20 p-2 text-gray-700 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    maxlength="500"></textarea>
            </div>
        </div>
    </div>
</div>

<script>
function toggleShortBio() {
    const bioContent = document.getElementById('shortBioContent');
    const bioInput = document.getElementById('shortBioInput');
    const saveButton = document.getElementById('saveShortBioButton');
    const toggleText = document.getElementById('shortBioToggleText');

    if (bioInput.classList.contains('hidden')) {
        bioInput.value = bioContent.textContent.trim();
        bioInput.classList.remove('hidden');
        bioContent.classList.add('hidden');
        saveButton.classList.remove('hidden');
        toggleText.innerText = 'Cancel';
    } else {
        bioInput.classList.add('hidden');
        bioContent.classList.remove('hidden');
        saveButton.classList.add('hidden');
        toggleText.innerText = 'Edit';
    }
}

function saveShortBio() {
    const bioInput = document.getElementById('shortBioInput');
    const bioContent = document.getElementById('shortBioContent');
    
    const formData = new FormData();
    formData.append('bio', bioInput.value.trim());
    formData.append('_token', '{{ csrf_token() }}');
    formData.append('_method', 'PATCH');

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
                    const json = JSON.parse(text);
                    throw new Error(json.message || 'Error saving bio');
                } catch (e) {
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
            toggleShortBio();
        } else {
            throw new Error(data.message || 'Error saving bio');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert(error.message || 'Error saving bio');
    });
}
</script>