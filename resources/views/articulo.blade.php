@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/articulo.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/articulo.js')}}"></script>
@stop
@section('content')
<div class="container-fluid">
    @foreach($user as $key => $valor)

    @section('titulo')
    <title>Articulo • {{$articulo[0]->title}}</title>
    @stop
    <div class="form-row">
        <div class="col-1">
            <a href="/articulos/all" class="text-left"><img src="{{asset('img/volver.svg')}}" class="botonVolver mt-3" alt="Botón"></a>
        </div>
    </div>
    <div class="row mb-4 justify-content-center">
        <div class="col-md-3 col-12 text-center">
            <a href=""><img src="{{asset('articulos/'.$articulo[0]->picture)}}" alt="imagenArticulo" class="img-fluid"></a>
            <p class="text-center my-3">{{$valor->name}} {{$valor->firts_surname}} {{$valor->second_surname}}</p>
            <p class="text-center">{{$articulo[0]->date}}</p>
            @if(Auth::user())
            @if(Auth::user()->idUser == $valor->idUser or Auth::user()->role == 'Admin')
            <a href="{{url('/articulo/edit/'.$articulo[0]->idArticle)}}" class="btn btn-leer btn-sm">Editar</a>
            @endif
            @endif
        </div>
        <div class="col-md-8 col-12">
            <h3>{{$articulo[0]->title}}</h3>
            <span class="badge badge-primary">{{$articulo[0]->tag1}}</span>
            <span class="badge badge-secondary">{{$articulo[0]->tag2}}</span>
            <span class="badge badge-success">{{$articulo[0]->tag3}}</span>
            <p class="mt-3 text-justify limitado">{{$articulo[0]->content}}</p>
        </div>
    </div>

    @endforeach 
    <div id="caja">
        @if(Auth::user())
        <hr class="w-50">
        <div class="ml-lg-5 row justify-content-end" id="comentario">
            <div class="col-lg-1 col-md-2 col-3 mt-3 ">
                <a href=""><img src="{{asset('perfil/'.auth()->user()->picture)}}" alt="imagenArticulo" class="imgPerfil"></a>
            </div>
            <div class="col-lg-8 col-md-7 col-8 mt-3 ">
                <form action="{{ url('/articulo/comentario/create') }}" method="post" id="formComent">
                    @csrf
                    <div class="form-group ">
                        <textarea class="form-control w-75" id="content" name="content" maxlength="200" cols="80" rows="4" placeholder="Escriba su comentario..."></textarea>
                        <span id="numero"></span>
                        <input id="articleId" type="hidden" class="form-control" name="articleId" value="{{$articulo[0]->idArticle}}" required autocomplete="articleId">
                    </div>
                    <div class="form-group"><span id="enviar" class="btn text-center disabled">Enviar</span></div>
                </form>
            </div>
        </div>
        @endif
        <hr class="w-50 justify-content-end">

        @foreach($coments as $key => $valor)

        <div class="ml-lg-5 row my-4 justify-content-end">
            <div class="col-lg-1 col-md-2 col-3 align-self-md-center ">
                <a href=""><img src="{{asset('perfil/'.$valor->users->picture)}}" alt="imagenPerfil" class="imgPerfil"></a>
            </div>
            <div class="col-lg-8  col-md-7 col-8 align-self-md-center">
                <span class="text-left font-weight-bold text-sm-left">{{$valor->users->name}} {{$valor->users->firts_surname}} {{$valor->users->second_surname}}</span>
                <p class="text-left">{{$valor->date}}</p>
                <p class="mt-2 text-justify limitado">{{ $valor->content }}</p>
            </div>
        </div>
        <hr class="w-50 justify-content-end">

        @endforeach
    </div>
</div>
@stop