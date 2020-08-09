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

      @if (Auth::guest())

      @elseif (Auth::user()->is_admin == 1)
        <li class="nav-item active p-3">
          <a class="nav-link text-uppercase" href="{{ url('tablero') }}">Tablero <span class="sr-only">(current)</span></a>
        </li>
      @endif
      </ul>
  </div>
</nav>
