<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="{{ url('inicio') }}">
    <img src="/images/infologclasicopantoneletrablanca.svg" alt="logo" style="width:70px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('inicio') }}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('noticias') }}">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('laempresa') }}">La Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('nuestrocliente') }}">Nuestro Cliente</a>
      </li>
    </ul>
  </div>
</nav>
