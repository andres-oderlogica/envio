<?php
session_start();
include '../../../core.php';
date_default_timezone_set('America/Bogota');
$fecha = date('Y-m-d');
$hora =  date ("h:i:s");  
$currentDateTime=date('m/d/Y H:i:s');
$newDateTime = date('h:i A', strtotime($currentDateTime));
$con = App::$base;
    $sql = "SELECT 
            `tbl_factura`.`fecha`,
            `tbl_factura`.`hora`,
            CONCAT('$ ',`tbl_factura`.`total_pesos`) as total,
            CONCAT('$ ',`tbl_factura`.`total_bfs`) as bss,
            `tbl_factura`.`total_bfs_manual`,
            `tbl_factura`.`sufijo`,
            `tbl_cliente`.`identificacion`,
            CONCAT(`tbl_cliente`.`nombres`,' ',
            `tbl_cliente`.`apellidos`) AS nombre,
            `tbl_cliente`.`direccion`,
            `tbl_cliente`.`telefono`,
            `tbl_cliente`.`correo`,
            `tbl_cliente`.`id_cliente`,
            `tbl_factura`.`id_factura`,
            CONCAT(`users`.`firstname`,' ',
            `users`.`lastname`) AS usuario
          FROM
            `tbl_factura`
            INNER JOIN `tbl_cliente` ON (`tbl_factura`.`id_cliente_ben` = `tbl_cliente`.`id_cliente`)
            INNER JOIN `users` ON (`tbl_factura`.`id_usuario` = `users`.`user_id`)
            WHERE id_factura = ?";
              $rs = $con->dosql($sql, array($_SESSION['factura']));

    $sql2 = "SELECT 
            CONCAT(`tbl_cliente`.`nombres`,' ',
            `tbl_cliente`.`apellidos`) AS rem,
            `tbl_cliente`.`identificacion` as id,
            `tbl_cliente`.`telefono` as tel,
            `tbl_cliente`.`id_banco`,
            `tbl_cliente`.`direccion`,            
            `tbl_config`.`nombre_empresa`,
            `tbl_config`.`nit`,
            `tbl_config`.`telefono`,
            `tbl_config`.`correo`
          FROM
            `tbl_factura`
            INNER JOIN `tbl_cliente` ON (`tbl_factura`.`id_cliente_rem` = `tbl_cliente`.`id_cliente`),
            `tbl_config`
            WHERE id_factura = ?";
              $rst = $con->dosql($sql2, array($_SESSION['factura']));
              
?>
<!DOCTYPE html>
<html>
 
<head>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
 
</head>
 
<body onload="imprimir();">
  <div class="ticket">
  <!--  <img src="https://yt3.ggpht.com/-3BKTe8YFlbA/AAAAAAAAAAI/AAAAAAAAAAA/ad0jqQ4IkGE/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="Logotipo">-->
    <p class="centrado"><?php echo $rst->fields['nombre_empresa'];  ?>
      <br><?php echo $fecha;  ?><br></p>
    <table border="0">
      <tbody>
        <tr>
          <td class="cantidad"><strong>Remision No:</strong> <?php echo $rs->fields['sufijo'];  ?></td>
        </tr>
        <tr>
          <td class="cantidad"><strong>Fecha:</strong> <?php echo $rs->fields['fecha']; ?> <strong>Hora:</strong> <?php echo $rs->fields['hora']; ?></td>
        </tr>
        <tr>
          <td class="cantidad"><strong>Cajero:</strong> <?php echo $rs->fields['usuario'];  ?></td>
        </tr>
        <tr>
          <td class="cantidad">============================</td>          
        </tr>
        <tr>
          <td class="cantidad"><strong>REMITENTE:</strong></td>
        </tr>
        <tr>
          <td class="cantidad"><?php echo $rst->fields['rem'];  ?></td>
        </tr>
        <tr>
          <td class="cantidad"><strong>No Doc:</strong> <?php echo $rst->fields['id'];?></td>          
        </tr>
        <tr>
          <td class="cantidad"><strong>Tel:</strong> <?php echo $rst->fields['tel'];?></td>      
        </tr>
        <tr>
          <td class="cantidad">============================</td>          
        </tr>
        <tr>
          <td class="cantidad"><strong>BENEFICIARIO:</strong></td>          
        </tr>

        <tr>
          <td class="cantidad"><?php echo $rs->fields['nombre'];  ?></td>
        </tr>
        <tr>
          <td class="cantidad"><strong>No Doc:</strong> <?php echo $rs->fields['identificacion'];  ?></td>          
        </tr>  
        <tr>
          <td class="cantidad"><strong>Telefono:</strong> <?php echo $rs->fields['telefono'];  ?></td>          
        </tr>
        <tr>
          <td class="cantidad">============================</td>          
        </tr>
        <tr>
          <td class="cantidad"><strong>DETALLE DEL ENVIO</strong></td>      
        </tr>
        <tr>
          <td class="cantidad"><strong>Total Envio:</strong> <?php echo $rs->fields['total'];  ?></td>      
        </tr>
        <tr>
          <td class="cantidad"><strong>Total BSS:</strong> <?php echo $rs->fields['bss'];  ?></td>      
        </tr>
        </tbody>
    </table>
    <p class="centrado">Oficina en Pitalito
      <br>Cra 5 No 2-23 Centro Tel: 3054612042</p>
  </div>
</body>
 
</html>