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

        <form method="post" action="index.php?controller=Publicacion&action=crearPublicacion">
       	
        	<input type="text" name="nombre" placeholder="Nombre Usuario"> <br>
        	<br>
        	<input type="text" name="categoria" placeholder="categoria"><br><br>
        	<input type="date" name="fecha" placeholder="Fecha"> <br><br>
     		<input type="text" name="titulo"> <br><br>
        	<input type="text" name="resena" placeholder="Reseña"><br><br>
        	<input type="text" name="calificacion" placeholder="Calificacion del articulo"><br><br>
            <br>
        	<input type="submit" name="Enviar">
        	</center>
        </form>
    </body>
</html>