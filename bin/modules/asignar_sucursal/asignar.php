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
   <title>Sucursales</title>
    
   <script src="../../../lib/js/jquery.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>
   <script src="../plantilla2/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="../../../lib/js/jquery.dataTables.min.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>

   <!--<script src="../../../lib/bootstrap-3.3.2/js/bootstrap.min.js"></script>-->
   <script src="../../../lib/bootbox.min.js"></script>
   <script src="../../../lib/bootstrap.min.js" data-semver="3.1.1" data-require="bootstrap"></script>
   <script src='../../../lib/data_table.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/combo.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/asignar.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/tabla_asignar.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  
  <script src='js/modal_asignar.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
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
 <form id="form_asignar" action="clases/control_asignar.php">
             <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Asignar Sucursal</div>
                    <div class="panel-body"> 
                     
                     <div class="col-md-12"> 
                        <label>Elija el Usuario</label>
                         <select id="id_user" class="form-control"  name="id_user">
                          <option value ="">---Elija Usuario---</option>
                         </select><br>
                      </div>

                      <div class="col-md-12"> 
                        <label>Elija una Sucursal</label>
                         <select id="id_sucursal" class="form-control"  name="id_sucursal">
                          <option value ="">---Elija Sucursal---</option>
                        </select><br>
                      </div>

                      <div class="col-md-12">
                        <label>Digite la Fecha de Inicio</label>
                            <input class="form-control" id="fecha_inicio" name="fecha_inicio" type="date" ><br>
                      </div>
                      <div class="col-md-12">
                        <label>Digite la fecha de Finalizacion</label>
                          <input class="form-control" id="fecha_fin" name="fecha_fin" type="date" ><br>
                      </div> 
                                          

                      <div class="col-md-3">                             
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
                            </div> 
                             
                        
                    </div>
                </div>
            </div>

       </form>     
               <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Listado</div>
                       <div class="panel-body">
                                                 
                            
                         <div class="table-responsive"> 
                         <div id="ver_cargas"></div>
                         </div>
                  
                     
                    </div>
                </div>
            </div>
    
</div>

<?php
include 'modal_asignar.php';
?>

 <?php
   
   include '../plantilla2/fin.php';
  ?>



</body>
</html>


