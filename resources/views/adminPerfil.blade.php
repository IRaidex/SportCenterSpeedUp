@extends('layouts.master')
@section('titulo')
<title>Administrar Perfiles • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/administrarPerfiles.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/administrarPerfiles.js')}}"></script>
@stop
@section('content')
<div class="container-fluid">
    <div class="table-responsive m-2">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Primer apellido</th>
                    <th scope="col">Segundo apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col">F.Nacimiento</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
               @foreach($usuarios as $key => $valor)
                <tr>
                    <td><img src="{{asset('img/lupa.svg')}}" alt="lupa"></td>
                    <td>{{$valor->idUser}}</td>
                    <td>{{$valor->name}}</td>
                    <td>{{$valor->firts_surname}}</td>
                    <td>{{$valor->second_surname}}</td>
                    <td>{{$valor->email}}</td>
                    <td>{{$valor->role}}</td>
                    <td>{{$valor->date_birth}}</td>
                    <td><img src="{{asset('img/trash.svg')}}" alt="papelera"></td>
                </tr> 
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
@stop