<?php
include_once 'class_envio.php';
$disc       = new regEnvio();


switch ($_POST['opcion']) {
	case '1':
		//echo $disc->listEnvioModal();
		break;
	
	default:
		# code...
		break;
}
//echo $disc->listCliente();
echo $disc->listEnvioModal();
?>