@extends('Layouts.plantilla')

@section('title', 'Clientes')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Clientes que contienen "ded" en su nombre</h1>
    <ul>
        @forelse ($clientes as $cliente)
            <li>{{ $cliente->nombre }} - {{ $cliente->email }}</li>
        @empty
            <li>No hay clientes que coincidan.</li>
        @endforelse
    </ul>
@endsection
