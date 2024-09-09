function ActualizarFactor(){

    //Comprobar que la interfaz se carga sin problemas.
    console.log('la inferfaz de actualizar datos cargo');

    //url base que direciona los servicios manejados por el controlador en ODI
    //const urlBase = 'http://localhost/ODI/controlador/?';

    const servicio = 'ActualizarFactor';

    //contactena el servicio para completar la URL
    var url = urlBase+servicio;

    /* almacena en una varible en forma de cadena el metodo de respuesta que indique como se maneja 
    /* respueta del servidor o como se mostraran en las vista */
    var funcionRespuesta = 'respuestaFactor(respuestaServidor)';

    //Se envian los datos del formulario de contrasena a la funcion para capturar datos y 
    // los almacens en la varible dataFormulario.
    var dataFormulario = capturarValoresFormulario('form_fac_actualizar');

    console.log('Datos del formulario:', dataFormulario);

    // llamada del metodo procesar
    procesar(servicio, dataFormulario, funcionRespuesta);

}

function respuestaFactor(respuestaServidor) {
  respuesta = mapRepuesta(respuestaServidor);
  console.log(respuesta);
}

function listarFac(){
  cargarVista('vistas/ListaFactor.php');
  procesar2('http://localhost/ODI/controlador/?ListarFactor','listar_Factor(respuestaServidor)');
}

function listar_Factor(respuestaServidor){
  console.log(respuestaServidor);
  var data = respuestaServidor[0];
  $('#t_factor').DataTable( {
    data: data,
    columns: [
        { data: 'fac_id',title: 'ID'  },
        { data: 'codigo',title: 'CODIGO'  },
        { data: 'nombre_factor',title: 'NOMBRE DE FACTOR' },
        { data: 'status',title: 'STATUS' },
        { data: 'porcentaje',title: 'PORCENTAJE' }
      ]
  } );
}

