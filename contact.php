<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pixiu X</title>

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


    <meta name="description" content="Contact Pixiu X for expert HubSpot consulting, web development, data extraction, and custom software solutions to boost your business.">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GSAP (ScrollTrigger) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/modal.css">
</head>

<body>
    <!-- Start of Navbar -->
    <?php include 'components/navbar.php'; ?>
    <!-- End of Navbar -->

    <!-- Start of Hero Section -->
    <section class="hero-section d-flex align-items-center justify-content-center text-center position-relative" style="background: url('sources/images/Contact_us_2.webp') no-repeat center center/cover; height: 60vh;">
        <div class="overlay" style="background-color: rgba(0, 0, 0, 0.6); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
        <div class="container position-relative z-2 text-white">
            <h1 class="display-4 fw-bold">Get in Touch with Us</h1>
            <p class="lead">We are here to help you with all your marketing and tech needs. Contact us today and let's start a conversation!</p>
            <a href="#contact" class="btn btn-orange mt-3">Contact Us</a>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Start of Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <!-- <header class="text-center mb-5">
                <h2 class="fw-bold text-orange">Contact Us</h2>
                <p>We're here to help! Fill out the form below, and we'll get back to you as soon as possible.</p>
            </header> -->

            <!-- Contact Form Section -->
            <div class="row align-items-center">
                <!-- Image on the left -->
                <div class="col-md-5 mb-4">
                    <img src="sources/images/Messages-pana.webp" alt="Contact Us" class="img-fluid">
                </div>

                <!-- Form on the right -->
                <div class="col-md-7">
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
                            <textarea class="form-control" rows="5" placeholder="Hello, I am interested in hiring your services for..." name="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-orange w-100">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Additional Contact Information -->
            <div class="row mt-5">
                <div class="col-md-4 text-center mb-3">
                    <i class="fas fa-phone-alt fa-2x text-orange"></i>
                    <p class="mt-2">+1 (786) 798-8207</p>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <i class="fas fa-envelope fa-2x text-orange"></i>
                    <p class="mt-2">info@pixiux.com</p>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <i class="fas fa-map-marker-alt fa-2x text-orange"></i>
                    <p class="mt-2">Miami Beach, FL, US</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact Section -->

    <!-- Modal personalizado para mostrar mensajes -->
    <div class="custom-modal" id="responseModal" style="display: none;">
        <div class="modal-content-custom">
            <div class="modal-header-custom">
                <h5 class="modal-title-custom text-center">¡Gracias por Contactarnos!</h5>
            </div>
            <div class="modal-body-custom" id="responseMessage">
                Tu mensaje ha sido recibido. Nos pondremos en contacto contigo pronto.
            </div>
            <div class="modal-footer-custom">
                <button type="button" class="btn btn-orange" onclick="closeModal()">Aceptar</button>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.contact-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('responseMessage').textContent =
                        'Tu mensaje ha sido recibido. Nos pondremos en contacto contigo pronto.';
                    showModal();

                    if (data.success) {
                        document.getElementById('responseModal').addEventListener('close-modal', function() {
                            location.reload();
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('responseMessage').textContent = 'Ocurrió un error. Por favor, intenta de nuevo.';
                    showModal();
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

    <!-- Start of Footer -->
    <?php include 'components/footer.php'; ?>
    <!-- End of Footer -->

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scripts Propios -->
<script src="js/scripts.js?v=2.0"></script> <!-- Añade versión si has actualizado el archivo -->
<script src="js/animations.js?v=2.0"></script> <!-- Añade versión si el archivo ha sido modificado -->

</body>

</html>