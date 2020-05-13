@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/articulo.css')}}" type="text/css">
@stop

@section('content')
<div class="container-fluid">
    @foreach($articulo as $key => $valor)
    @foreach($user as $key => $valor2)
    @section('titulo')
    <title>Articulo • {{$valor->title}}</title>
    @stop
    <div class="row my-5">
        <div class="col-3 text-center">
            <a href=""><img src="{{asset('articulos/'.$valor->picture)}}" alt="imagenArticulo" class="img-fluid"></a>
            <p class="text-center my-3">{{$valor2->name}} {{$valor2->firts_surname}} {{$valor2->second_surname}}</p>
            <p class="text-center">{{$valor->date}}</p>
        </div>
        <div class="col-8">
            <h3>{{$valor->title}}</h3>
            <span class="badge badge-primary">{{$valor->tag1}}</span>
            <span class="badge badge-secondary">{{$valor->tag2}}</span>
            <span class="badge badge-success">{{$valor->tag3}}</span>

            <p class="mt-3 text-justify">{!! $valor->content !!}</p>
        </div>
    </div>

    @endforeach 
    @endforeach 
    <hr class="w-50">
    @foreach($coments as $key => $valor3)

    <div class="row my-2 justify-content-end">

        <div class="col-md-1 col-3 align-self-md-center">
            <a href=""><img src="{{asset('img/'.$valor3->users->picture)}}" alt="imagenArticulo" class="imgPerfil"></a>
        </div>
        <div class="col-md-8  col-8 align-self-md-center ">
            <span class="text-left font-weight-bold text-sm-left">{{$valor3->users->name}} {{$valor3->users->firts_surname}} {{$valor3->users->second_surname}}</span>
            <p class="text-left">{{$valor3->date}}</p>
            <p class="mt-3">{!! $valor3->content !!}</p>
        </div>
    </div>

    <hr class="w-50 justify-content-end">
    @endforeach

</div>
@stop