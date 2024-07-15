{{-- <div class="mb-4 shadow hover:shadow-lg h-full flex flex-col bordeRojo rounded-lg">
    <div class="p-4 flex-1 bg-red-500 h-full hover:bg-white rounded-t-lg">
        <a href="{{ url('noticias.show', $noticia->id) }}">
            <h1 class="font-bold text-3xl">{{ $noticia->titulo }}
            </h1>
        </a>
    </div>
    <div class="grid grid-cols-2 gap-4 p-2 pt-4 text-sm text-white bg-black">
        <div class="">
            <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $noticia->empresa?->slug }}">{{ $noticia->empresa?->nombre }}</span>
        </div>
        <div class="justify-self-end">
            <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $noticia->categoria?->slug }}">{{ $noticia->categoria?->nombre }}</span>
        </div>
    </div>
    <div class="p-2 text-sm text-white bg-zinc-800">
        @foreach ($noticia->etiquetas as $etiqueta)
            <div class="mr-2 inline-flex">
                <span class="py-0.5 px-2 rounded-full font-semibold border border-red-500 text-red-500">{{ $etiqueta->nombre }}</span>
            </div>
        @endforeach
    </div>
    <div class="bg-white py-2.5 px-4 hover:bg-blue-light h-full">
        <img class="float-right" src="{{ asset('storage/' . $noticia->imagen) }}">
        <p class="text-black text-justify">{!! ($noticia->cuerpo)!!}</p>
    </div>
    <div class="p-0.5 w-full inline-flex text-lg text-center bordeTopRojo rounded-b-lg bg-red-500  ">
        <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black">
            <a href="/storage/{{ $noticia->adjunto }}" class="" target="blank"><i class="lni lni-display verDocs mr-2 text-2xl"></i>Ver Adjunto</a>
        </div>
        <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black">
            <a href="/storage/{{ $noticia->adjunto }}" class="" target="_blank" download="CGT_Afiliacion_Nomina"><i class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar Adjunto</a>
        </div>
    </div>
</div> --}}
<!-- Tarjeta Comunicado -->
<div class="max-w-md mx-auto border border-zinc-900 rounded-xl shadow-md overflow-hidden md:max-w-2xl flex flex-col min-h-0">
    <!-- Encabezado -->
    <div class="h-20 flex items-center p-2 border-b border-zinc-900 rounded-t-lg bg-red-500"
        title="{{ $noticia->titulo }}">
        <h2 class="font-bold text-lg line-clamp-2"> // {{ $noticia->titulo }}</h2>
    </div>
    <!-- Cuerpo -->
    <div class="flex-grow p-2 bg-white">
        <div class="mb-2 border border-red-500 h-48 rounded-lg">
            <img src="{{ $noticia->imagen }}" alt="">
        </div>
        <div class="grid grid-cols-2">
            <div class="p-2 justify-self-start">
                <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $noticia->empresa?->slug }}">
                    @if ($noticia->empresa)
                        <a href="{{ route('empresas.show', ['slug' => $noticia->empresa?->slug]) }}">{{ $noticia->empresa?->nombre }}</a>
                    @endif
                </div>
            </div>
            <div class="p-2 justify-self-end">
                <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $noticia->categoria?->slug }}">
                    @if ($noticia->categoria)
                        <a href="{{ route('categorias.show', ['slug' => $noticia->categoria?->slug]) }}">{{ $noticia->categoria?->nombre }}</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="py-1 px-4 justify-self-end italic">
                {{ $noticia->fecha }}
            </div>
        </div>
        <div class="px-2">
            <p class="text-base text-justify line-clamp-[20]">
                {!! $noticia->cuerpo !!}
            </p>
        </div>
        <div class="mt-auto p-1 text-center">
            @forelse ($noticia->etiquetas as $etiqueta)
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
        <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black text-center cursor-pointer" data-modal-target="noticia{{ $noticia->id }}" data-modal-toggle="noticia{{ $noticia->id }}">
            <span>
                <i class="lni lni-popup text-2xl mr-2 mb-1 align-middle"></i>Leer más...
            </span>
        </div>
        <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
            <a href="{{ $noticia->pdf }}" class="" target="_blank" download="CGT_{{ $noticia->titulo }}">
                <i class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar
            </a>
        </div>
    </div>
