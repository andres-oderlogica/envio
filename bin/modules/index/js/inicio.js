$(document).ready(function($){

$('#total_pesos').on('change click keyup input paste', function () {    
            
           $.ajax({
                url: '../realizar_envio/clases/control_crud.php',
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
            

});

           



});


