<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="sindicato sector federal ferroviario renfe adif anarcosindicalismo trabajadores derechos">
        <meta name="description" content="Sector Federal Ferroviario - CGT"
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Sector Federal Ferroviario - CGT">

        <title>{{ config('app.name', 'CGT Ferroviario') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Estilos -->

        @include('parciales.estilo')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
        
        @include('parciales.barrasuperior')

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-red-500 shadow">
                    <div class="max-w-7xl mx-auto py-3 px-2 sm:px-3 lg:px-4 text-center">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }} 
            </main>
        </div>
    </body>
</html>