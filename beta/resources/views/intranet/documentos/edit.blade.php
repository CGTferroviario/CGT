<x-privado-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Editar Documento') }}
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
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 text-sm text-gray-900 transition-colors duration-200 bg-rojoBrillante bordeNegro rounded-lg gap-x-2 sm:w-auto hover:bg-gray-900 hover:text-red-500" title="Volver al Índice de Documento">
                        <i class="lni lni-arrow-left"></i>
                        <a href="{{ route('intranet.documentos.index') }}" class="">Todos los Documentos</a>
                    </button>
                    <button class="flex items-center justify-center w-1/2 px-2 py-2 ml-2 text-sm text-gray-100 transition-colors duration-200 bg-oscuro border rounded-lg gap-x-2 sm:w-auto hover:bg-green-500 hover:text-gray-100" title="Importar datos desde un archivo .csv">
                        <i class="lni lni-upload"></i>
                        <span>Importar CSV</span>
                    </button>
                </div>
                <div class="sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-bold text-gray-800">Documentos</h2>
                        <span class="px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $documentos->count() }}</span>
                        <p class="mt-1 text-sm text-gray-500">Estos son los documentos que llevamos este año.</p>
                    </div>
                </div>
                <div class="sm:flex sm:items-center sm:justify-end">
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <section class="bg-oscuro-7 rounded-lg">
                        <div class="py-8 px-4 mx-auto">
                            <h2 class="mb-4 text-xl font-bold text-white text-center">Añadir Documento</h2>
                            <form action="{{ route('intranet.documentos.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 sm:grid-cols-4 sm:gap-6">
                                    
                                    <x-select-empresa-edit :empresas=$empresas :tipo=$documento></x-select-empresa-edit>

                                    <x-select-categoria-edit :categorias=$categorias :tipo=$documento></x-select-categoria-edit>
                                    
                                    <x-select-etiquetas-edit :etiquetas=$etiquetas :tipo=$documento></x-select-etiquetas-edit>

                                    <x-input-fecha-edit></x-input-fecha-edit>

                                </div>
                                <div class="grid gap-4 sm:grid-cols-12 sm:gap-6 mt-3">
                                    <div class="col-span-6">
                                        <label for="titulo" class="block mb-2 text-sm font-medium text-white">Título</label>
                                        <input type="text" name="titulo" id="titulo" class="w-full bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block p-2.5 placeholder-gray-400" placeholder="" value="" required="">
                                        <div class="">
                                            <label for="descripcion" class="block mb-2 text-sm font-medium text-white">Descripción</label>
                                            <textarea id="descripcion" rows="5" name="descripcion" class="block p-2.5 w-full text-sm text-white bg-gray-700 rounded-lg border border-gray-600 focus:ring-red-500 focus:border-red-500 placeholder-gray-400" placeholder="Una descripción del documento..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="pdf" class="block mb-2 text-sm font-medium text-white"><i class="lni lni-add-files text-lg mr-2 mb-0"></i>Documento en PDF</label>
                                        <input type="file" name="pdf" id="pdf" class="w-full bg-gray-900 rounded-lg text-white">
                                    </div>
                                </div>
                                <button type="submit" class="bg-red-500 w-full items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-red-800">Subir Documento</button>
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
        </div>
    </div>
    @endsection
    
</x-privado-layout>