<?php
session_start();
include '../../../core.php';
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../../login.php");
    exit;
        }
$con = App::$base;
    $sql = "SELECT tasa_dia from tbl_config where id_config = ?";
    $rs = $con->dosql($sql, array(1));
    $tasa = $rs->fields['tasa_dia'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>   
   <title>Inicio</title>
   <?php include("../plantilla2/head.php");?>   
   <script src='js/inicio.js?v=<?php echo str_replace('.', '', microtime(true)); ?>'></script>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
   <?php  
   include '../plantilla2/starter.php';     
   ?> 
<div class="container-fluid">
              <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Tasa y conversion BSS</div>
                    <div class="panel-body">                         
                      <div class="col-md-12">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3><?php echo $tasa;?> BSS</h3>
                              <p><h4>Tasa del Dia</h4></p>
                                </div>
                                  <div class="icon">
                                    <i class="ion ion-bag"></i>
                                  </div>           
                        </div>
                        <center><label><h3>Convertir</h3></label></center>
                          <div class="col-md-12">                                            
                              <input class="form-control" id="total_pesos" placeholder="Total Pesos" type="number" step="any"><br>         
                          </div>
                          <div class="col-md-12">                                            
                              <input class="form-control" id="total_bfs" placeholder="Total BSS" type="number" step="any">        
                          </div>
                      </div> 
                                 
                    </div>
                </div>             
            </div>             

                  <div class="col-md-4">
                                  <div class="panel panel-primary">
                                      <div class="panel-heading">Tasa representativa del dolar</div>
                                      <div class="panel-body">
                                        <div class="col-md-12">
                                         <center><!-- Inicio widget Dolar-Colombia.com -->
                                            <script src="https://www.dolar-colombia.com/widget.js?c=1"></script>
                                         <!-- Fin widget Dolar-Colombia.com --></center>
                                        </div>                          
                                        <div class="col-md-12">
                                        <center><label><h3>Convertir</h3></label>
                                          <!-- Inicio widget Dolar-Colombia.com -->
                                            <script src="https://www.dolar-colombia.com/widget.js?t=3&c=1"></script>
                                          <!-- Fin widget Dolar-Colombia.com -->  </center>
                                        </div>                                               
                                      </div>
                                  </div>             
                              </div>             
                  </div>


</div>
 
<?php
   include '../plantilla2/fin.php';
  ?>

</body>
</html>


