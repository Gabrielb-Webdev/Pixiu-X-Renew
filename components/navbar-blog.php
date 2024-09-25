<?php
session_start(); // Iniciar la sesión si no está ya iniciada
?>

<!-- Inicio de Navbar Blog -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container py-2 navbar-spacing">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="sources/images/logo.webp" alt="Logo" class="logo-img" style="max-height: 30px;">
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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>

                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="/marketing">Marketing</a></li>
                        <li><a class="dropdown-item" href="/hubspot">HubSpot Consulting</a></li>
                        <li><a class="dropdown-item" href="/web-development">Web Development</a></li>
                        <li><a class="dropdown-item" href="/data-extraction">Data Extraction</a></li>
                        <li><a class="dropdown-item" href="/design">Design Services</a></li>
                    </ul>
                </li>

                <!-- About Us Link -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About Us</a>
                </li>

                <!-- Contact Link -->
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

                <!-- Dashboard and Logout Buttons -->
                <?php if (isset($_SESSION['user_email'])): ?>
                    <li class="nav-item ms-3">
                        <a href="dashboard.php" class="btn btn-custom-login">Dashboard</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="database/logout.php" class="btn btn-custom-logout">Cerrar Sesión</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Fin de Navbar Blog -->

<style>
    .btn-custom-login,
    .btn-custom-logout {
        background-color: #dd6d2c;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 8px 16px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        display: inline-block;
        text-align: center;
        cursor: pointer;
    }

    .btn-custom-login:hover,
    .btn-custom-logout:hover {
        background-color: #c05e27;
        transform: scale(1.05);
    }

    .btn-custom-login:focus,
    .btn-custom-logout:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(221, 109, 44, 0.5);
    }
</style>
