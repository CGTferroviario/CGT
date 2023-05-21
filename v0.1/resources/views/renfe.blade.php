@extends('layouts.master')

@section('content')

<h1 class="m-0 py-3 centrado cabecera blanco grande bg-moradoRenfe">DOCUMENTACIÓN GENERAL RENFE</h1>

<div class="container-fluid fondo documentacion renfe">  

  <div class="row py-3">
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/afiliacion') }}" class="">
            <div class="tarjetaRenfe" id="doc_afiliacion" class="img-fluid" title="Toda la documentación relativa a la Afiliación"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/ayudas') }}" class="">
            <div class="tarjetaRenfe" id="doc_ayudas" class="img-fluid" title="Toda la información de Ayudas Graciables y Beneficios Sociales"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/renfe/doc/igualdad') }}" class="">
          <div class="tarjetaRenfe" id="doc_igualdad" class="img-fluid" title="Toda la información de Igualdad"></div>
      </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/legislacion') }}" class="">
            <div class="tarjetaRenfe" id="doc_legislacion" class="img-fluid" title="Documentación relativa a legislación vigente"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/licencias') }}" class="">
            <div class="tarjetaRenfe" id="doc_licencias" class="img-fluid" title="Toda la documentación para solicitar licencias"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/renfe/doc/mapa') }}" class="">
          <div class="tarjetaRenfe" id="doc_mapa" class="img-fluid" title="Los mapas actualizados de estaciones y trenes"></div>
      </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/conciliacion') }}" class="">
            <div class="tarjetaRenfe" id="doc_conciliacion" class="img-fluid" title="Documentación relativa a la conciliación familiar"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/modelos') }}" class="">
            <div class="tarjetaRenfe" id="doc_modelos" class="img-fluid" title="Todos los modelos disponibles"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/renfe/doc/protocolos') }}" class="">
          <div class="tarjetaRenfe" id="doc_protocolos" class="img-fluid" title="Los protocolos de acoso sexual y laboral"></div>
      </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/salud') }}" class="">
            <div class="tarjetaRenfe" id="doc_salud" class="img-fluid" title="Documentación relativa a salud laboral"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/renfe/doc/teletrabajo') }}" class="">
            <div class="tarjetaRenfe" id="doc_teletrabajo" class="img-fluid" title="Toda la documentación relativa al teletrabajo"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/renfe/doc/tablas') }}" class="">
          <div class="tarjetaRenfe" id="doc_tablas" class="img-fluid" title="Las últimas tablas salariales actualizadas"></div>
      </a>
    </div>
  </div>
</div>

{{-- <nav class="nav nav-pills flex-column flex-sm-row barra2">
  <a class="flex-sm-fill text-sm-center nav-link active" id="pills-documentacion-tab" data-bs-toggle="pill" data-bs-target="#pills-documentacion" type="button" role="tab" aria-controls="pills-documentacion" aria-selected="true">Documentación General</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-conduccion-tab" data-bs-toggle="pill" data-bs-target="#pills-conduccion" type="button" role="tab" aria-controls="pills-conduccion" aria-selected="false">Conducción</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-talleres-tab" data-bs-toggle="pill" data-bs-target="#pills-talleres" type="button" role="tab" aria-controls="pills-talleres" aria-selected="false">Talleres</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-intervencion-tab" data-bs-toggle="pill" data-bs-target="#pills-intervencion" type="button" role="tab" aria-controls="pills-intervencion" aria-selected="false">Intervención</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-comercial-tab" data-bs-toggle="pill" data-bs-target="#pills-comercial" type="button" role="tab" aria-controls="pills-comercial" aria-selected="false">Comercial</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-oficinas-tab" data-bs-toggle="pill" data-bs-target="#pills-oficinas" type="button" role="tab" aria-controls="pills-oficinas" aria-selected="false">Oficinas</a>
</nav>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-documentacion" role="tabpanel" aria-labelledby="pills-documentacion-tab" tabindex="0">
    <main class="bg-oscuro">
  
      <x-renfe.documentacion />
    
    </main>
  </div>
  <div class="tab-pane fade show" id="pills-conduccion" role="tabpanel" aria-labelledby="pills-conduccion-tab" tabindex="0">
    
    <x-renfe.conduccion />

  </div>
  <div class="tab-pane fade show" id="pills-talleres" role="tabpanel" aria-labelledby="pills-talleres-tab" tabindex="0">
    
    <x-renfe.talleres />

  </div>

  <div class="tab-pane fade show" id="pills-intervencion" role="tabpanel" aria-labelledby="pills-intervencion-tab" tabindex="0">
    
    <x-renfe.intervencion />
    
  </div>
  <div class="tab-pane fade show" id="pills-comercial" role="tabpanel" aria-labelledby="pills-comercial-tab" tabindex="0">
    
    <x-renfe.comercial />
    
  </div>
  <div class="tab-pane fade show" id="pills-oficinas" role="tabpanel" aria-labelledby="pills-oficinas-tab" tabindex="0">
    
    <x-renfe.oficinas />
    
  </div>
</div> --}}
@endsection
