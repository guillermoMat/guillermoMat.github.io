
<?php
session_start();

// Comprobar si se han enviado datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Conectar a la base de datos MySQL (ajusta las credenciales según tu configuración)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "login";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para verificar las credenciales en la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario='$username' AND contraseña='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso, redirigir a una página de bienvenida o dashboard
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
    } else {
        // Credenciales incorrectas, mostrar un mensaje de error
        $mensajeError = "Usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Iniciar sesión</div>
                    <div class="card-body">
                        <form method="POST" action="login2.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuario:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
