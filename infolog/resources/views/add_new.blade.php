@extends('layout')
@section('title')
  NUEVA NOTICIA | INFOLOG ARGENTINA
@endsection

@section('main')
<div class="container">
<div class="row float-center">
<div class="col-11 float-center">


<h1 class="col-12 text-center mx-auto p-2">Nueva Noticia</h1>

<form  class="form-body text-center" action="<?=url("/add_new")?>" method="POST" enctype="multipart/form-data" id='addnew'>

@csrf

{{-- <div class="row justify-content-center mx-auto p-4"> --}}
<div class="form-group">


  <label for="title" class="form-label-prod" style="color:#000">Título</label>

  <input required name="title" type="text" class="form-control" placeholder="Título">
</div>


<div class="form-group">
  <label for="abstract" class="form-label-prod" style="color:#000">Resumen</label>
  <input required name="abstract" type="text" class="form-control"  placeholder="Resumen de la noticia">
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



<div class="form-group">
  <label for="description">Cuerpo de la noticia</label>
  <textarea required name="description" id="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
</div>

  <div class="col-md-12 justify-content-center mx-auto p-3">
    <a href="<?=url("/tablero")?>">
    <button type="button" class="btn btn-secondary btn-lg justify-content-center">Cancelar</button></a>
    <button type="submit" class="btn btn-primary btn-lg justify-content-center">Crear Noticia</button>
  </div>

</form>
</div>
</div>
</div>



@endsection
@section('scripts')
  <script type="text/javascript" src="{{ URL::asset('js/form.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection
