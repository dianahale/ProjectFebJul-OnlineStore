@extends('admin.template')
@section('titulo', 'Editar categoria')
@section('contenido')
    

<div class="container text-center">
    <div class="page-header">
        <h1>
            <i class="fa fa-shopping-cart"></i>Categorias<small>[Editar Categoria]</small>
        </h1>
    </div>
    

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="contenidos">

                @if(count($errors)>0)
                @include('admin.secciones.errores')
                @endif

                <form method="POST" action="{{route('categorias.update', $categoria->idcategoria)}}">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PUT">


                    <input type="hidden" name="id" value="{{$categoria->idcategoria}}">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input value="{{$categoria->nombre}}" class="form-control" type="text" name="nombre" placeholder="Escribe el nombre" required="">
                    </div>

                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input value="{{$categoria->codigo}}" class="form-control" type="text" name="codigo" required="">
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion">{{$categoria->descripcion}}</textarea>
                    </div>

                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{route('categorias.index') }}" class="btn btn-warning">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>   
@endsection