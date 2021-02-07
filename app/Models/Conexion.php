<?php

namespace UPT;

class Conexion
{

	public $con;
	public function __construct()
	{
	    $host ='localhost';
	    $usuario ='root';
	    $contrasenia = '';
	    $base ='proyecto';
		$this->con = mysqli_connect($host, $usuario, $contrasenia, $base);
 		mysqli_query($this->con,"SET NAMES 'utf8'");

	}
}
?>