
function MostarLogin()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//$("#informe").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno){
	//	$("#botonesABM").html(":(");
		//$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}


function GrabarVoto()
{
	var varDni = $("#dni").val();
	var varProvincia = $("#provincia").val();
	var varCandidato = $("#candidato").val();
	var varSexo = $("#sexo").val();

	var funcionAjax = $.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"GrabarVoto",dni:varDni,provincia:varProvincia,candidato:varCandidato,sexo:varSexo}
	});

	funcionAjax.done(function(retorno){
										//$("#principal").html(retorno);
										deslogear();
										MostarVotar();
										});
	funcionAjax.fail(function(retorno){
										$("#principal").html(retorno);
										//muestro el error
										});

} 

function GrabarVoto()
{

	var varidVoto = $("#idVoto").val();
	var varDni = $("#dni").val();
	var varProvincia = $("#provincia").val();
	var varCandidato = $("#candidato").val();
	var varSexo = $("#sexo").val();
	alert(varidVoto);
	var funcionAjax = $.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"GrabarVoto",idVoto:varidVoto,dni:varDni,provincia:varProvincia,candidato:varCandidato,sexo:varSexo}
	});

	funcionAjax.done(function(retorno){
										//$("#principal").html(retorno);
										deslogear();
										MostarVotar();
										});
	funcionAjax.fail(function(retorno){
										$("#principal").html(retorno);
										//muestro el error
										});

} 

function EditarVoto(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerVoto",
			idVoto:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
										//alert(retorno);
										var voto =JSON.parse(retorno);	

										$("#idVoto").val(voto.idVoto);
										$("#dni").val(voto.dni);
										$("#provincia").val(voto.provincia);
										$("#candidato").val(voto.candidato);
										$("#sexo").val(voto.sexo);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	

	MostarVotar();
}

function MostarVotar()
{
	var funcionAjax = $.ajax({
								url:"nexo.php",
								type:"post",
								data:{queHacer:"MostarVotar"}
								});

	funcionAjax.done(function(retorno){
										$("#principal").html(retorno);
										});
	funcionAjax.fail(function(retorno){
										//muestro el error
										});
}

function MostarTabla()
{

	var funcionAjax = $.ajax({
								url:"nexo.php",
								type:"post",
								data:{queHacer:"Mostartabla"}
								});

	funcionAjax.done(function(retorno){
										$("#principal").html(retorno);
										});
	funcionAjax.fail(function(retorno){
										//muestro el error
										});
}
