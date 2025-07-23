<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudadano;

class CiudadanoController extends Controller
{
    // Mostrar la tabla de resultados con buscador
    public function index(Request $request)
    {
        $query = Ciudadano::query();

        // Buscador por nombre, dirección o teléfono
        if ($request->filled('buscar')) {
            $buscar = $request->input('buscar');
            $query->where(function($q) use ($buscar) {
                $q->where('nombre', 'like', "%$buscar%")
                  ->orWhere('direccion', 'like', "%$buscar%")
                  ->orWhere('telefono', 'like', "%$buscar%");
            });
        }

        $ciudadanos = $query->paginate(10);

        return view('ciudadanos.index', compact('ciudadanos'));
    }
}
