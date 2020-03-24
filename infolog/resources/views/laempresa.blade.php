@extends('layout')
@section('title')
  LA EMPRESA | INFOLOG ARGENTINA
@endsection

@section('main')
<div class="bg-light">
  <div class="container p-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4 p-5">Nosotros</h1>
        <p class="lead text-muted mb-0">Nuestro desafío consiste en adaptarnos a los constantes cambios de la industria y
empresas de servicios, desarrollando nuevas tareas y ofreciendo una respuesta inmediata
de máxima calidad en el producto, comprometiéndonos en los resultados de los proyectos.</p>

      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="/images/infologclasicopantone.svg" alt="infologLaEmpresa" style="width:300px;"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Almacenamiento y distribución de documentos</h2>
        <p class="font-italic text-muted mb-4">Contamos con personal capacitado para resolver rapidamente lo demandado por nuestro cliente.</p><a href="#" class="btn btn-primary btn-lg active rounded-pill">Conocé más</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/images/schedule.jpg" alt="scheduleLaEmpresa" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="/images/neuralog1.jpg" alt="neuralogLaEmpresa" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Digitalización</h2>
        <p class="font-italic text-muted mb-4">Nos ocupamos de optimizar registros petrolíferos.</p><a href="#" class="btn btn-primary btn-lg active rounded-pill">Conocé más</a>
      </div>
    </div>
  </div>
</div>

{{-- Grid column0 --}}
    <div class="rowcolor" style="background-color: white">
     <div class="container" >
       <div class="row" style="place-content: center;" >
         <ul class="list-unstyled mb-0" style="text-align-last: center;padding-bottom: 10px;padding-top: 10px;">
             <li><img src="images/home-solid.svg" style="width:100px" align="middle" alt="Home"></li>
             <li align="center"><a href="#map">Coronel García 629 <br>AVELLANEDA-ARGENTINA</li>
       </div>
     </div>
   </div>
 {{-- </div> --}}
<div class="map">
  <div style="width: 100%"><iframe width="100%" height="600" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.7937848210195!2d-58.386487084502114!3d-34.65991046798096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccca7c89b3c2d%3A0x39e4bb0660acb025!2sTte.%20Gral.%20Garc%C3%ADa%20629%2C%20Pi%C3%B1eyro%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1582774842550!5m2!1ses-419!2sar" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Mapa de Ruta</a></iframe></div>
</div>

@endsection