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
                    <h6 class="text-uppercase text-orange">HubSpot Implementation & Consulting</h6>
                    <div class="underline-orange"></div>
                    <h1 class="fw-bold">
                        Unlock HubSpot's Full Potential for Your Business
                    </h1>
                    <p class="text-muted">
                        At Pixiu, we specialize in seamless HubSpot onboarding and training, tailored to your team's needs. Let us help you integrate HubSpot effortlessly into your company's ecosystem for smooth and effective implementation.
                    </p>
                    <div class="buttons mt-4">
                        <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
                    </div>
                </div>
                <!-- Contenedor de imágenes apiladas -->
                <div class="image-container">
                    <img src="images/hubspot/1.webp" alt="HubSpot Implementation Image 1" id="image-1" loading="lazy">
                    <img src="images/hubspot/2.webp" alt="HubSpot Implementation Image 2" id="image-2" loading="lazy">
                    <img src="images/hubspot/3.webp" alt="HubSpot Implementation Image 3" id="image-3" loading="lazy">
                    <img src="images/hubspot/4.webp" alt="HubSpot Implementation Image 4" id="image-4" loading="lazy">
                    <img src="images/hubspot/5.webp" alt="HubSpot Implementation Image 5" id="image-5" loading="lazy">
                    <img src="images/hubspot/6.webp" alt="HubSpot Implementation Image 6" id="image-6" loading="lazy">
                    <img src="images/hubspot/Operating system-amico.webp" alt="HubSpot Integration Illustration" id="image-8">
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
                        <img src="images/Operating system-rafiki.webp" alt="HubSpot Service Illustration" class="img-fluid service-img">
                    </div>

                    <!-- Service Details inside the card -->
                    <div class="col-md-6 service-details p-4">
                        <h2><span class="text-orange">HubSpot Implementation</span> & <span class="text-orange">Consulting Services</span></h2>
                        <p>At Pixiu, we offer a range of tailored HubSpot services to meet your specific business needs. Our solutions include HubSpot Implementation and Training, HubSpot Optimization, and Personalized HubSpot Consulting, all designed to ensure your team maximizes HubSpot's potential.</p>
                        <p>We provide expert guidance, step-by-step onboarding, and hands-on training to guarantee smooth integration and efficient use of HubSpot's powerful tools.</p>

                        <!-- Service Progress -->
                        <div class="service-progress mb-4">
                            <div class="progress-item">
                                <span>Implementation & Training</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="95"></div>
                                    <span class="percentage">95%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Optimization</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="90"></div>
                                    <span class="percentage">90%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Consulting</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="85"></div>
                                    <span class="percentage">85%</span>
                                </div>
                            </div>
                        </div>

                        <p>Pixiu’s HubSpot services ensure that your business leverages the full power of the platform. Whether you're integrating HubSpot for the first time or looking to optimize your existing setup, our experts are here to guide you through the process.</p>
                        <p>We also offer ongoing consulting and support to keep your HubSpot platform evolving with your business needs.</p>
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
            <h2 class="fw-bold">Our 4 Steps <span class="text-orange">To HubSpot Success</span></h2>
            <p class="text-muted">How we deliver top-notch HubSpot solutions to help your business thrive.</p>

            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center mt-4 mb-5" id="stepsTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="consultation-tab" data-bs-toggle="tab" href="#consultation" role="tab" aria-controls="consultation" aria-selected="true">Initial Consultation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="analysis-tab" data-bs-toggle="tab" href="#analysis" role="tab" aria-controls="analysis" aria-selected="false">Requirement Analysis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="estimation-tab" data-bs-toggle="tab" href="#estimation" role="tab" aria-controls="estimation" aria-selected="false">Final Project Estimation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kickoff-tab" data-bs-toggle="tab" href="#kickoff" role="tab" aria-controls="kickoff" aria-selected="false">Project Kickoff</a>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="stepsContent">
                <!-- Initial Consultation Step -->
                <div class="tab-pane fade show active" id="consultation" role="tabpanel" aria-labelledby="consultation-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Initial Consultation</h3>
                            <p class="text-muted">Our first interaction begins with understanding your HubSpot requirements, industry, tech stacks, architecture, deadlines, and budget. This helps us shape the best approach to meet your needs.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Business Needs</span>
                                <span class="tag-label">Tech Stack</span>
                                <span class="tag-label">Budget & Timelines</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Operating system-pana.webp" alt="Consultation Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Requirement Analysis Step -->
                <div class="tab-pane fade" id="analysis" role="tabpanel" aria-labelledby="analysis-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Requirement Analysis</h3>
                            <p class="text-muted">Next, our tech team will work with you to define technical possibilities and optimizations tailored to your business. We simplify the project’s scope and prepare actionable plans.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Technical Analysis</span>
                                <span class="tag-label">Optimization Planning</span>
                                <span class="tag-label">Tailored Solutions</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Operating system-pana.webp" alt="Analysis Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Final Project Estimation Step -->
                <div class="tab-pane fade" id="estimation" role="tabpanel" aria-labelledby="estimation-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Final Project Estimation</h3>
                            <p class="text-muted">We’ll prepare a detailed project estimation with scope, objectives, and cost breakdown. This will be shared with you for review, ensuring full transparency before proceeding.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Project Scope</span>
                                <span class="tag-label">Cost Estimation</span>
                                <span class="tag-label">Objectives & Deliverables</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Operating system-pana.webp" alt="Estimation Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Project Kickoff Step -->
                <div class="tab-pane fade" id="kickoff" role="tabpanel" aria-labelledby="kickoff-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Project Kickoff</h3>
                            <p class="text-muted">Once the estimation is approved, we will immediately begin the project. Our dedicated team will collaborate closely with you, ensuring smooth progress and timely updates throughout.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Team Collaboration</span>
                                <span class="tag-label">Project Management</span>
                                <span class="tag-label">Ongoing Communication</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Operating system-pana.webp" alt="Kickoff Step" class="img-fluid">
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