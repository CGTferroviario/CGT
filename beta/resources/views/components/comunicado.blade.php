{{-- <div class="mb-4 shadow hover:shadow-lg h-full flex flex-col  items-stretch bordeNegro rounded-lg">
    <div class="p-4 bg-red-500 hover:bg-white rounded-t-lg">
        <a href="{{ url('comunicados.show', $comunicado->id) }}">
            <h1 class="font-bold text-3xl">{{ $comunicado->numero }} . {{ $comunicado->titulo }}</h1>
        </a>
    </div>
    <div class="p-2 text-sm text-white bg-black">
        <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span>
        <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span>
    </div>
    
    <div class="bg-white py-2.5 px-4 hover:bg-blue-light h-full">
        <p class="text-black text-justify">{!! nl2br(e($comunicado->cuerpo))!!}</p>
        <p class="text-black text-justify">{!! ($comunicado->cuerpo) !!}</p>

    </div>
    <div class="p-2 text-sm text-white bg-black">
        @foreach ($comunicado->etiquetas as $etiqueta)
            <span class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">{{ $etiqueta->nombre }}</span>
        @endforeach
    </div>
    <div class="p-0.5 w-full inline-flex text-lg text-center bordeTopRojo rounded-b-lg bg-red-500">
        <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black">
            <a href="{{ $comunicado->pdf }}" class="" target="blank"><i class="lni lni-display verDocs mr-2 text-2xl"></i>
                Visualizar
            </a>
        </div>
        <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black">
            <a href="{{ $comunicado->pdf }}" class="" target="_blank" download="CGT_{{ $comunicado->titulo }}">
                <i class="lni lni-download verDocs mr-2 text-2xl"></i>
                Descargar
            </a>
        </div>
    </div>
</div> --}}

{{-- <div class="flex flex-col max-w-xs rounded overflow-hidden shadow-lg">
    <!-- Header -->
    <div class="flex-1 bg-zinc-200 py-2 px-4">
        <!-- Header content goes here -->
        <h1 class="font-bold text-3xl">{{ $comunicado->numero }} . {{ $comunicado->titulo }}</h1>
    </div>

    <div class="bg-red-500 text-sm py-2 px-4">
        <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span>
        <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span>
    </div>

    <!-- Body -->
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <!-- Body content goes here -->
        Card Body
    </div>

    <!-- Footer -->
    <div class="bg-zinc-200 py-2 px-4">
        <!-- Footer content goes here -->
        Card Footer
    </div>
</div> --}}

<div class="mx-auto w-full">
    <div class="flex flex-col h-full rounded-lg border border-zinc-900 shadow-md">
        <!-- Card Header -->
        <div class="p-2 border-b border-zinc-900 rounded-t-lg bg-red-500">
            <h2 class="text-xl font-bold">{{ $comunicado->numero }} . {{ $comunicado->titulo }}</h2>
        </div>
        <!-- Card Body -->
        <div class="empresa p-2 grid grid-flow-col">
            <div class="justify-self-start">
                <div class="py-0.5 px-2 rounded-full font-semibold bg-{{ $comunicado->empresa?->nombre }}">
                    <a href="{{ route('intranet.empresas.show', $comunicado->empresa?->id) }}">{{ $comunicado->empresa?->nombre }}</a>
                </div>
            </div>
            <div class="justify-self-end">
                {{ $comunicado->fecha }}
            </div>
        </div>
        <div class="flex-grow p-2 overflow-auto">
            {{ $comunicado->cuerpo }}
        </div>
        <div class="mt-auto p-1 text-center">
            <div class="py-0.5 px-2 inline-flex rounded-full font-semibold bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</div>
            @foreach ($comunicado->etiquetas as $etiqueta )
                <div class="py-0.5 px-2 m-0.5 inline-flex rounded-full font-semibold border-2 text-zinc-900 border-red-500">#{{ $etiqueta->nombre }}</div>
            @endforeach
        </div>
        <!-- Card Footer -->
        <div class="p-0.5 border-t border-zinc-900 rounded-b-lg mt-auto inline-flex bg-red-500">
            <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black text-center">
                <a href="{{ $comunicado->pdf }}" class=""
                    target="blank"><i class="lni lni-display verDocs mr-2 text-2xl"></i>Visualizar</a>
            </div>
            <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black text-center">
                <a href="{{ $comunicado->pdf }}" class=""
                    target="_blank" download="CGT_{{ $comunicado->titulo }}"><i
                        class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar</a>
            </div>
        </div>
    </div>
</div>