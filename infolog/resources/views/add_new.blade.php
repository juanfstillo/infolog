@extends('layout')
@section('title')
  NUEVA NOTICIA | INFOLOG ARGENTINA
@endsection

@section('main')
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Agregar usuario</h1>
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputNombre" class="col-sm-2 control-label text-uppercase">Título</label>
                <div class="col-sm-10">
                  <input type="nombre" class="form-control" id="inputNombre" placeholder="Título">
                </div>
              </div>
              <div class="form-group">
                <label for="inputContraseña" class="col-sm-2 control-label">Cuerpo de la Noticia</label>
                <div class="col-sm-10">
                  <input type="contraseña" class="form-control" id="inputContraseña" placeholder="Contraseña del usuario">
                </div>
              </div>
              <div class="form-group">
                <label for="inputFoto" class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-10">
                  <input type="apellido" class="form-control" id="inputFoto" placeholder="Foto del usuario">
                </div>
              </div>
              </div>
              <div class="d-flex justify-content-center p-4">
                <a href="<?= url("/add_new")?>">
            <button type="button" class="btn btn-primary btn-lg justify-content-center">Publicar</button>
              </div>
            </form>
          </div>
        </div>
      </div>


@endsection
