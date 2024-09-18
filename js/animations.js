document.addEventListener("DOMContentLoaded", function () {
    // Registrar el plugin de ScrollTrigger de GSAP
    gsap.registerPlugin(ScrollTrigger);

    // Animación de entrada inicial para el texto de bienvenida (cuando la página se carga)
    gsap.from(".welcome-text", {
        opacity: 0,
        y: 50, // Aparece desde abajo
        duration: 1.5,
        ease: "power2.out"
    });

    // Animación de entrada inicial para todas las imágenes apiladas, incluyendo la primera
    gsap.from(".image-container img", {
        opacity: 0,
        scale: 0.8, // Aparece desde más pequeño
        duration: 1.5,
        ease: "power2.out",
        stagger: 0.2 // Aplica un retraso entre cada imagen, incluyendo la primera
    });

    // Animación para mostrar el texto al volver a la sección de bienvenida
    gsap.fromTo(".welcome-text", {
        opacity: 0,
        y: 50
    }, {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "top 75%",  // Inicia cuando la sección esté 75% visible
            end: "top 25%", // Termina cuando esté casi fuera de pantalla
            toggleActions: "play reverse play reverse",  // Asegura que la animación se reproduzca tanto al entrar como al salir
        },
        opacity: 1,
        y: 0,
        duration: 1.5,
        ease: "power2.out"
    });

    // Animación para ocultar el texto al salir de la sección de bienvenida
    gsap.to(".welcome-text", {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "bottom 75%",  // Empieza la animación al salir de la pantalla
            end: "bottom 25%",   // Cuando casi desaparezca
            toggleActions: "play reverse play reverse",  // Reproduce al salir y revierte al volver
        },
        opacity: 0,
        y: -50, // Desaparece hacia arriba
        duration: 1.5,
        ease: "power2.in"
    });

    // Animación para mostrar las imágenes apiladas al volver a la sección
    gsap.fromTo(".image-container img", {
        opacity: 0,
        scale: 0.8 // Aparecen desde más pequeño
    }, {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "top 75%",  // Inicia cuando la sección esté 75% visible
            end: "top 25%", // Termina cuando esté casi fuera de pantalla
            toggleActions: "play reverse play reverse",  // Asegura que las imágenes se muestren y oculten correctamente
        },
        opacity: 1,
        scale: 1, // Recupera el tamaño completo
        duration: 1.5,
        ease: "power2.out",
        stagger: 0.2 // Aplica un retraso entre cada imagen, incluyendo la primera
    });

    // Animación para ocultar las imágenes apiladas al salir de la sección
    gsap.to(".image-container img", {
        scrollTrigger: {
            trigger: ".welcome-section",
            start: "bottom 75%",  // Empieza la animación al salir de la pantalla
            end: "bottom 25%",   // Termina cuando casi desaparezca
            toggleActions: "play reverse play reverse",  // Asegura que las imágenes desaparezcan y reaparezcan correctamente
        },
        opacity: 0,
        scale: 0.8, // Desaparecen haciendo zoom hacia dentro
        duration: 1.5,
        ease: "power2.in",
        stagger: 0.2 // Desaparece con retraso entre las imágenes
    });
});
