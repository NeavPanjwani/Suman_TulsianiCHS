<?php
session_start();

// DEBUG ONLY
if (isset($_SESSION['pending_user'])) {
    echo "<script>console.log('✅ Pending session found');</script>";
}
?>

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
   <?php if (isset($_GET['timeout'])): ?>
    <div class="alert alert-warning alert-dismissible fade show text-center mt-3" role="alert">
      Session expired due to inactivity. Please log in again.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>


  <?php if (isset($_GET['loggedout'])): ?>
  <div class="alert alert-success alert-dismissible fade show text-center mt-3" role="alert">
    You have been logged out successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if (isset($_GET['error'])): ?>
  <div class="alert alert-danger alert-dismissible fade show text-center mt-3" role="alert">
    Invalid Flat No. or Password. Please try again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

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
              <!--input type="hidden" name="latitude" id="latitude">
              <input type="hidden" name="longitude" id="longitude">
              <div class="text-center text-muted small" id="location-status"></div-->

              <div class="d-grid mb-2">
                <button type="submit" class="btn btn-dark rounded-pill">Log in</button>

              </div>
            </form>
            <?php if (isset($_GET['multiple']) && isset($_SESSION['pending_user'])): ?>
              <form method="POST" action="./PhpFiles/handle_login.php">
                <input type="hidden" name="flat_no" value="<?= htmlspecialchars($_SESSION['pending_user']['flat_no']) ?>">
                <input type="hidden" name="password" value="<?= htmlspecialchars($_SESSION['pending_user']['password']) ?>">
                <!--input type="hidden" name="latitude" value="<!?= htmlspecialchars($_SESSION['pending_user']['latitude']) ?>"-->
                <!--input type="hidden" name="longitude" value="<!?= htmlspecialchars($_SESSION['pending_user']['longitude']) ?>"-->
                <input type="hidden" name="override" value="1">
                <div class="alert alert-warning text-center rounded-3 mt-3">
                  You're already logged in elsewhere. <br>
                  <button type="submit" class="btn btn-sm btn-danger mt-2">Click here to continue and logout previous session</button>
                </div>
              </form>
            <?php endif; ?>

          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- script -->
  <script src="./script.js"></script>
  <!--script>
    window.addEventListener("load", () => {
      const latField = document.getElementById("latitude");
      const lonField = document.getElementById("longitude");
      const status = document.getElementById("location-status");
      const loginButton = document.querySelector('button[type="submit"]');

      // Disable login initially
      loginButton.disabled = true;
      status.textContent = "Fetching your location... please wait.";
      status.classList.add("text-warning");

      // Fallback: Enable login after 5 seconds if location not granted
      const fallbackTimeout = setTimeout(() => {
        loginButton.disabled = false;
        status.textContent = "Location access not granted. You can still log in.";
        status.classList.remove("text-warning");
        status.classList.add("text-danger");
      }, 5000);

      // Attempt to get location
      if (!navigator.geolocation) {
        status.textContent = "Geolocation is not supported by your browser.";
        status.classList.replace("text-warning", "text-danger");
        return;
      }

      navigator.geolocation.getCurrentPosition(
        (position) => {
          clearTimeout(fallbackTimeout); // cancel fallback
          latField.value = position.coords.latitude;
          lonField.value = position.coords.longitude;
          console.log("Latitude:", position.coords.latitude);
          console.log("Longitude:", position.coords.longitude);

          loginButton.disabled = false;
          status.textContent = "Location detected successfully.";
          status.classList.remove("text-warning");
          status.classList.add("text-success");
        },
        (error) => {
          // If denied or error, fallback will trigger after 5 seconds
          console.warn("Geolocation error:", error.message);
          status.textContent = "Waiting for location permission... or continue without it.";
        }
      );
    });
  </script-->


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

<!-- Bootstrap Bundle JS (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>