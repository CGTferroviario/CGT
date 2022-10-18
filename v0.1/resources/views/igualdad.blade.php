@extends('layouts.master')

@section('content')
<div class="container-fluid">
   <div class="row">
      <h1 class="centrado py-2">Planes de Igualdad por Empresas</h1>
      <br>
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
            <h3>ADIF</h3>
            {{-- <div class="card shadow-sm h-100">
               <img src="img/pdf_icon.png">
               <div class="card-body">
                  <p class="card-text">Modelo para Afiliarse por Nómina</p>
               </div>
               <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                     <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" class="btn" target="blank"><i class="fa fa-eye"></i> Visualizar</a>
                     <a href="doc/AFILIACION/FICHA_AFILIACION_NOMINA.pdf" target="_blank" download="CGT_Afiliacion_Nomina" class="btn"><i class="fa fa-download"></i> Descargar</a>
                  </div>
               </div>
            </div> --}}
            {{-- <div class="card" style="width: 18rem;">
               <img src="img/pdf_icon.png" class="card-img-top" alt="...">
               <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
            </div> --}}
            <div class="row">
               <div class="col-md-6">
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">II Plan de Igualdad 2022</h5>
                              <p class="card-text">Este es el plan de Igualdad de ADIF aprobado en el año 2022 de la era de nuestro señor Jesucristo.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">Protocolo de Acoso Laboral 2021</h5>
                              <p class="card-text">Este es el protocolo aprobado en el año 2021 en el que se recogen todas las actuaciones encaminadas a prevenir el acoso en el trabajo.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                     <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title">Protocolo de Acoso Sexual 2021</h5>
                           <p class="card-text">Este es el protocolo aprobado en el año 2021 en el que se recogen todas las actuaciones encaminadas a prevenir el acoso sexual en el puesto de trabajo.</p>
                           <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="renfe" class="container tab-pane fade"><br>
            <h3>RENFE</h3>
            <div class="row">
               <div class="col-md-6">
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">II Plan de Igualdad de Género</h5>
                              <p class="card-text">Este es el plan de Igualdad de RENFE aprobado en el año 2022 de la era de nuestro señor Jesucristo.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                     <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title">Protocolo de Acoso</h5>
                           <p class="card-text">Protocolo para la prevención y el tratamiento de los casos de acoso sexual, acoso por razón de sexo y acoso moral</p>
                           <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="serveo" class="container tab-pane fade"><br>
            <h3>SERVEO</h3>
            <div class="row">
               <div class="col-md-6">
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">II Plan de Igualdad de Género</h5>
                              <p class="card-text">Este es el plan de Igualdad de RENFE aprobado en el año 2022 de la era de nuestro señor Jesucristo.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="fgv" class="container tab-pane fade"><br>
            <h3>FGV</h3>
            <div class="row">
               <div class="col-md-6">
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">II Plan de Igualdad 2022</h5>
                              <p class="card-text">Este es el plan de Igualdad de FGV aprobado en el año 20XX de la era de nuestro señor Jesucristo.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                        <div class="col-md-4">
                           <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                           <div class="card-body">
                              <h5 class="card-title">Protocolo de Acoso Laboral</h5>
                              <p class="card-text">Este es el protocolo aprobado en el año 2021 en el que se recogen todas las actuaciones encaminadas a prevenir el acoso en el trabajo.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card mb-3" style="">
                     <div class="row g-0">
                     <div class="col-md-4">
                        <img src="img/pdf_icon.png" class="img-fluid rounded-start" alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title">Protocolo de Acoso Sexual</h5>
                           <p class="card-text">Este es el protocolo aprobado en el año 2021 en el que se recogen todas las actuaciones encaminadas a prevenir el acoso sexual en el puesto de trabajo.</p>
                           <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
