<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8" />
    <title>Inicio</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     <link rel="stylesheet" type="text/css" href="public/css/Inicio.css" th:href="@{/css/index.css}">


</head>
<header>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
	  <div class="navbar-header">
      <h1>	<a class="navbar-brand" href="index.php?controller=Usuario&action=home">C-SPACE</a> </h1>
  	  </div>
  	  <p class="navbar-text pull-right">
         Conectado como <a href="index.php?controller=Usuario&action=perfil" class="navbar-link"><?php echo $_SESSION['Usuarios'] ?></a>
	  </p>
	</nav>
</header>
<?php
use UPT\Publicacion;
require_once ("app/Models/Publicacion.php");
$conexion= new \UPT\Conexion();
$publicacion = Publicacion::mostrar();
?>
<body>	

<?php
         foreach ($publicacion as $pos) {
     ?> 
 <div class="container h-100">
    
             <h6>Id:POST <?php echo $pos['id_post']?></h6>
             <h2>Autor:<?php echo $pos['nombre_usuario']?></h2>
             <h4>Fecha:<?php echo $pos['fecha']?></h4>

         
             <p> <strong>Titulo:</strong><?php echo $pos['Titulo']?></p>
             <p> <strong>Categoria:</strong><?php echo $pos['categoria']?> </p>
             <p> <strong>Calificacion</strong><?php echo $pos['calificacion']?> </p>

         
             <p> Reseña<br><?php echo $pos['contenido']?></p>  
 </div> 
 <?php } ?>
 
 <a href="index.php?controller=Publicaciones&action=Registro" class="btn-flotante">Nueva Publicacion</a>
</body>
</html>