const table3 = document.getElementById('table3');
const puntuacionTotal = table3.querySelector('#puntuacion-total');
const textoPuntuacion = document.getElementById('texto-puntuacion');

function obtenerTextoSegunPuntuacion(puntuacion) {
  if (puntuacion === 0) {
    return "AÚN NO HA SIDO EVALUADO";
  } else if (puntuacion <= 179) {
    return "ACTUACIÓN MUY POR DEBAJO DE LO ESPERADO";
  } else if (puntuacion <= 259) {
    return "ACTUACIÓN POR DEBAJO DE LO ESPERADO";
  } else if (puntuacion <= 339) {
    return "ACTUACIÓN DENTRO DE LO ESPERADO";
  } else if (puntuacion <= 419) {
    return "ACTUACIÓN SOBRE LO ESPERADO";
  } else if (puntuacion <= 500) {
    return "DESEMPEÑO EXCEPCIONAL";
  } else {
    return ""; // En caso de que la puntuación sea mayor a 500
  }
}

function mostrarTextoSegunPuntuacion() {
    const puntuacionFinal = parseFloat(puntuacionTotal.textContent);
    const texto = obtenerTextoSegunPuntuacion(puntuacionFinal);
    console.log(texto);
    textoPuntuacion.textContent = texto;
  }
  
// Mostrar el texto al iniciar la página
document.addEventListener('DOMContentLoaded', function() {
  mostrarTextoSegunPuntuacion();
});

// Actualizar el texto al cambiar la puntuación final
puntuacionTotal.addEventListener('input', mostrarTextoSegunPuntuacion);