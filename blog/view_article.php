<!-- view_article.php -->
<?php
include '../database/session_check.php';
include '../database/db_connection.php';

if (!isset($_GET['slug'])) {
    echo "Artículo no encontrado.";
    exit();
}

$slug = mysqli_real_escape_string($conn, $_GET['slug']);
$query = "SELECT title, content, image_url, created_at FROM articles WHERE slug = '$slug' AND status = 'published'";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "Artículo no encontrado.";
    exit();
}

$article = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?> | Pixiu X Agency</title>

    <!-- Favicons y Estilos -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Logos/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/Logos/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="/Logos/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/Logos/favicon-16x16.png" />
    <link rel="manifest" href="/Logos/site.webmanifest" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Bootstrap, AOS y Estilos Personalizados -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/styles.css?v=3.0">
    <link rel="stylesheet" href="/css/view_article.css?v=4.0">
</head>

<body>
    <?php include '../components/navbar-blog.php'; ?>

    <!-- Hero Section -->
    <section class="hero-article d-flex align-items-center text-center" style="background-image: url('<?php echo htmlspecialchars($article['image_url']); ?>');">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative text-white py-5">
            <h1 class="display-4 fw-bold" data-aos="fade-up"><?php echo htmlspecialchars($article['title']); ?></h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="200">Publicado el <?php echo date("d M, Y", strtotime($article['created_at'])); ?></p>
        </div>
    </section>

    <!-- Main Article Section -->
    <section class="article-container container py-5">
        <div class="row gx-5">
            <!-- Article Content -->
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
                <div class="article-content p-4 rounded shadow-sm bg-white">
                    <!-- Aquí se inserta el contenido enriquecido de CKEditor -->
                    <div class="content">
                        <?php echo $article['content']; ?>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="social-share mb-4 p-4 rounded shadow-sm bg-white">
                    <p class="fw-bold mb-3">Comparte este artículo:</p>
                    <a href="https://twitter.com/share?url=<?php echo urlencode('https://pixiux.com/blog/' . $slug); ?>" target="_blank" class="btn twitter d-block mb-2"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode('https://pixiux.com/blog/' . $slug); ?>" target="_blank" class="btn facebook d-block mb-2"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://www.linkedin.com/shareArticle?url=<?php echo urlencode('https://pixiux.com/blog/' . $slug); ?>" target="_blank" class="btn linkedin d-block"><i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </section>

    <?php include '../components/footer.php'; ?>

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
</body>

</html>
