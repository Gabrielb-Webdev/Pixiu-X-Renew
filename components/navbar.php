<!-- Inicio de Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container py-2 navbar-spacing"> <!-- Reducido el padding -->
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.webp" alt="Logo" class="logo-img" style="max-height: 30px;"> <!-- Reducido el tamaño del logo -->
        </a>
        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                        <li><a class="dropdown-item" href="hubspot.php">HubSpot Consulting</a></li>
                        <li><a class="dropdown-item" href="web-development.php">Web Development</a></li>
                        <li><a class="dropdown-item" href="data-extraction.php">Data Extraction</a></li>
                        <li><a class="dropdown-item" href="design.php">Design Services</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
                </li>

                <!-- Contact Link -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Fin de Navbar -->
