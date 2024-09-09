document.addEventListener("DOMContentLoaded", function () {
  const progressBars = document.querySelectorAll(".progress-bar");

  progressBars.forEach((bar) => {
    const value = bar.getAttribute("data-value"); // Obtener el valor del atributo data-value
    bar.style.width = value + "%"; // Aplicar el porcentaje de ancho
  });
});
