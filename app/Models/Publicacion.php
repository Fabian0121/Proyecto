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
    public $calificacion;
    public $contenido;

    //constructor
    public function __constructuc()
    {
        parent::__constructuc();
    }
    //funcion crear
    function crear(){
        //Query para mandar los datos y registrarlos
        $pre = mysqli_prepare($this->con, "INSERT INTO publicaciones(nombre_usuario,categoria,fecha,Titulo,contenido,calificacion) VALUES (?,?,?,?,?,?)");
        $pre-> bind_param("sssssd",$this->nombreUsuario,$this->categoria,$this->fecha,$this->titulo,$this->contenido,$this->calificacion);
        $pre-> execute();

    }
    //Funcion para mostrar datos 
    static function mostrar()
    {
        $conexion = new Conexion();
        $pre= mysqli_prepare($conexion->con, "SELECT * FROM publicaciones ORDER BY id_post DESC ");
        $pre->execute();
        $resultado = $pre->get_result();
        $publicacion=[];
        while ($objeto=mysqli_fetch_assoc($resultado)) {
               $publicacion[]=$objeto;
        }
        return $publicacion;
    }
    //Funcion para mostrar publicaciones de una sola persona en su perfil
    static function mostrarP($dato)
    {
        $conexion = new Conexion();
        $pre= mysqli_prepare($conexion->con, "SELECT * FROM publicaciones WHERE nombre_usuario=? ORDER BY id_post DESC");
        $pre-> bind_param("s",$dato);
        $pre->execute();
        $usuario=[];
        $resultado = $pre->get_result();
        while ($objeto=mysqli_fetch_assoc($resultado)) {
               $usuario[]=$objeto;
        }
        return $usuario;
    }
    //funcion para mostrar datos en la pantalla de editar o eliminar
    static function mostrarEP($dato)
    {
        $conexion = new Conexion();
        $pre= mysqli_prepare($conexion->con, "SELECT * FROM publicaciones WHERE id_post=? ");
        $pre-> bind_param("s",$dato);
        $pre->execute();
        $resultado = $pre->get_result();
        while ($objeto=mysqli_fetch_assoc($resultado)) {
               $post[]=$objeto;
        }
        return $post;
    }
    //funcion para editar una publicacion
    function editarPublicacion(){
        $pre = mysqli_prepare($this->con, "UPDATE publicaciones SET nombre_usuario=?,categoria=?,fecha=?,Titulo=?,contenido=?,calificacion=? WHERE id_post=? ");
        $pre-> bind_param("sssssds",$this->nombreUsuario,$this->categoria,$this->fecha,$this->titulo,$this->contenido,$this->calificacion,$this->id_post);
        $pre-> execute();
    }
    //Funcion para eliminar una publicacion
    function eliminar()
    {
        $conexion = new Conexion();
        $pre= mysqli_prepare($conexion->con, "DELETE FROM  publicaciones WHERE id_post=? ");
        $pre->bind_param("s",$this->id_post);
        $pre->execute();
    }

}