@extends('layouts.master')
@section('titulo')
<title>Speed Up • Index</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/index.css')}}" type="text/css">
@stop
@section('content')
<!--CAROUSEL-->
<div id="carouselImagenes" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselImagenes" data-slide-to="0" class="active"></li>
        <li data-target="#carouselImagenes" data-slide-to="1"></li>
        <li data-target="#carouselImagenes" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100 imagenCarrusel" src="{{asset('img/covid.png')}}" alt="Cierre">

        </div>
        <div class="carousel-item">
            <img class="w-100 imagenCarrusel" src="{{asset('img/torneos.png')}}" alt="Torneos">

        </div>
        <div class="carousel-item">
            <img class="d-block w-100 imagenCarrusel" src="{{asset('img/apertura.png')}}" alt="Apertura">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselImagenes" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselImagenes" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>
<!--INSCRIBIRSE-->
<div class="container-fluid" id="fondoGris">
    <div class="row justify-content-around ">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="card m-5">
                    <div class="card-header titulo text-center">
                        <h2 class="text-white text-uppercase font-weight-bold">Mensual</h2>
                        <h1 class="text-white text-uppercase font-weight-bold">29.90</h1>
                        <h3 class="text-white">€/Mes</h3>

                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold subtitulo">Matrícula 0.00 €</h5>
                        <span class="card-text">
                            <p>Camiseta de regalo</p>
                            <p>Tarjeta identificativa</p>  
                            <p>Acceso a todos los servicios</p>
                            <p>Iniciativa tráete un amigo</p>
                        </span>
                    </div>
                    <div class="card-footer bg-white text-center"><button class="btn titulo text-white">INSCRÍBETE</button></div>
                </div>
                <div class="card m-5">
                    <div class="card-header titulo text-center">
                        <h2 class="text-white text-uppercase font-weight-bold">TRIMESTRAL</h2>
                        <h1 class="text-white text-uppercase font-weight-bold">21.90</h1>
                        <h3 class="text-white">€/Mes</h3>

                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold subtitulo">Matrícula 0.00 €</h5>
                        <span class="card-text">
                            <p>Pack Speed Up de regalo</p>
                            <p>Tarjeta identificativa</p>  
                            <p>Acceso a todos los servicios</p>
                            <p>Iniciativa tráete un amigo</p>
                            <p>Asesoramiento personalizado</p>
                        </span>
                    </div>
                    <div class="card-footer bg-white text-center"><button class="btn titulo text-white">INSCRÍBETE</button></div>
                </div>
            </div>
        </div>

    </div>

</div>
<!--GALERIA DE IMAGENES-->
<div class="container">
    <div class="row text-center text-lg-left my-5">
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria0.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria1.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria2.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria3.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria4.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria5.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria6.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria7.jpg')}}" alt="galeria">
        </div>
        <div class="col-lg-4 col-md-12 col-12">
            <img class="img-fluid img-thumbnail mb-4" src="{{asset('img/galeria8.jpg')}}" alt="galeria">
        </div>
    </div>
</div>
@stop