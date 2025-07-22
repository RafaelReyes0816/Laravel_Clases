@extends('Layouts.plantilla')

@section('title', 'Agregar Libro')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-blue-200 py-8">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg border border-blue-200">
        @if(session('success'))
            <div class="bg-blue-100 text-blue-800 p-2 rounded mb-4 border border-blue-300">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-3xl font-bold mb-6 text-blue-900 text-center">Agregar libro</h1>
        <form action="{{ route('Libros.guardar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Nombre</label>
                <input type="text" name="titulo" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Nombre del libro">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Autor</label>
                <input type="text" name="autor" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Autor">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Año</label>
                <input type="number" name="anio" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Año">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Editorial</label>
                <input type="text" name="editorial" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Editorial">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Fecha de publicación</label>
                <input type="date" name="fecha_publicacion" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Fecha de publicación">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">DOI</label>
                <input type="text" name="DOI" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="DOI">
            </div>
            <div class="mb-4">
                <label class="block font-semibold text-blue-900">Categoría</label>
                <input type="text" name="categoria" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition" placeholder="Categoría">
            </div>
            <div class="mb-6">
                <label class="block font-semibold text-blue-900">Estado del libro</label>
                <select name="estado_libro" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="block font-semibold text-blue-900">Imagen del libro</label>
                <input type="file" name="imagen" accept="image/jpeg,image/png,image/jpg" class="border border-blue-300 rounded px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                <small class="text-gray-600">Formatos permitidos: JPEG, PNG, JPG. Tamaño máximo: 2MB</small>
            </div>
            <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold px-6 py-2 rounded shadow transition w-full">Registrar</button>
        </form>
    </div>
</div>
@endsection
