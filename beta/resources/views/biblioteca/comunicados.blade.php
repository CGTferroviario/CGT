<x-publico-layout>
    @section('contenido')
        <h1 class="m-0 py-3 text-center bg-red-500 font-bold leading-tight titular">COMUNICADOS</h1>
        <div class="fondo comunicados">
            <div class="sm:w-full md:w-11/12 lg:w-10/12 mx-auto">
                {{-- :tipo=$comunicado --}}
                <x-buscador :empresas=$empresas :categorias=$categorias :etiquetas=$etiquetas></x-buscador>
            </div>
            {{-- <div class="p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                <div class="w-full mb-4">
                    <select class="bg-zinc-700 w-36 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" id="year-filter">
                        <option value="all">Todos los años</option>
                        @foreach ($years as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full h-24">{{ $comunicados->links() }}</div>
                    
                @foreach ($comunicadosAgrupados as $year => $comunicados)
                    <div class="year-group" id="{{ $year }}" style="display: none;">
                        <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 ">
                            @foreach ($comunicados as $comunicado)
                                <x-comunicado :comunicado="$comunicado" />
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div> --}}
            <div class="p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
                <div class="w-full">
                    <select
                        class="bg-zinc-700 w-36 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400"
                        id="year-filter">
                        <option value="all">Todos los años</option>
                        @foreach ($years as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Aquí se mostrarán los comunicados y sus enlaces de paginación para el año seleccionado -->
                {{-- <div id="comunicados-container" class="w-full h-24">
                    <!-- Contenido dinámico aquí -->
                </div> --}}

                @foreach ($paginators as $year => $paginator)
                    <div class="year-group" id="{{ $year }}" style="display: none;">
                        <div class="w-full p-2">
                            {{ $paginator->links() }}
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                            @foreach ($paginator as $comunicado)
                                <x-comunicado :comunicado="$comunicado" />
                            @endforeach
                        </div>
                        <!-- Muestra los enlaces de paginación para el grupo actual -->
                        <div class="w-full p-2">
                            {{ $paginator->links() }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <script>
            window.onload = function() {
                let yearFilter = document.getElementById('year-filter');
                let currentYear = new Date().getFullYear(); // Obtiene el año actual

                // Al cargar la página, selecciona el año actual en el select
                yearFilter.value = currentYear;

                // Función para filtrar por año
                function filterByYear() {
                    // Oculta todos los grupos de comunicados
                    document.querySelectorAll('.year-group').forEach(function(group) {
                        group.style.display = 'none';
                    });

                    var selectedYear = this.value;
                    if (selectedYear === 'all') {
                        // Muestra todos los grupos de comunicados si se selecciona "Todos los años"
                        document.querySelectorAll('.year-group').forEach(function(group) {
                            group.style.display = 'block';
                        });
                    } else {
                        // Muestra solo el grupo de comunicados del año seleccionado
                        document.getElementById(selectedYear).style.display = 'block';
                    }
                }

                // Asocia el evento 'change' al select para filtrar por año
                yearFilter.addEventListener('change', filterByYear);

                // Al cargar la página, muestra los comunicados del año actual
                filterByYear.call(yearFilter);
            }

            // document.getElementById('year-filter').addEventListener('change', function() {
            //     var year = this.value;
            //     var comunicadosContainer = document.getElementById('comunicados-container');

            //     // Oculta todos los grupos de comunicados
            //     document.querySelectorAll('.year-group').forEach(function(group) {
            //         group.style.display = 'none';
            //     });

            //     // Muestra el grupo de comunicados para el año seleccionado
            //     if (year !== 'all') {
            //         var selectedGroup = document.getElementById(year);
            //         if (selectedGroup) {
            //             selectedGroup.style.display = 'block';
            //         }
            //     } else {
            //         // Muestra todos los grupos de comunicados si se selecciona "Todos los años"
            //         document.querySelectorAll('.year-group').forEach(function(group) {
            //             group.style.display = 'block';
            //         });
            //     }
            // });
        </script>
    @endsection
</x-publico-layout>
