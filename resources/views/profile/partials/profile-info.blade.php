
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
    </div>
</div>