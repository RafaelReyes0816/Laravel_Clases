<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexPrestamos;

//Ruteo sin controlador
/*Route::get('/', function () {
    return view('home');
});
*/

//Ruteo usando controlador
Route::get('/',HomeController::class);

//Para entrar a un archivo que esta dentro de una carpeta
Route::get('/Libros',[LibrosController::class,'index'])->name('Libros.index');

//Crear
Route::get('/Libros/crear', [LibrosController::class, 'create'])->name('Libros.create');

//Guardar dato
Route::post('/Libros', [LibrosController::class, 'guardar'])->name('Libros.guardar');

// Editar
Route::get('/Libros/{libro}/editar', [LibrosController::class, 'edit'])->name('Libros.edit');
Route::put('/Libros/{libro}', [LibrosController::class, 'update'])->name('Libros.update');

//Clientes (Es aparte esto)
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

//Mostrar formulario general para prestar un libro
Route::get('/prestamos/crear', [LibrosController::class, 'formularioPrestar'])->name('prestamos.formularioPrestar');

//Procesa el préstamo
Route::post('/prestamos/crear', [LibrosController::class, 'prestarLibro'])->name('prestamos.prestar');

//Muestra los prestamos
Route::get('/prestamos', [indexPrestamos::class, 'indexPrestamos'])->name('prestamos.index');

