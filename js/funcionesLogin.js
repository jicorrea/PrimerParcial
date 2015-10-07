function validarLogin()
{
		var varUsuario=$("#dni").val();
		//alert(varUsuario);
	
	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{dniLogin:varUsuario}
	});


	funcionAjax.done(function(retorno){
		//alert(retorno);
			if(retorno!="No-esta"){	
				//MostarBotones();
				MostarLogin(); //EN CASO DE ESTAR LOGEADO ME VUELVO A LLAMAR PARA VALIDARs

			//	$("#BotonLogin").html("Ir a salir<br>-Sesión-");
			//	$("#BotonLogin").addClass("btn btn-danger");				
			$("#actual").html(retorno);
			}else
			{
//ALERT Y EL ERROR
			}
	});
	funcionAjax.fail(function(retorno){
		//$("#botonesABM").html(":(");
		//$("#informe").html(retorno.responseText);	
	});
	
}
function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			MostarBotones();
			MostarLogin();
			//$("#actual").html("AlumnoNombre.Apellido");
			
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");
			
	});	
}
function MostarBotones()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarBotones"}
	});
	funcionAjax.done(function(retorno){
		$("#botonesABM").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}
