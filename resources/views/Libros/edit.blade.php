@extends('Layouts.plantilla')

@section('title', 'Editar Libro')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-blue-200 py-8">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg border border-blue-200">
        <h1 class="text-3xl font-bold mb-6 text-blue-900 text-center">Editar libro</h1>
        <form action="{{ route('Libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Nombre</label>
                <input type="text" name="titulo" value="{{ old('titulo', $libro->titulo) }}" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Nombre del libro">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Autor</label>
                <input type="text" name="autor" value="{{ old('autor', $libro->autor) }}" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Autor">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Año</label>
                <input type="number" name="anio" value="{{ old('anio', $libro->anio) }}" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Año">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Editorial</label>
                <input type="text" name="editorial" value="{{ old('editorial', $libro->editorial) }}" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Editorial">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Fecha de publicación</label>
                <input type="date" name="fecha_publicacion" value="{{ old('fecha_publicacion', $libro->fecha_publicacion) }}" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Fecha de publicación">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">DOI</label>
                <input type="text" name="DOI" value="{{ old('DOI', $libro->DOI) }}" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="DOI">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Categoría</label>
                <input type="text" name="categoria" value="{{ old('categoria', $libro->categoria) }}" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Categoría">
            </div>
            <div class="mb-6">
                <label class="block font-semibold text-blue-900">Estado del libro</label>
                <select name="estado_libro" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    <option value="1" {{ old('estado_libro', $libro->estado_libro) == 1 ? 'selected' : '' }}>Disponible</option>
                    <option value="0" {{ old('estado_libro', $libro->estado_libro) == 0 ? 'selected' : '' }}>No disponible</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold px-6 py-2 rounded shadow transition w-full">Actualizar</button>
        </form>
    </div>
</div>
@endsection 