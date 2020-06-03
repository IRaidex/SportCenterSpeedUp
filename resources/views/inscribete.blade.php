@extends('layouts.master')
@section('titulo')
<title>inscríbete • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/inscribete.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/inscribete.js')}}"></script>
@stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <form action="#" method="post" id="formCard">
                @csrf
                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="row">
                            <h1 class="text-uppercase font-weight-bold subtitulo text-center col-12 mb-5">Realizar <span class="subtitulo2">pago</span></h1>
                            <div class="col-md-12 mb-4">
                                <div class="form-row justify-content-between">
                                    <div class="col-4">
                                        <label for="pack">Elija un pack</label>
                                        <select class="form-control" id="pack" name="pack">
                                            <option selected>-</option>
                                            @foreach($pack as $key => $valor)
                                            <option value="{{$valor->idPack}}">{{$valor->name}}</option>
                                            @endforeach
                                        </select>
                                        <small id="avisoPack">Elija un pack</small>
                                    </div>
                                    <div class="col-6">
                                        <label for="tarjetas">Tarjetas</label>
                                        <select class="form-control" id="tarjetas" name="tarjeta">
                                            <option value="-" selected>-</option>
                                            @foreach($tarjetas as $key => $valor)
                                            <option value="{{$valor->idCard}}">{{$valor->number_card}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="number" class="form-control" id="numTarjeta" name="numTarjeta" placeholder="Numero Tarjeta"/>
                                <small id="avisoNum">El número de tarjeta tiene que tener 16 dígitos</small>
                            </div>
                        </div>
                        <div class="row my-4 justify-content-between">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font" > Mes Expira</span>
                                <input type="text" class="form-control" name="mesExpira" id="mesExpira" placeholder="MM"/>
                                <small id="avisoMes">Mes no válido</small>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font" >  Año Expira</span>
                                <input type="text" class="form-control" id="anyoExpira" name="anyoExpira" placeholder="YY" />
                                <small id="avisoYear">Mes no válido</small>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font" >  CCV</span>
                                <input type="number" class="form-control" name="cvv" id="cvv" placeholder="CCV"/>
                                <small id="avisoCvv">CVV no válido</small>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 pad-adjust">
                                <input type="text" class="form-control" name="dueñoTarjeta" id="dueñoTarjeta" placeholder="Titular" />
                                <small id="avisoTitular">Titular no válido</small>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-12 pad-adjust">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="datosTarjeta" name="guardar" checked class="text-muted"> Quieres guardar los datos de la tarjeta?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                <a href="{{url('/')}}"> <span id="cancelarPago" class="btn btn-danger">CANCELAR</span></a>
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

<div class="modal fade " id="pagoRealizado" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg mt-5">

        <!-- MODAL contenido-->
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white">Aceptado</h4>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <h3>El pago se ha realizado con exito, en breves recibira un correo con los datos del contrato.</h3>
                </div>
            </div>
            <div class="modal-footer">
                <a href='/' class="btn btn-info" id="cerrarModal">{{__('Cerrar')}}</a>
            </div>
        </div>

    </div>
</div>

@stop