<?php
/*$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "proyecto_basededatos";*/
try{
	/*$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);*/
    $db = new PDO("mysql:host=localhost;dbname=proyecto_basededatos;","root","");
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>