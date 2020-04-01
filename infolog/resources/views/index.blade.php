@extends('layout')
@section('title')
  INFOLOG ARGENTINA
@endsection

@section('main')

@include('carrousel')
<!-- Card Start -->

<div class="card">
  <div class="row ">
      @foreach ($newforhome as $new)
        @include('noticia-card', ['new' => $new])
    @endforeach

    </div>
  </div>
@endsection