</div>
<!-- Modal toggle -->
<div id="noticia{{ $noticia->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0  z-50 w-full h-full outline-none  "
    aria-labelledby="noticia{{ $noticia->id }}">
    <div class="sm:h-[calc(100%-3rem)] max-w-2xl my-6 mx-auto relative w-auto pointer-events-none">
        <div
            class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-clip-padding rounded-md outline-none text-current">
            <!-- Modal header -->
            <div
                class="relative flex flex-shrink-0 items-center bg-red-500 justify-between p-4 pr-12 border-b border-zinc-900 rounded-t-xl">
                <h5 class="text-xl font-semibold leading-normal text-zinc-800" id="noticia{{ $noticia->id }}Titulo">
                     // {{ $noticia->titulo }}
                </h5>
                <button type="button" title="Cerrar"
                    class="absolute top-4 right-4 text-zinc-900 border-2 border-zinc-900 bg-transparent hover:bg-zinc-900 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="noticia{{ $noticia->id }}">
                    <i class="lni lni-close font-bold"></i>
                    <span class="sr-only">Cerrar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="flex-auto overflow-y-auto relative p-4 bg-white">
                <div>
                    <img src="{{ $noticia->imagen }}" alt="">
                </div>
                <div class="grid grid-cols-2">
                    <div class="p-2 justify-self-start">
                        <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $noticia->empresa?->slug }}">
                            @if ($noticia->empresa)
                                <a href="{{ route('empresas.show', ['slug' => $noticia->empresa?->slug]) }}">{{ $noticia->empresa?->nombre }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="p-2 justify-self-end">
                        <div class="py-0.5 px-2 inline rounded-full font-semibold badge-{{ $noticia->categoria?->slug }}">
                            @if ($noticia->categoria)
                                <a href="{{ route('categorias.show', ['slug' => $noticia->categoria?->slug]) }}">{{ $noticia->categoria?->nombre }}</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="py-1 px-4 justify-self-end italic">
                        {{ $noticia->fecha }}
                    </div>
                </div>
                <div class="grid grid-cols-1 text-justify">
                    {!! $noticia->cuerpo !!}
                </div>
                @forelse ($noticia->etiquetas as $etiqueta)
                    <div class="py-0.5 px-2 m-0.5 inline-flex rounded-full font-semibold border-2 text-zinc-900 border-red-500">
                        <a href="{{ route('etiquetas.show', ['slug' => $etiqueta->slug]) }}">#{{ $etiqueta->nombre }}</a>
                    </div>
                @empty
                    <p class="italic text-sm text-center">No hay etiquetas asociadas</p>
                @endforelse
            </div>
            <div class="flex items-center p-0.5 bg-red-500 border border-zinc-900 rounded-b-xl">
                <div class="w-1/3 rounded-bl-lg hover:text-red-500 hover:bg-black text-center cursor-pointer" data-modal-target="noticia{{ $noticia->id }}" data-modal-toggle="noticia{{ $noticia->id }}">
                    <a href="{{ $noticia->pdf }}" class="" target="_blank" download="CGT_{{ $noticia->titulo }}">
                        <i class="lni lni-popup text-2xl mr-2 mb-1 align-middle"></i>PDF
                    </a>
                </div>
                <div class="w-1/3 hover:text-red-500 hover:bg-black text-center">
                    <a href="{{ $noticia->jpg }}" class="" target="_blank" download="CGT_{{ $noticia->titulo }}">
                        <i class="lni lni-image text-2xl mr-2 mb-1 align-middle"></i>JPG
                    </a>
                </div>
                <div class="w-1/3 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
                    <a href="{{ $noticia->pdf }}" class="" target="_blank" download="CGT_{{ $noticia->titulo }}">
                        <i class="lni lni-download text-2xl mr-2 mb-1 align-middle"></i>ADJUNTO
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
