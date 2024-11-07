<?php
include '../database/session_check.php';
include '../database/db_connection.php';

$id = intval($_GET['id']);
$query = "SELECT * FROM articles WHERE id = $id";
$result = mysqli_query($conn, $query);
$article = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $excerpt = $_POST['excerpt'];
    $image = $_FILES['image']['name'];

    if ($image) {
        $target_dir = "../sources/images/blog/";
        $target_file = $target_dir . basename($image);
        $image_url = "https://pixiux.com/sources/images/blog/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $image_url = $article['image_url'];
    }

    $update_query = "UPDATE articles SET title = '$title', slug = '$slug', content = '$content', excerpt = '$excerpt', image_url = '$image_url' WHERE id = $id";
    if (mysqli_query($conn, $update_query)) {
        header("Location: dashboard.php?success=Artículo actualizado exitosamente");
        exit();
    } else {
        echo "Error al actualizar el artículo: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Artículo | Pixiu X Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CKEditor Script -->
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<body>
    <div class="container mt-5">
        <h2>Editar Artículo</h2>
        <form action="edit_article.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Nombre del Artículo</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="<?php echo htmlspecialchars($article['slug']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido Completo</label>
                <textarea class="form-control" id="content" name="content" required><?php echo htmlspecialchars($article['content']); ?></textarea>
                <script>
                    CKEDITOR.replace('content'); // Iniciar CKEditor en el campo de contenido
                </script>
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Descripción</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="3" required><?php echo htmlspecialchars($article['excerpt']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
                <img id="imagePreview" src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Imagen actual" style="display: block; margin-top: 10px; max-width: 200px;">
            </div>
            <div class="d-flex justify-content-between">
                <a href="dashboard.php" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar Artículo</button>
            </div>
        </form>
    </div>
</body>

</html>