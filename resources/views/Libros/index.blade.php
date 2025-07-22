@extends('Layouts.plantilla')

@section('title', 'Libros')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-100 via-white to-blue-200 py-8">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-3xl border border-blue-200">
        <h1 class="text-3xl font-bold mb-6 text-blue-900 text-center">Aquí están los libros</h1>
        <div class="flex justify-end mb-6">
            <a href="{{ route('Libros.create') }}"
                class="inline-block px-4 py-2 bg-blue-700 hover:bg-blue-900 text-white font-bold rounded shadow transition">Crear Libro</a>
        </div>
        <div>
            <table class="min-w-full divide-y divide-blue-200">
                <thead class="bg-blue-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Imagen</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Título</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Autor</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Editorial</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Año</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-blue-100">
                    @foreach ($Libros as $Libro)
                        <tr>
                            <td class="px-4 py-2">
                                @if($Libro->imagen)
                                    <img src="{{ asset('storage/' . $Libro->imagen) }}"
                                         alt="Imagen de {{ $Libro->titulo }}"
                                         class="w-16 h-20 object-cover rounded shadow">
                                @else
                                    <div class="w-16 h-20 bg-gray-200 rounded flex items-center justify-center">
                                        <span class="text-gray-500 text-xs">Sin imagen</span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-4 py-2 text-black">{{ $Libro->titulo }}</td>
                            <td class="px-4 py-2 text-black">{{ $Libro->autor }}</td>
                            <td class="px-4 py-2 text-black">{{ $Libro->editorial }}</td>
                            <td class="px-4 py-2 text-black">{{ $Libro->anio }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('Libros.edit', $Libro->id) }}" class="inline-block px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-6">
                {{ $Libros->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
