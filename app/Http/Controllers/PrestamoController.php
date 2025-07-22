<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Cliente;

class PrestamoController extends Controller
{
    // Listar todos los préstamos
    public function index()
    {
        $prestamos = Prestamo::with(['libro', 'cliente'])->get();
        return view('prestamos.index', compact('prestamos'));
    }

    // Mostrar formulario para crear un préstamo
    public function create()
    {
        $libros = \App\Models\Libro::all();
        $clientes = \App\Models\Cliente::all();
        return view('prestamos.prestar', compact('libros', 'clientes'));
    }

    // Guardar un nuevo préstamo
    public function store(Request $request)
    {
        $request->validate([
            'idlibro' => 'required|exists:libros,id',
            'idcliente' => 'required|exists:clientes,id',
        ]);

        $prestamo = new Prestamo();
        $prestamo->idlibro = $request->input('idlibro');
        $prestamo->idcliente = $request->input('idcliente');
        $prestamo->fecha_prestamo = now();
        $prestamo->estado = 'prestado';
        $prestamo->save();

        return redirect()->route('prestamos.index')->with('success', '¡Libro prestado correctamente!');
    }
}
