$(document).ready(function() {


$("#btn_save").click(function(){
  
	$.ajax({
    url: "clases/control_crud.php",
    type: "POST",
    dataType: "json",
    data: {id:$('#modal_id').val(),
    motivo:$('#motivo').val(),    
    estado:$('#id_estado').val()
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