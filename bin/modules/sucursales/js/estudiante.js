
$(function ()
{
//loadingstart();
$('#form_estudiante').submit(function (e)
    {
        e.preventDefault();        
        var data = new FormData($("#form_estudiante")[0]);
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
              
                $('#codigo').val("")  
                $('#identificacion').val("")                     
                $('#primer_nombre').val("")
                $('#primer_apellido').val("")
                $('#segundo_nombre').val("")
                $('#segundo_apellido').val("")
                $('#direccion').val("")
                $('#telefono').val("")
                $('#email').val("")
                $('#discapacidad').val("")
            }
        });
    });

 });



