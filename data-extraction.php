<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | Data Extraction Services</title>
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
                    <h6 class="text-uppercase text-orange">Data Extraction Services</h6>
                    <div class="underline-orange"></div>
                    <h1 class="fw-bold">
                        Craft Powerful Data Extraction Tools Swiftly
                    </h1>
                    <p class="text-muted">
                        Pixiu specializes in creating robust web scrapers and automating data extraction processes to enhance your business's efficiency.
                    </p>
                    <div class="buttons mt-4">
                        <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
                    </div>
                </div>
                <!-- Contenedor de imágenes apiladas -->
                <div class="image-container">
                    <img src="images/data-extraction/1.webp" alt="Data Extraction Image 1" id="image-1" loading="lazy">
                    <img src="images/data-extraction/2.webp" alt="Data Extraction Image 2" id="image-2" loading="lazy">
                    <img src="images/data-extraction/3.webp" alt="Data Extraction Image 3" id="image-3" loading="lazy">
                    <img src="images/data-extraction/4.webp" alt="Data Extraction Image 4" id="image-4" loading="lazy">
                    <img src="images/data-extraction/5.webp" alt="Data Extraction Image 4" id="image-5" loading="lazy">
                    <img src="images/data-extraction/Data extraction-amico.webp" alt="Data Extraction Image 4" id="image-8" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->

