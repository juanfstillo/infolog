@extends('layout')
@section('title')
  {{$new->title}} | INFOLOG ARGENTINA
@endsection
@section('main')
  <div class="card m-5" >
    <div class="card-body">
      <h1 class="display-4 text-center p-2">{{$new->title}}</h1>
      <div class="card mb-10 text-white bg-dark">
         <img class="img-fluid" src="{{ $new->imageUrl }}" alt="Card image cap">
      </div>
      <p class="text-justify p-2">{{$new->text}}
    </p>

   </div>
  </div>
@endsection
