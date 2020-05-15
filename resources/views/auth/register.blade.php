@extends('layouts.master')
@section('titulo')
<title>Registro • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/articulos.css')}}" type="text/css">
@stop
@section('content')

<div class="container-fluid">
    <h3 class="mt-4 text-uppercase font-weight-bold text-center">Registro</h3>
    <hr class="w-75">
    <div class="row justify-content-center ">
        <div class="col-md-6 mt-5">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="font-weight-bold col-md-4 col-form-label ">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="primerApellido" class="font-weight-bold col-md-4 col-form-label">{{ __('Primer Apellido') }}</label>
                    <div class="col-md-6">
                        <input id="firts_surname" type="text" class="form-control @error('firts_surname') is-invalid @enderror" name="firts_surname" value="{{ old('firts_surname') }}" required autocomplete="firts_surname">
                        @error('firts_surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="segundoApellido" class="font-weight-bold col-md-4 col-form-label ">{{ __('Segundo Apellido') }}</label>
                    <div class="col-md-6">
                        <input id="second_surname" type="text" class="form-control @error('second_surname') is-invalid @enderror" name="second_surname" value="{{ old('second_surname') }}" required autocomplete="second_surname">
                        @error('second_surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date_birth" class="font-weight-bold col-md-4 col-form-label ">{{ __('Fecha de Nacimiento') }}</label>
                    <div class="col-md-6">
                        <input id="date_birth" type="date" class="form-control @error('date_birth') is-invalid @enderror" name="date_birth" value="{{ old('date_birth') }}" required autocomplete="date_birth">

                        @error('date_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="sex" class="font-weight-bold col-md-4 col-form-label ">{{ __('Sexo') }}</label>
                    <div class="col-md-6 form-inline">
                        <input class="ml-3 mr-3 @error('sex') is-invalid @enderror" name="sex" value="hombre" type="radio">Hombre
                        <input class="mr-3 ml-3 @error('sex') is-invalid @enderror" name="sex" value="mujer" type="radio">Mujer
                        @error('sex')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="email" class="font-weight-bold col-md-4 col-form-label ">{{ __('Correo Electronico') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="font-weight-bold col-md-4 col-form-label ">{{ __('Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password-confirm" class="font-weight-bold col-md-4 col-form-label">{{ __('Repite la Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="terminosYCondiciones" class="col-md-4 col-form-label "></label>
                    <div class="col-md-6">
                        <input id="terminosYCondiciones" type="checkbox" name="terminosYCondiciones" required autocomplete="terminosYCondiciones"> Acepto los terminos y condiciones de la web.
                        @error('terminosYCondiciones')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="role" type="hidden" class="form-control" name="role" value="user" required autocomplete="rol">
                    </div>
                </div>   
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="picture" type="hidden" class="form-control" name="picture" value="default.png" required autocomplete="picture">
                    </div>
                </div>
                <div class="form-group row mb-0 text-center mb-5 mt-3">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn btn-warning mr-5">
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