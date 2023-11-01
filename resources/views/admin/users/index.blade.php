@extends('admin.template')
@section('titulo', 'Administrador de categorias')
@section('contenido')

<div class="container text-center">
	<div class="page.header">
		<h3><i class="fa fa-shopping-cart"></i>Usuarios</h3><br>
	</div>

	<div class="contenidos">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead class="thead-dark">
					<tr>
	       			 	<th>Eliminar</th>
	       			 	<th>Nombre</th>
	       			 	<th>E-mail</th>
	       			 	<th>Contraseña</th>
	       			 	<th>Dirección</th>

					</tr>
	       		</thead>
	       		<tbody>
					@foreach($users as $user)
					<tr>
						<td>
							<a href="{{route('deleteUser', $user->id)}}" class="btn btn-primary"><i class="fa fa-trash"></i></a>
						</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->password}}</td>
						<td>{{$user->direccion}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection