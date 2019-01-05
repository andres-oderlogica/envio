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

   <title>Lista Clientes</title>
    <?php include("../plantilla2/head.php");?>  
    <script src='js/cliente.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
    <script src='js/tabla_cliente.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
    <script src='js/combo.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
    <script src='js/modal_editar_cliente.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
    <link rel="stylesheet" href="../../../lib/css/table.css"> 
  
   </head>
     <body class="hold-transition skin-blue fixed sidebar-mini">
   <?php     
   include '../plantilla2/starter.php';  
   ?> 
 
<div class="container-fluid">
    <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Listado de Clientes</div>
                       <div class="panel-body">               
                         <div class="table-responsive"> 
                            <div id="ver_cargas"></div>
                         </div>        
                       </div>
                </div>
              </div>
    
</div>

<?php
include 'modal_editar_cliente.php';
?>

 <?php
   
   include '../plantilla2/fin.php';
  ?>



</body>
</html>


