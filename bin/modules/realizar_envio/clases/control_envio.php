<?php
extract($_POST);
include_once 'class_envio.php';
$disc       = new regEnvio();	

try
{
	$disc->reg_factura($id_cliente_rem,$id_cliente_ben,$descripcion,$total_pesos,$total_bfs, $total_bfs_manual, $id_pais_beneficiario);
	//var_dump($codigo);
      echo json_encode(array('guardado' => TRUE));
}
catch (Exception $ex)
{
	 echo json_encode(array('guardado' => FALSE));
}
?>