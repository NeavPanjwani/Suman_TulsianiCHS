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


  <!-- VISUAL UPDATES SECTION -->
  <section class="py-5">
    <div class="container">
      <!-- Heading Row -->
      <div class="row mb-5">
        <div class="col-12">
          <h1 class="display-3 fw-semibold text-center text-md-start" style="font-family: 'Playfair Display', serif;">
            VISUAL UPDATES
          </h1>
        </div>
        <div class="col-12 col-md-8 offset-md-4 text-md-start text-center mt-3">
          <p class="fs-5 mb-2">Design isn’t just how it looks — it’s how it feels.</p>
          <p class="fs-6 mb-2">We’ve reimagined our visual space to tell stories, inspire clarity, and connect effortlessly.</p>
          <p class="fs-6 mb-0">Welcome to a refined, refreshed and redefined experience.</p>
        </div>

      </div>


      <!-- Images Row -->
      <div class="row text-center g-4">
        <div class="col-md-4">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="SGBM FOR" class="img-fluid rounded-4 shadow-sm">
          <p class="fw-semibold mt-2 mb-0 small">SGBM FOR REDEVELOPMENT</p>
        </div>
        <div class="col-md-4">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="SGBM FOR TENDER" class="img-fluid rounded-4 shadow-sm">
          <p class="fw-semibold mt-2 mb-0 small">SGBM FOR TENDER PROCESS</p>
        </div>
        <div class="col-md-4">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="SGBM FOR PMC VISIBILITY (REPORT)" class="img-fluid rounded-4 shadow-sm">
          <p class="fw-semibold mt-2 mb-0 small">SGBM FOR PMC VISIBILITY (REPORT PRESENTATION)</p>
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






  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="./script.js"></script>
  <script>
    gsap.registerPlugin(ScrollTrigger);

    // Animate Main Heading
    gsap.from("h1.display-3", {
      scrollTrigger: {
        trigger: "h1.display-3",
        start: "top 80%",
      },
      y: 50,
      opacity: 0,
      duration: 1,
      ease: "power2.out"
    });

    // Animate Paragraph Texts
    gsap.from(".col-12.col-md-8 p", {
      scrollTrigger: {
        trigger: ".col-12.col-md-8",
        start: "top 85%",
      },
      x: 50,
      opacity: 0,
      duration: 1,
      stagger: 0.3,
      ease: "power2.out"
    });

    // Animate Each Image One by One
    gsap.utils.toArray(".row.text-center img").forEach((img, i) => {
      gsap.from(img, {
        scrollTrigger: {
          trigger: img,
          start: "top 90%",
        },
        scale: 0.8,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)",
        delay: i * 0.1
      });
    });

    // Animate Footer
    gsap.from("footer", {
      scrollTrigger: {
        trigger: "footer",
        start: "top 90%",
      },
      y: 60,
      opacity: 0,
      duration: 1.2,
      ease: "power2.out"
    });

    // Show/Hide Back to Top Button
    const backToTop = document.getElementById("backToTop");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        gsap.to(backToTop, {
          opacity: 1,
          duration: 0.3,
          display: "block"
        });
      } else {
        gsap.to(backToTop, {
          opacity: 0,
          duration: 0.3,
          display: "none"
        });
      }
    });

    // Smooth scroll to top
    backToTop.addEventListener("click", (e) => {
      e.preventDefault();
      gsap.to(window, {
        scrollTo: 0,
        duration: 1
      });
    });
  </script>


</body>

</html>