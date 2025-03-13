<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\NoticiaController;
use App\Http\Controllers\admin\CategoriaController;
use App\Http\Controllers\TopicosController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DiscussionController;

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

Route::get('/admin/perfils', [PerfilController::class, 'adminIndex'])->name('admin.perfils.index');
Route::get('/admin/perfils/{perfil}/edit', [PerfilController::class, 'edit'])->name('admin.perfils.edit');
Route::delete('/admin/perfils/{perfil}', [PerfilController::class, 'destroy'])->name('admin.perfils.destroy');
Route::post('/admin/perfils/{perfil}/toggle-type', [PerfilController::class, 'toggleType'])->name('admin.perfils.toggle-type');

// Comment routes
Route::get('noticias/{noticia}/comments', [CommentController::class, 'index'])->name('noticias.comments.index');
Route::post('noticias/{noticia}/comments', [CommentController::class, 'store'])->name('noticias.comments.store');
Route::get('comments/{comment}', [CommentController::class, 'show'])->name('comments.show');
Route::patch('comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::post('/comments/{comment}/like', [CommentController::class, 'like'])
    ->name('comments.like')
    ->middleware('auth');
Route::post('comments/{comment}/mark-solution', [CommentController::class, 'markAsSolution'])->name('comments.mark-solution');

Route::get('/discussions', [CommentController::class, 'allComments'])->name('comments.all');

Route::get('/discussions', [DiscussionController::class, 'index'])->name('discussions.index');

Route::post('/discussions/{comment}/like', [DiscussionController::class, 'like'])
    ->name('discussions.like')
    ->middleware('auth');

require __DIR__.'/auth.php';