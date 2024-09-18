document.querySelectorAll('a[href^="index.php#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); // Previene la recarga de la página
        const targetID = this.getAttribute('href').split('#')[1]; // Obtiene la sección destino (por ejemplo: "home")
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
    });
});