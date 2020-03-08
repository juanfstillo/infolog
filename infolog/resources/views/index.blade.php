@extends('layout')
@section('title')
  INFOLOG ARGENTINA
@endsection

@section('main')

@include('carrousel')

<section id="use-cases" class="py-4 my-4">
          <div class="container">
            <div class="row">

              <div class="col-12 col-md-6 col-lg-4 text-center my-4">
                <div class="card border-primary flex-md-row mb-4 shadow-sm h-md-250">
                   <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">Noticia</strong>
                      <h6 class="mb-0">
                         <a class="text-dark" href="#">Titulo</a>
                      </h6>
                      <div class="mb-1 text-muted small">Nov 12</div>
                      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continuar leyendo</a>
                   </div>
                   {{-- <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 300px; height: 300px;"> --}}
                </div>
              </div>
            </div>
          </div>
  </section>

@endsection
