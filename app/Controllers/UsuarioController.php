<?php
require 'app/Models/Conexion.php';
require 'app/Models/Usuario.php';
require 'app/Models/Publicacion.php';
use UPT\Publicacion;
use UPT\Usuario;
use UPT\Conexion;
class UsuarioController 
{
	//se usa para verficar si se inicio sesion
	public function __construct (){
		if ($_GET["action"]=="home") {
			if (!isset($_SESSION["Usuarios"])) {
				echo "No hay sesion";
				header("Location:/Proyecto/index.php?controller=Usuario&action=vistahome");
				
			}
		}
	}
	//Esta funcion muestra la vista Registrar
	function Registro (){

		 require "app/Views/Registro.php";
	}
	//Con esta funcion mando a llamar la vista de inicio
	function inicio (){
		require "app/Views/Inicio.php";
	}
	//Con esta funcion hago un registro
	function verificarRegistro (){
		//Llamo a la vista registro
		require "app/Views/Registro.php";
		$usuario = new Usuario();
		//Mandar datps
 		$usuario->nombre=$_POST['nombre'];
 		$usuario->apellidoPaterno=$_POST['apellidoP'];
 		$usuario->apellidoMaterno=$_POST['apellidoM'];
 		$usuario->nombreUsuario=$_POST['nombreUsuario'];
 		$usuario->correo=$_POST['correo'];
 		$usuario->contrasenia=$_POST['pass'];
 		$usuario->sexo=$_POST['sexo'];
 		$usuario->descripcion=$_POST['descripcion'];
 		$usuario->crear();
 		header("Location:/Proyecto/index.php?controller=Usuario&action=login");

	}
	//Muestra los datos en el apartado de editar perfil
	function mostrarDatos(){
		$dato=$_GET['no'];
		$datos = Usuario::mostrarEditar($dato);
		require 'app/Views/editarPerfil.php';
	}
	//Muestra los datos en el apartado de eliminar perfil
	function mostrarDatos2(){
		$dato=$_GET['no'];
		$datos = Usuario::mostrarEditar($dato);
		require 'app/Views/eliminarP.php';
	}
	//Con esta funcion llamo a la venta Pinicio que es la que se muestra al entrar
	public function vistahome (){
		require "app/Views/Pinicio.php";
	}
	//Con esta funcion llamo a la vista login
	function login (){
		require "app/Views/login.php";
	}
	//Con esta funcion compruebo si los datos introducidos son correctos
	function verificarlogin(){
		//Verificar si estan los datos
		if((!isset($_POST["nomUsuario"]) || (!isset($_POST["pass"])))){

		}
		//Variables a usar
		$nomUsuario=$_POST['nomUsuario'];
 		$contrasenia=$_POST['pass'];
 		//Se llama al metodo y pasan parametros
 		$verificar = Usuario::verificarUsuario($nomUsuario,$contrasenia);
 		if(!$verificar){
 			 $estatus = "Datos incorrectos";
 			require "app/Views/login.php";

        }else{
           
 		   // $_SESSION['Usuarios']=$verificar;
        	$_SESSION['Usuarios']=$nomUsuario;
            header("Location:/Proyecto/index.php?controller=Publicaciones&action=home");
        }

	}
	//se usa para cerrar sesion
	public function logout(){
		

 		    SESSION_DESTROY();
 		    if(isset($_SESSION['Usuarios']))
 		    unset($_SESSION['Usuarios']);
 			$_SESSION['Usuarios']=false;

 			header("Location:/Proyecto/index.php?controller=Usuario&action=home");
	}

	//llamo a la vista perfil
    function perfil (){
    	 $dato=$_SESSION['Usuarios'];
		 $datos = Usuario::mostrar($dato);
    	 require "app/Views/Perfil.php";
    }
    //Funcion para editar perfil
    function editarPerfil(){
    	//Llamo a la vista editar perfil
    	require "app/Views/EditarPerfil.php";
 		$usuario = new Usuario();
		//Paso datos
 		$usuario->nombre=$_POST['nombre'];
 		$usuario->apellidoPaterno=$_POST['apellido_p'];
 		$usuario->apellidoMaterno=$_POST['apellido_m'];
 		$usuario->nombreUsuario=$_POST['nom_usuario'];
 		$usuario->correo=$_POST['correo'];
 		$usuario->contrasenia=$_POST['contrasenia'];
 		$usuario->sexo=$_POST['sexo'];
 		$usuario->descripcion=$_POST['descripcion'];
 		$usuario->id=$_POST['id'];
 		$usuario->contrasenia['password'];
 		$usuario->editarUsuario();
        header("Location:/Proyecto/index.php?controller=Publicaciones&action=home");	
    }
    //Mando a la pantalla inicio
    function home(){
    	require "app/Views/Inicio.php";
    }
    //Llamo a eliminar Perfil para borrarlo
    function eliminarPer(){
        require "app/Views/eliminarP.php";
        $usuario = new Usuario();
        //Mandar datps
        $usuario->id=$_POST['id'];
        $usuario->contrasenia=$_POST['password'];
        $usuario->eliminar();
        if(isset($_SESSION['Usuarios']))
            unset($_SESSION['Usuarios']);
        $_SESSION['Usuarios']=false;

        header("Location:/Proyecto/index.php?controller=Usuario&action=star");
    }
    //Con esta funcion regreso a la pantalla de inicio donde esta la opcion de loguearse o registrarse
    function star(){
        require "app/Views/Pinicio.php";
    }


}
?>