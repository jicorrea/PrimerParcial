<?php 
session_start();
$usuario=$_POST['dniLogin'];


$retorno;

if($usuario>=1000000 && $usuario<=99000000)
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