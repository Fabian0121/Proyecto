<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Eliminar Perfil</title>

 
    
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
                <?php
                //con este foreach recorro los datos e inserto en los campos seleccionados
                foreach ($datos as $us) {
                    ?>
                    <form class="col-16" method="post" action="index.php?controller=Usuario&action=eliminarPer">
                        <div class="form-group"  >
                            <input type="text" class="form-control" placeholder="" name="id" value="<?php echo $us['id']?>"  readonly=»readonly» >
                        </div>
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="" name="" value="<?php echo $us['nombre']?>"  readonly=»readonly» >
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" placeholder="" name="" value="<?php echo $us['apellido_p']?>" readonly=»readonly» >
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" placeholder="" name="" value="<?php echo $us['apellido_m']?>"  readonly=»readonly»>
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" placeholder="" name="" value="<?php echo $us['nombre_usuario']?>"  readonly=»readonly»>
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" placeholder="" name="" value="<?php echo $us['correo']?>"  readonly=»readonly»>
                        </div>
                        <div class="form-group" >
                            <input type="password" class="form-control" placeholder="" name="" value="<?php echo $us['contrasenia']?>"  readonly=»readonly»>
                        </div>
                        <div class="form-group" >
                            <input type="text" class="form-control" placeholder="" name="" value="<?php echo $us['Sexo']?>"  readonly=»readonly»>
                        </div>
                        <div class="form-group" >
                            <textarea class="form-control" maxlength="320" placeholder="" name=""  readonly=»readonly»> <?php echo $us['descripcion']?></textarea>
                        </div>
                        <h6>Escribe contraseña para confirmar</h6>
                        <div class="form-group" id="contrasena-group">

                            <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                        </div>
                        <a href="index.php?controller=Usuario&action=Inicio" class="btn btn-success"> Cancelar</a>
                        <input type="submit" class="btn btn-danger">
                    </form>
                    <?php //cierro el foreach
                }
                ?>
                <div class="col-12 forgot">
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>