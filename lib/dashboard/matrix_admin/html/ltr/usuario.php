<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php include "links.php"?>

</head>

<body>
    <?php include "header.php"?>
    <?php include "aside.php"?>
    <div class="page-wrapper">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Ingresar usuario
</button>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
  Actualizar usuario
</button>

<!-- Modal ingresar-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ingresar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" id="form_usuarios">
            <div class="mb-3 row">
                <div class="col-4">
                    <select class="form-select">
                        <option value="">Elige una acción:</option>
                        <option value="1">Registrar</option>
                        <option value="2">Actualizar</option>
                        <option value="3">Eliminar<option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-4">
                    <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="Nombre de usuario">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-4">
                    <input type="password" class="form-control" name="Contraseña" id="Contraseña" placeholder="Contraseña">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-4">
                    <select class="form-select">
                        <option value="">Elige una categoria:</option>
                        <option value="1">Administrador</option>
                        <option value="2">Evaluador</option>
                        <option value="3">Supervisor<option>
                        <option value="4">Evaluado</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Action</button>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" onclick="enviar()" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    

  <div class="container">
        
    </div>

  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
   <?php include "scripts.php"?>
</body>

</html>