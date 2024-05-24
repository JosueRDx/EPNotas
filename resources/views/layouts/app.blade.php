<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
       
        <nav class="bg-blue-500 p-4">
            <div class="container mx-auto flex justify-between items-center">
                
                <a href="{{ route('logout') }}" class="text-white font-bold text-xl" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>

                <!-- Navegación -->
                <div class="flex items-center">
                    <a href="{{ route('notes.index') }}" class="text-white mx-4">Ver Notas</a>
                    <a href="{{ route('notes.create') }}" class="text-white mx-4">Agregar Notas</a>
                </div>
            </div>
        </nav>

        <!-- Contenido -->
        <main class="container mx-auto py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-200 p-4">
            <div class="container mx-auto text-center text-gray-600">
                &copy; {{ date('Y') }} Apaza
            </div>
        </footer>
    </div>

    <!-- cierre de sesión -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</body>
</html>
