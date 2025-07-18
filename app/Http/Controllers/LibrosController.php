<?php

namespace App\Http\Controllers;


use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    //
    public function index()
    {
        $Libros = Libro::whereBetween('anio', [2000, 2020])->paginate(10);
        return view ('Libros/index', compact('Libros'));
    }

    public function create ()
    {
        return view('Libros/create');
    }
}
