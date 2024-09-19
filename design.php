<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | Web Design Services</title>
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
                    <h6 class="text-uppercase text-orange">Web Design Services</h6>
                    <div class="underline-orange"></div>
                    <h1 class="fw-bold">
                        Transform Your Online Presence with Stunning Web Design
                    </h1>
                    <p class="text-muted">
                        At Pixiu, we create visually stunning, user-friendly websites that align with your brand identity and business objectives. Our tailored web design solutions focus on enhancing user experience, improving engagement, and driving conversions.
                    </p>
                    <div class="buttons mt-4">
                        <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
                    </div>
                </div>
                <!-- Contenedor de imágenes apiladas -->
                <div class="image-container">
                    <img src="images/design/1.webp" alt="Design Image 1" id="image-1" loading="lazy">
                    <img src="images/design/2.webp" alt="Design Image 2" id="image-2" loading="lazy">
                    <img src="images/design/3.webp" alt="Design Image 3" id="image-3" loading="lazy">
                    <img src="images/design/4.webp" alt="Design Image 4" id="image-4" loading="lazy">
                    <img src="images/design/5.webp" alt="Design Image 5" id="image-5" loading="lazy">
                    <img src="images/design/6.webp" alt="Design Image 5" id="image-6" loading="lazy">
                    <img src="images/design/7.webp" alt="Design Image 5" id="image-7" loading="lazy">
                    <img src="images/design/Design.webp" alt="Design Illustration" id="image-8">
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
                        <img src="images/design_5.webp" alt="Design Service Illustration" class="img-fluid service-img">
                    </div>

                    <!-- Service Details inside the card -->
                    <div class="col-md-6 service-details p-4">
                        <h2 class="text-center mb-4">Our <span class="text-orange">Design Expertise</span></h2>

                        <!-- Custom Website Design -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-pencil-ruler text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Custom Website Design</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Creativity & Uniqueness</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 98%;"></div>
                                <span class="percentage">98%</span>
                            </div>
                        </div>
                        <p class="text-muted">Creating visually stunning and functional designs that reflect your brand identity.</p>

                        <!-- UX/UI Design -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-palette text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">UX/UI Design</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>User Experience</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 95%;"></div>
                                <span class="percentage">95%</span>
                            </div>
                        </div>
                        <p class="text-muted">Designing intuitive interfaces that enhance user interaction and satisfaction.</p>

                        <!-- Responsive Design -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-mobile-alt text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Responsive Design</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Adaptability</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 92%;"></div>
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                        <p class="text-muted">Ensuring your website looks great on any device, from mobile to desktop.</p>

                        <!-- Website Redesign -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-redo text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Website Redesign</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Modernization</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 90%;"></div>
                                <span class="percentage">90%</span>
                            </div>
                        </div>
                        <p class="text-muted">Updating your existing website with modern design elements and enhanced functionality.</p>

                        <!-- Call to Action -->
                        <div class="text-center mt-4">
                            <h5 class="text-muted">Ready to transform your website?</h5>
                            <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange">Book a Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details Section -->

    <!-- Start of Marketing Design Packages Section -->
    <section id="design-packages" class="plans-section py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Our <span class="text-orange">Design & Branding Packages</span></h2>
            <div class="row justify-content-center">
                <!-- Card 1: Logo Creation Package -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Logo Creation Package</h4>
                            <p class="plan-price">
                                <span class="old-price">$500</span> <span class="new-price">$299</span>
                            </p>
                            <p class="plan-preview">Get a professional logo that reflects your brand identity.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Logo Creation Package</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-check-circle"></i> 3 Initial Logo Concepts</li>
                                <li><i class="fas fa-pencil-alt"></i> 2 Rounds of Revisions</li>
                                <li><i class="fas fa-palette"></i> Custom Color Palette</li>
                                <li><i class="fas fa-file-export"></i> Final Files in All Formats</li>
                            </ul>
                            <a href="logo-creation.php" class="btn btn-orange-plans mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Brand Creation Package -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Brand Creation Package</h4>
                            <p class="plan-price">
                                <span class="old-price">$1,200</span> <span class="new-price">$799</span>
                            </p>
                            <p class="plan-preview">Build a comprehensive brand identity that stands out.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Brand Creation Package</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-tag"></i> Logo Design</li>
                                <li><i class="fas fa-book"></i> Brand Style Guide</li>
                                <li><i class="fas fa-font"></i> Typography & Color Schemes</li>
                                <li><i class="fas fa-images"></i> Social Media Graphics</li>
                            </ul>
                            <a href="brand-creation.php" class="btn btn-orange-plans mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Website Design Package -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Website Design Package</h4>
                            <p class="plan-price">
                                <span class="old-price">$2,000</span> <span class="new-price">$1,299</span>
                            </p>
                            <p class="plan-preview">Professional web design tailored to your brand.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Website Design Package</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-desktop"></i> Custom Homepage Design</li>
                                <li><i class="fas fa-file-image"></i> Design for Up to 5 Pages</li>
                                <li><i class="fas fa-mobile-alt"></i> Mobile-Responsive Mockups</li>
                                <li><i class="fas fa-comments"></i> 2 Rounds of Revisions</li>
                            </ul>
                            <a href="website-design.php" class="btn btn-orange-plans mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Marketing Design Packages Section -->

    <!-- Start of Steps to Success Section -->
    <section id="steps-success" class="steps-section">
        <div class="container-fluid text-center py-5">
            <!-- Section Title -->
            <h2 class="fw-bold">Our 5 Steps <span class="text-orange">to Web Design Success</span></h2>
            <p class="text-muted">Explore our process to create visually stunning, high-converting websites tailored to your brand.</p>

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
                            <p class="text-muted">We start by understanding your business, goals, and target audience. This phase involves gathering all the insights needed to create a website that truly represents your brand.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Brand Analysis</span>
                                <span class="tag-label">Audience Insights</span>
                                <span class="tag-label">Goal Setting</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/design_2.webp" alt="Discovery Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Design Step -->
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Design</h3>
                            <p class="text-muted">Our design team crafts unique and creative layouts that capture your brand’s essence. This step includes developing wireframes, mockups, and design prototypes.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Wireframes</span>
                                <span class="tag-label">Prototyping</span>
                                <span class="tag-label">Creative Design</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/design_2.webp" alt="Design Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Development Step -->
                <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Development</h3>
                            <p class="text-muted">Our developers turn the designs into a fully functional, responsive website. This stage focuses on coding, testing, and ensuring a seamless user experience across all devices.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Coding</span>
                                <span class="tag-label">Responsive Development</span>
                                <span class="tag-label">Cross-Platform Testing</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/design_2.webp" alt="Development Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Review Step -->
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Review</h3>
                            <p class="text-muted">Before launching, we conduct a thorough review to ensure everything works perfectly. We gather feedback and make any necessary adjustments for optimal performance.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Quality Assurance</span>
                                <span class="tag-label">Client Feedback</span>
                                <span class="tag-label">Final Tweaks</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/design_2.webp" alt="Review Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Maintenance Step -->
                <div class="tab-pane fade" id="maintenance" role="tabpanel" aria-labelledby="maintenance-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Maintenance</h3>
                            <p class="text-muted">After launch, we provide ongoing support, updates, and optimizations to ensure your website remains effective, secure, and up-to-date as your business grows.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Regular Updates</span>
                                <span class="tag-label">Security Checks</span>
                                <span class="tag-label">Performance Monitoring</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/design_2.webp" alt="Maintenance Step" class="img-fluid">
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
            <h2 class="fw-bold text-white">Ready to Elevate Your Online Presence?</h2>
            <p class="text-white">Contact us today and let’s create a website that stands out!</p>
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