<div id="crud_FAC">
<header>
    <title>Factores</title>
</header>

<main>
<div class="page-wrapper">
        <div class="container">

        <button type="button" class="btn btn-primary" onclick="listarFac()">
              Mostrar
            </button>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cargar-fac"><i class="fa fa-plus"></i></button>
    <!-- Modal -->
<div class="modal fade" id="cargar-fac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cargar Factor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-fac"  name="form-fac">
              <div class="form-group">

              <select class="form-select" name="Cargo" id="Cargo">
                 <option value="">Seleccione una opcion</option>
                 <option value="Administrativo">Administrativo</option>
                 <option value="Obrero">Obrero</option>
                
                </select>

                  <label for="">Codigo: </label>
                  <input type="text" id="codigo" name="codigo" class="form-control">
                  <label for="">factor correspondiente: </label>
                  <input type="text" id="fac_id" name="fac_id" class="form-control">
                  <label for="">Nombre de Factor: </label>
                  <input type="text" id="nombre_factor" name="nombre_factor" class="form-control">
                  <label for="">Puntuacion: </label>
                  <input type="number" id="porcentaje" name="porcentaje" class="form-control">
                  <label for="">Status: </label>
                  <select class="form-select" name="status" id="status">
                 <option value="">Seleccione su status</option>
                 <option value="Activo">Activo</option>
                 <option value="Inactivo">Inactivo</option>
                
                </select>
                  <input type="hidden" id="Fac_id">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="IngresarFactor()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#actualizar_fac"><i class="fa fa-plus"></i>actualizar factor</button>
  <div class="modal fade" id="actualizar_fac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form_fac_actualizar" name="form_fac_actualizar">
                
                </select>

                  
                  <label for="">Codigo: </label>
                  <input type="text" id="codigo" name="codigo" class="form-control">
                  <label for="">factor correspondiente: </label>
                  <input type="text" id="fac_id" name="fac_id" class="form-control">
                  <label for="">Nombre de Factor: </label>
                  <input type="text" id="nombre_factor" name="nombre_factor" class="form-control">
                  <label for="">Puntuacion: </label>
                  <input type="number" id="porcentaje" name="porcentaje" class="form-control">
                  <label for="">Status: </label>
                  <select class="form-select" name="status" id="status">
                 <option value="">Seleccione su status</option>
                 <option value="Activo">Activo</option>
                 <option value="Inactivo">Inactivo</option>
                
                </select>
 <div class="modal-footer">
 <div class="mb-3 row">
    <div class="col-sm-8">
        <button type="button" class="btn btn-primary" onclick="ActualizarFactor()">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
 </div>
 </div>

 </form>

      </div>


 


    
        <table id="t_factor"class="display table table-hover text-nowrap">
            
        </table>
    </div>
   
   
  </div>

   </div>

</main>

</div>