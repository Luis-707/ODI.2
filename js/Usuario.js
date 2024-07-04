function IngresarUsuario(){

    //Comprobar que la interfaz se carga sin problemas.
    console.log('la inferfaz de actualizar datos cargo');

    //url base que direciona los servicios manejados por el controlador en ODI
    const urlBase = 'http://localhost/ODI/controlador/?';

    const servicio = 'IngresarUsuario';

    //contactena el servicio para completar la URL
    var url = urlBase+servicio;

    /* almacena en una varible en forma de cadena el metodo de respuesta que indique como se maneja 
    /* respueta del servidor o como se mostraran en las vista */
    var funcionRespuesta = 'respuestaUsuario(respuestaServidor)';

    //Se envian los datos del formulario de contrasena a la funcion para capturar datos y 
    // los almacens en la varible dataFormulario.
    var dataFormulario = capturarValoresFormulario('form_usuarios');

    console.log('Datos del formulario:', dataFormulario);

    // llamada del metodo procesar
    procesar(servicio, dataFormulario, funcionRespuesta);

}

function respuestaUsuario(respuestaServidor) {
  respuesta = mapRepuesta(respuestaServidor);
  console.log(respuesta);
}

function listarUser(){
  cargarVista('vistas/listaUsuario.php');
  procesar2('http://localhost/ODI/controlador/?Serv_listarUsuario','listarDeUsuario(respuestaServidor)');
}

function listarDeUsuario(respuestaServidor){
  console.log(respuestaServidor);
  var data = respuestaServidor[0];
  $('#exampleTabla').DataTable( {
    data: data,
    columns: [
        { data: 'id_usuario',title: 'CODIGO'  },
        { data: 'nombre_usuario',title: 'NOMBRE' },
        { data: 'categoria_usuario',title: 'CATEGORIA' },
        { data: 'tipos_permisos_',title: 'PERMISO' }
      ]
  } );
}

 
  