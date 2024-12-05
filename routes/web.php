<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\OwnerController;

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
    Route::get('/pokemon', function () {
        return view('pokemon.begin');
    });
    Route::get('pokemon/index', [PokemonController::class, 'index']);
    Route::get('pokemon/create', [PokemonController::class, 'create']);
    Route::post('pokemon', [PokemonController::class, 'store']);
    Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
    Route::put('pokemon/{id}', [PokemonController::class, 'update']);
    Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);

    Route::get('owner/', [OwnerController::class, 'index']);
    Route::get('owner/create', [OwnerController::class, 'create']);
    Route::post('owner', [OwnerController::class, 'store']);
    Route::get('owner/{id}/edit', [OwnerController::class, 'edit']);
    Route::put('owner/{id}', [OwnerController::class, 'update']);
    Route::delete('owner/{id}', [OwnerController::class, 'destroy']);
    Route::get('owner/pokemon/{id}', [OwnerController::class, 'getPokemonByOwner']);
});

require __DIR__ . '/auth.php';
