var form = document.getElementById('addnew');
// console.log(form);

form.onsubmit = function (ev) {
  Swal.fire(
    'Noticia creada exitosamente',
    'Vamos a crear mas!',
    'success'
  )
  console.log('Se ha creado una noticia');
}
