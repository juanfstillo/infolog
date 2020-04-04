@extends('layout')
@section('title')
  NOTICIAS | INFOLOG ARGENTINA
@endsection

@section('main')

<div class="container py-4">
  <div class="row ">
      @foreach ($new as $noticia)
        @include('noticia-card', ['new' => $noticia])
    @endforeach
    </div>
  </div>
@endsection
