<div id="contenido-tabs" class="bg-blanco-transp">
    <div class="hidden p-4 rounded-lg bg-blanco-transp" id="comunicados-tab" role="tabpanel" aria-labelledby="comunicados-tab">
        <div class="w-full text-sm md:text-xs p-2 paginacion">{{ $comunicados->links('vendor.pagination.tailwind') }}</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 m-6 rounded-lg">
            @foreach ($comunicados as $comunicado)                                
                <x-comunicado :comunicado=$comunicado></x-comunicado>
            @endforeach
        </div>
    </div>
    <div class="hidden p-4 rounded-lg" id="documentos-tab" role="tabpanel" aria-labelledby="documentos-tab">
        <div class="w-full text-sm md:text-xs p-2 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 m-6 rounded-lg">
            @foreach ($documentos as $documento)                                
                <x-documento :documento=$documento></x-documento>
            @endforeach
        </div>
        <div class="w-full text-sm md:text-xs p-2 paginacion">{{ $documentos->links('vendor.pagination.tailwind') }}</div>
    </div>
    <div class="hidden p-4 rounded-lg bg-blanco-transp" id="noticias-tab" role="tabpanel" aria-labelledby="noticias-tab">
        <div class="col-span-4 paginacion">{{ $noticias->links('vendor.pagination.tailwind') }}</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 m-6 rounded-lg">
            @foreach ($noticias as $noticia)                                
                <x-noticia :noticia=$noticia></x-noticia>
            @endforeach
        </div>
        <div class="col-span-4 paginacion">{{ $noticias->links('vendor.pagination.tailwind') }}</div>
    </div>
</div>