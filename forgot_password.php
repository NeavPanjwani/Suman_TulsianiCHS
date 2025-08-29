<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SUMAN TULSIANI CHS - Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background: #f0efe9;
        }
    </style>
    <link rel="icon" href="./assets/images/logo2.png" type="image/png">

</head>

<body>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container rounded-4 shadow-lg fade-in-up" style="background-color: #ded1bd; max-width: 1000px; width: 100%;">
            <div class="row">

                <!-- Left Part (Logo + Text) -->
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center p-5">
                    <img id="logoImage" src="./assets/images/logo2.png" alt="R Logo" class="mb-3" style="max-width: 350px;">
                    <span class="logo-text">SUMAN TULSIANI CHS</span>
                </div>

                <!-- Right Part (Login card small & centered) -->
                <div class="col-md-6 d-flex justify-content-center align-items-center p-4">
                    <div class="bg-white p-4 rounded-4 shadow w-100" style="max-width: 400px;">
                        <h5 class="text-center fw-bold text-decoration-underline mb-4">Forgot Password</h5>




                        <!-- FORM START -->
                        <form name="forgotForm">

                            <!-- Flat No. -->
                            <div class="mb-3">
                                <label class="form-label">Flat No.</label>
                                <div class="position-relative mb-3">
                                    <i class="bi bi-person position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                    <input type="text" class="form-control ps-5 rounded-pill" placeholder="Please Enter Flat No." name="flatNo" required>
                                </div>
                            </div>

                            <!-- OTP -->
                            <div class="mb-3">
                                <label class="form-label text-uppercase small">OTP</label>
                                <div class="position-relative">
                                    <i class="bi bi-lock-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                    <input type="password" class="form-control ps-5 pe-1 rounded-pill" placeholder="Enter OTP" name="otp" required id="otpInput">
                                </div>
                            </div>


                            <!-- Go back link -->
                            <div class="text-end mb-3">
                                <a href="./login.php" class="text-decoration-none text-primary slide-underline">Go back to Login!</a>
                            </div>

                            <!-- Verify Button -->
                            <button type="submit" class="btn btn-dark w-100 rounded-pill">Verify</button>

                        </form>
                        <!-- FORM END -->


                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- script -->
    <script src="./script.js"></script>


    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleIcon = document.getElementById("toggleOtp");
            const otpInput = document.getElementById("otpInput");

            toggleIcon.addEventListener("click", () => {
                const isHidden = otpInput.type === "password";
                otpInput.type = isHidden ? "text" : "password";

                toggleIcon.classList.toggle("bi-eye-fill", isHidden);
                toggleIcon.classList.toggle("bi-eye-slash-fill", !isHidden);
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleIcon = document.getElementById("toggleOtp");
            const otpInput = document.getElementById("otpInput");

            if (toggleIcon && otpInput) {
                toggleIcon.addEventListener("click", () => {
                    const isHidden = otpInput.type === "password";
                    otpInput.type = isHidden ? "text" : "password";
                    toggleIcon.classList.toggle("bi-eye-fill", isHidden);
                    toggleIcon.classList.toggle("bi-eye-slash-fill", !isHidden);
                });
            }

            // Add a click event listener to the "Back to Top" button
            const backToTopButton = document.getElementById("backToTopButton");
            if (backToTopButton) {
                backToTopButton.addEventListener("click", function() {
                    // Scroll to the top of the page
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                });
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Container fade and scale
            gsap.from(".container", {
                opacity: 0,
                scale: 0.95,
                duration: 1.5,
                ease: "power2.out",
            });

            // Logo float in with subtle rotation
            gsap.from(".logo-bounce", {
                y: -60,
                rotation: -10,
                opacity: 0,
                duration: 1.8,
                delay: 0.5,
                ease: "back.out(1.7)",
            });

            // Form card fly-in from right
            gsap.from(".col-md-6 .bg-white", {
                x: 100,
                opacity: 0,
                duration: 1.5,
                delay: 0.8,
                ease: "power3.out",
            });

            // Form inputs staggered rise-in
            gsap.from("form .form-control", {
                y: 30,
                opacity: 0,
                stagger: 0.2,
                delay: 1,
                duration: 1,
                ease: "power2.out",
            });

            // Button bounce in
            gsap.from("form button", {
                y: 20,
                opacity: 0,
                duration: 1,
                delay: 1.5,
                ease: "bounce.out",
            });

            // Footer reveal from bottom
            gsap.from("footer", {
                y: 100,
                opacity: 0,
                duration: 2,
                delay: 1.8,
                ease: "power2.out",
            });
        });
    </script>



</body>


</html>