@extends('layouts.master')

@section('content')
<div class="container-fluid">
   <div class="row">
      <h1 class="centrado py-2">Planes de Igualdad por Empresas</h1>
      <!-- Nav tabs -->
      <nav class="nav nav-tabs flex-column flex-sm-row" role="tablist">
         <a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" href="#adif">ADIF</a>
         <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#renfe">RENFE</a>
         <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#serveo">SERVEO</a>
         <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#fgv">FGV</a>
      </nav>
      <!-- Tab panes -->
      <div class="tab-content">
         <div id="adif" class="container tab-pane active"><br>
            <x-igualdad.adif />
         </div>
         <div id="renfe" class="container tab-pane fade"><br>
            <x-igualdad.renfe />
         </div>
         <div id="serveo" class="container tab-pane fade"><br>
            <x-igualdad.serveo />
         </div>
         <div id="fgv" class="container tab-pane fade"><br>
            <x-igualdad.fgv />
         </div>
      </div>
   </div>
</div>
@endsection
