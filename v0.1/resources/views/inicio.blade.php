@extends('layouts.master')

@section('content')

<h1 class="text-center blanco px-1"><i>Si quieres que algo cambie...¡Elige CGT!</i></h1>

<x-inicio.slider />

<br> <br>

<div class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="dots">
            <button type="button" class="dot" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" class="dot" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" class="dot" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://via.placeholder.com/300x100/FFFF00/fff.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Primera Diapositiva</h5>
                    <p>Aqui vamos a poner unos textitos ricos.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://via.placeholder.com/300x100/FF0000/fff.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Segunda Diapositiva</h5>
                    <p>Aqui vamos a poner unos textitos ricos, ricos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/300x100/00FF00/fff.png" class="d-block w-100" alt="...">
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
    <div class="row centrado">
        <div class="col-md-6">
            <a href="">
                <img id="comunicados" class="img-fluid" src="img/comunicados.png" alt="">
            </a>
        </div>
        <div class="col-md-6">
            <a href="">
                <img class="img-fluid" src="img/ayudas.png" alt="">
            </a>
        </div>
    </div>
    <br>
    <div class="row centrado">
        <div class="col-md-6">
            <a href="">
                <img class="img-fluid" src="img/afiliate.png" alt="">
            </a>
        </div>
        <div class="col-md-6">
            <img class="img-fluid" src="https://via.placeholder.com/600x300/000000/fff.png" alt="">
        </div>
    </div>
</div>


@endsection