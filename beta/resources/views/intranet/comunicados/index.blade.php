<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight titular">
            {{ __('Comunicados') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo comunicados">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 mt-2 mb-3">
                <div class="col-span-1 lg:col-span-3">
                    <x-mensaje></x-mensaje>
                </div>
                <div class="col-span-1 lg:col-span-3 gap-x-3 md:flex">
                    <div class="mb-3 grow text-center">
                        <span class="px-2 py-2.5 text-sm border border-black font-semibold text-black bg-red-500 rounded-full">{{ $comunicados->count() }}</span>
                        <span class="text-base font-medium text-zinc-800">Comunicados desde <b>2017</b></span>
                    </div>
                    <div class="mb-3 shrink text-center">
                        <button class="w-full px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 hover:bg-green-500 hover:text-zinc-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="w-full px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 hover:bg-zinc-900 hover:text-red-500" title="Añadir un nuevo comunicado">
                            <i class="lni lni-add-files"></i>
                            <a href="{{ route('intranet.comunicados.create') }}" class="">Añadir comunicado</a>
                        </button>
                    </div>
                </div>
            </div>
            {{-- <x-datatables></x-datatables> --}}

            <div class="card">
                <div class="card-header">Administración de Comunicados</div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>

            @push('scripts')
                {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
            @endpush

            {{-- <table id="tablaComunicados" class="text-sm pt-5 font-normal rounded-t-lg table table-striped nowrap" style="width:100%">
                <thead class="rounded-t-lg bg-black text-white">
                    <tr>
                        <th class="rounded-tl-lg">Nº</th>
                        <th>Acciones</th>
                        <th>Fecha</th>
                        <th title="Autor">Autor</th>
                        <th>Título</th>
                        <th>Empresa</th>                        
                        <th>Categorías</th>
                        <th class="rounded-tr-lg">Etiquetas</th>
                        <th>Subtítulo</th>
                        <th>Cuerpo</th>
                        <th>PDF</th>
                        <th>Imagen</th>
                        <th>Adjunto</th>
                        <th title="Visualizaciones">Vis.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comunicados as $comunicado)
                    <tr>
                        <td>{{ $comunicado->numero }}</td>
                        <td>
                            <div class="flex justify-start gap-1 text-xl mt-2">
                                <!-- Enviar por Email -->
                                <a href="{{ route('intranet.comunicados.edit', $comunicado->id) }}" class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8" title="Enviar por correo">
                                    <i class="lni lni-envelope"></i>
                                </a>
                            
                                <!-- Editar Comunicado -->
                                <a href="{{ route('intranet.comunicados.edit', $comunicado->id) }}" class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar Comunicado">
                                    <i class="lni lni-pencil"></i>
                                </a>
                            
                                <!-- Eliminar Comunicado -->
                                <form method="POST" action="{{ route('intranet.comunicados.destroy', $comunicado->id) }}" onsubmit="return confirm('¿Deseas eliminar este comunicado?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8" title="Eliminar Comunicado">
                                        <i class="lni lni-trash-can"></i>
                                    </button>
                                </form>
                            </div>    
                        </td>
                        <td>{{ $comunicado->fecha }}</td>
                        <td>{{ $comunicado->user->nombre }}</td>
                        <td>{{ $comunicado->titulo }}</td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->empresa?->slug }}">{{ $comunicado->empresa?->nombre }}</span></td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span></td>
                        <td>
                            @foreach ($comunicado->etiquetas as $etiqueta )
                                <span class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">
                                    {{ $etiqueta->nombre }}<br>
                                </span>
                            @endforeach    
                        </td>
                        <td>{{ $comunicado->subtitulo }}</td>
                        <td>{!! $comunicado->cuerpo !!}</td>
                        <td><a href="{{ storage_path($comunicado->pdf) }}" class="href" target="_blank">{{ $comunicado->pdf }}</a></td>
                        <td><a href="{{ storage_path($comunicado->imagen) }}" class="href" target="_blank">{{ $comunicado->imagen }}</a></td>
                        <td><a href="{{ storage_path($comunicado->adjunto) }}" class="href" target="_blank">{{ $comunicado->adjunto }}</a></td>
                        <td>{{ $comunicado->visualizaciones }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
            {{-- <table id="tablaComunicados" class="text-sm pt-5 font-normal rounded-t-lg table table-striped nowrap" style="width:100%">
                <thead class="rounded-t-lg bg-black text-white">
                    <tr>
                        <th class="rounded-tl-lg">Nº</th>
                        <th>Acciones</th>
                        <th>Fecha</th>
                        <th title="Autor">Autor</th>
                        <th>Título</th>
                        <th>Empresa</th>                        
                        <th>Categorías</th>
                        <th class="rounded-tr-lg">Etiquetas</th>
                        <th>Subtítulo</th>
                        <th>Cuerpo</th>
                        <th>PDF</th>
                        <th>Imagen</th>
                        <th>Adjunto</th>
                        <th title="Visualizaciones">Vis.</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- DataTables will populate this section -->
                </tbody>
            </table>             --}}
        </div>
    </div>
    @endsection
</x-privado-layout>