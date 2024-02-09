<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold">COMUNICADOS</h1>
        <div class="fondo comunicados">
            <div class="grid grid-cols-2 mx-auto p-8">
                <div></div>
                <div>
                    <form action="{{ route('biblioteca.comunicados.buscar') }}" method="GET">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-3 mb-4">
                                <label for="termino" class="block text-zinc-700 text-sm font-bold mb-2">Término de búsqueda:</label>
                                <input type="text" name="termino" id="termino" class="shadow appearance-none border rounded w-full py-2 px-3 text-zinc-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4 flex flex-col relative">
                                <button type="submit" class="w-full absolute bottom-0 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    <i class="lni lni-search text-lg"></i>Buscar
                                </button>
                            </div>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-4 sm:gap-6">
                            <x-forms.select-empresa :empresas=$empresas></x-forms.select-empresa>

                            <x-forms.select-categoria :categorias=$categorias></x-forms.select-categoria>
                            
                            <x-forms.select-etiquetas :etiquetas=$etiquetas></x-forms.select-etiquetas>

                            <x-forms.input-fecha></x-forms.input-fecha>
                        </div>
                    </form>
                </div>
            </div>
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                <div class="col-span-4 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
                @foreach ($comunicados as $comunicado)            
                    <x-comunicado :comunicado=$comunicado></x-comunicado>
                @endforeach
                <div class="col-span-4 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
            </div> 
        </div>
    @endsection
</x-publico-layout>
