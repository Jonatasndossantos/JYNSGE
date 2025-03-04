<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

Route::get('/', function () {
    return view('home');
});
Route::get('/t', function () {
    return view('topicos.automacao');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/termos', function () {
    return view('termos');
});

Route::get('/topicos', function () {
    return view('todosTopicos');
});

Route::get('/5g', function () {
    return view('/topicos/5g');
});

Route::get('/acessibilidade', function () {
    return view('/topicos/acessibilidade');
});

Route::get('/automacao', function () {
    return view('/topicos/automacao');
});

Route::get('/carros', function () {
    return view('/topicos/carros');
});

Route::get('/casa', function () {
    return view('/topicos/casa');
});

Route::get('/comida', function () {
    return view('/topicos/comida');
});

Route::get('/criptomoedas', function () {
    return view('/topicos/criptomoedas');
});

Route::get('/eventos', function () {
    return view('/topicos/eventos');
});

Route::get('/inteligenciaArtificial', [NoticiaController::class, 'index'])->name('ia.index');

Route::get('/jogos', function () {
    return view('/topicos/jogos');
});

Route::get('/robotica', function () {
    return view('/topicos/robotica');
});

Route::get('/saude', function () {
    return view('/topicos/saude');
});

Route::get('/space', function () {
    return view('/topicos/space');
});

Route::get('/tv', function () {
    return view('/topicos/tv');
});
Route::get('/vr', function () {
    return view('/topicos/vr');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
    Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
});