<?php
// Página dedicada al proyecto BIOSANTO
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="CECOLVEN, construcción, proyectos, Antioquia" />
  <meta name="description" content="Proyecto Biosanto - Consorcio Empresarial Colombo Venezolano" />
  <meta name="author" content="CECOLVEN" />

  <title>BIOSANTO</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="images/cecolven.ico">

  <!-- Bootstrap 5 CSS y JS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    body {
      scroll-behavior: smooth;
      font-family: 'Poppins', sans-serif;
    }

    /* Botón volver arriba */
    .back-top-btn {
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 9999;
      width: 60px;
      height: 60px;
      background-color: #036624ff;
      color: #fff;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.8rem;
      text-decoration: none;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    .back-top-btn:hover {
      background-color: #034413ff;
      transform: translateY(-3px);
    }

    /* Proyecto BIOSANTO */
    .project-card {
      max-width: 800px;
      margin: 50px auto;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .project-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.18);
    }

    .project-img {
      width: 100%;
      display: block;
    }

    .project-body {
      padding: 25px;
      text-align: center;
    }

    .project-body h3 {
      font-size: 2rem;
      color: #144272;
      margin-bottom: 10px;
    }

    .project-body p {
      font-size: 1rem;
      color: #555;
      margin-bottom: 15px;
    }

    .launch-box {
      background: #f4f4f4;
      padding: 20px;
      border-radius: 12px;
      margin: 15px 0;
    }

    .launch-box h4 {
      color: #14722bff;
      margin-bottom: 10px;
    }

    .launch-box ul {
      list-style: none;
      padding: 0;
      font-size: 0.95rem;
    }

    .launch-box ul li {
      margin-bottom: 5px;
    }

    /* Sección Urbanismo */
    .urbanismo_section {
      max-width: 900px;
      margin: 50px auto;
      text-align: center;
    }

    .urbanismo_section img {
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .urbanismo_section img:hover {
      transform: scale(1.02);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.18);
    }

    /* Sección Zonas Comunes */
    .zonas-comunes h3 {
      margin-bottom: 30px;
    }

    .accordion-button {
      font-weight: 600;
      color: #144272;
    }

    .accordion-button:not(.collapsed) {
      color: #fff;
      background-color: #036624ff;
    }

    .accordion-body img {
      width: 100%;
      border-radius: 12px;
      margin-bottom: 15px;
    }

    @media (max-width: 768px) {
      .project-body h3 {
        font-size: 1.6rem;
      }
    }
  </style>
</head>

<body>

  <!-- Botón volver arriba -->
 <a href="index.php" class="back-top-btn" title="Volver al inicio">
  <i class="fa-solid fa-house"></i>
</a>

  <!-- Header simple -->
  <header class="header_section py-3 text-center">
    <a href="index.php">
      <img src="images/Logo_cecolven.png" alt="CECOLVEN" width="180" height="60">
    </a>
  </header>

  <!-- Sección Urbanismo -->
  <section class="urbanismo_section">
  
      <img src="images/cecolvennegro.png" 
     class="project-img responsive-logo" 
     alt="Proyecto Biosanto" 
     loading="lazy">

<style>
.responsive-logo {
  width: 100px;
  max-width: 100%;
  height: auto;
  object-fit: contain;
}

@media (max-width: 768px) {
  .responsive-logo {
    width: 80px;
  }
}

@media (max-width: 480px) {
  .responsive-logo {
    width: 60px;
  }
}
</style>

