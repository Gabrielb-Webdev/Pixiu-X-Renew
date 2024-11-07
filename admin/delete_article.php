<?php
include '../database/session_check.php';
include '../database/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $delete_query = "DELETE FROM articles WHERE id = $id";
    if (mysqli_query($conn, $delete_query)) {
        header("Location: dashboard.php?success=Artículo eliminado exitosamente");
        exit();
    } else {
        echo "Error al eliminar el artículo: " . mysqli_error($conn);
    }
}
?>
