<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Comunicados') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo comunicados">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="col-span-3">
                    <x-mensaje></x-mensaje>
                </div>
                <div class="sm:flex sm:items-center sm:justify-start"></div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Comunicados</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $comunicados->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estos son los comunicados que llevamos este año.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Añadir un nuevo comunicado">
                            <i class="lni lni-add-files"></i>
                            <a href="{{ route('intranet.comunicados.create') }}" class="">Añadir comunicado</a>
                        </button>
                    </div>
                </div>
            </div> 
            <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal rounded-t-lg" style="width:100%">
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
                                <a x-data="{ tooltip: 'Enviar' }" href="{{ route('intranet.comunicados.edit', $comunicado->id) }}"
                                    class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8" title="Enviar por correo">
                                    <i class="lni lni-envelope"></i>
                                </a> 
                                <a x-data="{ tooltip: 'Editar' }" href="{{ route('intranet.comunicados.edit', $comunicado->id) }}"
                                    class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar Comunicado">
                                    <i class="lni lni-pencil"></i>
                                </a>                                
                                <form method="POST" action="{{ route('intranet.comunicados.destroy', $comunicado->id) }}" onsubmit="return confirm('¿Deseas eliminar este comunicado?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" p-1 rounded-md">
                                        <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Comunicado" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                            <i class="lni lni-trash-can"></i>
                                        </a>
                                    </button>
                                </form>                                
                            </div>
                        </td>
                        <td>{{ $comunicado->fecha }}</td>
                        <td>{{ $comunicado->user->nombre }}</td>
                        <td>{{ $comunicado->titulo }}</td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span></td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span></td>
                        <td>
                            @foreach ($comunicado->etiquetas as $etiqueta )
                                <span class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">
                                    {{ $etiqueta->nombre }}<br>
                                </span>
                            @endforeach    
                        </td>
                        <td>{{ $comunicado->subtitulo }}</td>
                        <td>{!! nl2br(e($comunicado->cuerpo))!!}</td>
                        <td>{{ $comunicado->pdf }}</td>
                        <td>{{ $comunicado->imagen }}</td>
                        <td>{{ $comunicado->adjunto }}</td>
                        <td>{{ $comunicado->visualizaciones }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</x-privado-layout>