<style>
.titulo-biosanto {
  font-size: 3rem;           /* MÁS GRANDE */
  font-weight: 800;          /* Elegante y fuerte */
  text-align: center;
  color: #144272;            /* Azul corporativo */
  letter-spacing: 2px;       /* Separación de letras */
  text-transform: uppercase; /* Mayúsculas */
  margin-bottom: 25px;
  font-family: 'Poppins', sans-serif;

  /* Efecto de brillo elegante */
  background: linear-gradient(to right, #144272, #036624);
  -webkit-background-clip: text;
  color: transparent;

  /* Sombra suave */
  text-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

</style>

   <!-- WIDGET DESCRIPTIVO - URBANISMO -->


    <img src="images/1biosanto.webp" alt="Urbanismo" loading="lazy">
     <img src="images/2biosanto.webp" alt="Urbanismo" loading="lazy">
    
  </section>
<section class="biosanto-section">

  <!-- IMAGEN -->
  <div class="biosanto-image">
    <img 
      src="images/3biosanto.webp" 
      alt="Urbanismo Biosanto"
      loading="lazy">
  </div>

  <!-- VIDEO -->
  <div class="biosanto-video">
    <iframe
      src="https://www.youtube.com/embed/y2lncg7o1iM?controls=1&rel=0&modestbranding=1"
      frameborder="0"
      allow="encrypted-media; picture-in-picture"
      allowfullscreen>
    </iframe>
  </div>

</section>


<style>
.biosanto-section {
  max-width: 1400px;
  margin: 80px auto;
  padding: 0 20px;
}

/* IMAGEN */
.biosanto-image img {
  width: 100%;
  border-radius: 30px;
  display: block;
}

/* VIDEO */
.biosanto-video {
  margin: 50px auto 0;
  width: 70%;
  aspect-ratio: 16 / 9;
  border-radius: 30px;
  overflow: hidden;
  border: 6px solid #2e7d32;
  box-shadow: 0 25px 50px rgba(0,0,0,0.35);
  background: #000;
}

.biosanto-video iframe {
  width: 100%;
  height: 100%;
  border: 0;
}
@media (max-width: 900px) {
  .biosanto-video {
    width: 100%;
    margin-top: 30px;
    border-radius: 22px;
  }

  .biosanto-section {
    margin: 50px auto;
  }
}


</style>
<script>
  const video = document.querySelector('.biosanto-video video');

  document.addEventListener('click', () => {
    video.muted = false;
    video.volume = 1;
  }, { once: true });
</script>
 <!-- SECCIÓN IMAGEN DESTACADA -->
<section class="biosanto-image-section">

  <div class="biosanto-image-wrapper">
    <img 
      src="images/4biosanto.webp"
      alt="Vista adicional Proyecto Biosanto"
      loading="lazy"
    >
  </div>
  <div class="biosanto-image-wrapper">
    <img 
      src="images/5biosanto.webp"
      alt="Vista adicional Proyecto Biosanto"
      loading="lazy"
    >
  </div>

</section>
<style>
.biosanto-image-section {
  max-width: 1400px;
  margin: 80px auto;
  padding: 0 20px;
}

.biosanto-image-wrapper img {
  width: 100%;
  border-radius: 30px;
  display: block;
  box-shadow: 0 20px 45px rgba(0,0,0,0.18);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.biosanto-image-wrapper img:hover {
  transform: scale(1.02);
  box-shadow: 0 30px 65px rgba(0,0,0,0.25);
}

.highlight-wellbeing {
  color: #dbd815ff; /* amarillo verdoso quemado */
  font-weight: 600;
}

</style>


  <!-- Sección Zonas Comunes -->
<section class="zonas-comunes container">
  <h3 class="text-center">Zonas Comunes</h3>

  <div class="accordion" id="zonasAccordion">

    <!-- 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading1">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse1"
          aria-expanded="false" aria-controls="collapse1">
          Vista de las áreas comunes
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse"
        aria-labelledby="heading1" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/1vistaaerea.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <!-- 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse2"
          aria-expanded="false" aria-controls="collapse2">
          Zona de Lagos y Pic Nic:
          <span class="highlight-wellbeing"> Áreas Comunes para Disfrutar</span>
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse"
        aria-labelledby="heading2" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/lago.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <!-- 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse3"
          aria-expanded="false" aria-controls="collapse3">
          Zona Deportiva
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse"
        aria-labelledby="heading3" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/zonadeporte.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <!-- 4 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse4"
          aria-expanded="false" aria-controls="collapse4">
          Áreas destinadas al deporte:
          <span class="highlight-wellbeing"> Para la salud y el bienestar</span>
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse"
        aria-labelledby="heading4" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/biosantodeporte.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <!-- 5 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse5"
          aria-expanded="false" aria-controls="collapse5">
          Zona Recreativa
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse"
        aria-labelledby="heading5" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/recreativa.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <!-- 6 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading6">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse6"
          aria-expanded="false" aria-controls="collapse6">
          Zona Social: Panorámica del Club House
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse"
        aria-labelledby="heading6" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/social.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <!-- 7 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading7">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse7"
          aria-expanded="false" aria-controls="collapse7">
          Piscinas climatizadas con agua natural de manantial, Sauna y Turco
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse"
        aria-labelledby="heading7" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/PiscinaClimatizada.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

    <!-- 8 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading8">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapse8"
          aria-expanded="false" aria-controls="collapse8">
          Salón Social: Un lugar ideal para socializar y disfrutar
        </button>
      </h2>
      <div id="collapse8" class="accordion-collapse collapse"
        aria-labelledby="heading8" data-bs-parent="#zonasAccordion">
        <div class="accordion-body p-0">
          <img src="images/salonSocial.webp" class="img-fluid rounded" alt="">
        </div>
      </div>
    </div>

  </div>
</section>

 

 <section class="biosanto-image-section">

  <div class="biosanto-image-wrapper">
    <img 
      src="images/biosanto26.webp"
      alt="Vista adicional Proyecto Biosanto"
      loading="lazy"
    >
  </div>
  <div class="biosanto-image-wrapper">
    <img 
      src="images/biosanto25.webp"
      alt="Vista adicional Proyecto Biosanto"
      loading="lazy"
    >
  </div>
 

</section>
<style>
.biosanto-image-section {
  max-width: 1400px;
  margin: 80px auto;
  padding: 0 20px;
}

.biosanto-image-wrapper img {
  width: 100%;
  border-radius: 30px;
  display: block;
  box-shadow: 0 20px 45px rgba(0,0,0,0.18);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.biosanto-image-wrapper img:hover {
  transform: scale(1.02);
  box-shadow: 0 30px 65px rgba(0,0,0,0.25);
}

.highlight-wellbeing {
  color: #dbd815ff; /* amarillo verdoso quemado */
  font-weight: 600;
}

</style>
<!-- SECCIÓN CASA MODELO - VIDEO -->
<section class="video-section container my-5 text-center">

  <h3 class="mb-4" style="
      color:#144272;
      text-align:center;
      font-size:2.3rem;
      font-weight:700;
      letter-spacing:1px;">
    Casa Modelo - Biosanto
  </h3>

  <div class="video-card-h" style="
      margin:0 auto;
      max-width:1100px;">
      
    <div class="video-wrapper" 
         style="
            position:relative;
            width:100%;
            padding-bottom:56.25%;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 12px 35px rgba(0,0,0,0.20);">
      
      <iframe 
        src="https://www.youtube.com/embed/PjFuUf7MIj0?si=USUonCuWIPrg3d7T"
        title="Casa Modelo Biosanto"
        style="
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            border:0;"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen 
        loading="lazy">
      </iframe>

    </div>

    <h4 class="mt-4" style="
        color:#036624;
        font-size:1.7rem;
        font-weight:600;
        text-align:center;">
      Casa modelo Biosanto
    </h4>

  </div>
 <div class="biosanto-image-wrapper">
    <img 
      src="images/emergentebiosanto.webp"
      alt="Vista adicional Proyecto Biosanto"
      loading="lazy"
    >
  </div>
</section>



  <!-- Footer simple -->
  <footer class="text-center py-4" style="background: #f4f4f4;">
    <p>&copy; 2025 CECOLVEN. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
