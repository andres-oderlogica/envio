$(document).ready(function() {


$("#btn_save").click(function(){
  
	$.ajax({
    url: "clases/control_crud.php",
    type: "POST",
    dataType: "json",
    data: {opcion:"3",
    id:$('#modal_id').val(),
    //id_tipo:$('#id_tipo').val(),
    identificacion:$('#identificacion').val(),
    nombres:$('#nombres').val(),
    apellidos:$('#apellidos').val(),
    direccion:$('#direccion').val(),
    telefono:$('#telefono').val(),
    correo:$('#correo').val(),
    id_banco:$('#id_banco').val(),
    numero_cuenta:$('#numero_cuenta').val()
    },
    success: function (data) {               
      
                
            },
            complete: function () {
            //  parent.loadingstart();
              $('#myModal').modal('toggle');                
              parent.verCargas();              
            }
          })
     /* .done(function() {  
        $('#myModal').modal('toggle');
             })
      .always(function(){
      //  $('#myModal').modal('toggle');
        loadingstart();
      parent.verCargas(); */

      })
      
  //  });



})