<?php
#Salir si alguno de los datos no está presente

    /*if(!isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["correo"]) || !isset($_POST["contraseña"]) || !isset($_POST["direccion"]) || !isset($_POST["nombre_provincia"])) exit();*/

#Si todo va bien, se ejecuta esta parte del código...

    include_once "prueba_conexion.php";
    if (isset($_POST['registrar'])){
        $nombre=$_POST["nombre"];         
        $apellido=$_POST["apellido"];
        $correo=$_POST['correo'];
        $config_cont=$_POST["config_cont"];
        $nombre_provincia=$_POST['nombre_provincia'];
        $direccion=$_POST['direccion'];

       /* echo "$nombre, $apellido, $correo, $config_cont";*/
        if($nombre!="" && $apellido!="" && $correo!='' && $config_cont!=''){
                if($config_cont===$config_cont){
                 /*$config_cont= md5($config_cont);*/

                    $tabla_cliente= $conexion->prepare("INSERT INTO clientes(nombre, apellido, correo, config_cont, direccion) VALUES ('$nombre', '$apellido', '$correo', '$config_cont', '$direccion');");
                    $tabla_provincia= $conexion->prepare("INSERT INTO provincias(nombre_provincia) VALUES (?);");

                     $resultado=$tabla_cliente->execute([$nombre, $apellido, $correo, $config_cont, $direccion]);
                    $resultado2=$tabla_provincia->execute([$nombre_provincia]);

                    echo "$resultado/n";
                    if($resultado === TRUE && $resultado2 === TRUE){
                        echo "$nombre, se ha insertado correctamente";
                    } 
                     else {
                        echo "Algo Salio mal, Verifica que la tabla exista";
                    }
                }
                else{
                    echo "Las Contraseñas no coinciden";
                }
         }
         else{
            echo "Verifique si ha dejado espacios en blanco";
         }
            
        }


        
/*
	Al incluir el archivo "base_de_datos.php", todas sus variables están
	a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
	copiado y pegado el código

*/



# Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

    
?>