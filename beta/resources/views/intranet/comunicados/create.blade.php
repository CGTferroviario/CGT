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
            {{-- <table id="comunicadosAdmin" class="display nowrap text-sm pt-5 font-normal rounded-t-lg" style="width:100%">
                <thead class="rounded-t-lg bg-black text-white">
                    <tr>
                        <th class="rounded-tl-lg">Nº</th>
                        <th>Acciones</th>
                        <th>Fecha</th>
                        <th title="Visualizaciones">Vis.</th>
                        <th title="Autor">Autor</th>
                        <th>Título</th>
                        <th>Empresa</th>                        
                        <th>Categorías</th>
                        <th class="rounded-tr-lg">Etiquetas</th>
                        <th>Subtítulo</th>
                        <th>Cuerpo</th>
                        <th>Adjunto 1</th>
                        <th>Adjunto 2</th>
                        <th>Adjunto 3</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comunicados as $comunicado)
                    <tr>
                        <td>{{ $comunicado->numero }}</td>
                        <td>
                            <div class="flex justify-start gap-1 text-xl mt-2">
                                <a x-data="{ tooltip: 'Enviar' }" href="{{ url('comunicados.edit', $comunicado->id) }}"
                                    class="text-blue-500 hover:bg-blue-500 hover:text-white p-1 rounded-lg h-8" title="Enviar por correo">
                                    <i class="lni lni-envelope"></i>
                                </a> 
                                <a x-data="{ tooltip: 'Edite' }" href="{{ url('comunicados.edit', $comunicado->id) }}"
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
                        <td>{{ $comunicado->visualizaciones }}</td>
                        <td>{{ $comunicado->user->nombre }}</td>
                        <td>{{ $comunicado->titulo }}</td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span></td>
                        <td><span class="px-3 py-1 text-sm font-semibold rounded-full bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span></td>
                        <td>{{ $comunicado->etiqueta->nombre }}</td>
                        <td>{{ $comunicado->subtitulo }}</td>
                        <td>{!! nl2br(e($comunicado->cuerpo))!!}</td>
                        <td>{{ $comunicado->adjunto1 }} 1</td>
                        <td>{{ $comunicado->adjunto2 }} 2</td>
                        <td>{{ $comunicado->adjunto3 }} 3</td>
                        <td>{{ $comunicado->imagen }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
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
    @endsection
    
</x-privado-layout>