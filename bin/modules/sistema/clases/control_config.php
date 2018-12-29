<?php
extract($_POST);
include_once 'class_config.php';
$disc       = new editarConfig();	

try
{
	$disc->editar($tasa_dia,$nombre_empresa,$nit,$telefono,$correo);
	//var_dump($codigo);
      echo json_encode(array('guardado' => TRUE));
}
catch (Exception $ex)
{
	 echo json_encode(array('guardado' => FALSE));
}
?>