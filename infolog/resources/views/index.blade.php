@extends('layout')
@section('title')
  INFOLOG ARGENTINA
@endsection

@section('main')

	@include('carrousel')
<div class="containter">
  <div class="row">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">Noticias</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Digitalización de Documentación</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12</div>
               <p class="card-text mb-auto">Nos ocupamos de digitalizar 4.000 nuevos documentos.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continua leyendo</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="/images/neuralog.png" style="width: 200px; height: 250px;">
         </div>
    </div>

  </div>
</div>

@endsection
