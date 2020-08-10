<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2">
  <a class="navbar-brand" href="{{ url('/index') }}">
   <img src="/images/infologclasicopantoneletrablanca.svg" alt="logo" style="width:90px;">
 </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto ">
      <li class="nav-item active p-3">
        <a class="nav-link text-uppercase" href="{{ url('index') }}">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active p-3">
        <a class="nav-link text-uppercase" href="{{ url('noticias') }}">Noticias <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active p-3">
        <a class="nav-link text-uppercase" href="{{ url('laempresa') }}">La Empresa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active p-3">
        <a class="nav-link text-uppercase" href="{{ url('nuestrocliente') }}">Nuestro Cliente <span class="sr-only">(current)</span></a>
      </li>

    <li class="nav-item dropdown">
    @guest
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li> --}}
        @if (Route::has('register'))
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li> --}}
        @endif
    @else
      <div class="dropdown">
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ADMINISTRADOR  </button>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
     <a class="dropdown-item" href="{{ url('tablero') }}">Tablero <span class="sr-only">(current)</span></a>
     {{-- <a class="dropdown-item" href="#">Another action</a> --}}
     <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Salir') }}
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
   </div>
 </div>
    </li>

    @endguest
  </ul>
</div>

</nav>
