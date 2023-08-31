<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Slider') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentacion">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <a href="{{ route('intranet.sliders.create') }}" class="p-2 hover:bg-red-500 border hover:text-white border-red-500 rounded-lg text-sm">Añadir diapositivas</a>
        </div>
    </div>
    @endsection
</x-privado-layout>