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

// Verificar si se ha enviado el cambio de estado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Actualizar el estado en la base de datos
    $update_query = "UPDATE articles SET status = '$status' WHERE id = $id";
    mysqli_query($conn, $update_query);
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

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://pixiux.com/Logos/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://pixiux.com/Logos/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://pixiux.com/Logos/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://pixiux.com/Logos/favicon-16x16.png" />
    <link rel="manifest" href="https://pixiux.com/Logos/site.webmanifest" />
    <link rel="mask-icon" href="https://pixiux.com/Logos/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="https://pixiux.com/Logos/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="https://pixiux.com/Logos/mstile-144x144.png" />
    <meta name="msapplication-config" content="https://pixiux.com/Logos/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />

    <!-- CSS personalizado del Dashboard -->
    <link rel="stylesheet" href="../css/dashboard.css?v=3.0">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Panel de Administración de Artículos</h1>

        <!-- Botones para ver blog, subir nuevo artículo y cargar CSV en lote -->
        <div class="d-flex justify-content-between mb-3">
            <a href="https://pixiux.com/blog.php" class="btn btn-info">Ver Blog</a>
            <a href="upload_article.php" class="btn btn-success">Subir Nuevo Artículo</a>
            <a href="upload_bulk_articles.php" class="btn btn-primary">Subir Artículos en Lote (CSV)</a>
        </div>

        <!-- Contenedor de la tabla -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover dashboard-table">
                <thead class="table-dark">
                    <tr>
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
                            <td><?php echo htmlspecialchars($article['title']); ?></td>
                            <td><?php echo htmlspecialchars($article['excerpt']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Imagen" style="height: 50px; width: auto;"></td>
                            <td>
                                <!-- Dropdown para seleccionar el estado -->
                                <form action="dashboard.php" method="post" class="status-form">
                                    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm status-dropdown">
                                        <option value="draft" <?php if ($article['status'] == 'draft') echo 'selected'; ?>>Draft</option>
                                        <option value="published" <?php if ($article['status'] == 'published') echo 'selected'; ?>>Published</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <!-- Botón Editar -->
                                <a href="edit_article.php?id=<?php echo $article['id']; ?>" class="btn btn-warning btn-sm action-btn edit-btn">Editar</a>
                                <!-- Botón Eliminar -->
                                <form action="delete_article.php" method="post" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
                                    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm action-btn delete-btn">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>