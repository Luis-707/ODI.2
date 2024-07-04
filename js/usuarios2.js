const dirBase = 'http://localhost/ODI/controlador/?';
const servicios = {
  'Serv_ingresarUsuario': dirBase+'Serv_ingresarUsuario',
  'Serv_actualizarUsuario': dirBase+'Serv_actualizarUsuario',
  'Serv_eliminarUsuario': dirBase+'Serv_eliminarUsuario',
  'Serv_listarUsuarios': dirBase+'Serv_listarUsuarios'
};

const servicio = servicios[action.value];
let funcionRespuesta = 'respuestaUsuario(respuestaServidor)';

var arrayData = ['1a','2f',3];

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData();
  formData.append('nombre_usuario', nombre_usuario.value);
  formData.append('contrasena', contrasena.value);
  formData.append('categoria_usuario', categoria.value);
  formData.append('tipos_permisos_', modulo.value);

  switch (action.value) {
    case '1':
      // Registrar
      procesar(servicio, formData, funcionRespuesta);
      break;
    case '2':
      // Actualizar
      procesar(servicio, formData, funcionRespuesta);
      break;
    case '3':
      // Eliminar
      procesar(servicio, formData, funcionRespuesta);
      break;
    default:
      console.log('No se ha seleccionado una acción');
  }
});

function procesar(servicio, data, metodoRespuesta) {
  if (!servicio) {
    throw new Error('Servicio no definido');
  }
  if (!data || !(data instanceof FormData)) {
    throw new Error('Data no es un objeto FormData');
  }
  if (!metodoRespuesta) {
    throw new Error('Metodo de respuesta no definido');
  }

  fetch(servicio, {
    method: 'POST',
    body: data
  })
  .then(response => response.text())
  .then(data => eval(metodoRespuesta))
  .catch(error => console.error(error));
}

function respuestaUsuario(respuestaServer) {
  respuesta = mapRepuesta(respuestaServer);
  console.log(respuesta);
}

function mapRepuesta(req) {
  var respuesta = [];
  if (!Array.isArray(req)) { // no es un array?
    respuesta.push(req);
  } else {
    respuesta = mapArrayRepuesta(req);
  }
  return respuesta;
}

function mapArrayRepuesta(req) {
  var respuesta = [];
  respuesta = req.map(obj => {
    const result = {};
    for (const key in obj) {
      result[key] = obj[key];
    }
    return result;
  });
  return respuesta;
}