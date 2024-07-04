


<!-- /*session_start();

 if (!isset($_SESSION['cedula'])) {
     header("Location: http://localhost/ODI/login.php");
     exit();
 }*/ -->




<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="#" type="image/x-icon" rel="icon"/>

  <!-- Bootstrap CSS v5.2.1 -->

  <link  rel="stylesheet" href="/var/www/html/ODI/framework/bootstrap/css/bootstrap.min.css">

  
</head>

<body>
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
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="/var/www/html/ODI/controlador/js/proceso.js"></script>
  <script src="/var/www/html/ODI/js/Usuario.js"></script>

<?php include "vistas/rutas.php" ?> 

</body>

</html>