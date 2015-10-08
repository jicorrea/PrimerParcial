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
	case 'Mostartabla':
			include("partes/formTabla.php");
		break;
	case 'GrabarVoto':

			$var = new voto();
			//$var->idVoto = $_POST['idVoto'];	
			if($_POST['idVoto'] == "")
			{
				$var->dni = $_POST['idVoto'];
				$var->dni = $_POST['dni'];
				$var->provincia = $_POST['provincia'];
				$var->candidato = $_POST['candidato'];
				$var->sexo = $_POST['sexo'];
				$devuelve = $var->InsertarVoto();				
				//echo "<h1>Voto exitoso.</h1>"; 
				//include("php/deslogearUsuario.php");

			}
			else
			{
				//faltaModificar
				
			}			
		break;
			case 'TraerVoto':
			$var = new voto();
			$var1 = $var->validarDni($_POST['idVoto']);		
			
			echo json_encode($var1) ;
		break;				
	default:
		# code...
		break;
}

 ?>