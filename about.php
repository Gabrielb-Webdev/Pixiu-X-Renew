<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Pixiu X</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper CSS for sliders -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.min.css">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Start of Navbar -->
    <?php include 'components/navbar.php'; ?>
    <!-- End of Navbar -->

    <!-- Start of Hero Section -->
    <section class="hero-section position-relative d-flex justify-content-center align-items-center text-white" style="background: url('images/banner about.webp') no-repeat center center / cover; height: 80vh;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.6); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
        <div class="container text-center" style="position: relative; z-index: 2;">
            <h1 class="display-4 fw-bold">Empowering Your Business</h1>
            <p class="lead">With Customized Digital Solutions</p>
            <a href="#our-story" class="btn btn-orange mt-3">Discover Our Story</a>
        </div>
    </section>
    <!-- End of Hero Section -->

<!-- Start of Our Story Section -->
<section id="our-story" class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h6 class="text-uppercase text-orange">Our Story</h6>
                <div class="underline-orange mb-3"></div>
                <h2 class="fw-bold">Turning Ideas Into Digital Realities</h2>
                <p class="text-muted">Founded with a passion for technology and creativity, Pixiu is dedicated to empowering businesses through innovative digital solutions. From humble beginnings to becoming a trusted partner for numerous brands, our journey is driven by a commitment to excellence and a deep understanding of the digital landscape.</p>
                <p class="text-muted">Our mission is to transform your ideas into functional, scalable solutions that drive success. We thrive on challenges and believe that every project is an opportunity to create something exceptional.</p>
                <a href="#our-values" class="btn btn-orange btn-lg fw-bold px-4 py-3 mt-3" style="border-radius: 50px; text-transform: uppercase; transition: all 0.3s ease;">
                    Explore Our Values
                </a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="images/About us.webp" alt="Our Story" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
<!-- End of Our Story Section -->


    <!-- Start of Our Values Section -->
    <section id="our-values" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Our Core Values</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="value-card p-4 bg-white rounded shadow">
                        <i class="fas fa-handshake fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Client-First Approach</h5>
                        <p class="text-muted">We believe in building strong partnerships by understanding your needs and delivering solutions that exceed expectations.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="value-card p-4 bg-white rounded shadow">
                        <i class="fas fa-lightbulb fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Innovation & Creativity</h5>
                        <p class="text-muted">Innovation is at the heart of everything we do. We embrace new ideas and leverage cutting-edge technology to bring your vision to life.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="value-card p-4 bg-white rounded shadow">
                        <i class="fas fa-users fa-3x text-orange mb-3"></i>
                        <h5 class="fw-bold">Collaboration & Transparency</h5>
                        <p class="text-muted">We work closely with you, maintaining open communication and transparency throughout the project to ensure your success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Values Section -->

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

    <!-- Start of Our Expertise Section -->
    <section id="expertise" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Our Expertise</h2>
            <p class="text-center text-muted mb-5">We specialize in a wide range of services designed to meet the unique needs of your business. Our expertise spans across digital marketing, web development, HubSpot consulting, and more.</p>
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="expertise-card p-4 bg-white rounded shadow d-flex align-items-center">
                        <i class="fas fa-code fa-3x text-orange me-3"></i>
                        <div>
                            <h5 class="fw-bold">Custom Website Development</h5>
                            <p class="text-muted">Create a digital experience that reflects your brand and engages your audience with our custom web solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="expertise-card p-4 bg-white rounded shadow d-flex align-items-center">
                        <i class="fas fa-chart-line fa-3x text-orange me-3"></i>
                        <div>
                            <h5 class="fw-bold">HubSpot Consulting</h5>
                            <p class="text-muted">Maximize your CRM potential with tailored HubSpot consulting and optimization services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <div class="expertise-card p-4 bg-white rounded shadow d-flex align-items-center">
                        <i class="fas fa-database fa-3x text-orange me-3"></i>
                        <div>
                            <h5 class="fw-bold">Data Extraction & Analysis</h5>
                            <p class="text-muted">Leverage powerful data insights with our expert data scraping and analysis services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="expertise-card p-4 bg-white rounded shadow d-flex align-items-center">
                        <i class="fas fa-bullhorn fa-3x text-orange me-3"></i>
                        <div>
                            <h5 class="fw-bold">Digital Marketing</h5>
                            <p class="text-muted">Boost your online presence with tailored digital marketing strategies that drive engagement and conversions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Expertise Section -->

    <!-- Start of Our Impact Section -->
    <section id="our-impact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Our Impact</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4" data-aos="fade-up">
                    <div class="impact-card p-4 bg-white rounded shadow">
                        <h3 class="display-4 text-orange fw-bold">95%</h3>
                        <p class="text-muted">Client Satisfaction</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="impact-card p-4 bg-white rounded shadow">
                        <h3 class="display-4 text-orange fw-bold">+500</h3>
                        <p class="text-muted">Successful Projects</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="impact-card p-4 bg-white rounded shadow">
                        <h3 class="display-4 text-orange fw-bold">+20</h3>
                        <p class="text-muted">Industries Served</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="impact-card p-4 bg-white rounded shadow">
                        <h3 class="display-4 text-orange fw-bold">24/7</h3>
                        <p class="text-muted">Support Availability</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Impact Section -->

    <!-- Start of Call-to-Action Section -->
    <section id="call-to-action" class="cta-section py-5 text-white text-center" style="background: #dd6d2c;">
        <div class="container">
            <h2 class="fw-bold">Ready to Take Your Business to the Next Level?</h2>
            <p>Contact us today and let's discuss how we can make your vision a reality.</p>
            <a href="contact.php" class="btn btn-orange btn-lg fw-bold px-4 py-3" style="border-radius: 50px; text-transform: uppercase; transition: all 0.3s ease; background-color: #c2591c;">
                Get in Touch
            </a>
        </div>
    </section>
    <!-- End of Call-to-Action Section -->


    <!-- Start of Footer Section -->
    <?php include 'components/footer.php'; ?>
    <!-- End of Footer Section -->

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.min.js"></script>
    <!-- AOS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>