{{-- <div class="mb-4 shadow hover:shadow-lg h-full flex flex-col bordeNegro rounded-lg">
    <div class="p-4 flex-1 h-140 bg-red-500 hover:bg-white rounded-t-lg">
        <a href="{{ url('documentos.show', $documento->id) }}">
            <h1 class="font-bold text-3xl">
                {{ $documento->titulo }}
            </h1>
        </a>
    </div>
    <div class="p-2 h-20 text-sm text-white bg-black">
        <span
            class="py-0.5 px-2 rounded-full font-semibold bg-{{ $documento->empresa?->nombre }}">{{ $documento->empresa?->nombre }}</span>
        <span
            class="py-0.5 px-2 rounded-full font-semibold bg-{{ $documento->categoria?->nombre }}">{{ $documento->categoria?->nombre }}</span>
        
            @foreach ($documento->etiquetas as $etiqueta )
                <span class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">{{ $etiqueta->nombre }}</span>
            @endforeach
    </div>
    <div class="bg-white py-2.5 px-4 hover:bg-blue-light h-full">
        <span>{{ $documento->fecha }}</span>
        <p class="text-black text-justify">{{ $documento->descripcion }}</p>
    </div>
    <div class="p-0.5 w-full inline-flex text-lg text-center bordeTopRojo rounded-b-lg bg-red-500  ">
        <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black">
            <a href="{{ $documento->pdf }}" class=""
                target="blank"><i class="lni lni-display verDocs mr-2 text-2xl"></i>Visualizar</a>
        </div>
        <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black">
            <a href="{{ $documento->pdf }}" class=""
                target="_blank" download="CGT_{{ $documento->titulo }}"><i
                    class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar</a>
        </div>
    </div>
</div> --}}

<div class="mx-auto">
    <div class="flex flex-col h-full rounded-lg border border-zinc-900 shadow-md">
        <!-- Card Header -->
        <div class="p-2 border-b border-zinc-900 rounded-t-lg bg-red-500">
            <h2 class="text-xl font-bold">{{ $documento->titulo }}</h2>
        </div>
        <!-- Card Body -->
        <div class="empresa p-2 grid grid-cols-2">
            <div class="justify-self-start">
                <div class="py-0.5 px-2 rounded-full font-semibold bg-{{ $documento->empresa?->nombre }}">{{ $documento->empresa?->nombre }}</div>
            </div>
            <div class="justify-self-end">
                <div class="py-0.5 px-2 rounded-full font-semibold bg-{{ $documento->categoria?->nombre }}">{{ $documento->categoria?->nombre }}</div>
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