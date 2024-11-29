<x-privado-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-zinc-900 leading-tight titular">
            {{ __('ESTADÍSTICAS') }}
        </h2>
    </x-slot>
    @section('contenido')
        <div class="p-8 fondo estadisticas">
            <div class="border-b border-zinc-700">
                <ul class="flex flex-wrap -mb-px p-1 text-base font-medium text-center bg-zinc-900 rounded-t-xl" id="default-styled-tab"
                    data-tabs-toggle="#contenidos-estadisticas"
                    data-tabs-active-classes=""
                    data-tabs-inactive-classes=""
                    role="tablist">
                    <li class="me-1 group" role="presentation">
                        <button class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200" id="estadisticas-generales-tab"
                            data-tabs-target="#estadisticas-generales" type="button" role="tab" aria-controls="generales"
                            aria-selected="false">
                            <i class="lni lni-stats-up text-red-500 group-hover:text-white mr-2 transition duration-75" title="Estadísticas Generales"></i>
                            <span class="group-hover:text-zinc-800">Estadísticas Generales</span>
                        </button>
                    </li>
                    <li class="me-1 group" role="presentation">
                        <button class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200" id="estadisticas-comunicados-tab"
                            data-tabs-target="#estadisticas-comunicados" type="button" role="tab" aria-controls="comunicados"
                            aria-selected="false">
                            <i class="lni lni-bullhorn text-red-500 group-hover:text-white mr-2 transition duration-75" title="Comunicados"></i>
                            <span class="group-hover:text-zinc-800">Comunicados</span>
                        </button>
                    </li>
                    <li class="me-1 group" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200"
                            id="estadisticas-documentos-tab" data-tabs-target="#estadisticas-documentos" type="button" role="tab"
                            aria-controls="documentos" aria-selected="false">
                            <i class="lni lni-files text-red-500 group-hover:text-white mr-2 transition duration-75" title="Documentos"></i>
                            <span class="group-hover:text-zinc-800">Documentos</span>
                        </button>
                    </li>
                    <li class="me-1 group" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200"
                            id="estadisticas-noticias-tab" data-tabs-target="#estadisticas-noticias" type="button" role="tab"
                            aria-controls="noticias" aria-selected="false">
                            <i class="lni lni-book text-red-500 group-hover:text-white mr-2 transition duration-75" title="Noticias"></i>
                            <span class="group-hover:text-zinc-800">Noticias</span>
                        </button>
                    </li>
                    <li class="me-1 group" role="presentation">
                        <button class="inline-block p-4 rounded-t-xl bg-zinc-800 hover:bg-red-500 text-zinc-200 hover:text-zinc-800 border-b-2 border-red-500 hover:border-zinc-200" id="estadisticas-usuarios-tab" data-tabs-target="#estadisticas-usuarios" type="button" role="tab"
                            aria-controls="usuarios" aria-selected="false">
                            <i class="lni lni-users text-red-500 group-hover:text-white mr-2 transition duration-75" title="Comunicados"></i>
                            <span class="group-hover:text-zinc-800">Usuarios</span>
                        </button>
                    </li>
                </ul>
            </div>
            <div id="contenidos-estadisticas" class="bg-zinc-900">
                <div class="hidden p-4" id="estadisticas-generales" role="tabpanel"
                    aria-labelledby="generales-tab">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Total por tipo -->
                        <div class="mb-8 p-4 bg-blanco-transp border border-red-500 rounded-lg">
                            <div class="grid sm:grid-cols-1 md:grid-cols-4 h-96">
                                <div class="col-span-4 text-center">
                                    <h3 class="text-lg font-semibold mb-2">Totales por tipo</h3>
                                </div>
                                <div class="col-span-1">
                                    @foreach ($stats['totalPorTipo'] as $tipo => $total)
                                        <div class="bg-zinc-600 p-2 mt-4 rounded">
                                            <p class="text-md font-medium text-zinc-100">{{ ucfirst($tipo) }}: {{ $total }}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- Gráficas Tipo --}}
                                <div class="col-span-3">
                                    <canvas id="totalPorTipoChart"></canvas>
                                </div>
                            </div>
                            <!-- Etiquetas populares -->
                            <div class="mb-8">
                                <h3 class="text-xl font-semibold mb-2">Etiquetas populares</h3>
                                <div class="flex flex-wrap">
                                    @foreach ($stats['etiquetasPopulares'] as $etiqueta)
                                        <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 mb-2 px-2.5 py-0.5 rounded">
                                            {{ $etiqueta->nombre }}
                                            ({{ $etiqueta->comunicados_count + $etiqueta->noticias_count + $etiqueta->documentos_count }})
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Más vistos -->
                            
                            {{-- <div class="mb-8">
                                <h3 class="text-xl font-semibold mb-2">Más vistos</h3>
                                @foreach (['comunicados', 'noticias', 'documentos'] as $tipo)
                                    <h4 class="text-lg font-medium mt-4 mb-2">{{ ucfirst($tipo) }}</h4>
                                    <ul class="list-disc list-inside">
                                        @foreach ($stats['masVistos'][$tipo] as $item)
                                            <li>{{ $item->numero }} // {{ $item->titulo }} ({{ $item->visualizaciones }}
                                                visualizaciones)</li>
                                        @endforeach
                                    </ul>
                                @endforeach
                            </div> --}}
                            
                        </div>
        
                        <!-- Por empresa -->
                        <div class="mb-8 p-4 bg-blanco-transp border border-red-500 rounded-lg">
                            <div class="col-span-2 text-center">
                                <h3 class="text-lg font-semibold mb-2">Totales por empresa</h3>
                            </div>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left rtl:text-right text-zinc-400">
                                    <thead
                                        class="text-xs uppercase bg-red-500 text-zinc-900 rounded-t-xl border-2 border-zinc-900">
                                        <tr class=" text-center">
                                            <th scope="col" class="px-2 py-3 rounded-tl-xl">
                                                <i class="lni lni-apartment text-xl mx-1" title="Empresas"></i>Empresa
                                            </th>
                                            <th scope="col" class="px-2 py-3 border-x-2 border-zinc-900">
                                                <i class="lni lni-bullhorn text-xl mx-1" title="Empresas"></i>Comunicados
                                            </th>
                                            <th scope="col" class="px-2 py-3 border-x-2 border-zinc-900">
                                                <i class="lni lni-book text-xl mx-1" title="Empresas"></i>Noticias
                                            </th>
                                            <th scope="col" class="px-2 py-3 rounded-tr-xl">
                                                <i class="lni lni-files text-xl mx-1" title="Empresas"></i>Documentos
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stats['porEmpresa'] as $empresa)
                                            <tr class="odd:bg-zinc-900 even:bg-zinc-800 border-b border-zinc-700 text-xs">
                                                <th scope="row" class="px-2 py-3 font-medium whitespace-nowrap text-white">
                                                    <div
                                                        class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $empresa->slug }}">
                                                        <a href="{{ route('empresas.show', ['slug' => $empresa->slug]) }}"
                                                            target="_blank">{{ $empresa->nombre }}</a>
                                                    </div>
                                                </th>
                                                <td class="px-2 py-3 whitespace-nowrap text-center text-zinc-100 text-base">
                                                    {{ $empresa->comunicados_count }}</td>
                                                <td class="px-2 py-3 whitespace-nowrap text-center text-zinc-100 text-base">
                                                    {{ $empresa->noticias_count }}</td>
                                                <td class="px-2 py-3 whitespace-nowrap text-center text-zinc-100 text-base">
                                                    {{ $empresa->documentos_count }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="w-full p-2">{{ $stats['porEmpresa']->links('vendor.pagination.tailwind') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="estadisticas-comunicados" role="tabpanel"
                    aria-labelledby="comunicados-tab">
                    <div class=" bg-zinc-200/70 p-4 rounded-xl border border-red-500">
                        <h1 class="text-lg underline font-bold">Comunicados más vistos</h1>
                        @foreach ($stats['masVistos']['comunicados'] as $comunicado)
                            <li class="mt-2">{{ $comunicado->numero }} // {{ $comunicado->titulo }} <span class="bg-red-500 text-zinc-800 p-1 font-bold border border-zinc-800 rounded-full">{{ $comunicado->visualizaciones }}</span> visitas</li>
                        @endforeach
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="estadisticas-documentos" role="tabpanel"
                    aria-labelledby="documentos-tab">
                    <div class=" bg-zinc-200/70 p-4 rounded-xl border border-red-500">
                        <h1 class="text-lg underline font-bold">Documentos más vistos</h1>
                        @foreach ($stats['masVistos']['documentos'] as $documento)
                            <li class="mt-2">{{ $documento->titulo }} <span class="bg-red-500 text-zinc-800 p-1 font-bold border border-zinc-800 rounded-full">{{ $documento->visualizaciones }}</span> visitas</li>
                        @endforeach
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="estadisticas-noticias" role="tabpanel"
                    aria-labelledby="noticias-tab">
                    <div class=" bg-zinc-200/70 p-4 rounded-xl border border-red-500">
                        @foreach ($stats['masVistos']['noticias'] as $noticia)
                            <li class="mt-2">{{ $noticia->titulo }} <span class="bg-red-500 text-zinc-800 p-1 font-bold border border-zinc-800 rounded-full">{{ $noticia->visualizaciones }}</span> visitas</li>
                        @endforeach
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="estadisticas-usuarios" role="tabpanel"
                    aria-labelledby="usuarios-tab">
                    <p class="text-sm  text-zinc-400">En el futuro aquí se encontrarán las estadísticas de usuarios</p>
                </div>
            </div>

            

        </div>
    @endsection
</x-privado-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Gráfico de pastel para el total por tipo
    const ctx = document.getElementById('totalPorTipoChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: {!! json_encode(array_keys($stats['totalPorTipo'])) !!},
            datasets: [{
                data: {!! json_encode(array_values($stats['totalPorTipo'])) !!},
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    // display: true,
                    // text: 'Gráfica por tipo'
                }
            }
        }
    });
</script>
