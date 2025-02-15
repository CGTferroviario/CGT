@extends('plantillas.publica')

@section('contenido')
<h1 class="m-0 py-3 text-center bg-RENFE">AFILIACIÓN</h1>
<div class="container-fluid fondo afiliacion">
    <div class="row">
        <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
            <div class="card bg-grisOscuro-7 mb-3 blanco bordeRojo" style="">
                <div class="card-header"><h3>Modelo para Afiliarse por Nómina</h3></div>
                <div class="card-body bordeRojo">
                    <span class="badge rounded-pill peq bg-moradoRenfe">RENFE</span>
                    <span class="badge rounded-pill peq bg-rojoBrillante">AFILIACIÓN</span>
                                        
                    <p class="card-text mt-2">Puedes rellenar este modelo y enviárnoslo o entregárselo a tu superior jerárquico para afiliarte por nómina</p>
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