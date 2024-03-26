<x-publico-layout>
    @section('contenido')
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-zinc-900 leading-tight titular">
                {{ $empresa->nombre }}
            </h2>
        </x-slot>
        <div class="p-8 fondo comunicados">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 class="text-zinc-200" id="encabezado-comunicados">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rounded-t-xl rtl:text-right border border-b-0 focus:ring-1 focus:ring-zinc-800 border-zinc-700 text-zinc-200 group-hover:text-white bg-red-500 hover:bg-red-500 hover:text-zinc-800 gap-3"
                        data-accordion-target="#acordeon-comunicados" aria-expanded="true"
                        aria-controls="acordeon-comunicados">
                        <span class="rounded-full py-2 px-4 bg-black">{{ $comunicados->count() }}</span><span>Comunicados</span>
                        <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-black active:text-black"></i>
                    </button>
                </h2>
                <div id="acordeon-comunicados" class="hidden" aria-labelledby="encabezado-comunicados">
                    <div class="w-full text-sm md:text-xs p-2 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 m-6 rounded-lg">
                        @foreach ($comunicados as $comunicado)                                
                            <x-comunicado :comunicado=$comunicado></x-comunicado>
                        @endforeach
                    </div>
                </div>
                <h2 id="encabezado-noticias">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border border-b-0 focus:ring-1 focus:ring-zinc-800 border-zinc-700 text-zinc-800 bg-red-500 hover:bg-red-500 hover:text-zinc-800 gap-3"
                        data-accordion-target="#acordeon-noticias" aria-expanded="false"
                        aria-controls="acordeon-noticias">
                        <span class="rounded-full py-2 px-4 bg-black active:bg-red-500">{{ $noticias->count() }}</span><span>Noticias</span>
                        <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i>
                    </button>
                </h2>
                <div id="acordeon-noticias" class="hidden" aria-labelledby="encabezado-noticias">
                    <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 m-6 rounded-lg">
                        <div class="col-span-4 paginacion">{{ $noticias->links('vendor.pagination.tailwind') }}</div>
                        @foreach ($noticias as $noticia)                                
                            <x-noticia :noticia=$noticia></x-noticia>
                        @endforeach
                        <div class="col-span-4 paginacion">{{ $noticias->links('vendor.pagination.tailwind') }}</div>
                    </div>
                </div>
                <h2 id="encabezado-documentos">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border border-b-0 focus:ring-1 focus:ring-zinc-800 border-zinc-700 text-zinc-800 bg-red-500 hover:bg-red-500 hover:text-zinc-800 gap-3"
                        data-accordion-target="#acordeon-documentos" aria-expanded="false"
                        aria-controls="acordeon-documentos">
                        <span class="rounded-full py-2 px-4 bg-black">{{ $documentos->count() }}</span><span>Documentos</span>
                        <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i>
                    </button>
                </h2>
                <div id="acordeon-documentos" class="hidden" aria-labelledby="encabezado-documentos">
                    <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 m-6 rounded-lg">
                        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
                        @foreach ($documentos as $documento)                                
                            <x-documento :documento=$documento></x-documento>
                        @endforeach
                        <div class="col-span-4 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-publico-layout>
