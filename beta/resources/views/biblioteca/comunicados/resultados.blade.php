<x-publico-layout>

    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">COMUNICADOS</h1>
        <div class="fondo comunicados">

            <x-buscador :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
            
            <div class="p-2 pl-8">
                <h2 class="text-xl font-bold">Resultados de la búsqueda</h2>
            </div>
            <div class="w-full paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                @forelse ($comunicados as $comunicado)
                    <x-comunicado :comunicado=$comunicado></x-comunicado>
                @empty
                    <p>No se encontraron resultados.</p>
                @endforelse
            </div> 
            <div class="col-span-4 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>

        </div>
    @endsection

</x-publico-layout>
{{-- 
<x-publico-layout>

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Resultados de la búsqueda</h2>

        @forelse ($comunicados as $comunicado)
            <x-comunicado :comunicado=$comunicado></x-comunicado>
        @empty
            <p>No se encontraron resultados.</p>
        @endforelse
    </div>

</x-publico-layout> --}}
