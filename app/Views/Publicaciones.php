<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Publicacion</title>

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="public/css/Publicacion.css" th:href="@{/css/index.css}">

</head>
<body>
<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">
             <h1>Publicacion</h1> <hr><br><br>
            <div class="col-16 user-img">
                <img src="public/images/publicaciones.PNG">
            </div>
           
        <?php
        //Mi dato de session lo guardo en esta variable
        $var=$_SESSION['Usuarios'];
        ?>
            <form class="col-16" method="post" action="index.php?controller=Publicaciones&action=crearPublicacion">
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="<?php  echo $var ?>" name="Usuario" id="<?php $var?>" disabled>
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Categoria" name="Categoria" required>
                </div>
                <div class="form-group" id="user-group">
                    <input type="date" class="form-control" placeholder="Fecha" name="Fecha" required>
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Titulo del libro" name="Titulo" required>
                </div>
                <div class="form-group" id="user-group">
                   <textarea class="form-control" maxlength="320" placeholder="Reseña" name="Opinion" value="" required> </textarea>
                </div>
                <div class="form-group" id="contrasenia-group">
                    <input type="number" step="0.01" class="form-control" placeholder="Calificacion del libro" name="Calificacion" required>
                </div>
                <a href="index.php?controller=Publicaciones&action=home" class="btn btn-success   btn-lg"> Cancelar</a>
                <input type="submit" class="btn btn-primary">
            </form>
            <div class="col-16 forgot">
                 

</body>
</html>
