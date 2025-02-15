<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CGT Ferroviario') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @include('parciales.estilo') 
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-zinc-100 dark:bg-zinc-900">
            @include('parciales.superior')

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
