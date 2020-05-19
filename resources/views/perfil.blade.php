@extends('layouts.master')
@section('titulo')
<title>Perfil • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/perfil.css')}}" type="text/css">
@stop
@section('content')

<div class="container-fluid">
    <h3 class="mt-4 text-uppercase font-weight-bold text-center">Perfil</h3>
    <hr class="w-75">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <img src="{{asset('perfil/'.$user->picture)}}" alt="fotoPerfil" class="img-fluid">
        </div>
        <div class="col-md-8">
            <form action="" method="post">
                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <label for="nombre" class="font-weight-bold">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{$user->name}}" id="nombre" required disabled> 
                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="apellido1" class="font-weight-bold">Primer apellido</label>
                        <input type="text" name="apellido1" class="form-control" value="{{$user->firts_surname}}" id="apellido1" required disabled> 
                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="apellido2" class="font-weight-bold">Segundo apellido</label>
                        <input type="text" name="apellido2" class="form-control" value="{{$user->second_surname}}" id="apellido2" required disabled> 
                    </div>
                    <div class="col-md-12 form-group mt-0"><small id="avisoTag">Las etiquetas tienen que tener entre 3 y 15 caracteres.</small></div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 form-group align-self-md-center p-0">
                        <label for="email" class="font-weight-bold">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}" required disabled> 
                    </div>    
                    <div class="col-md-6 form-group align-self-md-center">
                        <button class="btn btn-info">Modificar</button>
                        <button class="btn btn-info">Guardar</button>
                    </div>     
                    <div class="col-md-12 form-group mt-0"><small id="avisoTag">Las etiquetas tienen que tener entre 3 y 15 caracteres.</small></div>
                </div>

                <div class="col-md-1 ">

                </div>
            </form>
        </div>

    </div>
</div>
@stop