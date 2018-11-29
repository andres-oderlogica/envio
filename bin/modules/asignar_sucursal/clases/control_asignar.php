<?php
extract($_POST);
include_once 'class_asignar.php';
$disc       = new regAsignar();	

try
{
	$disc->reg_usuarioxsucursal($id_user,$id_sucursal,$fecha_inicio,$fecha_fin);
	//var_dump($codigo);
      echo json_encode(array('guardado' => TRUE));
}
catch (Exception $ex)
{
	 echo json_encode(array('guardado' => FALSE));
}
?>