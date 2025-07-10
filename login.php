<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SUMAN TULSIANI CHS - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="../Suman_TulsianiCHS/assets/images/logo2.png" type="image/png">

  <style>
    body {
      background: #f0efe9;
    }
  </style>
</head>

<body>

  <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div id="mainContainer" class="container rounded-4 shadow-lg" style="background-color: #ded1bd; max-width: 1000px; width: 100%;">
      <div class="row">

        <!-- Left Part (Logo + Text) -->
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center p-5">
          <img id="logoImage" src="../Suman_TulsianiCHS/assets/images/logo2.png" alt="R Logo" class="mb-3" style="max-width: 350px;">
          <span class="logo-text">SUMAN TULSIANI CHS</span>
        </div>

        <!-- Right Part (Login card small & centered) -->
        <div class="col-md-6 d-flex justify-content-center align-items-center p-4">
          <div id="loginCard" class="bg-white p-4 rounded-4 shadow w-100" style="max-width: 400px;">
            <h3 class="text-center fw-bold mb-4"><u>Log in</u></h3>

            <form method="POST" action="./PhpFiles/handle_login.php">
              <div class="mb-3">
                <label class="form-label">Flat No.</label>
                <div class="position-relative mb-3">
                  <i class="bi bi-person position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                  <input type="text" name="flat_no" class="form-control ps-5 rounded-pill" placeholder="Please Enter Flat No." required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="position-relative mb-3">
                  <i class="bi bi-lock position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                  <input type="password" name="password" class="form-control ps-5 rounded-pill" placeholder="Please Enter Password" required>
                </div>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                </div>
                <a href="./forgot_password.php" class="text-decoration-none text-primary slide-underline">
                  Change/Forgot Password?
                </a>
              </div>

              <div class="d-grid mb-2">
                <button type="submit" class="btn btn-dark rounded-pill">Log in</button>

              </div>
            </form>
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
    document.addEventListener("DOMContentLoaded", () => {
      // Main container fade-in with scale pop
      gsap.from("#mainContainer", {
        opacity: 0,
        scale: 0.9,
        duration: 1.6,
        ease: "power2.out"
      });

      // Logo image slide-in from left with rotate
      gsap.from("#logoImage", {
        x: -100,
        rotate: -15,
        opacity: 0,
        duration: 1.8,
        delay: 0.3,
        ease: "back.out(1.7)"
      });

      // Login card drop-in from top
      gsap.from("#loginCard", {
        y: -80,
        opacity: 0,
        duration: 1.5,
        delay: 0.8,
        ease: "bounce.out"
      });

      // Animate input fields one by one
      gsap.from("form .form-control", {
        opacity: 0,
        y: 30,
        stagger: 0.2,
        delay: 1.2,
        duration: 1,
        ease: "power2.out"
      });

      // Animate login button pop effect
      gsap.from("form .btn", {
        scale: 0.8,
        opacity: 0,
        delay: 1.8,
        duration: 0.6,
        ease: "back.out(1.7)"
      });

      // Footer rise and fade-in
      gsap.from("footer", {
        y: 100,
        opacity: 0,
        duration: 2,
        delay: 1.5,
        ease: "power3.out"
      });
    });
  </script>


</body>

</html>