<x-publico-layout>
    @section('contenido')
        <div class="p-8 fondo comunicados">
            {{-- <div class="bg-blanco-transp bordeRojo rounded-lg p-4"> --}}
                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="encabezado-comunicados">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rounded-t-xl rtl:text-right border border-b-0 focus:ring-1 focus:ring-gray-800 border-gray-700 text-gray-400 hover:bg-red-500 hover:text-zinc-800 gap-3"
                            data-accordion-target="#acordeon-comunicados" aria-expanded="true"
                            aria-controls="acordeon-comunicados">
                            <span>Comunicados</span>
                            <i class="lni lni-chevron-down ml-1 mt-1 text-red-500 group-hover:text-white"></i>
                        </button>
                    </h2>
                    <div id="acordeon-comunicados" class="hidden" aria-labelledby="encabezado-comunicados">
                        <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 m-6 rounded-lg">
                            <div class="col-span-4 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
                            @foreach ($comunicados as $comunicado)                                
                                <x-comunicado :comunicado=$comunicado></x-comunicado>
                            @endforeach
                            <div class="col-span-4 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
                        </div>
                    </div>
                    <h2 id="encabezado-noticias">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#acordeon-noticias" aria-expanded="false"
                            aria-controls="acordeon-noticias">
                            <span>Noticias</span>
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
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#acordeon-documentos" aria-expanded="false"
                            aria-controls="acordeon-documentos">
                            <span>Documentos</span>
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
            {{-- </div> --}}
        </div>
    @endsection
</x-publico-layout>