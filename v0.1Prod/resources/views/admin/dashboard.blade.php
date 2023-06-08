{{-- <x-app-layout>
    
</x-app-layout> --}}

@extends('plantillas.principal')


@section('contenido')
{{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot> --}}

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("¡Estás logueado!") }}
            </div>
        </div>
        
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="bold text-4xl mb-4">Comunicados de: {{ Auth::user()->nombre }}</h1>
                @foreach(Auth::user()->comunicados as $comunicado)
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title bold text-3xl">{{ $comunicado->titulo }}</h2>
                            <h4 class="card-text">{{ $comunicado->subtitulo }}</h4>
                        </div>
                    </div>
                @endforeach
        </div>        
    </div>
</div>
@endsection
