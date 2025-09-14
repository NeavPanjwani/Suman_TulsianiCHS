<?php
// verify_otp.php
// Verifies OTP for password reset

session_start();

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Check if we're expecting an OTP verification
if (!isset($_SESSION['password_reset']) || !isset($_SESSION['awaiting_otp_verification'])) {
    header('Location: forgot_password.php');
    exit;
}

// Get masked email from query parameter
$maskedEmail = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'your email';

// Process OTP verification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['otp'])) {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error = "Invalid request. Security token mismatch.";
    }
    else {
        $otp = trim($_POST['otp']);
        
        // Validate OTP format
        if (strlen($otp) !== 6 || !ctype_digit($otp)) {
            $error = "Invalid OTP format. Please enter a 6-digit code.";
        } 
        // Check if OTP has expired
        elseif ($_SESSION['password_reset']['expires'] < time()) {
            $error = "OTP has expired. Please request a new one.";
            // Clean up expired session data
            unset($_SESSION['password_reset'], $_SESSION['awaiting_otp_verification']);
        }
        // Optional: Check if request IP matches (can be disabled if causing issues)
        elseif ($_SESSION['password_reset']['request_ip'] !== ($_SERVER['REMOTE_ADDR'] ?? '')) {
            $error = "Security verification failed. Please request a new OTP.";
            error_log("OTP IP mismatch: expected {$_SESSION['password_reset']['request_ip']}, got {$_SERVER['REMOTE_ADDR']}");
        }
        // Check if too many attempts
        elseif ($_SESSION['password_reset']['attempts'] >= $_SESSION['password_reset']['max_attempts']) {
            $error = "Too many invalid attempts. Please request a new OTP.";
            unset($_SESSION['password_reset'], $_SESSION['awaiting_otp_verification']);
        }
        // Verify OTP
        else {
            // Increment attempt counter
            $_SESSION['password_reset']['attempts']++;
            
            // Verify OTP hash
            if (password_verify($otp, $_SESSION['password_reset']['otp_hash'])) {
                // OTP is valid - mark session as allowed for password reset
                $_SESSION['password_reset']['verified'] = true;
                // Set the can_reset_user session variable with the user ID
                $_SESSION['can_reset_user'] = $_SESSION['password_reset']['user_id'];
                unset($_SESSION['awaiting_otp_verification']); // No longer waiting for OTP
                
                // Security: regenerate session ID after successful verification
                session_regenerate_id(true);
                
                // Redirect to password reset page
                header('Location: reset_password.php');
                exit;
            } else {
                $attempts = $_SESSION['password_reset']['attempts'];
                $maxAttempts = $_SESSION['password_reset']['max_attempts'];
                $error = "Invalid OTP. Please try again. Attempt {$attempts}/{$maxAttempts}";
            }
        }
    }
}

// HTML starts below
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMAN TULSIANI CHS - Verify OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./assets/images/logo2.png" type="image/png">
    <style>
        body {
            background: #f0efe9;
        }
        .otp-input {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        .otp-input input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            border-radius: 8px;
            border: 1px solid #ced4da;
        }
        .otp-input input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
            outline: none;
        }
        .alert {
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php if (isset($error)): ?>
    <div class="alert alert-danger alert-dismissible fade show text-center mt-3" role="alert">
        <?php echo $error; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container rounded-4 shadow-lg fade-in-up" style="background-color: #ded1bd; max-width: 1000px; width: 100%;">
            <div class="row g-0">
                <div class="col-md-6 d-none d-md-block">
                    <img src="./assets/images/login.jpg" alt="Login Image" class="img-fluid h-100 rounded-start-4" style="object-fit: cover;">
                </div>
                <div class="col-md-6 p-4">
                    <div class="card border-0 bg-white p-3 rounded-4 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="text-center fw-bold text-decoration-underline mb-4">Verify OTP</h5>
                            
                            <p class="text-center text-muted mb-4">Please enter the 6-digit code sent to <?php echo $maskedEmail; ?></p>
                            
                            <form method="post" action="">
                                <!-- CSRF Protection -->
                                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                
                                <!-- Hidden combined OTP field -->
                                <input type="hidden" id="otp" name="otp" value="">
                                
                                <!-- OTP Input -->
                                <div class="mb-4">
                                    <label class="form-label">Verification Code</label>
                                    <div class="otp-input mb-3">
                                        <input type="text" class="form-control otp-digit" maxlength="1" pattern="[0-9]" inputmode="numeric" autofocus>
                                        <input type="text" class="form-control otp-digit" maxlength="1" pattern="[0-9]" inputmode="numeric">
                                        <input type="text" class="form-control otp-digit" maxlength="1" pattern="[0-9]" inputmode="numeric">
                                        <input type="text" class="form-control otp-digit" maxlength="1" pattern="[0-9]" inputmode="numeric">
                                        <input type="text" class="form-control otp-digit" maxlength="1" pattern="[0-9]" inputmode="numeric">
                                        <input type="text" class="form-control otp-digit" maxlength="1" pattern="[0-9]" inputmode="numeric">
                                    </div>
                                </div>
                                
                                <!-- Go back link -->
                                <div class="text-end mb-3">
                                    <a href="./forgot_password.php" class="text-decoration-none text-primary slide-underline">
                                        Request a new OTP
                                    </a>
                                </div>
                                
                                <!-- Verify Button -->
                                <button type="submit" class="btn btn-dark w-100 rounded-pill">Verify OTP</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom script -->
    <script src="./script.js"></script>
    
    <!-- GSAP Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    
    <script>
        // Add fade-in animation for the form
        document.addEventListener("DOMContentLoaded", function() {
            gsap.from(".bg-white", {duration: 0.8, opacity: 0, y: 20, ease: "power2.out"});
            
            // Auto-dismiss alerts after 5 seconds
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
            
            // OTP input handling
            const otpDigits = document.querySelectorAll('.otp-digit');
            const otpInput = document.getElementById('otp');
            
            // Function to update the hidden OTP field
            function updateOTPValue() {
                let otp = '';
                otpDigits.forEach(digit => {
                    otp += digit.value;
                });
                otpInput.value = otp;
            }
            
            // Add event listeners to each OTP digit input
            otpDigits.forEach((digit, index) => {
                // Focus next input when a digit is entered
                digit.addEventListener('input', function() {
                    if (this.value.length === 1) {
                        // Move to next input if available
                        if (index < otpDigits.length - 1) {
                            otpDigits[index + 1].focus();
                        }
                    }
                    updateOTPValue();
                });
                
                // Handle backspace
                digit.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && this.value === '') {
                        // Move to previous input if available
                        if (index > 0) {
                            otpDigits[index - 1].focus();
                        }
                    }
                });
                
                // Ensure only numbers are entered
                digit.addEventListener('keypress', function(e) {
                    if (!/[0-9]/.test(e.key)) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>
</html>
