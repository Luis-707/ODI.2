function IngresarODI(){

    //Comprobar que la interfaz se carga sin problemas.
    console.log('la inferfaz de actualizar datos cargo');

    //url base que direciona los servicios manejados por el controlador en ODI
    

    const servicio = 'ODI';

    //contactena el servicio para completar la URL
    var url = urlBase+servicio;

    /* almacena en una varible en forma de cadena el metodo de respuesta que indique como se maneja 
    /* respueta del servidor o como se mostraran en las vista */
    var funcionRespuesta = 'respuestaUsuario(respuestaServidor)';

    //Se envian los datos del formulario de contrasena a la funcion para capturar datos y 
    // los almacens en la varible dataFormulario.
    var dataFormulario = capturarValoresFormulario('form_odi');

    console.log('Datos del formulario:', dataFormulario);

    // llamada del metodo procesar
    procesar(servicio, dataFormulario, funcionRespuesta);

}

function respuestaUsuario(respuestaServidor) {
  respuesta = mapRepuesta(respuestaServidor);
  console.log(respuesta);
}


function listar_ODI(){
  cargarVista('vistas/ODI.php');
  procesar('http://localhost/ODI/controlador/?Listar_ODI','listarODI(respuestaServidor)');
}

function listarODI(respuestaServidor){
  console.log(respuestaServidor);
  var datos = respuestaServidor[0];

  if ($.fn.dataTable.isDataTable('#t_odi')) {
    // Si la tabla ya está inicializada, actualiza sus datos
    let table = $('#t_odi').DataTable();
    table.clear();
    table.rows.add(datos);
    table.draw();
} else {
    // Si la tabla no está inicializada, inicialízala
    // los nombres de data tien que coincidir con los de los campos de la consulta no 
    // para aqgreagar otro campo  { data: 'nombre_Del_campo' } de la la base de datos.
  $('#t_odi').DataTable( {
    data: datos,
    columns: [
        { data: 'odi_id',title: 'ID'  },
        { data: 'nombre_odi',title: 'NOMBRE DE ODI' },
        { data: 'peso',title: 'PESO' },
        { data: 'status',title: 'STATUS' }
      ],
  });

}
}