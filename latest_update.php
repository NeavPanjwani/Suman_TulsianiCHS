<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SUMAN TULSIANI CHS LTD.</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="../pictures/logo-2.png" type="image/png">

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

      <div class="nav_logo" style="margin-left: 50px;">
        <a class="navbar-brand d-flex align-items-center gap-2" href="./index.PHP">
          <img src="../pictures/logo-2.png" alt="Logo" width="38" height="38">
          <span class="logo-text">SUMAN TULSIANI CHS</span>
        </a>
      </div>

      <!-- Hamburger Button (only shows on small screens) -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Desktop nav items -->
      <div class="collapse navbar-collapse d-none d-lg-block">
        <ul class="navbar-nav gap-3 ms-auto me-5">
          <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="./PMC.php">PMC</a></li>
          <li class="nav-item"><a class="nav-link" href="./Notice&minutes_a.php">Notice & Minutes</a></li>
          <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li>
          <li class="nav-item"><a class="nav-link" href="./contact_us.php">Feedback & Queries</a></li>
          <li class="nav-item"><a class="nav-link" href="./visual_updates.php">Visual Updates</a></li>

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
            <li class="nav-item"><a class="nav-link" href="./Notice&minutes_a.php">Notice & Minutes</a></li>
            <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li>

            <li class="nav-item"><a class="nav-link" href="./contact_us.php">Feedback & Queries</a></li>
            <li class="nav-item"><a class="nav-link" href="./visual_updates.php">Visual Updates</a></li>
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
        <div class="col-md-6 position-relative">
          <img id="carouselImage" src="..." class="img-fluid w-100 rounded-3" style="max-height: 80vh; object-fit: cover;" />
          <!-- Arrows -->
          <div class="position-absolute bottom-0 end-0 mb-3 me-3 d-flex gap-2">
            <button class="arrow-btn" onclick="prevImage()">❮</button>
            <button class="arrow-btn" onclick="nextImage()">❯</button>
          </div>
        </div>

        <!-- RIGHT: TEXT -->

        <div class="col-md-6 d-flex flex-column justify-content-center ps-md-5 mt-n5 mt-md-0">
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
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
            <img src="../pictures/logo-2.png" alt="Logo" style="height: 100%; object-fit: contain;">
          </div>
          <p class="text-muted small mb-0">
            EVEREST APARTMENTS CO-OP. HOUSING SOCIETY LTD. Located at Mount Pleasant Road, Malabar Hill, a prime residential area offering comfort and convenience.
          </p>
        </div>
        <!-- Right -->
        <div class="col-md-6">
          <h5 class="mb-3">Contacts</h5>
          <ul class="list-unstyled small text-muted">
            <li class="mb-2">- EVEREST APARTMENTS CO-OP. HOUSING SOCIETY LTD. OPP: MOUNT PLEASANT ROAD, MALABAR HILL</li>
            <li class="mb-2">- RajulA-Bchs.in</li>
            <li>- +91 91677 91508</li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="d-flex justify-content-center align-items-center pt-4 mt-4 border-top text-muted small " style="padding-left: 30%; ">
        <p class="mb-0">© 2025 RAJUL A-B APARTMENTS CHS LTD - DEVELOPED BY <a href="https://www.theveenagroup.com/" class="text-primary text-decoration-none text-primary slide-underline" style="text-decoration: none;"><span class="text-primary">Veena Infotech</span></a>.</p>
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
      "...",
      "...",
      "..."
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
  document.addEventListener("DOMContentLoaded", () => {
    // Slide in navbar from top with fade
    gsap.from("nav", {
      y: -80,
      opacity: 0,
      duration: 1.4,
      ease: "expo.out"
    });

    // Stagger navbar items with scale effect
    gsap.from(".navbar-nav li", {
      opacity: 0,
      scale: 0.8,
      stagger: 0.15,
      duration: 1,
      delay: 0.3,
      ease: "back.out(1.7)"
    });

    // Animate hero image zoom-in with slight rotation
    gsap.from("#carouselImage", {
      scale: 0.8,
      rotate: 2,
      opacity: 0,
      duration: 1.8,
      delay: 0.6,
      ease: "power3.out"
    });

    // Animate arrow buttons individually
    gsap.from(".arrow-btn", {
      y: 20,
      opacity: 0,
      duration: 1,
      delay: 1,
      stagger: 0.25,
      ease: "elastic.out(1, 0.5)"
    });

    // Animate heading with typewriter reveal
    gsap.from(".logo-wrapper h1", {
      opacity: 0,
      x: -80,
      duration: 1.5,
      ease: "power2.out",
      delay: 0.6
    });

    // Animate paragraph from below
    gsap.from(".logo-wrapper ~ p", {
      opacity: 0,
      y: 30,
      duration: 1.2,
      delay: 1.2,
      ease: "power2.out"
    });

    // Scroll-trigger footer animation
    gsap.from("footer", {
      scrollTrigger: {
        trigger: "footer",
        start: "top bottom"
      },
      y: 100,
      opacity: 0,
      duration: 1.5,
      ease: "power2.out"
    });

    // Right-side content slide from right
    gsap.from(".col-md-6.ps-md-5", {
      scrollTrigger: {
        trigger: ".col-md-6.ps-md-5",
        start: "top 80%"
      },
      x: 100,
      opacity: 0,
      duration: 1.3,
      ease: "power4.out"
    });
  });
</script>




</body>

</html>