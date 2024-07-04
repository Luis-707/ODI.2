<!doctype html>
<html lang="en">

<head>
  <title>Administracion de usuario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->

  <link  rel="stylesheet" href="ODI/framework/bootstrap/css/bootstrap.min.css">
  
  <?php include "/var/www/html/ODI/vistas/matrix-admin-package-full/html/ltr/links.php"?>

</head>

<body>
  <main>
    <?php include "/var/www/html/ODI/vistas/matrix-admin-package-full/html/ltr/header.php"?>
    <?php include "/var/www/html/ODI/vistas/matrix-admin-package-full/html/ltr/aside.php"?>
    <div class="page-wrapper">
    <h1>Administracion de usuario</h1>
    <div class="container">
        <form method="POST" enctype="multipart/form-data" id="form_usuarios">
            <div class="mb-3 row">
                <div class="col-4">
                    <select class="form-select" id="accion">
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
                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contrasena">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-4">
                    <select class="form-select" id="categoria_usuario">
                        <option value="">Elige una categoria:</option>
                        <option value="1">Administrador</option>
                        <option value="2">Evaluador</option>
                        <option value="3">Supervisor<option>
                        <option value="4">Evaluado</option>
                    </select>
                </div>
            </div>

        <div class="mb-3 row">
            <div class="col-4">
                <select class="form-select" id="tipos_permisos_">
                    <option value="">Elige un modulo de privilegios:</option>
                    <option value="1">Modulo A</option>
                    <option value="2">Modulo B</option>
                    <option value="3">Modulo C<option>
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
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="ODI/framework/bootstrap/js/bootstrap.min.js">

</script>

<script src="ODI/js/usuarios.js"></script>

<?php include "/var/www/html/ODI/vistas/matrix-admin-package-full/html/ltr/scripts.php"?>

</body>

</html>