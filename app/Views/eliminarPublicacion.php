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
<?php
//llamo a la clase Publicacion
    use UPT\Publicacion;
    require_once ("app/Models/Publicacion.php");
//Por este valor elijo el id, el dato se recive de una URL
    $sesion= $_GET['no'];
//Mando a traer todo lo que me genere la consulta con la condicion dada
    $publicacion = Publicacion::mostrarEP($sesion);
?>

<body>
<div class="modal-dialog text-center">
    <div class="col-sm-12 main-section">
        <div class="modal-content">
             <h1>Eliminar Publicacion</h1> <hr><br><br>
            <div class="col-16 user-img">
                <img src="public/images/publicaciones.PNG">
            </div>
           
            <?php
            //con este foreach recorro los datos e inserto en los input
                 foreach ($publicacion as $pos) {
             ?> 
            <form class="col-16" method="post" action="index.php?controller=Publicaciones&action=eliminarPublicacion">
                <div class="form-group"  >
                    <input type="text" class="form-control" placeholder="" name="id" value="<?php echo $pos['id_post']?>"  readonly=»readonly» >
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="" name="Usuario" value="<?php echo $pos['nombre_usuario']?>"  readonly=»readonly» >
                </div>
                <div class="form-group" >
                    <input type="text" class="form-control" placeholder="Categoria" name="Categoria" value="<?php echo $pos['categoria']?>" readonly=»readonly» >
                </div>
                <div class="form-group" >
                    <input type="text" class="form-control" placeholder="Fecha" name="Fecha" value="<?php echo $pos['fecha']?>"  readonly=»readonly»>
                </div>
                <div class="form-group" >
                    <input type="text" class="form-control" placeholder="Titulo del libro" name="Titulo" value="<?php echo $pos['Titulo']?>"  readonly=»readonly»>
                </div>
                <div class="form-group" >
                   <textarea class="form-control" maxlength="320" placeholder="Reseña" name="Opinion"  readonly=»readonly»> <?php echo $pos['contenido']?></textarea>
                </div>
                <div class="form-group" id="contrasenia-group">
                    <input type="number" step="0.01" class="form-control" placeholder="Calificacion del libro" name="Calificacion" value="<?php echo $pos['calificacion']?>" readonly=»readonly»>
                </div>
                <a href="index.php?controller=Usuario&action=Inicio" class="btn btn-success"> Cancelar</a>
                <input type="submit" class="btn btn-danger"> 
            </form>
            <?php
            //Cierro el foreach que se abrio antes
                }
             ?> 
            <div class="col-16 forgot">
                 

</body>
</html>
