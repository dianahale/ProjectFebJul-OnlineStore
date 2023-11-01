<!DOCTYPE html>
<html>
<head>
	<title>TiendaOnLine-@yield('titulo')</title>
	<link rel="icon" href="{{asset('img/favicon.png')}}">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/simplex/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/main.css')}}">
	
</head>
<body>

	@if(\Session::has('mensaje'))
		@include('tiendaOnLine.secciones.mensajes')
	@endif

	@include('admin.secciones.menu')<br>
	@yield('contenido')<br>
	@include('admin.secciones.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>
</html>