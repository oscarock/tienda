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
        @if(Auth::check())
          @if(Auth::user()->profile == 'admin')
          <li><a href="{{ route('product.index') }}">Productos</a></li>
          <li><a href="{{ route('category.index') }}">Categorias</a></li>
          <li><a href="{{ route('user.index') }}">Usuarios</a></li>
          @endif
        @endif
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
          </li>
      </ul>
    </div>
  </div>
</nav>