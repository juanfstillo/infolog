@extends('layout')
@section('title')
  NOTICIAS | INFOLOG ARGENTINA
@endsection

@section('main')
  <br>
  @foreach ($new as $noticia)
    <div class="card">
      <div class="row p-5">
        <div class="col-md-7 p-3">
          <div class="card-block p-5">
            <h4 class="card-title">{{$noticia->title}} </h4>
            <p class="card-text">
              {{$noticia->abstract}}
            </p>
            <br>
            <a href="{{ route('tumama', ['newSlug' => $new->slug]) }}" class="mt-auto btn btn-primary  ">Conocé más</a>
          </div>
        </div>
        <!-- Image place -->
        <div class="col-md-5 mx-auto">
          <img src="https://picsum.photos/450/300?image=855" alt="">
        </div>
        <!-- End of image place -->
      </div>
    </div>
  @endforeach

@endsection
