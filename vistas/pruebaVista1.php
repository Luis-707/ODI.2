<div id="contenedo_adminUsuario">
  <header>
    <h1>Administracion de usuario</h1>
  </header>
  <main>
    <div class="page-wrapper">
        <div class="container">
        <form id="form_usuarios" name="form_usuarios">

            <div class="mb-3 row">
                <div class="col-4">
                    <input type="number" class="form-control" name="id_usuario" id="id_usuario" placeholder="Ingresa el id">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-4">
                    <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre de usuario">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-4">
                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contrasena">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-4">
                    <select class="form-select" name="categoria_usuario" id="categoria_usuario">
                        <option value="">Elige una categoria:</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Evaluador">Evaluador</option>
                        <option value="Supervisor">Supervisor<option>
                        <option value="Evaluado">Evaluado</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-4">
                    <select class="form-select" name="tipos_permisos_" id="tipos_permisos_">
                        <option value="">Elige un modulo de privilegios:</option>
                        <option value="Modulo A">Modulo A</option>
                        <option value="Modulo B">Modulo B</option>
                        <option value="Modulo C">Modulo C<option>
                    </select>
                </div>
            </div> 

            <div class="mb-3 row">
                <div class="col-sm-8">
                    <button type="button" class="btn btn-primary" onclick="IngresarUsuario()">Enviar</button>
                </div>
            </div>

        </form>
    </div>
  </main>
    
</div>
