<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudadano;

class EncuestaController extends Controller
{
    // Mostrar el formulario de la encuesta
    public function create(Request $request)
    {
        $query = Ciudadano::query();

        // Si hay búsqueda, filtra
        if ($request->filled('buscar')) {
            $buscar = $request->input('buscar');
            $query->where(function($q) use ($buscar) {
                $q->where('nombre', 'like', "%$buscar%")
                  ->orWhere('direccion', 'like', "%$buscar%")
                  ->orWhere('telefono', 'like', "%$buscar%");
            });
        }

        $ciudadanos = $query->paginate(10);

        return view('encuesta.create', compact('ciudadanos'));
    }

    // Validar y guardar los datos del formulario
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'servicio_agua' => 'required|boolean',
            'servicio_luz' => 'required|boolean',
            'servicio_gas' => 'required|boolean',
            'servicio_internet' => 'required|boolean',
        ]);

        Ciudadano::create($validated);

        return redirect()->route('encuesta.create')->with('success', '¡Encuesta enviada correctamente!');
    }
}
