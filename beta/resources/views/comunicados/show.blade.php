<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">COMUNICADOS</h1>
        <div class="fondo comunicados">
            <x-comunicado :comunicado=$comunicado></x-comunicado>
        </div>
    @endsection
</x-publico-layout>

