<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet">
<title>Pruebas de tabla</title>
</head>
<body>
  <h1>EVALUACIÓN DEL DESEMPEÑO</h1>
  <h2>NIVEL ADMINISTRATIVO</h2>
  <h3>SECCIÓN "A": DATOS DE IDENTIFICACIÓN</h3>
  <table id="table-datos">
    <thead>
      <tr>
        <th colspan="4"><center>DATOS DEL EVALUADO</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>APELLIDOS Y NOMBRES</td>
        <td>CÉDULA DE IDENTIDAD</td>
        <td>CARGO</td>
        <td>UBICACIÓN ADMINISTRATIVA</td>
      </tr>
    </tbody>
  </table>
  <table id="table-datos">
    <thead>
      <tr>
        <th colspan="4"><center>DATOS DEL EVALUADOR</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>APELLIDOS Y NOMBRES</td>
        <td>CÉDULA DE IDENTIDAD</td>
        <td>CARGO</td>
        <td>UBICACIÓN ADMINISTRATIVA</td>
      </tr>
    </tbody><br>
  </table>
  <table id="table-datos">
    <thead>
      <tr>
        <th colspan="3"><center>DATOS DEL SUPERVISOR DEL EVALUADOR</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>APELLIDOS Y NOMBRES</td>
        <td>CÉDULA DE IDENTIDAD</td>
        <td>CARGO</td>
      </tr>
    </tbody><br>
  </table>
<h3>SECCIÓN "B": ESTABLECIMIENTO Y EVALUACIÓN DE OBJETIVOS DE DESEMPEÑO INDIVIDUAL</h3>
    <table id="table1">
        <thead>
          <tr>
            <th>Objetivo</th>
            <th>Peso</th>
            <th>Rango</th>
            <th>Peso x Rango</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>Elaborar diariamente las requisiciones de materiales y equipos</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango1-0" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango1-0" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango1-0" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango1-0" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango1-0" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>
          <tr>
            <td>Ejecutar diariamente el control de ingreso y stock de materiales</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango1-1" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango1-1" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango1-1" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango1-1" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango1-1" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>
          <tr>
            <td>Realizar informe y exposiciones de motivo</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango1-2" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango1-2" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango1-2" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango1-2" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango1-2" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td>Realizar reportes de fallas de la UPTOS</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango1-3" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango1-3" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango1-3" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango1-3" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango1-3" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td>Llevar el control y solicitud de caja chica</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango1-4" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango1-4" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango1-4" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango1-4" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango1-4" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>
          <!-- Repetir el mismo patrón para las siguientes filas -->
          <tr>
            <td colspan="3">Total</td>
            <td id="total1"></td>
          </tr>
        </tbody>
      </table>

      <br>
      <br>

      <h3>SECCIÓN "C": EVALUACIÓN DE COMPETENCIAS</h3>
      <table id="table2">
        <thead>
          <tr>
            <th>Objetivo</th>
            <th>Peso</th>
            <th>Rango</th>
            <th>Peso x Rango</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Compromisos de valores organizacionales</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-0" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-0" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-0" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-0" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-0" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>
          <tr>
            <td>Autodesarrollo</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-1" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-1" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-1" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-1" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-1" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>
          <tr>
            <td>Calidad de servicio</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-2" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-2" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-2" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-2" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-2" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td>Comunicación</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-3" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-3" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-3" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-3" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-3" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td>Creatividad e iniciativa</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-4" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-4" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-4" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-4" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-4" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td>Gestión de procesos</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-5" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-5" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-5" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-5" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-5" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td>Capacidad de análisis y síntesis</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-6" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-6" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-6" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-6" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-6" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td>Trabajo en equipo</td>
            <td><input type="number" class="peso"></td>
            <td>
              <label><input type="radio" name="rango2-7" value="1" class="rango"> 1</label>
              <label><input type="radio" name="rango2-7" value="2" class="rango"> 2</label>
              <label><input type="radio" name="rango2-7" value="3" class="rango"> 3</label>
              <label><input type="radio" name="rango2-7" value="4" class="rango"> 4</label>
              <label><input type="radio" name="rango2-7" value="5" class="rango"> 5</label>
            </td>
            <td class="peso-rango"></td>
          </tr>

          <tr>
            <td colspan="3">Total</td>
            <td id="total2"></td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>

      <h3>SECCIÓN "D": <h3><center>RANGO DE ACTUACION DEL EVALUADO</center></h3></h3>

      <table id="table3">
        <thead>
          <tr>
            <th>Sección</th>
            <th>Puntuaciones</th>
            <th>Rango de actuación</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Sección "B"</td>
            <td id="puntuacion-seccion-b"></td>
            <td id="rendimiento"></td>
          </tr>
          <tr>
            <td>Sección "C"</td>
            <td id="puntuacion-seccion-c"></td>
          </tr>
          <tr>
            <td>Puntuación Final ("B"+"C")</td>
            <td id="puntuacion-total"></td>
            
          </tr>

          
        </tbody>
      </table>


  <script src="script.js"></script>

<br>

  <h3><center>Comentarios del supervisor</center></h3>

  <div class="container">
  <div class="text-area" contenteditable="true">
    <p>Escribe tu texto aquí...</p>
  </div>
</div>

<h3>EL EVALUADO ESTA DE ACUERDO CON LOS RESULTADOS?</h3>
<p>SI</p>
<p>NO</p>

  <br>
  <br>
  <br>
  <br>

<h4>FIRMAS:</h4>

<table>
   <thead>
      <tr>
        <th><center>SUPERVISOR INMEDIATO</center></th>
        <th><center>JEFE INMEDIATO DEL SUPERVISOR</center></th>
        <th><center>FIRMA DEL EVALUADO</center></th>
      </tr>
    </thead>
</table>

<br>
<br>
<br>

</body>
</html>
