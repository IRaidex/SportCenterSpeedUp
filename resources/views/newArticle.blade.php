@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h4 class="text-center my-4">Nuevo Articulo</h4>
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <form action="{{url('/prueba')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="font-weight-bold">Titulo</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Introduce Titulo">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-primary">Resetear</button>
                </div>
            </form>
        </div>
        <div class="col-md-8 col-12">

        </div>
    </div>
</div>
@stop


