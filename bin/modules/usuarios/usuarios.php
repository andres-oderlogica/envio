<?php
session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: ../../../login.php");
		exit;
        }
        if($_SESSION['perfil'] != "Administrador")
        {
          header("location: ../../../login.php");
        }

	require_once ("../../../config/db.php");
	require_once ("../../../config/conexion.php");
	$active_facturas="";
	$active_productos="";
	$active_clientes="";
	$active_usuarios="active";	
	$title="Usuarios";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>    
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <title>Usuarios</title>
     	<?php include("../plantilla2/head.php");?>   
  		<script type="text/javascript" src="js/usuarios.js?v=<?php echo str_replace('.', '', microtime(true)); ?>"></script>
  		<link rel="stylesheet" href="../../../lib/css/table.css">
   </head>
	<body class="hold-transition skin-blue fixed sidebar-mini">

 	<?php
	include '../plantilla2/starter.php';  
	?> 
    <!--<div class="container">-->
		<div class="panel panel-primary">
		<div class="panel-heading">		 
			<h4> Administrar Usuarios</h4>			
		</div>		
		<div class="panel-body">
			<?php
			include("modal/registro_usuarios.php");
			include("modal/editar_usuarios.php");
			include("modal/cambiar_password.php");
			?>

			<form class="form-horizontal" role="form" id="datos_cotizacion">				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Nombres:</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre" onkeyup='load(1);'>
							</div>
							<button type='button' class="btn btn-primary" data-toggle="modal" data-target="#myModal"></span> Nuevo Usuario</button>
							
							<div class="col-md-3">
								<!--<button type="button" class="btn btn-default" onclick='load(1);'>-->
									<!--<span class="glyphicon glyphicon-search" ></span> Buscar</button>-->
								<span id="loader"></span>
							</div>							
						</div>				
				</div>					
			</form>			
				<div id="resultados"></div>
				<div class='outer_div'></div>						
			
</div>

	<!--</div>-->	
	<?php
	//include("../factura/footer.php");
	include '../plantilla2/fin.php';
	?>
	<!--<script type="text/javascript" src="js/usuarios.js"></script>-->

  </body>
</html>
<script>
$( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "nuevo_usuario.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

$( "#editar_usuario" ).submit(function( event ) {
  $('#actualizar_datos2').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "editar_usuario.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos2').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

$( "#editar_password" ).submit(function( event ) {
  $('#actualizar_datos3').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "editar_password.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax3").html(datos);
			$('#actualizar_datos3').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})
	function get_user_id(id){
		$("#user_id_mod").val(id);
	}

	function obtener_datos(id){
			var nombres = $("#nombres"+id).val();
			var apellidos = $("#apellidos"+id).val();
			var usuario = $("#usuario"+id).val();
			var email = $("#email"+id).val();
			
			$("#mod_id").val(id);
			$("#firstname2").val(nombres);
			$("#lastname2").val(apellidos);
			$("#user_name2").val(usuario);
			$("#user_email2").val(email);
			
		}
</script>