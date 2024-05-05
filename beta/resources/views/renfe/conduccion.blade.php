<x-publico-layout>

@section('contenido')
    <h1 class="m-0 py-3 text-center bg-renfe font-bold">CONDUCCIÓN</h1>
    <div class="fondo conduccion">
        <x-buscador :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
            @foreach ($documentos as $documento)   
                <x-documento :documento=$documento></x-documento>
            @endforeach
        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
    </div>
    </div>
@endsection

</x-publico-layout>