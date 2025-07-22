<?php

namespace App\Http\Controllers;


use App\Models\Libro;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class LibrosController extends Controller
{
    //
    public function index()
    {
        $Libros = Libro::whereBetween('anio', [2000, 2020])->paginate(10);
        return view ('Libros/index', compact('Libros'));
    }

    //Crear libros
    public function create ()
    {
        return view('Libros/create');
    }
    public function guardar(Request $respuesta)
    {
        $respuesta->validate([
            'titulo' => 'required|min:3',
            'autor' => 'required|min:3',
            'editorial' => 'required|min:3',
            'anio' => 'required|digits:4|integer',
            'fecha_publicacion' => 'required|date',
            'DOI' => 'nullable|string',
            'categoria' => 'required|string',
            'estado_libro' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]
    );
            $datos =$respuesta->all();
            //Si hay imagen, guardarla y asiganar el path
            if($respuesta->hasFile('imagen')){
                $path = $respuesta->file('imagen')->store('imagenes', 'public');
                $datos['imagen'] = $path;
            }
            Libro::create($datos);

        Libro::create($respuesta->all());
        return redirect()->route('Libros.index')->with('success', '¡Libro registrado correctamente!');
    }

    //Editar libros
    public function edit(Libro $libro)
    {
        return view('Libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'autor' => 'required|min:3',
            'editorial' => 'required|min:3',
            'anio' => 'required|digits:4|integer',
            'fecha_publicacion' => 'required|date',
            'DOI' => 'nullable|string',
            'categoria' => 'required|string',
            'estado_libro' => 'required',
        ]);

        $libro->update($request->all());
        return redirect()->route('Libros.index')->with('success', '¡Libro actualizado correctamente!');
    }

}
