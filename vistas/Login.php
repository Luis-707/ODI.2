
<div id="login_div">

<head>
    
    <title>login</title>
</head>
<body>

       <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4"><strong>BIENVENIDO A ODI</strong><br></h4>

<form id="formularioLogin">
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="text" placeholder="Ingrese una dirección de correo..." name="nombre_usuario" id="nombre_usuario" required="">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-user" type="password" placeholder="Clave" name="clave" id="clave"  required="">
                                        </div>
                                       
                                            <!-- el hidden se usa para identificar el sercivcio del en en los endpiont de las url de la interfas js -->
                                            <!-- <input type="hidden" id="servicio" name="servicio" value="sessionPersona"> -->
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="button" onclick="iniciarSesion()"><strong>Login</strong></button>
                                        <hr>
                                        <hr>
                                    </form>
                                </div>
                          </div>
    
</body>
</html>
</div>