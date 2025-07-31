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
  <link rel="icon" href="../Suman_TulsianiCHS/assets/images/logo2.png" type="image/png">

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
 <footer id="footerSection" class="bg-light border-top border-muted">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5 text-center d-flex flex-column align-items-center justify-content-center">
          <!-- Logo -->
          <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 80px; width: 100%;">
            <img src="../Suman_TulsianiCHS/assets/images/logo2.png" alt="Logo"
              style="height: 100%; object-fit: contain; max-width: 100%;">
          </div>
          <!-- Address -->
          <p class="text-muted small mb-0">
            SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
            NEAR RUSTOMJEE URBANIA, VRINDAVAN AREA,<br>
            MAJIWADA, THANE WEST, MAHARASHTRA, INDIA
          </p>
        </div>

        <!-- Vertical Line -->
        <div class="col-md-1 d-none d-md-flex justify-content-center align-items-center">
          <div style="width: 0.5px; height: 100%; background-color: #999;"></div>
        </div>


        <!-- Contacts -->
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h5 class="mb-3">Contacts</h5>
          <ul class="list-unstyled small text-muted">
            <li class="mb-2">- SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
              NEAR RUSTOMJEE URBANIA, VRINDAVAN AREA,<br>
              MAJIWADA, THANE WEST, MAHARASHTRA, INDIA</li>
            <li class="mb-2">- SUMAN TULSANI.in</li>
            <li>- +1 (123) 456-7890</li>
          </ul>
        </div>
      </div>

      <!-- Thin Horizontal Line -->
      <div class="mt-4 mb-3">
        <div style="height: 1px; background-color: #999;"></div> <!-- thinner and lighter -->
      </div>

      <!-- Footer Credits Centered on Single Line -->
      <div class="text-center text-muted small">
        <p class="mb-0 d-inline">© 2025 Suman Tulsiani APARTMENTS CHS LTD</p>
        <span class="mx-2">|</span>
        <p class="mb-0 d-inline">
          DEVELOPED BY
          <a href="https://www.theveenagroup.com/"
            class="text-primary text-decoration-none slide-underline"
            style="text-decoration: none;">
            <span class="text-primary">Veena Infotech</span>
          </a>
        </p>
      </div>

      <!-- Back to Top Button -->
      <div style="position: fixed; bottom: 20px; right: 20px;">
        <a href="#top" id="backToTop"
          class="btn btn-warning btn-sm rounded-pill px-3 bg-yellow-400 text-black shadow-lg hover:bg-yellow-300 transition-all duration-300 ease-in-out z-50 text-xl"
          aria-label="Back to Top">↑</a>
      </div>
    </div>
  </footer>


  <!-- script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="./script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script>
    gsap.registerPlugin(ScrollTrigger);

    // Animate heading
    gsap.from("h1.display-3", {
      y: 50,
      opacity: 0,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "h1.display-3",
        start: "top 90%",
      }
    });

    gsap.from(".navbar-nav .nav-item", {
      y: -30,
      opacity: 0,
      duration: 1.2,
      stagger: 0.2,
      ease: "power2.out"
    });


    // Animate paragraphs below heading
    gsap.from(".col-12.col-md-8 p", {
      opacity: 0,
      x: 40,
      duration: 1,
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".col-12.col-md-8",
        start: "top 95%",
      }
    });

    // Animate image cards
    gsap.utils.toArray(".row.text-center .col-md-4").forEach((col, i) => {
      gsap.from(col, {
        opacity: 0,
        y: 40,
        duration: 0.8,
        delay: i * 0.1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: col,
          start: "top 95%",
        }
      });
    });

    // Animate footer
    gsap.from("footer", {
      opacity: 0,
      y: 80,
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: "footer",
        start: "top 90%",
      }
    });

    // Back to top animation toggle
    const backToTop = document.getElementById("backToTop");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        gsap.to(backToTop, {
          autoAlpha: 1,
          duration: 0.4
        });
      } else {
        gsap.to(backToTop, {
          autoAlpha: 0,
          duration: 0.4
        });
      }
    });
  </script>


</body>

</html>