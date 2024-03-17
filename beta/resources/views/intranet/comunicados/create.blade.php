<x-privado-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight titular2">
            {{ __('Añadir Comunicados') }}
        </h2>
    </x-slot>
    @section('contenido')
    <div class="p-8 fondo comunicados">
        <div class="bg-blanco-transp bordeRojo rounded-lg p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 mt-2 mb-3">
                <div class="col-span-1 md:col-span-3">
                    <x-mensaje></x-mensaje>
                </div>
                <div class="col-span-1 md:col-span-3 gap-x-3 md:flex">
                    <div class="mb-3 text-center">
                        <button class="w-full px-2 py-2 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg hover:bg-zinc-900 hover:text-red-500 hover:border-red-500" title="Volver al índice de los comunicados">
                            <i class="lni lni-arrow-left"></i>
                            <a href="{{ route('intranet.comunicados.index') }}" class="">Todos los comunicados</a>
                        </button>
                    </div>
                    <div class="mb-3 shrink text-center">
                        <button class="w-full px-2 py-2 text-sm text-zinc-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 hover:bg-green-500 hover:text-zinc-100" title="Importar datos desde un archivo .csv">
                            <i class="lni lni-upload"></i>
                            <span>Importar CSV</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
                <div class="xl:col-span-2">
                    <section class="bg-oscuro-7 rounded-lg">
                        <div class="py-8 px-4 mx-auto">
                            <h2 class="mb-4 text-xl font-bold text-white text-center">Añadir Comunicado</h2>
                            <form action="{{ route('intranet.comunicados.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="p-4 mb-2 bordeRojo rounded-lg bg-red-200 text-sm text-red-500">
                                        <ul class="pl-4 list-disc">
                                            @foreach ($errors->all() as $error)
                                            <li class="">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="grid gap-3 grid-cols-2 lg:grid-cols-4">
                                    <x-forms.select-empresa :empresas=$empresas></x-select-empresa>

                                    <x-forms.select-categoria :categorias=$categorias></x-select-categoria>
                                    
                                    <x-forms.select-etiquetas :etiquetas=$etiquetas></x-select-etiquetas>

                                    <x-forms.input-fecha></x-input-fecha>
                                </div>
                                <div class="grid grid-cols-12 gap-3 mt-3">
                                    <div class="col-span-2 xl:col-span-1">
                                        <label for="numero" class="block mb-2 text-sm font-medium text-white">Nº</label>
                                        <input type="text" name="numero" id="numero" class="w-full bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" placeholder="" required="">
                                    </div>
                                    <div class="col-span-10 xl:col-span-11">
                                        <label for="titulo" class="block mb-2 text-sm font-medium text-white">Título</label>
                                        <input type="text" name="titulo" id="titulo" class="w-full bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" placeholder="" value="" required="">
                                    </div>
                                    <div class="col-span-12">
                                        <label for="subtitulo" class="block mb-2 text-sm font-medium text-white">Subtítulo</label>
                                        <input type="text" name="subtitulo" id="subtitulo" class="w-full bg-zinc-700 border border-zinc-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-zinc-400" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="cuerpo" class="block mb-2 text-sm font-medium text-white">Cuerpo</label>
                                    <x-head.tinymce-config />
                                    {{-- <x-forms.tinymce-editor /> --}}
                                    <textarea id="cuerpo" name="cuerpo" rows="20" class="block p-2.5 w-full text-sm rounded-lg border bg-zinc-700 border-zinc-600 placeholder-zinc-400 text-white focus:ring-red-500 focus:border-red-500" placeholder="El cuerpo del comunicado..."></textarea>
                                </div>
                                <div class="grid gap-4 grid-cols-1 2xl:grid-cols-3 sm:gap-6 mt-3">
                                    <div class="w-full">
                                        <label for="pdf" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-add-files text-lg mr-2 mb-0"></i>Comunicado en PDF</label>
                                        <input type="file" name="pdf" class="bg-red-500 text-xs rounded-full">
                                    </div>
                                    <div class="w-full">
                                        <label for="imagen" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-image text-lg mr-2 mb-0"></i>Comunicado en JPG</label>
                                        <input type="file" name="imagen" class="bg-red-500 text-xs rounded-full">
                                    </div>
                                    <div class="w-full">
                                        <label for="adjunto" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-files text-lg mr-2 mb-0"></i>Adjunto adicional</label>
                                        <input type="file" name="adjunto" class="text-xs bg-red-500 rounded-full">
                                    </div>
                                </div>
                                <button type="submit" class="w-full px-2 py-2 mt-5 text-sm text-zinc-900 transition-colors duration-200 bg-red-500 bordeNegro rounded-lg gap-x-2 hover:bg-zinc-900 hover:text-red-500 hover:border-red-500">Subir Comunicado</button>
                                <button class="w-100 btn btn-outline-danger btn-lg" type="submit"></button>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="">
                    <div class="text-center">
                        <h1 class="text-xl rojoBrillante">Últimos comunicados</h1>
                    </div>
                    <ul class="list-group mb-3">
                        @foreach ($comunicados as $comunicado)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div class="inline-flex">
                                <span class="text-body-secondary">{{ $comunicado->numero }}/ </span>
                                <h6 class="my-0 ml-1">{{ $comunicado->titulo }}</h6>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-privado-layout>