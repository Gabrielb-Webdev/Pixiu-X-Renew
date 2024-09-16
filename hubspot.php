<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | Custom Software Development</title>
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
                    <h6 class="text-uppercase text-orange">Custom Software Development </h6>
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
                    <img src="images/hubspot/1.webp" alt="Image 1" id="image-1" loading="lazy">
                    <img src="images/hubspot/2.webp" alt="Image 2" id="image-2" loading="lazy">
                    <img src="images/hubspot/3.webp" alt="Image 3" id="image-3" loading="lazy">
                    <img src="images/hubspot/4.webp" alt="Image 4" id="image-4" loading="lazy">
                    <img src="images/hubspot/5.webp" alt="Image 5" id="image-5" loading="lazy">
                    <img src="images/hubspot/6.webp" alt="Image 6" id="image-6" loading="lazy">
                    <img src="images/hubspot/Operating system-amico.webp" alt="Construction Image" id="image-8">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->

    <!-- Start of Service Details Section -->
    <section id="info" class="service-details-section">
        <!-- Full-width background image -->
        <div class="background-image"></div>

        <!-- Card container -->
        <div class="container-fluid position-relative d-flex justify-content-center align-items-center card-container">
            <!-- Card with image and service details -->
            <div class="card shadow-lg p-0 overflow-hidden">
                <div class="row g-0 align-items-center">
                    <!-- Image inside the card -->
                    <div class="col-md-6">
                        <img src="images/Website Creator-bro.webp" alt="Service Illustration" class="img-fluid service-img">
                    </div>

                    <!-- Service Details inside the card -->
                    <div class="col-md-6 service-details p-4">
                        <h2>Tailored <span class="text-orange">Software Solutions</span> & Comprehensive <span class="text-orange">Tech Services</span></h2>
                        <p>We specialize in crafting bespoke software solutions that align with your business needs. Pixiu offers high-quality, scalable solutions, including Web Design, Custom Web Development, E-commerce Development, and Mobile Applications tailored to your specific requirements.</p>
                        <p>Our team provides precision-driven solutions to optimize your operations and drive business growth.</p>

                        <!-- Service Progress -->
                        <div class="service-progress mb-4">
                            <div class="progress-item">
                                <span>Web Design</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="90"></div>
                                    <span class="percentage">90%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Custom Web Development</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="85"></div>
                                    <span class="percentage">85%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>E-commerce Development</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="80"></div>
                                    <span class="percentage">80%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Mobile Applications</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="75"></div>
                                    <span class="percentage">75%</span>
                                </div>
                            </div>
                        </div>

                        <p>Pixiu’s services are designed to provide you with tailored solutions that enhance productivity and accelerate growth. Whether you're looking for a new website, an online store, or a mobile app, our experts are here to help.</p>
                        <p>We offer ongoing support and optimization to ensure your software evolves alongside your business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details Section -->

    <!-- Start of Steps to Success Section -->
    <section id="steps-success" class="steps-section">
        <div class="container-fluid text-center py-5">
            <!-- Section Title -->
            <h2 class="fw-bold">Our 5 Steps <span class="text-orange">To Success</span></h2>
            <p class="text-muted">How we deliver top-notch custom software solutions to help your business thrive.</p>

            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center mt-4 mb-5" id="stepsTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="discovery-tab" data-bs-toggle="tab" href="#discovery" role="tab" aria-controls="discovery" aria-selected="true">Discovery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="design-tab" data-bs-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="development-tab" data-bs-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="false">Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="review-tab" data-bs-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="maintenance-tab" data-bs-toggle="tab" href="#maintenance" role="tab" aria-controls="maintenance" aria-selected="false">Maintenance</a>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="stepsContent">
                <!-- Discovery Step -->
                <div class="tab-pane fade show active" id="discovery" role="tabpanel" aria-labelledby="discovery-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Discovery</h3>
                            <p class="text-muted">We kick off by understanding your business needs, gathering software requirements, and aligning on the project scope. This ensures we're building the right solution for you.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Business Analysis</span>
                                <span class="tag-label">Project Scope</span>
                                <span class="tag-label">Requirement Gathering</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Website Creator-rafiki.webp" alt="Discovery Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Design Step -->
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Design</h3>
                            <p class="text-muted">Our design team collaborates with you to create wireframes and mockups, defining how the software will look and feel. We also solidify the architecture and technology stack at this stage.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Wireframes</span>
                                <span class="tag-label">Mockups</span>
                                <span class="tag-label">Tech Stack</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Website Creator-rafiki.webp" alt="Design Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Development Step -->
                <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Development</h3>
                            <p class="text-muted">This is where the magic happens! Our developers write the code and build the features that will turn your vision into reality, focusing on quality and scalability.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Coding</span>
                                <span class="tag-label">Feature Development</span>
                                <span class="tag-label">Scalability</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Website Creator-rafiki.webp" alt="Development Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Review Step -->
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Review</h3>
                            <p class="text-muted">Before launching, we thoroughly test the software, review functionality, and ensure everything works as expected. We collaborate with you to gather feedback and make improvements if necessary.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Testing</span>
                                <span class="tag-label">Feedback</span>
                                <span class="tag-label">Bug Fixing</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Website Creator-rafiki.webp" alt="Review Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Maintenance Step -->
                <div class="tab-pane fade" id="maintenance" role="tabpanel" aria-labelledby="maintenance-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Maintenance</h3>
                            <p class="text-muted">Once the software is live, our team continues to monitor its performance, providing updates, security patches, and feature enhancements to keep it aligned with your evolving business needs.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Security</span>
                                <span class="tag-label">Feature Updates</span>
                                <span class="tag-label">Ongoing Support</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Website Creator-rafiki.webp" alt="Maintenance Step" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Steps to Success Section -->

    <!-- Start of Call-to-Action Section -->
    <section id="call-to-action" class="cta-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold text-white">Are You Ready To Work & Develop With Us?</h2>
            <p class="text-white">Don't Hesitate & Contact Us!</p>
            <a href="contact.php" class="btn btn-orange">Contact Us Now!</a>
        </div>
    </section>
    <!-- End of Call-to-Action Section -->

    <!-- Start of Footer Section -->
    <footer class="footer-section text-center py-4">
        <p class="mb-0">Copyright © 2024 Pixiu. All rights reserved.</p>
        <p>Design: Your Name</p>
    </footer>
    <!-- End of Footer Section -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/animations.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleccionamos todos los elementos que tienen la clase nav-link dentro de #stepsTabs
        const tabs = document.querySelectorAll('#stepsTabs .nav-link');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault(); // Evitamos el comportamiento por defecto
                const target = this.getAttribute('href'); // Obtenemos el destino del tab
                const section = document.querySelector(target); // Seleccionamos la sección del tab
                const offset = 400; // Ajusta el desplazamiento según sea necesario (en píxeles)

                // Calculamos la posición de desplazamiento restando el offset
                const scrollPosition = section.offsetTop - offset;

                // Deslizamos suavemente a la posición calculada
                window.scrollTo({
                    top: scrollPosition,
                    behavior: 'smooth'
                });

                // Cambiamos el contenido del tab
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // Mostramos el contenido del tab
                document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
                document.querySelector(target).classList.add('show', 'active');
            });
        });
    });
</script>

</body>

</html>