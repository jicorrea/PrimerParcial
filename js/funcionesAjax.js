
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
