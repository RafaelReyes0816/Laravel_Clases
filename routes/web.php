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

Route::get('/Libros/crear', [LibrosController::class, 'create'])->name('Libros.create');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');