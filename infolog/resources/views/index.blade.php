@extends('layout')
@section('title')
  INFOLOG ARGENTINA
@endsection

@section('main')

@include('carrousel')
<!-- Card Start -->

<div class="container py-4">
  <div class="row ">
      @foreach ($newforhome as $new)
        @include('new-card', ['new' => $new])
    @endforeach

    </div>
  </div>
@endsection
