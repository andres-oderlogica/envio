<?php
session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../../login.php");
    exit;
        }
       // var_dump($_SESSION['perfil']);

        if($_SESSION['perfil'] != "Administrador")
        {
          header("location: ../../../login.php");
        }
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>    
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
   <title>Clientes</title>
    
   <script src="../../../lib/js/jquery.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>
   <script src="../plantilla2/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="../../../lib/js/jquery.dataTables.min.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>

   <!--<script src="../../../lib/bootstrap-3.3.2/js/bootstrap.min.js"></script>-->
   <script src="../../../lib/bootbox.min.js"></script>
   <script src="../../../lib/bootstrap.min.js" data-semver="3.1.1" data-require="bootstrap"></script>
   <script src='../../../lib/data_table.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
   <!--<script src='js/ciudad.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>-->
  <script src='js/cliente.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/tabla_cliente.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/combo.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  
  <script src='js/modal_editar_cliente.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
  <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
   
  <link rel="stylesheet" href="../plantilla2/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plantilla2/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../plantilla2/dist/css/skins/skin-blue.min.css">
  <script src="../plantilla2/dist/js/app.min.js"></script>
  <style>
             #pre-load-web {
                width:100%;
                position:absolute;
                background:rgba(0,0,0,0.5);
                left:0px;
                top:0px;
                z-index:100000
            }
            #pre-load-web #imagen-load{
                left:50%;
                margin-left:-30px;
                position:absolute
            }
            #content{
                padding-top: 15%;
                padding-left: 20%;
                padding-right: 20%;
                text-align: center;
            }
         
            .dataTables_filter label{
                display:block !important;
            }
            #myTable_paginate{
                text-align: -webkit-center;
            }
            #myTable_info{
                font-weight: bold;
            }
           /* .panel-body {
            height: 500px;
            }*/
        </style>
   </head>
<body class="hold-transition skin-blue sidebar-mini">
   <?php
     //include '../plantilla/navbar.php';
   include '../plantilla2/starter.php';
  
  ?> 
 
<div class="container-fluid">
 <form id="form_cliente" action="clases/control_cliente.php">
             <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Registrar Cliente</div>
                    <div class="panel-body"> 
                       <div class="col-md-6"> 
                          <label>Elija el Tipo de Documento</label>
                             <select id="id_tipo" class="form-control"  name="id_tipo">
                             </select><br>
                          </div>     

                      <div class="col-md-6">
                        <label>Digite la identificacion</label>
                        <input class="form-control" id="identificacion" name="identificacion" placeholder="No de Documento" type="text" required><br>
                      </div>
                      <div class="col-md-6">
                        <label>Digite Primer y Segundo Nombre</label>
                                <input class="form-control" id="nombres" name="nombres" placeholder="Nombres" type="text" required><br>
                      </div>
                      <div class="col-md-6">
                        <label>Digite Primer y Segundo Apellido</label>
                                <input class="form-control" id="apellidos" name="apellidos" placeholder="Digite Apellidos" type="text" required><br>
                            </div>
                      <div class="col-md-6">
                        <label>Digite la Direccion</label>
                                <input class="form-control" id="direccion" name="direccion" placeholder="Digite la Direccion" type="text" ><br>
                        </div>
                       <div class="col-md-6">
                        <label>Digite Telefono o Celular</label>
                                <input class="form-control" id="telefono" name="telefono" placeholder="Digite el Telefono" type="text" ><br>
                            </div>
                            
                            <div class="col-md-12">
                              <label>Digite Correo Electronico</label>
                                <input class="form-control" id="correo" name="correo" placeholder="Digite el Correo" type="email" ><br>
                            </div> 

                            <div class="col-md-6"> 
                              <label>Elija El Banco</label>
                                 <select id="id_banco" class="form-control"  name="id_banco">
                                  </select><br>
                            </div> 

                            <div class="col-md-6">
                              <label>Digite Numero de Cuenta</label>
                                <input class="form-control" id="numero_cuenta" name="numero_cuenta" placeholder="Numero de Cuenta" type="text" ><br>
                            </div>     

                      <div class="col-md-3">                             
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
                            </div> 
                             
                        
                    </div>
                </div>
            </div>

       </form>     
             <!--  <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos de contacto y acceso</div>
                       <div class="panel-body">
                                                 
                            
                         <div class="table-responsive"> 
                         <div id="ver_cargas"></div>
                         </div>
                  
                     
                    </div>
                </div>
            </div>-->
    
</div>

<?php
include 'modal_editar_cliente.php';
?>

 <?php
   
   include '../plantilla2/fin.php';
  ?>



</body>
</html>


