<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | Custom Software Development</title>

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
                    <h6 class="text-uppercase text-orange">Website Creation</h6>
                    <div class="underline-orange"></div>
                    <h1 class="fw-bold">
                        Boost Your Business with a Custom Website
                    </h1>
                    <p class="text-muted">
                        Open a new channel for sales and communication, enhance your brand's professional image, and expand your reach by selling digital products. Let us create a website that is as unique as your business, with customized features and scalable solutions.
                    </p>
                    <div class="buttons mt-4">
                        <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
                    </div>
                </div>
                <!-- Contenedor de imágenes apiladas -->
                <div class="image-container">
                    <img src="sources/images/web-development/1.webp" alt="Image 1" id="image-1" loading="lazy">
                    <img src="sources/images/web-development/2.webp" alt="Image 2" id="image-2" loading="lazy">
                    <img src="sources/images/web-development/3.webp" alt="Image 3" id="image-3" loading="lazy">
                    <img src="sources/images/web-development/4.webp" alt="Image 4" id="image-4" loading="lazy">
                    <img src="sources/images/web-development/5.webp" alt="Image 5" id="image-5" loading="lazy">
                    <img src="sources/images/web-development/6.webp" alt="Image 6" id="image-6" loading="lazy">
                    <img src="sources/images/web-development/Website Creator-amico.webp" alt="Construction Image" id="image-8">
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
                        <img src="sources/images/Website Creator-bro.webp" alt="Service Illustration" class="img-fluid service-img">
                    </div>

                    <!-- Service Details inside the card -->
                    <div class="col-md-6 service-details p-4">
                        <h2 class="text-center mb-4">Our <span class="text-orange">Service Expertise</span></h2>

                        <!-- Express Offer -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-bolt text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Express Website Creation</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Efficiency</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 95%;"></div>
                                <span class="percentage">95%</span>
                            </div>
                        </div>
                        <p class="text-muted">Fast and reliable solutions for businesses needing a quick web presence.</p>

                        <!-- Online Store Offer -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-store text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Ecommerce Website</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>SEO Optimization</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 92%;"></div>
                                <span class="percentage">92%</span>
                            </div>
                        </div>
                        <p class="text-muted">Fully equipped online stores optimized for search engines and smooth performance.</p>

                        <!-- Customized Web Offer -->
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-pencil-ruler text-orange me-2" style="font-size: 24px;"></i>
                            <h4 class="text-orange mb-0">Tailored Web Solutions</h4>
                        </div>
                        <div class="progress-item mb-2">
                            <span>Customization</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 93%;"></div>
                                <span class="percentage">93%</span>
                            </div>
                        </div>
                        <p class="text-muted">Custom solutions built from scratch to reflect your unique business needs.</p>

                        <!-- Ongoing Support -->
                        <div class="progress-item mb-2">
                            <span>Support & Maintenance</span>
                            <div class="progress">
                                <div class="progress-bar bg-orange" style="width: 90%;"></div>
                                <span class="percentage">90%</span>
                            </div>
                        </div>
                        <p class="text-muted">Continuous support to ensure your website evolves and remains up-to-date.</p>

                        <!-- Call to Action -->
                        <div class="text-center mt-4">
                            <h5 class="text-muted">Have questions?</h5>
                            <a href="https://meetings.hubspot.com/pixiu" class="btn btn-orange me-2" target="_blank">Book A Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details Section -->

    <!-- Start of Interactive Plans Section -->
    <section id="plans" class="plans-section py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Special <span class="text-orange">Website Creation Offers</span></h2>
            <div class="row justify-content-center">
                <!-- Card 1: Express Offer -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Express Website</h4>
                            <p class="plan-price">
                                <span class="old-price">$499</span> <span class="new-price">$199</span>
                            </p>
                            <p class="plan-preview">Launch your website fast!</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Express Offer</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-check-circle"></i> 1 Page Website</li>
                                <li><i class="fas fa-mobile-alt"></i> Mobile Responsive</li>
                                <li><i class="fas fa-search"></i> Basic SEO Setup</li>
                                <li><i class="fas fa-paint-brush"></i> Basic Design Customization</li>
                                <li><i class="fas fa-clock"></i> Delivery: 5 Days</li>
                            </ul>
                            <a href="/contact" class="btn btn-orange-plans mt-3">Contact Us for More Info</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Online Store -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Express Store</h4>
                            <p class="plan-price">
                                <span class="old-price">$999</span> <span class="new-price">$499</span>
                            </p>
                            <p class="plan-preview">Ecommerce in just 7 days.</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Online Store</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-layer-group"></i> 5 Page Website</li>
                                <li><i class="fas fa-store"></i> Ecommerce Setup</li>
                                <li><i class="fas fa-chart-line"></i> SEO Optimization</li>
                                <li><i class="fas fa-chart-pie"></i> Google Analytics Setup</li>
                                <li><i class="fas fa-calendar-alt"></i> Delivery: 7 Days</li>
                            </ul>
                            <a href="/contact" class="btn btn-orange-plans mt-3">Contact Us for More Info</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Customized Web -->
                <div class="col-md-4 mb-3">
                    <div class="plan-card">
                        <div class="plan-front">
                            <h4 class="plan-title">Customized Web</h4>
                            <p class="plan-price">Tailored to your needs</p>
                            <p class="plan-preview">Let's create something unique!</p>
                            <div class="hover-indicator">
                                <i class="fas fa-hand-pointer"></i> More Info
                            </div>
                        </div>
                        <div class="plan-back">
                            <h4 class="plan-title">Customized Web</h4>
                            <ul class="plan-features">
                                <li><i class="fas fa-pencil-ruler"></i> Fully Custom Design</li>
                                <li><i class="fas fa-infinity"></i> Unlimited Pages</li>
                                <li><i class="fas fa-search-plus"></i> Full SEO Integration</li>
                                <li><i class="fas fa-headset"></i> Ongoing Support</li>
                                <li><i class="fas fa-rocket"></i> Launch Strategy</li>
                            </ul>
                            <a href="/contact" class="btn btn-orange-plans mt-3">Contact Us for More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Interactive Plans Section -->

    <!-- Start of Steps to Success Section -->
    <section id="steps-success" class="steps-section">
        <div class="container-fluid text-center py-5">
            <!-- Section Title -->
            <h2 class="fw-bold">Our Simple <span class="text-orange">5-Step Process</span></h2>
            <p class="text-muted">From idea to launch, we guide you every step of the way to ensure your success.</p>

            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center mt-4 mb-5" id="stepsTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="discovery-tab" data-bs-toggle="tab" href="#discovery" role="tab" aria-controls="discovery" aria-selected="true">Discovery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="design-tab" data-bs-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false"> Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="development-tab" data-bs-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="false"> Development</a>
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
                            <h3 class="fw-bold">Step 1: Discovery</h3>
                            <p class="text-muted">We start by understanding your business goals, gathering requirements, and defining the project scope. This sets the foundation for building a tailored solution that meets your needs.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Business Analysis</span>
                                <span class="tag-label">Requirements</span>
                                <span class="tag-label">Scope Definition</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/Website Creator-cuate.webp" alt="Discovery Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Design Step -->
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Step 2: Design</h3>
                            <p class="text-muted">Next, we create wireframes and mockups to bring your vision to life. This phase also includes finalizing the technical architecture and tools we’ll use to build your solution.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Wireframes</span>
                                <span class="tag-label">Mockups</span>
                                <span class="tag-label">Technology Stack</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/Website Creator-cuate.webp" alt="Design Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Development Step -->
                <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Step 3: Development</h3>
                            <p class="text-muted">With the design in place, our development team starts coding. We build, test, and refine the product to ensure it's functional, scalable, and aligned with your business goals.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Coding</span>
                                <span class="tag-label">Testing</span>
                                <span class="tag-label">Quality Assurance</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/Website Creator-cuate.webp" alt="Development Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Review Step -->
                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Step 4: Review</h3>
                            <p class="text-muted">Before launching, we review every aspect of the product, ensuring everything functions perfectly. We work closely with you to gather feedback and make adjustments if needed.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Testing</span>
                                <span class="tag-label">Client Feedback</span>
                                <span class="tag-label">Final Adjustments</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/Website Creator-cuate.webp" alt="Review Step" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Maintenance Step -->
                <div class="tab-pane fade" id="maintenance" role="tabpanel" aria-labelledby="maintenance-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="fw-bold">Step 5: Maintenance</h3>
                            <p class="text-muted">After launch, we continue to provide support, updates, and performance monitoring to keep your software running smoothly and adapting to your evolving business needs.</p>
                            <!-- Tags -->
                            <div class="tags mt-3">
                                <span class="tag-label">Ongoing Support</span>
                                <span class="tag-label">Updates</span>
                                <span class="tag-label">Performance Monitoring</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="sources/images/Website Creator-cuate.webp" alt="Maintenance Step" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Steps to Success Section -->

    <!-- Start of FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordionWebDevelopment">

                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            I have a software idea, but I'm not sure about all its features. Can you help me validate it?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordionWebDevelopment">
                        <div class="accordion-body">
                            Yes, we hold workshops with clients as part of our services. They usually last from 16 hours to 80 hours, during which we deep dive into the software's functionality and help you design the concept.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            I'm worried about the support for my application or website. Do you also maintain the software after it's implemented?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordionWebDevelopment">
                        <div class="accordion-body">
                            Yes, we offer ongoing support and flexible maintenance packages. We can definitely find a support plan that works for you. However, if you decide that you don't need any kind of support, that's perfectly fine too! Since the solution is completely yours, the final decision is yours.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do you handle revisions and feedback during the design process?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#faqAccordionWebDevelopment">
                        <div class="accordion-body">
                            At Pixiu, your feedback is essential to our design process. We value your ideas, tweaks, and "aha" moments, incorporating them into each iteration to ensure that the final product meets your expectations of perfection. Our collaborative approach ensures that your voice is heard clearly throughout the process, guaranteeing that we deliver a product that exceeds your expectations.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How much does web design and development typically cost?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#faqAccordionWebDevelopment">
                        <div class="accordion-body">
                            At Pixiu, most of our web design and development projects average around $500. However, the final cost depends on the specific scope of each project. We generally have a minimum project size and prefer to agree on a fixed cost with milestone payments to ensure clarity and satisfaction throughout the development process.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Who owns the software or website once you build it?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#faqAccordionWebDevelopment">
                        <div class="accordion-body">
                            Once the project is completed and implemented, you legally own everything needed to build, maintain, or extend the software in the future, including executables, scripts, project files, source code, etc.
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
            <h2 class="fw-bold text-white">Are You Ready To Work & Develop With Us?</h2>
            <p class="text-white">Don't Hesitate & Contact Us!</p>
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