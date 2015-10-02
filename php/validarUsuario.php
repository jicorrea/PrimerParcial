<?php 
session_start();
$usuario=$_POST['dniLogin'];


$retorno;

if($usuario>=10 && $usuario<=100)
{			
	//if($recordar=="true")
	//{
		//setcookie("registro",$usuario,  time()+36000 , '/');
		
/*	}else
	{
		//setcookie("registro",$usuario,  time()-36000 , '/');
		
	}*/
	$_SESSION['registrado']=$usuario;
	$retorno= $usuario;

	
}else
{
	$retorno= "No-esta";
}

echo $retorno;
?>