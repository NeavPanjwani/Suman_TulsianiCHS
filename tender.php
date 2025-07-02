<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SUMAN TULSIANI CHS LTD.</title>

    <!-- style custome links  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="../pictures/logo-2.png" type="image/png">

    <style>
        body {
            background-color: #f0efe9;
            font-family: 'Georgia', serif;
        }
    </style>


</head>

<body style="background-color: #f9f8f3;">
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
                    <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notices & Minutes</a></li>
                    <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li>
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
                        <li class="nav-item"><a class="nav-link" href="#">Notice & Minutes</a></li>
                        <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li>
                        <li class="nav-item"><a class="nav-link" href="./visual_updates.php">Visual Updates</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Feedback & Queries</a></li>
                        <li class="nav-item"><a class="nav-link" href="./login.php">Log Out</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <!-- Main content -->
    <section class="container-fluid py-5" style="background-color: #f9f8f3;">
        <div class="row justify-content-center align-items-start px-4 px-lg-5">

            <!-- LEFT: Steps -->
            <div class="col-lg-4 mt-4">
                <ul class="list-unstyled">
                    <li class="border-top border-dark py-3 d-flex align-items-center fw-semibold fs-5">
                        <i class="bi bi-caret-right-fill me-3 fs-6"></i> TENDER DRAFT
                    </li>
                    <li class="border-top border-dark py-3 d-flex align-items-center fw-semibold fs-5">
                        <i class="bi bi-caret-right-fill me-3 fs-6"></i> DEVELOPER PROPOSAL
                    </li>
                    <li class="border-top border-dark py-3 d-flex align-items-center fw-semibold fs-5">
                        <i class="bi bi-caret-right-fill me-3 fs-6"></i> COMPARATIVE ANALYSIS
                    </li>
                    <li class="border-top border-bottom border-dark py-3 d-flex align-items-center fw-semibold fs-5">
                        <i class="bi bi-caret-right-fill me-3 fs-6"></i> DEVELOPER’S FINAL PROPOSAL
                    </li>
                </ul>
            </div>

            <!-- CENTER: Paragraph -->
            <div class="col-lg-4 mt-4 d-flex align-items-start justify-content-center">
                <p class="fs-6 text-center text-lg-start lh-lg" style="max-width: 300px;">
                    Inviting proposals as per the defined scope. Bids will be reviewed on merit and compliance. The client may accept or reject any bid. Decision will be final.
                </p>
            </div>

            <!-- RIGHT: Image -->
            <div class="col-lg-4 mt-4">
                <img src="..." alt="Interior" class="img-fluid rounded-4 w-100" style="height: 500px; object-fit: cover;">
            </div>

            <!-- Bottom Title -->
            <div class="col-12 px-4 px-lg-5 mt-5">
                <h1 class="display-1" style="font-family: 'Prata', serif; font-weight: 400; line-height: 0.9;">TENDER<br>DOCUMENTS</h1>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="./script.js"></script>

    <script>
  document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    // Animate the main title
    gsap.from("h1.display-1", {
      y: -100,
      opacity: 0,
      duration: 1.2,
      ease: "power4.out"
    });

    // Animate each tender step
    gsap.from(".list-unstyled li", {
      scrollTrigger: ".list-unstyled li",
      opacity: 0,
      x: -50,
      stagger: 0.2,
      duration: 1,
      ease: "power2.out"
    });

    // Animate middle paragraph
    gsap.from("p.fs-5", {
      scrollTrigger: "p.fs-5",
      y: 50,
      opacity: 0,
      duration: 1.2,
      ease: "power2.out"
    });

    // Animate image from right
    gsap.from(".col-lg-4 img", {
      scrollTrigger: ".col-lg-4 img",
      x: 100,
      opacity: 0,
      duration: 1.2,
      ease: "power3.out"
    });

    // Footer animation
    gsap.from("footer", {
      scrollTrigger: {
        trigger: "footer",
        start: "top bottom"
      },
      y: 100,
      opacity: 0,
      duration: 1,
      ease: "power2.out"
    });

    // Logo hover effect
    const logo = document.querySelector(".nav_logo img");
    if (logo) {
      logo.addEventListener("mouseenter", () => {
        gsap.to(logo, { rotate: 15, duration: 0.3 });
      });
      logo.addEventListener("mouseleave", () => {
        gsap.to(logo, { rotate: 0, duration: 0.3 });
      });
    }

    // Animate navbar on load
    gsap.from(".navbar", {
      y: -60,
      opacity: 0,
      duration: 1,
      ease: "power2.out"
    });
  });
</script>


</body>

</html>