<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Añadir Noticia') }}
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
                    <div class="flex items-center gap-x-3 align-middle">
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-zinc-900 hover:text-red-500" title="Añadir un nuevo noticia">
                            <i class="lni lni-arrow-left"></i>
                            <a href="{{ route('intranet.noticias.index') }}" class="">Todas las Noticias</a>
                        </button>
                        <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-zinc-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                    </div>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-zinc-800">Noticias</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $noticias->count() }}</span>
                        <p class="mt-1 text-sm text-zinc-500">Estas son las noticias que llevamos este año.</p>
                    </div>
                    
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                    
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <section class="bg-oscuro-7 rounded-lg">
                        <div class="py-8 px-4 mx-auto">
                            <h2 class="mb-4 text-xl font-bold text-white text-center">Añadir Noticia</h2>
                            <form action="{{ route('intranet.noticias.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 sm:grid-cols-4 sm:gap-6">
                                    
                                    <x-forms.select-empresa :empresas=$empresas></x-select-empresa>

                                    <x-forms.select-categoria :categorias=$categorias></x-select-categoria>
                                    
                                    <x-forms.select-etiquetas :etiquetas=$etiquetas></x-select-etiquetas>

                                    <x-forms.input-fecha></x-input-fecha>

                                </div>
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-3">
                                    <div class="">
                                        <label for="titulo" class="block mb-2 text-sm font-medium text-white">Título</label>
                                        <input type="text" name="titulo" id="titulo" class="w-full bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" placeholder="" value="" required="">

                                        <label for="cuerpo" class="block mb-2 mt-2 text-sm font-medium text-white">Cuerpo</label>
                                        <textarea id="cuerpo" rows="5" class="block p-2.5 w-full text-sm rounded-lg border focus:ring-red-500 focus:border-red-500 bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white" placeholder="El cuerpo del noticia..." name="cuerpo"></textarea>
                                    </div>
                                    
                                    <div class="">
                                        <label for="imagen" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-image text-lg mr-2 mb-0"></i>Imagen</label>
                                        <input type="file" name="imagen" id="imagen" class="text-white">
                                    
                                        <label for="adjunto" class="block mb-2 mt-4 text-sm font-medium text-white"><i class="lni lni-add-files text-lg mr-2 mb-0"></i>Adjunto</label>
                                        <input type="file" name="adjunto" id="adjunto" class="text-white">
                                    </div>

                                        {{-- <label for="pdf" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-add-files text-lg mr-2 mb-0"></i>Adjunto en PDF</label>
                                        <label for="dropzone-file" class="!ml-0 flex flex-col items-center justify-center w-full h-48 border-2 border-dashed rounded-lg cursor-pointer bg-zinc-700 border-zinc-600 hover:border-red-500 hover:bg-zinc-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <i class="lni lni-cloud-upload text-3xl mb-2 text-zinc-400"></i>
                                                <p class="mb-2 text-sm text-zinc-400"><span class="font-semibold">Haz click o arrastra</span></p>
                                                <p class="text-xs text-zinc-400">para subir un fichero <span class="font-semibold">.PDF</span></p>
                                            </div>
                                            <input id="dropzone-file" type="file" name="pdf" class="hidden" />
                                        </label> --}}
                                </div>

                                <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-red-800">Subir Noticia</button>
                                <button class="w-100 btn btn-outline-danger btn-lg" type="submit"></button>
                            </form>
                        </div>
                    </section>
                </div>
                <div>
                    <div class="text-center">
                        <h1 class="text-xl rojoBrillante">Últimos noticias</h1>
                    </div>
                    <ul class="list-group mb-3">
                        @foreach ($noticias as $noticia)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div class="inline-flex">
                                <span class="text-body-secondary">{{ $noticia->id }}. </span>
                                <h6 class="my-0 ml-1">{{ $noticia->titulo }}</h6>
                                
                            </div>
                            <small class="text-body-secondary">{{ $noticia->subtitulo }}</small>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- <div>
                <form novalidate="" action="{{ route('intranet.noticias.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="categorias_noticia" class="form-label">Categoría</label>
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
                        <label for="titulo">Título del noticia:</label>
                        <input type="text" name="titulo" id="titulo" required>
                    </div>
                
                    <div>
                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion" id="descripcion"></textarea>
                    </div>
                
                    <div>
                        <label for="file">Seleccionar noticia:</label>
                        <input type="file" name="file" id="file" required>
                    </div>
                
                    <button type="submit">Subir Noticia</button>
                </form>                
            </div> --}}
        </div>
    </div>
    @endsection
    
</x-privado-layout>