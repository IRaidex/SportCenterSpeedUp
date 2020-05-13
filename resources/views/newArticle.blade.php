@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/articulos.css')}}" type="text/css">
@stop
@section('titulo')
<title>Crear Articulo • Speed Up</title>
@stop
@section('content')

<div class="container-fluid">
    <h3 class="text-center my-4 text-uppercase font-weight-bold">Nuevo Articulo</h3>
    <hr class="w-50">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-12">
            <form action="{{url('/articles/create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="font-weight-bold">Titulo</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Introduce Titulo">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="content" rows="10" name="content"></textarea>
                </div> 
                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <label for="tag1" class="font-weight-bold">Etiqueta 1</label>
                        <input type="text" name="tag1" class="form-control" id="tag1"> 
                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="tag2" class="font-weight-bold">Etiqueta 2</label>
                        <input type="text" name="tag2" class="form-control" id="tag2"> 
                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="tag3" class="font-weight-bold">Etiqueta 3</label>
                        <input type="text" name="tag3" class="form-control" id="tag3"> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name='imgArticulo' id="file">
                        <label class="custom-file-label" for="customFile">Selecciona Archivo</label>
                    </div>
                </div>
                <div class="form-group text-center my-4">
                    <button type="submit" class="btn btn-primary mr-5">Crear</button>
                    <button type="button" class="btn btn-danger ml-5">Resetear</button>
                </div>
            </form>
        </div>
        <div class="col-md-8 col-12">

        </div>
    </div>
</div>
@stop


