<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Publiacion</title>
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
