@extends('layouts.master')@section('titulo')
<title>Torneo • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
@stop
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <img src="{{asset('img/bracket.png')}}" alt="bracket" class="img-fluid">
        </div>
    </div>
</div>
@stop