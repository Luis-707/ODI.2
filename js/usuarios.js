const form = document.getElementById('form_usuarios');
const action = document.getElementById('accion');
const nombre_usuario = document.getElementById('nombre_usuario');
const contrasena = document.getElementById('contrasena');
const categoria = document.getElementById('categoria_usuario');
const modulo = document.getElementById('tipos_permisos_');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData();
  formData.append('nombre_usuario', nombre_usuario.value);
  formData.append('contrasena', contrasena.value);
  formData.append('categoria_usuario', categoria_usuario.value);
  formData.append('tipos_permisos_', tipos_permisos_.value);

  switch (action.value) {
    case '1':
      // Registrar
      fetch('/var/www/html/ODI/servicios/Serv_ingresarUsuario.php', {
        method: 'POST',
        body: formData,
      })
      .then((response) => response.text())
      .then((data) => console.log(data))
      .catch((error) => console.error(error));
      break;
    case '2':
      // Actualizar
      fetch('ruta/actualizar.php', {
        method: 'POST',
        body: formData,
      })
      .then((response) => response.text())
      .then((data) => console.log(data))
      .catch((error) => console.error(error));
      break;
    case '3':
      // Eliminar
      fetch('ruta/eliminar.php', {
        method: 'POST',
        body: formData,
      })
      .then((response) => response.text())
      .then((data) => console.log(data))
      .catch((error) => console.error(error));
      break;
    default:
      console.log('No se ha seleccionado una acción');
  }
});