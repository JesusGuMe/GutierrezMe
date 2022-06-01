$(document).ready(function() {
  
  $('#btnConsultaBD').click(function() {
      $('#ModalConsultar').modal();


      
  });
    $('#consultar').click(function() {
        let varid= $('#Consultar2').val();


        $.post('php/conectar.php',{par1:varid},function(data){
          refrescar(data);
          },'json');
          $('#ModalConsultar').modal('hide');
    });

    
    
    function refrescar(objeto) {
        console.log(objeto);
        $('#idClave').val(objeto.idClave);
        $('#Titulo').val(objeto.Titulo);
        $('#carrera').val(objeto.carrera);
        $('#nomEscuela').val(objeto.nomEscuela);
        $('#ciudad').val(objeto.ciudad);
        $('#estado').val(objeto.estado);
        $('#pais').val(objeto.pais);
        $('#semestre').val(objeto.semestre);
        $('#grupos').val(objeto.grupos);
        $('#alumnos').val(objeto.alumnos);
  }

  $('#btnEliminarBD').click(function() {
    let varid = $('#idClave').val();
    Swal.fire({
      title: '¿Estas seguro?',
      text: "Esta acción no se podra revertir!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Eliminado!',
          'Se ha eliminado el registro correctamente.',
          'success'
        )
      }
    })

    $.post('php/Borrar.php',{par1:varid});
  });

  $('#btnRegistrarBD').click(function() {
    let Clave = $('#idClave').val();
    let Titul = $('#Titulo').val();
    let Carrer = $('#carrera').val();
    let Nomescuela = $('#nomEscuela').val();
    let City = $('#ciudad').val();
    let Estado = $('#estado').val();
    let Pais = $('#pais').val();
    let Semestre = $('#semestre').val();
    let Grupo = $('#grupos').val();
    let Alumno = $('#alumnos').val();

    $.post('php/Ingresar.php',{Ic:Clave, Ti:Titul, Car:Carrer, Nom:Nomescuela, Cid:City, Est:Estado, Ps: Pais, Sem: Semestre, Grp:Grupo, Alumn:Alumno});
  });

  $('#btnEditarBD').click(function() {
    let Clave = $('#idClave').val();
    let Titul = $('#Titulo').val();
    let Carrer = $('#carrera').val();
    let Nomescuela = $('#nomEscuela').val();
    let City = $('#ciudad').val();
    let Estado = $('#estado').val();
    let Pais = $('#pais').val();
    let Semestre = $('#semestre').val();
    let Grupo = $('#grupos').val();
    let Alumno = $('#alumnos').val();

    Swal.fire({
      title: '¿Estas seguro de Modificar el Registro?',
      text: "Esta acción no se podra revertir!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, quiero modificarlo!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Actualizado!',
          'Se ha Actualizado el registro correctamente.',
          'success'
        )
        $.post('php/Actualizar.php',{Ic:Clave, Ti:Titul, Car:Carrer, Nom:Nomescuela, Cid:City, Est:Estado, Ps: Pais, Sem: Semestre, Grp:Grupo, Alumn:Alumno});
      }
    })

    
  });
});