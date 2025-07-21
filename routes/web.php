<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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

//Clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');