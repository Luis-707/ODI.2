
function capturarValoresFormulario(idFormulario, otrosDatos = '') {
  const form = document.getElementById(idFormulario);
  if (!form) {
    throw new Error(`Formulario con ID '${idFormulario}' no encontrado`);
  }
  const formData = new FormData(form);
  if (typeof otrosDatos == 'string') {//alert('cadena');
    formData.append('otrosDatos', otrosDatos);

    
  } else if (Array.isArray(otrosDatos)) { //console.log(otrosDatos);
    /* for (let i = 0; i < otrosDatos.length; i++) {
      //alert(otrosDatos[i]);
      formData.append("otrosDatos["+i+"]", otrosDatos[i]);
    }*/
    formData.append("otrosDatos", JSON.stringify(otrosDatos));

  } else {
    throw new Error('otrosDatos debe ser cadena string o array');
}

  return formData;
}

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
  
    const urlBase = 'http://localhost/ODI/controlador/?';
  
    const urlGet = urlBase+servicio;
  
    fetch(urlGet, {
      method: 'POST',
     /* headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },*/
      body: data
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('Error en la solicitud POST.');
        }
        return response.json();
      })
      .then(respuestaServidor => {
        // respuesta
        //metodoRespuesta(data);
        eval(metodoRespuesta);
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }

  async function procesar2(urlServicio, metodoRespuesta, data = new FormData()) {
    // if (typeof data === 'string' && data.length === 0) {
    //   var data = new FormData();
    // } 
  

      if (!data || !(data instanceof FormData)) {
        throw new Error('Data no es un objeto FormData');
      }
      if (!metodoRespuesta) {
        throw new Error('Metodo de respuesta no definido');
      }
    
      //const urlBase = 'http://localhost/ODI/controlador/?';
    
      const urlGet = urlServicio;
  
      //console.log('URL completa:', urlGet);
    
      await fetch(urlGet, {
        method: 'POST',
        /* headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },*/
        body: data
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Error en la solicitud POST.');
          }
          return response.json();
        })
        .then(respuestaServidor => {
          // respuesta
          //metodoRespuesta(data);
          eval(metodoRespuesta);
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

function mapRepuesta(req){
  var respuesta = [];
  if (!Array.isArray(req)) { 
    respuesta.push(req);
  }else{
    respuesta=mapArrayRepuesta(req);
  }
  return respuesta;
}

function mapArrayRepuesta(req){
  var respuesta = [];
  respuesta =  req.map(obj => {
    const result = {};
    for (const key in obj) {
      result[key] = obj[key];
    }
    return result;
  });
  return respuesta;
}

function cargarVista(vista,idDivDondMuestraVista = 'contenedorCentroMain') { 
  // Crear una nueva instancia de XMLHttpRequest
  var xhr = new XMLHttpRequest();
  
  // Configurar la solicitud con el método GET y la URL del archivo PHP
  xhr.open('GET', vista, true);
  
  // Configurar la función que se ejecutará cuando la solicitud cambie de estado
  xhr.onreadystatechange = function() {
      // Verificar si la solicitud se completó con éxito
      if (xhr.readyState === 4 && xhr.status === 200) {
          // Insertar el contenido del archivo PHP en el div con id idDivDondMuestraVista
          document.getElementById(idDivDondMuestraVista).innerHTML = xhr.responseText;
      }
  };
  
  // Enviar la solicitud
  xhr.send();
}

/*console.log('data con formato formdata: ', formData)

      var object = {};
      formData.forEach(function(value, key){

      object[key] = value;

      });

    return object;*/