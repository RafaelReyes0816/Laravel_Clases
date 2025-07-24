<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexPrestamos;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\AuthController;

//Rutas públicas
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Rutas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Libros
    Route::get('/Libros', [LibrosController::class, 'index'])->name('Libros.index');
    Route::get('/Libros/crear', [LibrosController::class, 'create'])->name('Libros.create');
    Route::post('/Libros', [LibrosController::class, 'guardar'])->name('Libros.guardar');
    Route::get('/Libros/{libro}/editar', [LibrosController::class, 'edit'])->name('Libros.edit');
    Route::put('/Libros/{libro}', [LibrosController::class, 'update'])->name('Libros.update');

    // Clientes
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

    // Préstamos
    Route::get('/prestamos/crear', [PrestamoController::class, 'create'])->name('prestamos.create');
    Route::post('/prestamos/crear', [PrestamoController::class, 'store'])->name('prestamos.store');
    Route::get('/prestamos', [indexPrestamos::class, 'indexPrestamos'])->name('prestamos.index');

    // Encuesta
    Route::get('/encuesta', [EncuestaController::class, 'create'])->name('encuesta.create');
    Route::post('/encuesta', [EncuestaController::class, 'store'])->name('encuesta.store');

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});