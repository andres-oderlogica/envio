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
{  loadingstart();
    $.ajax({
        url: 'clases/control_listar.php',
        success: function (data)
        {
            $('#ver_cargas').html(data);
           
            $('#myTable').DataTable({
                sPaginationType: "bootstrap", 
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
                loadingstop();
               
            }
    });
}

function eliminar(id)
{
bootbox.confirm({
    message: "Desea eliminar el estudiante ?",
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
               verCargas()  
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


function editar(id)
{	
	
	$.ajax({    url: "clases/control_crud.php",
              type: "POST",
              dataType: "json",
              data: {opcion:"2",id:id},
          })
      .done(function(data) {
      //console.log(data) 
    $("#modal_id").val(data.id_estudiante);
    $("#modal_codigo").val(data.codigo);
    $("#modal_identificacion").val(data.identificacion);
    $("#modal_primer_apellido").val(data.primer_apellido);
    $("#modal_segundo_apellido").val(data.segundo_apellido);
    $("#modal_primer_nombre").val(data.primer_nombre);
    $("#modal_segundo_nombre").val(data.segundo_nombre);
    $("#modal_direccion").val(data.direccion);
    $("#modal_telefono").val(data.telefono);
    $("#modal_email").val(data.email);
    $("#modal_discapacidad").val(data.discapacidad);
    $("#modal_fecha_nacimiento").val(data.fecha_nacimiento);
    $("#modal_usuario").val(data.usuario);
	        
    });    

     
}


