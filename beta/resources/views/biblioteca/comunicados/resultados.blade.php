<x-publico-layout>

    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold">COMUNICADOS</h1>
        <div class="fondo comunicados">
            
            <div class="container mx-auto p-4">
                <form action="{{ route('biblioteca.comunicados.buscar') }}" method="GET">
                    <div class="mb-4">
                        <label for="termino" class="block text-zinc-700 text-sm font-bold mb-2">Término de búsqueda:</label>
                        <input type="text" name="termino" id="termino" class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="grid gap-4 sm:grid-cols-4 sm:gap-6">
                        <x-select-empresa :empresas=$empresas></x-select-empresa>

                        <x-select-categoria :categorias=$categorias></x-select-categoria>
                        
                        <x-select-etiquetas :etiquetas=$etiquetas></x-select-etiquetas>

                        <x-input-fecha></x-input-fecha>
                    </div>
                    

                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Buscar
                        </button>
                    </div>
                </form>
            </div>
            
            <div
                class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">

                <div class="col-span-4 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>

                <h2 class="text-2xl font-bold mb-4">Resultados de la búsqueda</h2>

                @forelse ($comunicados as $comunicado)
                    <x-comunicado :comunicado=$comunicado></x-comunicado>
                @empty
                    <p>No se encontraron resultados.</p>
                @endforelse

                <div class="col-span-4 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>

            </div> 
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
