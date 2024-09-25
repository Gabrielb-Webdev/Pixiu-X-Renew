<?php
session_start(); // Iniciar sesión

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "u953157925_blog_user"; // Tu usuario de la base de datos
$password = "Lg030920."; // Tu contraseña de la base de datos
$dbname = "u953157925_pixiux_blog"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$email = $_POST['email'];
$input_password = $_POST['password'];

// Prepara la consulta SQL para buscar el email en la tabla users
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontró el correo
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Comparar directamente la contraseña en texto plano
    if ($input_password === $user['password']) {
        // Iniciar la sesión
        $_SESSION['user_email'] = $user['email'];
        echo "<script>console.log('Sesión iniciada: ' + '{$_SESSION['user_email']}');</script>";
        echo "<script>alert('Inicio de sesión exitoso'); window.location.href = '../blog.php';</script>";
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location.href = '../login.php';</script>";
    }
} else {
    echo "<script>alert('El correo no está registrado'); window.location.href = '../login.php';</script>";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
