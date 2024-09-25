<?php
session_start(); // Inicia la sesión
session_unset(); // Destruye todas las variables de la sesión
session_destroy(); // Destruye la sesión

// Redirige al usuario a la página principal o de login después de cerrar la sesión
header("Location: ../login.php");
exit();
?>
