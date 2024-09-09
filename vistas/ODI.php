<div id="crud_odi">

<header>
    <title>ODI</title>
</header>

<main>

<div class="page-wrapper">
        <div class="container">

<button type="button" class="btn btn-primary" onclick="listar_ODI()">
              Mostrar
            </button>

 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
    Ingresar ODI
 </button>


<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cargar ODI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form_odi">
              <div class="form-group">
                  <label for="">Nombre de ODI: </label>
                  <input type="text" id="nombre_odi" name="nombre_odi" class="form-control">
                  <label for="">Peso: </label>
                  <input type="number" id="peso" name="peso" class="form-control">
                  <label for="">Status: </label>
                  <select class="form-select" name="status" id="status">
                 <option value="">Seleccione su status</option>
                 <option value="Activo">Activo</option>
                 <option value="Inactivo">Inactivo</option>
                
                  <input type="hidden" id="odi_id" name="odi_id">
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="IngresarODI()">Guardar</button>
        </form>
        </div>
      </div>
    </div>
  </div>


 


   
       
        <table id="t_odi"class="display table table-hover text-nowrap">
            
        </table>
  
   
   

 </div>
   
</div>

</main>

</div>