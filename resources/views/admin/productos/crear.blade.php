@extends('admin.template')
@section('titulo', 'Crear categoria')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1>
		<i class="fa fa-shopping-cart"></i>  Productos  <small>[Agregar producto]</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenidos">

				@if(count($errors)>0)
					@include('admin.secciones.errores')
				@endif

				{!! Form::open(['route' => 'productos.store'])!!}
					<div class="form-group">
						<label for="nombre">Nombre</label>
						{!! Form::text('nombre', null, array('class'=>'form-control','placeholder'=>'Ingresa el nombre'))
						!!}
					</div>
					<div class="form-group">
						<label for="codigo">Código</label>
						{!! Form::text('codigo', null, array('class'=>'form-control'))
						!!}
					</div>
					<div class="form-group">
						<label for="descripcion">Desprición</label>
						{!! Form::textarea('descripcion', null, array('class'=>'form-control'))
						!!}
					</div>
					<div class="form-group">
						<label for="imagen">Imagen</label>
						{!! Form::text('imagen', null, array('class'=>'form-control'))
						!!}
					</div>

					<div class="form-group">
						<label for="precio">Precio</label>
						{!! Form::text('precio', null, array('class'=>'form-control'))
						!!}
					</div>


					<div class="form-group">
						<label for="idcategoria">idCategoria</label>
						{!! Form::text('idcategoria', null, array('class'=>'form-control'))
						!!}
					</div>

					<div class="form-group">
						{!! Form::submit('Guardar', array('class'=>'btn btn-primary'))
						!!}
						<a href="{{route('productos.index')}}" class="btn btn-warning">Cancelar</a>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection
