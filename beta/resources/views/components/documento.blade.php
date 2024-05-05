<div class="mx-auto">
    <div class="flex flex-col h-full rounded-lg border border-zinc-900 shadow-md">
        <!-- Card Header -->
        <div class="p-2 border-b border-zinc-900 rounded-t-lg bg-red-500">
            <h2 class="text-xl font-bold">{{ $documento->titulo }}</h2>
        </div>
        <!-- Card Body -->
        <div class="empresa p-2 grid grid-cols-2">
            <div class="justify-self-start">
                <div class="py-0.5 px-2 rounded-full font-semibold badge-{{ $documento->empresa?->slug }}" title="{{ $documento->empresa?->nombre }}">{{ $documento->empresa?->nombre }}</div>
            </div>
            <div class="justify-self-end">
                <div class="py-0.5 px-2 rounded-full font-semibold badge-{{ $documento->categoria?->slug }}">{{ $documento->categoria?->nombre }}</div>
            </div>
        </div>
        <div class="flex-grow p-2 overflow-auto">
            {{ $documento->descripcion }}
        </div>
        <div class="mt-auto p-1 text-center">
            @foreach ($documento->etiquetas as $etiqueta )
                <div class="py-0.5 px-2 m-0.5 inline-flex rounded-full font-semibold border-2 text-zinc-900 border-red-500">#{{ $etiqueta->nombre }}</div>
            @endforeach
        </div>
        <!-- Card Footer -->
        <div class="p-0.5 border-t border-zinc-900 rounded-b-lg mt-auto inline-flex bg-red-500">
            <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black text-center">
                <a href="{{ $documento->pdf }}" class=""
                    target="blank"><i class="lni lni-display verDocs mr-2 text-2xl"></i>Visualizar</a>
            </div>
            <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
                <a href="{{ $documento->pdf }}" class=""
                    target="_blank" download="CGT_{{ $documento->titulo }}"><i
                        class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar</a>
            </div>
        </div>
    </div>
</div>