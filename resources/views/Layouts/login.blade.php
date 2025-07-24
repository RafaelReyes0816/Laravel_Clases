<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Iniciar sesión')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <main class="w-full">
        @yield('content')
    </main>
    @stack('scripts')
</body>
</html>
