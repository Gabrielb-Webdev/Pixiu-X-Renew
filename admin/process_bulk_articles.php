<?php
include '../database/session_check.php';
include '../database/db_connection.php';

// Activar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mapping'], $_POST['csv_temp_file'])) {
    $mapping = $_POST['mapping'];
    $file = $_POST['csv_temp_file'];
    $success = true;

    // Verificar si el archivo CSV realmente existe
    if (!file_exists($file)) {
        echo "<div class='alert alert-danger'>El archivo CSV no existe o no se pudo encontrar.</div>";
        exit();
    }

    // Abrir el archivo CSV y procesar
    if (($handle = fopen($file, 'r')) !== false) {
        fgetcsv($handle); // Saltar la fila de encabezado
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            // Extraer valores del CSV según el mapeo proporcionado
            $title = isset($mapping['title']) && $mapping['title'] !== "" ? mysqli_real_escape_string($conn, $data[$mapping['title']]) : null;
            $slug = isset($mapping['slug']) && $mapping['slug'] !== "" ? mysqli_real_escape_string($conn, $data[$mapping['slug']]) : null;
            $content = isset($mapping['content']) && $mapping['content'] !== "" ? mysqli_real_escape_string($conn, $data[$mapping['content']]) : null;
            $excerpt = isset($mapping['excerpt']) && $mapping['excerpt'] !== "" ? mysqli_real_escape_string($conn, $data[$mapping['excerpt']]) : null;
            $image_url = isset($mapping['image_url']) && $mapping['image_url'] !== "" ? mysqli_real_escape_string($conn, $data[$mapping['image_url']]) : null;

            // Insertar en la base de datos
            $query = "INSERT INTO articles (title, slug, content, excerpt, image_url) VALUES ('$title', '$slug', '$content', '$excerpt', '$image_url')";
            if (!mysqli_query($conn, $query)) {
                echo "Error al insertar el artículo: " . mysqli_error($conn);
                $success = false;
                break;
            }
        }
        fclose($handle);

        // Eliminar el archivo temporal después de procesar
        unlink($file);

        // Redirigir con mensaje de éxito o error
        if ($success) {
            header("Location: dashboard.php?success=Artículos subidos exitosamente");
        } else {
            header("Location: dashboard.php?error=Hubo un error al cargar los artículos.");
        }
        exit();
    } else {
        // Redirigir en caso de error de apertura del archivo
        header("Location: dashboard.php?error=No se pudo abrir el archivo CSV.");
        exit();
    }
}
?>
