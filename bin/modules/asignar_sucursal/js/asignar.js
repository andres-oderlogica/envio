
$(function ()
{
//loadingstart();
$('#form_asignar').submit(function (e)
    {
        e.preventDefault();        
        var data = new FormData($("#form_asignar")[0]);
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
              
              /*  $('#nombre_sucursal').val("")  
                $('#pais').val("")                     
                $('#ciudad').val("")
                $('#direccion').val("")
                $('#telefono').val("")
                $('#correo').val("")
                $('#movil').val("")
                $('#email').val("")*/
                verCargas()
            }
        });
    });

 });


$(document).ready(function($){

 
});


