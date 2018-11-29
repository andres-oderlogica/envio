<?php
extract($_POST);
include_once 'sucursal.php';
$disc       = new regSucursal();	

try
{
	$disc->reg_sucursal($nombre_sucursal,$pais,$ciudad,$direccion,$telefono,$movil,$email);
	//var_dump($codigo);
      echo json_encode(array('guardado' => TRUE));
}
catch (Exception $ex)
{
	 echo json_encode(array('guardado' => FALSE));
}
?>