@extends('tiendaOnLine.master')
@section('titulo', 'Detalles del producto')

@section('contenido')
<br>
	<div class="container text-center">
		<h4>Detalles del producto</h4><br>
		<div class="row">
			<div class="col-md-5">
			<div class="bloque-producto">
				<img src="{{asset($producto->imagen)}}"width="250">
			</div>
			</div>

			<div class="col-md-7">
				<div class="bloque-producto">
					<h4>{{$producto->nombre}}</h4><br>
					<p>{{$producto->descripcion}}</p><br>
					<h4>Precio: ${{$producto->precio}}</h4><br>
					<p><a class="btn btn-warning btn-block" href="{{route('carrito-agregar',$producto->idproducto)}}">Agregar al Carrito</a></p>
				</div>
			</div>
		</div>
		<hr>
		<p><a class="btn btn-primary" href="{{route('inicio')}}">Ver Más</a></p>
	</div>
@endsection
