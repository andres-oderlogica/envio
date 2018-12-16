<?php
extract($_POST);
include_once 'class_envio.php';
$disc       = new regEnvio();	

try
{
	$disc->reg_factura($id_cliente_rem,$id_cliente_ben,$descripcion,$total_pesos,$total_bfs);
	//var_dump($codigo);S
      echo json_encode(array('guardado' => TRUE));
}
catch (Exception $ex)
{
	 echo json_encode(array('guardado' => FALSE));
}
?>