<div class="mb-4 shadow hover:shadow-lg h-full flex flex-col bordeRojo rounded-lg">
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
</div>