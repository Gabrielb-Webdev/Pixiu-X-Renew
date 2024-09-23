document.addEventListener("DOMContentLoaded", function () {
  const progressBars = document.querySelectorAll(".progress-bar");

  progressBars.forEach((bar) => {
    const value = bar.getAttribute("data-value"); // Obtener el valor del atributo data-value
    bar.style.width = value + "%"; // Aplicar el porcentaje de ancho
  });
});
document.addEventListener("DOMContentLoaded", function () {
  // Selecciona todos los enlaces de anclaje que inician con #
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault(); // Evita el comportamiento predeterminado del enlace

      // Obtiene el ID del destino del enlace
      const targetID = this.getAttribute("href");
      const targetSection = document.querySelector(targetID);

      // Ajusta el offset a tu preferencia
      const offset = 50; // Cambia este valor para ajustar el desplazamiento

      // Calcula la posición de la sección objetivo menos el offset
      const topPosition = targetSection.offsetTop - offset;

      // Desliza suavemente a la posición calculada
      window.scrollTo({
        top: topPosition,
        behavior: "smooth",
      });
    });
  });
});
