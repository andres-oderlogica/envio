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

   <title>Config</title>
   <?php include("../plantilla2/head.php");?>    
   <script src='js/config.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script> 
   </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
   <?php
   include '../plantilla2/starter.php';  
    ?> 
 
<div class="container-fluid">
 <form id="form_config" action="clases/control_config.php">
             <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Configuracion Global</div>
                    <div class="panel-body"> 
                      <div class="col-md-6">
                        <label>Tasa del Dia</label>
                        <input class="form-control" id="tasa_dia" name="tasa_dia"  type="number" step="any" required><br>

                      </div>
                      <div class="col-md-6">
                        <label>Nombre de la Empresa</label>
                                <input class="form-control" id="nombre_empresa" name="nombre_empresa" type="text" required><br>
                      </div>
                      
                      <div class="col-md-6">
                        <label>Nit</label>
                                <input class="form-control" id="nit" name="nit" type="text" ><br>
                        </div>
                       <div class="col-md-6">
                        <label>Digite Telefono o Celular</label>
                                <input class="form-control" id="telefono" name="telefono" type="text" ><br>
                            </div>
                            
                            <div class="col-md-12">
                              <label>Digite Correo Electronico</label>
                                <input class="form-control" id="correo" name="correo" type="email" ><br>
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


