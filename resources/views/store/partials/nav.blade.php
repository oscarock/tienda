<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tienda</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="{{ route('inicio') }}">Productos</a></li>
        <li><a href="{{ route('cart-show') }}">Carrito</a></li>
             
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">@if(Auth::check()) Bienvenido Usuario: {{ Auth::user()->email }} @endif</a></li>
        <li>
          @if(Auth::check())
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          @else
            <a href="{{ route('login') }}">Ingresar</a>
          @endif
            <li><a href="{{ route('user.create') }}">Registrase</a></li>
          </li>
      </ul>
    </div>
  </div>
</nav>