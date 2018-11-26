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
   <title>Realizar Giro</title>
    
   <script src="../../../lib/js/jquery.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>
   <script src="../plantilla2/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="../../../lib/js/jquery.dataTables.min.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>

   <!--<script src="../../../lib/bootstrap-3.3.2/js/bootstrap.min.js"></script>-->
   <script src="../../../lib/bootbox.min.js"></script>
   <script src="../../../lib/bootstrap.min.js" data-semver="3.1.1" data-require="bootstrap"></script>
   <script src='../../../lib/data_table.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/estudiante.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/modal_editar_estudiante.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
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
 <form id="form_estudiante" action="clases/control_estudiante.php">
             <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos Personales</div>
                    <div class="panel-body"> 
                      <div class="col-md-12"> 
                          <input class="form-control" id="identificacion" name="identificacion" placeholder="Identificacion" type="text" required><br>
                      </div>
                      <div class="col-md-12"> 
                          <input class="form-control" required="true" id="primer_apellido" name="primer_apellido" placeholder="Primer Apellido" type="text" ><br>
                      </div>
                      <div class="col-md-12"> 
                          <input class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido" type="text" ><br>
                      </div>
                      <div class="col-md-12">
                          <input class="form-control" required="true" id="primer_nombre" name="primer_nombre" placeholder="Primer Nombre" type="text" ><br>
                      </div>
                      <div class="col-md-12">
                          <input class="form-control" id="segundo_nombre" name="segundo_nombre" placeholder="Segundo Nombre" type="text" ><br>
                      </div>
                      <div class="col-md-12">
                          <input class="form-control" id="discapacidad" name="discapacidad" placeholder="Discapacidad" type="text" ><br>
                      </div>
                      <div class="col-md-12">
                          <label>Fecha de Nacimiento</label>
                          <input class="form-control" type="date" name="fecha_nacimiento" placeholder="Correo" >   </div> 

                               
                        
                    </div>
                </div>
            </div>
               <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos de contacto y acceso</div>
                       <div class="panel-body">
                            <div class="col-md-12">
                               <input class="form-control" id="codigo" name="codigo" placeholder="Digita el codigo" type="text" ><br>
                            </div> 
                            <div class="col-md-12">
                                <input class="form-control" id="telefono" name="telefono" placeholder="Telefono" type="text" ><br>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" id="direccion" name="direccion" placeholder="Direccion" type="text" ><br>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" id="email" name="email" placeholder="Correo" type="email" ><br>
                            </div>                           
                            <div class="col-md-12">
                              <label>Nombre de Usuario</label>
                                <input class="form-control" id="usuario" name="usuario" placeholder="Usuario" type="text" ><br>
                                </div>                      
                            <div class="col-md-3">                             
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
                            </div> 
                     
                  
                     
                    </div>
                </div>
            </div>
    </form>
</div>

 <?php
   
   include '../plantilla2/fin.php';
  ?>



</body>
</html>


