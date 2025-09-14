<?php
// reset_password.php
// Allows user to set a new password after OTP verification

session_start();

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require_once 'PhpFiles/db.php';

// Check if user is authorized to reset password
if (!isset($_SESSION['can_reset_user'])) {
    header('Location: forgot_password.php');
    exit;
}

$user_id = $_SESSION['can_reset_user'];
$flat_no = isset($_SESSION['password_reset']['flat']) ? $_SESSION['password_reset']['flat'] : null;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error = "Invalid request. Security token mismatch.";
    } else {
        $password = $_POST['password'] ?? '';
        $confirm = $_POST['confirm_password'] ?? '';
        
        // Validate passwords
        if ($password !== $confirm) {
            $error = "Passwords do not match.";
        } elseif (strlen($password) < 8) {
            $error = "Password must be at least 8 characters long.";
        } elseif (!preg_match('/[A-Z]/', $password)) {
            $error = "Password must contain at least one uppercase letter.";
        } elseif (!preg_match('/[a-z]/', $password)) {
            $error = "Password must contain at least one lowercase letter.";
        } elseif (!preg_match('/[0-9]/', $password)) {
            $error = "Password must contain at least one number.";
        } elseif (!preg_match('/[^A-Za-z0-9]/', $password)) {
            $error = "Password must contain at least one special character.";
        } else {
            try {
                // Hash password and update in database
               $password_plain = $password;

$stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
$stmt->execute([$password_plain, $user_id]);
                
                if ($stmt->rowCount() > 0) {
                    // Get user email for confirmation
                    $emailStmt = $pdo->prepare("SELECT email FROM users WHERE id = ?");
                    $emailStmt->execute([$user_id]);
                    $userEmail = $emailStmt->fetchColumn();
                    
                    // Send confirmation email if email exists
                    if ($userEmail) {
                        require_once 'PhpFiles/mail.php';
                        sendPasswordChangeConfirmation($userEmail, null, $flat_no);
                    }
                    
                    // Success - clean up session
                    unset($_SESSION['can_reset_user']);
                    session_regenerate_id(true);
                    
                    // Redirect to login with success message
                    header('Location: login.php?success=' . urlencode("Password updated successfully. You can now login with your new password."));
                    exit;
                } else {
                    $error = "Failed to update password. Please try again.";
                }
            } catch (PDOException $e) {
                error_log("Password reset error: " . $e->getMessage());
                $error = "An error occurred. Please try again later.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMAN TULSIANI CHS - Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./assets/images/logo2.png" type="image/png">
    <style>
        body {
            background: #f0efe9;
        }
        .password-strength {
            height: 5px;
            margin-top: 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .password-feedback {
            font-size: 0.8rem;
            margin-top: 5px;
        }
        .requirements li {
            font-size: 0.85rem;
            color: #6c757d;
        }
        .requirements li.met {
            color: #198754;
        }
        .requirements li.met i {
            color: #198754;
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
                            <h5 class="text-center fw-bold text-decoration-underline mb-4">Reset Password</h5>
                            
                            <p class="text-center text-muted mb-4">Please create a new secure password for your account</p>
                            
                            <form method="post" action="" id="passwordResetForm">
                                <!-- CSRF Protection -->
                                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                
                                <!-- New Password -->
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <div class="position-relative mb-2">
                                        <i class="bi bi-lock-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                        <input type="password" class="form-control ps-5 rounded-pill" id="password" name="password" required>
                                        <i class="bi bi-eye-slash-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted" id="togglePassword" style="cursor: pointer;"></i>
                                    </div>
                                    <div class="password-strength bg-secondary opacity-25" id="passwordStrength"></div>
                                    <div class="password-feedback text-muted" id="passwordFeedback">Password strength</div>
                                    
                                    <ul class="requirements list-unstyled mt-2">
                                        <li id="length-check"><i class="bi bi-circle"></i> At least 8 characters</li>
                                        <li id="uppercase-check"><i class="bi bi-circle"></i> At least one uppercase letter</li>
                                        <li id="lowercase-check"><i class="bi bi-circle"></i> At least one lowercase letter</li>
                                        <li id="number-check"><i class="bi bi-circle"></i> At least one number</li>
                                        <li id="special-check"><i class="bi bi-circle"></i> At least one special character</li>
                                    </ul>
                                </div>
                                
                                <!-- Confirm Password -->
                                <div class="mb-4">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="position-relative mb-3">
                                        <i class="bi bi-lock-fill position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                        <input type="password" class="form-control ps-5 rounded-pill" id="confirm_password" name="confirm_password" required>
                                        <i class="bi bi-eye-slash-fill position-absolute top-50 end-0 translate-middle-y me-3 text-muted" id="toggleConfirmPassword" style="cursor: pointer;"></i>
                                    </div>
                                    <div class="password-feedback text-danger d-none" id="passwordMismatch">Passwords do not match</div>
                                </div>
                                
                                <!-- Reset Button -->
                                <button type="submit" class="btn btn-dark w-100 rounded-pill" id="resetButton">Reset Password</button>
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
        document.addEventListener("DOMContentLoaded", function() {
            // Add fade-in animation for the form
            gsap.from(".bg-white", {duration: 0.8, opacity: 0, y: 20, ease: "power2.out"});
            
            // Auto-dismiss alerts after 5 seconds
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
            
            // Password toggle visibility
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirm_password');
            
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('bi-eye-fill');
                this.classList.toggle('bi-eye-slash-fill');
            });
            
            toggleConfirmPassword.addEventListener('click', function() {
                const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPasswordInput.setAttribute('type', type);
                this.classList.toggle('bi-eye-fill');
                this.classList.toggle('bi-eye-slash-fill');
            });
            
            // Password strength meter
            const passwordStrength = document.getElementById('passwordStrength');
            const passwordFeedback = document.getElementById('passwordFeedback');
            const lengthCheck = document.getElementById('length-check');
            const uppercaseCheck = document.getElementById('uppercase-check');
            const lowercaseCheck = document.getElementById('lowercase-check');
            const numberCheck = document.getElementById('number-check');
            const specialCheck = document.getElementById('special-check');
            const resetButton = document.getElementById('resetButton');
            const passwordMismatch = document.getElementById('passwordMismatch');
            
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                
                // Check length
                if (password.length >= 8) {
                    strength += 20;
                    lengthCheck.classList.add('met');
                    lengthCheck.querySelector('i').classList.replace('bi-circle', 'bi-check-circle-fill');
                } else {
                    lengthCheck.classList.remove('met');
                    lengthCheck.querySelector('i').classList.replace('bi-check-circle-fill', 'bi-circle');
                }
                
                // Check uppercase
                if (/[A-Z]/.test(password)) {
                    strength += 20;
                    uppercaseCheck.classList.add('met');
                    uppercaseCheck.querySelector('i').classList.replace('bi-circle', 'bi-check-circle-fill');
                } else {
                    uppercaseCheck.classList.remove('met');
                    uppercaseCheck.querySelector('i').classList.replace('bi-check-circle-fill', 'bi-circle');
                }
                
                // Check lowercase
                if (/[a-z]/.test(password)) {
                    strength += 20;
                    lowercaseCheck.classList.add('met');
                    lowercaseCheck.querySelector('i').classList.replace('bi-circle', 'bi-check-circle-fill');
                } else {
                    lowercaseCheck.classList.remove('met');
                    lowercaseCheck.querySelector('i').classList.replace('bi-check-circle-fill', 'bi-circle');
                }
                
                // Check numbers
                if (/[0-9]/.test(password)) {
                    strength += 20;
                    numberCheck.classList.add('met');
                    numberCheck.querySelector('i').classList.replace('bi-circle', 'bi-check-circle-fill');
                } else {
                    numberCheck.classList.remove('met');
                    numberCheck.querySelector('i').classList.replace('bi-check-circle-fill', 'bi-circle');
                }
                
                // Check special characters
                if (/[^A-Za-z0-9]/.test(password)) {
                    strength += 20;
                    specialCheck.classList.add('met');
                    specialCheck.querySelector('i').classList.replace('bi-circle', 'bi-check-circle-fill');
                } else {
                    specialCheck.classList.remove('met');
                    specialCheck.querySelector('i').classList.replace('bi-check-circle-fill', 'bi-circle');
                }
                
                // Update strength bar
                passwordStrength.style.width = strength + '%';
                
                // Update feedback text and color
                if (strength <= 20) {
                    passwordStrength.className = 'password-strength bg-danger';
                    passwordFeedback.textContent = 'Very weak';
                    passwordFeedback.className = 'password-feedback text-danger';
                } else if (strength <= 40) {
                    passwordStrength.className = 'password-strength bg-warning';
                    passwordFeedback.textContent = 'Weak';
                    passwordFeedback.className = 'password-feedback text-warning';
                } else if (strength <= 60) {
                    passwordStrength.className = 'password-strength bg-info';
                    passwordFeedback.textContent = 'Medium';
                    passwordFeedback.className = 'password-feedback text-info';
                } else if (strength <= 80) {
                    passwordStrength.className = 'password-strength bg-primary';
                    passwordFeedback.textContent = 'Strong';
                    passwordFeedback.className = 'password-feedback text-primary';
                } else {
                    passwordStrength.className = 'password-strength bg-success';
                    passwordFeedback.textContent = 'Very strong';
                    passwordFeedback.className = 'password-feedback text-success';
                }
                
                // Check if passwords match
                checkPasswordsMatch();
            });
            
            confirmPasswordInput.addEventListener('input', checkPasswordsMatch);
            
            function checkPasswordsMatch() {
                if (confirmPasswordInput.value && passwordInput.value !== confirmPasswordInput.value) {
                    passwordMismatch.classList.remove('d-none');
                    resetButton.disabled = true;
                } else {
                    passwordMismatch.classList.add('d-none');
                    resetButton.disabled = false;
                }
            }
            
            // Form validation
            document.getElementById('passwordResetForm').addEventListener('submit', function(e) {
                const password = passwordInput.value;
                let isValid = true;
                
                // Check all requirements
                if (password.length < 8 || 
                    !/[A-Z]/.test(password) || 
                    !/[a-z]/.test(password) || 
                    !/[0-9]/.test(password) || 
                    !/[^A-Za-z0-9]/.test(password)) {
                    isValid = false;
                }
                
                // Check if passwords match
                if (password !== confirmPasswordInput.value) {
                    isValid = false;
                }
                
                if (!isValid) {
                    e.preventDefault();
                    alert('Please ensure your password meets all requirements and both passwords match.');
                }
            });
        });
    </script>
</body>
</html>
