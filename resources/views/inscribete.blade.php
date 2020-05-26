@extends('layouts.master')
@section('titulo')
<title>inscríbete • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/inscribete.css')}}" type="text/css">
@stop
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 bg-white">
            <h1 class="text-uppercase font-weight-bold subtitulo text-center mt-5">Ventana de <span class="subtitulo2">Pago</span></h1>
            <hr class="w-75">
            <form method="POST" action="{{ route('register') }}" id="formRegister">
                <h4 class="text-uppercase font-weight-bold subtitulo2 text-left my-4">Datos personales</h4>
                <div class="form-row justify-content-between">
                    <div class="col-md-3 form-group m-0">
                        <label for="nombre" class="font-weight-bold">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" required > 
                    </div>     
                    <div class="col-md-3 form-group m-md-0 my-3">
                        <label for="apellido1" class="font-weight-bold">Primero apellido</label>
                        <input type="text" name="apellido1" class="form-control" id="apellido1" required> 
                    </div>     
                    <div class="col-md-3 form-group m-0">
                        <label for="apellido2" class="font-weight-bold">Segundo apellido</label>
                        <input type="text" name="apellido2" class="form-control" id="apellido2" required> 
                    </div>
                    <div class="col-md-12 form-group mt-0"><small id="aviso1">Los caracteres tienen que estar entre 3-50 caracteres y no se permiten caracteres especiales o números.</small></div>
                </div>

                <h4 class="text-uppercase font-weight-bold subtitulo2 text-left my-4">Dirección</h4> 
            </form>
        </div>
    </div>
</div>

@stop