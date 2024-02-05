<div class="mx-auto w-full">
    <div class="flex flex-col h-full rounded-lg border border-zinc-900 shadow-md">
        <!-- Encabezado del comunicados -->
        <div class="p-2 border-b border-zinc-900 rounded-t-lg bg-red-500">
            <h2 class="text-xl font-bold">{{ $comunicado->numero }} . {{ $comunicado->titulo }}</h2>
        </div>
        <!-- Cuerpo del Comunicado -->
        <div class="empresa p-2 grid grid-flow-col">
            <div class="justify-self-start">
                <div class="py-0.5 px-2 inline rounded-full font-semibold bg-{{ $comunicado->empresa?->nombre }}">
                    @if($comunicado->empresa)
                        <a href="{{ route('empresas.show', ['slug' => $comunicado->empresa?->slug]) }}">{{ $comunicado->empresa?->nombre }}</a>
                    @endif
                </div>
            </div>
            <div class="justify-self-end">
                {{ $comunicado->fecha }}
            </div>
        </div>
        <div class="flex-grow p-2 overflow-auto bg-white">
            <p>{{ \Illuminate\Support\Str::limit($comunicado->cuerpo, 800, '...') }}</p>
            <button type="button" onclick="window.location='{{ route('comunicados.show', $comunicado->id) }}';">Leer más</button>
        
            {{-- <p class="text-black text-justify">{!! nl2br(e($comunicado->cuerpo))!!}</p> --}}
        </div>
        <div class="mt-auto p-1 text-center">
            <div class="py-0.5 px-2 inline-flex rounded-full font-semibold bg-{{ $comunicado->categoria?->nombre }}">
                @if($comunicado->categoria)
                    <a href="{{ route('categorias.show', ['slug' => $comunicado->categoria?->slug]) }}">{{ $comunicado->categoria?->nombre }}</a>
                @endif
            </div>
            @foreach ($comunicado->etiquetas as $etiqueta )
                <div class="py-0.5 px-2 m-0.5 inline-flex rounded-full font-semibold border-2 text-zinc-900 border-red-500">
                    <a href="{{ route('etiquetas.show', ['slug' => $etiqueta->slug]) }}">#{{ $etiqueta->nombre }}</a>
                </div>
            @endforeach
        </div>
        <!-- Pie del comunicado -->
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