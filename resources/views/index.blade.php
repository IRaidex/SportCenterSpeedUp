@extends('layouts.master')
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