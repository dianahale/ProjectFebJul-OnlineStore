@if (Auth::check())
<li class=  "nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{
        Auth::user()->name }}
            <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('/logout')}}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Cerrar Sesion</a>
        <form id="logout-form" action="{{url('/logout') }}" method="POST" style="display: none;"> 
            {{ csrf_field() }}
        </form>          
    </div>      
</li>
@else
<li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="{{url('/login')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fa fa-user"></i>ACCEDER
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{url('/login')}}">Iniciar sesion</a>
        <a class="dropdown-item" href="{{url('/register')}}">Registrarse</a>
           </a>   
        </div>
</li>
@endif
