<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | HubSpot Consulting</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GSAP (ScrollTrigger) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/services.css">
</head>

<body>
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
                        <h2 class="text-center mb-4"><span class="text-orange">Our HubSpot Expertise</span></h2>

                        <!-- HubSpot Implementation -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-cogs text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Implementation & Training</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Integration Efficiency</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 95%;"></div>
                                <span class="percentage">95%</span>
                            </div>
                        </div>
                        <p class="text-muted">Seamless integration and comprehensive training to empower your team.</p>

                        <!-- HubSpot Optimization -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-chart-line text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Optimization</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Performance Enhancement</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 90%;"></div>
                                <span class="percentage">90%</span>
                            </div>
                        </div>
                        <p class="text-muted">Optimize your HubSpot setup for maximum efficiency and results.</p>

                        <!-- HubSpot Consulting -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-lightbulb text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Consulting</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Expert Guidance</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 88%;"></div>
                                <span class="percentage">88%</span>
                            </div>
                        </div>
                        <p class="text-muted">Personalized consulting to help you navigate HubSpot's full potential.</p>

                        <!-- Ongoing Support -->
                        <div class="progress-item mb-2">
                            <span>Support & Maintenance</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 92%;"></div>
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                        <p class="text-muted">Continuous support to ensure your HubSpot system evolves with your business.</p>

                        <!-- Call to Action -->
                        <div class="text-center mt-4">
                            <h5 class="text-muted">Have questions?</h5>
                            <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange">Book a Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details Section -->

    <!-- Start of HubSpot Service Plans Section -->
    <section id="hubspot-plans" class="plans-section py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Choose Your <span class="text-orange">HubSpot Plan</span></h2>
            <div class="row justify-content-center">
                <!-- Card 1: HubSpot Basic Plan -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">HubSpot Basic Plan</h4>
                            <p class="plan-price">
                                <span class="old-price">$1,299</span> <span class="new-price">$799</span>
                            </p>
                            <p class="plan-preview">Perfect for small businesses starting with HubSpot.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">HubSpot Basic Plan</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-check-circle"></i> Initial HubSpot Setup</li>
                                <li><i class="fas fa-user-friends"></i> Team Training</li>
                                <li><i class="fas fa-database"></i> Contact Import & Data</li>
                                <li><i class="fas fa-robot"></i> Basic Email Automation</li>
                                <li><i class="fas fa-clock"></i> Support: 30 Days</li>
                            </ul>
                            <a href="hubspot-basic.php" class="btn btn-orange mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: HubSpot Growth Plan -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">HubSpot Growth Plan</h4>
                            <p class="plan-price">
                                <span class="old-price">$2,499</span> <span class="new-price">$1,499</span>
                            </p>
                            <p class="plan-preview">For growing businesses leveraging HubSpot's power.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">HubSpot Growth Plan</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-cogs"></i> Advanced Setup & Customization</li>
                                <li><i class="fas fa-users-cog"></i> Sales & Marketing Automation</li>
                                <li><i class="fas fa-chart-line"></i> CRM & Third-Party Integrations</li>
                                <li><i class="fas fa-bullseye"></i> SEO Strategy & Lead Generation</li>
                                <li><i class="fas fa-calendar-alt"></i> Support: 60 Days</li>
                            </ul>
                            <a href="hubspot-growth.php" class="btn btn-orange mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: HubSpot Premium Plan -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">HubSpot Premium Plan</h4>
                            <p class="plan-price">
                                <span class="old-price">$4,999</span> <span class="new-price">$2,999</span>
                            </p>
                            <p class="plan-preview">Complete HubSpot solution for established businesses.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">HubSpot Premium Plan</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> Full Setup & CRM Audit</li>
                                <li><i class="fas fa-lightbulb"></i> Advanced Marketing Strategy</li>
                                <li><i class="fas fa-sync-alt"></i> Workflow Optimization</li>
                                <li><i class="fas fa-chart-pie"></i> Custom Dashboards & Reports</li>
                                <li><i class="fas fa-headset"></i> Support: 90 Days</li>
                            </ul>
                            <a href="hubspot-premium.php" class="btn btn-orange mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of HubSpot Service Plans Section -->

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