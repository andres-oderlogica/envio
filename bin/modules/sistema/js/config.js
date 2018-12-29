
$(function ()
{
//loadingstart();
$('#form_config').submit(function (e)
    {
        e.preventDefault();        
        var data = new FormData($("#form_config")[0]);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                if (!data.guardado)
                {
                    bootbox.alert('Se presento un error al registrar el dato');
                }
                    bootbox.alert("Se Guardo con exito", function(){ 
                                
                                })
                
            },
            complete: function () {
              
                
                editar()
            
            }
        });
    });

 });

function editar()
{   
    
    $.ajax({    url: "clases/control_crud.php",
              type: "POST",
              dataType: "json",
              data: {opcion:"2"},
          })
      .done(function(data) {
     // console.log(data) 
    
    $("#tasa_dia").val(data.tasa_dia);
    $("#nombre_empresa").val(data.nombre_empresa);
    $("#nit").val(data.nit);    
    $("#telefono").val(data.telefono);
    $("#correo").val(data.correo);    
           
    });    

     
}

editar()
$(document).ready(function($){

 
});


