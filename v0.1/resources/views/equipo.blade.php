@extends('layouts.master')

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <h1 class="blanco centrado">Sector Federal Ferroviario</h1>
         <nav class="nav nav-tabs flex-column flex-sm-row" role="tablist">
            <a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" href="#equipo">EQUIPO</a>
            <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#mapasindical">MAPA SINDICAL</a>
            <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" href="#contacto">CONTACTO</a>
         </nav>
         <!-- Tab panes -->
         
         <div class="tab-content">
            
            <div id="equipo" class="container tab-pane active"><br>
               <x-equipo.equipo />
            </div>
            <div id="mapasindical" class="container tab-pane fade"><br>
               <x-equipo.mapasindical />
            </div>
            <div id="contacto" class="container tab-pane fade"><br>
               <x-equipo.contacto />
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
