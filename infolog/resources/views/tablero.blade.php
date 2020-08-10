@extends('layout')
@section('title')
  TABLERO DE NOTICIAS | INFOLOG ARGENTINA
@endsection

@section('main')

  <h4 align="center" class='display-4 mx-auto'>¿Nueva Noticia?</h4>
    <div class="d-flex justify-content-center p-4">
        <a href="<?= url("/add_new")?>">
        <button type="button" class="btn btn-primary btn-lg justify-content-center">Crear Noticia</button></a>
    </div>

<div class="card-abm" style="width:">



  <div class="container" style="margin-top:25px">

      <div class="row">



        <div class="col-12">
          <table class="table table-responsive">
            <thead class="row-grey col-12">
              <tr>
                <td class="table-title">Nombre</td>
                <td class="table-title">Fecha</td>
                <td class="table-title">Imagen</td>
                <td class="table-title"></td>
                <td class="table-title"></td>
              </tr>
            </thead>

            <tbody>
              @foreach ($newstablero as $noticia)
              <tr>
                <td class="table-item">{{$noticia->title}}</td>
                <td class="table-item"><img src="{{$noticia->imageUrl}}" alt="" style="width:200px"></td>
                <td class="table-item">{{$noticia->created_at->format('j F, Y')}}</td>
                <td class="table-item"><a href="<?= url("/edit_new/$noticia->id")?>"  class=" px-2 text-primary"><button class="btn btn-outline-secondary">Editar</button></a></td>
                <td class="table-item"><a href="<?= url("/delete_new/$noticia->id")?>"  class=" px-2 text-danger"><button  class="btn btn-outline-danger">Eliminar</button></a></td>
              </tr>
            </tbody>
          @endforeach
            </table>

        </div>
      </div>
      </div>
    </div>


@endsection
