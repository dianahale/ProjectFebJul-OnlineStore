<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
      <div class="bloque-menu">
        <a class="navbar-brand" href="{{route('inicio')}}"><img src="{{asset('img/favicon.png')}}" width="60px"><img src="{{asset('img/name.png')}}" width="200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="bloque-menu">
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('inicio')}}"><i class="fa fa-home" aria-hidden="true"></i>Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('carrito')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Carrito</a>
        </li>
        @include('tiendaOnLine.secciones.menu-usuario')
      </ul>
    </div>
</div>

  </div>
</nav>
