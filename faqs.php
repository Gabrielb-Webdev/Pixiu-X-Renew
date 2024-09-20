<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixiu X | Frequently Asked Questions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- GSAP (ScrollTrigger) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/resposive.css">
    <link rel="stylesheet" href="css/faq.css">
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
                    <h6 class="text-uppercase text-orange">Frequently Asked Questions</h6>
                    <div class="underline-orange"></div>
                    <h1 class="fw-bold">
                        Find Answers to Your Most Common <span class="text-orange">Questions</span>
                    </h1>
                </div>
                <!-- Contenedor de imágenes apiladas -->
                <div class="image-container">
                    <img src="images/faq/1.webp" alt="FAQ Image 1" id="image-1" loading="lazy">
                    <img src="images/faq/2.webp" alt="FAQ Image 2" id="image-2" loading="lazy">
                    <img src="images/faq/3.webp" alt="FAQ Image 3" id="image-3" loading="lazy">
                    <img src="images/faq/4.webp" alt="FAQ Image 4" id="image-4" loading="lazy">
                    <img src="images/faq/5.webp" alt="FAQ Image 5" id="image-5" loading="lazy">
                    <img src="images/faq/6.webp" alt="FAQ Image 6" id="image-6" loading="lazy">
                    <img src="images/faq/6.webp" alt="FAQ Image 7" id="image-7" loading="lazy">
                    <img src="images/faq/FAQs.webp" alt="FAQ Integration Illustration" id="image-8">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Welcome Section -->

    <!-- Start of Marketing Steps Section -->
    <section id="marketing-steps-section" class="steps-section">
        <div class="container-fluid">
            <h2 class="text-center fw-bold mb-4">Our Key Services to Boost Your Business</h2>
            <div class="steps-container d-flex justify-content-center align-items-center">
                <!-- Step 1: Web Development -->
                <div class="step-item">
                    <div class="icon-box">
                        <i class="fas fa-code icon"></i>
                    </div>
                    <p class="step-title">Web Development</p>
                </div>
                <!-- Divider -->
                <div class="divider"></div>
                <!-- Step 2: HubSpot Consulting -->
                <div class="step-item">
                    <div class="icon-box">
                        <i class="fas fa-hands-helping icon"></i>
                    </div>
                    <p class="step-title">HubSpot Consulting</p>
                </div>
                <!-- Divider -->
                <div class="divider"></div>
                <!-- Step 3: Data Extraction -->
                <div class="step-item">
                    <div class="icon-box">
                        <i class="fas fa-database icon"></i>
                    </div>
                    <p class="step-title">Data Extraction</p>
                </div>
                <!-- Divider -->
                <div class="divider"></div>
                <!-- Step 4: Multimedia Design -->
                <div class="step-item">
                    <div class="icon-box">
                        <i class="fas fa-paint-brush icon"></i>
                    </div>
                    <p class="step-title">Multimedia Design</p>
                </div>
                <!-- Divider -->
                <div class="divider"></div>
                <!-- Step 5: Marketing -->
                <div class="step-item">
                    <div class="icon-box">
                        <i class="fas fa-bullhorn icon"></i>
                    </div>
                    <p class="step-title">Marketing</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Marketing Steps Section -->

    <!-- Start of FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-4">Most <span class="text-primary">Frequently Asked</span> Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        <!-- Sección 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    I have a software idea, but I'm not sure about all its features. Can you help me validate it?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we hold workshops with clients as part of our services. They usually last from 16 hours to 80 hours, during which we deep dive into the software's functionality and help you design the concept.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    I'm worried about the support for my application or website. Do you also maintain the software after it's implemented?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we offer ongoing support and flexible maintenance packages. We can definitely find a support plan that works for you. However, if you decide that you don't need any kind of support, that's perfectly fine too! Since the solution is completely yours, the final decision is yours.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you handle revisions and feedback during the design process?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    At Pixiu, your feedback is essential to our design process. We value your ideas, tweaks, and "aha" moments, incorporating them into each iteration to ensure that the final product meets your expectations of perfection. Our collaborative approach ensures that your voice is heard clearly throughout the process, guaranteeing that we deliver a product that exceeds your expectations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How much does web design and development typically cost?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    At Pixiu, most of our web design and development projects average around $500. However, the final cost depends on the specific scope of each project. We generally have a minimum project size and prefer to agree on a fixed cost with milestone payments to ensure clarity and satisfaction throughout the development process.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Who owns the software or website once you build it?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Once the project is completed and implemented, you legally own everything needed to build, maintain, or extend the software in the future, including executables, scripts, project files, source code, etc.
                                </div>
                            </div>
                        </div>

                        <!-- Sección 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What is included in the consultation package?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our consultation package includes:
                                    <ul>
                                        <li>One-on-one consultations with a certified HubSpot expert, available via video call.</li>
                                        <li>A thorough review of your current HubSpot setup, including integrations, data management, and workflows.</li>
                                        <li>Recommendations for optimizations, tech improvements, and tailored solutions to address your unique challenges.</li>
                                        <li>A workshop and discovery phase for larger solutions, analyzing your current setup and creating a concept for a new one.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    I have an in-house team that uses HubSpot. Can you get on a call with them and help them solve my problem?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we can collaborate with your in-house team. We’ll join a call with your team to help develop or fix your HubSpot-related solutions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    I am having issues with an integration/tool/app that is not closely connected with HubSpot. Can you still help me with that?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, of course. While many of our clients seek help with HubSpot, we are also happy to assist with more general software or integration issues, including those that need to connect with HubSpot.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    I have some questions, but I am unsure if you can help me out.
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Don’t hesitate to reach out and schedule an introductory call. It is free of charge, and we will let you know if we can solve your issue with our solutions or through consultations.
                                </div>
                            </div>
                        </div>

                        <!-- Sección 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    What does your data scraping service include?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our data scraping services encompass:
                                    <ul>
                                        <li>Website Data Extraction: Leveraging advanced techniques to swiftly and accurately gather data from websites, which is meticulously organized for easy retrieval.</li>
                                        <li>Prospect/Lead Data Extraction: Enhancing your sales and marketing strategies by identifying and extracting detailed customer and prospect data tailored to your business needs.</li>
                                        <li>Social Media Data Extraction: Comprehensive extraction of data from major social platforms, including profiles, posts, and comments to provide you with in-depth insights.</li>
                                        <li>Market Research Data Extraction: Gathering critical data on market trends, customer insights, and competitive analysis to accelerate your research and strategic planning.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    Can you develop custom web scraping tools for our specific needs?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! At Pixiu, we specialize in crafting custom web scraping solutions that are both fast and precise. Our expertise allows us to build tools that are perfectly aligned with your business's requirements and operational goals.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    We already have some web scraping in place. Can you enhance our existing tools?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we can! We will review your current setup and provide recommendations for optimizations and tech improvements. We can also expand your existing tools to cover more sources or integrate additional functionalities.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThirteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                    What if I need data from a platform not directly connected to the common scraping APIs?
                                </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We can handle that as well. Our team is skilled in developing solutions that involve complex data sources and integrations, even if they are not commonly connected through standard APIs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFourteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    I’m interested, but unsure how to start. Can I get a consultation?
                                </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Of course! Schedule an introductory call with us at no charge. We'll discuss your specific needs and outline how our data scraping services can help you achieve your objectives. This consultation will help clarify how we can assist and the potential impacts on your business.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of FAQ Section -->

    <!-- Start of Contact Form Section -->
    <section class="contact-form-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h3 class="mb-4 text-center">Get A Free Quote Now</h3>
                    <form class="quote-form">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your E-mail" required>
                        </div>
                        <div class="mb-3">
                            <input type="url" class="form-control" placeholder="Website URL">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Get Your Free Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact Form Section -->

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animación de entrada para las FAQs
            anime({
                targets: '.accordion-item',
                translateY: [-30, 0],
                opacity: [0, 1],
                easing: 'easeOutQuint',
                duration: 800,
                delay: anime.stagger(120) // Delay escalonado entre cada ítem
            });

            // Animación de entrada para el formulario
            anime({
                targets: '.quote-form',
                translateX: [40, 0],
                opacity: [0, 1],
                easing: 'easeOutQuint',
                duration: 1000
            });
        });
    </script>
</body>

</html>