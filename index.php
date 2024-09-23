<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X - HubSpot Solutions, Web Development & Data Services</title>

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

    <!-- Meta Description -->
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
    <link rel="stylesheet" href="css/modal.css">
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
                        <a href="#projects" class="btn btn-orange ms-2">Explore Our Services</a>
                    </div>
                </div>
                <!-- Image Container -->
                <div class="image-container">
                    <img src="sources/images/home/1.webp" alt="Image 1" id="image-1" loading="lazy">
                    <img src="sources/images/home/2.webp" alt="Image 2" id="image-2" loading="lazy">
                    <img src="sources/images/home/3.webp" alt="Image 3" id="image-3" loading="lazy">
                    <img src="sources/images/home/4.webp" alt="Image 4" id="image-4" loading="lazy">
                    <img src="sources/images/home/5.webp" alt="Image 5" id="image-5" loading="lazy">
                    <img src="sources/images/home/6.webp" alt="Image 6" id="image-6" loading="lazy">
                    <img src="sources/images/home/7.webp" alt="Image 7" id="image-7" loading="lazy">
                    <img src="sources/images/home/construction.webp" alt="Construction Image" id="image-8" loading="lazy">
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
                        <img src="sources/images/Telecommuting-rafiki.webp" alt="Services Illustration" class="img-fluid" style="width: 95%; max-width: 500px;">
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
                            <img src="sources/images/Marketing.webp" class="card-img-top marketing-card-img" alt="Marketing">
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
                            <img src="sources/images/Operating system-pana.webp" class="card-img-top" alt="HubSpot Consulting">
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
                            <img src="sources/images/Developer activity-amico.webp" class="card-img-top" alt="Website Creation & Data Extraction">
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
                            <img src="sources/images/Design.webp" class="card-img-top" alt="Multimedia Design">
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
                        <img src="sources/images/Checklist-pana.webp" alt="Service Illustration" class="img-fluid service-img">
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

    <!-- Start of Why Choose Us Section -->
    <section id="why-choose-us" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Why Choose Us?</h2>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="feature-card p-4 bg-white rounded shadow text-center">
                        <i class="fas fa-trophy fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Proven Expertise</h5>
                        <p class="text-muted">With years of experience in the digital landscape, we offer proven solutions tailored to your needs.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card p-4 bg-white rounded shadow text-center">
                        <i class="fas fa-user-check fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Client-Centric Approach</h5>
                        <p class="text-muted">We put our clients first, offering personalized service and strategies that align with your business goals.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card p-4 bg-white rounded shadow text-center">
                        <i class="fas fa-chart-line fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Results-Driven Solutions</h5>
                        <p class="text-muted">Our focus is on delivering measurable results that enhance your brand’s visibility, engagement, and growth.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="feature-card p-4 bg-white rounded shadow text-center">
                        <i class="fas fa-lightbulb fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Innovation & Creativity</h5>
                        <p class="text-muted">We embrace innovative thinking, constantly exploring new ideas to keep you ahead of the curve.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card p-4 bg-white rounded shadow text-center">
                        <i class="fas fa-headset fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Exceptional Support</h5>
                        <p class="text-muted">Our dedicated support team is always ready to assist you, ensuring a smooth and successful partnership.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card p-4 bg-white rounded shadow text-center">
                        <i class="fas fa-cogs fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Customized Solutions</h5>
                        <p class="text-muted">We don't believe in one-size-fits-all. Our solutions are customized to fit the unique challenges of your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Why Choose Us Section -->

    <!-- Start of Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container-fluid position-relative d-flex justify-content-center align-items-center contact-card">
            <!-- Main Card -->
            <div class="main-card shadow-lg p-5 bg-white rounded">
                <div class="row g-4 align-items-center">
                    <!-- Sub-Card for the image -->
                    <div class="col-md-4">
                        <div class="image-card overflow-hidden">
                            <img src="sources/images/Messages-pana.webp" alt="Contact Illustration" class="img-fluid contact-img">
                        </div>
                    </div>

                    <!-- Sub-Card for the form -->
                    <div class="col-md-7">
                        <div class="form-card p-4" style="border: 2px solid #dd6d2c; border-radius: 15px;">
                            <h2 class="text-center">Contact Us & <span class="text-orange">Get In Touch</span></h2>

                            <!-- Form -->
                            <form action="../database/form.php" method="post" class="contact-form" onsubmit="gtag_report_conversion(); return true;">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="First Name" name="firstName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastName" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select class="form-control" name="service" id="service-select" required>
                                            <option value="" selected disabled>Select a Service</option>
                                            <option value="Custom Software Development">Custom Software Development</option>
                                            <option value="HubSpot implementation and consulting">HubSpot Implementation and Consulting</option>
                                            <option value="Data Extraction">Data Extraction</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Dropdown shown only when "Custom Software Development" is selected -->
                                <div class="mb-3 custom-software-dropdown" style="display: none;">
                                    <select class="form-control" name="customOption">
                                        <option value="" selected disabled>Select an Option</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Custom Web Development">Custom Web Development</option>
                                        <option value="Mobile Applications">Mobile Applications</option>
                                        <option value="E-Commerce Web Development">E-Commerce Web Development</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Hello, I am interested in hiring your services for....." name="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-orange w-100">Submit</button>
                            </form>

                            <!-- Additional Contact Information -->
                            <div class="contact-info text-center mt-4">
                                <div class="row">
                                    <div class="col-4 d-flex flex-column align-items-center">
                                        <div class="contact-item text-center">
                                            <i class="fas fa-phone-alt"></i>
                                            <p>+1 (786) 798-8207</p>
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
                                            <p>Miami Beach, FL, US</p>
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

    <!-- Modal personalizado para mostrar mensajes -->
    <div class="custom-modal" id="responseModal" style="display: none;">
        <div class="modal-content-custom">
            <div class="modal-header-custom">
                <h5 class="modal-title-custom text-center">¡Gracias por Contactarnos!</h5> <!-- Título centrado -->
            </div>
            <div class="modal-body-custom" id="responseMessage">
                <!-- Mensaje actualizado y más breve -->
            </div>
            <div class="modal-footer-custom">
                <button type="button" class="btn btn-orange" onclick="closeModal()">Aceptar</button>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir la redirección predeterminada del formulario

            const formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Mensaje más corto y directo
                    document.getElementById('responseMessage').textContent =
                        'Tu mensaje ha sido recibido. Nos pondremos en contacto contigo pronto.';

                    showModal(); // Mostrar el modal personalizado

                    // Recargar la página al cerrar el modal solo si es exitoso
                    if (data.success) {
                        document.getElementById('responseModal').addEventListener('close-modal', function() {
                            location.reload();
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('responseMessage').textContent = 'Ocurrió un error. Por favor, intenta de nuevo.';
                    showModal(); // Mostrar el modal en caso de error
                });
        });

        function showModal() {
            document.getElementById('responseModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('responseModal').style.display = 'none';
            document.getElementById('responseModal').dispatchEvent(new Event('close-modal'));
        }
    </script>

    <!-- JavaScript to Show/Hide the Custom Software Dropdown -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const serviceSelect = document.getElementById('service-select');
            const customSoftwareDropdown = document.querySelector('.custom-software-dropdown');

            serviceSelect.addEventListener('change', function() {
                if (this.value === 'Custom Software Development') {
                    customSoftwareDropdown.style.display = 'block';
                } else {
                    customSoftwareDropdown.style.display = 'none';
                }
            });
        });
    </script>



    <?php include 'components/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/animations.js"></script>
</body>

</html>