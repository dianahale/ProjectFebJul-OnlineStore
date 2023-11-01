@extends('admin.template')
@section('titulo', 'Administrador de categorias')
@section('contenido')

<div class="container text-center">
	<div class="page.header">
		<h3><i class="fa fa-shopping-cart"></i>Productos</h3><br>
		<a class="btn btn-light" href="{{route('productos.create')}}">Nueva<i class="fa fa-plus-circle"></i></a>
	</div>

	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead class="thead-dark">
					<tr>
					 	<th>Editar</th>
	       			 	<th>Eliminar</th>
	       			 	<th>Nombre</th>
	       			 	<th>Código</th>
	       			 	<th>Descripción</th>
	       			 	<th>Imagen</th>
	       			 	<th>Precio</th>
	       			 	<th>Categoria</th>

					</tr>
	       		</thead>
	       		<tbody>
					@foreach($productos as $producto)
					<tr>
						<td>
							<a href="{{route('productos.update', $producto->idproducto)}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
						</td>
						<td>
							<a href="{{route('delete', $producto->idproducto)}}" class="btn btn-primary"><i class="fa fa-trash"></i></a>
						</td>
						<td>{{$producto->nombre}}</td>
						<td>{{$producto->codigo}}</td>
						<td>{{$producto->descripcion}}</td>
						<td><img src="{{$producto->imagen}}" width="50px"></td>
						<td>{{$producto->precio}}</td>
						<td>{{$producto->idcategoria}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection