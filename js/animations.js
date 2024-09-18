document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger);

    // Animación de texto de bienvenida
    gsap.fromTo(".welcome-text", {
        opacity: 0,
        y: 50,
    }, {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "top 80%", // Inicia la animación antes para mejor percepción
            end: "top 30%",
            toggleActions: "play none none none",
        },
        opacity: 1,
        y: 0,
        duration: 1.5, // Reduce la duración para mejor performance
        ease: "power1.out"
    });

    // Animación de las imágenes apiladas
    gsap.fromTo(".image-container img", {
        opacity: 0,
        scale: 1,
    }, {
        scrollTrigger: {
            trigger: ".image-container",
            start: "top 80%", // Ajuste para cargar antes que el usuario vea la sección
            end: "top 30%",
            toggleActions: "play none none none",
        },
        opacity: 1,
        duration: 1.2, // Reduce un poco la duración para mejor performance
        ease: "power1.out",
        stagger: 0.1 // Reduce el retraso para que sea más rápido
    });

    // Refrescar triggers
    ScrollTrigger.refresh();
});