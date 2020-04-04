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

  @foreach ($newstablero as $noticia)

  <div class="card-abm" style=>

    <div class="container">
      <div class="row">



        <div class="col-12">
          <table class="table">
            <thead class="row-grey col-12">
              <tr>
                <td class="table-title">Nombre</td>
                {{-- <td>Slug</td> --}}
                <td class="table-title">Fecha</td>

                {{-- <td>Descripción</td> --}}
                <td class="table-title">Imagen</td>

                <td class="table-title"></td>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td class="table-item">{{$noticia->title}}</td>
                <td class="table-item">{{$noticia->created_at}}</td>
                <td class="table-item"><img src="{{$noticia->imageUrl}}" alt="" style="width:150px"></td>
                {{-- <td>{{$eachproduct->description}}</td> --}}
                <td class="table-item"></td>
                <td class="table-item"></td>

                <td class="table-item">
                  <a href="<?= url("/edit_new/$noticia->id")?>"  class=" px-1 text-primary"><button class="btn btn-outline-secondary">Editar</button></a>
                  <a href="<?= url("/delete_new/$noticia->id")?>"  class=" px-1 text-danger"><button  class="btn btn-outline-danger">Eliminar</button></a>
                </td>
              </tr>
            </tbody>

            </table>

            </div>
          </div>
        </div>
      </div>
    @endforeach

@endsection
