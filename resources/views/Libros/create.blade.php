@extends('Layouts.plantilla')

@section('title', 'Agregar Libro')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Agregar libro</h1>
    <form>
        <div class="mb-4">
            <label class="block font-semibold">Nombre</label>
            <input type="text" class="border rounded px-2 py-1 w-full" placeholder="Nombre del libro">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Autor</label>
            <input type="text" class="border rounded px-2 py-1 w-full" placeholder="Autor">
        </div>
        <div class="mb-4">
            <label class="block font-semibold">Año</label>
            <input type="number" class="border rounded px-2 py-1 w-full" placeholder="Año">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Guardar</button>
    </form>
@endsection