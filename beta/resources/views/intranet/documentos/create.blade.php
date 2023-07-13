<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Añadir Documento') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo modelos">
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
            <div>
                <form novalidate="" action="{{ route('intranet.documentos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-3">
                        <label for="country" class="form-label">Empresa</label>
                        <select class="form-select" id="empresa" name="empresa" required="">
                                <option value="Elige empresa">Elige empresa</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Por favor, introduce un empresa.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="categorias_documento" class="form-label">Categoría</label>
                        <select class="form-select" id="categoria" name="categoria" required="">
                            <option value="Elige categoria">Elige Categoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Por favor, introduce un categoría.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="country" class="form-label">Etiqueta</label>
                        <select class="form-select" id="etiqueta" name="etiqueta" required="">
                            <option value="Elige etiqueta">Elige etiqueta</option>
                            @foreach ($etiquetas as $etiqueta)
                                <option value="{{ $etiqueta->id }}">{{ $etiqueta->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Por favor, introduce una etiqueta.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="fecha_doc" class="form-label">Fecha</label>
                        <input type="date" class="form-control rojoBrillante" name="fecha" placeholder="{{ now() }}">
                        <div class="invalid-feedback">
                            Por favor, introduce un fecha.
                        </div>
                    </div>
                    
                    <div>
                        <label for="titulo">Título del documento:</label>
                        <input type="text" name="titulo" id="titulo" required>
                    </div>
                
                    <div>
                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion" id="descripcion"></textarea>
                    </div>
                
                    <div>
                        <label for="file">Seleccionar documento:</label>
                        <input type="file" name="file" id="file" required>
                    </div>
                
                    <button type="submit">Subir Documento</button>
                </form>                
            </div>
        </div>
    </div>
    @endsection
    
</x-privado-layout>