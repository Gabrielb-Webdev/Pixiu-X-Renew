<?php
// Configura la duración de la sesión (1 mes)
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 30); // 30 días
session_set_cookie_params(60 * 60 * 24 * 30); // 30 días

// Iniciar sesión
session_start();

// Comprobar si la sesión está activa
if (!isset($_SESSION['user_email'])) {
    // Si la sesión no está activa, redirigir o hacer otra acción
    // header('Location: login.php'); // Opcional: Redirigir al login si lo deseas
}
?>
