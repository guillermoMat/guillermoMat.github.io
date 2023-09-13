



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- botones Inicio/Cerrar sesion -->

<?php
// Inicia la sesión (asegúrate de hacerlo antes de cualquier salida al navegador)
session_start();

// Verifica si el usuario ha iniciado sesión (por ejemplo, comprobando si existe una variable de sesión)
if (isset($_SESSION['usuario'])) {
    echo '<form method="POST" action="cerrar_sesion.php">
              <input type="submit" name="cerrar_sesion" class="btn btn-danger" value="Cerrar sesión">
          </form>';
} else {
    echo '<form method="POST" action="iniciar_sesion.php">
              <input type="submit" name="iniciar_sesion" class="btn btn-primary" value="Iniciar sesión">
          </form>';
}
?>




    
</body>
</html>