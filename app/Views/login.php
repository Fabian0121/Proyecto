<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Inicio de Sesion</title>
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="../../public/css/login.css" th:href="@{/css/index.css}">

    </head>
    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-9 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="../../public/images/avatar.PNG">
                    </div>
                    <form class="col-12">
                        <div class="form-group" id="user-group">
                            <input type="email" class="form-control" placeholder="Correo Electronico" name="correo">
                        </div>
                        <div class="form-group" id="contrasenia-group">
                            <input type="password" class="form-control" placeholder="Contraseñia" name="correo">
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa->sign-in-alt"></i> Iniciar Sesion </button>
                    </form>
                    <div class="col-12 forgot">
                        <a href="a"> Recordar Contraseña </a> 
    	
    </body>
</html>