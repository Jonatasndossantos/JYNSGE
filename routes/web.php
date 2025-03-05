<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;

// Public routes
Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () { return view('sobre'); });
Route::get('/termos', function () { return view('termos'); });
Route::get('/topicos', function () { return view('todosTopicos'); });

// Topic routes
Route::prefix('topicos')->group(function () {
    Route::get('/5g', function () { return view('topicos.5g'); });
    Route::get('/acessibilidade', function () { return view('topicos.acessibilidade'); });
    Route::get('/automacao', function () { return view('topicos.automacao'); });
    Route::get('/carros', function () { return view('topicos.carros'); });
    Route::get('/casa', function () { return view('topicos.casa'); });
    Route::get('/comida', function () { return view('topicos.comida'); });
    Route::get('/criptomoedas', function () { return view('topicos.criptomoedas'); });
    Route::get('/eventos', function () { return view('topicos.eventos'); });
    Route::get('/inteligenciaArtificial', function () { return view('topicos.inteligenciaArtificial'); });
    Route::get('/jogos', function () { return view('topicos.jogos'); });
    Route::get('/robotica', function () { return view('topicos.robotica'); });
    Route::get('/saude', function () { return view('topicos.saude'); });
    Route::get('/space', function () { return view('topicos.space'); });
    Route::get('/tv', function () { return view('topicos.tv'); });
    Route::get('/vr', function () { return view('topicos.vr'); });
});

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () { return view('home'); })->name('home');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // News routes
    Route::resource('noticias', NoticiaController::class);
    
    // Category routes
    Route::resource('categorias', CategoriaController::class);
});

require __DIR__.'/auth.php';