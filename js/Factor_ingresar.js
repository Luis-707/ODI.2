function IngresarFactor(){

    //Comprobar que la interfaz se carga sin problemas.
    console.log('la inferfaz de actualizar datos cargo');

    //url base que direciona los servicios manejados por el controlador en ODI
    

    const servicio = 'IngresarFactor';

    //contactena el servicio para completar la URL
    var url = urlBase+servicio;

    /* almacena en una varible en forma de cadena el metodo de respuesta que indique como se maneja 
    /* respueta del servidor o como se mostraran en las vista */
    var funcionRespuesta = 'respuestaFactor(respuestaServidor)';

    //Se envian los datos del formulario de contrasena a la funcion para capturar datos y 
    // los almacens en la varible dataFormulario.
    var dataFormulario = capturarValoresFormulario('form-fac');

    console.log('Datos del formulario:', dataFormulario);

    // llamada del metodo procesar
    procesar(servicio, dataFormulario, funcionRespuesta);

}

function respuestaUsuario(respuestaServidor) {
  respuesta = mapRepuesta(respuestaServidor);
  console.log(respuesta);
}


function listarFactores(){
  cargarVista('vistas/Factores.php');
  procesar('http://localhost/ODI/controlador/?Listar_Factores','listarFac(respuestaServidor)');
}

function listarFac(respuestaServidor){
  console.log(respuestaServidor);
  var datos = respuestaServidor[0];

  if ($.fn.dataTable.isDataTable('#t_factor')) {
    // Si la tabla ya está inicializada, actualiza sus datos
    let table = $('#t_factor').DataTable();
    table.clear();
    table.rows.add(datos);
    table.draw();
} else {
    // Si la tabla no está inicializada, inicialízala
    // los nombres de data tien que coincidir con los de los campos de la consulta no 
    // para aqgreagar otro campo  { data: 'nombre_Del_campo' } de la la base de datos.
  $('#t_factor').DataTable( {
    data: datos,
    columns: [
        { data: 'factor_id',title: 'ID'  },
        { data: 'codigo',title: 'CODIGO_FACTOR'  },
        { data: 'cargo_asig',title: 'CARGO' },
        { data: 'nombre_factor',title: 'NOMBRE DE FACTOR' },
        { data: 'porcentaje',title: 'PUNTUACION' },
        { data: 'status',title: 'STATUS' }
      ],
  });

}
}