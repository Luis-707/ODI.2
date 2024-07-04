
function alergias(caso = '2') {
    const dirBase = 'http://localhost/ODI/controlador/?';
    const servicio = dirBase+'listarAlergia'; // karchivo listarAlergia.php en servicios
    
    //let funcionRespuesta = 'respuestalistarAlergias(respuestaServidor,\''+caso+'\')';
    let funcionRespuesta = 'respuestalistarAlergias(respuestaServidor)';

    var arrayData = ['1a','2f',3];

  // var dataFormulario = capturarValoresFormulario('id_formularioAlergias',caso);
   var dataFormulario = capturarValoresFormulario('id_formularioAlergias');
   procesar(servicio, dataFormulario, funcionRespuesta);
}

function respuestalistarAlergias(respuestaServer,caso) {
  respuesta = mapRepuesta(respuestaServer);
  console.log(respuesta);
}
function respuestalistarAlergia(respuestaServer) {
  var respuesta = mapRepuesta(respuestaServer); // la respuestaServer la convierto en una matriz e la varible respuesta
  console.log(respuesta);
}

function suma(){
	var servicio = 'suma.php';
	var formularioSuma = capturarValoresFormulario('idFormularioSuma');
	/*
	 * en la vista suma los campos deben tener el atributo name
	 * y el formulario debe tener el atributo id*/
	var funtionRespuesta = "resultadoSuma(respuestaServidor)"; 
}
function resultadoSuma(respServidor){
	// esta varible {respServidor} el parametro se recve en formato json,
	// var data = mapRepuesta(respuestaServer); // data sera la respuesta en una matriz
	alert(data['suma']);
	
	}

