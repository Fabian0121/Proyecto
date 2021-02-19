<?php

namespace UPT;

class Usuario extends Conexion
{
	//Datos a usar
	public $id;
	public $nombre;
	public $apellidoPaterno;
	public $apellidoMaterno;
	public $nombreUsuario;
	public $correo;
	public $contrasenia;
	public $sexo;
	public $descripcion;
	public $password;
	//constructor
	public function __constructuc()
	{
		parent::__constructuc();
	}
	//funcion crear
	function crear()
	{
		//Query para mandar los datos y registrarlos
		$pre = mysqli_prepare($this->con, "INSERT INTO usuario_datos(nombre,apellido_p,apellido_m,nombre_Usuario,correo,contrasenia,sexo,descripcion) VALUES (?,?,?,?,?,?,?,?)");
		$pre-> bind_param("ssssssss",$this->nombre,$this->apellidoPaterno,$this->apellidoMaterno,$this->nombreUsuario,$this->correo,$this->contrasenia,$this->sexo,$this->descripcion);
		$pre-> execute();

	}
	//Funcion para login
	static function verificarUsuario($nomUsuario,$contrasenia)
	{
		$conexion = new Conexion();
		$pre = mysqli_prepare($conexion->con, "SELECT * FROM usuario_datos WHERE nombre_usuario = ? AND contrasenia = ? ");
		$pre-> bind_param("ss",$nomUsuario,$contrasenia);
		$pre-> execute();
		$resultado = $pre->get_result();
        return $resultado->fetch_object();
	}
	//funcion para editar a un usuario
	function editarUsuario()
	{
        $pre = mysqli_prepare($this->con, "UPDATE usuario_datos SET nombre=?,apellido_p=?,apellido_m=?,nombre_Usuario=?,correo=?,contrasenia=?,sexo=?,descripcion=? WHERE id=? ");
        $pre-> bind_param("sssssssss",$this->nombre,$this->apellidoPaterno,$this->apellidoMaterno,$this->nombreUsuario,$this->correo,$this->contrasenia,$this->sexo,$this->descripcion,$this->id);
        $pre-> execute();
    }
    //Funcion para mostrar los datos de una persona en su perfil
    static function mostrar($dato)
    {
    	$conexion = new Conexion();
    	$pre= mysqli_prepare($conexion->con, "SELECT * FROM usuario_datos WHERE nombre_usuario=?");
        $pre-> bind_param("s",$dato);
    	$pre->execute();
    	$resultado = $pre->get_result();
    	while ($objeto=mysqli_fetch_assoc($resultado)) {
    		   $usuario[]=$objeto;
    	}
        return $usuario;
    }
    //Funcion para eliminar a una persona de la BD
    function eliminar()
    {
    	$conexion = new Conexion();
    	$pre= mysqli_prepare($conexion->con, "DELETE FROM  usuario_datos WHERE id=? AND contrasenia=?");
    	$pre->bind_param("ss", $this->id,$this->contrasenia);
    	$pre->execute();

    }
}

?>