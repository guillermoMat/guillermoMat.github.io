

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de datos</title>


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
  height: 620px;
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
 
<?php

session_start();
$_SESSION['rol'] = $_POST["rol"];

if($_POST["rol"]=="padre"){

?>

<div id="login">
        <h2 class="text-center text-white pt-5" style="text-decoration: underline;">Registro</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="almacenar_usuario.php" method="post">
                             <!--  <h3 class="text-center text-info">Padre / Madre</h3>   -->
                            
                            <div class="form-group">
                                <label for="Nombre" class="text-info">Nombre:</label><br>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Apellido" class="text-info">Apellido:</label><br>
                                <input type="text" class="form-control" id="Apellido" name="Apellido" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="DNI" class="text-info">DNI:</label><br>
                                <input type="text" class="form-control" id="DNI" name="DNI" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Correo" class="text-info">Correo:</label><br>
                                <input type="text" class="form-control" id="Correo" name="Correo" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Usuario" class="text-info">Usuario:</label><br>
                                <input type="text" class="form-control" id="Usuario" name="Usuario" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Contraseña" class="text-info">Contraseña:</label><br>
                                <input type="password" class="form-control" id="Contraseña" name="Contraseña" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <!--   <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Aceptar">
                                
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
//parte del if de arriba
}if($_POST["rol"]=="estudiante"){
?>

<div id="login">
        <h2 class="text-center text-white pt-5" style="text-decoration: underline;">Registro</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="almacenar_usuario.php" method="post">
                             <!--  <h3 class="text-center text-info">Padre / Madre</h3>   -->
                            
                            <div class="form-group">
                                <label for="Nombre" class="text-info">Nombre:</label><br>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Apellido" class="text-info">Apellido:</label><br>
                                <input type="text" class="form-control" id="Apellido" name="Apellido" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Legajo" class="text-info">Legajo:</label><br>
                                <input type="text" class="form-control" id="Legajo" name="Legajo" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Correo" class="text-info">Correo:</label><br>
                                <input type="text" class="form-control" id="Correo" name="Correo" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Usuario" class="text-info">Usuario:</label><br>
                                <input type="text" class="form-control" id="Usuario" name="Usuario" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Contraseña" class="text-info">Contraseña:</label><br>
                                <input type="password" class="form-control" id="Contraseña" name="Contraseña" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <!--   <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Aceptar">
                                
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

}if($_POST["rol"]=="docente"){

?>

<div id="login">
        <h2 class="text-center text-white pt-5" style="text-decoration: underline;">Registro</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="almacenar_usuario.php" method="post">
                             <!--  <h3 class="text-center text-info">Padre / Madre</h3>   -->
                            
                            <div class="form-group">
                                <label for="Nombre" class="text-info">Nombre:</label><br>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Apellido" class="text-info">Apellido:</label><br>
                                <input type="text" class="form-control" id="Apellido" name="Apellido" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="DNI" class="text-info">DNI:</label><br>
                                <input type="text" class="form-control" id="DNI" name="DNI" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Materias" class="text-info">Materia/s Dicta:</label><br>
                                <input type="text" class="form-control" id="Materias" name="Materias" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Correo" class="text-info">Correo:</label><br>
                                <input type="text" class="form-control" id="Correo" name="Correo" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Usuario" class="text-info">Usuario:</label><br>
                                <input type="text" class="form-control" id="Usuario" name="Usuario" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Contraseña" class="text-info">Contraseña:</label><br>
                                <input type="password" class="form-control" id="Contraseña" name="Contraseña" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <!--   <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Aceptar" style="background-color: #EAEAEA;color:black">
                                
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 

}if($_POST["rol"]=="empleado"){

?>

<div id="login">
        <h2 class="text-center text-white pt-5" style="text-decoration: underline;">Registro</h2>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="almacenar_usuario.php" method="post">
                             <!--  <h3 class="text-center text-info">Padre / Madre</h3>   -->
                            
                            <div class="form-group">
                                <label for="Nombre" class="text-info">Nombre:</label><br>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Apellido" class="text-info">Apellido:</label><br>
                                <input type="text" class="form-control" id="Apellido" name="Apellido" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="DNI" class="text-info">DNI:</label><br>
                                <input type="text" class="form-control" id="DNI" name="DNI" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Correo" class="text-info">Correo:</label><br>
                                <input type="text" class="form-control" id="Correo" name="Correo" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Puesto" class="text-info">Puesto:</label><br>
                                <input type="text" class="form-control" id="Puesto" name="Puesto" autocomplete="off" required >
                            </div>
                            
                            <div class="form-group">
                                <label for="Usuario" class="text-info">Usuario:</label><br>
                                <input type="text" class="form-control" id="Usuario" name="Usuario" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="Contraseña" class="text-info">Contraseña:</label><br>
                                <input type="password" class="form-control" id="Contraseña" name="Contraseña" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <!--   <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Aceptar" style="background-color: #EAEAEA;color:black">
                                
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 

}

?>

<footer>
    <div class="copyright py-4 text-center" style="background-color:#1b263b;margin-top: 100px;">
            <div class="container"><a href="index.php">Volver Inicio</a></div>
        </div>
</footer>
    

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>