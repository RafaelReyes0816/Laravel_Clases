@extends('Layouts.plantilla')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Bienvenido al Dashboard</h1>
        <p>¡Has iniciado sesión correctamente!</p>

        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="inline-block mt-6 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-800 transition">
            Cerrar sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection