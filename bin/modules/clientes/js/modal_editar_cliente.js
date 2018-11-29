$(document).ready(function() {


$("#btn_save").click(function(){
  
	$.ajax({
    url: "clases/control_crud.php",
    type: "POST",
    dataType: "json",
    data: {opcion:"3",
    id:$('#modal_id').val(),
    nombre:$('#modal_nombre').val(),
    pais:$('#modal_pais').val(),
    ciudad:$('#modal_ciudad').val(),
    direccion:$('#modal_direccion').val(),
    telefono:$('#modal_telefono').val(),
    movil:$('#modal_movil').val(),
    email:$('#modal_email').val(),
    estado:$('#modal_estado').val()
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