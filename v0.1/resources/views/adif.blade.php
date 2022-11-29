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
<nav class="nav nav-pills flex-column flex-sm-row barra2">
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
</div>

@endsection