<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SUMAN TULSANI CHS LTD.</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

  <style>
    body {
      background-color: #f0efe9;
      font-family: 'Georgia', serif;
    }
  </style>
  <link rel="icon" href="./assets/images/logo2.png" type="image/png">

  <!-- Include this inside <head> or before </body> -->
  <style>
    #loader {
      display: none;
      text-align: center;
      margin-top: 15px;
    }

    #thankyou-msg {
      display: none;
      color: green;
      font-weight: bold;
      margin-top: 15px;
      text-align: center;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const form = document.querySelector("form");
      const loader = document.getElementById("loader");
      const thankyou = document.getElementById("thankyou-msg");

      form.addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent default form submission

        // Show loader and hide thank-you message
        loader.style.display = "block";
        thankyou.style.display = "none";

        const formData = new FormData(form);

        // Send data to PHP backend
        fetch("PhpFiles/handle_contact_us.php", {
            method: "POST",
            body: formData,
          })
          .then((res) => res.text())
          .then((response) => {
            loader.style.display = "none"; // Hide loader

            if (response.trim() === "success") {
              thankyou.style.display = "block"; // Show thank-you message
              form.reset(); // Reset form after success
            } else {
              alert("Error: " + response); // Show error message from PHP
            }
          })
          .catch((err) => {
            loader.style.display = "none";
            alert("Something went wrong. Please try again.");
          });
      });
    });
  </script>



</head>

