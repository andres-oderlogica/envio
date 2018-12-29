<?php
include_once 'class_config.php';
$opcion = $_POST['opcion'];

//extract($_POST);
$disc   = new editarConfig();
//var_dump($id);
switch ($opcion) {
	case '1':
	try {
		$disc->eliminar($id);
		echo json_encode(array('eliminado' => TRUE));
		
	} catch (Exception $ex) {
		echo json_encode(array('eliminado' => FALSE));
		
	}		
		break;
	case '2':	
		$res = $disc->buscar();
		echo json_encode($res);		
		break;
		
}

?>