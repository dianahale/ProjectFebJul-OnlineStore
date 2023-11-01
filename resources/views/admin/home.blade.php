@extends('admin.template')
@section('titulo', 'Administración')
@section('contenido')

<div class="container text-center">
	<div class="page-header">
		<h2><i class="fa fa-rocker"></i>Administrador de Tienda Online "Media Market"</h2>
	</div>
	<h3>Bienvenido(a) {{Auth::user()->name}} al panel de administración</h3>
	<div class="row">
		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-list-alt icon-home"></i>
				<a href="{{route('categorias.index')}}" class="btn btn-warning btn-block btn-home-admin">CATEGORIAS</a>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-shopping-bag icon-home"></i>
				<a href="{{route('productos.index')}}" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-book icon-home"></i>
				<a href="{{route('pedidos.index')}}" class="btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
			</div>
		</div>

		<div class="col-md-6">
			<div class="panel">
				<i class="fa fa-users icon-home"></i>
				<a href="{{route('users.index')}}" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
			</div>
		</div>
	</div>
</div>
@endsection