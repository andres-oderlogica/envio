$(document).ready(function($){
$('.select2').select2()
$('#sinCalcular').hide();
//$('#tabla').hide();
//$('#act_add').prop('disabled', true);

	$.getJSON('combo/control_combo.php', {opcion:1},
				function(datos){
	    if(datos==0)
	    {		
			
		}
	else
	{		
		for (var i = 0; i < datos.length; i++)
    	{
    		console.log()

    		$("#id_pais").append('<option value = "'+datos[i].id_pais+'">'+datos[i].pais+'</option>');
	     
		 }		 

	}

	});
	$("#id_pais_beneficiario").val(115);
	$('select#id_pais').on('change',function(){
     var valor = $(this).val();    
       $("#id_pais_beneficiario").val(valor);
       if($("#id_pais_beneficiario").val() == 115)
       {
         $('#sinCalcular').hide();
         $('#calculado').show();
       }
       else
       {
        $('#sinCalcular').show();
        $('#calculado').hide();
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
