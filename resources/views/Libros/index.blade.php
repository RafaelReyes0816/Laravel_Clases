@extends('Layouts.plantilla')

@section('title', 'Libros')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Aquí están los libros</h1>
    <a href="{{ route('Libros.create') }}" 
   class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition-colors duration-200 shadow">
    Crear Libro
</a>

    <div>
        <div class="mt-6">
            <ul>
                @foreach ($Libros as $Libro)
                    <li>{{ $Libro->titulo }}</li>
                    <li>{{ $Libro->autor }}</li>
                    <li>{{ $Libro->editorial }}</li>
                    <li>{{ $Libro->anio }}</li>
                    
                    <li>
                        <a href="{{ route('Libros.edit', $Libro->id) }}" class="inline-block px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition-colors duration-200">Editar</a>
                    </li>
                @endforeach
            </ul>
            <div class="mt-6">
                {{ $Libros->links()}}
            </div>
        </div>
    </div>
    
@endsection