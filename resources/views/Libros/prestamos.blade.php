@extends('Layouts.plantilla')

@section('title', 'Préstamos')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-100 via-white to-blue-200 py-8">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-4xl border border-blue-200">
        <h1 class="text-3xl font-bold mb-6 text-blue-900 text-center">Listado de Préstamos</h1>
        <table class="min-w-full divide-y divide-blue-200">
            <thead class="bg-blue-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Libro</th>
                    <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Cliente</th>
                    <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Fecha de Préstamo</th>
                    <th class="px-4 py-2 text-left text-xs font-semibold text-blue-900 uppercase">Estado</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-blue-100">
                @foreach ($prestamos as $prestamo)
                    <tr>
                        <td class="px-4 py-2 text-black">{{ $prestamo->libro->titulo ?? 'Libro eliminado' }}</td>
                        <td class="px-4 py-2 text-black">{{ $prestamo->cliente->nombre ?? 'Cliente eliminado' }}</td>
                        <td class="px-4 py-2 text-black">{{ $prestamo->fecha_prestamo }}</td>
                        <td class="px-4 py-2 text-black">{{ ucfirst($prestamo->estado) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
