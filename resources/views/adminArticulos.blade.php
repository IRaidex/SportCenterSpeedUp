@extends('layouts.master')
@section('titulo')
<title>Administrar Artículos • Speed Up</title>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/administrarPerfiles.css')}}" type="text/css">
@stop
@section('js')
<script src="{{asset('js/administrarArticulo.js')}}"></script>
@stop
@section('content')
<div class="container-fluid mt-3">
    <h3 class="text-center my-4 text-uppercase font-weight-bold"><span class="colorAzul">Administrar</span> Artículos</h3>
    <hr class="w-75">
    
    <div class="row justify-content-center">
        <div class="col-10 table-responsive my-5">
            <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
            <br>
            <table class="table table-bordered mb-4">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Articulo</th>
                        <th scope="col">Tag 1</th>
                        <th scope="col">Tag 2</th>
                        <th scope="col">Tag 3</th>
                        <th scope="col">Autor</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($articulos as $key => $valor)
                    <tr>
                        <td class="text-center"><a href="/articulo/edit/{{$valor->idArticle}}"><img src="{{asset('img/lupa.svg')}}" alt="lupa"></a></td>
                        <td class="text-center">{{$valor->idArticle}}</td>
                        <td >{{$valor->title}}</td>
                        <td class="limitado">{{$valor->content}}</td>
                        <td>{{$valor->tag1}}</td>
                        <td>{{$valor->tag2}}</td>
                        <td>{{$valor->tag3}}</td>
                        <td>{{$valor->datosUser->name}} {{$valor->datosUser->firts_surname}} {{$valor->datosUser->second_surname}}</td>
                        <td class="text-center"><img src="{{asset('img/trash.svg')}}" class="papelera" id="papelera{{$valor->idArticle}}" alt="papelera"></td>
                    </tr> 
                    @endforeach 

                </tbody>
            </table>
        </div>
    </div>
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