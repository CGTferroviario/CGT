<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">COMUNICADOS</h1>
        <div class="fondo comunicados">
            <div class="md:w-1/2 sm:w-full mx-auto">
                <x-buscador :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
            </div>
            
            <div class="w-full px-8">{{ $comunicados->onEachSide(2)->links() }}</div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">

                @foreach ($comunicados as $comunicado)
                    <x-comunicado :comunicado=$comunicado></x-comunicado>
                @endforeach
            </div>
            <div class="w-full paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
        </div>
    @endsection
</x-publico-layout>
