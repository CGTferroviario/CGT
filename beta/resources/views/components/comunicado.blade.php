<div class="mx-auto w-full">
    <div class="flex flex-col h-full rounded-lg border border-zinc-900 shadow-md bg-white">
        <!-- Encabezado del comunicados -->
        <div class="p-2 border-b border-zinc-900 rounded-t-lg bg-red-500">
            <h2 class="text-xl font-bold">{{ $comunicado->numero }} // {{ $comunicado->titulo }}</h2>
        </div>
        <!-- Cuerpo del Comunicado -->
        <div class="grid grid-cols-2 mt-2">
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
        <div class="flex-grow p-2 overflow-auto">
            <p class="text-black text-justify">
                {{-- Ponemos este texto entre exclamaciones para que no muestre etiquetas html --}}
                {!! \Illuminate\Support\Str::limit($comunicado->cuerpo, 800, '...') !!}
            </p>
            <button class="rounded-lg border border-black p-2 bg-red-500 text-sm" type="button"
                onclick="window.location='{{ route('comunicados.show', $comunicado->id) }}';">Leer más</button>
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
        <!-- Pie del comunicado -->
        <div class="p-0.5 border-t border-zinc-900 rounded-b-lg mt-auto inline-flex bg-red-500">
            <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black text-center">
                <a href="{{ $comunicado->pdf }}" class="" target="blank">
                    {{-- <i class="lni lni-display verDocs mr-2 text-2xl"></i> --}}
                    <i class="lni lni-popup text-2xl mr-2 mb-1 align-middle"></i>Leer más...</a>
            </div>
            <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
                <a href="{{ $comunicado->pdf }}" class="" target="_blank"
                    download="CGT_{{ $comunicado->titulo }}"><i
                        class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar</a>
            </div>
        </div>
    </div>
</div>

<!-- Card Component -->
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl flex flex-col h-full">
    <!-- Header -->
    <div class="h-20 flex items-center p-2 border-b border-zinc-900 rounded-t-lg bg-red-500"
        title="{{ $comunicado->titulo }}">
        <h2 class="font-bold text-lg line-clamp-2">{{ $comunicado->numero }} // {{ $comunicado->titulo }}</h2>
    </div>
    <!-- Body -->
    <div class="flex-grow p-2">
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
        <p class="text-base text-justify line-clamp-[20]">
            {!! $comunicado->cuerpo !!}
        </p>
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
<div id="comunicaddo{{ $comunicado->numero }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 left-0  z-50 w-full h-full outline-none  " aria-labelledby="comunicado{{ $comunicado->numero }}Titulo">
    <div class="sm:h-[calc(100%-3rem)] max-w-lg my-6 mx-auto relative w-auto pointer-events-none">
        <div
            class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <!-- Modal header -->
            <div class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800"
                    id="comunicado{{ $comunicado->numero }}Titulo">
                    COM.{{ $comunicado->numero }} // {{ $comunicado->titulo }}
                </h5>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="comunicaddo{{ $comunicado->numero }}">

                    <i class="lni lni-close"></i>
                    <span class="sr-only">Cerrar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="flex-auto overflow-y-auto relative p-4">
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
                {!! $comunicado->cuerpo !!}
                <p>This content should appear at the bottom after you scroll.</p>
            </div>
            <div
                class="flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                    class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Main modal -->
<div id="comunicado{{ $comunicado->numero }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full">
    {{-- md:inset-0 h-[calc(100%-1rem)] max-h-screen --}}
    <div class="relative p-4 w-full max-w-2xl max-h-screen">
        <!-- Modal content -->
        {{-- <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 sm:h-[calc(100%-3rem)]  "> --}}
        <div class="sm:h-[calc(100%-3rem)] bg-white max-w-lg my-6 mx-auto relative w-auto pointer-events-none">
            <div
            class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <!-- Modal header -->
                <div class="flex flex-shrink-0 items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        {{ $comunicado->numero }} // {{ $comunicado->titulo }}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="comunicado{{ $comunicado->numero }}">

                        <i class="lni lni-close"></i>
                        <span class="sr-only">Cerrar</span>
                    </button>

                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 flex-auto relative space-y-4 overflow-y-auto">
                    {{-- h-[calc(100%-1rem)] max-h-screen  --}}
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-justify">
                        {!! $comunicado->cuerpo !!}
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="comunicado{{ $comunicado->numero }}" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                        accept</button>
                    <button data-modal-hide="comunicado{{ $comunicado->numero }}" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </div>
        </div>
    </div>
</div>
