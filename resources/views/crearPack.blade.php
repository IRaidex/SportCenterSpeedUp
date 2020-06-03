@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/newArticle.css')}}" type="text/css">
@stop
@section('titulo')
<title>Crear Articulo • Speed Up</title>
@stop
@section('js')
<script src="{{asset('js/crearPack.js')}}"></script>
@stop
@section('content')
<div class="container-fluid">

    <h3 class="text-center my-4 text-uppercase font-weight-bold"><span class="colorAzul">Nuevo</span> Artículo</h3>
    <hr class="w-50">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-12">
            <form action="/pack/create" method="post" id="formPack">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Nombre del pack</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                    <small id="avisoNombre">El título tiene que tener entre 5 y 15 caracteres.</small>
                </div>

                <div class="form-group">
                    <label for="precio" class="font-weight-bold">Precio del pack</label>
                    <input type="number" name="precio" class="form-control" id="precio" required>
                    <small id="avisoPrecio">Precio no valido.</small>
                </div>
                <div class="form-group">
                    <label for="servicio1" class="font-weight-bold">Servicio 1</label>
                    <select  name="servicio1" class="form-control" id="servicio1" required>
                       <option value="-" selected>-</option>
                        @foreach($servicios as $key => $valor)
                        <option value="{{$valor->idService}}">{{$valor->name}}</option>
                        @endforeach
                    </select>
                    <small id="avisoServicio1">Tiene que tener entre 5 y 50 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="servicio2" class="font-weight-bold">Servicio 2</label>
                    <select  name="servicio2" class="form-control" id="servicio2" required>
                            <option value="-" selected>-</option>
                        @foreach($servicios as $key => $valor)
                        <option value="{{$valor->idService}}">{{$valor->name}}</option>
                        @endforeach
                    </select>
                    <small id="avisoServicio2">Tiene que tener entre 5 y 50 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="servicio3" class="font-weight-bold">Servicio 3</label>
                    <select  name="servicio3" class="form-control" id="servicio3" required>
                            <option value="-" selected>-</option>
                        @foreach($servicios as $key => $valor)
                        <option value="{{$valor->idService}}">{{$valor->name}}</option>
                        @endforeach
                    </select>
                    <small id="avisoServicio3">Tiene que tener entre 5 y 50 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="servicio4" class="font-weight-bold">Servicio 4</label>
                    <select  name="servicio4" class="form-control" id="servicio4" required>
                            <option value="-" selected>-</option>
                        @foreach($servicios as $key => $valor)
                        <option value="{{$valor->idService}}">{{$valor->name}}</option>
                        @endforeach
                    </select>
                    <small id="avisoServicio4">Tiene que tener entre 5 y 50 caracteres.</small>
                </div>
                <div class="form-group">
                    <label for="servicio5" class="font-weight-bold">Servicio 5</label>
                    <select  name="servicio5" class="form-control" id="servicio5" required>
                            <option value="-" selected>-</option>
                        @foreach($servicios as $key => $valor)
                        <option value="{{$valor->idService}}">{{$valor->name}}</option>
                        @endforeach
                    </select>
                    <small id="avisoServicio5">Tiene que tener entre 5 y 50 caracteres.</small>
                </div>

                <div class="form-group text-center my-4">
                    <input type="submit" class="btn btn-primary mr-5" id="crear" value="Crear">
                </div>
            </form>
        </div>
    </div>
</div>
@stop