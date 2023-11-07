<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Equipo') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentos">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
            </div>
        </div>
    </div>
</x-privado-layout>