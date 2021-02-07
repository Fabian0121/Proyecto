<!DOCTYPE html>
<html lang="es">
    <head>
    	<link rel="stylesheet" href="public/css/Registro.css">
        <meta charset="utf-8" />
        <title>Registro</title>
    </head>
    <body>
    	<center>  
        <h1>Registro</h1> <hr>

        <form method="post" action="index.php?controller=Usuario&action=verificarRegistro">
       	
        	<input type="text" name="nombre" placeholder="Nombre"> <br>
        	<br>
        	<input type="text" name="apellidoP" placeholder="Apellido Paterno"><br><br>
        	<input type="text" name="apellidoM" placeholder="Apellido Materno"> <br><br>
        	<p> Fecha de Nacimiento <p><br>
     		<input type="date" name="fechaNacimiento"> <br><br>
        	<input type="email" name="correo" placeholder="Correo"><br><br>
        	<input type="password" name="pass" placeholder="Contrasenia"><br><br>
        	<p>Sexo:</p><input type="radio" name="sexo" value="Femenino">Femenino
            <input type="radio" name="sexo" value="Masculino">Masculino<br>
            <br>
        	<input type="submit" name="Enviar">
        	</center>
        </form>
    </body>
</html>