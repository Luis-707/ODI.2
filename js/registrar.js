function enviar() {
    const form_ingresar = document.getElementById('form_ingresar');
    const nombre_usuario = document.getElementById('nombre_usuario').value;
    const Contrasena = document.getElementById('Contrasena').value;
    console.log(`Nombre de usuario: ${nombre_usuario}`);
    console.log(`Contrasena: ${Contrasena}`);
    
    const data = new FormData();
    data.append('nombre_usuario', nombre_usuario);
    data.append('Contrasena', Contrasena);
    
    fetch('./result.php', {
      method: 'POST',
      body: data
    })
    .then(res => res.json())
    .then(text => console.log(text))
  }