<!-- Start of Service Details Section -->
<section id="info" class="service-details-section">
    <div class="container-fluid position-relative d-flex justify-content-center align-items-center card-container">
        <!-- Card with image and service details -->
        <div class="card shadow-lg p-0 overflow-hidden">
            <div class="row g-0 align-items-center">
                <!-- Image inside the card -->
                <div class="col-md-6">
                    <img src="images/Data extraction-rafiki.webp" alt="Data Extraction Service Illustration" class="img-fluid service-img">
                </div>

                <!-- Service Details inside the card -->
                <div class="col-md-6 service-details p-4">
                    <h2 class="text-center mb-4">Our <span class="text-orange">Data Extraction Expertise</span></h2>

                    <!-- Website Data Extraction -->
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fas fa-globe text-orange me-2" style="font-size: 24px;"></i>
                        <h4 class="text-orange mb-0">Website Data Extraction</h4>
                    </div>
                    <div class="progress-item mb-2">
                        <span>Accuracy & Speed</span>
                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 98%;"></div>
                            <span class="percentage">98%</span>
                        </div>
                    </div>
                    <p class="text-muted">Efficiently capture structured and unstructured data from websites tailored to your needs.</p>

                    <!-- Prospect/Lead Extraction -->
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fas fa-user-friends text-orange me-2" style="font-size: 24px;"></i>
                        <h4 class="text-orange mb-0">Prospect/Lead Extraction</h4>
                    </div>
                    <div class="progress-item mb-2">
                        <span>Lead Quality</span>
                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 95%;"></div>
                            <span class="percentage">95%</span>
                        </div>
                    </div>
                    <p class="text-muted">Extract high-quality leads and prospects, customized to fit your business strategy.</p>

                    <!-- Social Media Extraction -->
                    <div class="mb-3 d-flex align-items-center">
                        <i class="fas fa-hashtag text-orange me-2" style="font-size: 24px;"></i>
                        <h4 class="text-orange mb-0">Social Media Data Extraction</h4>
                    </div>
                    <div class="progress-item mb-2">
                        <span>Engagement Insights</span>
                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 93%;"></div>
                            <span class="percentage">93%</span>
                        </div>
                    </div>
                    <p class="text-muted">Gain valuable insights from social media platforms to enhance your marketing efforts.</p>

                    <!-- Custom Data Solutions -->
                    <div class="progress-item mb-2">
                        <span>Customization & Scalability</span>
                        <div class="progress">
                            <div class="progress-bar bg-orange" style="width: 97%;"></div>
                            <span class="percentage">97%</span>
                        </div>
                    </div>
                    <p class="text-muted">We design custom extraction solutions to scale with your business needs and data requirements.</p>

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

    <!-- Start of Data Extraction Service Plans Section -->
    <section id="data-extraction-plans" class="plans-section py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Choose Your <span class="text-orange">Data Extraction Plan</span></h2>
            <div class="row justify-content-center">
                <!-- Card 1: Basic Data Extraction Plan -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Basic Data Extraction Plan</h4>
                            <p class="plan-price">
                                <span class="old-price">$1,499</span> <span class="new-price">$899</span>
                            </p>
                            <p class="plan-preview">For companies needing basic, targeted data.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Basic Data Extraction Plan</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-check-circle"></i> Basic Web Data Extraction</li>
                                <li><i class="fas fa-file-download"></i> Export to CSV/Excel</li>
                                <li><i class="fas fa-database"></i> Basic Database Integration</li>
                                <li><i class="fas fa-sync"></i> Weekly Updates</li>
                                <li><i class="fas fa-clock"></i> Support: 30 Days</li>
                            </ul>
                            <a href="basic-extraction.php" class="btn btn-orange mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Advanced Data Extraction Plan -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Advanced Data Extraction Plan</h4>
                            <p class="plan-price">
                                <span class="old-price">$2,999</span> <span class="new-price">$1,799</span>
                            </p>
                            <p class="plan-preview">For growing businesses needing advanced extraction.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Advanced Data Extraction Plan</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-cogs"></i> Advanced & Custom Extraction</li>
                                <li><i class="fas fa-robot"></i> Workflow Automation</li>
                                <li><i class="fas fa-chart-line"></i> Real-time Data Analysis</li>
                                <li><i class="fas fa-layer-group"></i> BI Tools Integration</li>
                                <li><i class="fas fa-calendar-alt"></i> Support: 60 Days</li>
                            </ul>
                            <a href="advanced-extraction.php" class="btn btn-orange mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Enterprise Data Extraction Plan -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Enterprise Data Extraction Plan</h4>
                            <p class="plan-price">
                                <span class="old-price">$5,499</span> <span class="new-price">$3,499</span>
                            </p>
                            <p class="plan-preview">For large-scale data extraction and analysis needs.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Enterprise Data Extraction Plan</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-server"></i> Large-scale Data Extraction</li>
                                <li><i class="fas fa-chart-pie"></i> Custom Dashboards & Reports</li>
                                <li><i class="fas fa-shield-alt"></i> Compliance & Data Security</li>
                                <li><i class="fas fa-headset"></i> Continuous Support & Maintenance</li>
                                <li><i class="fas fa-rocket"></i> Process & Data Flow Optimization</li>
                            </ul>
                            <a href="enterprise-extraction.php" class="btn btn-orange mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Data Extraction Service Plans Section -->

    <!-- Start of Steps to Success Section -->
    <section id="steps-success" class="steps-section">
        <div class="container-fluid text-center py-5">
            <!-- Section Title -->
            <h2 class="fw-bold">Our 4 Steps <span class="text-orange">To Data Extraction Success</span></h2>
            <p class="text-muted">How we deliver top-notch data extraction solutions to help your business thrive.</p>

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
                            <p class="text-muted">Our first interaction begins with understanding your data extraction requirements, industry, tech stacks, architecture, deadlines, and budget.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Data extraction-cuate.webp" alt="Consultation Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Requirement Analysis Step -->
                <div class="tab-pane fade" id="analysis" role="tabpanel" aria-labelledby="analysis-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Requirement Analysis</h3>
                            <p class="text-muted">Next, our tech team will work with you to simplify your project, define technical possibilities, and plan out optimized solutions tailored to your needs.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Data extraction-cuate.webp" alt="Analysis Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Final Project Estimation Step -->
                <div class="tab-pane fade" id="estimation" role="tabpanel" aria-labelledby="estimation-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Final Project Estimation</h3>
                            <p class="text-muted">We’ll prepare an estimation with scope, objectives, and a cost breakdown. This will be shared with you for review, ensuring transparency before proceeding.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Data extraction-cuate.webp" alt="Estimation Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Project Kickoff Step -->
                <div class="tab-pane fade" id="kickoff" role="tabpanel" aria-labelledby="kickoff-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Project Kickoff</h3>
                            <p class="text-muted">Once the project estimation is approved, we begin the project, collaborating with you to ensure smooth progress and timely updates.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/Data extraction-cuate.webp" alt="Kickoff Step" class="img-fluid">
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
            const tabs = document.querySelectorAll('#stepsTabs .nav-link');

            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = this.getAttribute('href');
                    const section = document.querySelector(target);
                    const offset = 400;

                    const scrollPosition = section.offsetTop - offset;

                    window.scrollTo({
                        top: scrollPosition,
                        behavior: 'smooth'
                    });

                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
                    document.querySelector(target).classList.add('show', 'active');
                });
            });
        });
    </script>

</body>

</html>