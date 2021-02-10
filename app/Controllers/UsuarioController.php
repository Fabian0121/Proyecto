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

	function login (){
		require "app/Views/login.php";
	}
	function verificarlogin(){
		if((!isset($_POST["correo"]) || (!isset($_POST["pass"])))){

		}

		$correo=$_POST['correo'];
 		$contrasenia=$_POST['pass'];

 		/*echo "correo";
 		echo "<br> pass";*/
 		$verificar = Usuario::verificarUsuario($correo,$contrasenia);
 		if($verificar){
            require "app/Views/Inicio.php";
        }else{
            $estatus = "Datos incorrectos";
            require "app/Views/login.php";
        }

	}

}
?>