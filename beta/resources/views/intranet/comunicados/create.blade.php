<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Añadir Comunicados') }}
        </h2>
    </x-slot>

    @section('contenido')
    <div class="p-8 fondo comunicados">
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
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <section class="bg-oscuro-7 rounded-lg">
                        <div class="py-8 px-4 mx-auto">
                            <h2 class="mb-4 text-xl font-bold text-white text-center">Añadir Comunicado</h2>
                            <form action="#">
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
                                    <div class="">
                                        <label for="fecha_com" class="block mb-2 text-sm font-medium text-white">Fecha</label>
                                        <input type="date" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" name="fecha" placeholder="today()">
                                    </div>
                                    <div class="">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                    </div>
                                    <div class="w-full">
                                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                        <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                                    </div>
                                    <div class="w-full">
                                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                                    </div>
                                    <div>
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option selected="">Select category</option>
                                            <option value="TV">TV/Monitors</option>
                                            <option value="PC">PC</option>
                                            <option value="GA">Gaming/Console</option>
                                            <option value="PH">Phones</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item Weight (kg)</label>
                                        <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="12" required="">
                                    </div> 
                                    <div class="col-span-4">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                        <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                    Add product
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
                <div>
                    <form class="needs-validation" novalidate="" action="{{ route('intranet.comunicados.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
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
                                <label for="categorias_comunicado" class="form-label">Categoría</label>
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
                                <label for="fecha_com" class="form-label">Fecha</label>
                                <input type="date" class="form-control rojoBrillante" name="fecha" placeholder="<?php echo date("Y/m/d"); ?>">
                                <div class="invalid-feedback">
                                    Por favor, introduce un fecha.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="country" class="form-label">Número</label>
                                <input type="number" class="form-control" id="numero" name="numero" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Por favor, introduce un número de comunicado.
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Por favor, introduce un título de comunicado.
                                </div>
                            </div>
                            
                            <div class="col-sm-5">
                                <label for="lastName" class="form-label">Subtitulo</label>
                                <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Por favor, introduce un subtítulo de comunicado.
                                </div>
                            </div>
            
                            <div class="col-12">
                                <label for="username" class="form-label">Descripción</label>
                                <textarea name="cuerpo" class="form-control" id="cuerpo" cols="30" rows="10"></textarea>
                                <div class="invalid-feedback">
                                    Por favor, introduce un cuerpo de comunicado.
                                </div>
                            </div>
            
                            <div class="col-12">
                                <label for="email" class="form-label">Comunicado en PDF</label>
                                <input type="text" name="adjunto1" class="form-control" id="doc_pdf">
                                <div class="invalid-feedback">
                                    Por favor, revisa el archivo en pdf del comunicado.
                                </div>
                            </div>
            
                            <div class="col-12">
                                <label for="address" class="form-label">Adjuntos (anexos)</label>
                                <input type="text"  name="adjunto2" class="form-control" id="doc_adj">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
            
                            <div class="col-12">
                                <label for="address2" class="form-label">Imagen (jpg o png)</label>
                                <input type="text" name="adjunto3" class="form-control" id="doc_img">
                                <div class="invalid-feedback">
                                    Por favor, introduce una imagen de comunicado.
                                </div>
                            </div>
        
                            <div class="col-12">
                                <label for="address2" class="form-label">Imagen (jpg o png)</label>
                                <input type="text" name="imagen" class="form-control" id="doc_img">
                                <div class="invalid-feedback">
                                    Por favor, introduce una imagen de comunicado.
                                </div>
                            </div>
                            <div class="col-12">
                                
                                <label class="switch">
                                    <input type="checkbox" name="publicado" class="form-control" id="publicado" checked >
                                    <span class="slider round"></span>
                                </label>
                                <label for="address2" class="form-label align-bottom">Publicado</label>
                                <div class="invalid-feedback">
                                    Por favor, introduce una imagen de comunicado.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
            
                        <button class="w-100 btn btn-outline-danger btn-lg" type="submit">Subir Comunicado</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    @endsection
    
</x-privado-layout>