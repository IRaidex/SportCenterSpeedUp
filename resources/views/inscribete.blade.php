@extends('layouts.master')
@section('titulo')
<title>inscríbete • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/inscribete.css')}}" type="text/css">
@stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <form action="#" class="credit-card-div">
                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="row">
                            <h1 class="text-uppercase font-weight-bold subtitulo text-center col-12 mb-5">Realizar <span class="subtitulo2">pago</span></h1>
                            <div class="col-md-12 mb-4">
                                <div class="form-row justify-content-between">
                                    <div class="col-4">
                                        <label for="pack">Elija un pack</label>
                                        <select class="form-control" id="pack" name="pack">
                                            <option>Mensual</option>
                                            <option>Trimestral</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="tarjetas">Tarjetas</label>
                                        <select class="form-control" id="tarjetas" name="tarjeta">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="number" class="form-control" id="numTarjeta" placeholder="Numero Tarjeta"/>
                            </div>
                        </div>
                        <div class="row my-4 justify-content-between">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font" > Mes Expira</span>
                                <input type="text" class="form-control" id="mesExpira" placeholder="MM"/>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font" >  Año Expira</span>
                                <input type="text" class="form-control" id="anyoExpira" placeholder="YY" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font" >  CCV</span>
                                <input type="text" class="form-control" id="cvv" placeholder="CCV"/>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 pad-adjust">

                                <input type="text" class="form-control" id="dueñoTarjeta" placeholder="Titular" />
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-12 pad-adjust">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="datosTarjeta" checked class="text-muted"> Quieres guardar los datos de la tarjeta?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                <a href="{{url('carrito')}}"> <span id="cancelarPago" class="btn btn-danger">CANCELAR</span></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">

                                <span id="aceptarPago" class="btn btn-warning btn-block">PAGAR YA!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop