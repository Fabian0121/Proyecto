<?php

namespace UPT;

class Publicaciones extends Conexion
{
	//Datos a usar
	//public $id_post;
	public $nombreUsuario;
	public $categoria;
	public $fecha;
	public $titulo;
	public $contenido;
	public $calificacion;
	//constructor
	//hola
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
	/*
	//Funcion para login
	static function verificarUsuario($correo,$contrasenia){
		/*echo "correo";
		echo "<br> contrasenia";//
		$conexion = new Conexion();
		$pre = mysqli_prepare($conexion->con, "SELECT * FROM usuario_datos WHERE correo = ? AND contrasenia = ? ");
		$pre-> bind_param("ss",$correo,$contrasenia);
		$pre-> execute();
		$resultado = $pre->get_result();
        return $resultado->fetch_object();
	}
	*/

}

?>