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



        <!-- Estilos -->
        @include('parciales.estilo') 

    </head>
    <body class="antialiased">
        <div class="h-100">
            @include('parciales.barrasuperior')

            {{-- Page Content --}}
            <main class="pt-20">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="shadow">
                        {{ $header }}
                    </header>
                @endif            
                {{ $slot }}
                @yield('contenido')
            </main>
        </div>

        @include('parciales.pie')

        @include('parciales.scripts')

    </body>
</html>