<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Documentos') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo documentos">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-3 mt-2 mb-3">
                <div class="col-span-3">
                    <x-mensaje></x-mensaje>
                </div>
                <div class="sm:flex sm:items-center sm:justify-start">
                    <div class="inline-flex overflow-hidden text-white divide-x rounded-lg rtl:flex-row-reverse">
                        <button class="px-3 py-2 text-xs font-medium text-black transition-colors duration-200 bg-red-500 sm:text-sm">
                            Todos
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-gray-900">
                            Por empresa
                        </button>
                        <button class="px-3 py-2 text-xs font-medium bg-oscuro transition-colors duration-200 sm:text-sm hover:bg-red-500 hover:text-black">
                            Por categoría
                        </button>
                    </div>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Documentos</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $documentos->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estos son los documentos que llevamos este año.</p>
                    </div>
                    
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Añadir un nuevo documento">
                            <i class="lni lni-add-files"></i>
                            <a href="{{ route('intranet.documentos.create') }}" class="">Añadir documento</a>
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
                        <th title="Visualizaciones">Vis.</th>
                        <th title="Descargas">Descargas</th>
                        <th title="Autor">Autor</th>
                        <th>Título</th>
                        <th>Empresa</th>                        
                        <th>Categorías</th>
                        <th>Etiquetas</th>
                        <th>Descripción</th>
                        <th class="rounded-tr-lg">Ruta</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentos as $documento)
                    <tr>
                        <td>{{ $documento->id }}</td>
                        <td>
                            <div class="flex justify-start gap-1 text-xl mt-2">
                                <a x-data="{ tooltip: 'Enviar' }" href="{{ url('documentos.edit', $documento->id) }}"
                                    class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8" title="Enviar por correo">
                                    <i class="lni lni-envelope"></i>
                                </a> 
                                <a x-data="{ tooltip: 'Edite' }" href="{{ url('documentos.edit', $documento->id) }}"
                                    class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-lg h-8" title="Editar Documento">
                                    <i class="lni lni-pencil"></i>
                                </a>                                
                                <form method="POST" action="{{ route('intranet.documentos.destroy', $documento->id) }}" onsubmit="return confirm('¿Deseas eliminar este documento?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" p-1 rounded-md">
                                        <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Documento" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-lg h-8">
                                            <i class="lni lni-trash-can"></i>
                                        </a>
                                    </button>
                                </form>                                
                            </div>
                        </td>
                        <td>{{ $documento->fecha }}</td>
                        <td>{{ $documento->visualizaciones }}</td>
                        <td>{{ $documento->descargas }}</td>
                        <td>{{ $documento->user->nombre }}</td>
                        <td>{{ $documento->titulo }}</td>                        
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $documento->empresa?->nombre }}">{{ $documento->empresa?->nombre }}</span></td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $documento->categoria?->nombre }}">{{ $documento->categoria?->nombre }}</span></td>
                        <td>
                            @foreach ($documento->etiqueta as $etiqueta )
                                <span
                                    class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">
                                        {{ $etiqueta->nombre }}
                                    </span>
                            @endforeach    
                        </td>
                        
                        <td>{{ $documento->descripcion }}</td>
                        <td>{{ $documento->ruta }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
    
</x-privado-layout>