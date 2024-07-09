<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">BUSCADOR</h1>
        <div class="fondo comunicados">
            <div class="sm:w-full md:w-11/12 lg:w-10/12 mx-auto">
                <x-buscador></x-buscador>
            </div>

            <div class="p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">

                <h1 class="text-3xl font-bold mb-6">Resultados de búsqueda para "{{ $query }}"</h1>

                @if ($comunicados->isNotEmpty())
                    {{-- <h2 class="text-2xl font-semibold mt-8 mb-4">Comunicados</h2> --}}
                    <div class="w-full p-2">{{ $comunicados->onEachSide(1)->appends(['q' => $query])->links('vendor.pagination.tailwind') }}</div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                        @foreach ($comunicados as $comunicado)
                            <x-comunicado :comunicado="$comunicado" />
                        @endforeach
                    </div>
                    <div class="w-full p-2">{{ $comunicados->onEachSide(1)->links('vendor.pagination.tailwind') }}</div>

                @endif

                

            </div>
        </div>
    @endsection
</x-publico-layout>
