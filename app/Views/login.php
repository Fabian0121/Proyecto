<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Inicio de Sesion</title>
    </head>
    <body>
    	<center>  
        <h1>Inicio de Sesion</h1> <hr>
        <?php
            if(isset($estatus)){
                echo "<h2>$estatus</h2>";
            }
        ?>
        <form method="post" action="index.php?controller=Usuario&action=verificarlogin">
       	
        	<input type="email" name="correo" placeholder="Correo"><br><br>
        	<input type="password" name="pass" placeholder="Contrasenia"><br><br>
        	<input type="submit" name="Enviar">
        	</center>
        </form>
    </body>
</html>