<style>
   .carousel-inner {
    text-align: center;
   }
</style>
@extends('layouts.master')

@section('content')
<x-biblio.sidebar />
<x-biblio.comunicados />
{{-- <div class="container-fluid">
   <div class="row">
      <div class="col-md-6">
         <h1>Comunicados</h1>
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="/images/COM60RENFE.png" class="diapositivas" />
               </div>
               <div class="carousel-item">
                  <img src="/images/COM121ADIF.png" class="diapositivas" alt="..." />
               </div>
               <div class="carousel-item">
                  <img src="/images/COM122RENFE.png" class="diapositivas" alt="..." />
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
      </div>
   </div>
</div> --}}
@endsection

