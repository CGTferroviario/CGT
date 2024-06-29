<x-publico-layout>

    <x-slot name="header">
        <h1 class="m-0 py-3 text-center bg-red-500 text-zinc-900 font-bold leading-tight titular">
            Categoría: {{ $categoria->nombre }}
        </h1>
    </x-slot>

    @section('contenido')
        <div class="p-8 fondo {{ $categoria->slug }}">
            <x-slot name="header">
                <h1 class="m-0 py-3 text-center bg-red-500 text-zinc-900 font-bold leading-tight titular">
                    Categoría: {{ $categoria->nombre }}
                </h1>
            </x-slot>
            <div class="bg-zinc-900 bg-blanco-transp bordeRojo rounded-lg p-4">
                <div class="border-b border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-400" id="tabs" data-tabs-toggle="#tabs-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 text-purple-500 hover:text-purple-500 border-purple-600 border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 text-gray-400 border-gray-100 hover:border-gray-300 border-gray-700 hover:text-gray-300" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="comunicados-tab-button" data-tabs-target="#comunicados-tab" type="button" role="tab" aria-controls="comunicados" aria-selected="false">
                                <i class="lni lni-bullhorn text-lg mr-2"></i> Comunicados
                            </button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:border-gray-300 hover:text-gray-300" id="noticias-tab-button" data-tabs-target="#noticias-tab" type="button" role="tab" aria-controls="noticias" aria-selected="false">
                                <i class="lni lni-train text-lg mr-2"></i> Noticias
                            </button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:border-gray-300 hover:text-gray-300" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                <i class="lni lni-files text-lg mr-2"></i> Documentos
                            </button>
                        </li>
                    </ul>
                </div>
                <div id="tabs-content">
                    <div class="hidden p-4 rounded-lg bg-blanco-transp" id="comunicados-tab" role="tabpanel" aria-labelledby="comunicados-tab">
                        <div class="w-full text-sm md:text-xs p-2 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 m-6 rounded-lg">
                            @foreach ($comunicados as $comunicado)                                
                                <x-comunicado :comunicado=$comunicado></x-comunicado>
                            @endforeach
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-blanco-transp" id="noticias-tab" role="tabpanel" aria-labelledby="noticias-tab">
                        <div class="col-span-4 paginacion">{{ $noticias->links('vendor.pagination.tailwind') }}</div>
                        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 m-6 rounded-lg">
                            @foreach ($noticias as $noticia)                                
                                <x-noticia :noticia=$noticia></x-noticia>
                            @endforeach
                        </div>
                        <div class="col-span-4 paginacion">{{ $noticias->links('vendor.pagination.tailwind') }}</div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
                        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 m-6 rounded-lg">
                            @foreach ($documentos as $documento)                                
                                <x-documento :documento=$documento></x-documento>
                            @endforeach
                        </div>
                        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</x-publico-layout>