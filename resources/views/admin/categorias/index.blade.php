@extends('admin.template')
@section('titulo', 'Administrador de categorias')
@section('contenido')

<div class="container text-center">
	<div class="page.header">
		<h3><i class="fa fa-shopping-cart"></i>Categorias</h3><br>
		<a class="btn btn-light" href="{{route('categorias.create')}}">Nueva<i class="fa fa-plus-circle"></i></a>
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
					</tr>
	       		</thead>
	       		<tbody>
					@foreach($categorias as $categoria)
					<tr>
						<td>
							<a href="{{route('categorias.show', $categoria->idcategoria)}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
						</td>
						<td>
							<a href="{{route('deleteCat', $categoria->idcategoria)}}" class="btn btn-primary"><i class="fa fa-trash"></i></a>
						</td>
						<td>{{$categoria->nombre}}</td>
						<td>{{$categoria->codigo}}</td>
						<td>{{$categoria->descripcion}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection