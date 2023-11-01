@extends('admin.template')
@section('titulo', 'Crear categoria')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1>
		<i class="fa fa-shopping-cart"></i>  Usuarios  <small>[Agregar usuario]</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenidos">

				@if(count($errors)>0)
					@include('admin.secciones.errores')
				@endif

				{!! Form::open(['route' => 'users.store'])!!}
					<div class="form-group">
						<label for="name">Nombre</label>
						{!! Form::text('name', null, array('class'=>'form-control','placeholder'=>'Ingresa el nombre'))
						!!}
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						{!! Form::text('email', null, array('class'=>'form-control'))
						!!}
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						{!! Form::text('password', null, array('class'=>'form-control'))
						!!}
					</div>

					<div class="form-group">
						<label for="direccion">Dirección</label>
						{!! Form::text('direccion', null, array('class'=>'form-control'))
						!!}
					</div>

					<div class="form-group">
						{!! Form::submit('Guardar', array('class'=>'btn btn-primary'))
						!!}
						<a href="{{route('users.index')}}" class="btn btn-warning">Cancelar</a>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection
