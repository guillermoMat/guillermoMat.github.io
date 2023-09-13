

<?php
// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Recupera los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contraseña'];

// Verifica las credenciales en la base de datos
$sql="";
if($_POST["rol"]=="padre"){
    $sql = "SELECT * FROM padres WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
}else if($_POST["rol"]=="estudiante"){
    $sql = "SELECT * FROM estudiante WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
}else if($_POST["rol"]=="docente"){
    $sql = "SELECT * FROM docentes WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
}else if($_POST["rol"]=="empleado"){
    $sql = "SELECT * FROM empleado WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
}


//$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {
    // Las credenciales son correctas, el usuario ha iniciado sesión
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php"); // Redirige a la página de inicio
    exit();
} else {
    // Las credenciales son incorrectas, muestra un mensaje de error
    echo "Credenciales incorrectas. <a href='iniciar_sesion.php'>Volver a intentar</a>";
}

mysqli_close($conn);
?>
