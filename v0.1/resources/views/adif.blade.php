<style>
  .accordion-flush .accordion-item .accordion-button:hover {
    background: rgb(254, 71, 85);
    color: black !important;
  }
  .encabezadoAcordeon:hover{
    color:black;
  }
</style>
@extends('layouts.master')

@section('content')

<h1 class="m-0 py-3 centrado blanco grande bg-verdeAdif">DOCUMENTACIÓN GENERAL ADIF</h1>

<div class="container-fluid adif">
  <div class="row py-3">
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/afiliacion') }}" class="">
            <div class="tarjetaRenfe" id="doc_afiliacion" class="img-fluid" title="Toda la documentación relativa a la Afiliación"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/ayudas') }}" class="">
            <div class="tarjetaRenfe" id="doc_ayudas" class="img-fluid" title="Toda la información de Ayudas Graciables y Beneficios Sociales"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/adif/doc/igualdad') }}" class="">
          <div class="tarjetaRenfe" id="doc_igualdad" class="img-fluid" title="Toda la información de Igualdad"></div>
      </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/legislacion') }}" class="">
            <div class="tarjetaRenfe" id="doc_legislacion" class="img-fluid" title="Documentación relativa a legislación vigente"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/licencias') }}" class="">
            <div class="tarjetaRenfe" id="doc_licencias" class="img-fluid" title="Toda la documentación para solicitar licencias"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/adif/doc/mapa') }}" class="">
          <div class="tarjetaRenfe" id="doc_mapa" class="img-fluid" title="Los mapas actualizados de estaciones y trenes"></div>
      </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/conciliacion') }}" class="">
            <div class="tarjetaRenfe" id="doc_conciliacion" class="img-fluid" title="Documentación relativa a la conciliación familiar"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/modelos') }}" class="">
            <div class="tarjetaRenfe" id="doc_modelos" class="img-fluid" title="Todos los modelos disponibles"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/adif/doc/protocolos') }}" class="">
          <div class="tarjetaRenfe" id="doc_protocolos" class="img-fluid" title="Los protocolos de acoso sexual y laboral"></div>
      </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/salud') }}" class="">
            <div class="tarjetaRenfe" id="doc_salud" class="img-fluid" title="Documentación relativa a salud laboral"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
        <a href="{{ url('/adif/doc/teletrabajo') }}" class="">
            <div class="tarjetaRenfe" id="doc_teletrabajo" class="img-fluid" title="Toda la documentación relativa al teletrabajo"></div>
        </a>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
      <a href="{{ url('/adif/doc/tablas') }}" class="">
          <div class="tarjetaRenfe" id="doc_tablas" class="img-fluid" title="Las últimas tablas salariales actualizadas"></div>
      </a>
    </div>
  </div>
</div>


{{-- <nav class="nav nav-pills flex-column flex-sm-row barra2">
  <a class="flex-sm-fill text-sm-center nav-link active" id="pills-documentacion-tab" data-bs-toggle="pill" data-bs-target="#pills-documentacion" type="button" role="tab" aria-controls="pills-documentacion" aria-selected="true">Documentación General</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-circulacion-tab" data-bs-toggle="pill" data-bs-target="#pills-circulacion" type="button" role="tab" aria-controls="pills-circulacion" aria-selected="false">Circulación</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-infraestructura-tab" data-bs-toggle="pill" data-bs-target="#pills-infraestructura" type="button" role="tab" aria-controls="pills-infraestructura" aria-selected="false">Infraestructura</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="pills-oficinas-tab" data-bs-toggle="pill" data-bs-target="#pills-oficinas" type="button" role="tab" aria-controls="pills-oficinas" aria-selected="false">Oficinas</a>
</nav>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-documentacion" role="tabpanel" aria-labelledby="pills-documentacion-tab" tabindex="0">
    
    
    <main class="bg-oscuro">
       
      <x-adif.documentacion />
       
    </main>
  </div>
  <div class="tab-pane fade show" id="pills-circulacion" role="tabpanel" aria-labelledby="pills-circulacion-tab" tabindex="0">
    
    <x-adif.circulacion />

  </div>
  <div class="tab-pane fade show" id="pills-infraestructura" role="tabpanel" aria-labelledby="pills-infraestructura-tab" tabindex="0">
    
    <x-adif.infraestructura />

  </div>

  <div class="tab-pane fade show" id="pills-oficinas" role="tabpanel" aria-labelledby="pills-oficinas-tab" tabindex="0">
    
    <x-adif.oficinas />
    
  </div>
</div> --}}

@endsection