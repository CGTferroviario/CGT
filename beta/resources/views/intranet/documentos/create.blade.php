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

            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <section class="bg-oscuro-7 rounded-lg">
                        <div class="py-8 px-4 mx-auto">
                            <h2 class="mb-4 text-xl font-bold text-white text-center">Añadir Documento</h2>
                            <form action="{{ route('intranet.documentos.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="grid gap-4 sm:grid-cols-4 sm:gap-6">
                                    <div class="">
                                        <label for="empresa" class="block mb-2 text-sm font-medium text-white">Empresa</label>
                                        <select class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" id="empresa" name="empresa" required="">
                                                <option value="Elige empresa">Elige empresa</option>
                                            @foreach ($empresas as $empresa)
                                                <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="categoria" class="block mb-2 text-sm font-medium text-white">Categoría</label>
                                        <select class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" id="categoria" name="categoria" required="">
                                                <option value="Elige categoria">Elige categoria</option>
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <label for="etiqueta" class="block mb-2 text-sm font-medium text-white">Etiquetas</label>
                                        <select class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" id="etiqueta" name="etiqueta" required="">
                                                <option value="Elige categoria">Elige etiquetas</option>
                                            @foreach ($etiquetas as $etiqueta)
                                                <option value="{{ $etiqueta->id }}">{{ $etiqueta->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <?php 
                                        
                                        $month = date('m');
                                        $day = date('d');
                                        $year = date('Y');

                                        $fecha = $year . '-' . $month . '-' . $day;
                                        
                                    ?>
                                    <div class="">
                                        <label for="fecha_com" class="block mb-2 text-sm font-medium text-white">Fecha</label>
                                        <input type="date" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" name="fecha" value="<?php echo $fecha; ?>">
                                    </div>
                                </div>
                                <div class="grid gap-4 sm:grid-cols-12 sm:gap-6 mt-3">
                                    <div class="col-span-6">
                                        <label for="titulo" class="block mb-2 text-sm font-medium text-white">Título</label>
                                        <input type="text" name="titulo" id="titulo" class="w-full bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-gray-400" placeholder="" value="" required="">
                                        <div class="">
                                            <label for="cuerpo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                                            <textarea id="cuerpo" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="El cuerpo del documento..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="pdf" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-add-files text-lg mr-2 mb-0"></i>Documento en PDF</label>
                                        <label for="dropzone-file" class="!ml-0 flex flex-col items-center justify-center w-full h-48 border-2 border-dashed rounded-lg cursor-pointer bg-gray-700 border-gray-600 hover:border-red-500 hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <i class="lni lni-cloud-upload text-3xl mb-2 text-gray-400"></i>
                                                <p class="mb-2 text-sm text-gray-400"><span class="font-semibold">Haz click o arrastra</span></p>
                                                <p class="text-xs text-gray-400">para subir un fichero <span class="font-semibold">.PDF</span></p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" />
                                        </label>
                                    </div>
                                    {{-- <div class="col-span-6">
                                        <x-subir-archivo></x-subir-archivo>
                                    </div> --}}
                                </div>

                                <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-red-800">Subir Documento</button>
                                <button class="w-100 btn btn-outline-danger btn-lg" type="submit"></button>
                            </form>
                        </div>
                    </section>
                </div>
                <div>
                    <div class="text-center">
                        <h1 class="text-xl rojoBrillante">Últimos documentos</h1>
                    </div>
                    <ul class="list-group mb-3">
                        @foreach ($documentos as $documento)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div class="inline-flex">
                                <span class="text-body-secondary">{{ $documento->id }}. </span>
                                <h6 class="my-0 ml-1">{{ $documento->titulo }}</h6>
                                
                            </div>
                            <small class="text-body-secondary">{{ $documento->subtitulo }}</small>
                        </li>
                        @endforeach
                    </ul>
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