<?php
	include_once "prueba_conexion.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="../paginadeinicio/estilos.css">
 		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
</head>
<body>
	
	<?php
	require '../templates/header.php'
	?>

	<form method="post">
		<section style="position: center; margin: 100%; margin: auto;">
			<dir style="display: flex; flex-wrap: wrap; justify-content: center">
				<dir style="width: 400px; height: 320px ;background-color: #FFEEFF">
				<dir style="text-align: center;">
					<h3>
						INICIAR SESIÓN
					</h3>
				</dir>
			<dir>
				<dir style="text-align-last: left;">
					<label for="email">Escribe tu Correo</label>
				</dir>
				<dir>
					<input type="email" name="correo" placeholder="ejemplo@correo.com" id="email">
				</dir>
			</dir>
			<dir>
				<dir>
					<label for="contraseña">Escribe tu Contraseña</label>
				</dir>
				<dir>
					<input type="password" name="config_cont" id="contraseña">
				</dir>
			</dir>
			<br><br>
			<dir>
				<input type="submit" name="continuar" value="Iniciar Sesión">
			</dir>
		</dir>
		</dir>
		</section>
	</form>

	<?php require '../templates/footer.php'
	?>



</body>
</html>

<? php
	if(isset($_POST['continuar']){
		if(isset($_POST['correo'])!='' && isset($_POST['config_cont']!=''){
			$correo = $_POST["correo"];
   			 $config_cont = $_POST["config_cont"];
   			 

   			 $sql_sesion=$conexion->prepare("SELECT cnombre, capellido FROM clientes c, provincia p where correo=ccorreo and cid_cliente=pid_provincia");
   			 $sentencia=$conexion->prepare($sql_sesion);
   			 $sentencia->execute();
   			 	if($sentencia===true){
					$sentencia->bind_result($cnombre, $capellido, $ccorreo, $cdireccion);
					echo("Su Busqueda ah resultado exitosa");
				}
				else{
					echo "No se hay usuario registrado";
				}

		}
		else{
			echo "Algunos campos estan vacios";
		}
	}else{
		echo "Se ha generado un error";
	}

    /*$correo1=$correo;
    $contraseña=$config_cont;*/

    

    /*$sentencia= $db->prepare("select nombre, apellido from clientes where correo=$correo");and p.id_provincia=c.id");*/
	$sentencia->free_result();
	$sentencia->close();
	$conexion->close();

?>