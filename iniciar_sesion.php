

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<style>
        body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
    </style>

<!------ Include the above in your HEAD tag ---------->

</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Iniciar Sesión</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="verificar_login.php" method="post">
                             <!--   <h3 class="text-center text-info">Acceso</h3>   -->
                            <div class="form-group">
                                <label for="roles" class="text-info">Rol:</label><br>
                                <input type="radio"  name="rol" value="padre" id="roles" required>Padre  
                                <input type="radio"  name="rol" value="estudiante" id="roles" required style="margin-left:20px ;">Estudiante    
                                <input type="radio" name="rol" value="docente" id="roles" required style="margin-left:20px ;">Docente
                                <input type="radio" name="rol" value="empleado" id="roles" required style="margin-left:20px ;">Empleado<br>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" class="form-control" id="username" name="usuario" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" class="form-control" id="password" name="contraseña" autocomplete="off" required >
                            </div>
                            
                            <div class="form-group">
                                <!--   <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Ingresar">
                                
                            </div>
                            <div id="register-link" class="text-right" style="margin-top: -40px">
                                <a href="registoUsuarioRol.php" class="text-info">Regístrate aquí</a>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>