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

            <div class="col-md-2 col-sm-10 col-12 text-center">
                <div class="image-upload">
                    <label for="file-input">
                        <img src="{{asset('perfil/'.$user->picture)}}" id="fotoPerfil" alt="fotoPerfil" class="img-fluid border border-dark" title="Haz clic para cambiar de imagen">
                    </label>

                    <input id="file-input" type="file" name="picture" disabled>
                </div>
            </div>
            <div class="col-md-7 col-sm-10 col-12">
                <div class="form-row">
                    <div class="col-md-4 form-group m-0">
                        <label for="nombre" class="font-weight-bold">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{$user->name}}" id="nombre" required disabled>
                        <small id="avisoNombre">El nombre tiene que tener entre 3-50 caracteres y solo letras.</small> 
                    </div>     
                    <div class="col-md-4 form-group m-md-0 my-3">
                        <label for="apellido1" class="font-weight-bold">Primero apellido</label>
                        <input type="text" name="apellido1" class="form-control" value="{{$user->firts_surname}}" id="apellido1" required disabled> 
                        <small id="avisoApellido1">Tiene que tener entre 3-50 caracteres y solo letras.</small>
                    </div>     
                    <div class="col-md-4 form-group m-0">
                        <label for="apellido2" class="font-weight-bold">Segundo apellido</label>
                        <input type="text" name="apellido2" class="form-control" value="{{$user->second_surname}}" id="apellido2" required disabled> 
                        <small id="avisoApellido2">Tiene que tener entre 3-50 caracteres y solo letras.</small>
                    </div>
                </div>
                <div class="form-row justify-content-between my-3">
                    <div class="col-md-6 form-group">
                        <label for="email" class="font-weight-bold">Correo Electronico</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required autocomplete="email" required disabled>
                        <small id="avisoEmail">El correo no es válido.</small>
                    </div>    
                    <div class="col-md-4 form-group">
                        <label for="date_birth" class="font-weight-bold">F.Nacimiento</label>
                        <input id="date_birth" type="date" class="form-control" name="date_birth" value="{{$user->date_birth}}" required autocomplete="date_birth" required disabled>
                        <small id="avisoFecha">Tiene que ser mayor de 16 años.</small>
                    </div>
                </div>
                <hr class="w-75 my-3">
                <div class="form-row justify-content-between">
                    <div class="col-md-4 col-8 form-group">
                        <label for="via" class="font-weight-bold">Nombre via</label>
                        @if($address != null)
                        <input type="text" name="via" class="form-control"  id="via" value="{{$address->via}}" disabled>
                        @else
                        <input type="text" name="via" class="form-control"  id="via" disabled>
                        @endif
                        <small id="avisoVia">El nombre de la via tiene que tener entre 3-50 caracteres y solo letras.</small>
                    </div>     
                    <div class="col-md-2 col-4 form-group">
                        <label for="numero" class="font-weight-bold">Numero</label>
                        @if($address != null)
                        <input type="number" name="numero" class="form-control" value="{{$address->number}}" id="numero" disabled> 
                        @else
                        <input type="number" name="numero" class="form-control"  id="numero" disabled> 
                        @endif
                        <small id="avisoNumero">Numero no válido.</small>
                    </div>     
                    <div class="col-md-2 col-6 form-group">
                        <label for="piso" class="font-weight-bold">Piso</label>
                        @if($address != null)
                        <input type="number" name="piso" class="form-control" value="{{$address->floor}}" id="piso" disabled> 
                        @else
                        <input type="number" name="piso" class="form-control"  id="piso" disabled> 
                        @endif
                        <small id="avisoPiso">Piso no válido.</small>
                    </div>
                    <div class="col-md-2 col-6 form-group">
                        <label for="puerta" class="font-weight-bold">Puerta</label>
                        @if($address != null)
                        <input type="number" name="puerta" class="form-control" value="{{$address->door}}" id="puerta"  disabled>
                        @else
                        <input type="number" name="puerta" class="form-control"  id="puerta"  disabled>
                        @endif
                        <small id="avisoPuerta">Puerta no válida.</small> 
                    </div>
                </div>
                <div class="form-row justify-content-between my-3">
                    <div class="col-md-4 col-12 form-group">
                        <label for="provincia" class="font-weight-bold">Provincia</label>
                        @if($address != null)
                        <input type="text" name="provincia" class="form-control" value="{{$address->province}}" id="provincia"  disabled>
                        @else
                        <input type="text" name="provincia" class="form-control" id="provincia"  disabled>
                        @endif
                        <small id="avisoProvincia">La provincia tiene que tener entre 3-35 caracteres y solo letras.</small>  
                    </div>     
                    <div class="col-md-4 col-12 form-group">
                        <label for="localidad" class="font-weight-bold">Localidad</label>
                        @if($address != null)
                        <input type="text" name="localidad" class="form-control" value="{{$address->location}}" id="localidad"  disabled>
                        @else
                        <input type="text" name="localidad" class="form-control"  id="localidad"  disabled>
                        @endif
                        <small id="avisoLocalidad">La localidad tiene que tener entre 3-35 caracteres y solo letras.</small>   
                    </div>     
                    <div class="col-md-2 col-6 form-group">
                        <label for="cp" class="font-weight-bold">C.P</label>
                        @if($address != null)
                        <input type="number" name="cp" class="form-control" value="{{$address->cp}}" id="cp"  disabled>
                        @else
                        <input type="number" name="cp" class="form-control" id="cp"  disabled>
                        @endif
                        <small id="avisoCp">C.P no válido.</small>    
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="envio" type="hidden" class="form-control" name="envio" value="envio" required autocomplete="envio">
                    </div>
                </div>    
                <div class="form-group col-md-12 text-center mt-3">
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