<!DOCTYPE html>
<html lang="en">
<?php require 'PhpFiles/session_protect.php'; ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SUMAN TULSIANI CHS LTD.</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="../Suman_TulsianiCHS/assets/images/logo2.png" type="image/png">

  <style>
    body {
      background-color: #f0efe9;
      font-family: 'Georgia', serif;
    }

    .arrow-btn {
      background: none;
      border: none;
      font-size: 28px;
      font-weight: bold;
      color: black;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg border-bottom py-3" style="background-color: #e0dfd6;">
    <div class="container-fluid px-4">

      <div class="d-flex align-items-center gap-2">
        <a class="navbar-brand d-flex align-items-center justify-content-between w-100" href="./index.php">
          <div class="d-flex align-items-center gap-2">
            <img src="../Suman_TulsianiCHS/assets/images/logo2.png"
              alt="Logo"
              class="img-fluid"
              style="max-height: 42px; width: auto;">
            <span class="logo-text fw-semibold text-nowrap" style="font-size: 0.9rem;">SUMAN TULSIANI CHS</span>
          </div>
        </a>

        <!-- Hamburger Button -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <!-- Desktop nav items -->
      <div class="collapse navbar-collapse d-none d-lg-block">
        <ul class="navbar-nav gap-3 ms-auto me-5">
          <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="./PMC.php">PMC</a></li>
          <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notice & Minutes</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li> -->
          <li class="nav-item"><a class="nav-link" href="./visual_updates.php">Visual Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="./contact_us.php">Feedback & Queries</a></li>


          <li class="nav-item"><a class="nav-link" href="./login.php">Log Out</a></li>
        </ul>
      </div>

      <!-- Offcanvas for mobile -->
      <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" style="width: 280px;">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav gap-3">
            <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
            <li class="nav-item"><a class="nav-link" href="./PMC.php">PMC</a></li>
            <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notice & Minutes</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li> -->
            <li class="nav-item"><a class="nav-link" href="./visual_updates.php">Visual Updates</a></li>
            <li class="nav-item"><a class="nav-link" href="./contact_us.php">Feedback & Queries</a></li>

            <li class="nav-item"><a class="nav-link" href="./login.php">Log Out</a></li>
          </ul>
        </div>
      </div>

    </div>
  </nav>

  <!-- LATEST UPDATE SECTION -->
  <section class="py-5" style="background-color: #f9f8f3;">
    <div class="container-fluid px-5">
      <div class="row align-items-center">
        <!-- LEFT: IMAGE WITH ARROWS -->
        <div class="col-md-6 position-relative" id="updateImageSection">
          <img id="carouselImage" src="../Suman_TulsianiCHS/assets/images/room.jpg" class="img-fluid w-100 rounded-3" style="max-height: 80vh; object-fit: cover;" />
          <!-- Arrows -->
          <div class="position-absolute bottom-0 end-0 mb-3 me-3 d-flex gap-2">
            <button class="arrow-btn" onclick="prevImage()">❮</button>
            <button class="arrow-btn" onclick="nextImage()">❯</button>
          </div>
        </div>

        <!-- RIGHT: TEXT -->

        <div class="col-md-6 d-flex flex-column justify-content-center ps-md-5 mt-n5 mt-md-0" id="updateText">
          <div class="logo-wrapper text-start">
            <h1 class="display-5 mb-3" style="font-weight: 250; letter-spacing: 2.5px; margin-left: 40px;">LATEST UPDATE</h1>
          </div>
          <p class="fs-5" style="max-width: 600px; margin-top: -10px;">
            Presentations are communication tools that can be used as demonstrations, lectures, speeches, reports, and more.
            It is mostly presented before an audience. It serves a variety of purposes, making presentations powerful tools
            for convincing and teaching.
          </p>
        </div>



      </div>
    </div>
  </section>


  <!-- FOOTER -->
  <footer class="bg-light border-top border-muted">
    <div class="container py-5">
      <div class="row">
        <!-- Left -->
        <div class="col-md-6 mb-4 mb-md-0 text-center">
          <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 100px; width: 100%;">
            <img src="../Suman_TulsianiCHS/assets/images/logo2.png" alt="Logo" style="height: 100%; object-fit: contain; max-width: 100%;">
          </div>

          <p class="text-muted small mb-0">
            SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
            NEAR RUSTOMJEE URBANIA, VRINDAVAN AREA,<br>
            MAJIWADA, THANE WEST, MAHARASHTRA, INDIA
          </p>
        </div>
        <!-- Right -->
        <div class="col-md-6">
          <h5 class="mb-3">Contacts</h5>
          <ul class="list-unstyled small text-muted">
            <li class="mb-2">-SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
              NEAR RUSTOMJEE URBANIA, VRINDAVAN AREA,<br>
              MAJIWADA, THANE WEST, MAHARASHTRA, INDIA</li>
            <li class="mb-2">- SUMAN TULSANI.in</li>
            <li>- +1 (123) 456-7890</li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="d-flex justify-content-center align-items-center pt-4 mt-4 border-top text-muted small " style="padding-left: 30%; ">
        <p class="mb-0">© 2025 Suman Tulsiani APARTMENTS CHS LTD - DEVELOPED BY <a href="https://www.theveenagroup.com/" class="text-primary text-decoration-none text-primary slide-underline" style="text-decoration: none;"><span class="text-primary">Veena Infotech</span></a>.</p>
        <div class="" style=" padding-left: 40%">
          <a href="#top" id="backToTop"
            class="btn  btn-warning btn-sm rounded-pill px-3 hidden fixed bottom-6 right-6  bg-yellow-400 text-black rounded-full shadow-lg hover:bg-yellow-300 transition-all duration-300 ease-in-out z-50 text-xl"
            aria-label="Back to Top">
            ↑
          </a>
        </div>



      </div>
    </div>
  </footer>

  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
  <script src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  <script>
    const images = [
      "../Suman_TulsianiCHS/assets/images/vtry.jpeg",
      "../Suman_TulsianiCHS/assets/images/room.jpg",
      "../Suman_TulsianiCHS/assets/images/room2.jpg",

    ];
    let currentIndex = 0;

    function showImage(index) {
      const img = document.getElementById("carouselImage");
      img.src = images[index];
    }

    function nextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    }

    function prevImage() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      showImage(currentIndex);
    }
  </script>

  <script>
    window.addEventListener("load", () => {
      // Image Fade-in + Zoom
      gsap.from("#carouselImage", {
        scale: 1.1,
        opacity: 0,
        duration: 1.2,
        ease: "power2.out"
      });

      // Arrow Buttons Slide Up
      gsap.from("#arrowButtons", {
        y: 30,
        opacity: 0,
        duration: 0.8,
        delay: 1,
        ease: "power2.out"
      });

      // Heading Slide from Left
      gsap.from("#updateText h1", {
        x: -50,
        opacity: 0,
        duration: 1,
        delay: 0.5,
        ease: "power2.out"
      });

      gsap.from(".navbar-nav .nav-item", {
        y: -30,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: "power2.out"
      });


      // Paragraph Fade In with Upward Motion
      gsap.from("#updateText p", {
        y: 30,
        opacity: 0,
        duration: 1,
        delay: 0.8,
        ease: "power2.out"
      });
    });
  </script>




</body>

</html>