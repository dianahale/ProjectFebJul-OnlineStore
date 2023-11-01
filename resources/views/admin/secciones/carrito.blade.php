@extends('tiendaOnLine.master')
@section('titulo', 'Carrito de compras')

@section('contenido')

@php $total=0;
@endphp

<div class="container text-center">
<br>	
<h4>CARRITO DE COMPRA</h4>
@if(count($carrito))
<div class="table-responsive">
	<table class="table table-hover tabla-carrito">
		<thead>
			<tr>
				<th>Imagen</th>
       			<th>Producto</th>
       			<th>Precio</th>
       			<th>Cantidad</th>
       			<th>Subtotal</th>
       			<th>Eliminar</th>
      		</tr>
    	</thead>
    	<tbody>
    		@foreach($carrito as $item)
    		<tr>
    			<td><img src="{{asset($item->imagen)}}"></td>
    			<td>{{$item->nombre}}</td>
    			<td>${{$item->precio}}</td>
    			<td>
    				<input type="number" min="1" max="50" value="{{$item->cantidad}}" id="producto_{{$item->idproducto}}">
    				<a href="#" class="btn btn-warning btn-update-item"
    				data-href="{{route('carrito-actualizar', $item->idproducto)}}"
    				data-id="{{$item->idproducto}}">
    				<i class="fa fa-refresh"></i>				
    				</a>
    			</td>
    			<td>${{$item->precio * $item->cantidad}}</td>
    			<td><a href="{{route('carrito-borrar', $item->idproducto)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    		</tr>
    		@php 
    		$total= $total + ($item->precio * $item->cantidad);
			@endphp
    		@endforeach
    	</tbody>
  	</table>
  	<hr>
  	<h4>
  		@php
  			echo 'Monto Total: $'.$total.' MXN';
  		@endphp
  	</h4>
  	<br><br>
</div>
@else
<br>
<img src="{{asset('img/name2.png')}}" width="200px">
<br><br><br>
<h3 class="btn btn-danger active">No hay productos agregados al carrito</h3>
@endif
<br><br>
<a href="{{route('inicio')}}" class="btn btn-primary">
			<i class="fa fa-chevron-circle-left"></i>Seguir Comprando
		</a>
<a href="{{route('orden-detalles')}}" class="btn btn-primary">Continuar
	<i class="fa fa-chevron-circle-right"></i>
</a>
</div>
@endsection