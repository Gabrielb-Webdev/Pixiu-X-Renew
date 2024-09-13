document.addEventListener("DOMContentLoaded", function () {
    // Registrar el plugin de ScrollTrigger de GSAP
    gsap.registerPlugin(ScrollTrigger);

    // Animación para la sección de bienvenida
    gsap.from(".welcome-text", {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "top 100%",  // Inicia cuando la sección esté 75% visible
            end: "bottom 50%", // Termina cuando esté casi fuera de pantalla
            toggleActions: "play reverse play reverse",  // Reproduce al entrar, revierte al salir
        },
        opacity: 0,
        y: 250,
        duration: 1.5,
        ease: "power2.out"
    });

    gsap.from(".image-placeholder", {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "top 100%",  // Inicia cuando la sección esté 75% visible
            end: "bottom 50%", // Termina cuando esté casi fuera de pantalla
            toggleActions: "play reverse play reverse",  // Reproduce al entrar, revierte al salir
        },
        opacity: 0,
        x: 250,
        duration: 1.5,
        ease: "power2.out"
    });
});
