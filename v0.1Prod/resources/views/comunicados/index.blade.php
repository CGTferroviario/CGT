@extends('plantillas.principal')

@section('contenido')
<div class="container-fluid fondo comunicados">
    <div class="row">
        <h1 class="m-0 py-3 text-center cabecera font-bold">COMUNICADOS</h1>
        
        <div class="col-md-4 pl-20 mt-4 sm:flex sm:items-center sm:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg rtl:flex-row-reverse">
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm">
                    Todas
                </button>
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm hover:bg-gray-100">
                    Activas
                </button>
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm hover:bg-gray-100">
                    Inactivas
                </button>
            </div>
        </div>
        <div class="col-md-4 mt-4 sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center gap-x-3">
                <h2 class="text-lg font-medium text-gray-800">Comunicados</h2>
                <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $comunicados->count() }}</span>
                <p class="mt-1 text-sm text-gray-500">Estas son los comunicados que llevamos este año.</p>
            </div>
        </div>
        <div class="col-md-4 pr-20 mt-4 sm:flex sm:items-center sm:justify-end">
            <div class="flex items-center mt-4 gap-x-3">
                <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-rojoBrillante hover:text-red-500">
                    <i class="fa-solid fa-file-import"></i>
                    <span>Importar CSV</span>
                </button>
                <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante border rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500">
                    <i class="fa-solid fa-circle-plus"></i>
                    <a href="{{ route('comunicados.create') }}" class="">Añadir comunicado</a>
                </button>
            </div>
        </div>        
        <div class="px-20">
            <div class="col-md-12 p-4 mt-4 bordeRojo bg-blanco-transp rounded-md">
                <table id="example" class="display" style="width:100%">
                    <thead class="">
                        <tr>
                            <th class="text-center">Nº</th>
                            <th>Autor:</th>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Empresa</th>
                            <th>Categoría</th>
                            <th>Etiqueta</th>
                            <th>Cuerpo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comunicados as $comunicado)
                        <tr>
                            <td class="text-center">{{ $comunicado->numero }}</td>
                            <td>{{ $comunicado->user?->nombre }}</td>
                            <td>{{ $comunicado->titulo }}</td>
                            <td>{{ $comunicado->subtitulo }}</td>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span></td>
                            <td><span class="px-3 py-1 text-sm font-bold gap-x-2 rounded-full bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span></td>
                            <td>{{ $comunicado->etiqueta?->nombre }}</td>
                            <td>{{ $comunicado->cuerpo }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">Nº</th>
                            <th>Autor:</th>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Empresa</th>
                            <th>Categoría</th>
                            <th>Etiqueta</th>
                            <th>Cuerpo</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection