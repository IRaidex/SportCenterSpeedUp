@extends('layouts.master')
@section('titulo')
<title>Perfil • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/perfil.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/perfil.js')}}"></script>
@stop
@section('content')

<div class="container-fluid">
    <h3 class="mt-4 text-uppercase font-weight-bold text-center">Perfil</h3>
    <hr class="w-75">
    <form action="#" method="post" id="formPerfil" enctype="multipart/form-data">
         @csrf
        <div class="row justify-content-center my-md-5 my-1">

            <div class="col-md-2 col-sm-10 col-12 text-center m-5 m-md-0">
                <div class="image-upload">
                    <label for="file-input">
                        <img src="{{asset('perfil/'.$user->picture)}}" id="fotoPerfil" alt="fotoPerfil" class="img-fluid" title="Haz clic para cambiar de imagen">
                    </label>

                    <input id="file-input" type="file" name="picture" disabled>
                </div>
            </div>
            <div class="col-md-8 col-sm-10 col-12">
                <div class="form-row">
                    <div class="col-md-4 form-group m-0">
                        <label for="nombre" class="font-weight-bold">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{$user->name}}" id="nombre" required disabled> 
                    </div>     
                    <div class="col-md-4 form-group m-md-0 my-3">
                        <label for="apellido1" class="font-weight-bold">Primero apellido</label>
                        <input type="text" name="apellido1" class="form-control" value="{{$user->firts_surname}}" id="apellido1" required disabled> 
                    </div>     
                    <div class="col-md-4 form-group m-0">
                        <label for="apellido2" class="font-weight-bold">Segundo apellido</label>
                        <input type="text" name="apellido2" class="form-control" value="{{$user->second_surname}}" id="apellido2" required disabled> 
                    </div>
                    <div class="col-md-12 form-group mt-0"><small id="aviso1">Los caracteres tienen que estar entre 3-50 caracteres y no se permiten caracteres especiales o números.</small></div>
                </div>
                <div class="form-group col-md-6 p-0">
                    <label for="email" class="font-weight-bold">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}" id="email" required disabled> 
                    <small id="aviso2">El correo no es válido.</small>
                </div>    
                <div class="form-group col-md-12 text-right">
                    <span class="btn btn-info text-right mod">Modificar</span>
                    <span class="btn btn-success text-right save">Guardar</span>
                    <span class="btn btn-danger text-right error">Cancelar</span>
                    <img src="{{asset('img/cambioSave.svg')}}" alt="iconoBien" id="success" class="ml-2 icono">
                    <img src="{{asset('img/cambioError.svg')}}" alt="iconoMal" id="error"class="ml-2 icono">                     
                </div>    
            </div>

        </div>
    </form>
</div>
@stop