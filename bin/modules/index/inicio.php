<?php
session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../../login.php");
    exit;
        }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>    
   <?php //include("../plantilla/head.php");?>
   <title>Inicio</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <script src="../../../lib/js/jquery.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>
   <script src="../../../lib/js/jquery.dataTables.min.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>
   <!--<script src="../../../lib/bootstrap-3.3.2/js/bootstrap.min.js"></script>-->
   <script src="../../../lib/bootbox.min.js"></script>
   <!--<script src="../../../lib/bootstrap.min.js" data-semver="3.1.1" data-require="bootstrap"></script>-->
  

  <link rel="stylesheet" href="../plantilla2/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plantilla2/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../plantilla2/dist/css/skins/skin-blue.min.css">
  
  <script src="../plantilla2/bootstrap/js/bootstrap.min.js"></script>
  <script src="../plantilla2/dist/js/app.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
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


