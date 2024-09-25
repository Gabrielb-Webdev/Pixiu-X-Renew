<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Pixiu X Agency</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/blog.css"> <!-- Nueva hoja de estilos específica para el blog -->
</head>

<body>

    <!-- Navbar -->
    <?php include 'components/navbar.php'; ?>

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
            <div class="row" data-masonry='{"percentPosition": true }'>
                <!-- Blog Post 1 -->
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <article class="card border-0 shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x300" alt="Consejos de Marketing" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Estrategias para Mejorar tu Marketing Digital</h5>
                            <p class="card-text">Aprende a optimizar tus campañas con estos consejos prácticos y comienza a ver resultados.</p>
                            <a href="/blog/marketing-estrategias" class="btn btn-link text-decoration-none text-orange fw-bold">Leer más &rarr;</a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <article class="card border-0 shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x300" alt="SEO Tips" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Consejos de SEO para Aumentar tu Tráfico</h5>
                            <p class="card-text">Mejora la visibilidad de tu sitio web con estos tips de SEO efectivos y gratuitos.</p>
                            <a href="/blog/seo-tips" class="btn btn-link text-decoration-none text-orange fw-bold">Leer más &rarr;</a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <article class="card border-0 shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x300" alt="Social Media" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Cómo Crear Contenido Atractivo en Redes Sociales</h5>
                            <p class="card-text">Descubre cómo captar la atención de tu audiencia con contenido relevante y creativo.</p>
                            <a href="/blog/social-media-content" class="btn btn-link text-decoration-none text-orange fw-bold">Leer más &rarr;</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
    </script>

</body>

</html>
