
$(function ()
{
//loadingstart();
$('#form_sucursal').submit(function (e)
    {
        e.preventDefault();        
        var data = new FormData($("#form_sucursal")[0]);
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
              
              /*  $('#codigo').val("")  
                $('#identificacion').val("")                     
                $('#primer_nombre').val("")
                $('#primer_apellido').val("")
                $('#segundo_nombre').val("")
                $('#segundo_apellido').val("")
                $('#direccion').val("")
                $('#telefono').val("")
                $('#email').val("")
                $('#discapacidad').val("")*/
            }
        });
    });

 });

$(document).ready(function($){


//$('#tabla').hide();
//$('#act_add').prop('disabled', true);

    $.ajax({
        url: 'combo/control_ciudad.php',
        type: "POST",
        dataType:'json',
        data:{opcion:1},
        success: function (datos)
        {
         
        for (var i = 0; i < datos.length; i++)
        {

            $("#id_pais").append('<option value = "'+datos[i].Codigo+'">'+datos[i].Pais+'</option>');
         
         }   
            

    },

         complete: function () {
              
            }

    });

    $('select#id_pais').on('change',function(){
     var valor =  $(this).val().toString(); 
     console.log(valor)

$.ajax({
        url: 'combo/control_ciudad.php',
        type: "POST",
        dataType:'json',
        data:{opcion:2,id:valor},
        success: function (res)
        {
            console.log(res)
             for (var i = 0; i < res.length; i++)
                         {
                    $("#id_ciudad").append('<option value = "'+res[i].idCiudades+'">'+res[i].Ciudad+'</option>');
                       //console.log($("#cant").val());
                         }    
//
        },
         complete: function () {
              
            }
        });
$("#ciudad").html("");
 });



 /*$('select#pais').on('change',function(){
     var valor = $(this).val(); 
     console.log(valor)
     $.getJSON('combo/control_ciudad.php', {opcion:2,id:valor},
                function(res){
                      for (var i = 0; i < res.length; i++)
                         {
                    $("#ciudad").append('<option value = "'+res[i].idCiudades+'">'
                        +res[i].Ciudad+'</option>');
                       //console.log($("#cant").val());
                         }                              
             });
       $("#ciudad").html("");
    });

 $('select#ciudad').on('change click keyup input paste',function(){
     var id = $(this).val();                      
                    
                  //  $("#ciudad").val(id);                  
                           
             });*/
      





 


 
});


