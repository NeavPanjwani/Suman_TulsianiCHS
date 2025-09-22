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

    <!-- LATEST UPDATE SECTION -->
    <section class="py-5" style="background-color: #ffffff;">
        <div class="container-fluid px-5">
            <!-- Intro row (full width) -->
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 text-start">
                    <div class="logo-wrapper mb-4">
                        <h1 class="display-5 mb-3" style="font-weight: 400; letter-spacing: 2.5px; margin-left: 0;">Deemed Conveyance</h1>
                        <h5><i>Deemed Conveyance secures our society’s future — giving members complete ownership and authority</i></h5>
                    </div>
                    <p class="mb-4 fs-5 text-muted">
                        Our society is committed to transparency and progress. Below are some important documents and references related to our society’s Deemed Conveyance process.
                    </p>
                </div>
            </div>

            <!-- Documents row (three equal columns) -->
            <div class="row gy-4 justify-content-center">
                <!-- DDR order 1 -->
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                    <div class="card shadow-sm border-0 w-100" style="max-width: 420px; margin: 0 auto;">
                        <img src="assets/Documents/DDR order 1.png" alt="Document 1" class="card-img-top" style="height: 180px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h3 class="fs-5 fw-semibold mb-2">DDR order 1</h3>
                            <h5 class="mb-3">30th June, 2024</h5>
                            <button type="button" class="btn btn-primary mt-auto" style="background-color: #4169e1; border: none;"
                                data-bs-toggle="modal" data-bs-target="#DDR1">
                                Open Document
                            </button>
                        </div>
                    </div>

                    <!-- Modal DDR1 -->
                    <div class="modal fade" id="DDR1" tabindex="-1" aria-labelledby="DDR1Label" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="DDR1Label">DDR order 1</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="overflow:auto; max-height:70vh;">
                                    <div id="DocDDR1" style="width:100%; min-height:60vh; display:flex; align-items:center; justify-content:center;">
                                        <span class="text-muted">Loading document...</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DDR order 2 -->
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                    <div class="card shadow-sm border-0 w-100" style="max-width: 420px; margin: 0 auto;">
                        <img src="assets/Documents/DDR order 2.png" alt="DDR 2" class="card-img-top" style="height: 180px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h3 class="fs-5 fw-semibold mb-2">DDR order 2</h3>
                            <h5 class="mb-3">21st Oct, 2024</h5>
                            <button type="button" class="btn btn-primary mt-auto" style="background-color: #4169e1; border: none;"
                                data-bs-toggle="modal" data-bs-target="#DDR2">
                                Open Document
                            </button>
                        </div>
                    </div>

                    <!-- Modal DDR2 -->
                    <div class="modal fade" id="DDR2" tabindex="-1" aria-labelledby="DDR2Label" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="DDR2Label">DDR order 2</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="overflow:auto; max-height:70vh;">
                                    <div id="DocDDR2" style="width:100%; min-height:60vh; display:flex; align-items:center; justify-content:center;">
                                        <span class="text-muted">Loading document...</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Registration Order -->
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                    <div class="card shadow-sm border-0 w-100" style="max-width: 420px; margin: 0 auto;">
                        <img src="assets/Documents/Suman Tulsiani _Registration Order.png" alt="Registration Order" class="card-img-top" style="height: 180px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h3 class="fs-5 fw-semibold mb-2">Registration Order</h3>
                            <h5 class="mb-3">15th Sept, 2025</h5>
                            <button type="button" class="btn btn-primary mt-auto" style="background-color: #4169e1; border: none;"
                                data-bs-toggle="modal" data-bs-target="#RegistrationOrder">
                                Open Document
                            </button>
                        </div>
                    </div>

                    <!-- Modal RegistrationOrder -->
                    <div class="modal fade" id="RegistrationOrder" tabindex="-1" aria-labelledby="RegistrationOrderLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="RegistrationOrderLabel">Registration Order</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="overflow:auto; max-height:70vh;">
                                    <div id="DocRegistrationOrder" style="width:100%; min-height:60vh; display:flex; align-items:center; justify-content:center;">
                                        <span class="text-muted">Loading document...</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row (documents) -->
        </div> <!-- /.container -->
    </section>

    <!-- Single shared script for rendering PDFs -->
    <script>
        function renderPDF(pdfUrl, containerId) {
            const container = document.getElementById(containerId);
            container.innerHTML = `<iframe src="${pdfUrl}#toolbar=0&navpanes=0&scrollbar=1" width="100%" height="600px" style="border:none;"></iframe>`;
        }

        // Hook up modals to render their PDFs when shown
        document.getElementById('DDR1').addEventListener('show.bs.modal', function() {
            renderPDF('assets/Documents/DDR order 1.pdf', 'DocDDR1');
        });
        document.getElementById('DDR1').addEventListener('hidden.bs.modal', function() {
            document.getElementById('DocDDR1').innerHTML = '<span class="text-muted">Loading document...</span>';
        });

        document.getElementById('DDR2').addEventListener('show.bs.modal', function() {
            renderPDF('assets/Documents/DDR order 2.pdf', 'DocDDR2');
        });
        document.getElementById('DDR2').addEventListener('hidden.bs.modal', function() {
            document.getElementById('DocDDR2').innerHTML = '<span class="text-muted">Loading document...</span>';
        });

        document.getElementById('RegistrationOrder').addEventListener('show.bs.modal', function() {
            renderPDF('assets/Documents/Suman Tulsiani _Registration Order.pdf', 'DocRegistrationOrder');
        });
        document.getElementById('RegistrationOrder').addEventListener('hidden.bs.modal', function() {
            document.getElementById('DocRegistrationOrder').innerHTML = '<span class="text-muted">Loading document...</span>';
        });
    </script>



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