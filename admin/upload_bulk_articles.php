<?php
include '../database/session_check.php';
include '../database/db_connection.php';

$csv_temp_file = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file'])) {
    $file = $_FILES['csv_file'];
    $csv_temp_file = '../uploads/' . basename($file['name']); // Ruta temporal para almacenar el archivo

    // Mover el archivo a la ubicación temporal
    if (move_uploaded_file($file['tmp_name'], $csv_temp_file)) {
        if (($handle = fopen($csv_temp_file, 'r')) !== false) {
            $header = fgetcsv($handle, 1000, ",");
            fclose($handle);
        }
    } else {
        echo "<div class='alert alert-danger'>Error al cargar el archivo CSV.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subir Artículos en Lote (CSV) | Pixiu X Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Subir Artículos en Lote (CSV)</h2>

        <!-- Formulario para cargar el archivo CSV -->
        <form action="upload_bulk_articles.php" method="post" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <label for="csv_file" class="form-label">Selecciona el Archivo CSV</label>
                <input type="file" class="form-control" id="csv_file" name="csv_file" accept=".csv" required>
            </div>
            <button type="submit" class="btn btn-primary">Cargar CSV</button>
        </form>

        <?php if (isset($header)) { ?>
            <!-- Formulario de mapeo de columnas del CSV -->
            <form action="process_bulk_articles.php" method="post">
                <h3>Mapear Columnas del CSV a los Campos de Artículos</h3>
                <?php foreach (['title', 'slug', 'content', 'excerpt', 'image_url'] as $dbField) { ?>
                    <div class="mb-3">
                        <label for="<?php echo $dbField; ?>" class="form-label">Seleccione la columna para '<?php echo ucfirst($dbField); ?>' (Opcional)</label>
                        <select name="mapping[<?php echo $dbField; ?>]" class="form-select">
                            <option value="">No Asignar</option>
                            <?php foreach ($header as $index => $column) { ?>
                                <option value="<?php echo $index; ?>"><?php echo htmlspecialchars($column); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                <?php } ?>
                <!-- Pasar la ruta del archivo temporal al formulario -->
                <input type="hidden" name="csv_temp_file" value="<?php echo htmlspecialchars($csv_temp_file); ?>">
                <button type="submit" class="btn btn-success">Procesar Artículos</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>
