<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8" />
    <title>Perfil</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

     <link rel="stylesheet" type="text/css" href="public/css/Perfil.css" th:href="@{/css/index.css}">


</head>
<header>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
	  <div class="navbar-header">
    	<a class="navbar-brand" href="index.php?controller=Usuario&action=home">C-SPACE</a>
  	  </div>
  	  <p class="navbar-text pull-right">
      
      Conectado como <a href="index.php?controller=Usuario&action=perfil" class="navbar-link"><?php echo $_SESSION['Usuarios'] ?></a>
      <a href="index.php?controller=Usuario&action=logout"<button type="button" class="btn btn-danger">Salir </a></button>
	</nav>
</header>
<?php
	use UPT\Usuario;
	require_once ("app/Models/Usuario.php");
	$conexion= new \UPT\Conexion();
	$sesion= $_SESSION['Usuarios'];
	$usuario = Usuario::mostrar($sesion);

?>
<body>
	<?php
         
         foreach ($usuario as $usua) {
    ?> 
 <div class="container h-100">
    
     
            <h2>ID:<?php echo $usua['id']?></h2><br>
            <h4>Nombre Usuario:<?php echo $usua['nombre_usuario']?></h4>
            <br>
            <h3>Datos usuario</h3><br>
            <p>Nombre:<?php echo $usua['nombre']?> </p>
            <br>
            <p>Apellido Paterno:<?php echo $usua['apellido_p']?> </p>
            <br>
            <p>Apellido Materno:<?php echo $usua['apellido_m']?> </p>
            <br>
            <p>Sexo: <?php echo $usua['Sexo']?></p><br>
            <p>Descripcion:<?php echo $usua['descripcion']?> </p><br>
            <div class="btn-group">
  				<a href="index.php?controller=Usuario&action=Editar&no=<?php echo $usua['id'] ?>" <button type="button" class="btn btn-primary">Editar Perfil </a> </button>
  				 
 				<a href="index.php?controller=Usuario&action=eliminar&no=<?php echo $usua['id'] ?>"<button type="button" class="btn btn-warning">Eliminar Perfil </a></button>
			</div>
 </div> 
 <?php } ?>
 <?php
	use UPT\Publicacion;
	require_once ("app/Models/Publicacion.php");
	$conexion= new \UPT\Conexion();	
	$sesion= $_SESSION['Usuarios'];

	$publicacion = Publicacion::mostrarP($sesion);
?>
<?php
         foreach ($publicacion as $pos) {
     ?> 
 <div class="container h-100">   
             <h6>Id: <?php echo $pos['id_post']?></h6>
             <h2>Autor:<?php echo $pos['nombre_usuario']?></h2>
             <h4>Fecha:<?php echo $pos['fecha']?></h4>

         
             <p> <strong>Titulo:</strong><?php echo $pos['Titulo']?></p>
             <p> <strong>Categoria:</strong><?php echo $pos['categoria']?> </p>
             <p> <strong>Calificacion</strong><?php echo $pos['calificacion']?> </p>

         
             <p> Reseña<br><?php echo $pos['contenido']?></p>  
             <div class="btn-group">
  				<a href="index.php?controller=Publicaciones&action=Editar&no=<?php echo $pos['id_post'] ?>" <button type="button" class="btn btn-primary">Editar Publicacion </a> </button>
  				 
 				<a href="index.php?controller=Publicaciones&action=eliminar&no=<?php echo $pos['id_post'] ?>" <button type="button" class="btn btn-warning">Eliminar Publicacion </a> </button>

			</div>
 </div> 
 <?php } ?>
 <a href="index.php?controller=Publicaciones&action=Registro" class="btn-flotante">Nueva Publicacion</a>
</body>
</html>