@extends('tiendaOnLine.master')
@section('titulo', 'Lista de productos')

@section('contenido')
@include('tiendaOnLine.secciones.slider')

<div class="container text-center color_title">
<br>
<br>
</div>
<div class="container text-center">
	<div id="productos">
		@foreach($productos as $producto)
		<article class="white-panel">
			<h4>{{$producto->nombre}}</h4>
			<hr>
			<p><img src="{{$producto->imagen}}"></p>
			<h5>Precio: ${{$producto->precio}}</h5>
			<p>{{$producto->descripcion}}</p>
			<a class="btn btn-primary btn-sm" href="{{route('carrito-agregar',$producto->idproducto)}}">Añadir al carrito</a>
			<a class="btn btn-danger btn-sm" href="{{route('producto-detalles',$producto->idproducto)}}">Ver más</a>
			<hr>
		</article>
		@endforeach
	</div>
</div>
@endsection