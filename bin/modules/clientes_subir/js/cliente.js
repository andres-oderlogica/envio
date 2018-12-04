
$(function ()
{
//loadingstart();
$('#form_cliente').submit(function (e)
    {
        e.preventDefault();        
        var data = new FormData($("#form_cliente")[0]);
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
              
                $('#identificacion').val("")  
                $('#nombres').val("")                     
                $('#apellidos').val("")
                $('#direccion').val("")
                $('#telefono').val("")
                $('#correo').val("")
              //  $('#id_banco').val("")
                $('#numero_cuenta').val("")
            
            }
        });
    });

 });


$(document).ready(function($){

 
});


