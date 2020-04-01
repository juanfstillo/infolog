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
  <label for="title" class="form-label-prod" style="color:#000">Titulo</label>
  <input required name="title" type="text" class="form-control" placeholder="" value={{$new->title}}>
</div>


<div class="row justify-content-left col-6">
      <label for="abstract" class="form-label-prod">Resumen</label>
</div>
    <div>
      <textarea name="abstract" type="text" value= "{{$new->abstract}}" class="form-control justify-content-left" style="width: 100%" placeholder="{{$new->abstract}}" rows="6"></textarea>
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
      <label for="text" class="form-label-prod">Cuerpo de la noticia</label>
</div>
    <div>
      <textarea name="text" type="text" value= "{{$new->text}}" class="form-control justify-content-left" style="width: 100%" placeholder="{{$new->text}}" rows="6"></textarea>
    </div>

{{-- <div class="form-group">
  <label for="description">Cuerpo de la noticia</label>
  <textarea required name="description" value= "{{$new->description}}" id="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
</div> --}}

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
