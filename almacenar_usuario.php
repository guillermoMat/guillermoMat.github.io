<?php
// Conexión a la base de datos (reemplaza con tus propias credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$sql="";

session_start();

if($_SESSION['rol']=="padre"){


// Obtener los datos del formulario
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$dni = $_POST['DNI'];
$correo = $_POST['Correo'];
$usuario = $_POST['Usuario'];
$contraseña = $_POST['Contraseña'];

// Preparar la consulta SQL para insertar los datos en la tabla 'usuarios'
$sql = "INSERT INTO padres (nombre, apellido,dni,correo,usuario,contraseña) VALUES ('$nombre', '$apellido', '$dni', '$correo', '$usuario', '$contraseña')";

}else if($_SESSION['rol']=="estudiante"){


    // Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $legajo = $_POST['Legajo'];
    $correo = $_POST['Correo'];
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];
    
    // Preparar la consulta SQL para insertar los datos en la tabla 'usuarios'
    $sql = "INSERT INTO estudiante (nombre, apellido,legajo,correo,usuario,contraseña) VALUES ('$nombre', '$apellido', '$legajo', '$correo', '$usuario', '$contraseña')";

    }else if($_SESSION['rol']=="docente"){

        // Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $DNI = $_POST['DNI'];
    $Materia = $_POST['Materias'];
    $correo = $_POST['Correo'];
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];
    
    // Preparar la consulta SQL para insertar los datos en la tabla 'usuarios'
    $sql = "INSERT INTO docentes (nombre, apellido,DNI,materias_dicta,correo,usuario,contraseña) VALUES ('$nombre', '$apellido', '$DNI','$Materia', '$correo', '$usuario', '$contraseña')";

    }else if($_SESSION['rol']=="empleado"){

        // Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $DNI = $_POST['DNI'];
    $correo = $_POST['Correo'];
    $Puesto = $_POST['Puesto'];
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];
    
    // Preparar la consulta SQL para insertar los datos en la tabla 'usuarios'
    $sql = "INSERT INTO empleado (nombre, apellido,DNI,correo,puesto,usuario,contraseña) VALUES ('$nombre', '$apellido', '$DNI', '$correo','$Puesto', '$usuario', '$contraseña')";

    }
// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
    header("Location: index.php"); // Redirige a la página de inicio
    exit();
} else {
    echo "Error al registrar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
session_destroy();
?>
