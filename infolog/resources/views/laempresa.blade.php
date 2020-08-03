@extends('layout')
@section('title')
  LA EMPRESA | INFOLOG ARGENTINA
@endsection

@section('main')
<div class="bg-secondary">
  <div class="container p-5">
    <div class="row h-100 align-items-center py-5 pt-2">
      <div class="col-lg-6">
        <h1 class="display-3 p-5 text-light">Nosotros</h1>
        <p class="text-light mb-0">Nuestro desafío consiste en adaptarnos a los constantes cambios de la industria y
empresas de servicios, desarrollando nuevas tareas y ofreciendo una respuesta inmediata
de máxima calidad en el producto.</p>

      </div>
      <div class="col-lg-6 d-none d-lg-block p-3"><img src="/images/infologclasicopantoneletrablanca.svg" alt="infologLaEmpresa" style="width:300px;"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Almacenamiento y distribución de documentos</h2>
        <p class="font-italic text-muted mb-4">Contamos con personal capacitado para resolver rapidamente lo demandado por nuestro cliente.</p><a href="{{url('almacenamiento')}}" class="btn btn-primary btn-lg active rounded-pill">Conocé más</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/images/dataBase.jpg" alt="dataBase" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="/images/digitalizacion1.png" alt="neuralog" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Digitalización</h2>
        <p class="font-italic text-muted mb-4">Nos ocupamos de optimizar registros petrolíferos.</p><a href="{{url('digitalizaciones')}}" class="btn btn-primary btn-lg active rounded-pill">Conocé más</a>
      </div>
    </div>
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Guarda de coronas y cutting</h2>
        <p class="font-italic text-muted mb-4">Máxima organicidad para una clasificación correcta.</p><a href="{{url('coronacutting')}}" class="btn btn-primary btn-lg active rounded-pill">Conocé más</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/images/coronaCutting.png" alt="coronaCutting" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="/images/soportesMagneticos.png" alt="soportesMagneticos" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Guarda de soportes magnéticos</h2>
        <p class="font-italic text-muted mb-4">Perfecta preservación de los recursos.</p><a href="{{url('soportesmagneticos')}}" class="btn btn-primary btn-lg active rounded-pill">Conocé más</a>
      </div>
    </div>
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Gestión de calidad</h2>
        <p class="font-italic text-muted mb-4">Contamos con las más altas certificaciones .</p><a href="{{url('gestioncalidad')}}" class="btn btn-primary btn-lg active rounded-pill">Conocé más</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="/images/boreauVeritas.png" alt="boreauVeritas" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
  </div>
</div>



{{-- Grid column0 --}}
    <div class="rowcolor" style="background-color: white">
     <div class="container" >
       <div class="row" style="place-content: center;" >
         <ul class="list-unstyled mb-0" style="text-align-last: center;padding-bottom: 10px;padding-top: 10px;">
             <li><img src="images/home-solid.svg" style="width:100px" align="middle" alt="Home"></li>
             <li align="center"><a href="https://goo.gl/maps/RK9Gf2JY4i1VJ76i6">Perdriel 1240 <br>CABA</li></a>
             <li><p id="service" class="text-secondary mx-0">Servicio</p></li>

               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.354 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L8 12.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M8 6a.5.5 0 0 1 .5.5V13a.5.5 0 0 1-1 0V6.5A.5.5 0 0 1 8 6zM2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
             <li align="center"><a href="#map">Coronel García 629 <br>AVELLANEDA-ARGENTINA</li>
               <li><a href="tel:54 11 3535-3993">54 11 3535-3993</a></li>
       </div>
     </div>
   </div>
 {{-- </div> --}}
<div class="map">
  <div  style="width: 100%"><iframe width="100%" height="600" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.7937848210195!2d-58.386487084502114!3d-34.65991046798096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccca7c89b3c2d%3A0x39e4bb0660acb025!2sTte.%20Gral.%20Garc%C3%ADa%20629%2C%20Pi%C3%B1eyro%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1582774842550!5m2!1ses-419!2sar" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Mapa de Ruta</a></iframe></div>
</div>

@endsection
