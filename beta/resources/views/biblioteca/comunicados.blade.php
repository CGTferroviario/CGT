<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">COMUNICADOS</h1>
        <div class="fondo comunicados">
            <div class="sm:w-full md:w-2/3 mx-auto">
                <x-buscador :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
            </div>
            
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                <div class="col-span-1 md:col-span-2 lg:col-span-2 xl:col-span-3">{{ $comunicados->onEachSide(2)->links() }}</div>
                @foreach ($comunicados as $comunicado)
                    <x-comunicado :comunicado=$comunicado></x-comunicado>
                @endforeach
                <div class="col-span-3">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
            </div>
            
        </div>
    @endsection
</x-publico-layout>
