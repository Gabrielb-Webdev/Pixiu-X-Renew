<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | Digital Marketing Services</title>
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
                <i class="fab fa-instagram"></i>
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
                    <h6 class="text-uppercase text-orange">Digital Marketing Services</h6>
                    <div class="underline-orange"></div>
                    <h1 class="fw-bold">
                        Amplify Your Brand's Online Presence with Our Expert Strategies
                    </h1>
                    <p class="text-muted">
                        At Pixiu, we provide full-service digital marketing solutions tailored to elevate your brand's visibility and engagement. From social media campaigns to SEO strategies, we have everything you need to grow your business online.
                    </p>
                    <div class="buttons mt-4">
                        <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
                    </div>
                </div>
                <!-- Contenedor de imágenes apiladas -->
                <div class="image-container">
                    <img src="images/marketing/1.webp" alt="HubSpot Implementation Image 1" id="image-1" loading="lazy">
                    <img src="images/marketing/2.webp" alt="HubSpot Implementation Image 2" id="image-2" loading="lazy">
                    <img src="images/marketing/3.webp" alt="HubSpot Implementation Image 3" id="image-3" loading="lazy">
                    <img src="images/marketing/4.webp" alt="HubSpot Implementation Image 4" id="image-4" loading="lazy">
                    <img src="images/marketing/5.webp" alt="HubSpot Implementation Image 5" id="image-5" loading="lazy">
                    <img src="images/marketing/6.webp" alt="HubSpot Implementation Image 6" id="image-6" loading="lazy">
                    <img src="images/marketing/Marketing_3.webp" alt="HubSpot Integration Illustration" id="image-8">
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
                        <img src="images/Marketing_4.webp" alt="Marketing Service Illustration" class="img-fluid service-img">
                    </div>

                    <!-- Service Details inside the card -->
                    <div class="col-md-6 service-details p-4">
                        <h2><span class="text-orange">Comprehensive</span> Digital Marketing Solutions</h2>
                        <p>At Pixiu, we offer a range of marketing services designed to boost your online presence, increase brand awareness, and drive conversions. Our services include:</p>
                        <ul>
                            <li><strong>Search Engine Optimization (SEO)</strong> - Improve your website's ranking and attract organic traffic.</li>
                            <li><strong>Social Media Marketing</strong> - Develop tailored campaigns to engage your audience on platforms like Instagram, Facebook, and LinkedIn.</li>
                            <li><strong>Pay-Per-Click (PPC)</strong> - Maximize your ad spend with optimized Google Ads and paid social campaigns.</li>
                            <li><strong>Content Marketing</strong> - Craft high-quality content that resonates with your audience.</li>
                        </ul>

                        <!-- Service Progress -->
                        <div class="service-progress mb-4">
                            <div class="progress-item">
                                <span>SEO & Optimization</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="95"></div>
                                    <span class="percentage">95%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Social Media Marketing</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="90"></div>
                                    <span class="percentage">90%</span>
                                </div>
                            </div>

                            <div class="progress-item">
                                <span>Pay-Per-Click (PPC)</span>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" data-value="85"></div>
                                    <span class="percentage">85%</span>
                                </div>
                            </div>
                        </div>

                        <p>Our experts ensure that every campaign is aligned with your business goals, providing continuous optimization and ongoing support to maximize results.</p>
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
            <h2 class="fw-bold">Our 4 Steps <span class="text-orange">To Marketing Success</span></h2>
            <p class="text-muted">How we develop and execute winning marketing strategies for your brand.</p>

            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center mt-4 mb-5" id="stepsTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="consultation-tab" data-bs-toggle="tab" href="#consultation" role="tab" aria-controls="consultation" aria-selected="true">Initial Consultation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="analysis-tab" data-bs-toggle="tab" href="#analysis" role="tab" aria-controls="analysis" aria-selected="false">Market Research</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="strategy-tab" data-bs-toggle="tab" href="#strategy" role="tab" aria-controls="strategy" aria-selected="false">Strategy Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="execution-tab" data-bs-toggle="tab" href="#execution" role="tab" aria-controls="execution" aria-selected="false">Execution & Optimization</a>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="stepsContent">
                <!-- Initial Consultation Step -->
                <div class="tab-pane fade show active" id="consultation" role="tabpanel" aria-labelledby="consultation-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Initial Consultation</h3>
                            <p class="text-muted">We begin by understanding your business objectives, industry, and marketing needs. This helps us shape the best approach for your brand.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Business Objectives</span>
                                <span class="tag-label">Target Audience</span>
                                <span class="tag-label">Marketing Goals</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/marketing_6.webp" alt="Consultation Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Market Research Step -->
                <div class="tab-pane fade" id="analysis" role="tabpanel" aria-labelledby="analysis-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Market Research</h3>
                            <p class="text-muted">We conduct thorough market research to understand the competitive landscape, your target audience, and opportunities for growth.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Competitor Analysis</span>
                                <span class="tag-label">Audience Insights</span>
                                <span class="tag-label">Market Trends</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/marketing_6.webp" alt="Research Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Strategy Development Step -->
                <div class="tab-pane fade" id="strategy" role="tabpanel" aria-labelledby="strategy-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Strategy Development</h3>
                            <p class="text-muted">We craft a custom marketing strategy, including SEO, social media, content, and paid campaigns, all designed to boost your online presence.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">SEO</span>
                                <span class="tag-label">Content Strategy</span>
                                <span class="tag-label">PPC & Paid Ads</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/marketing_6.webp" alt="Strategy Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Execution & Optimization Step -->
                <div class="tab-pane fade" id="execution" role="tabpanel" aria-labelledby="execution-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Execution & Optimization</h3>
                            <p class="text-muted">We execute the strategy across all channels, continuously optimizing campaigns to maximize ROI and drive results.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Campaign Execution</span>
                                <span class="tag-label">A/B Testing</span>
                                <span class="tag-label">Ongoing Optimization</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="images/marketing_6.webp" alt="Execution Step" class="img-fluid">
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
            <h2 class="fw-bold text-white">Ready to Elevate Your Marketing Strategy?</h2>
            <p class="text-white">Contact us today and start achieving your marketing goals!</p>
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
