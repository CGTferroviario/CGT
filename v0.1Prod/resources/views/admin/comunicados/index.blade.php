@extends('plantillas.principal')

@section('contenido')
<div class="container-fluid fondo comunicados">
    <div class="row">
        <h1 class="m-0 py-3 text-center cabecera font-bold">COMUNICADOS</h1>       
        <div class="px-20 pt-4">
            <div class="col-md-12 p-4 mt-2 bordeRojo bg-blanco-transp rounded-md">
                <div class="row mt-2 mb-3">
                    <div class="col-md-4 sm:flex sm:items-center sm:justify-between">
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
                    <div class="col-md-4 sm:flex sm:items-center sm:justify-between">
                        <div class="flex items-center gap-x-3">
                            <h2 class="text-lg font-bold text-gray-800">Comunicados</h2>
                            <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $comunicados->count() }}</span>
                            <p class="mt-1 text-sm text-gray-500">Estos son los comunicados que llevamos este año.</p>
                        </div>
                    </div>
                    <div class="col-md-4 sm:flex sm:items-center sm:justify-end">
                        <div class="flex items-center gap-x-3 align-middle">
                            <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                                <i class="fa-solid fa-file-import"></i>
                                <span>Importar CSV</span>
                            </button>
                            <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Añadir un nuevo comunicado">
                                <i class="fa-solid fa-circle-plus"></i>
                                <a href="{{ route('comunicados.create') }}" class="">Añadir comunicado</a>
                            </button>
                           
                        </div>
                    </div>
                </div>  
                <table id="example" class="display" style="width:100%">
                    <thead class="bg-oscuro text-white">
                        <tr>
                            <th class="text-center">Nº</th>
                            <th>Fecha:</th>
                            <th>Autor:</th>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Empresa</th>
                            <th>Categoría</th>
                            <th>Etiqueta</th>
                            <th>Cuerpo</th>
                            <th>Publicado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comunicados as $comunicado)
                        <tr>
                            <td class="text-center">{{ $comunicado->numero }}</td>
                            <td class="text-center">{{ $comunicado->fecha }}</td>
                            <td>{{ $comunicado->user?->nombre }}</td>
                            <td>{{ $comunicado->titulo }}</td>
                            <td>{{ $comunicado->subtitulo }}</td>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span></td>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span></td>
                            <td>{{ $comunicado->etiqueta?->nombre }}</td>
                            <td>{{ $comunicado->cuerpo }}</td>
                            <td class="text-center">
                                <span>
                                    {{ $comunicado->publicado }}
                                </span>
                            </td>
                            <td class="px-3 py-1">
                                <div class="flex justify-end gap-2 text-3xl">
                                    <a x-data="{ tooltip: 'Enviar' }" href="{{ route('comunicados.edit', $comunicado->id) }}"
                                        class="text-blue-500 hover:bg-blue-900 hover:text-white p-1 rounded-md" title="Enviar por correo">
                                        <i class="lni lni-envelope"></i>
                                    </a> 
                                    <a x-data="{ tooltip: 'Edite' }" href="{{ route('comunicados.edit', $comunicado->id) }}"
                                        class="text-green-500 hover:bg-green-500 hover:text-white p-1 rounded-md" title="Editar Rol">
                                        <i class="lni lni-pencil"></i>
                                    </a>                                
                                    <form method="POST" action="{{ route('comunicados.destroy', $comunicado->id) }}" onsubmit="return confirm('¿Deseas eliminar este comunicado?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:bg-red-500 hover:text-white p-1 rounded-md">
                                            <a x-data="{ tooltip: 'Delete' }" href="#" title="Eliminar Rol">
                                                <i class="lni lni-trash-can"></i>
                                            </a>
                                        </button>
                                    </form>                                
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">Nº</th>
                            <th>Fecha:</th>
                            <th>Autor:</th>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Empresa</th>
                            <th>Categoría</th>
                            <th>Etiqueta</th>
                            <th>Cuerpo</th>
                            <th>Publicado</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection