<?php
// Incluir la verificación de la sesión, no es obligatorio iniciar sesión para acceder a esta página.
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Pixiu X Agency</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Library for Animations -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css?v=2.0">
    <link rel="stylesheet" href="css/responsive.css?v=2.0">
    <link rel="stylesheet" href="css/modal.css?v=2.0">
    <link rel="stylesheet" href="css/blog.css?v=2.0"> <!-- Nueva hoja de estilos específica para el blog -->
</head>

<body>

    <!-- Navbar -->
    <?php include 'components/navbar-blog.php'; ?>

    <!-- Hero Section -->
    <section class="hero-blog text-center py-5" style="background: url('https://via.placeholder.com/1200x400') center/cover no-repeat;">
        <div class="overlay bg-dark bg-opacity-50 position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative text-white">
            <h1 class="display-4 fw-bold">Consejos para Impulsar tu Negocio</h1>
            <p class="lead">Descubre estrategias útiles y consejos prácticos para optimizar tu marketing y hacer crecer tu negocio.</p>
        </div>
    </section>

    <!-- Search Bar Section -->
    <section class="search-bar py-4">
        <div class="container">
            <div class="search-container mx-auto d-flex justify-content-center align-items-center">
                <input type="text" id="searchInput" class="form-control search-input me-2" placeholder="Buscar artículos..." onkeyup="searchArticles()">
                <button class="btn search-btn"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="blog-posts py-5">
        <div class="container">
            <h2 class="text-center mb-5">Últimos Artículos</h2>
            <div class="blog-grid" id="blogGrid">
                <!-- Ejemplos de artículos, ajusta según tu base de datos -->
                <article class="blog-card" data-aos="fade-up" data-title="Estrategias para Mejorar tu Marketing Digital">
                    <img src="https://via.placeholder.com/400x300" alt="Marketing Tips" class="blog-img">
                    <div class="blog-content">
                        <h5>Estrategias para Mejorar tu Marketing Digital</h5>
                        <p>Optimiza tus campañas con estos consejos prácticos.</p>
                        <a href="/blog/marketing-estrategias" class="btn btn-custom">Leer más &rarr;</a>
                    </div>
                </article>

                <!-- Agrega más artículos aquí -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Inicializar AOS (Animate On Scroll) Library
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Función para buscar artículos
        function searchArticles() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const articles = document.querySelectorAll('.blog-card');

            articles.forEach(article => {
                const title = article.getAttribute('data-title').toLowerCase();
                if (title.includes(input)) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        }
    </script>

</body>

</html>
