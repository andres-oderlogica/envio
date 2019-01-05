<?php
session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../../login.php");
    exit;
        }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>   
   <title>Inicio</title>
   <?php include("../plantilla2/head.php");?>   

</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
   <?php  
   include '../plantilla2/starter.php';     
   ?> 
<div class="container-fluid">
    <div class="col-md-12">  
        <center><h1>Sistema</h1>
                <h2>Envios</h2>                      
                  <!--<img src="../../../img/logo.PNG" class="img-circle" alt="Cinque Terre" width="304" height="236"> -->
        </center>
    </div>
</div>

<?php
   include '../plantilla2/fin.php';
  ?>

</body>
</html>


