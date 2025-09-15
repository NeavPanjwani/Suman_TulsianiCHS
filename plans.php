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
          <!--<li class="nav-item"><a class="nav-link" href="./deemedconveyance.php">Latest Updates</a></li>-->
          <li class="nav-item"><a class="nav-link" href="./deemedconveyance.php">Deemed Conveyance</a></li>
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
          <!--<li class="nav-item"><a class="nav-link" href="./deemedconveyance.php">Latest Updates</a></li>-->
          <li class="nav-item"><a class="nav-link" href="./deemedconveyance.php">Deemed Conveyance</a></li>
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

    <!-- SECTION -->
    <section class="py-5 " style="background-color: #ffffff;">
        <div class="container-fluid px-4">
            <div class="row align-items-center">

                <!-- LEFT SIDE -->
                <div class="col-md-6 pt-4 pt-md-0" id="pmcLeft">
                    <div class="fs-6 ms-5 ps-3 mb-4">
                        <h1 class="display-3 fw-light mb-2">Layout Plan</h1>
                        <p class="text-muted fst-italic">– Architecture Plan & Layout</p>
                    </div>
                    <div class="ms-5">
                        <p class="fs-6 mb-3">
                            The Plans and Layouts related to the redevelopment project will be uploaded on this page shortly for members to view and provide their inputs. Currently, this page does not display any documents. In the meantime, members are requested to check the other sections of the website for notices, minutes, and redevelopment-related updates. Thank you for your patience and cooperation.
                        </p>
                        <!--<p class="fs-6 mb-4">
                            Their expertise encompasses land broking and other related services tailored to the real estate<br>
                            sector. NKPC is actively involved in the development and management of various <br>
                            real estate projects, offering professional guidance and support throughout the project lifecycle.
                        </p>-->
                    </div>

                    <!--<div class="text-center">
                        <button type="button" class="btn btn-outline-dark rounded-pill px-4 py-2 text-center" data-bs-toggle="modal" data-bs-target="#previewModal">
                            FULL PREVIEW
                        </button>
                    </div>-->
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-md-6 text-center mt-5 mt-md-0" id="pmcRight">
                    <img src="./assets/images/plans.jpg" alt="" class="img-fluid rotate-once" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <!--<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered animate-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Full Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="overflow:auto; max-height:70vh;">
                    <div id="pmc-pdf-container"></div>
                </div>
            </div>
        </div>
    </div>-->



    <!-- FOOTER -->
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


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script src="./script.js"></script>
    <script>
        window.addEventListener("load", () => {
            // FAQ Title and Subheading
            gsap.from("#faqBlock h1", {
                x: -60,
                opacity: 0,
                duration: 1,
                ease: "power2.out"
            });

            gsap.from("#faqBlock h5", {
                y: 20,
                opacity: 0,
                duration: 1,
                delay: 0.2,
                ease: "power2.out"
            });

            gsap.from(".navbar-nav .nav-item", {
                y: -30,
                opacity: 0,
                duration: 1.2,
                stagger: 0.2,
                ease: "power2.out"
            });


            // Accordion Items
            gsap.from("#faqAccordion .accordion-item", {
                y: 30,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                delay: 0.4,
                ease: "power2.out"
            });

            // FAQ Images
            gsap.from("#faqImages img", {
                scale: 0.95,
                y: 40,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                delay: 0.6,
                ease: "power2.out"
            });

            // Contact Heading
            gsap.from("#contactHeading", {
                y: 40,
                opacity: 0,
                duration: 1,
                delay: 0.3,
                ease: "power2.out"
            });

            // Contact Info Block (Left)
            gsap.from("#contactBlock .col-md-6.bg-body-secondary", {
                x: -50,
                opacity: 0,
                duration: 1,
                delay: 0.5,
                ease: "power2.out"
            });

            // Contact Form Block (Right)
            gsap.from("#contactBlock .col-md-6.bg-white", {
                x: 50,
                opacity: 0,
                duration: 1,
                delay: 0.7,
                ease: "power2.out"
            });

            // Map Animation
            gsap.from("#mapSection", {
                scale: 0.95,
                opacity: 0,
                duration: 1,
                delay: 1,
                ease: "power2.out"
            });
        });
    </script>






</body>

</html>