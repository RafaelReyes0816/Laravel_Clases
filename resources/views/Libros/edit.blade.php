@extends('Layouts.plantilla')

@section('title', 'Editar Libro')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center">Editar libro</h1>
    <form action="{{ route('Libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold">Nombre</label>
            <input type="text" name="titulo" value="{{ old('titulo', $libro->titulo) }}" class="border rounded px-2 py-1 w-full" placeholder="Nombre del libro">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Autor</label>
            <input type="text" name="autor" value="{{ old('autor', $libro->autor) }}" class="border rounded px-2 py-1 w-full" placeholder="Autor">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Año</label>
            <input type="number" name="anio" value="{{ old('anio', $libro->anio) }}" class="border rounded px-2 py-1 w-full" placeholder="Año">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Editorial</label>
            <input type="text" name="editorial" value="{{ old('editorial', $libro->editorial) }}" class="border rounded px-2 py-1 w-full" placeholder="Editorial">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Fecha de publicación</label>
            <input type="date" name="fecha_publicacion" value="{{ old('fecha_publicacion', $libro->fecha_publicacion) }}" class="border rounded px-2 py-1 w-full" placeholder="Fecha de publicación">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">DOI</label>
            <input type="text" name="DOI" value="{{ old('DOI', $libro->DOI) }}" class="border rounded px-2 py-1 w-full" placeholder="DOI">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Categoría</label>
            <input type="text" name="categoria" value="{{ old('categoria', $libro->categoria) }}" class="border rounded px-2 py-1 w-full" placeholder="Categoría">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Estado del libro</label>
            <select name="estado_libro" class="border rounded px-2 py-1 w-full">
                <option value="1" {{ old('estado_libro', $libro->estado_libro) == 1 ? 'selected' : '' }}>Disponible</option>
                <option value="0" {{ old('estado_libro', $libro->estado_libro) == 0 ? 'selected' : '' }}>No disponible</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
    </form>
@endsection 