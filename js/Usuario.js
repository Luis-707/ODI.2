function IngresarUsuario(){

    //Comprobar que la interfaz se carga sin problemas.
    console.log('la inferfaz de actualizar datos cargo');

    //url base que direciona los servicios manejados por el controlador en ODI
    

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
  cargarVista('vistas/Admin_Usuarios.php');
  procesar('http://localhost/ODI/controlador/?ListarUsuario','listarDeUsuario(respuestaServidor)');
}

function listarDeUsuario(respuestaServidor){
  console.log(respuestaServidor);
  var datos = respuestaServidor[0];

  if ($.fn.dataTable.isDataTable('#t_usuarios')) {
        // Si la tabla ya está inicializada, actualiza sus datos
        let table = $('#t_usuarios').DataTable();
        table.clear();
        table.rows.add(datos);
        table.draw();
    } else {
  
  $('#t_usuarios').DataTable({
    data: datos,
    "targets":-1,
    "data":null,
    "columnsDefs":[{
    "defaultContent": 
      "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"

  }],
      columns: [
        { data: 'usuario_idp',title: 'CODIGO'  },
        { data: 'nombre_usuario',title: 'NOMBRE' },
        { data: 'clave',title: 'CLAVE' },
        { data: 'rol',title: 'ROL' },
        { title: 'ACCIONES' }
      ]
  });

    }

  
}

 
  