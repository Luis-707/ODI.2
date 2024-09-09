<div id="planilla_administrativo">

<main>

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

      

    <script src="/ODI/framework/bootstrap/jquery-3.7.1.min.js"></script> 
      <script src="/framework/bootstrap/js/bootstrap.min.js"></script> 
   <script src="/ODI/js/app_2.js" ></script>
  

  </body>
</html>
</main>
</div>