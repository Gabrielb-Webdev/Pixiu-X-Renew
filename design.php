<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | Web Design Services</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://pixiux.com/Logos/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://pixiux.com/Logos/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://pixiux.com/Logos/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://pixiux.com/Logos/favicon-16x16.png" />
    <link rel="manifest" href="https://pixiux.com/Logos/site.webmanifest" />
    <link rel="mask-icon" href="https://pixiux.com/Logos/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="https://pixiux.com/Logos/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="https://pixiux.com/Logos/mstile-144x144.png" />
    <meta name="msapplication-config" content="https://pixiux.com/Logos/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GSAP (ScrollTrigger) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css?v=3.0">
    <link rel="stylesheet" href="css/services.css?v=3.0">
    <link rel="stylesheet" href="css/responsive.css?v=3.0">
    <link rel="stylesheet" href="css/faq.css?v=3.0">
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
                    <h6 class="text-uppercase text-orange">Design Services</h6>
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
                    <img src="sources/images/design/1.webp" alt="Design Image 1" id="image-1" loading="lazy">
                    <img src="sources/images/design/2.webp" alt="Design Image 2" id="image-2" loading="lazy">
                    <img src="sources/images/design/3.webp" alt="Design Image 3" id="image-3" loading="lazy">
                    <img src="sources/images/design/4.webp" alt="Design Image 4" id="image-4" loading="lazy">
                    <img src="sources/images/design/5.webp" alt="Design Image 5" id="image-5" loading="lazy">
                    <img src="sources/images/design/6.webp" alt="Design Image 5" id="image-6" loading="lazy">
                    <img src="sources/images/design/7.webp" alt="Design Image 5" id="image-7" loading="lazy">
                    <img src="sources/images/design/Design.webp" alt="Design Illustration" id="image-8">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->

    <!-- Start of Service Details Section -->
    <section id="info" class="service-details-section">
        <!-- Full-width background image -->
        <div class="background-image"></div>
        <div class="container-fluid position-relative d-flex justify-content-center align-items-center card-container">
            <!-- Card with image and service details -->
            <div class="card shadow-lg p-0 overflow-hidden">
                <div class="row g-0 align-items-center">
                    <!-- Image inside the card -->
                    <div class="col-md-6">
                        <img src="sources/images/design_5.webp" alt="Design Service Illustration" class="img-fluid service-img">
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
                            <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
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
                            <a href="/contact" class="btn btn-orange-plans mt-3">Contact Us for More Info</a>
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
                            <a href="/contact" class="btn btn-orange-plans mt-3">Contact Us for More Info</a>
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
                            <a href="/contact" class="btn btn-orange-plans mt-3">Contact Us for More Info</a>
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
            <h2 class="fw-bold">Our 4 Steps <span class="text-orange">to Design Success</span></h2>
            <p class="text-muted">Discover our streamlined process to create stunning and effective web designs.</p>

            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center mt-4 mb-5" id="stepsTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="discovery-tab" data-bs-toggle="tab" href="#discovery" role="tab"
                        aria-controls="discovery" aria-selected="true">Discovery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="concept-tab" data-bs-toggle="tab" href="#concept" role="tab"
                        aria-controls="concept" aria-selected="false">Concept & Planning</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="design-tab" data-bs-toggle="tab" href="#design" role="tab"
                        aria-controls="design" aria-selected="false">Design & Prototyping</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="finalization-tab" data-bs-toggle="tab" href="#finalization" role="tab"
                        aria-controls="finalization" aria-selected="false">Finalization & Delivery</a>
                </li>
            </ul>

            <!-- Tabs Content -->
            <div class="tab-content" id="stepsContent">
                <!-- Discovery Step -->
                <div class="tab-pane fade show active" id="discovery" role="tabpanel" aria-labelledby="discovery-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Discovery</h3>
                            <p class="text-muted">We start by getting to know your business, your goals, and your target
                                audience. This phase is crucial for gathering insights and understanding your brand’s
                                unique voice and style.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Audience Insights</span>
                                <span class="tag-label">Brand Analysis</span>
                                <span class="tag-label">Vision Alignment</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/design_2.webp" alt="Discovery Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Concept & Planning Step -->
                <div class="tab-pane fade" id="concept" role="tabpanel" aria-labelledby="concept-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Concept & Planning</h3>
                            <p class="text-muted">Based on our discovery, we create a concept that aligns with your brand
                                and objectives. This phase includes initial sketches, mood boards, and layout planning to
                                ensure the design direction meets your needs.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Sketching</span>
                                <span class="tag-label">Mood Boards</span>
                                <span class="tag-label">Planning</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/design_2.webp" alt="Concept & Planning Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Design & Prototyping Step -->
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Design & Prototyping</h3>
                            <p class="text-muted">Our designers bring the concept to life through detailed mockups and
                                prototypes. We focus on creativity, user experience, and visual appeal, ensuring each design
                                element serves a purpose.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">High-Fidelity Mockups</span>
                                <span class="tag-label">Interactive Prototypes</span>
                                <span class="tag-label">Design Refinement</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/design_2.webp" alt="Design & Prototyping Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Finalization & Delivery Step -->
                <div class="tab-pane fade" id="finalization" role="tabpanel" aria-labelledby="finalization-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Finalization & Delivery</h3>
                            <p class="text-muted">In this final step, we make the finishing touches, gather your feedback,
                                and ensure everything is perfect before delivering the final designs. We provide all the
                                necessary files and guidance for the implementation phase.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Client Feedback</span>
                                <span class="tag-label">Final Touches</span>
                                <span class="tag-label">Delivery</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/design_2.webp" alt="Finalization & Delivery Step" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Steps to Success Section -->

    <!-- Start of FAQ Section -->
    <section id="faq" class="faq-section py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordionDesign">

                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What types of web design services do you offer?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordionDesign">
                        <div class="accordion-body">
                            We offer a range of web design services including custom website design, UX/UI design, responsive design, and website redesigns. Our goal is to create visually stunning and highly functional websites that align with your brand and business objectives.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How long does it take to design a website?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordionDesign">
                        <div class="accordion-body">
                            The timeline for web design depends on the complexity of the project and your specific needs. A simple website may take 2-4 weeks, while more complex projects could take several months. We work closely with you to establish realistic timelines and keep you informed throughout the process.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Will my website be mobile-friendly?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordionDesign">
                        <div class="accordion-body">
                            Yes, all of our designs are fully responsive, meaning they are optimized for mobile, tablet, and desktop devices. We ensure that your website looks great and functions smoothly on any screen size.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can you redesign my existing website?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordionDesign">
                        <div class="accordion-body">
                            Absolutely! We offer website redesign services to modernize your current site, improve user experience, and align it with the latest design trends. Our redesign process involves a thorough analysis of your existing site and a tailored approach to updating its design and functionality.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Do you provide content creation for my website?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordionDesign">
                        <div class="accordion-body">
                            Yes, we offer content creation services including copywriting, blog writing, and multimedia content like graphics and videos. Our team can help create compelling content that engages your audience and enhances your website’s effectiveness.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of FAQ Section -->

    <!-- Start of Call-to-Action Section -->
    <section id="call-to-action" class="cta-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold text-white">Ready to Elevate Your Online Presence?</h2>
            <p class="text-white">Contact us today and let’s create a website that stands out!</p>
            <a href="/contact" class="btn btn-orange-plans mt-3">Contact Us Now!</a>
        </div>
    </section>
    <!-- End of Call-to-Action Section -->

    <!-- Start of Footer Section -->
    <?php include 'components/footer.php'; ?>
    <!-- End of Footer Section -->

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scripts Propios -->
<script src="js/scripts.js?v=3.0"></script> <!-- Añade versión si has actualizado el archivo -->
<script src="js/animations.js?v=3.0"></script> <!-- Añade versión si el archivo ha sido modificado -->


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