<body id="top" style="background-color: #f9f8f3;">

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
          <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="./pmc.php">PMC</a></li>
          <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notice & Minutes</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li> -->
          <li class="nav-item"><a class="nav-link" href="./visual_updates.php">Visual Updates</a></li>
          <li class="nav-item"><a class="nav-link" href="./contact_us.php">Feedback & Queries</a></li>


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
            <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
            <li class="nav-item"><a class="nav-link" href="./pmc.php">PMC</a></li>
            <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notice & Minutes</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li> -->
            <li class="nav-item"><a class="nav-link" href="./visual_updates.php">Visual Updates</a></li>
            <li class="nav-item"><a class="nav-link" href="./contact_us.php">Feedback & Queries</a></li>
            <li class="nav-item"><a class="nav-link" href="PhpFiles/handle_logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>

    </div>
  </nav>

  <div class="container py-5">
    <div class="row align-items-stretch">
      <!-- FAQ Section -->
      <div class="col-lg-7" id="faqBlock">
        <h1 class="display-1 " style="font-family: Georgia, serif;">FAQ</h1>
        <h5 class="mb-4" style="font-family: Georgia, serif;">FREQUENTLY ASKED QUESTIONS</h5>


        <div class="accordion" id="faqAccordion">
          <!-- Question 1 -->
          <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed bg-light fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                What are the rights of individual members during the redevelopment of a housing society?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Individual members have the right to be informed, to participate in decisions, and to receive fair compensation or alternative accommodations as per the redevelopment agreement.
              </div>
            </div>
          </div>

          <!-- Question 2 -->
          <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed bg-light fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                How is the selection of a developer done for society redevelopment?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                The selection is done via a transparent process including tender invitation, evaluation, and finalization with member approval.
              </div>
            </div>
          </div>

          <!-- Question 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button bg-light fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true">
                What is the role of the appointed Project Management Consultant (PMC) in redevelopment?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                The PMC helps the society assess developer proposals, prepare feasibility reports, manage timelines, ensure legal compliance, and coordinate between the developer and members.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Images -->
      <div class="col-lg-5 d-flex flex-column flex-lg-row gap-3 mt-4 mt-lg-0" id="faqImages">
        <div class="w-50">
          <img src="./assets/images/room-1.jpg" class="w-100 h-100 rounded" style="object-fit: cover;" alt="Image 1">
        </div>
        <div class="w-50">
          <img src="./assets/images/room-2.jpg" class="w-100 h-100 rounded" style="object-fit: cover;" alt="Image 2">
        </div>
      </div>


    </div>
  </div>

  <!-- CONTACT SECTION -->
  <section class="py-5">
    <div class="container-fluid px-4">
      <div class="row">


        <!-- Contact Form and Info Block -->
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <div class="text-center mb-4">
            <h1 id="contactHeading" class="fs-4" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">
              Have an idea, question, or compliment? Let’s hear it!
            </h1>
          </div>

          <div id="contactBlock" class="row g-0 shadow overflow-hidden rounded-5 mx-auto" style="max-width: 700px;">
            <!-- Loader -->
            <div id="loader" style="display:none;" class="text-center mt-3">
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Sending...</span>
              </div>
              <p class="mt-2">Sending your message...</p>
            </div>
            <!-- Thank You Message -->
            <div id="thankyou-msg" style="display:none;" class="text-success text-center mt-3 fw-bold">
              Thank you! Your message has been sent to the society’s registered email.<br>
              We'll be in touch very soon!
            </div>
            <!-- Info -->
            <div class="col-md-6 bg-body-secondary p-4">
              <h5 class="fw-bold text-center text-md-start text-decoration-underline mb-4">GET IN TOUCH</h5>
              <div class="mb-4 d-flex align-items-start">
                <i class="bi bi-envelope-fill fs-5 me-3"></i>
                <div>
                  <div class="fw-bold">EMAIL ID</div>
                  <div class="text-muted" style="font-size: 14px;">sumantulsianichsltd1986@gmail.com </div>
                </div>
              </div>
              <div class="mb-4 d-flex align-items-start">
                <i class="bi bi-geo-alt-fill fs-5 me-3"></i>
                <div>
                  <div class="fw-bold">ADDRESS</div>
                  <div class="text-muted"> SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
                   Suman Tower, 3rd Cross Rd, Lokhandwala Complex,<br>
                    Andheri West, Mumbai, Maharashtra 400053
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-start">
                <i class="bi bi-telephone-fill fs-5 me-3"></i>
                <div>
                  <div class="fw-bold">PHONE NO.</div>
                  <div class="text-muted">+91 xxxx xxxxx</div>
                </div>
              </div>
            </div>

            <!-- Form -->
            <div class="col-md-6 bg-white p-4">
              <h5 class="fw-bold text-center text-md-start text-decoration-underline mb-4">REACH OUT TO US</h5>
              <form method="POST" action="./PhpFiles/handle_contact_us.php">
                <!-- Flat No -->
                <div class="mb-3 position-relative">
                  <i class="bi bi-person-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                  <input type="text" name="flat_no" class="form-control ps-5 border-10 rounded-pill" placeholder="Please Enter Flat No.">
                </div>

                <!-- Email ID -->
                <div class="mb-3 position-relative">
                  <i class="bi bi-envelope-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                  <input type="email" name="email" class="form-control ps-5 border-10 rounded-pill" placeholder="Please Enter Email ID">
                </div>

                <!-- Message -->
                <div class="mb-3 position-relative">
                  <i class="bi bi-chat-left-text-fill position-absolute top-0 start-0 mt-3 ms-3 text-muted"></i>
                  <textarea name="message" class="form-control ps-5 pt-4 border-10 rounded-4" rows="3" placeholder="Please Enter Message"></textarea>
                </div>

                <!-- Submit -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-dark rounded-pill">Send Message</button>
                </div>
              </form>
            </div>



            <!-- Thank You Message -->
            <!-- Popup Thank You Message -->
            <div id="thankyou-popup" style="
              display: none;
              position: fixed;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              background-color: #f0fff0;
              border: 2px solid #28a745;
              padding: 20px 30px;
              border-radius: 10px;
              font-weight: bold;
              color: #155724;
              z-index: 9999;
              box-shadow: 0 4px 15px rgba(0,0,0,0.2);
              text-align: center;
              ">
              ✅ Thank you! Your message has been sent to the society’s registered email.<br>
              We'll be in touch very soon!
            </div>

          </div>
        </div>


        <!-- Map starts just below navbar -->

        <div class="col-lg-6 mb-4 mb-lg-0">
          <div id="mapSection" class="w-100 h-100 rounded-4 shadow" style="min-height: 620px;">
            <iframe id="mapIframe"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.158382635824!2d72.82282507497918!3d19.1445431820742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b615c973dee3%3A0xd6a09bdbcc3c3704!2sSuman%20Tower!5e0!3m2!1sen!2sin!4v1752004438043!5m2!1sen!2sin"
              width="100%" height="100%" style="border:0; border-radius: 1rem;" allowfullscreen="" loading="lazy">
            </iframe>

          </div>
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
            <img src="./assets/images/logo2.png" alt="Logo"
              style="height: 100%; object-fit: contain; max-width: 100%;">
          </div>
          <!-- Address -->
          <p class="text-muted small mb-0">
            SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
           Suman Tower, 3rd Cross Rd, Lokhandwala Complex,<br>
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
              Suman Tower, 3rd Cross Rd, Lokhandwala Complex,<br>
              Andheri West, Mumbai, Maharashtra 400053</li>
            <li class="mb-2">- sumantulsianichsltd1986@gmail.com</li>
            <li>- +91 xxxxxxxx</li>
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