@extends('layouts.master')
@section('titulo')
<title>{{$articulo[0]->title}} • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/editArticle.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/editArticle.js')}}"></script>
@stop
@section('content')
<div class="container-fluid">
    <div class="form-row">
        <div class="col-1">
            <a href="/articulo/" class="text-left volver"><img src="{{asset('img/volver.svg')}}" class="botonVolver mt-3" alt="Botón"></a>
        </div>
        <div class="col-11">
            <h3 class=" text-uppercase font-weight-bold text-center mt-4"><span class="colorAzul">Editar</span> Artículo</h3>
        </div>
    </div>
    <hr class="w-75">
    <form action="#" method="post" id="formArticle" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-2 col-sm-10 col-12 text-center mt-3">
                <div class="image-upload">
                    <label for="file-input">
                        <img src="{{asset('articulos/'.$articulo[0]->picture)}}" id="fotoArticulo" alt="fotoArticulo" class="img-fluid" title="Haz clic para cambiar de imagen">
                    </label>
                    <input id="file-input" type="file" name="picture" disabled>
                </div>
            </div>
            <div class="col-md-7 col-sm-10 col-12">
                <div class="form-group">
                    <label for="title" class="font-weight-bold">Titulo</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$articulo[0]->title}}" placeholder="Introduce Titulo" required disabled>
                    <small id="avisoTitle">El título tiene que tener entre 5 y 150 caracteres.</small>
                </div>
                <div class="form-group">
                    <textarea class="form-control" maxlength="5000" id="articulo" rows="10" name="content"  placeholder="Escriba Articulo..." required disabled>{{$articulo[0]->content}}</textarea>
                    <label for="caracteres" id="numero"></label>
                    <small id="avisoContent" > - El articulo tiene que tener entre 150 y 5000 caracteres.</small>
                </div> 
                <div class="form-row m-0">
                    <div class="col-md-4 form-group">
                        <label for="tag1" class="font-weight-bold">Etiqueta 1</label>
                        <input type="text" name="tag1" class="form-control" id="tag1" value="{{$articulo[0]->tag1}}" required disabled> 

                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="tag2" class="font-weight-bold">Etiqueta 2</label>
                        <input type="text" name="tag2" class="form-control" id="tag2" value="{{$articulo[0]->tag2}}" required disabled> 
                    </div>     
                    <div class="col-md-4 form-group">
                        <label for="tag3" class="font-weight-bold">Etiqueta 3</label>
                        <input type="text" name="tag3" class="form-control" id="tag3" value="{{$articulo[0]->tag3}}" required disabled> 
                    </div>
                    <div class="col-md-12 form-group mt-0"><small id="avisoTag">Las etiquetas tienen que tener entre 3 y 15 caracteres.</small></div>
                </div>
                <div class="form-group col-md-12 text-center mt-3">
                    <span class="btn btn-info  mod">Modificar</span>
                    <span class="btn btn-success  save" id="{{$articulo[0]->idArticle}}">Guardar</span>
                    <span class="btn btn-danger  cancelar">Cancelar</span>
                    @if(Auth::user()->role == 'Admin')
                    <span id="admin{{$articulo[0]->idArticle}}" class="btn btn-danger  eliminar1">Eliminar</span>
                    @endif
                    
                    @if(Auth::user()->role == 'monitor')
                    <span id="monitor{{$articulo[0]->idArticle}}" class="btn btn-danger  eliminar2">Eliminar</span>
                    @endif
                    
                    <img src="{{asset('img/cambioSave.svg')}}" alt="iconoBien" id="success" class="ml-2 icono">
                    <img src="{{asset('img/cambioError.svg')}}" alt="iconoMal" id="error"class="ml-2 icono">                     
                </div>    
            </div>
        </div>
    </form>
</div>

<!--MODAL-->
<div class="modal fade " id="modalEliminar" role="dialog">
    <div class="modal-dialog modal-lg mt-5">

        <!-- MODAL contenido-->
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white">Atención</h4>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <h3>Estas seguro que quieres eliminar este articulo?</h3>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">{{__('Cerrar')}}</button>
                <a href=""  class="btn btn-danger eliminarUsuario" >{{__('Aceptar')}}</a>
            </div>
        </div>

    </div>
</div>
@stop