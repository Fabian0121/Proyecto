<?php

require 'app/Models/Conexion.php';
require 'app/Models/Publicaciones.php';
use UPT\Publicaciones;
use UPT\Conexion;

class PublicacionesController
{
    //Esta funcion muestra la vista Registrar
    function Registro (){

        require "app/Views/CrearPublicacion.php";
    }

    function crearPublicacion (){
        //Llamo a la vista registro
        require "app/Views/CrearPublicacion.php";
        $publicaciones = new Publicaciones();
        //Mandar datps
        $publicaciones->nombreUsuario=$_POST['nombre'];
        $publicaciones->categoria=$_POST['categoria'];
        $publicaciones->fecha=$_POST['fecha'];
        $publicaciones->titulo=$_POST['titulo'];
        $publicaciones->contenido=$_POST['resena'];
        $publicaciones->calificacion=$_POST['calificacion'];
        $publicaciones->crear();


    }
}