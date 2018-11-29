$(document).ready(function($){


//$('#tabla').hide();
//$('#act_add').prop('disabled', true);

	$.getJSON('combo/control_combo.php', {opcion:1},
				function(datos){
					//console.log(datos)
	    if(datos==0)
	    {		
			
		}
	else
	{		
		for (var i = 0; i < datos.length; i++)
    	{

    		$("#id_sucursal").append('<option value = "'+datos[i].id_sucursal+'">'+datos[i].nombre_sucursal+'</option>');
	     
		 }		 

	}

	});

	$.getJSON('combo/control_combo.php', {opcion:2},
				function(datos){
					//console.log(datos)
	    if(datos==0)
	    {		
			
		}
	else
	{		
		for (var i = 0; i < datos.length; i++)
    	{

    		$("#id_user").append('<option value = "'+datos[i].user_id+'">'+datos[i].nombre+'</option>');
	     
		 }		 

	}

	});


 /*$('select#combo').on('change',function(){
     var valor = $(this).val(); 
     do_controller('factura', 'getCiudad', {cod:valor}, 
                    function (res){  
                      for (var i = 0; i < res.data.Data.length; i++)
                         {
    		        $("#comboHijo").append('<option value = "'+res.data.Data[i].id_ciudad+'">'
    		        	+res.data.Data[i].descripcion_ciudad+'</option>');
	                   //console.log($("#cant").val());
						 }                              
             });
       $("#comboHijo").html("");
    });

 $('select#comboHijo').on('change click keyup input paste',function(){
     var id = $(this).val();                      
    		        
    		        $("#f_id_ciudad").val(id);	                
				           
             });*/
      





 


 
});
