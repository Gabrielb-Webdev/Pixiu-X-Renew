<?php
include 'database/session_check.php';
include 'database/db_connection.php';

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$query = "SELECT slug, title, excerpt, image_url FROM articles WHERE status = 'published' ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}

$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Pixiu X Agency</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Logos/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/Logos/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="/Logos/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/Logos/favicon-16x16.png" />
    <link rel="manifest" href="/Logos/site.webmanifest" />
    <link rel="mask-icon" href="/Logos/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="/Logos/favicon.ico" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Library for Animations -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css?v=3.0">
    <link rel="stylesheet" href="css/responsive.css?v=3.0">
    <link rel="stylesheet" href="css/modal.css?v=3.0">
    <link rel="stylesheet" href="css/blog.css?v=5.0">
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

    <!-- Blog Posts Section -->
    <section class="blog-posts py-5">
        <div class="container">
            <h2 class="text-center mb-5">Últimos Artículos</h2>
            <div class="blog-grid" id="blogGrid">
                <?php if (!empty($articles)) {
                    foreach ($articles as $index => $article) { ?>
                        <article class="blog-card <?php echo $index >= 8 ? 'hidden-article' : ''; ?>" data-aos="fade-up" data-title="<?php echo htmlspecialchars($article['title']); ?>">
                            <img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" class="blog-img">
                            <div class="blog-content">
                                <h5><?php echo htmlspecialchars($article['title']); ?></h5>
                                <p><?php echo htmlspecialchars($article['excerpt']); ?></p>
                                <a href="/blog/<?php echo urlencode($article['slug']); ?>" class="btn btn-custom">Leer más &rarr;</a>
                            </div>
                        </article>
                <?php }
                } else {
                    echo "<p class='text-center'>No se encontraron artículos publicados.</p>";
                } ?>
            </div>
            <div class="text-center mt-4">
                <button id="loadMoreBtn" class="btn btn-primary">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>

    <!-- Script para cargar más artículos -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loadMoreBtn = document.getElementById("loadMoreBtn");
            const articles = document.querySelectorAll(".blog-card.hidden-article");
            let currentArticleIndex = 8;

            loadMoreBtn.addEventListener("click", function() {
                const nextArticles = Array.from(articles).slice(currentArticleIndex, currentArticleIndex + 4);

                nextArticles.forEach((article, index) => {
                    article.classList.add("show-article"); // Añade clase para animación
                    setTimeout(() => {
                        article.classList.remove("hidden-article"); // Remueve la clase de oculto
                    }, index * 100); // Retardo progresivo para cada artículo
                });

                currentArticleIndex += 4;

                if (currentArticleIndex >= articles.length) {
                    loadMoreBtn.style.display = "none";
                }
            });
        });
    </script>

</body>

</html>