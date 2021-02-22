<?php

require 'app/Models/Conexion.php';
require 'app/Models/Publicacion.php';
use UPT\Publicacion;
use UPT\Conexion;

class PublicacionesController
{
    //se usa para verficar si se inicio sesion
    public function __construct (){
        if ($_GET["action"]=="home") {
            if (!isset($_SESSION["Usuarios"])) {
                echo "No hay sesion";
                header("Location:/Proyecto/index.php?controller=Publicaciones&action=home");
                
            }
        }
    }
    //Mostrar publicaciones en inicio
    function home(){
        $publicacion = Publicacion::mostrar();
        require "app/Views/Inicio.php";
    }
    //Esta funcion muestra la vista Registrar
    function Registro (){

        require "app/Views/Publicaciones.php";
    }
    //con esta funcion creo una nueva publicacion
    function crearPublicacion (){
        //Llamo a la vista registro
        require "app/Views/Publicaciones.php";
        $publicaciones = new Publicacion();
            //Mandar datps
            $publicaciones->nombreUsuario=$_SESSION['Usuarios'];
            $publicaciones->categoria=$_POST['Categoria'];
            $publicaciones->fecha=$_POST['Fecha'];
            $publicaciones->titulo=$_POST['Titulo'];
            $publicaciones->calificacion=$_POST['Calificacion'];
            $publicaciones->contenido=$_POST['Opinion'];
            $publicaciones->crear();
            header("Location:/Proyecto/index.php?controller=Publicaciones&action=home");


    }
    //Muestro publicaciones en el perfil
    function mostrarPublicaciones(){
        $dato=$_SESSION['Usuarios'];
        $publicacion = Publicacion::mostrarP($dato);
        require "app/Models/Publicacion.php";
        
    }
    //Con esta funcion mando a llamar la vista de inicio
    function inicio(){
        require "app/Views/Inicio.php";
    }
    //Muestra los datos en el apartado de editar perfil
    function mostrarDatos(){
        $dato=$_GET['no'];
        $publicacion = Publicacion::mostrarEP($dato);
        require 'app/Views/editarPublicacion.php';
    }
    //con esta funcion edito  publicacion
    function editarPost(){
            require "app/Views/editarPublicacion.php";
            $publicaciones = new Publicacion();
            //Mandar datps
            $publicaciones->id_post=$_POST['id'];
            $publicaciones->nombreUsuario=$_POST['Usuario'];
            $publicaciones->categoria=$_POST['Categoria'];
            $publicaciones->fecha=$_POST['Fecha'];
            $publicaciones->titulo=$_POST['Titulo'];
            $publicaciones->contenido=$_POST['Opinion'];
            $publicaciones->calificacion=$_POST['Calificacion'];
            $publicaciones->editarPublicacion();
            header("Location:/Proyecto/index.php?controller=Usuario&action=Perfil");

    }
    //Muestra los datos en el apartado de eliminar perfil
    function mostrarDatos2(){
        $dato=$_GET['no'];
        $publicacion = Publicacion::mostrarEP($dato);
        require 'app/Views/eliminarPublicacion.php';
    }    
    //Con esta funcion elimino una publicacion
    function eliminarPublicacion(){
        require "app/Views/eliminarPublicacion.php";
            $publicaciones = new Publicacion();
            //Mandar datps
            $publicaciones->id_post=$_POST['id'];
            $publicaciones->eliminar();
            header("Location:/Proyecto/index.php?controller=Publicaciones&action=home");
    }
}