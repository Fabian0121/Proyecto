<?php


namespace UPT;


class Publicacion extends Conexion
{
    //Datos a usar
    public $id_post;
    public $nombreUsuario;
    public $categoria;
    public $fecha;
    public $titulo;
    public $contenido;
    public $calificacion;
    //constructor
    public function __constructuc()
    {
        parent::__constructuc();
    }
    //funcion crear
    function crear(){
        //Query para mandar los datos y registrarlos
        $pre = mysqli_prepare($this->con, "INSERT INTO publicaciones(nombre_usuario,categoria,fecha,Titulo,contenido,calificacion) VALUES (?,?,?,?,?,?)");
        $pre-> bind_param("ssssss",$this->nombreUsuario,$this->categoria,$this->fecha,$this->titulo,$this->contenido,$this->calificacion);
        $pre-> execute();

    }
}