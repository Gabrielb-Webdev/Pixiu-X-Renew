<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GSAP (ScrollTrigger) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Start of Contact Info Section -->
    <div class="container py-3 d-none d-md-flex flex-column flex-md-row justify-content-between align-items-center info-section">
        <!-- Contact Info -->
        <div class="d-flex flex-column flex-md-row align-items-center mb-3 mb-md-0">
            <div class="me-md-4 mb-2 mb-md-0">
                <i class="fas fa-phone-alt text-warning"></i> +000 1234 5678
            </div>
            <div class="me-md-4 mb-2 mb-md-0">
                <i class="fas fa-envelope text-warning"></i> info@pixiux.com
            </div>
            <div>
                <i class="fas fa-map-marker-alt text-warning"></i> 54th Street, London, UK
            </div>
        </div>
        <!-- Social Media Icons -->
        <div class="d-flex">
            <a href="#" class="text-warning me-3">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-warning me-3">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-warning me-3">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="text-warning">
                <i class="fab fa-google"></i>
            </a>
        </div>
    </div>
    <!-- End of Contact Info Section -->

    <!-- Start of Navbar -->
    <?php include 'components/navbar.php'; ?>
    <!-- End of Navbar -->

<!-- Start of Welcome Section -->
<section id="home" class="welcome-section position-relative">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 welcome-text">
                <h6 class="text-uppercase text-orange">Tailored Software Solutions</h6>
                <div class="underline-orange"></div>
                <h1 class="fw-bold">
                    Crafting Bespoke Software Solutions That Align with Your Business
                </h1>
                <p class="text-muted">
                    Pixiu specializes in delivering high-quality, efficient, and scalable software that optimizes your operations and fuels business growth. Let us help you with tailored solutions for your unique business needs.
                </p>
                <div class="buttons mt-4">
                    <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
                </div>
            </div>
            <!-- Contenedor de imágenes apiladas -->
            <div class="image-container">
                <img src="images/custom-software/1.webp" alt="Image 1" id="image-1" loading="lazy">
                <img src="images/custom-software/2.webp" alt="Image 2" id="image-2" loading="lazy">
                <img src="images/custom-software/3.webp" alt="Image 3" id="image-3" loading="lazy">
                <img src="images/custom-software/4.webp" alt="Image 4" id="image-4" loading="lazy">
                <img src="images/custom-software/5.webp" alt="Image 5" id="image-5" loading="lazy">
                <img src="images/custom-software/6.webp" alt="Image 6" id="image-6" loading="lazy">
                <img src="images/custom-software/7.webp" alt="Image 7" id="image-7" loading="lazy">
                <img src="images/custom-software/Hand coding-pana.webp" alt="Construction Image" id="image-8">
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/animations.js"></script>
</body>

</html>