<meta charset="UTF-8">
	<title>REGISTRO</title>
		<link rel="stylesheet" type="text/css" href="../paginadeinicio/estilos.css">
 		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
		<link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">
   
    <style type="text/css">
        
    </style>

</head>
	<body>
			
        <<?php
    require '../templates/header.php'
    ?>
    
        <section style="position: center; margin: 100%;
    margin: auto;">
        	<form method="post" action="registro.php">
			<div style="display: flex; flex-wrap: wrap; justify-content: center">

				<div style="width: 600px; height: 320px ;background-color: #FFEEFF">

					<br><br><br>
                    
					   <div style="text-align: center; text-decoration-color: #00A6FF">

						<h2>REGISTRO</h2><br><br>
					       <div style="text-align: center;">
        						<h3>
        							REGISTRATE
        						</h3>

            						<div style="text-align: left">
            							<label for="name">Nombre</label>
            							        <input name="nombre" type="text" id="nombre" placeholder="Nombre">	
            						</div>
            						<div style="text-align: left;">			
            							<label for="name">Apellido</label>
            							        <input name="apellido" type="text" id="apellido" placeholder="Apellido">
            						</div>
            						<div style="text-align: left;">
            							<label for="email">Correo</label>
            									<input name="correo" type="email" id="correo" placeholder="example@correo.com">
            						</div>

                                    <div style="text-align: left;">
                                        <label for="config_cont">Ingrese su Contraseña</label>
                                            <input name="config_cont" type="password" id="contraseña2">
                                    </div>

            						<div style="text-align: left;">
            							<label for="nombre_provincia">Seleccione su Provincia</label>
            							<select name="nombre_provincia" id="nombre_provincia">
            								<option value="">--Escoje--</option>
            								<option value="Bocas del Toro">Bocas del Toro</option>
            								<option value="Coclé">Coclé</option>
            								<option value="Colón">Colón</option>
            								<option value="Chiriquí">Chiriquí</option>
            								<option value="Darién">Darién</option>
            								<option value="Herrera">Herrera</option>
            								<option value="Los Santos">Los Santos</option>
            								<option value="Panamá">Panamá</option>
            								<option value="Veraguas">Veraguas</option>
            								<option value="Panamá Oeste">Panamá Oeste</option>
            							</select>
            						</div>
            						<div style="text-align: left;">
            							<label for="direccion">Escriba su Lugar de Ubicación
            							</label>
            							<input type="text" name="direccion" id="direccion">
            						</div>
    						<br><br>
    						<div style="text-align: left;">
    						<input type="submit" id="submit" value="Registrar" name="registrar">
    						</div>
					</div>
					</div>
				</div>
			</div>	
		</form>
            </section>	
			<footer>
				<div class="contenedor">
					<h6 class="copy">SISTEMA DE BASE DE DATOS | UTP 2019</h6>
				</div>
			</footer>
	</body>
</html>