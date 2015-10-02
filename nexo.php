<?php 
require_once("clases/AccesoDatos.php");
//require_once("clases/cd.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {

	case 'MostarLogin':
			include("partes/formIngreso.php");
		break;
	default:
		# code...
		break;
}

 ?>