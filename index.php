<?php
if ((!isset($_GET["controller"])) || (!isset($_GET["action"]))) {
	echo "Peticion invalida";
}
$controller = $_GET["controller"]."Controller";

require 'app/Controllers/'.$controller.".php";

$action =$_GET["action"];
$objeto = new $controller();
$objeto->{$action}();
?>