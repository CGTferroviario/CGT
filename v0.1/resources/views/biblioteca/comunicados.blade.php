@extends('layouts.master')

@section('content')
<h1 class="m-0 py-3 centrado cabecera negro grande bg-rojoBrillante">COMUNICADOS</h1>
<div class="container-fluid fondo comunicados">
    <div class="row">
        @foreach ($comunicados as $comunicado)

        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
            <div class="card h-100 bg-grisOscuro-7 mb-3 blanco bordeRojo" style="">
                <div class="card-header bordeBottomRojo">
                    <a href="{{ route('comunicados.show', $comunicado->id) }}"><h1>{{ $comunicado->numero }} .- {{ $comunicado->titulo }}</h1></a>
                    <p class="card-text mt-2">{{ $comunicado->subtitulo }}</p>
                </div>
                <div class="card-body">
                    <span class="badge rounded-pill peq bg-verdeAdif">{{ $comunicado->empresa }}</span>
                    <span class="badge rounded-pill peq bg-moradoRenfe">{{ $comunicado->categoria }}</span>
                    <span class="badge rounded-pill peq bg-rojoBrillante">{{ $comunicado->etiqueta }}</span>
                    
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
</div>
@endsection