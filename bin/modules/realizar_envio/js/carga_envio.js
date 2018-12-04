var interval = null;
var timer = 0;
function loadingstop()
{
    $("#pre-load-web").fadeOut(1000, function ()
    {
        $(this).remove();
        $("body").css({"overflow-y": "auto"});
    });
}
function loadingstart()
{
    $("body").css({"overflow-y": "hidden"});
    var alto = $(window).height();
    $("body").append("<div id='pre-load-web'><div id='imagen-load'><center><img src='../../../img/loading.gif'  /><br/><i>Cargando Estudiantes </i></center></div>");
    $("#pre-load-web").css({height: alto + "px"});
    $("#imagen-load").css({"margin-top": (alto / 2) - 30 + "px"});
}
function loadingCab()
{
    $("body").append("<div id='pre-load-web'></div>");
    $("body").css({"overflow-y": "hidden"});
    var alto = $(window).height();
    $("#pre-load-web").css({height: alto + "px"});
}

function iniciar()
{
    $.ajax({url: 'timer.php', dataType: 'json', async: false, success: function (data) {
            timer = data.timer_progress;
        }});
    $.ajax({url: 'iniciar.php', async: false});
}

function updateProgress()
{
    $.getJSON('progress.json?nocache=' + (new Date()).getTime(), function (data)
    {
        var porcentaje = (parseFloat(data.percentComplete));
        $('#pre-load-web').html("<div id=\"content\"><img src='../../../img/loading.gif'/><div class=\"progress\"><div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"" + porcentaje + "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: " + porcentaje + "%;\">" + porcentaje + "%  " + data.procesadas + " de " + data.cantidad + "</div></div></div>");
        if (porcentaje == '100')
        {
            $("#pre-load-web").fadeOut(1000, function ()
            {
                $(this).remove();
                $("body").css({"overflow-y": "auto"});
                clearInterval(interval);
            });
            iniciar();
        }
        if (data.error)
        {
            $("#pre-load-web").fadeOut(1000, function ()
            {
                $('#pre-load-web').html('<div id="content"><div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> ' + data.message + '.</div></div>');
                clearInterval(interval);
            });
            iniciar();
        }
    }).error(function (data) {
        clearInterval(interval);
        // $('#pre-load-web').html('<div id="content"><div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Ha ocurrido algo mientras el proceso se llevaba a cabo.</div></div>');
        iniciar();
    });
}

function verCargas()
{  
    $.ajax({
        url: 'clases/control_listar.php',
        success: function (data)
        {
            $('#ver_cargasModal').html(data);
           
            $('#myTable').DataTable({
                sPaginationType: "bootstrap", 
                order: [[ 0, "desc" ]],
                //aLengthMenu: [100],
                language: {sProcessing: "Procesando...",
                    sLengthMenu: "Mostrar _MENU_ registros",
                    sZeroRecords: "No se encontraron resultados",
                    sEmptyTable: "Ningún dato disponible en esta tabla",
                    sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                    sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
                    sInfoPostFix: "",
                    sSearch: "Buscar:",
                    sUrl: "",
                    sInfoThousands: ",",
                    sLoadingRecords: "Cargando...",
                    oPaginate: {
                        sFirst: "Primero",
                        sLast: "Último",
                        sNext: "Siguiente",
                        sPrevious: "Anterior"
                    },
                    oAria: {
                        sSortAscending: ": Activar para ordenar la columna de manera ascendente",
                        sSortDescending: ": Activar para ordenar la columna de manera descendente"
                    }
                }});
            $('.dataTables_filter label').css('display', 'block !important');
            $('.dataTables_filter label input[type="search"]').addClass('form form-control');
            $('input[name="myTable_length"]').addClass('form form-control');
           // pag_data_table();
        },
         complete: function () {
              //  loadingstop();
               
            }
    });
}

function eliminar(id)
{
bootbox.confirm({
    message: "Desea eliminar el Cliente ?",
    buttons: {
        confirm: {
            label: 'Si',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
    if(result){
    $.ajax({
        url: 'clases/control_crud.php',
        type: "POST",
        dataType:'json',
        data:{opcion:1, id:id},
        success: function (data)
        {
             if (!data.eliminado)
                {
                    bootbox.alert('Error al eliminar el dato');
                }
                else
                {
                    //bootbox.alert("Se elimino con exito");                        
                                
                }

        },
         complete: function () {
               verCargas()  
            }
        });
}}

    })
}

 verCargas()
$(function ()
{
//loadingstart();

 });


function editar(id)
{	
	
	$.ajax({    url: "clases/control_crud.php",
              type: "POST",
              dataType: "json",
              data: {opcion:"2",id:id},
          })
      .done(function(data) {
      //console.log(data) 
    $("#modal_id").val(data.id_cliente);
    $("#identificacion").val(data.identificacion);
    $("#nombres").val(data.nombres);
    $("#apellidos").val(data.apellidos);    
    $("#direccion").val(data.direccion);
    $("#telefono").val(data.telefono);
    $("#correo").val(data.correo);
    $("#numero_cuenta").val(data.numero_cuenta);
           
    });    

     
}


