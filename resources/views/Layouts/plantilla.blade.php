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
        <h1 class="text-3xl font-bold">
            Bienvenidos a mi página web
        </h1>
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