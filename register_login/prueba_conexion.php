<?php

/*
$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "proyecto_basededatos";

try{
	$db= new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

*/

$host="localhost";
$usuario="root";
$password="";
$nombre_db="proyecto_basededatos";
$dsn="mysql:host=$host;dbname=$nombre_db";

try{
	$conexion=new PDO($dsn, $usuario, $password);
	} catch(PDOExepcion $error){
		echo $error->getMessage();
	}
?>