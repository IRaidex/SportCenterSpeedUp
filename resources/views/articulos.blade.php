@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h1 class="text-center my-4">Articulos</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @foreach($articulos as $key => $valor)
            <div class="row my-4 borde">
                <div class="col-md-12 mt-3">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="{{asset('img/default.png')}}" alt="perfil" class="img-fluid imgArticle">
                        </div> 
                        <div class="col-md-10">
                            <div class="form-group mt-2">
                                <span><h3>{{$valor->title}}</h3></span>
                                <span>{{$valor->datosUser->name}} {{$valor->datosUser->firts_surname}} {{$valor->datosUser->second_surname}} - {{$valor->date}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                     <p class="texto mx-4">{{$valor->content}}</p>
                </div>
            </div>
            @endforeach 
        </div>

    </div>
</div>
@stop