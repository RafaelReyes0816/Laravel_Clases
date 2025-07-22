<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexPrestamos extends Controller
{
    public function indexPrestamos()
    {
        $prestamos = \App\Models\Prestamo::with(['libro', 'cliente'])->get();
        return view('Libros.prestamos', compact('prestamos'));
    }
}
