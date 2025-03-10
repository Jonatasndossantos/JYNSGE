@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pt-20">
    <h1 class="text-3xl font-bold mb-4">Editar Perfil</h1>

    <form action="{{ route('perfil.update', $perfil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="biografia" class="block text-sm font-medium text-gray-700">Biografia</label>
            <textarea id="biografia" name="biografia" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>{{ $perfil->biografia }}</textarea>
        </div>

        <div class="mb-4">
            <label for="linkImg" class="block text-sm font-medium text-gray-700">Imagem de Perfil</label>
            <input type="file" id="linkImg" name="linkImg" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" accept="image/*">
        </div>

        <div class="mb-4">
            <label for="tipoUsuario" class="block text-sm font-medium text-gray-700">Tipo de Usuário</label>
            <select id="tipoUsuario" name="tipoUsuario" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
                <option value="1" {{ $perfil->tipoUsuario ? 'selected' : '' }}>Usuário</option>
                <option value="0" {{ !$perfil->tipoUsuario ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <div class="mb-4">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Atualizar Perfil
            </button>
        </div>
    </form>
</div>
@endsection 