@extends('plantillas.principal')

@section('contenido')
{{-- <div class="container-fluid fondo comunicados"> --}}
    {{-- <div class="row"> --}}
        {{-- <h1 class="m-0 py-3 text-center cabecera font-bold">COMUNICADOS</h1>        --}}
        {{-- <div class="px-20 pt-4">
            <div class="col-md-12 p-4 mt-2 bordeRojo bg-blanco-transp rounded-md">
                <div class="row mt-2 mb-3"> --}}
<div class="container-fluid fondo comunicados">
    <div class="row">
        <div>
            <h1 class="m-0 py-3 text-center cabecera font-bold">COMUNICADOS</h1>  
        </div>
        <div class="px-20 pt-4">
            {{-- <div class="col-md-12 p-4 mt-2 bordeRojo bg-blanco-transp rounded-md"> --}}
                <div class="row">
                    @foreach ($comunicados as $comunicado)

                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 mb-3">
                        <div class="card h-100 bg-grisOscuro-7 blanco bordeRojo" style="">
                            <div class="card-header bordeBottomRojo">
                                <a href="{{ route('admin.comunicados.show', $comunicado->id) }}"><h1>{{ $comunicado->numero }} .- {{ $comunicado->titulo }}</h1></a>
                                <p class="card-text mt-2">{{ $comunicado->subtitulo }}</p>
                            </div>
                            <div class="card-body">
                                <span class="badge rounded-pill peq bg-{{ $comunicado->empresa?->nombre }}">{{ $comunicado->empresa?->nombre }}</span>
                                {{-- @dd($comunicado->categoria->nombre) --}}
                                <span class="badge rounded-pill peq bg-{{ $comunicado->categoria?->nombre }}">{{ $comunicado->categoria?->nombre }}</span>
                                <span class="badge rounded-pill peq bg-{{ $comunicado->etiqueta?->nombre }}">{{ $comunicado->etiqueta?->nombre }}</span>
                                
                                <p class="card-text mt-2 text-justify">{{ $comunicado->cuerpo }}</p>
                            </div>
                            <div class="card-footer bordeTopRojo p-1">
                                <div class="btn-group centrado w-100">
                                    <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="blank"><i class="fa fa-eye"></i>&nbsp;&nbsp;Visualizar</a>
                                    <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="_blank" download="CGT_Afiliacion_Nomina"><i class="fa fa-download"></i>&nbsp;&nbsp;Descargar</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach
                </div>
            {{-- </div> --}}
        </div>
    </div>
</div>
@endsection