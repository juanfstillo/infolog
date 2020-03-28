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
      <div class="col-md-7 p-3">
        <div class="card-block p-5">
          <h4 class="card-title">{{$new->title}}</h4>
          <p class="card-text">
              {{$new->abstract}}</p>
          <br>
          <a href="#" class="mt-auto btn btn-primary ">Conocé más</a>
        </div>
      </div>
      <!-- Image place -->
      <div class="col-md-5 mx-auto pb-4 pt-4">
        <img src="https://picsum.photos/450/300?image=855" alt="">
      </div>
      <!-- End of image place -->
    @endforeach

    </div>
  </div>
@endsection
