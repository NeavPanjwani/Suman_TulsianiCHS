<?php
session_start();

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SUMAN TULSIANI CHS - Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            background: #f0efe9;
        }
        .alert {
            border-radius: 10px;
            margin-bottom: 20px;
        }
        @media (max-width: 768px) {
            .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
    <link rel="icon" href="./assets/images/logo2.png" type="image/png">
</head>

<body>
    <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger alert-dismissible fade show text-center mt-3" role="alert">
        <?php echo htmlspecialchars($_GET['error']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success alert-dismissible fade show text-center mt-3" role="alert">
        <?php echo htmlspecialchars($_GET['success']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container rounded-4 shadow-lg fade-in-up p-4" 
             style="background-color: #ded1bd; max-width: 1000px; width: 100%;">
            <div class="row">

                <!-- Left Part (Logo + Text) -->
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center p-5">
                    <img id="logoImage" src="./assets/images/logo2.png" alt="R Logo" 
                         class="logo-bounce mb-3" style="max-width: 350px;">
                    <span class="logo-text">SUMAN TULSIANI CHS</span>
                </div>

                <!-- Right Part (Form Card) -->
                <div class="col-md-6 d-flex justify-content-center align-items-center p-4">
                    <div class="bg-white p-4 rounded-4 shadow w-100" style="max-width: 400px;">
                        <h5 class="text-center fw-bold text-decoration-underline mb-4">Forgot Password</h5>
                        <p class="text-center text-muted mb-4">Enter your flat number to receive a verification code</p>

                        <!-- FORM START -->
                        <form name="forgotForm" action="PhpFiles/handle_send_otp.php" method="post">
                            <!-- CSRF Protection -->
                            <input type="hidden" name="csrf_token" 
                                   value="<?php echo isset($_SESSION['csrf_token']) ? $_SESSION['csrf_token'] : ''; ?>">
                            
                            <!-- Flat No. -->
                            <div class="mb-4">
                                <label class="form-label">Flat No.</label>
                                <div class="position-relative mb-3">
                                    <i class="bi bi-building position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                    <input type="text" class="form-control ps-5 rounded-pill" 
                                           placeholder="Please Enter Flat No." name="flat_no" required>
                                </div>
                            </div>

                            <!-- Go back link -->
                            <div class="text-end mb-3">
                                <a href="./login.php" class="text-decoration-none text-primary slide-underline">
                                    <i class="bi bi-arrow-left"></i> Back to Login
                                </a>
                            </div>

                            <!-- Send OTP Button -->
                            <button type="submit" class="btn btn-dark w-100 rounded-pill">
                                Send Verification Code
                            </button>
                        </form>
                        <!-- FORM END -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- GSAP Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Card fade-in
            gsap.from(".bg-white", {duration: 0.8, opacity: 0, y: 20, ease: "power2.out"});

            // Container fade and scale
            gsap.from(".container", {
                opacity: 0,
                scale: 0.95,
                duration: 1.5,
                ease: "power2.out",
            });

            // Logo float
            gsap.from(".logo-bounce", {
                y: -60,
                rotation: -10,
                opacity: 0,
                duration: 1.8,
                delay: 0.5,
                ease: "back.out(1.7)",
            });

            // Inputs staggered
            gsap.from("form .form-control", {
                y: 30,
                opacity: 0,
                stagger: 0.2,
                delay: 1,
                duration: 1,
                ease: "power2.out",
            });

            // Button bounce
            gsap.from("form button", {
                y: 20,
                opacity: 0,
                duration: 1,
                delay: 1.5,
                ease: "bounce.out",
            });

            // Auto-dismiss alerts after 5s
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
</body>
</html>
