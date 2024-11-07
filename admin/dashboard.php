<?php
session_start(); // Iniciar sesión

include '../database/db_connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verificar si el usuario está autenticado; si no, redirigir a `home.php`
if (!isset($_SESSION['user_email'])) {
    header("Location: ../index.php"); // Redirige al home
    exit();
}

// Obtener los artículos de la base de datos
$query = "SELECT * FROM articles";
$result = mysqli_query($conn, $query);
$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Verificar si se ha enviado el cambio de estado o eliminación en lote
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bulk_action'], $_POST['article_ids'])) {
    $article_ids = $_POST['article_ids'];
    $ids = implode(',', array_map('intval', $article_ids)); // Sanitizar los IDs para evitar SQL injection

    if ($_POST['bulk_action'] == 'delete') {
        // Eliminar artículos seleccionados
        $delete_query = "DELETE FROM articles WHERE id IN ($ids)";
        mysqli_query($conn, $delete_query);
    } else {
        // Cambiar estado de los artículos seleccionados
        $status = $_POST['bulk_action'];
        $update_query = "UPDATE articles SET status = '$status' WHERE id IN ($ids)";
        mysqli_query($conn, $update_query);
    }
    header("Location: dashboard.php"); // Redirigir para evitar resubmit del formulario
    exit();
}

// Verificar si se ha enviado el cambio de estado o eliminación individual
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'], $_POST['id'])) {
    $id = intval($_POST['id']);
    
    if ($_POST['action'] == 'delete') {
        // Eliminar artículo individual
        $delete_query = "DELETE FROM articles WHERE id = $id";
        mysqli_query($conn, $delete_query);
    } else {
        // Cambiar estado del artículo individual
        $status = $_POST['action'];
        $update_query = "UPDATE articles SET status = '$status' WHERE id = $id";
        mysqli_query($conn, $update_query);
    }
    header("Location: dashboard.php"); // Redirigir para evitar resubmit del formulario
    exit();
}

// Mostrar mensaje de éxito o error si existen en la URL
if (isset($_GET['success'])) {
    echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($_GET['success']) . '</div>';
} elseif (isset($_GET['error'])) {
    echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($_GET['error']) . '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Pixiu X Agency</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css?v=3.0">
</head>

<body style="padding-top: 20px; padding-bottom: 20px;">
    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4">Panel de Administración de Artículos</h1>

        <!-- Botones para ver blog, subir nuevo artículo y cargar CSV en lote -->
        <div class="d-flex justify-content-between mb-4">
            <a href="https://pixiux.com/blog.php" class="btn btn-info">Ver Blog</a>
            <a href="upload_article.php" class="btn btn-success">Subir Nuevo Artículo</a>
            <a href="upload_bulk_articles.php" class="btn btn-primary">Subir Artículos en Lote (CSV)</a>
        </div>

        <form action="dashboard.php" method="post">
            <div class="table-responsive">
                <table class="table table-bordered table-hover dashboard-table">
                    <thead class="table-dark">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articles as $article) { ?>
                            <tr>
                                <td><input type="checkbox" name="article_ids[]" value="<?php echo $article['id']; ?>"></td>
                                <td><?php echo htmlspecialchars($article['title']); ?></td>
                                <td><?php echo htmlspecialchars($article['excerpt']); ?></td>
                                <td><img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Imagen" style="height: 50px; width: auto;"></td>
                                <td><?php echo htmlspecialchars($article['status']); ?></td>
                                <td>
                                    <!-- Formulario para acciones individuales -->
                                    <form action="dashboard.php" method="post" style="display: inline-block;">
                                        <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                                        <select name="action" onchange="this.form.submit()" class="form-select form-select-sm">
                                            <option value="">Acción</option>
                                            <option value="draft" <?php if ($article['status'] == 'draft') echo 'disabled'; ?>>Borrador</option>
                                            <option value="published" <?php if ($article['status'] == 'published') echo 'disabled'; ?>>Publicar</option>
                                            <option value="delete">Eliminar</option>
                                        </select>
                                    </form>
                                    <!-- Botón Editar -->
                                    <a href="edit_article.php?id=<?php echo $article['id']; ?>" class="btn btn-warning btn-sm mt-1">Editar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <select name="bulk_action" class="form-select form-select-sm" required>
                    <option value="">Acción en lote</option>
                    <option value="draft">Establecer como Borrador</option>
                    <option value="published">Publicar</option>
                    <option value="delete">Eliminar</option>
                </select>
                <button type="submit" class="btn btn-primary btn-sm">Aplicar a seleccionados</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Selección de todos los artículos
        document.getElementById('select-all').addEventListener('click', function() {
            let checkboxes = document.querySelectorAll('input[name="article_ids[]"]');
            checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        });
    </script>
</body>

</html>
