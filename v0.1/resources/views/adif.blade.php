@extends('layouts.master')

@section('content')
<nav class="nav nav-pills flex-column flex-sm-row">
  <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#documentacion">Documentación General</a>
  <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link" href="#circulacion">Circulación</a>
  <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link" href="#infraestructura">Infraestructura</a>
  <a data-toggle="pill" class="flex-sm-fill text-sm-center nav-link" href="#oficinas">Oficinas</a>
</nav>
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

<div class="tab-content">
  <div id="#documentacion" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div id="#circulacion" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
  <div id="#infraestructura" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
  </div>
  <div id="#oficina" class="tab-pane fade">
    <h3>Menu 3</h3>
    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
  </div>
</div>

@endsection
