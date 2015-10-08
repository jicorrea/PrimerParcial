<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/voto.php");

$queHago=$_POST['queHacer'];



switch ($queHago) {

	case 'MostarLogin':
			include("partes/formIngreso.php");
		break;
	case 'MostarVotar':
			include("partes/formVotacion.php");
		break;
	case 'GrabarVoto':

			$var = new voto();

			if($var->validarDni($_POST['dni']) == null)
			{
				$var->dni = $_POST['dni'];
				$var->provincia = $_POST['provincia'];
				$var->candidato = $_POST['candidato'];
				$var->sexo = $_POST['sexo'];
				$devuelve = $var->InsertarVoto();				
				echo "<h1>Voto exitoso.</h1>"; 	
			}
			else
			{
				echo "<h1>Usted ya voto.</h1>";				
			}
	
				
		break;				
	default:
		# code...
		break;
}

 ?>