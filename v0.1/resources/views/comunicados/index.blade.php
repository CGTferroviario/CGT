@extends('layouts.master')

@section('content')
<div class="container-fluid fondo comunicados">
    <div class="row">
        <div class="">
            <a href="{{ route('comunicados.create') }}" class="btn btn-outline-light">Añadir comunicado</a>
        </div>
        @foreach ($comunicados as $comunicado)

        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
            <div class="card h-100 bg-grisOscuro-7 mb-3 blanco bordeRojo" style="">
                <div class="card-header bordeBottomRojo">
                    <a href="{{ route('comunicados.show', $comunicado->id) }}">{{ $comunicado->titulo }}</a>
                </div>
                <div class="card-body">
                    <span class="badge rounded-pill peq bg-verdeAdif">{{ $comunicado->categorias_comunicado }}</span>
                    <span class="badge rounded-pill peq bg-rojoBrillante">AFILIACIÓN</span>
                    <p class="card-text mt-2">{{ $comunicado->subtitulo }}</p>
                    <p class="card-text mt-2">{{ $comunicado->descripcion }}</p>
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