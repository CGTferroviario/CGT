<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-adif font-bold leading-tight titular">INFRAESTRUCTURA</h1>
        <div class="fondo infraestructura">
            {{-- <div class="sm:w-full md:w-11/12 lg:w-10/12 mx-auto">
                <x-buscador :tipo=$documento :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
            </div> --}}
            <x-busqueda></x-busqueda>
            <div class="p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                <div class="w-full p-2">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-4">
                    @foreach ($documentos as $documento)
                        <x-documento :documento=$documento></x-documento>
                    @endforeach
                </div>
                <div class="w-full p-2">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
            </div>
        </div>
    @endsection

</x-publico-layout>
