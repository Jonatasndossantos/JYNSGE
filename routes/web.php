<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


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

Route::get('/inteligenciaArtificial', function () {
    return view('/topicos/inteligenciaArtificial');
});

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