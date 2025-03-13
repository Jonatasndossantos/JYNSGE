<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\NoticiaController;
use App\Http\Controllers\admin\CategoriaController;
use App\Http\Controllers\TopicosController;
use App\Http\Controllers\PerfilController;

// Public routes
Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () { return view('sobre'); });
Route::get('/termos', function () { return view('termos'); });


// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () { return view('home'); })->name('home');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Noticias routes
    Route::resource('admin/noticias', NoticiaController::class);
    
    // Categoria routes
    Route::resource('admin/categorias', CategoriaController::class);    
});

Route::resource('topicos', TopicosController::class);

Route::resource('perfil', PerfilController::class);

Route::post('/perfil/update-bio', [PerfilController::class, 'updateBio'])->name('perfil.update-bio');
Route::post('/perfil/update-social', [PerfilController::class, 'updateSocial'])->name('perfil.update-social');

Route::delete('/perfil/{perfil}/delete-image', [PerfilController::class, 'deleteImage'])->name('perfil.delete-image');
Route::delete('/perfil/{perfil}/delete-banner', [PerfilController::class, 'deleteBanner'])->name('perfil.delete-banner');

require __DIR__.'/auth.php';