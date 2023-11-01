@extends('admin.template')
@section('titulo', 'Crear categoria')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h1>
		<i class="fa fa-shopping-cart"></i>  Categorias  <small>[Agregar categoria]</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="contenidos">

				@if(count($errors)>0)
					@include('admin.secciones.errores')
				@endif

				{!! Form::open(['route' => 'categorias.store'])!!}
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
						{!! Form::submit('Guardar', array('class'=>'btn btn-primary'))
						!!}
						<a href="{{route('categorias.index')}}" class="btn btn-warning">Cancelar</a>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection
