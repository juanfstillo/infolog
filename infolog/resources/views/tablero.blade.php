@extends('layout')
@section('title')
  TABLERO DE NOTICIAS | INFOLOG ARGENTINA
@endsection

@section('main')
  @foreach ($newstablero as $noticia)

<br>
  <div class="card-abm" style="width:90%">

    <div class="container">
      <div class="row">

        <div class="add-cat col-12">
          <img src="" style="width: 120px" class="img-add">
          <h3 class="table-add">¿Hay nuevas noticias?</h3>
          <a href="">
            <button  style='width:160px'>
          Agregar noticia
            </button>
          </a>
        </div>

        <div class="col-12" id="table-abm">
          <table class="table">
            <thead class="row-grey col-12">
              <tr>
                <td class="table-title">Nombre</td>
                {{-- <td>Slug</td> --}}
                <td class="table-title">Imagen</td>
                {{-- <td>Descripción</td> --}}
                <td class="table-title">Precio</td>
                <td class="table-title">Categoría</td>
                <td class="table-title"></td>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td class="table-item"></td>
                {{-- <td>{{$eachproduct->slug}}</td> --}}
                <td class="table-item"><img src="" alt="" style="width:150px"></td>
                {{-- <td>{{$eachproduct->description}}</td> --}}
                <td class="table-item"></td>
                <td class="table-item"></td>

                <td class="table-item">
                  <a href=""  class=" px-1 text-primary"><button class="grey" style='width:110px'>Editar</button></a>
                  <a href=""  class=" px-1 text-danger"><button  class="red" style='width:110px'>Eliminar</button></a>
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
