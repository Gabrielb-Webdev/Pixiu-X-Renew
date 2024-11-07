<?php
include '../database/session_check.php';
include '../database/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content']; // Contenido HTML del editor enriquecido
    $excerpt = $_POST['excerpt'];
    $image = $_FILES['image']['name'];

    $target_dir = "../sources/images/blog/";
    $target_file = $target_dir . basename($image);
    $image_url = "https://pixiux.com/sources/images/blog/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $query = "INSERT INTO articles (title, slug, content, excerpt, image_url) VALUES ('$title', '$slug', '$content', '$excerpt', '$image_url')";
        if (mysqli_query($conn, $query)) {
            header("Location: dashboard.php?success=Artículo subido exitosamente");
            exit();
        } else {
            echo "Error al subir el artículo: " . mysqli_error($conn);
        }
    } else {
        echo "Error al subir la imagen.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Subir Artículo | Pixiu X Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CKEditor Script -->
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<body>
    <div class="container mt-5">
        <h2>Subir Nuevo Artículo</h2>
        <form action="upload_article.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Nombre del Artículo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido Completo</label>
                <textarea class="form-control" id="content" name="content" required></textarea>
                <script>
                    CKEDITOR.replace('content'); // Iniciar CKEditor en el campo de contenido
                </script>
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Descripción</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)" required>
                <img id="imagePreview" style="display: block; margin-top: 10px; max-width: 200px;">
            </div>
            <div class="d-flex justify-content-between">
                <a href="dashboard.php" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Subir Artículo</button>
            </div>
        </form>
    </div>
</body>

</html>