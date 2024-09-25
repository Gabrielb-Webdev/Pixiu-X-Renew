<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pixiu X Agency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css?v=2.0">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'components/navbar-blog.php'; ?>

    <!-- Login Section -->
    <section class="login-section d-flex justify-content-center align-items-center vh-100">
        <div class="login-card p-5 shadow-lg rounded bg-white">
            <h2 class="text-center mb-4">Iniciar Sesión</h2>
            <form action="database/process_login.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" required autocomplete="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required autocomplete="current-password">
                </div>
                <button type="submit" class="btn btn-orange w-100">Iniciar Sesión</button>
            </form>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
