<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">COMUNICADOS</h1>
        <div class="fondo comunicados">
            <div class="sm:w-full md:w-2/3 mx-auto">
                <x-buscador :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                <div class="col-span-1 md:col-span-2 lg:col-span-2 xl:col-span-3">
                    <select class="bg-zinc-700 w-36 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" id="year-filter" onchange="filterByYear(this.value)">
                        <option value="all">Todos los años</option>
                        @foreach ($years as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="col-span-1 md:col-span-2 lg:col-span-2 xl:col-span-3">{{ $comunicados->links() }}</div> --}}
                @foreach($comunicadosAgrupados as $year => $comunicados)
                    <h2>{{ $year }}</h2>
                    @foreach($comunicados as $comunicado)
                        <x-comunicado :comunicado=$comunicado />
                    @endforeach
                @endforeach

                {{-- <div class="col-span-3">{{ $comunicados->links('vendor.pagination.tailwind') }}</div> --}}
            </div>
        </div>
    @endsection
</x-publico-layout>

<script>
    function filterByYear(year) {
        if (year === 'all') {
            document.querySelectorAll('.year-group').forEach(function(group) {
                group.style.display = 'block';
            });
        } else {
            document.querySelectorAll('.year-group').forEach(function(group) {
                if (group.id === year) {
                    group.style.display = 'block';
                } else {
                    group.style.display = 'none';
                }
            });
        }
    }
</script>

