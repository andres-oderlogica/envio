<?php
include_once 'class_envio.php';
$opcion = $_POST['opcion'];
$id     = $_POST['id'];
//$tipo = $_POST['id_tipo'];
$identificacion = $_POST['identificacion'];
$nombres =$_POST['nombres'];
$apellidos    = $_POST['apellidos'];
$direccion  = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$banco    = $_POST['id_banco'];
$cuenta    = $_POST['numero_cuenta'];
$idFactura     = $_POST['idFactura'];

//extract($_POST);
$disc   = new regEnvio();
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
		//var_dump($banco);
		if($banco != "-1")		
			$disc->editar($id,$identificacion,$nombres,$apellidos,$direccion,$telefono,$correo, $banco,$cuenta);		
		else			
			$disc->editar1($id,$identificacion,$nombres,$apellidos,$direccion,$telefono,$correo,$cuenta);
		
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
			case '6':
				$res = $disc->consultaTasa();
				echo json_encode($res);
				break;
				case '7':
					$res = $disc->editarEstadoEnvio($idFactura);
					break;
}

?>