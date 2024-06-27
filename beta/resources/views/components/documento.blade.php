{{-- <div class="mx-auto">
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
</div> --}}
<!-- Tarjeta Comunicado -->
<div class="max-w-md mx-auto border border-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl flex flex-col min-h-0">
    <!-- Encabezado -->
    <div class="h-20 flex items-center p-2 border-b border-zinc-900 rounded-t-lg bg-red-500"
        title="{{ $documento->titulo }}">
        <h2 class="font-bold text-lg line-clamp-2">{{ $documento->titulo }}</h2>
    </div>
    <!-- Cuerpo -->
    <div class="flex-grow p-2 bg-white">
        <div class="grid grid-cols-2">
            <div class="p-2 justify-self-start">
                <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $documento->empresa?->slug }}">
                    @if ($documento->empresa)
                        <a href="{{ route('empresas.show', ['slug' => $documento->empresa?->slug]) }}">{{ $documento->empresa?->nombre }}</a>
                    @endif
                </div>
            </div>
            <div class="p-2 justify-self-end">
                <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $documento->categoria?->slug }}">
                    @if ($documento->categoria)
                        <a href="{{ route('categorias.show', ['slug' => $documento->categoria?->slug]) }}">{{ $documento->categoria?->nombre }}</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="py-1 px-4 justify-self-end italic">
                {{ $documento->fecha }}
            </div>
        </div>
        <div class="px-2">
            <p class="text-base text-justify line-clamp-[20]">
                {!! $documento->descripcion !!}
            </p>
        </div>
        <div class="mt-auto p-1 text-center">
            @forelse ($documento->etiquetas as $etiqueta)
                <div
                    class="py-0.5 px-2 m-0.5 inline-flex rounded-full font-semibold border-2 text-zinc-900 border-red-500">
                    <a href="{{ route('etiquetas.show', ['slug' => $etiqueta->slug]) }}">#{{ $etiqueta->nombre }}</a>
                </div>
            @empty
                <p class="italic text-sm">No hay etiquetas asociadas</p>
            @endforelse
        </div>
    </div>
    <!-- Footer -->
    <div class="p-0.5 border-t border-zinc-900 rounded-b-lg mt-auto inline-flex bg-red-500">
        <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black text-center cursor-pointer" data-modal-target="documento{{ $documento->numero }}" data-modal-toggle="documento{{ $documento->numero }}">
            <span>
                <i class="lni lni-popup text-2xl mr-2 mb-1 align-middle"></i>Leer más...
            </span>
        </div>
        <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
            <a href="{{ $documento->pdf }}" class="" target="_blank" download="CGT_{{ $documento->titulo }}">
                <i class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar
            </a>
        </div>
    </div>
</div>