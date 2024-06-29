<x-publico-layout>
    @section('contenido')
        <x-slot name="header">
            <h1 class="m-0 py-3 text-center bg-red-500 text-zinc-900 font-bold leading-tight titular">
                Etiqueta: {{ $etiqueta->nombre }}
            </h1>
        </x-slot>
        <div class="p-8 fondo {{ str_replace('-', ' ', $etiqueta->slug) }}">
            <div class="bg-blanco-transp bordeRojo rounded-lg">
                <div class="border-b border-zinc-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-zinc-400" id="tabs" data-tabs-toggle="#tabs-content" data-tabs-active-classes="!text-red-600 hover:text-red-600 text-red-500 hover:text-red-500 border-red-600 border-red-500" data-tabs-inactive-classes="border-transparent text-zinc-500 hover:text-zinc-600 text-zinc-400 border-zinc-100 hover:border-zinc-300 border-zinc-700 hover:text-zinc-300" role="tablist">
                        <li class="me-2 bg-red-500 !text-zinc-900" role="presentation">
                            <a href="#" class="inline-block p-4 border-b-2 rounded-t-lg text-zinc-900" id="comunicados-tab-button" data-tabs-target="#comunicados-tab" type="button" role="tab" aria-controls="comunicados" aria-selected="false" data-tabs-active-classes="bg-red-500 text-red-500">
                                <i class="lni lni-bullhorn text-lg mr-2"></i> Comunicados
                            </a>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:border-zinc-300 hover:text-zinc-300" id="noticias-tab-button" data-tabs-target="#noticias-tab" type="button" role="tab" aria-controls="noticias" aria-selected="false">
                                <i class="lni lni-train text-lg mr-2"></i> Noticias
                            </button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:border-zinc-300 hover:text-zinc-300" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                <i class="lni lni-files text-lg mr-2"></i> Documentos
                            </button>
                        </li>
                    </ul>
                </div>
                <div id="tabs-content" class="bg-blanco-transp">
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
                    <div class="hidden p-4 rounded-lg" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
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
