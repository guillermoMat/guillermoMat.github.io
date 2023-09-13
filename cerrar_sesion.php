<?php
// Inicia la sesión (asegúrate de hacerlo antes de cualquier salida al navegador)
session_start();

// Destruye la sesión para cerrarla
session_destroy();

// Redirige a la página de inicio o a donde desees después de cerrar sesión
header("Location: index.php"); // Cambia "index.php" por la página que desees
exit();
?>