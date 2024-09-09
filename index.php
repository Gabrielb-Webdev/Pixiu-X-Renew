<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Inicio de Sección de Contacto -->
    <div class="container py-3 d-none d-md-flex flex-column flex-md-row justify-content-between align-items-center contact-section">
        <!-- Contact Info -->
        <div class="d-flex flex-column flex-md-row align-items-center mb-3 mb-md-0">
            <div class="me-md-4 mb-2 mb-md-0">
                <i class="fas fa-phone-alt text-warning"></i> +000 1234 5678
            </div>
            <div class="me-md-4 mb-2 mb-md-0">
                <i class="fas fa-envelope text-warning"></i> infocompany@email.com
            </div>
            <div>
                <i class="fas fa-map-marker-alt text-warning"></i> St. London 54th Bull
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
    <!-- Fin de Sección de Contacto -->

    <!-- Inicio de Navbar -->
    <?php include 'components/navbar.php'; ?>
    <!-- Fin de Navbar -->

    <!-- Inicio de Sección de Bienvenida -->
    <section class="welcome-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 welcome-text">
                    <h6 class="text-uppercase text-orange">HubSpot Consulting Services</h6>
                    <h1 class="fw-bold">
                        Unlock <span class="text-orange">HubSpot's Full Potential</span> With Pixiu
                    </h1>
                    <p class="text-muted">At Pixiu, we specialize in seamless HubSpot onboarding and training tailored to your team's needs. Integrate HubSpot effortlessly into your company's ecosystem for smooth and effective implementation.</p>
                    <div class="buttons mt-4">
                        <a href="#" class="btn btn-orange me-2">Discover More</a>
                        <a href="#" class="btn btn-outline-orange">Check Our FAQs</a>
                    </div>
                </div>
                <!-- Placeholder for image -->
                <div class="col-md-6">
                    <div class="image-placeholder">
                        <!-- Image will go here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de Sección de Bienvenida -->

    <!-- Inicio de Sección de Servicios -->
    <section class="services-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Imagen a la izquierda -->
                <div class="col-md-6">
                    <div class="services-image">
                        <img src="images/rocket-illustration.png" alt="Rocket Illustration" class="img-fluid">
                    </div>
                </div>

                <!-- Servicios a la derecha -->
                <div class="col-md-6">
                    <h2 class="fw-bold">
                        HubSpot <span class="text-orange">Consulting</span> & <span class="text-orange">Services</span> We Offer
                    </h2>
                    <p class="text-muted mb-4">Maximize your HubSpot investment with our specialized services.</p>

                    <!-- Cards de Servicios -->
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="service-card p-3">
                                <h5 class="fw-bold">HubSpot Implementation and Training</h5>
                                <p class="text-muted">Customized onboarding and training to maximize your HubSpot investment.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="service-card p-3">
                                <h5 class="fw-bold">HubSpot Optimization</h5>
                                <p class="text-muted">Optimize and streamline your HubSpot processes for enhanced efficiency.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="service-card p-3">
                                <h5 class="fw-bold">Personalized HubSpot Consulting</h5>
                                <p class="text-muted">Consulting services tailored to your specific business needs and goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de Sección de Servicios -->

    <!-- Inicio de Sección de Paquetes/Proyectos (Carrusel) -->
    <section class="package-section py-5">
        <div class="container-fluid">
            <h2 class="fw-bold text-center mb-4">HubSpot <span class="text-orange">Service Packages</span> & <span class="text-orange">Details</span></h2>
            <p class="text-center text-muted mb-5">Explore our service packages designed to meet your unique needs.</p>

            <?php include 'components/carousel.php'; ?>

        </div>
    </section>
    <!-- Fin de Sección de Paquetes/Proyectos (Carrusel) -->

    <!-- Inicio de Sección de Detalles de Servicios -->
    <section class="service-details-section">
        <!-- Imagen de fondo que ocupa todo el ancho -->
        <div class="background-image"></div>

        <!-- Contenedor de la card -->
        <div class="container position-relative d-flex justify-content-center align-items-center card-container">
            <!-- Card con imagen y detalles del servicio -->
            <div class="card shadow-lg p-0 overflow-hidden">
                <div class="row g-0 align-items-center">
                    <!-- Imagen dentro de la card pegada a los bordes -->
                    <div class="col-md-6">
                        <img src="images/left-infos_2.jpg" alt="Rocket Illustration" class="img-fluid rocket-img">
                    </div>

                    <!-- Detalles del Servicio dentro de la card -->
                    <div class="col-md-6 service-details p-4">
                        <h2>HubSpot <span class="text-orange">Service Details</span> & Consultation</h2>
                        <p>Unleash HubSpot’s potential with Pixiu’s onboarding and training. Our tailored approach ensures maximum integration and minimal disruption.</p>
                        <p>We offer in-depth knowledge, comprehensive training sessions, and detailed playbooks to equip your team with essential skills.</p>

                        <!-- Progreso de Servicios -->
                        <div class="service-progress mb-4">
                            <div class="progress-item">
                                <span>Marketing</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="90"></div>
                                    <span class="percentage">90%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Digital Media</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="80"></div>
                                    <span class="percentage">80%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Social Media Managing</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="95"></div>
                                    <span class="percentage">95%</span>
                                </div>
                            </div>
                        </div>

                        <p>Pixiu’s HubSpot optimization services enhance your business’s potential and productivity by resolving daily challenges.</p>
                        <p>We provide ongoing support and optimization to meet your evolving needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de Sección de Detalles de Servicios -->

    <!-- Inicio de Sección de Contacto -->
    <section class="contact-section">
        <div class="container position-relative d-flex justify-content-center align-items-center contact-card">
            <!-- Card Principal -->
            <div class="main-card shadow-lg p-5 bg-white rounded">
                <div class="row g-4 align-items-center">
                    <!-- Sub-Card para la imagen -->
                    <div class="col-md-5">
                        <div class="image-card overflow-hidden">
                            <img src="images/banner_contact.jpg" alt="Contact Illustration" class="img-fluid contact-img">
                        </div>
                    </div>

                    <!-- Sub-Card para el formulario -->
                    <div class="col-md-7">
                        <div class="form-card p-4">
                            <h2 class="text-center">Contact Us & <span class="text-orange">Get In Touch</span></h2>

                            <!-- Formulario -->
                            <form action="" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="Your Name..." required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="Your Surname..." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" placeholder="Your E-mail..." required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="Subject..." required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Your Message..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-orange w-100">Send Message Now</button>
                            </form>

                            <!-- Información de contacto adicional -->
                            <div class="contact-info text-center mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="contact-item text-center">
                                        <i class="fas fa-phone-alt"></i>
                                        <p>010-020-0340</p>
                                    </div>
                                    <div class="contact-item text-center">
                                        <i class="fas fa-envelope"></i>
                                        <p>info@company.com</p>
                                    </div>
                                    <div class="contact-item text-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p>Sunny Isles Beach, FL 33160, United States</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>Copyright © 2024 Pixiu. All rights reserved.</p>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>