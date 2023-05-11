@extends('layouts.master')

@section('content')


<div class="container mx-auto">
    <div class="pt-10">
        <a href="{{ route('comunicados.index') }}" class="btn btn-secondary pb-3 transition-all py-20">
            < Atrás
        </a>
    </div>

    <h4 class="text-left sm:text-center text-2xl sm:text-4xl md:text-5xl font-bold text-gray-900 py-10 sm:py-20">
        {{ $comunicados->titulo }}
    </h4>

    <div class="block lg:flex flex-row">
        <div class="basis-9/12 text-center sm:block sm:text-left">
            <span class="text-left sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 pl-0 sm:pl-4 -mt-8 sm:-mt-0">
                
                <a
                    href=""
                    class="font-bold text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                    Creado por CGT
                </a>
                El 14-04-2023
            </span>
        </div>
    </div>

    <div class="pt-10 pb-10 text-gray-900 text-xl">
        <p class="font-bold text-2xl text-black pt-10">
            {{ $comunicados->subtitulo }}
        </p>

        <p class="text-base text-black pt-10">
            {{ $comunicados->descripcion }}
        </p>
    </div>
</div>





@endsection