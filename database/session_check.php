<?php
// database/session_check.php
session_start();

// Verificar si la sesión está iniciada
if (isset($_SESSION['user_email'])) {
    // Mostrar la sesión en la consola del navegador
    echo "<script>console.log('Sesión activa para: {$_SESSION['user_email']}');</script>";
} else {
    // Redirigir a login si la sesión no está iniciada
    header('Location: /login.php'); // Ajusta la ruta según sea necesario
    exit();
}
?>
