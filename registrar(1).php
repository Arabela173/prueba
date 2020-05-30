 <?php
include("con_db.php");
if(isset($_POST['Enviar'])){ 
	if(strlen($_POST['clave']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['estado']) >= 1 && strlen($_POST['calificacion']) >= 1 && strlen($_POST['comentario'])){
		$cla=trim($_POST['clave']);
		$nom=trim($_POST['nombre']);
		$ape=trim($_POST['apellido']);
		$es=trim($_POST['estado']);
		$cali=trim($_POST['calificacion']);
		$come=trim($_POST['comentario']);
		$consulta="INSERT INTO datos(clave, nombre, apellido, estado, calificacion, comentario) VALUES ('$cla', '$nom', '$ape', '$es', '$cali', '$come')";
		$resultado=mysqli_query($conex, $consulta);
		if ($resultado){
			?>
			<h3 class="ok">¡Se ha enviado correctamente!</h3>
			<?php
		} else {
			?>
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
		}
		}else{
			?>
			<h3 class="bad">¡Por favor complete los campos!</h3> 
			<?php
		}
		}
?>
