function IngresarAspecto(){

    //Comprobar que la interfaz se carga sin problemas.
    console.log('la inferfaz de actualizar datos cargo');

    //url base que direciona los servicios manejados por el controlador en ODI
    

    const servicio = 'IngresarAspecto';

    //contactena el servicio para completar la URL
    var url = urlBase+servicio;

    /* almacena en una varible en forma de cadena el metodo de respuesta que indique como se maneja 
    /* respueta del servidor o como se mostraran en las vista */
    var funcionRespuesta = 'respuestaAspecto(respuestaServidor)';

    //Se envian los datos del formulario de contrasena a la funcion para capturar datos y 
    // los almacens en la varible dataFormulario.
    var dataFormulario = capturarValoresFormulario('form_Aspecto');

    console.log('Datos del formulario:', dataFormulario);

    // llamada del metodo procesar
    procesar(servicio, dataFormulario, funcionRespuesta);

}

function respuestaAspecto(respuestaServidor) {
  respuesta = mapRepuesta(respuestaServidor);
  console.log(respuesta);
}


function listarAspectos(){
  cargarVista('vistas/Aspectos.php');
  procesar('http://localhost/ODI/controlador/?Listar_Aspectos','listarAspectos(respuestaServidor)');
}

function listarAspectos(respuestaServidor){
  console.log(respuestaServidor);
  var datos = respuestaServidor[0];

  if ($.fn.dataTable.isDataTable('#t_aspecto')) {
    // Si la tabla ya está inicializada, actualiza sus datos
    let table = $('#t_aspecto').DataTable();
    table.clear();
    table.rows.add(datos);
    table.draw();
} else {
    // Si la tabla no está inicializada, inicialízala
    // los nombres de data tien que coincidir con los de los campos de la consulta no 
    // para aqgreagar otro campo  { data: 'nombre_Del_campo' } de la la base de datos.
  $('t_aspecto').DataTable( {
    data: datos,
    columns: [
        { data: 'aspecto_id',title: 'ID'  },
        { data: 'codigo',title: 'CODIGO'  },
        { data: 'nombre_aspecto',title: 'NOMBRE DE ASPECTO' },
        { data: 'porcentaje',title: 'PORCENTAJE' },
        { data: 'status',title: 'STATUS' }
      ],
  });

}
}