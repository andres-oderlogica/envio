<?php
extract($_POST);
include_once 'class_cliente.php';
$disc       = new regCliente();	

try
{
	$disc->reg_cliente($id_tipo,$identificacion,$nombres,$apellidos,$direccion,$telefono,$correo, $id_banco,$numero_cuenta);
	//var_dump($codigo);
      echo json_encode(array('guardado' => TRUE));
}
catch (Exception $ex)
{
	 echo json_encode(array('guardado' => FALSE));
}
?>