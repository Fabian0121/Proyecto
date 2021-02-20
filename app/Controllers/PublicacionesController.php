<?php

require 'app/Models/Conexion.php';
require 'app/Models/Publicacion.php';
use UPT\Publicacion;
use UPT\Conexion;

class PublicacionesController
{
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
            header("Location:/Proyecto/index.php?controller=Usuario&action=Inicio");


    }
    /*
    function mostrarPublicaciones(){
        require "app/Models/Publicacion.php";
        $consulta = Publicacion::mostrarTodo();
    }*/
    //Con esta funcion mando a llamar la vista de inicio
    function inicio(){
        require "app/Views/Inicio.php";
    }
    //Con esta funcion mando a llamar la vista de editar publicacion
    function editar(){
        require "app/Views/editarPublicacion.php";
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
    //Con esta funcion llamo la vista publicacion
    function eliminar(){
        require "app/Views/eliminarPublicacion.php";
    }
    //Con esta funcion elimino una publicacion
    function eliminarPublicacion(){
        require "app/Views/eliminarPublicacion.php";
            $publicaciones = new Publicacion();
            //Mandar datps
            $publicaciones->id_post=$_POST['id'];
            $publicaciones->eliminar();
            header("Location:/Proyecto/index.php?controller=Usuario&action=Perfil");
    }
}