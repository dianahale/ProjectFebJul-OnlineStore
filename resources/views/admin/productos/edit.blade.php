@extends('admin.template')
@section('titulo', 'Editar productos')
@section('contenido')
    

<div class="container text-center">
    <div class="page-header">
        <h1>
            <i class="fa fa-shopping-cart"></i>Productos<small>[Editar Productos]</small>
        </h1>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('productos.update', $producto->idproducto)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="method" value="PUT">
                        <input type="hidden" name="idestado" value="1">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input value="{{$producto->nombre}}" class="form-control" type="text" name="nombre" id="nombre" required placeholder="Ingrese el nombre">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input value="{{$producto->codigo}}" class="form-control" type="text" name="codigo" id="codigo" required placeholder="Ingrese el código">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control">{{$producto->descripcion}}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="img">Imagen</label>
                            <input value="{{$producto->Imagen}}" class="form-control" type="file" name="img" id="img" placeholder="Ingrese la imagen">
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input value="{{$producto->precio}}" class="form-control" type="text" name="precio" id="precio" required placeholder="Ingrese el precio">
                        </div>


                        <div class="form-group">
                            <label for="idcategoria">Categoria</label>
                            <select name="idcategoria" id="idcategoria" class="form-control">
                                @foreach($categorias as $categoria)
                                    @if($categoria->idcategoria==$producto->idcategoria)
                                        <option selected value="{{$categoria->idcategoria}}">{{$categoria->nombre}}</option>
                                    @else
                                        <option value="{{$categoria->idcategoria}}">{{$categoria->nombre}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
               </div>
            </div>
        </div>
    </div>
    
@endsection