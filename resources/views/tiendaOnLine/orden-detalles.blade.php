@extends('tiendaOnLine.master')
@section('titulo', 'Detalles de la compra')

@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h3><i class="fa fa-shopping-cart"></i></i>Detalles de la Orden</h3>
	</div>
	<br>
	<div class="table-responsive">
		<h5>Datos del usuario</h5><br>
		<table class="table table-striped ">
			<tr><td>Nombre</td><td>{{Auth::user()->name}}</td></tr>
			<tr><td>Email</td><td>{{Auth::user()->email}}</td></tr>
			<tr><td>Dirección</td><td>{{Auth::user()->direccion}}</td></tr>
		</table>
	</div>
	<br><br>
	<div class="table-responsive">
		<h5>Datos de la Orden</h5><br>
		<table class="table table-hover tabla-carrito">
			<tr>
				 <thead class="thead-dark">
				 	<th>Producto</th>
       			 	<th>Precio</th>
       			 	<th>Cantidad</th>
       			 	<th>Subtotal</th>
       			 </thead>
			</tr>
			@foreach($carrito as $item)
			<tr>
				<td>{{$item->nombre}}</td>
    			<td>${{$item->precio}}</td>
    			<td>{{$item->cantidad}}</td>
    			<td>${{$item->precio * $item->cantidad}}</td>
    		</tr>
    		@endforeach
		</table>
		<h3>Total: ${{number_format($total,2)}}</h3>
		<hr>
	</div>
	<p>
		<a href="{{route('inicio')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle-left"></i>Seguir Comprando
		</a>
		<a href="{{route('payment')}}" class="btn btn-primary">Pagar
			<i class="fa fa-cc-paypal fa-2X"></i>
		</a>
	</p>	
</div>

@endsection

