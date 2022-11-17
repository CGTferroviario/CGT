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
<nav class="nav nav-pills flex-column flex-sm-row">
  <ul class="nav nav-pills" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-documentacion-tab" data-bs-toggle="pill" data-bs-target="#pills-documentacion" type="button" role="tab" aria-controls="pills-documentacion" aria-selected="true">Documentación General</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-circulacion-tab" data-bs-toggle="pill" data-bs-target="#pills-circulacion" type="button" role="tab" aria-controls="pills-circulacion" aria-selected="false">Circulación</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-infraestructura-tab" data-bs-toggle="pill" data-bs-target="#pills-infraestructura" type="button" role="tab" aria-controls="pills-infraestructura" aria-selected="false">Infraestructura</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-oficinas-tab" data-bs-toggle="pill" data-bs-target="#pills-oficinas" type="button" role="tab" aria-controls="pills-oficinas" aria-selected="false">Oficinas</button>
    </li>
  </ul>
  {{-- <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#documentacion">Documentación General</a>
  <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link" href="#circulacion">Circulación</a>
  <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link" href="#infraestructura">Infraestructura</a>
  <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link" href="#oficinas">Oficinas</a> --}}
</nav> 

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-documentacion" role="tabpanel" aria-labelledby="pills-documentacion" tabindex="0">
    <div class="jumbotron jumbotron-fluid fondo">
      <div class="container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto centrado">
            <a href="http://cgtferroviario.es" target="blank"><img src="img/logo_med.png"></a>
            <a href="https://cgt.org.es/" target="blank"><img src="img/logoCGT_med.png"></a>
            <h1 class="titulo">Documentación ADIF <br> SFFCGT</h1>
          </div>
        </div>
      </div>
    </div>
    
    <main class="bg-oscuro">
        
      <x-adif.sidebar />
       
      <x-adif.documentacion />
       
    </main>
  </div>
  <div class="tab-pane fade" id="pills-circulacion" role="tabpanel" aria-labelledby="pills-circulacion-tab" tabindex="0">esto es otro</div>
  <div class="tab-pane fade" id="pills-infraestructura" role="tabpanel" aria-labelledby="pills-infraestructura-tab" tabindex="0">Hola</div>
  <div class="tab-pane fade" id="pills-oficinas" role="tabpanel" aria-labelledby="pills-oficinas-tab" tabindex="0">Hello</div>
</div>



@endsection