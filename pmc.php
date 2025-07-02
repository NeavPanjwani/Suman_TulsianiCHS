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

    <!-- SECTION -->
    <section class="py-5 " style="background-color: #f9f8f3;">
        <div class="container-fluid px-4">
            <div class="row align-items-center">

                <!-- LEFT SIDE -->
                <div class="col-md-6 pt-4 pt-md-0">
                    <div class="fs-6 ms-5 ps-3 mb-4">
                        <h1 class="display-3 fw-light mb-2">PMC</h1>
                        <p class="text-muted fst-italic">– HEADWAY PMC</p>
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
                <div class="col-md-6 text-center mt-5 mt-md-0">
                    <img src="..." alt="Headway Logo" class="img-fluid rotate-once" style="max-height: 300px;">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  gsap.registerPlugin(ScrollTrigger);

  // Fade in navbar with slight slide
  gsap.from(".navbar", {
    y: -80,
    opacity: 0,
    duration: 1.2,
    ease: "power4.out"
  });

  // Staggered fade and scale for nav items
  gsap.from(".navbar-nav .nav-item", {
    opacity: 0,
    scale: 0.9,
    stagger: 0.1,
    duration: 1,
    ease: "back.out(1.5)",
    delay: 0.5
  });

  // Fade in section title with slight skew
  gsap.from(".display-3", {
    scrollTrigger: ".display-3",
    x: -100,
    skewX: 5,
    opacity: 0,
    duration: 1.4,
    ease: "power3.out"
  });

  // Fade in subheading with upward float
  gsap.from(".text-muted.fst-italic", {
    scrollTrigger: ".text-muted.fst-italic",
    y: 30,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    ease: "power2.out"
  });

  // Staggered fade-in of paragraph text from left
  gsap.from(".col-md-6 .fs-6.mb-3, .col-md-6 .fs-6.mb-4", {
    scrollTrigger: ".col-md-6 .fs-6.mb-3",
    x: -60,
    opacity: 0,
    duration: 1.1,
    stagger: 0.3,
    ease: "power2.out"
  });

  // Slide in button with elastic pop
  gsap.from(".btn-outline-dark", {
    scrollTrigger: ".btn-outline-dark",
    y: 50,
    scale: 0.8,
    opacity: 0,
    duration: 1,
    ease: "elastic.out(1, 0.5)"
  });

  // Right image rotates slightly and fades in
  gsap.from(".rotate-once", {
    scrollTrigger: ".rotate-once",
    opacity: 0,
    rotate: 15,
    scale: 0.9,
    duration: 1.5,
    ease: "power2.out"
  });

  // Animate modal iframe when modal is shown
  const modal = document.getElementById('previewModal');
  modal.addEventListener('shown.bs.modal', () => {
    gsap.from("#previewModal iframe", {
      scale: 0.7,
      opacity: 0,
      duration: 0.9,
      ease: "power4.out"
    });
  });

  // Footer fade-up on scroll
  gsap.from("footer", {
    scrollTrigger: {
      trigger: "footer",
      start: "top 90%"
    },
    y: 100,
    opacity: 0,
    duration: 1.2,
    ease: "power2.out"
  });

  // Bounce back-to-top button on hover
  const backToTop = document.getElementById("backToTop");
  if (backToTop) {
    backToTop.addEventListener("mouseenter", () => {
      gsap.to(backToTop, {
        y: -5,
        duration: 0.2,
        repeat: 1,
        yoyo: true
      });
    });
  }
</script>




</body>

</html>