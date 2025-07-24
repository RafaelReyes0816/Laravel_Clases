@extends('Layouts.login')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h1>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block font-semibold">Correo electrónico:</label>
                <input type="email" name="email" id="email" required autofocus class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-6">
                <label for="password" class="block font-semibold">Contraseña:</label>
                <input type="password" name="password" id="password" required class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-800 transition">Entrar</button>
        </form>
    </div>
@endsection 
