<?php
/*$contraseña = "";
$usuario = "root";
$nombre_base_de_datos = "prueba";*/
try{
	/*$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);*/
    $db = new PDO("mysql:host=localhost;dbname=prueba;","root","");
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>