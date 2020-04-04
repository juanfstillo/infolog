@extends('layout')
@section('title')
  EDITAR NOTICIA | INFOLOG ARGENTINA
@endsection

@section('main')
<div class="container">
<div class="row float-center">
<div class="col-11 float-center">


<h1 class="col-12 text-center mx-auto p-2">Editar noticia : {{$new->title}}</h1>

<form  class="form-body text-center" action=<?=url("edit_new/{$new->id}")?> method="POST" enctype="multipart/form-data">

@csrf

{{-- <div class="row justify-content-center mx-auto p-4"> --}}
<div class="form-group">
  <label for="title" class="form-label" style="color:#000">Titulo</label>
  <input required name="title" type="text" class="form-control"  value={{$new->title}}>
</div>


<div class="row justify-content-left col-6">
      <label for="abstract" class="form-label">Resumen</label>
</div>

<div class="row cat-id justify-content-left col-6">
      <label for="img" class="">Imagen actual</label>
    </div>
    <div class="row justify-content-left col-6">
      <img src="<?=url("{$new->imageUrl}")?>" class="imgProd" alt="productImage">
    </div>

<div class="form-group">
  <label for="file" class="form-label-prod" style="color:#000">Imagen</label>
  <input id="file" type="file" class="form-control col-md-5 @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file">
  @error('file')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</div>

    <div>
      <textarea name="abstract" type="text" value= "{{$new->abstract}}" placeholder="{{$new->abstract}}"class="form-control justify-content-left" style="width: 100%" rows="6">{{$new->abstract}}</textarea>
    </div>



{{-- <div class="form-group">
  <label for="file" class="form-label-prod" style="color:#000">Imagen</label>
  <input id="file" type="file" class="form-control col-md-5 @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file">
  @error('file')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
</div> --}}

<div class="row justify-content-left col-6">
      <label for="text" class="form-label">Cuerpo de la noticia</label>
</div>
    <div>
      <textarea name="text" type="text" value= "{{$new->text}}" class="form-control justify-content-left" style="width: 100%" rows="6">{{$new->text}}</textarea>
    </div>


  <div class="col-md-12 justify-content-center mx-auto p-3">
    <a href="<?=url("/tablero")?>">
    <button type="button" class="btn btn-secondary btn-lg justify-content-center">Cancelar</button></a>
    <button type="submit" class="btn btn-primary btn-lg justify-content-center">Editar Noticia</button>
  </div>

</form>
</div>
</div>
</div>



@endsection
