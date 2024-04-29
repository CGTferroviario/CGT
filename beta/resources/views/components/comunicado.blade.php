<!-- Tarjeta Comunicado -->
<div
    class="max-w-md mx-auto border border-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl flex flex-col min-h-0">
    <!-- Encabezado -->
    <div class="h-20 flex items-center p-2 border-b border-zinc-900 rounded-t-lg bg-red-500"
        title="{{ $comunicado->titulo }}">
        <h2 class="font-bold text-lg line-clamp-2">{{ $comunicado->numero }} // {{ $comunicado->titulo }}</h2>
    </div>
    <!-- Cuerpo -->
    <div class="flex-grow p-2 bg-white">
        <div class="grid grid-cols-2">
            <div class="p-2 justify-self-start">
                <div class="py-0.5 px-2 inline rounded-full font-semibold bg-{{ $comunicado->empresa?->slug }}">
                    @if ($comunicado->empresa)
                        <a
                            href="{{ route('empresas.show', ['slug' => $comunicado->empresa?->slug]) }}">{{ $comunicado->empresa?->nombre }}</a>
                    @endif
                </div>
            </div>
            <div class="p-2 justify-self-end">
                <div class="py-0.5 px-2 inline rounded-full font-semibold bg-{{ $comunicado->categoria?->slug }}">
                    @if ($comunicado->categoria)
                        <a
                            href="{{ route('categorias.show', ['slug' => $comunicado->categoria?->slug]) }}">{{ $comunicado->categoria?->nombre }}</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="py-1 px-4 justify-self-end italic">
                {{ $comunicado->fecha }}
            </div>
        </div>
        <div class="px-2">
            <p class="text-base text-justify line-clamp-[20]">
                {!! $comunicado->cuerpo !!}
            </p>
        </div>
        
        <div class="mt-auto p-1 text-center">
            @forelse ($comunicado->etiquetas as $etiqueta)
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
        <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black text-center cursor-pointer"
            data-modal-target="comunicado{{ $comunicado->numero }}"
            data-modal-toggle="comunicado{{ $comunicado->numero }}">
            <span>
                <i class="lni lni-popup text-2xl mr-2 mb-1 align-middle"></i>Leer más...
            </span>
        </div>
        <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
            <a href="{{ $comunicado->pdf }}" class="" target="_blank"
                download="CGT_{{ $comunicado->titulo }}"><i
                    class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar</a>
        </div>
    </div>
</div>
<!-- Modal toggle -->
<div id="comunicado{{ $comunicado->numero }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0  z-50 w-full h-full outline-none  "
    aria-labelledby="comunicado{{ $comunicado->numero }}">
    <div class="sm:h-[calc(100%-3rem)] max-w-2xl my-6 mx-auto relative w-auto pointer-events-none">
        <div
            class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-clip-padding rounded-md outline-none text-current">
            <!-- Modal header -->
            <div
                class="relative flex flex-shrink-0 items-center bg-red-500 justify-between p-4 pr-12 border-b border-zinc-900 rounded-t-xl">
                <h5 class="text-xl font-semibold leading-normal text-zinc-800"
                    id="comunicado{{ $comunicado->numero }}Titulo">
                    COM.{{ $comunicado->numero }} // {{ $comunicado->titulo }}
                </h5>
                <button type="button" title="Cerrar"
                    class="absolute top-4 right-4 text-zinc-900 border-2 border-zinc-900 bg-transparent hover:bg-zinc-900 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="comunicado{{ $comunicado->numero }}">

                    <i class="lni lni-close font-bold"></i>
                    <span class="sr-only">Cerrar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="flex-auto overflow-y-auto relative p-4 bg-white">
                <div class="grid grid-cols-2">
                    <div class="p-2 justify-self-start">
                        <div
                            class="py-0.5 px-2 inline rounded-full font-semibold bg-{{ $comunicado->empresa?->slug }}">
                            @if ($comunicado->empresa)
                                <a
                                    href="{{ route('empresas.show', ['slug' => $comunicado->empresa?->slug]) }}">{{ $comunicado->empresa?->nombre }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="p-2 justify-self-end">
                        <div
                            class="py-0.5 px-2 inline rounded-full font-semibold bg-{{ $comunicado->categoria?->slug }}">
                            @if ($comunicado->categoria)
                                <a
                                    href="{{ route('categorias.show', ['slug' => $comunicado->categoria?->slug]) }}">{{ $comunicado->categoria?->nombre }}</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="py-1 px-4 justify-self-end italic">
                        {{ $comunicado->fecha }}
                    </div>
                </div>
                <div class="grid grid-cols-1 text-justify">
                    {!! $comunicado->cuerpo !!}
                </div>
                @forelse ($comunicado->etiquetas as $etiqueta)
                    <div
                        class="py-0.5 px-2 m-0.5 inline-flex rounded-full font-semibold border-2 text-zinc-900 border-red-500">
                        <a
                            href="{{ route('etiquetas.show', ['slug' => $etiqueta->slug]) }}">#{{ $etiqueta->nombre }}</a>
                    </div>
                @empty
                    <p class="italic text-sm text-center">No hay etiquetas asociadas</p>
                @endforelse
            </div>
            <div class="flex items-center p-0.5 bg-red-500 border border-zinc-900 rounded-b-xl">
                <div class="w-1/3 rounded-bl-lg hover:text-red-500 hover:bg-black text-center cursor-pointer"
                    data-modal-target="comunicado{{ $comunicado->numero }}"
                    data-modal-toggle="comunicado{{ $comunicado->numero }}">
                    <span>
                        <i class="lni lni-popup text-2xl mr-2 mb-1 align-middle"></i>PDF
                    </span>
                </div>
                <div class="w-1/3 hover:text-red-500 hover:bg-black text-center">
                    <a href="{{ $comunicado->pdf }}" class="" target="_blank"
                        download="CGT_{{ $comunicado->titulo }}"><i
                            class="lni lni-download verDocs mr-2 text-2xl"></i>JPG</a>
                </div>
                <div class="w-1/3 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
                    <a href="{{ $comunicado->pdf }}" class="" target="_blank"
                        download="CGT_{{ $comunicado->titulo }}"><i
                            class="lni lni-download verDocs mr-2 text-2xl"></i>ADJUNTO</a>
                </div>
            </div>
        </div>
    </div>
</div>
