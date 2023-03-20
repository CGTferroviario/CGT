@extends('layouts.master')

@section('content')
<h1 class="m-0 py-3 centrado blanco grande bg-verdeAdif">COLECTIVO DE OFICINAS</h1>
<div class="container-fluid fondo oficinas">
    <div class="row">
        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
            <div class="card bg-grisOscuro-7 mb-3 blanco bordeRojo" style="">
                <div class="card-header"><h3>Plataforma Reivindicativa OFICINAS</h3></div>
                <div class="card-body bordeRojo">
                    <span class="badge rounded-pill peq bg-verdeAdif">ADIF</span>
                    <span class="badge rounded-pill peq bg-grisClaro negro">OFICINAS</span>
                    <p class="card-text mt-2">Este documento recoge las reivindicaciones de CGT para el colectivo de Oficinas</p>
                </div>
                <div class="card-footer p-1">
                    <div class="btn-group centrado w-100">
                        <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="blank"><i class="fa fa-eye"></i>&nbsp;&nbsp;Visualizar</a>
                        <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn rojoBrillante" target="_blank" download="CGT_Afiliacion_Nomina"><i class="fa fa-download"></i>&nbsp;&nbsp;Descargar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection