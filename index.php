<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SUMAN TULSIANI CHS</title>

  <!-- style custome links  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <style>
    body {
      background-color: #ffffff;
      font-family: 'Georgia', serif;
    }
  </style>
  <link rel="icon" href="./assets/images/logo2.png" type="image/png">



</head>
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require 'PhpFiles/db.php';

// 1. Not logged in? Go to login
if (!isset($_SESSION['user_id'])) {
  include 'login.php';
  exit;
}

// Update last_seen time every activity
$updateSeen = $pdo->prepare("UPDATE active_sessions SET last_seen = NOW() WHERE user_id = ?");
$updateSeen->execute([$_SESSION['user_id']]);

// 2. Timeout check (5 mins inactivity)
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 300)) {
  // Record logout time
  $pdo->prepare("UPDATE login_logs SET logout_time = NOW() WHERE user_id = ? AND logout_time IS NULL")
    ->execute([$_SESSION['user_id']]);

  // Remove from active_sessions
  $pdo->prepare("DELETE FROM active_sessions WHERE user_id = ?")
    ->execute([$_SESSION['user_id']]);

  // Destroy session
  session_unset();
  session_destroy();
  header("Location: login.php?timeout=1");
  exit;
}




// 3. Update last activity timestamp
$_SESSION['last_activity'] = time();

// 4. Session conflict check
$stmt = $pdo->prepare("SELECT session_id, last_seen FROM active_sessions WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$active = $stmt->fetch();

$currentSession = session_id();

if ($active) {
  $lastSeen = strtotime($active['last_seen']);
  $diff = time() - $lastSeen;

  if ($active['session_id'] !== $currentSession) {
    if ($diff <= 300) {
      // Another session is still active
      session_unset();
      session_destroy();
      header("Location: login.php?multiple=1");
      exit;
    } else {
      // ❌ Stale session — remove and allow current session
      $pdo->prepare("DELETE FROM active_sessions WHERE user_id = ?")->execute([$_SESSION['user_id']]);

      // ✅ Now insert current session as active
      $insert = $pdo->prepare("REPLACE INTO active_sessions (user_id, session_id, last_seen) VALUES (?, ?, NOW())");
      $insert->execute([$_SESSION['user_id'], $currentSession]);
    }
  } else {
    // ✅ Same session — just update last_seen
    $insert = $pdo->prepare("REPLACE INTO active_sessions (user_id, session_id, last_seen) VALUES (?, ?, NOW())");
    $insert->execute([$_SESSION['user_id'], $currentSession]);
  }
}


// 5. Update or Insert current session
$insert = $pdo->prepare("REPLACE INTO active_sessions (user_id, session_id, last_seen) VALUES (?, ?, NOW())");
$insert->execute([$_SESSION['user_id'], $currentSession]);
?>




<body style="background-color: #f0efe9;">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg border-bottom py-3" style="background-color: #e0dfd6;">
    <div class="container-fluid px-4">

      <div class="d-flex align-items-center gap-2">
        <a class="navbar-brand d-flex align-items-center justify-content-between w-100" href="./index.php">
          <div class="d-flex align-items-center gap-2">
            <img src="./assets/images/logo2.png" alt="Logo" class="img-fluid"
              style="max-height: 42px; width: auto;">
            <span class="logo-text fw-semibold text-nowrap" style="font-size: 0.9rem;">SUMAN TULSIANI CHS</span>
          </div>
        </a>

        <!-- Hamburger Button -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
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
            <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
            <li class="nav-item"><a class="nav-link" href="./pmc.php">PMC</a></li>
            <li class="nav-item"><a class="nav-link" href="./Notice&minutes.php">Notice & Minutes</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="./tender.php">Tender Process</a></li> -->
            <li class="nav-item"><a class="nav-link" href="./contact_us.php">Contact Us</a></li>

            <li class="nav-item"><a class="nav-link" href="PhpFiles/handle_logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>

    </div>
  </nav>

  <!-- MAIN SECTION -->
  <section style="background-color: #f9f8f3; min-height: 100vh;">
    <div class="container-fluid">
      <div class="row align-items-stretch g-0" style="min-height: 100vh;">


        <!-- LEFT TEXT SECTION -->
        <div class="col-lg-6 d-flex flex-column justify-content-center px-5" id="left-text">
          <h1 class="m-0">
            <span class="d-block" style="font-size: 50px;">SUMAN TULSIANI</span>
            <span class="d-block" style="margin-left: 20vw; font-size: 4vw; margin-top: 1.5vw;">CHS LTD.</span>
          </h1>
        </div>

        <!-- RIGHT IMAGE SECTION -->
        <div class="col-lg-6" id="right-img">
          <div class="p-4 h-100">
            <img src="./assets/images/homepage.jpg" alt="Interior" class="w-100 h-100"
              style="object-fit: cover; filter: grayscale(10%); border-radius: 0;">
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

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <!-- GSAP Animations -->
  <script>
    window.addEventListener("load", () => {
      gsap.from("#left-text h1 span", {
        x: -100,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out"
      });
      gsap.from(".navbar-nav .nav-item", {
        y: -30,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: "power2.out"
      });


      gsap.from("#right-img", {
        x: 100,
        opacity: 0,
        duration: 1.5,
        ease: "power2.out",
        delay: 0.5
      });
    });
  </script>








</body>

</html>