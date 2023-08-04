<div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-4 p-4 m-6 bg-blanco-transp bordeRojo rounded-lg">
    @foreach ($documentos as $documento)            
        <div class="mb-4 shadow hover:shadow-lg h-full flex flex-col bordeNegro rounded-lg">
            <div class="p-4 flex-1 bg-red-500 min-h-140 hover:bg-white rounded-t-lg">
                <a href="{{ url('documentos.show', $documento->id) }}">
                    <h1 class="font-bold text-3xl">{{ $documento->id }} . {{ $documento->titulo }}
                    </h1>
                </a>
            </div>
            <div class="p-2 text-sm text-white bg-black">
                <span
                    class="py-0.5 px-2 rounded-full font-semibold bg-{{ $documento->empresa?->nombre }}">{{ $documento->empresa?->nombre }}</span>
                <span
                    class="py-0.5 px-2 rounded-full font-semibold bg-{{ $documento->categoria?->nombre }}">{{ $documento->categoria?->nombre }}</span>
                
                    @foreach ($documento->etiqueta as $etiqueta )
                        <span
                        class="py-0.5 px-2 rounded-full font-semibold bg-blue-500">
                            {{ $etiqueta->nombre }}
                        </span>
                    @endforeach
                    
            </div>
            <div class="bg-white py-2.5 px-4 hover:bg-blue-light h-full">
                <span>{{ $documento->fecha }}</span>
                <p class="text-black text-justify">{{ $documento->descripcion }}</p>
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
    @endforeach
</div>