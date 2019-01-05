<?php
session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../../login.php");
    exit;
        }
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
    <script src='js/sucursal.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
    <script src='js/tabla_sucursal.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>  
    <script src='js/modal_editar_sucursal.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script> 
   </head>
<body class="hold-transition skin-blue fixed sidebar-mini">
   <?php     
   include '../plantilla2/starter.php';  
   ?> 
 
<div class="container-fluid">
 <form id="form_sucursal" action="clases/control_sucursal.php">
             <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Registrar Sucursal</div>
                    <div class="panel-body"> 
                      <div class="col-md-12"> 
                          <input class="form-control" id="nombre_sucursal" name="nombre_sucursal" placeholder="Sucursal" type="text" required><br>
                      </div>

                    <!--  <div class="col-md-12"> 
                        <label>Elija el Departamento</label>
                         <select id="combo" class="form-control"  name="id_departamentos">
                          <option value ="">---Elija una Opcion---</option>
                         </select><br>
                      </div>

                      <div class="col-md-12"> 
                        <label>Elija la Ciudad</label>
                         <select id="comboHijo" class="form-control"  name="id_ciudad">
                        </select><br>
                      </div>-->
                      <div class="col-md-12">
                                <input class="form-control" id="pais" name="pais" placeholder="Digite el Pais" type="text" ><br>
                            </div>
                      <div class="col-md-12">
                                <input class="form-control" id="ciudad" name="ciudad" placeholder="Digite la Ciuadad" type="text" ><br>
                            </div>
                      <div class="col-md-12">
                                <input class="form-control" id="direccion" name="direccion" placeholder="Digite la Direccion" type="text" ><br>
                        </div>
                       <div class="col-md-12">
                                <input class="form-control" id="telefono" name="telefono" placeholder="Digite el Telefono" type="text" ><br>
                            </div>
                            
                            <div class="col-md-12">
                                <input class="form-control" id="movil" name="movil" placeholder="Digite el Celular" type="text" ><br>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" id="email" name="email" placeholder="Digite el Correo" type="email" ><br>
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
                    <div class="panel-heading">Datos de contacto y acceso</div>
                       <div class="panel-body">
                                                 
                            
                         <div class="table-responsive"> 
                         <div id="ver_cargas"></div>
                         </div>
                  
                     
                    </div>
                </div>
            </div>
    
</div>

<?php
include 'modal_editar_sucursal.php';
?>

 <?php
   
   include '../plantilla2/fin.php';
  ?>



</body>
</html>


