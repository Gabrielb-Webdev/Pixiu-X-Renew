<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X - HubSpot Solutions, Web Development & Data Services</title>
    <meta name="description" content="Discover expert HubSpot consulting, web development, data extraction, and custom software solutions with Pixiu X to enhance your business growth.">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GSAP (ScrollTrigger) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/resposive.css">
    <link rel="stylesheet" href="css/resposive.css">
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
                    <h6 class="text-uppercase text-orange">Marketing and HubSpot Consulting Services</h6>
                    <div class="underline-orange"></div>
                    <h1 class="fw-bold">
                        Accelerate Your Business with <span class="text-orange">Pixiu</span>'s HubSpot Solutions, Web Development & Data Services
                    </h1>
                    <p class="text-muted">
                        At Pixiu, we empower businesses with expert HubSpot consulting, seamless web development, data extraction, and custom software solutions. Let us help you grow through tailored marketing strategies and cutting-edge technology.
                    </p>
                    <div class="buttons mt-4">
                        <a href="#services" class="btn btn-orange me-2">Learn More</a>
                        <span>or</span>
                        <a href="#services" class="btn btn-orange ms-2">Explore Our Services</a>
                    </div>
                </div>
                <!-- Image Container -->
                <div class="image-container">
                    <img src="images/home/1.webp" alt="Image 1" id="image-1" loading="lazy">
                    <img src="images/home/2.webp" alt="Image 2" id="image-2" loading="lazy">
                    <img src="images/home/3.webp" alt="Image 3" id="image-3" loading="lazy">
                    <img src="images/home/4.webp" alt="Image 4" id="image-4" loading="lazy">
                    <img src="images/home/5.webp" alt="Image 5" id="image-5" loading="lazy">
                    <img src="images/home/6.webp" alt="Image 6" id="image-6" loading="lazy">
                    <img src="images/home/7.webp" alt="Image 7" id="image-7" loading="lazy">
                    <img src="images/home/construction.webp" alt="Construction Image" id="image-8" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->

    <!-- Start of Services Section -->
    <section id="services" class="services-section py-5" style="min-height: 700px;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Image on the left -->
                <div class="col-md-6">
                    <div class="services-image" style="margin-left: 7.5rem;">
                        <img src="images/Telecommuting-rafiki.webp" alt="Services Illustration" class="img-fluid" style="width: 95%; max-width: 500px;">
                    </div>
                </div>

                <!-- Services on the right -->
                <div class="col-md-6">
                    <h2 class="fw-bold">
                        Comprehensive <span class="text-orange">Marketing</span> & <span class="text-orange">Tech Services</span> We Offer
                    </h2>
                    <div class="underline-orange"></div>
                    <p class="text-muted mb-4">Maximize your business potential with our comprehensive services.</p>

                    <!-- Service Cards -->
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="service-card p-4 text-center">
                                <i class="fas fa-hands-helping text-orange mb-3 service-icon"></i>
                                <h5 class="fw-bold">HubSpot Implementation and Optimization</h5>
                                <p class="text-muted">Expert onboarding, customization, and training to leverage HubSpot to its fullest potential.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="service-card p-4 text-center">
                                <i class="fas fa-code text-orange mb-3 service-icon"></i>
                                <h5 class="fw-bold">Web Development Services</h5>
                                <p class="text-muted">Professional web development, responsive design, and e-commerce solutions to enhance your online presence.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="service-card p-4 text-center">
                                <i class="fas fa-database text-orange mb-3 service-icon"></i>
                                <h5 class="fw-bold">Data Extraction & Automation</h5>
                                <p class="text-muted">Automated data scraping and custom integration solutions to streamline your business processes.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="service-card p-4 text-center">
                                <i class="fas fa-cogs text-orange mb-3 service-icon"></i>
                                <h5 class="fw-bold">Custom Software Development</h5>
                                <p class="text-muted">Tailored software solutions designed to fit your business needs and goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services Section -->

    <!-- Start of Projects/Packages Section (Stylized Cards) -->
    <section id="projects" class="package-section py-5">
        <div class="container-fluid">
            <h2 class="fw-bold text-center mb-4">Explore Our <span class="text-orange">Marketing</span> and <span class="text-orange">Tech Solutions</span></h2>
            <p class="text-center text-muted mb-5">Discover how our services have transformed businesses across industries.</p>

            <div class="row">
                <!-- Card 1: Marketing -->
                <div class="col-lg-3 mb-4">
                    <div class="card service-card h-100 shadow-lg border-0 rounded-lg hover-zoom">
                        <div class="card-img-container position-relative overflow-hidden">
                            <img src="images/Marketing.webp" class="card-img-top marketing-card-img" alt="Marketing">
                            <div class="card-overlay text-center d-flex justify-content-center align-items-center">
                                <!-- Botón para la página general de Marketing -->
                                <a href="marketing.php" class="btn btn-orange me-2">
                                    Marketing
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Marketing</h5>
                            <p class="card-text">Enhance your brand with tailored marketing strategies that drive growth and success.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: HubSpot Consulting -->
                <div class="col-lg-3 mb-4">
                    <div class="card service-card h-100 shadow-lg border-0 rounded-lg hover-zoom">
                        <div class="card-img-container position-relative overflow-hidden">
                            <img src="images/Operating system-pana.webp" class="card-img-top" alt="HubSpot Consulting">
                            <div class="card-overlay text-center d-flex justify-content-center align-items-center">
                                <!-- Botón para la página general de HubSpot Consulting -->
                                <a href="hubspot.php" class="btn btn-orange me-2">
                                    HubSpot Consulting
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">HubSpot Consulting</h5>
                            <p class="card-text">Maximize your marketing efforts with expert HubSpot implementation and optimization services.</p>
                        </div>
                    </div>
                </div>

                <!-- Combined Card: Website Creation & Data Extraction -->
                <div class="col-lg-3 mb-4">
                    <div class="card service-card h-100 shadow-lg border-0 rounded-lg hover-zoom">
                        <div class="card-img-container position-relative overflow-hidden">
                            <img src="images/Developer activity-amico.webp" class="card-img-top" alt="Website Creation & Data Extraction">
                            <div class="card-overlay text-center d-flex justify-content-center align-items-center">
                                <a href="web-development.php" class="btn btn-orange me-2">
                                    Website Creation
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                                <a href="data-extraction.php" class="btn btn-orange">
                                    Data Extraction
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Website Creation & Data Extraction</h5>
                            <p class="card-text">Professional website creation and data extraction solutions to meet your business needs.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Multimedia Design -->
                <div class="col-lg-3 mb-4">
                    <div class="card service-card h-100 shadow-lg border-0 rounded-lg hover-zoom">
                        <div class="card-img-container position-relative overflow-hidden">
                            <img src="images/Design.webp" class="card-img-top" alt="Multimedia Design">
                            <div class="card-overlay text-center d-flex justify-content-center align-items-center">
                                <!-- Botón para la página general de Multimedia Design -->
                                <a href="design.php" class="btn btn-orange me-2">
                                    Design Service
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Design Service</h5>
                            <p class="card-text">Take advantage of our design services for Web, Brand, and Logo Design.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Projects/Packages Section (Stylized Cards) -->

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
                        <img src="images/Checklist-pana.webp" alt="Service Illustration" class="img-fluid service-img">
                    </div>

                    <!-- Service Details inside the card -->
                    <div class="col-md-6 service-details p-4">
                        <h2>Comprehensive <span class="text-orange">Marketing</span> & <span class="text-orange">Tech Services</span></h2>
                        <p>Enhance your marketing and operational processes with Pixiu’s full-service offerings. We provide HubSpot consulting, web development, data extraction, and custom software tailored to your specific needs.</p>
                        <p>Our team delivers in-depth knowledge, comprehensive training sessions, and detailed strategies to equip your business with the essential tools for success.</p>

                        <!-- Service Progress -->
                        <div class="service-progress mb-4">
                            <div class="progress-item">
                                <span>HubSpot Consulting</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="99"></div>
                                    <span class="percentage">99%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Web Development</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="91"></div>
                                    <span class="percentage">91%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Marketing</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="97"></div>
                                    <span class="percentage">97%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Multimedia Design</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="95"></div>
                                    <span class="percentage">94%</span>
                                </div>
                            </div>
                        </div>

                        <p>Pixiu’s services are designed to enhance your business’s potential and productivity by addressing daily challenges with innovative solutions.</p>
                        <p>We provide ongoing support and optimization to meet your evolving needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details Section -->

    <!-- Start of Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container-fluid position-relative d-flex justify-content-center align-items-center contact-card">
            <!-- Main Card -->
            <div class="main-card shadow-lg p-5 bg-white rounded">
                <div class="row g-4 align-items-center">
                    <!-- Sub-Card for the image -->
                    <div class="col-md-4"> <!-- Ajuste de col-md-3 a col-md-4 -->
                        <div class="image-card overflow-hidden">
                            <img src="images/Messages-pana.webp" alt="Contact Illustration" class="img-fluid contact-img">
                        </div>
                    </div>

                    <!-- Sub-Card for the form -->
                    <div class="col-md-7"> <!-- Ajuste de col-md-8 a col-md-7 -->
                        <div class="form-card p-4" style="border: 2px solid #dd6d2c; border-radius: 15px;">
                            <h2 class="text-center">Contact Us & <span class="text-orange">Get In Touch</span></h2>

                            <!-- Form -->
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

                            <!-- Additional Contact Information -->
                            <div class="contact-info text-center mt-4">
                                <div class="row">
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <div class="contact-item text-center">
                                            <i class="fas fa-phone-alt"></i>
                                            <p>+000 1234 5678</p>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <div class="contact-item text-center">
                                            <i class="fas fa-envelope"></i>
                                            <p>info@pixiux.com</p>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <div class="contact-item text-center">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p>54th Street, London, UK</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact Section -->

    <?php include 'components/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/animations.js"></script>
</body>

</html>