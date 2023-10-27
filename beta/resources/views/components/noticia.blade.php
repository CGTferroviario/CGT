<div class="mb-4 shadow hover:shadow-lg h-full flex flex-col bordeRojo rounded-lg">
    <div class="p-4 flex-1 bg-red-500 h-full hover:bg-white rounded-t-lg">
        <a href="{{ url('noticias.show', $noticia->id) }}">
            <h1 class="font-bold text-3xl">{{ $noticia->id }} . {{ $noticia->titulo }}
            </h1>
        </a>
    </div>
    <div class="p-2 text-sm text-white bg-black">
        <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $noticia->empresa?->nombre }}">{{ $noticia->empresa?->nombre }}</span>
        <span class="py-0.5 px-2 rounded-full font-semibold bg-{{ $noticia->categoria?->nombre }}">{{ $noticia->categoria?->nombre }}</span>
    </div>
    <div class="p-2 text-sm text-white bg-black">
        @foreach ($noticia->etiquetas as $etiqueta)
            <span class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">{{ $etiqueta->nombre }}</span> <br>
        @endforeach
    </div>
    <div class="bg-white py-2.5 px-4 hover:bg-blue-light h-full">
        <img class="float-right" src="{{ $noticia->imagen }}">
        <p class="text-black text-justify">{!! nl2br(e($noticia->cuerpo))!!}</p>
    </div>
    <div class="p-0.5 w-full inline-flex text-lg text-center bordeTopRojo rounded-b-lg bg-red-500  ">
        <div class="w-1/2 rounded-bl-lg hover:text-red-500 hover:bg-black">
            <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class=""
                target="blank"><i class="lni lni-display verDocs mr-2 text-2xl"></i>Visualizar</a>
        </div>
        <div class="w-1/2 rounded-br-lg hover:text-red-500 hover:bg-black">
            <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class=""
                target="_blank" download="CGT_Afiliacion_Nomina"><i
                    class="lni lni-download verDocs mr-2 text-2xl"></i>Descargar</a>
        </div>
    </div>
</div>