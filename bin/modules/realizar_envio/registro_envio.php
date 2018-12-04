<?php
session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../../login.php");
    exit;
        }
       // var_dump($_SESSION['perfil']);

    /*    if($_SESSION['perfil'] != "Administrador")
        {
          header("location: ../../../login.php");
        }*/
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>    
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
   <title>Envios</title>
    
   <script src="../../../lib/js/jquery.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>
   <script src="../plantilla2/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="../../../lib/js/jquery.dataTables.min.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>

   <!--<script src="../../../lib/bootstrap-3.3.2/js/bootstrap.min.js"></script>-->
   <script src="../../../lib/bootbox.min.js"></script>
   <script src="../../../lib/bootstrap.min.js" data-semver="3.1.1" data-require="bootstrap"></script>
   <script src='../../../lib/data_table.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
   <!--<script src='js/ciudad.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>-->
  <script src='js/envio.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/tabla_envio.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  <script src='js/combo.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
  
  <script src='js/modal_editar_envio.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
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
 <form id="form_envio" action="clases/control_envio.php">
             <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos del Remitente</div>
                    <div class="panel-body">

                    <div class="col-md-12">
                        <div class="input-group">
                             <input type="text" class="form-control" id="identificacion" placeholder="Identificacion" disabled>
                                <span class="input-group-btn">
                             <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buscar_cliente">Buscar</button>                         
                        </div>
                    </div>
                       <div class="col-md-12">    
                       <br>       
                        <input type="hidden" id="id_cliente_rem">                                 
                            <input class="form-control" id="nombre" placeholder="Cliente" type="text" disabled><br>         
                      </div>
                      <div class="col-md-12">                                            
                            <input class="form-control" id="telefono" placeholder="Telefono" type="text" disabled><br>         
                      </div>
                      <div class="col-md-12">                                            
                            <input class="form-control" id="correo" placeholder="Correo" type="text" disabled>        
                      </div>
                                            
                    </div>
                </div>


                          <div class="panel panel-primary">
                               <div class="panel-heading">Valor Envio</div>
                                   <div class="panel-body">
                                       
                                        <div class="col-md-12">                                            
                                          <input class="form-control" id="total_pesos" name="total_pesos" placeholder="Total Pesos" type="number" step="any" required><br>         
                                         </div>
                                        <div class="col-md-12">                                            
                                           <input class="form-control" id="total_bfs" name="total_bfs" placeholder="Total BSS" type="text" >        
                                         </div>                                            
                                  </div>
                          </div>


            </div>

             <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos del Beneficiario</div>
                    <div class="panel-body">

                    <div class="col-md-12">
                        <div class="input-group">
                             <input type="text" class="form-control" id="identificacion_ben" placeholder="Identificacion" disabled>
                                <span class="input-group-btn">
                             <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buscar_beneficiario">Buscar</button>                         
                        </div>
                    </div>
                       <div class="col-md-12"> 
                       <br> 
                       <input type="hidden" id="id_cliente_ben">                                          
                            <input class="form-control" id="nombre_ben" placeholder="Cliente" type="text" disabled><br>         
                      </div>
                      <div class="col-md-12">                                            
                            <input class="form-control" id="telefono_ben" placeholder="Telefono" type="text" disabled><br>         
                      </div>
                      <div class="col-md-12">                                            
                            <input class="form-control" id="correo_ben" placeholder="Correo" type="text" disabled><br>         
                      </div>
                       <div class="col-md-12">                                            
                            <input class="form-control" id="cuenta_ben" placeholder="No Cuenta" type="text" disabled><br>         
                      </div>
                      <div class="col-md-12">                                            
                            <input class="form-control" id="banco_ben" placeholder="Banco" type="text" disabled><br>         
                      </div>
                      <div class="col-md-12">                                            
                            <textarea class="form-control" rows="3" id="descripcion" name="descripcion" placeholder="Realice una Descripcion..."></textarea><br>         
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
include 'modal_buscar_cliente.php';
include 'modal_buscar_beneficiario.php';
?>

 <?php
   
   include '../plantilla2/fin.php';
  ?>



</body>
</html>


