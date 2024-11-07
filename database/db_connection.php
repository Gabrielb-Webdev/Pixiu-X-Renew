<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "u953157925_blog_user"; // Cambia esto por tu usuario de la base de datos
$password = "Lg030920."; // Cambia esto por tu contraseña
$dbname = "u953157925_pixiux_blog"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
