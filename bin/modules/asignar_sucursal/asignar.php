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
  
   <title>Sucursales</title>    
    <?php include("../plantilla2/head.php");?>  
    <script src='js/combo.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
    <script src='js/asignar.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
    <script src='js/tabla_asignar.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
    <script src='js/modal_asignar.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
    <link rel="stylesheet" href="../../../lib/css/table.css">
   </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
   <?php
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


