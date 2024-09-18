document.addEventListener("DOMContentLoaded", function() {
    const progressBars = document.querySelectorAll(".progress-bar");

    progressBars.forEach((bar) => {
        const value = bar.getAttribute("data-value"); // Obtener el valor del atributo data-value
        bar.style.width = value + "%"; // Aplicar el porcentaje de ancho
    });
});

document.querySelectorAll('a[href^="index.php#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const currentPage = window.location.pathname.split('/').pop(); // Obtiene el nombre de la página actual
        const targetID = this.getAttribute('href').split('#')[1]; // Obtiene el ID de la sección del enlace

        // Si estamos en el index.php, prevenimos la recarga y hacemos scroll suave
        if (currentPage === 'index.php' || currentPage === '') {
            e.preventDefault(); // Previene la recarga de la página
            const targetElement = document.getElementById(targetID); // Busca el elemento con ese ID

            if (targetElement) {
                const offset = 80; // Ajusta este valor para cambiar el margen superior
                const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        } else {
            // Si no estamos en el index.php, dejamos que el enlace funcione normalmente y redirija
            window.location.href = `index.php#${targetID}`;
        }
    });
});

