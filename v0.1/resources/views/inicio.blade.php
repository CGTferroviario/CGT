@extends('layouts.master')

@section('content')
<style>
    
.carousel-control-prev, .carousel-control-next {
    cursor: pointer;
    position: absolute;
    top: 6.1%;
    height: 99.3%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: rgba(0, 0, 0, 0.8);
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
}
.carousel-control-prev:hover, .carousel-control-prev:focus, .carousel-control-next:hover, .carousel-control-next:focus {
    color: #fff;
    background: rgba(254,71,85, 0.5);
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}
</style>

<h1 class="text-center blanco px-1"><i>Si quieres que algo cambie...¡Elige CGT!</i></h1>

{{-- <x-inicio.slider /> --}}

<br>

<div class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="dots">
            <button type="button" class="dot" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" class="dot" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" class="dot" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <iframe width="100%" height="800px" src="https://www.youtube.com/embed/gyFjseUW0NE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Primera Diapositiva</h5>
                    <p>Aqui vamos a poner unos textitos ricos.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <iframe width="100%" height="800px" src="https://www.youtube.com/embed/KvpN-zXC-NI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Segunda Diapositiva</h5>
                    <p>Aqui vamos a poner unos textitos ricos, ricos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <iframe width="100%" height="800px" src="https://www.youtube.com/embed/wZQp1V_8Gtg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tercera Diapositiva</h5>
                    <p>Aqui vamos a poner unos textitos ricos, riquísimos.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<br> <br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="{{ url('/comunicados') }}" class="centrado">
                <div class="tarjeta" id="comunicados" class="img-fluid" title="Consulta nuestros comunicados"></div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="" class="centrado">
                <div class="tarjeta" id="ayudas" class="img-fluid" title="Toda la información de Ayudas Graciables y Beneficios Sociales"></div>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <a href="" class="centrado">
                <div class="tarjeta" id="afiliate" class="img-fluid" title="¡Afíliate con nosotros!"></div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="" class="centrado">
                <div class="tarjeta" id="plataforma" class="img-fluid" title="Accede a nuestra plataforma de Estudio"></div>
            </a>
        </div>
    </div>
</div>

@endsection