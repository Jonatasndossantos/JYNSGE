<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TopicosController;
use App\Http\Controllers\AIController;
use App\Http\Controllers\HomeController;

// Public routes
Route::get('/', function () {
    return view('home');
});

Route::get('topicos/sobre', function () { return view('sobre'); });
Route::get('topicos/termos', function () { return view('termos'); });


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

// Rota para exibir uma notícia específica
Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('topicos.noticias');

// Se você também tem rotas para tópicos, mantenha-as
Route::get('/topicos', [TopicosController::class, 'index'])->name('topicos.index');
Route::get('/topicos/{topico}', [TopicosController::class, 'show'])->name('topicos.show');

require __DIR__.'/auth.php';

Route::post('/analisar-texto', [AIController::class, 'analisarTexto']);


Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/robotica', [HomeController::class, 'robotica'])->name('robotica');
Route::get('/categoria/{categoria}', [HomeController::class, 'noticiasPorCategoria'])->name('categoria.noticias');

Route::get('/inteligenciaArtificial', [HomeController::class, 'inteligenciaArtificial'])->name('inteligenciaArtificial');
Route::get('/categoria/{categoria}', [HomeController::class, 'noticiasPorCategoria2'])->name('categoria.noticias');