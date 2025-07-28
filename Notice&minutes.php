<!DOCTYPE html>
<html lang="en">
<?php require 'PhpFiles/session_protect.php'; ?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notices & Minutes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="../Suman_TulsianiCHS/assets/images/logo2.png" type="image/png">

  <style>
    body {
      background-color: #f0efe9;
      font-family: 'Georgia', serif;
    }

    .month-item {
      cursor: pointer;
      padding: 6px 10px;
      border-bottom: 1px solid #ddd;
      transition: background 0.2s;
    }

    .month-item:hover {
      background-color: #f0f0f0;
    }

    .year-item {
      cursor: pointer;
    }

    .card-img-top {
      height: 180px;
      width: 100%;
      object-fit: cover;
      border-radius: 8px 8px 0 0;
    }

    .card {
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border: none;
    }
  </style>
</head>

<body style="background-color: #f9f8f3; font-family: 'Georgia', serif;">

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


  <div class="container py-5">
    <!-- Default View -->
    <div id="defaultView" class="row">
      <div class="col-md-4 order-md-1">
        <h1 class="display-5 mb-3" style="font-size: 28px; margin-top: 18px; text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">
          NOTICES & MINUTES
        </h1>

        <div class="fw-bold mb-2" style="margin-top: 15%; font-size: 29px;">Year</div>
        <div id="yearList">
          <div class="py-2 border-bottom nav-link" style="cursor: pointer;" onclick="showYear(2025)">&#9658; 2025</div>
          <div class="py-2 border-bottom nav-link" style="cursor: pointer;" onclick="showYear(2024)">&#9658; 2024</div>
          <div class="py-2 border-bottom nav-link" style="cursor: pointer;" onclick="showYear(2023)">&#9658; 2023</div>
          <div class="py-2 border-bottom nav-link" style="cursor: pointer;" onclick="showYear(2022)">&#9658; 2022</div>
        </div>
      </div>
      <div class="col-md-8 order-md-2">
        <p class="mb-4" style="text-align: justify;">Notices and minutes are essential components of society meetings. A
          notice informs members in advance about upcoming meetings,
          including the date, time, venue, and agenda. Minutes are the official
          record of what was discussed and decided during the meeting, including
          attendance, key points, and action items.</p>

        <div class="row g-3 align-items-stretch">
                    <!-- Left Column -->
                    <div class="col-md-5">
                        <div class="d-flex flex-column justify-content-between h-100" style="height: 350px;">
                            <!-- Top Image -->
                            <div class="mb-2" style="flex: 1;">
                                <img src="./assets/images/room 4 (1).jpg" class="img-fluid rounded" style="height: 80%; width: 100%; object-fit: cover;" alt="" />
                                <p class="text-center fw-semibold mt-2 mb-0">APPOINTMENT OF PMC</p>
                            </div>
                            <!-- Bottom Image -->
                            <div style="flex: 1;">
                                <img src="./assets/images/room 5.jpg" class="img-fluid rounded" style="height: 85%; width: 100%; object-fit: cover;" alt="" />
                                <p class="text-center fw-semibold mt-2 mb-0">CONSENT FOR REDEVELOPMENT</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-7">
                        <div style="height: 500px;">
                            <img src="./assets/images/room-1.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="" />
                            <p class="text-center fw-semibold mt-2 mb-0">REVISED DRAFT WITH LAWYER INPUTS</p>
                        </div>
                    </div>
                </div>


      </div>
    </div>

    <!-- Year View (Initially Hidden) -->
    <div id="yearView" class="d-none">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-5 mb-0 text-center" style="font-size: 50px;">NOTICES & MINUTES</h1>
        <div class="input-group" style="max-width: 300px;">
          <input type="text" class="form-control" placeholder="Search..." id="searchInput" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="fw-bold mb-3">Year</div>
          <div class="border-top border-bottom py-2 year-item nav-link" onclick="showMonths('2025')">&#9658; <span class="fw-bold">2025</span></div>
          <div class="border-bottom py-2 year-item nav-link" onclick="showMonths('2024')">&#9658; <span class="fw-bold">2024</span></div>
          <div class="border-bottom py-2 year-item nav-link" onclick="showMonths('2023')">&#9658; <span class="fw-bold">2023</span></div>
          <div class="border-bottom py-2 year-item nav-link" onclick="showMonths('2022')">&#9658; <span class="fw-bold">2022</span></div>
        </div>

        <div class="col-md-9">
          <div class="row">
            <div class="col-md-4" id="monthColumn" style="display: none;">
              <div class="fw-bold mb-3">Month</div>
              <div>
                <div class="month-item nav-link" onclick="loadMonthData('January')">January</div>
                <div class="month-item nav-link" onclick="loadMonthData('February')">February</div>
                <div class="month-item nav-link" onclick="loadMonthData('March')">March</div>
                <div class="month-item nav-link" onclick="loadMonthData('April')">April</div>
                <div class="month-item nav-link" onclick="loadMonthData('May')">May</div>
                <div class="month-item nav-link" onclick="loadMonthData('June')">June</div>
                <div class="month-item nav-link" onclick="loadMonthData('July')">July</div>
                <div class="month-item nav-link" onclick="loadMonthData('August')">August</div>
                <div class="month-item nav-link" onclick="loadMonthData('September')">September</div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="row g-4" id="cardsContainer">
                <div class="text-muted text-center">Select a year to show months.</div>
              </div>
            </div>
          </div>
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

  <!-- script -->
  <script src="./script.js"></script>

  <!-- Bootstrap & GSAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <!-- Core Logic -->
  <script>
    function showYear(year) {
      gsap.to("#defaultView", {
        duration: 0.5,
        opacity: 0,
        onComplete: () => {
          document.getElementById("defaultView").classList.add("d-none");
          const yearView = document.getElementById("yearView");
          yearView.classList.remove("d-none");
          gsap.from(yearView, {
            duration: 0.5,
            opacity: 0
          });
          showMonths(year);
        }
      });
    }

    function showMonths(year) {
      const monthColumn = document.getElementById('monthColumn');
      const cardsContainer = document.getElementById('cardsContainer');

      monthColumn.style.display = 'block';
      cardsContainer.innerHTML = `<div class="text-muted text-center">Select a month from <strong>${year}</strong> to view documents.</div>`;

      gsap.fromTo(monthColumn, {
        opacity: 0,
        x: -20
      }, {
        opacity: 1,
        x: 0,
        duration: 0.5
      });
      gsap.fromTo(cardsContainer, {
        opacity: 0,
        y: 20
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5
      });
    }

    function loadMonthData(month) {
      const cardsContainer = document.getElementById('cardsContainer');
      cardsContainer.innerHTML = `
                <div class="col-md-12">
                    <div class="p-4 shadow-sm border rounded">
                        <h5>${month} - Notice Title</h5>
                        <img src="../Suman_TulsianiCHS/assets/images/room.jpg" alt="${month}" class="img-fluid mb-3"/>
                        <p>This is a sample notice content for <strong>${month}</strong>. You can update this with actual data.</p>
                    </div>
                </div>
            `;

      gsap.fromTo('#cardsContainer .col-md-12', {
        opacity: 0,
        y: 30
      }, {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: "back.out(1.7)"
      });
    }

    // GSAP animations for page load

    gsap.from("div.fw-bold.mb-2", {
      opacity: 0,
      y: 30,
      duration: 1.2,
      delay: 0.5,
      ease: "power2.out"
    });

    gsap.from(".text-center.fw-semibold.mt-2.mb-0", {
      opacity: 0,
      y: 30,
      duration: 1.2,
      delay: 0.6,
      stagger: 0.2,
      ease: "power2.out"
    });

    window.addEventListener("DOMContentLoaded", () => {
      gsap.from(".navbar-nav .nav-item", {
        y: -30,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: "power2.out"
      });

      gsap.from("h1.display-5 ", {
        x: -50,
        opacity: 0,
        duration: 1.4,
        delay: 0.5
      });

      gsap.from("p.mb-4", {
        y: 30,
        opacity: 0,
        duration: 1.2,
        delay: 0.8
      });

      gsap.from("#yearList .nav-link", {
        x: -20,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        delay: 0.9
      });

      gsap.from(".row.g-3 img", {
        scale: 0.8,
        opacity: 0,
        duration: 1.2,
        stagger: 0.3,
        delay: 1.2,
        ease: "back.out(1.7)"
      });

      // Scroll Trigger for Footer
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
    });

    // GSAP animations for month view
    function showMonths(year) {
      const monthColumn = document.getElementById('monthColumn');
      const cardsContainer = document.getElementById('cardsContainer');

      monthColumn.style.display = 'block';
      cardsContainer.innerHTML = `<div class="text-muted text-center">Select a month from <strong>${year}</strong> to view documents.</div>`;

      gsap.fromTo(monthColumn, {
        opacity: 0,
        x: -20
      }, {
        opacity: 1,
        x: 0,
        duration: 1
      });

      gsap.fromTo(cardsContainer, {
        opacity: 0,
        y: 20
      }, {
        opacity: 1,
        y: 0,
        duration: 1.2
      });

      gsap.from("#monthColumn .month-item", {
        opacity: 0,
        x: -10,
        duration: 1,
        stagger: 0.2,
        delay: 0.5
      });
    }

    // GSAP animations for year view switch
    function showYear(year) {
      gsap.to("#defaultView", {
        duration: 1,
        opacity: 0,
        onComplete: () => {
          document.getElementById("defaultView").classList.add("d-none");
          const yearView = document.getElementById("yearView");
          yearView.classList.remove("d-none");
          gsap.from(yearView, {
            duration: 1,
            opacity: 0
          });

          gsap.from("#yearView .year-item", {
            opacity: 0,
            x: -20,
            duration: 1.2,
            stagger: 0.2,
            delay: 0.4
          });

          showMonths(year);
        }
      });
    }

    // Animate Footer
    gsap.from("footer .row", {
      scrollTrigger: "footer",
      y: 80,
      opacity: 0,
      duration: 1.2,
      ease: "power2.out"
    });
  </script>
</body>

</html>