<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Freeman&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="framework/bootstrap/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .table-datos {
	border-collapse: collapse;
	width: 100%;
	font-weight: 14pt;
	font-family: "Poppins", sans-serif;

	
}
.table-datos th, .table-datos td {
	border: 1px solid black;
	padding: 8px;
	text-align: left;
	font-size: 14px;
}

.table-datos th {
	background-color: #f2f2f2;
	
}

textarea {
	width: 100%;
	height: 50px;
	
}
     </style>
     
    <title>Planilla administrativo</title>
  </head>
  <body>

    <h1>EVALUACIÓN DEL DESEMPEÑO</h1>
  <h2>NIVEL ADMINISTRATIVO</h2>
  <h3>SECCIÓN "A": DATOS DE IDENTIFICACIÓN</h3>

  <form id="search-form">
    <input type="text" id="search-input" name="search-input" placeholder="Buscar por ID...">
    <button id="search-button" type="submit">Buscar</button>
  </form> <br><br>

  <table class="table-datos">
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
  <table class="table-datos">
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
  <table class="table-datos">
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

    <h1>Objetivos de Desempeño</h1>

    <form class="col-6" id="form">
        <label>Nombre_objetivo</label>
        <input type="text" class="form-control" id="nombre_obj">
        <label>Peso:</label>
        <input type="number" class="form-control" id="peso_obj">
        <label>Rango:</label>
        <input type="number" class="form-control" id="rango_obj">
        <input type="button" value="Agregar" class="btn btn-success mt-3" id="agregar_obj">
        <input type="button" value="Guardar" class="btn btn-success mt-3" id="guardar_obj">
        
    </form>
    <div class="col-12" id="objetivo">
        <table class="table table-striped" id="lista_obj">
            <tr>
                <td>Nombre objetivo</td>
                <td>Peso</td> 
                <td>Rango</td>
                <td>total</td>
                <td>Acciones</td>
            </tr>
        </table>
    </div>
   
   
    <h1>Competencias</h1>

    <form class="col-6" id="form">
        <label>Nombre Competencias</label>
        <input type="text" class="form-control" id="nombre_comp">
        <label>Peso:</label>
        <input type="number" class="form-control" id="peso_comp">
        <label>Rango:</label>
        <input type="number" class="form-control" id="rango_comp">
        <input type="button" value="Agregar" class="btn btn-success mt-3" id="agregar_comp">
        <input type="button" value="Guardar" class="btn btn-success mt-3" id="guardar_comp">
        
    </form>
    <div class="col-12" id="Competencias">
        <table class="table table-striped" id="lista_comp">
            <tr>
                <td>Nombre Competencias</td>
                <td>Peso</td> 
                <td>Rango</td>
                <td>Total</td>
                <td>Acciones</td>
            </tr>
        </table>
    </div>
    

    <h3><center>RANGO DE ACTUACION DEL EVALUADO</center></h3></h3>

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
            <td id="total_obj"></td>
          </tr>
          <tr>
            <td>Sección "C"</td>
            <td id="total_comp"></td>
          </tr>
          <tr>
            <td>Puntuación Final ("B"+"C")</td>
            <td id="total"></td>
            <td id="rendimiento"></td>
            
          </tr>
        </tbody>
      </table>

      

    <script src="./framework/jquery/jquery-3.3.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./framework/bootstrap/js/bootstrap.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="app_2.js"></script>

  </body>
</html>