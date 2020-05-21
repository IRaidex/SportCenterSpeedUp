@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/newArticle.css')}}" type="text/css">
@stop
@section('titulo')
<title>Crear Articulo • Speed Up</title>
@stop
@section('js')
<script src="{{asset('js/crearArticle.js')}}"></script>
@stop
@section('content')

<div class="container-fluid">
    <h3 class="text-center my-4 text-uppercase font-weight-bold">Nuevo Articulo</h3>
    <hr class="w-50">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-12">
            <form action="{{url('/articulo/create')}}" method="post" enctype="multipart/form-data" id="formArticle">
                @csrf
                <div class="form-group">
                    <label for="title" class="font-weight-bold">Titulo</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Introduce Titulo" required>
                    <small id="avisoTitle">El título tiene que tener entre 5 y 100 caracteres.</small>
                </div>
                <div class="form-group">
                    <textarea class="form-control" maxlength="5000" id="articulo" rows="10" name="content" placeholder="Escriba Articulo..." required></textarea>
                    <label for="caracteres" id="numero"></label>
                    <small id="avisoContent" >El articulo tiene que tener entre 5 y 5000 caracteres.</small>
                </div> 
                <div class="form-row m-0">
                    <div class="col-md-4 form-group">
                        <label for="tag1" class="font-weight-bold">Etiqueta 1</label>
                        <input type="text" name="tag1" class="form-control" id="tag1" required> 

                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="tag2" class="font-weight-bold">Etiqueta 2</label>
                        <input type="text" name="tag2" class="form-control" id="tag2" required> 
                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="tag3" class="font-weight-bold">Etiqueta 3</label>
                        <input type="text" name="tag3" class="form-control" id="tag3" required> 
                    </div>
                    <div class="col-md-12 form-group mt-0"><small id="avisoTag">Las etiquetas tienen que tener entre 3 y 15 caracteres.</small></div>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name='imgArticulo' id="file" required>
                        <label class="custom-file-label" for="customFile">Selecciona Archivo</label>
                        <small id="avisoFile"  >Tienes que seleccionar una imagen.</small>
                    </div>
                </div>
                <div class="form-group text-center my-4">
                    <input type="submit" class="btn btn-primary mr-5" id="crear" value="Crear">
                </div>
            </form>
        </div>
    </div>
</div>

@stop


