<x-app-layout>
    @include('layouts/header')
    
    {{-- Required CSS and JS --}}
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />

    <div class="min-h-screen bg-default text-primary">
        {{-- Header Banner Component --}}
        @include('profile.partials.header-banner')

        {{-- Profile Content --}}
        <div class="container mx-auto px-4 pt-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Left Column --}}
                <div class="md:col-span-2">
                    {{-- Profile Information Component --}}
                    @include('profile.partials.profile-info')

                    {{-- Biography Component --}}
                    @include('profile.partials.biography')
                </div>

                {{-- Right Column --}}
                <div>
                    {{-- Social Links Component --}}
                    @include('profile.partials.social-links')

                    {{-- Recent News Component --}}
                    @include('profile.partials.recent-news')
                </div>
            </div>
        </div>

        {{-- Image Upload Modal Component --}}
        @include('profile.partials.image-upload-modal')
    </div>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</x-app-layout> 