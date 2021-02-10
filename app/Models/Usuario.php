<?php

namespace UPT;

class Usuario extends Conexion
{
	//Datos a usar
	public $id;
	public $nombre;
	public $apellidoPaterno;
	public $apellidoMaterno;
	public $fechaNacimiento;
	public $correo;
	public $contrasenia;
	public $sexo;
	//constructor
	//hola
	public function __constructuc()
	{
		parent::__constructuc();
	}
	//funcion crear
	function crear(){
		//Query para mandar los datos y registrarlos
		$pre = mysqli_prepare($this->con, "INSERT INTO usuario_datos(nombre,apellido_p,apellido_m,fecha_nacimiento,correo,contrasenia,sexo) VALUES (?,?,?,?,?,?,?)");
		$pre-> bind_param("sssssss",$this->nombre,$this->apellidoPaterno,$this->apellidoMaterno,$this->fechaNacimiento,$this->correo,$this->contrasenia,$this->sexo);
		$pre-> execute();

	}
	//Funcion para login
	static function verificarUsuario($correo,$contrasenia){
		/*echo "correo";
		echo "<br> contrasenia";*/
		$conexion = new Conexion();
		$pre = mysqli_prepare($conexion->con, "SELECT * FROM usuario_datos WHERE correo = ? AND contrasenia = ? ");
		$pre-> bind_param("ss",$correo,$contrasenia);
		$pre-> execute();
		$resultado = $pre->get_result();
        return $resultado->fetch_object();
	}

}

?>