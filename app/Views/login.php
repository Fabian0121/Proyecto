
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Inicio sesion</title>

 
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="public/css/login.css" th:href="@{/css/index.css}">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="public/images/avatar.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" method="post" action="index.php?controller=Usuario&action=verificarlogin">
                    <?php
                        if(isset($estatus)){
                         echo "<h2>$estatus</h2>";
                      }
                    ?>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre usuario" name="nomUsuario"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="pass"/>
                    </div>
                    <input type="submit" name="Iniciar Sesion">
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>