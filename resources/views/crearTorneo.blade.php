@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="text-center my-4">Crear Torneo</h4>
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="#" method="get" id='tournament'>
                <div class="form-group row">
                    <label for="name" class="font-weight-bold col-md-4 col-form-label ">{{ __('Nombre') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="start" class="font-weight-bold col-md-4 col-form-label ">{{ __('Fecha Inicio') }}</label>
                    <div class="col-md-6">
                        <input id="start" type="date" class="form-control" name="start">
                    </div>
                </div>   
                <div class="form-group row">
                    <label for="ending" class="font-weight-bold col-md-4 col-form-label ">{{ __('Fecha Fin') }}</label>
                    <div class="col-md-6">
                        <input id="endingending" type="date" class="form-control" name="ending">
                    </div>
                </div>
                <div class=" form-group row justify-content-center">
                    <button type="submit" class="btn btn-warning" id="crear">
                        {{ __('Crear') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop