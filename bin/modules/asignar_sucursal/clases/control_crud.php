<?php
include_once 'class_asignar.php';
$opcion = $_POST['opcion'];
$id     = $_POST['id'];
$motivo =$_POST['motivo'];
$estado   = $_POST['estado'];


//extract($_POST);
$disc   = new regAsignar();
$disc->editar($id,$motivo,$estado);
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
		$res = $disc->buscar($id);
		echo json_encode($res);		
		break;
		case '3':
		//var_dump($id);
			$disc->editar($id,$nombre,$direccion,$telefono,$movil,$email,$pais,$ciudad, $estado);
			break;
	
		case '4':
			try {
					$disc->editarEstadoPago($id, $estado);
					echo json_encode(array('editado' => TRUE));
					
				} catch (Exception $ex) {
					echo json_encode(array('editado' => FALSE));
					
				}	
			break;

			case '5':
			try {
					$disc->editarEstadoPago($id, $estado);
					echo json_encode(array('editado' => TRUE));
					
				} catch (Exception $ex) {
					echo json_encode(array('editado' => FALSE));
					
				}	
			break;
}

?>