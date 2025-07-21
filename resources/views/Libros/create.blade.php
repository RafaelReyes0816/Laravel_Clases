@extends('Layouts.plantilla')

@section('title', 'Agregar Libro')

@section('content')
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="text-2xl font-bold mb-4">Agregar libro</h1>
    <form action="{{ route('Libros.guardar') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold">Nombre</label>
            <input type="text" name="titulo" class="border rounded px-2 py-1 w-full" placeholder="Nombre del libro">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Autor</label>
            <input type="text" name="autor" class="border rounded px-2 py-1 w-full" placeholder="Autor">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Año</label>
            <input type="number" name="anio" class="border rounded px-2 py-1 w-full" placeholder="Año">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Editorial</label>
            <input type="text" name="editorial" class="border rounded px-2 py-1 w-full" placeholder="Editorial">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Fecha de publicación</label>
            <input type="date" name="fecha_publicacion" class="border rounded px-2 py-1 w-full" placeholder="Fecha de publicación">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">DOI</label>
            <input type="text" name="DOI" class="border rounded px-2 py-1 w-full" placeholder="DOI">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Categoría</label>
            <input type="text" name="categoria" class="border rounded px-2 py-1 w-full" placeholder="Categoría">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Estado del libro</label>
            <select name="estado_libro" class="border rounded px-2 py-1 w-full">
                <option value="1">Disponible</option>
                <option value="0">No disponible</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Registrar</button>
    </form>
@endsection