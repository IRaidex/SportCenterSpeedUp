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

                <div class="form-group row">
                    <label for="name" class="font-weight-bold col-md-4 col-form-label ">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
                        <small id="avisoNombre">El nombre solo puede tener letras y entre 3-50 caracteres</small>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row my-4">
                    <label for="primerApellido" class="font-weight-bold col-md-4 col-form-label">{{ __('Primer Apellido') }}</label>
                    <div class="col-md-6">
                        <input id="firts_surname" type="text" class="form-control @error('firts_surname') is-invalid @enderror" name="firts_surname" value="{{ old('firts_surname') }}" required autocomplete="firts_surname">
                        <small id="avisoApellido1">El primer apellido solo puede tener letras y entre 3-50 caracteres</small>
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
                        <small id="avisoApellido2">El segundo apellido solo puede tener letras y entre 3-50 caracteres</small>
                        @error('second_surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row my-4">
                    <label for="date_birth" class="font-weight-bold col-md-4 col-form-label ">{{ __('Fecha de Nacimiento') }}</label>
                    <div class="col-md-6">
                        <input id="date_birth" type="date" class="form-control @error('date_birth') is-invalid @enderror" name="date_birth" value="{{ old('date_birth') }}" required autocomplete="date_birth" >
                        <small id="avisoFecha">Tiene que ser mayor de 16 años</small>
                        @error('date_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                </div>


                <div class="form-group row">
                    <label for="sex" class="font-weight-bold col-md-4 col-form-label ">{{ __('Sexo') }}</label>
                    <div class="col-md-6 form-row">
                        <div class="col-lg-4 col-md-12">
                            <label for="primerApellido" class="col-form-label">Hombre</label>
                            <input class="m-1 @error('sex') is-invalid @enderror" name="sex" value="hombre" type="radio" required>   
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="primerApellido" class="col-form-label">Mujer</label>
                            <input class="m-1 @error('sex') is-invalid @enderror" name="sex" value="mujer" type="radio" required>
                        </div>
                        <small id="avisoSex">El sexo no puede estar vacio</small>
                        @error('sex')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row my-4">
                    <label for="email" class="font-weight-bold col-md-4 col-form-label ">{{ __('Correo Electronico') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <small id="avisoEmail">El correo no es valido</small>
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
                        <small id="avisoPass">La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula</small>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label for="password-confirm" class="font-weight-bold col-md-4 col-form-label">{{ __('Repite la Contraseña') }}</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <small id="avisoConfirm">Las contraseñas no coinciden.</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="terminosYCondiciones" class="col-md-4 col-form-label "></label>
                    <div class="col-md-6">
                        <input id="terminos" type="checkbox" name="terminos" required autocomplete="terminos"> Acepto los terminos y condiciones de la web.
                          <small id="avisoTerm">Obligatorio</small>
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