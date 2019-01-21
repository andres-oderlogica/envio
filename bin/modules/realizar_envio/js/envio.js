
$(function ()
{
//loadingstart();
$('#form_envio').submit(function (e)
    {
        e.preventDefault();        
        var data = new FormData($("#form_envio")[0]);
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
                         window.open("imprimir.php");
                                
                                })
                
            },
            complete: function () {              
                $('#identificacion').val("") 
                $('#nombre').val("") 
                $('#id_cliente_rem').val("")
                $('#telefono').val("")
                $('#correo').val("")
                $('#total_pesos').val("")                     
                $('#total_bfs').val("")
                $('#direccion').val("")
                $('#identificacion_ben').val("") 
                $('#nombre_ben').val("") 
                $('#id_cliente_ben').val("")
                $('#telefono_ben').val("")
                $('#correo_ben').val("")                
                $('#banco_ben').val("")
                $('#cuenta_ben').val("")
                $('#descripcion').val("")
            
            }
        });
    });

 });

function imprimir(){



}


$(document).ready(function($){

$('#total_pesos').on('change click keyup input paste', function () {    
                
  if($("#id_pais_beneficiario").val() == 115)
       {            
           $.ajax({
                url: 'clases/control_crud.php',
                type: "POST",
                dataType:'json',
                data:{opcion:"6"},
                success: function (data)
                {

                	var total = $('#total_pesos').val()/data;
                   //console.log($('#total_pesos').val()) 
                  $('#total_bfs').val(total.toFixed(2));
                },
                 complete: function () {
                       
                    }
                });
        }      

});

           



});


