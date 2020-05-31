@extends('layouts.master')
@section('titulo')
<title>Speed Up • Index</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/index.js')}}"></script>
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
    <div class="row justify-content-around " id="scrollInscribete">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="card inscribete m-5">
                    <div class="card-header titulo text-center">
                        <h2 class="text-white text-uppercase font-weight-bold">Mensual</h2>
                        <h1 class="text-white text-uppercase font-weight-bold">29.90</h1>
                        <h3 class="text-white">€ / Mes</h3>

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
                    <div class="card-footer bg-white text-center"><a href="{{{ Auth::user() ? url('inscribete') : url('register') }}}" alt="inscribete" class="btn titulo text-white">INSCRÍBETE</a></div>
                </div>
                <div class="card inscribete m-5">
                    <div class="card-header titulo text-center">
                        <h2 class="text-white text-uppercase font-weight-bold">TRIMESTRAL</h2>
                        <h1 class="text-white text-uppercase font-weight-bold">21.90</h1>
                        <h3 class="text-white">€ / Mes</h3>

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
                    <div class="card-footer bg-white text-center"><a href="{{{ Auth::user() ? url('inscribete') : url('register') }}}" alt="inscribete" class="btn titulo text-white">INSCRÍBETE</a></div>
                </div>
            </div>
        </div>

    </div>

</div>
<!--HORARIO-->
<div class="container-fluid" id="fondoAzul">
    <div class="row justify-content-around" id="scrollHorario">
        <h1 class="text-uppercase font-weight-bold subtitulo2 text-center col-12 mt-4">HORARIO</h1>
        <div class="col-lg-5 col-md-10 col-12 my-5">
            <img src="{{asset('img/horario.png')}}" alt="horario" title="horario" class="img-fluid ">
        </div>
        <div class="col-lg-4 col-md-8 col-12 my-5 text-md-center text-lg-right text-center">
            <h2 class="text-uppercase subtitulo2 font-weight-bold mb-4">HORARIO DE APERTURA</h2>
            <h5 class="text-white">Lunes a viernes: 08:00 - 22:00</h5>
            <h5 class="text-white my-4">Sábados: 09:00 - 21:00</h5>
            <h5 class="text-white">Domingos y festivos: 09:00 - 14:00</h5>
            <p class="text-white mt-5">*Llevar la tarjeta identificativa para el acceso al centro.</p>
        </div>

    </div>

</div>

<!--NOTICIAS-->
<div class="container-fluid" id="scrollArticulos">
    <div class="row justify-content-around">
        <h1 class="text-uppercase font-weight-bold subtitulo text-center col-12 mt-5 mb-3">Últimos <span class="subtitulo2">Artículos</span></h1>
        <div class="col-12">
            <div class="row justify-content-center rowArticulos">

            </div>
        </div>
        <a href="{{url('/articulos/all')}}" class="btn titulo text-white text-center mb-5">Ver todos</a>
    </div>
</div>

<!--GALERIA DE IMAGENES-->
<div class="container-fluid" id="fondoAzul">
    <div class="row justify-content-center" id="scrollGaleria">
        <h1 class="text-uppercase font-weight-bold text-white text-center col-12 my-5">Galería  DE <span class="subtitulo2">FOTOS</span></h1>
        <div class="col-8 mb-5">
            <div class="row ">
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
    </div>
</div>

<!--CONTACTA CON NOSOTROS-->
<div class="container-fluid" id="fondoGris">
    <div class="row justify-content-center pb-3" id="scrollContacto">
        <h1 class="text-uppercase font-weight-bold subtitulo text-center col-12 my-5">CONTACTA CON <span class="subtitulo2">NOSOTROS</span></h1>
        <div class="col-lg-4 col-md-10 my-4">
            <div class="row ml-md-0 ml-5">
                <div class="col-12 form-group">
                    <h3 class="font-weight-bold subtitulo"><img src="{{asset('img/map.svg')}}" alt="map-icon" class="svg">  Dirección</h3>
                    <a href="https://www.google.com/maps/place/40%C2%B024'33.4%22N+3%C2%B040'37.3%22W/@40.4097372,-3.678285,17.25z/data=!4m6!3m5!1s0x0:0x0!7e2!8m2!3d40.4092686!4d-3.677035" class="subtitulo2 enlace"><h5 class="ml-1"> C/Conde de Cartagena, 7</h5></a>
                </div>
                <div class="col-12 form-group my-5">
                    <h3 class="font-weight-bold subtitulo"><img src="{{asset('img/email.svg')}}" alt="map-icon" class="svg">  Email</h3>
                    <a href="mailto:contacto@speedup.com" class="subtitulo2 enlace"><h5> contacto@speedup.com</h5></a>
                </div>
                <div class="col-12 form-group">
                    <h3 class="font-weight-bold subtitulo"><img src="{{asset('img/horario.svg')}}" alt="map-icon" class="svg">  Horario</h3>
                    <h5 class="subtitulo2"> Lunes a viernes: 08:00 - 22:00</h5>
                    <h5 class="subtitulo2"> Sábados: 09:00 - 21:00</h5>
                    <h5 class="subtitulo2"> Domingos y festivos: 09:00 - 14:00</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-10 bg-white my-4 text-center">
            <form action="mailto:contacto@speedup.com" method="get" class="p-4" enctype="text/plain">
                <input type="text" name="nombre" placeholder="Nombre" class="form-control bg-light">
                <input type="email" name="email" placeholder="Email" class="form-control my-2 bg-light">
                <textarea name="mensaje" cols="30" rows="8" placeholder="Mensaje" class="form-control bg-light"></textarea>
                <button type="subtmit" name="submit.contacto" class="btn titulo text-white w-25 mt-4">Enviar</button>
            </form>
        </div>
    </div>
</div>
@stop