<x-publico-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight titular">
            {{ $categoria->nombre }}
        </h2>
    </x-slot>

    @section('contenido')
        <div class="p-8 fondo {{ $categoria->slug }}">
            <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            </div>
        </div>

    @endsection

</x-publico-layout>