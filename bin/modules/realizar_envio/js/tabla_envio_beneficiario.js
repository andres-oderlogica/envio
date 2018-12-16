function verCargas1()
{  
    $.ajax({
        url: 'clases/control_listar_beneficiarios.php',
        success: function (data)
        {
            $('#ver_cargas_beneficiario').html(data);
           
            $('#myTableben').DataTable({
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


 verCargas1()

function llenar_campos_beneficiario(id)
{	
	
  $.ajax({
        url: 'clases/control_crud.php',
        type: "POST",
        dataType:'json',
        data:{opcion:"2",id:id},
        success: function (data)
        {
                $("#identificacion_ben").val(data.identificacion);
                $("#id_cliente_ben").val(data.id_cliente);
                $("#nombre_ben").val(data.nombre);
                $("#telefono_ben").val(data.telefono);
                $("#correo_ben").val(data.correo);   
                $("#cuenta_ben").val(data.numero_cuenta);
                $("#banco_ben").val(data.descripcion);

        },
         complete: function () {
               $('#buscar_beneficiario').modal('toggle');
            }
        });  

     
}


