<?php
#Salir si alguno de los datos no está presente
    if(!isset($_POST["Nombre"]) || !isset($_POST["Apellido"]) || !isset($_POST["Correo"])) exit();
#Si todo va bien, se ejecuta esta parte del código...
    include_once "prueba_conexion.php";
        $nombre = $_POST["Nombre"];
        $apellido = $_POST["Apellido"];
        $correo = $_POST["Correo"];
/*
	Al incluir el archivo "base_de_datos.php", todas sus variables están
	a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
	copiado y pegado el código
*/
    $sentencia = $db->prepare("INSERT INTO clientes(Nombre, Apellido, Correo) VALUES (?, ?, ?);");

    $resultado = $sentencia->execute([$nombre, $apellido, $correo]); 

# Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

    if($resultado === TRUE) echo "Insertado correctamente";
        else echo "Algo salió mal. Por favor verifica que la tabla exista";
?>