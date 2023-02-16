@extends('layouts.master')

@section('content')
<div class="container-fluid p-0">
  <h1 class="m-0 py-3 centrado blanco grande bg-moradoRenfe">DOCUMENTACIÓN GENERAL RENFE</h1>

  <div class="row py-3 px-5">
    <div class="col-md-4">
        <a href="" class="centrado" title="Consulta nuestros comunicados">
            <div class="tarjeta" id="comunicados" class="img-fluid"></div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="" class="centrado" title="Toda la información de Ayudas Graciables y Beneficios Sociales">
            <div class="tarjeta" id="ayudas" class="img-fluid"></div>
        </a>
    </div>
    <div class="col-md-4">
      <a href="" class="centrado" title="Toda la información de Ayudas Graciables y Beneficios Sociales">
          <div class="tarjeta" id="ayudas" class="img-fluid"></div>
      </a>
    </div>
  </div>
  <div class="row py-3 px-5">
    <div class="col-md-4">
        <a href="" class="centrado" title="Consulta nuestros comunicados">
            <div class="tarjeta" id="comunicados" class="img-fluid"></div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="" class="centrado" title="Toda la información de Ayudas Graciables y Beneficios Sociales">
            <div class="tarjeta" id="afiliate" class="img-fluid"></div>
        </a>
    </div>
    <div class="col-md-4">
      <a href="" class="centrado" title="Toda la información de Ayudas Graciables y Beneficios Sociales">
          <div class="tarjeta" id="plataforma" class="img-fluid"></div>
      </a>
    </div>
  </div>
</div>

<nav class="nav nav-pills flex-column flex-sm-row barra2">
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
</div>
@endsection
