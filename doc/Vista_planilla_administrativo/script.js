const table1 = document.getElementById('table1');
const pesos1 = table1.querySelectorAll('.peso');
const rangos1 = table1.querySelectorAll('.rango');
const pesosPorRango1 = table1.querySelectorAll('.peso-rango');
const total1 = table1.querySelector('#total1');

// Seleccionar elementos del DOM para la segunda tabla
const table2 = document.getElementById('table2');
const pesos2 = table2.querySelectorAll('.peso');
const rangos2 = table2.querySelectorAll('.rango');
const pesosPorRango2 = table2.querySelectorAll('.peso-rango');
const total2 = table2.querySelector('#total2');

// Seleccionar elementos del DOM para la tercera tabla
const puntuacionSeccionB = table3.querySelector('#puntuacion-seccion-b');
const puntuacionSeccionC = table3.querySelector('#puntuacion-seccion-c');
const puntuacionTotal = table3.querySelector('#puntuacion-total');

function calculateTable1() {
  let totalTable1 = 0;
  pesos1.forEach((peso, index) => {
    const selectedRango = table1.querySelector(`input[name="rango1-${index}"]:checked`);
    const rango = selectedRango ? parseInt(selectedRango.value) : 1;
    const pesoValue = parseFloat(peso.value);
    const pesoRango = pesoValue * rango;
    pesosPorRango1[index].textContent = pesoRango.toFixed(2);
    totalTable1 += pesoRango;
  });
  total1.textContent = totalTable1.toFixed(2);
  updateTotalScores();
  
}

function handleRadioChange(event) {
  const selectedRadio = event.target;
  const row = selectedRadio.closest('tr');
  const pesoInput = row.querySelector('.peso');
  calculateTable1();
}

pesos1.forEach(peso => {
  peso.addEventListener('input', calculateTable1);
});

rangos1.forEach(rango => {
  rango.addEventListener('change', handleRadioChange);
});

calculateTable1();

// Función para calcular los valores de la segunda tabla
function calculateTable2() {
  let totalTable2 = 0;
  pesos2.forEach((peso, index) => {
    const selectedRango = table2.querySelector(`input[name="rango2-${index}"]:checked`);
    const rango = selectedRango ? parseInt(selectedRango.value) : 1;
    const pesoValue = parseFloat(peso.value);
    const pesoRango = pesoValue * rango;
    pesosPorRango2[index].textContent = pesoRango.toFixed(2);
    totalTable2 += pesoRango;
  });
  total2.textContent = totalTable2.toFixed(2);
  updateTotalScores();
  
}

function evaluarRendimiento(totalScore) {
  if (totalScore === 0) {
      return "AÚN NO HA SIDO EVALUADO";
  } else if (totalScore <= 179) {
      return "ACTUACIÓN MUY POR DEBAJO DE LO ESPERADO";
  } else if (totalScore <= 259) {
      return "ACTUACIÓN POR DEBAJO DE LO ESPERADO";
  } else if (totalScore <= 339) {
      return "ACTUACIÓN DENTRO DE LO ESPERADO";
  } else if (totalScore <= 419) {
      return "ACTUACIÓN SOBRE LO ESPERADO";
  } else if (totalScore <= 500) {
      return "DESEMPEÑO EXCEPCIONAL";
  } else if(totalScore > 500){
      return "Valor fuera de rango";
  }
}

// Función para actualizar los totales de la tercera tabla
function updateTotalScores() {
  const totalTable1 = parseFloat(total1.textContent);
  const totalTable2 = parseFloat(total2.textContent);
  const totalScore = totalTable1 + totalTable2;

  puntuacionSeccionB.textContent = totalTable1.toFixed(2);
  puntuacionSeccionC.textContent = totalTable2.toFixed(2);
  puntuacionTotal.textContent = totalScore.toFixed(2);

  const rendimientoText = evaluarRendimiento(totalScore);
  rendimiento.textContent = rendimientoText;
}

// Función para manejar el cambio de los radio buttons en la segunda tabla
function handleRadioChangeTable2(event) {
  const selectedRadio = event.target;
  const row = selectedRadio.closest('tr');
  const pesoInput = row.querySelector('.peso');
  calculateTable2();
}

// Agregar event listeners para cambios en peso y radio buttons en la segunda tabla
pesos2.forEach(peso => {
  peso.addEventListener('input', calculateTable2);
});

rangos2.forEach(rango => {
  rango.addEventListener('change', handleRadioChangeTable2);
});

// Calcular la segunda tabla al cargar la página
calculateTable2();









