document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    // Animación de texto de bienvenida
    gsap.fromTo(".welcome-text", {
        opacity: 0,
        y: 50,
    }, {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "top 75%",
            end: "top 25%",
            toggleActions: "play none none none",
        },
        opacity: 1,
        y: 0,
        duration: 2, // Incrementa la duración para una animación más fluida
        ease: "power1.out" // Easing más suave para evitar brusquedad
    });

    // Animación de las imágenes apiladas
    gsap.fromTo(".image-container img", {
        opacity: 0,
        scale: 1,
    }, {
        scrollTrigger: {
            trigger: ".image-container",
            start: "top 75%",
            end: "top 25%",
            toggleActions: "play none none none",
        },
        opacity: 1,
        duration: 1.8, // Un poco más de duración
        ease: "power1.out", // Easing más suave
        stagger: 0.15 // Un retraso más corto para que parezca más natural
    });

    // Refrescar triggers
    ScrollTrigger.refresh();
});
