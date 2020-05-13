@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/articulos.css')}}" type="text/css">
@stop
@section('titulo')
<title>Articulos • Speed Up</title>
@stop
@section('js')
<script src="{{asset('js/articulos.js')}}"></script>
@stop
@section('content')
<div class="container-fluid mb-5">
    <h3 class="mt-4 text-uppercase font-weight-bold">Articulos</h3>
    <hr>
    <div class="row justify-content-between ml-3">
        <!--Articulos-->
        @foreach($articulos as $key => $valor)
        <div class="col-md-9 col-12">
            <div class="row mb-5">
                <div class="col-3 text-center">
                    <a href=""><img src="{{asset('articulos/'.$valor->picture)}}" alt="imagenArticulo" class="img-fluid imgArticle"></a>
                    <p class="text-center my-3">{{$valor->datosUser->name}} {{$valor->datosUser->firts_surname}} {{$valor->datosUser->second_surname}}</p>
                    <p class="text-center">{{$valor->date}}</p>
                </div>
                <div class="col-9">
                    <h3>{{$valor->title}}</h3>
                    <span class="badge badge-primary">{{$valor->tag1}}</span>
                    <span class="badge badge-secondary">{{$valor->tag2}}</span>
                    <span class="badge badge-success">{{$valor->tag3}}</span>

                    <p class="mt-3 limitado">{{$valor->content}}</p>
                    <a href="{{url('/articulo/'.$valor->idArticle)}}" class="btn btn-outline-warning btn-sm">Leer más...</a>
                </div>
            </div>
        </div>

        <!--Fin Articulos-->
        <!--Aside-->
        <div class="col-md-3 d-none d-lg-block">
            <div class="card text-white bg-primary my-5" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        @endforeach
        <!--Fin Aside-->
    </div>
    <div class="btn-toolbar d-flex justify-content-center mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary active">Inicio</button>
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary active">Final</button>
        </div>
    </div>
</div>

@stop