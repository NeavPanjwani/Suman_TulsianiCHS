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

  <!-- SECTION -->
  <section class="py-5 " style="background-color: #f9f8f3;">
    <div class="container-fluid px-4">
      <div class="row align-items-center">

        <!-- LEFT SIDE -->
        <div class="col-md-6 pt-4 pt-md-0" id="pmcLeft">
          <div class="fs-6 ms-5 ps-3 mb-4">
            <h1 class="display-3 fw-light mb-2">PMC</h1>
            <p class="text-muted fst-italic">– NKA PMC</p>
          </div>
          <div class="ms-5">
            <p class="fs-6 mb-3">
              Headway Development Management LLP, a real estate advisory firm based in Mumbai, India.<br>
              The company specializes in providing Project Management Consultancy (PMC), Owner’s<br>
              Representative services, and Development Management, focusing on the Mumbai region.
            </p>
            <p class="fs-6 mb-4">
              Their expertise encompasses land broking and other related services tailored to the real estate<br>
              sector. Headway DM LLP is actively involved in the development and management of various <br>
              real estate projects, offering professional guidance and support throughout the project lifecycle.
            </p>
          </div>

          <div class="text-center">
            <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 text-center" data-bs-toggle="modal" data-bs-target="#previewModal">
              FULL PREVIEW
            </button>
          </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-6 text-center mt-5 mt-md-0" id="pmcRight">
          <img src="../Suman_TulsianiCHS/assets/images/pmc.png" alt="" class="img-fluid rotate-once" style="max-height: 300px;">
        </div>
      </div>
    </div>
  </section>

  <!-- MODAL -->
  <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered animate-modal">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="previewModalLabel">Full Preview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="height: 80vh;">
          <iframe src="../pdf/housing.com research.pdf"
            width="100%" height="100%"
            style="border: none;"
            loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    window.addEventListener("load", () => {
      // PMC Heading and Subheading
      gsap.from("#pmcLeft h1", {
        x: -50,
        opacity: 0,
        duration: 1,
        ease: "power2.out"
      });

      gsap.from("#pmcLeft p.text-muted", {
        x: -30,
        opacity: 0,
        duration: 1,
        delay: 0.3,
        ease: "power2.out"
      });

      // Paragraphs
      gsap.from("#pmcLeft .fs-6.mb-3, #pmcLeft .fs-6.mb-4", {
        y: 30,
        opacity: 0,
        duration: 1,
        delay: 0.5,
        stagger: 0.2,
        ease: "power2.out"
      });

      gsap.from(".navbar-nav .nav-item", {
        y: -30,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: "power2.out"
      });


      // Button
      gsap.from("#pmcLeft button", {
        scale: 0.8,
        opacity: 0,
        duration: 0.8,
        delay: 0.9,
        ease: "back.out(1.7)"
      });

      // Right Image
      gsap.from("#pmcRight img", {
        x: 60,
        scale: 1.05,
        opacity: 0,
        duration: 1.2,
        delay: 0.4,
        ease: "power2.out"
      });
    });

    // Optional: Animate modal iframe content on open
    const previewModal = document.getElementById('previewModal');
    previewModal.addEventListener('shown.bs.modal', () => {
      gsap.from("#previewModal iframe", {
        opacity: 0,
        scale: 0.95,
        duration: 0.6,
        ease: "power2.out"
      });
    });
  </script>




</body>

</html>