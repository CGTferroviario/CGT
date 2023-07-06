<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Comunicados') }}
        </h2>
    </x-slot>

    @section('contenido')
        <div class="p-4 sm:ml-64 grid grid-cols-4 gap-4">
            <div class="">21</div>
            <div>01</div>
            <div>09</div>
            <div><h1>Hola</h1></div>
            
        </div>
    @endsection
    
</x-privado-layout>