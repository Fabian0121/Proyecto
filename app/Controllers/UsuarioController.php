<?php
require 'app/Models/Conexion.php';
require 'app/Models/Usuario.php';
use UPT\Usuario;
use UPT\Conexion;
class UsuarioController
{
	//Esta funcion muestra la vista Registrar
	function Registro (){

		 require "app/Views/Registro.php";
	}

	function verificarRegistro (){
		//Llamo a la vista registro
		require "app/Views/Registro.php";
		$usuario = new Usuario();
		//Mandar datps
 		$usuario->nombre=$_POST['nombre'];
 		$usuario->apellidoPaterno=$_POST['apellidoP'];
 		$usuario->apellidoMaterno=$_POST['apellidoM'];
 		$usuario->fechaNacimiento=$_POST['fechaNacimiento'];
 		$usuario->correo=$_POST['correo'];
 		$usuario->contrasenia=$_POST['pass'];
 		$usuario->sexo=$_POST['sexo'];
 		$usuario->crear();
 		

	}

}
?>