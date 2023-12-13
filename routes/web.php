<?php

use App\Http\Controllers\EntradaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\ProfileController;
use App\Models\Pelicula;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// PELÍCULAS
Route::resource('peliculas', PeliculaController::class);

Route::get('peliculas/{id}', [PeliculaController::class, 'mostrarEntradas'])->name('peliculas.entradas');

// ENTRADAS
Route::resource('entradas', EntradaController::class);

require __DIR__.'/auth.php';
