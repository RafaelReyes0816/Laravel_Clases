@extends('Layouts.plantilla')

@section('title', 'Prestar libro')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Prestar libro</h2>
    <form action="{{ route('prestamos.prestar') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="idlibro" class="block text-gray-700 font-semibold mb-2">Selecciona el libro:</label>
            <select name="idlibro" id="idlibro" class="w-full border border-gray-300 rounded px-3 py-2" required>
                <option value="">-- Selecciona un libro --</option>
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->titulo }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="idcliente" class="block text-gray-700 font-semibold mb-2">Selecciona el cliente:</label>
            <select name="idcliente" id="idcliente" class="w-full border border-gray-300 rounded px-3 py-2" required>
                <option value="">-- Selecciona un cliente --</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800 transition">Prestar libro</button>
    </form>
</div>
@endsection
