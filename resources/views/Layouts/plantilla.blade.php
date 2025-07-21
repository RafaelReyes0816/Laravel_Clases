<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Mi sitio web')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <h1 class="text-3xl font-bold mb-2 md:mb-0">
                Bienvenidos a mi página web
            </h1>
            <nav class="flex space-x-2">
                <a href="/" class="px-4 py-2 bg-blue-800 hover:bg-blue-900 rounded transition font-semibold">Inicio</a>
                <a href="{{ route('Libros.index') }}" class="px-4 py-2 bg-blue-700 hover:bg-blue-900 rounded transition font-semibold">Libros</a>
                <a href="{{ route('Libros.create') }}" class="px-4 py-2 bg-white text-blue-700 hover:bg-blue-100 border border-blue-700 rounded transition font-semibold">Agregar Libro</a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-3">
        <small>&copy; {{ date('Y') }} Mi sitio web</small>
    </footer>

    @stack('scripts')
</body>
</html>