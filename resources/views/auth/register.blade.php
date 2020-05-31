@extends('layouts.master')
@section('titulo')
<title>Registro • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/articulos.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/crearUser.js')}}"></script>
@stop
@section('content')

<div class="container-fluid">
    <h3 class="mt-4 text-uppercase font-weight-bold text-center">Registro</h3>
    <hr class="w-75">
    <div class="row justify-content-center ">
        <div class="col-md-8 ml-md-5 mt-5">

            <form method="POST" action="{{ route('register') }}" id="formRegister">
                @csrf
                <div class="form-row">
                    <div class="col-md-4 form-group m-0">
                        <label for="name" class="font-weight-bold">Nombre</label>
                        <input type="text" name="name" class="form-control"  id="name" required> 
                        <small id="avisoNombre">El nombre tiene que tener entre 3-50 caracteres y solo letras.</small>
                    </div>     
                    <div class="col-md-4 form-group m-md-0 my-3">
                        <label for="firts_surname" class="font-weight-bold">Primero apellido</label>
                        <input type="text" name="firts_surname" class="form-control"  id="firts_surname" required> 
                        <small id="avisoApellido1">Tiene que tener entre 3-50 caracteres y solo letras.</small>
                    </div>     
                    <div class="col-md-4 form-group m-0">
                        <label for="second_surname" class="font-weight-bold">Segundo apellido</label>
                        <input type="text" name="second_surname" class="form-control"  id="second_surname" required> 
                        <small id="avisoApellido2">Tiene que tener entre 3-50 caracteres y solo letras.</small>
                    </div>
                    <div class="col-md-12 form-group mt-0"><small id="aviso1">Los caracteres tienen que estar entre 3-50 caracteres y no se permiten caracteres especiales o números.</small></div>
                </div>

                <div class="form-row justify-content-between my-3">
                    <div class="col-md-5 form-group">
                        <label for="email" class="font-weight-bold">{{ __('Correo Electronico') }}</label>
                        <input id="email" type="email" class="form-control" name="email"  required autocomplete="email">
                        <small id="avisoEmail">El correo no es válido.</small>
                    </div>    
                    <div class="col-md-3 form-group">
                        <label for="date_birth" class="font-weight-bold">{{ __('F.Nacimiento') }}</label>
                        <input id="date_birth" type="date" class="form-control" name="date_birth" required autocomplete="date_birth" >
                        <small id="avisoFecha">Tiene que ser mayor de 16 años.</small>
                    </div>
                    <div class="col-md-3 form-group text-left">
                        <label for="sexo" class="font-weight-bold">{{ __('Sexo') }}</label>
                        <div class="col-md-6 form-row">
                            <div class="form-check form-check-inline">
                                <label for="primerApellido" class="form-check-label mr-1">Hombre</label>
                                <input type="radio" class="form-check-input mr-3 radio" name="sex" value="hombre" required>   


                                <label for="primerApellido" class="form-check-label mr-1">Mujer</label>
                                <input type="radio" class="form-check-input radio" name="sex" value="mujer" required>
                            </div>   
                        </div>
                        <small id="avisoSex">El sexo no puede estar vacio.</small>
                    </div>
                </div>   

                <div class="form-row justify-content-between">
                    <div class="form-group col-md-5">
                        <label for="password" class="font-weight-bold">{{ __('Contraseña') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <small id="avisoPass">La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.</small>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="password-confirm" class="font-weight-bold ">{{ __('Repite la Contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <small id="avisoConfirm">Las contraseñas no coinciden.</small>
                    </div>
                </div>


                <div class="form-group text-center">
                    <label for="terminos" class="col-form-label "></label>
                    <input id="terminos" type="checkbox" name="terminos" required autocomplete="terminos"> Acepto los terminos y condiciones de la web.
                    <small id="avisoTerm">Terminos y condiciones obligatorios.</small>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="role" type="hidden" class="form-control" name="role" value="user" required autocomplete="rol">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="envio" type="hidden" class="form-control" name="envio" value="envio" required autocomplete="envio">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="picture" type="hidden" class="form-control" name="picture" value="default.png" required autocomplete="picture">
                    </div>
                </div>
                <div class="form-group row mb-0 text-center mb-5 mt-3">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn btn-warning mr-5" id="registro">
                            {{ __('Registrarse') }}
                        </button>
                        <a class="text-right btn btn-link" href="/">
                            {{ __('¿Ya tienes una cuenta?') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop