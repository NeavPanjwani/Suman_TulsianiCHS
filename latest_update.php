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
  <link rel="icon" href="./assets/images/logo2.png" type="image/png">

  <style>
    body {
      background-color: #ffffff;
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
            <img src="./assets/images/logo2.png"
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
          <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notice & Minutes</a></li>
          <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="./DA.php">Draft D.A</a></li>
          <li class="nav-item"><a class="nav-link" href="./plans.php">PLANS</a></li>
          <li class="nav-item"><a class="nav-link" href="./pmc.php">PMC</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li> -->
          <li class="nav-item"><a class="nav-link" href="./contact_us.php">Contact Us</a></li>


          <li class="nav-item"><a class="nav-link" href="PhpFiles/handle_logout.php">Log Out</a></li>
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
            <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notice & Minutes</a></li>
          <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="./DA.php">Draft D.A</a></li>
          <li class="nav-item"><a class="nav-link" href="./plans.php">PLANS</a></li>
          <li class="nav-item"><a class="nav-link" href="./pmc.php">PMC</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li> -->
            <li class="nav-item"><a class="nav-link" href="./contact_us.php">Contact Us</a></li>

            <li class="nav-item"><a class="nav-link" href="PhpFiles/handle_logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>

    </div>
  </nav>

  <!-- LATEST UPDATE SECTION -->
  <section class="py-5" style="background-color: #ffffff;">
    <div class="container-fluid px-5">
      <div class="row align-items-center">
        <!-- LEFT: DOCUMENT CARD WITH OPEN BUTTON -->
        <div class="col-md-6 d-flex flex-column justify-content-center ps-md-5 mt-n5 mt-md-0" id="updateText">
          <div class="logo-wrapper text-start mb-4">
            <h1 class="display-5 mb-3" style="font-weight: 400; letter-spacing: 2.5px; margin-left: 0;">Latest Document</h1>
          </div>
          <p class="mb-4 fs-5 text-muted">
            Our society is committed to transparency and progress. The latest documents are shared here to keep all members informed about important developments and decisions. Stay updated with official communications and key milestones as we move forward together.
          </p>
        </div>
        <!-- RIGHT: HEADING AND DESCRIPTION -->
         <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
          <div class="card shadow-sm border-0 mb-4" style="max-width: 420px;">
            <img src="assets/images/doc8.png" alt="Document 2" class="card-img-top" style="height: 180px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
              <h3 class="fs-5 fw-semibold mb-3">Final Offer Letter from Mahindra Lifespaces Developers Limited</h3>
              <h5>16th July, 2025</h5>
              <button type="button" class="btn btn-warning text-white mt-auto" style="background-color: #4169e1; border: none;"
                data-bs-toggle="modal" data-bs-target="#doc8">
                Open Document
              </button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc8" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="rulesModalLabel">Final Offer Letter from Mahindra Lifespaces Developers Limited</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="overflow:auto; max-height:70vh;">
                  <div id="document8" style="width:100%; min-height:60vh; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Loading document...</span>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <script>
            function renderPDF(pdfUrl, containerId) {
              const container = document.getElementById(containerId);
              container.innerHTML = `<iframe src="${pdfUrl}#toolbar=0&navpanes=0&scrollbar=1" width="100%" height="600px" style="border:none;"></iframe>`;
            }
            document.getElementById('doc8').addEventListener('show.bs.modal', function() {
              renderPDF('assets/Documents/Final Offer Letter from Mahindra Lifespaces Developers Limited 16th july.pdf', 'document8');
            });
            document.getElementById('doc8').addEventListener('hidden.bs.modal', function() {
              document.getElementById('document8').innerHTML = '<span class="text-muted">Loading document...</span>';
            });
          </script>
        </div>
        <!--<div class="col-md-6 d-flex flex-column justify-content-center ps-md-5 mt-n5 mt-md-0" id="updateText">
          <div class="logo-wrapper text-start mb-4">
            <h1 class="display-5 mb-3" style="font-weight: 400; letter-spacing: 2.5px; margin-left: 0;">Latest Document</h1>
          </div>
          <p class="mb-4 fs-5 text-muted">
            Our society is committed to transparency and progress. The latest documents are shared here to keep all members informed about important developments and decisions. Stay updated with official communications and key milestones as we move forward together.
          </p>
        </div>-->
        <!-- Below Two Documents -->
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
          <div class="card shadow-sm border-0 mb-4" style="max-width: 420px;">
            <img src="assets/Documents/doc8.png" alt="Minutes for SGBM Dated 23.03.2025" class="w-100" style="height: 180px; object-fit: cover;">
            <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
              <h3 class="fs-5 fw-semibold mb-3">Minutes for SGBM Dated 23.03.2025</h3>
              <h5>25th March, 2025</h5>
              <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
                data-bs-toggle="modal" data-bs-target="#DocMinutesSGBM23.03.2025">
                Open Document
              </button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="DocMinutesSGBM23.03.2025" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="rulesModalLabel">Minutes for SGBM Dated 23rd March, 2025</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="overflow:auto; max-height:70vh;">
                  <div id="MinutesSGBM23.03.2025" style="width:100%; min-height:60vh; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Loading document...</span>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <script>
            function renderPDF(pdfUrl, containerId) {
              const container = document.getElementById(containerId);
              container.innerHTML = `<iframe src="${pdfUrl}#toolbar=0&navpanes=0&scrollbar=1" width="100%" height="600px" style="border:none;"></iframe>`;
            }
            document.getElementById('DocMinutesSGBM23.03.2025').addEventListener('show.bs.modal', function() {
              renderPDF('assets/Documents/Minutes for SGBM Dated 23.03.2025.pdf', 'MinutesSGBM23.03.2025');
            });
            document.getElementById('DocMinutesSGBM23.03.2025').addEventListener('hidden.bs.modal', function() {
              document.getElementById('MinutesSGBM23.03.2025').innerHTML = '<span class="text-muted">Loading document...</span>';
            });
          </script>
        </div>
        <!-- RIGHT: HEADING AND DESCRIPTION -->
        <div class="col-md-6 d-flex flex-column justify-content-center ps-md-5 mt-n5 mt-md-0" id="updateText">
          <div class="card shadow-sm border-0 mb-4" style="max-width: 420px;">
            <img src="assets/Documents/doc9.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
            <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
              <h3 class="fs-5 fw-semibold mb-3">Notice for SGBM Dated 23.03.2025</h3>
              <h5>7th March, 2025</h5>
              <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
                data-bs-toggle="modal" data-bs-target="#NoticeSGBM23rdMarch,2025">
                Open Document
              </button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="NoticeSGBM23rdMarch,2025" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="rulesModalLabel">Notice for SGBM Dated 23rd March, 2025</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="overflow:auto; max-height:70vh;">
                  <div id="DocNoticeSGBM23rdMarch,2025" style="width:100%; min-height:60vh; display:flex; align-items:center; justify-content:center;">
                    <span class="text-muted">Loading document...</span>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <script>
            function renderPDF(pdfUrl, containerId) {
              const container = document.getElementById(containerId);
              container.innerHTML = `<iframe src="${pdfUrl}#toolbar=0&navpanes=0&scrollbar=1" width="100%" height="600px" style="border:none;"></iframe>`;
            }
            document.getElementById('NoticeSGBM23rdMarch,2025').addEventListener('show.bs.modal', function() {
              renderPDF('assets/Documents/Notice for SGBM Dated 23.03.2025.pdf', 'DocNoticeSGBM23rdMarch,2025');
            });
            document.getElementById('NoticeSGBM23rdMarch,2025').addEventListener('hidden.bs.modal', function() {
              document.getElementById('DocNoticeSGBM23rdMarch,2025').innerHTML = '<span class="text-muted">Loading document...</span>';
            });
          </script>
        </div>
      </div>
    </div>
    </div>

    </div>
  </section>


  <footer id="footerSection" class="bg-light border-top border-muted">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5 text-center d-flex flex-column align-items-center justify-content-center">
          <!-- Logo -->
          <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 80px; width: 100%;">
            <img src="./assets/images/logo2.png" alt="Logo"
              style="height: 100%; object-fit: contain; max-width: 100%;">
          </div>
          <!-- Address -->
          <p class="text-muted small mb-0">
            SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
            Suman CHS, 3rd Cross Rd, Lokhandwala Complex,<br>
            Andheri West, Mumbai, Maharashtra 400053
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
              Suman CHS, 3rd Cross Rd, Lokhandwala Complex,<br>
              Andheri West, Mumbai, Maharashtra 400053</li>
            <li class="mb-2">- redevelopmentsumanchs@gmail.com</li>

          </ul>
        </div>
      </div>

      <!-- Thin Horizontal Line -->
      <div class="mt-4 mb-3">
        <div style="height: 1px; background-color: #999;"></div> <!-- thinner and lighter -->
      </div>

      <!-- Footer Credits Centered on Single Line -->
      <div class="text-center text-muted small">
        <p class="mb-0 d-inline">© 2025 Suman Tulsiani CHS LTD</p>
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

  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
  <script src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  <script>
    const images = [
      "./assets/images/vtry.jpeg",
      "./assets/images/room.jpg",
      "./assets/images/room2.jpg",

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