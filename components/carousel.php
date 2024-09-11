<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrusel</title>
  <!-- Enlace a la librería GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/Draggable.min.js"></script>
  <style>
    .carousel-wrapper {
      margin: 0;
      background: #1d1d1d;
      overflow: hidden; /* Evitar scroll horizontal */
    }

    .custom-carousel-container {
      margin: 20px 0;
      position: relative;
      overflow: hidden;
      width: 100%; /* Ocupa todo el ancho sin causar scroll horizontal */
      box-sizing: border-box; /* Asegura que padding y márgenes no aumenten el ancho */
    }

    .custom-carousel-item {
      position: absolute;
      margin: 0 12px; /* Reducir los márgenes para evitar overflow */
      box-sizing: border-box;
    }

    .custom-wrapper-container {
      position: relative;
    }
  </style>
</head>
<body>
  <div class="custom-wrapper-container">
    <div class="custom-carousel-container" id="custom-wrapper">
      <div class="custom-carousel-items">
        <div class="custom-carousel-item">
          <img src="https://via.placeholder.com/320?text=1" alt="">
        </div>
        <div class="custom-carousel-item">
          <img src="https://via.placeholder.com/320?text=2" alt="">
        </div>
        <div class="custom-carousel-item">
          <img src="https://via.placeholder.com/320?text=3" alt="">
        </div>
        <div class="custom-carousel-item">
          <img src="https://via.placeholder.com/320?text=4" alt="">
        </div>
        <div class="custom-carousel-item">
          <img src="https://via.placeholder.com/320?text=5" alt="">
        </div>
        <div class="custom-carousel-item">
          <img src="https://via.placeholder.com/320?text=6" alt="">
        </div>
        <div class="custom-carousel-item">
          <img src="https://via.placeholder.com/320?text=7" alt="">
        </div>
      </div>
    </div>
  </div>

  <script>
    console.clear();

    gsap.registerPlugin(Draggable);

    var wrapper = document.querySelector(".custom-carousel-container");
    var boxes = document.querySelectorAll(".custom-carousel-item");

    var boxWidth = 344; // Ajustado: 320px de imagen + 24px de márgenes
    var wrapWidth = boxes.length * boxWidth;

    gsap.set(wrapper, {height: 275});

    for (var i = 0; i < boxes.length; i++) {
      let box = boxes[i];
      gsap.set(box, {x: i * boxWidth, left: -boxWidth });
    }

    var wrapProgress = gsap.utils.wrap(0, 1);
    var snapBox = gsap.utils.snap(boxWidth);
    var proxy = document.createElement("div");
    var props = gsap.getProperty(proxy);

    var animation = gsap.to(".custom-carousel-item", {
      duration: 1,
      x: "+=" + wrapWidth,
      ease: Linear.easeNone,
      paused: true,
      repeat: -1,
      modifiers: {
        x: function(x, target) {
          x = parseFloat(x) % wrapWidth;
          return x + "px";
        }
      }
    }).progress(1 / boxes.length);

    Draggable.create(proxy, {
      trigger: "#custom-wrapper",
      throwProps: true,
      onDrag: updateProgress,
      onThrowUpdate: updateProgress,
      snap: {
        x: snapBox
      }
    });

    function updateProgress() {  
      animation.progress(wrapProgress(props("x") / wrapWidth));
    }
  </script>
</body>
</html>
