<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Registro</title>

    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="public/css/Registro.css" th:href="@{/css/index.css}">

</head>
<body>
<div class="modal-dialog text-center">
    <div class="col-sm-10 main-section">
        <div class="modal-content">
            <div class="col-14 user-img">
                <img src="public/images/avatar.png">
            </div>
            <h1>Registro </h1> <hr>
            <?php
            //Manda mensaje si da error o se equivoca
            if(isset($estatus)){
                echo "<h2>$estatus</h2>";
            }
            ?>
            <form class="col-12" method="post" action="index.php?controller=Usuario&action=verificarRegistro">
                <div class="form-group" >
                    <input type="text" name="nombre" placeholder="Nombre" required >
                </div>
                <div class="form-group" >
                    <input type="text" name="apellidoP" placeholder="Apellido Paterno" required>
                </div>
                <div class="form-group" >
                    <input type="text" name="apellidoM" placeholder="Apellido Materno" required>
                </div>
                <div class="form-group" >
                        <input type="text" name="nombreUsuario" placeholder="Nombre de Usuario" required>
                </div>
                <div class="form-group" >
                    <input type="email" name="correo" placeholder="Correo" required>
                </div>
                <div class="form-group" >
                    <input type="password" name="pass" placeholder="Contrasenia" required>
                </div>
                <div class="form-group" >
                    <textarea class="form-control" maxlength="320" name="descripcion" placeholder="Descripcion del usuario" required></textarea>
                </div>

                <div class="form-group" >
                    <h4>Sexo:<style="white"></h4>
                    <input type="radio" name="sexo" value="Femenino">Femenino   
                    <input type="radio" name="sexo" value="Masculino">Masculino<br>
                </div>
                <input type="submit" class="btn btn-primary"><i class="fa fa->sign-in-alt"></i>
            </form>
            <div class="col-12 forgot">
                

</body>
</html>