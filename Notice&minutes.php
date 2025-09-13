<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notices & Minutes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./assets/images/logo2.png" type="image/png">

  <style>
    body {
      background-color: #ffffff;
      font-family: 'Georgia', serif;
    }

    .month-item {
      cursor: pointer;
      padding: 6px 10px;
      border-bottom: 1px solid #ddd;
      transition: background 0.2s;
    }

    .month-item:hover {
      background-color: #f0f0f0;
    }

    .year-item {
      cursor: pointer;
    }

    .card-img-top {
      height: 180px;
      width: 100%;
      object-fit: cover;
      border-radius: 8px 8px 0 0;
    }

    .card {
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border: none;
    }
  </style>
</head>

<body style="background-color: #ffffff; font-family: 'Georgia', serif;">

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
          <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
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
          <li class="nav-item"><a class="nav-link" href="./latest_update.php">Latest Updates</a></li>
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


  <div class="container py-5">
    <h1 class="display-5 mb-3" style="font-size: 28px; margin-top: 18px; text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">
      NOTICES & MINUTES
    </h1>
    <div class="row g-4 mb-4">
      <!-- Card 1 -->
       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc4.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Notice for SGBM Dated 1st Sept,2024</h3>
            <h5>17th Aug, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc4">
              Open Document
            </button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc1.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Consent Letter Dated 30th Aug, 2024</h3>
            <h5>30th Aug, 2024</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc1">
              Open Document
            </button>
          </div>
        </div>
      </div>
      
   
      
      <!-- Card 3 -->

       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc3.png" alt="Document 3" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Minutes for SGBM Dated 1st Sept,2024</h3>
            <h5>10th Sept, 2024</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#rules-modal">
              Open Document
            </button>
          </div>
      </div>
    </div>

     <!-- Card 4 -->
       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc2.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Feasibility Report Total</h3>
            <h5>14th Jan, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#may-minutes-modal">
              Open Document
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card 5 -->
       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc5.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Feasibility Report Houzer</h3>
            <h5>15th Feb, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc5">
              Open Document
            </button>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc5.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">EOI from Mahindra Lifespaces Developers Limited</h3>
            <h5>13th Feb, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#fol">
              Open Document
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card 7 -->
   
      <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc7.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Notice for SGBM Dated 23rd Feb, 2025</h3>
            <h5>16th Feb, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc7">
              Open Document
            </button>
          </div>
        </div>
      </div>

      <!-- Card 8 -->
       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc6.png" alt="Document 3" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Minutes for SGBM Dated 23rd Feb, 2025</h3>
            <h5>25th Feb, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc6">
              Open Document
            </button>
          </div>
        </div>
      </div>

      <!-- Card 9 -->

       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc9.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Notice for SGBM Dated 23.03.2025</h3>
            <h5>7th March, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc9">
              Open Document
            </button>
          </div>
        </div>
      </div>
     
      <!-- Card 10 -->
       <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc8.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Minutes for SGBM Dated 23.03.2025</h3>
            <h5>25th March, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc8">
              Open Document
            </button>
          </div>
        </div>
      </div>

      <!-- Card 11 -->
        <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/Time of india public notice.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Time of india Public Notice</h3>
            <h5>12th July, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#TOInotice">
              Open Document
            </button>
          </div>
        </div>
      </div>

      <!-- Card 12 -->
        <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/public notice Maharashtra Time.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Public Notice Maharashtra Times</h3>
            <h5>12th July, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#MTnotice">
              Open Document
            </button>
          </div>
        </div>
      </div>

      <!-- Card 13 -->
        <div class="col-md-4">
        <div class="bg-white rounded-lg shadow-lg flex flex-column overflow-hidden h-100 d-flex flex-column">
          <img src="assets/Documents/doc10.png" alt="Document 2" class="w-100" style="height: 180px; object-fit: cover;">
          <div class="flex-1 flex flex-column justify-content-between p-4 d-flex flex-column h-100">
            <h3 class="fs-5 fw-semibold mb-3">Final Offer Letter from Mahindra Lifespaces Developers Limited</h3>
            <h5>16th July, 2025</h5>
            <button type="button" class="mt-auto btn btn-warning text-white" style="background-color: #4169e1; border: none;"
              data-bs-toggle="modal" data-bs-target="#doc10">
              Open Document
            </button>
          </div>
        </div>
      </div>


    </div>
  </div>


  <!-- Modals -->
  <section>
    <!-- SGBM Notice Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc1" tabindex="-1" aria-labelledby="sgbmNoticeLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="sgbmNoticeLabel">Consent Letter 30th Aug, 2024</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document1"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- May Minutes Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="may-minutes-modal" tabindex="-1" aria-labelledby="mayMinutesLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mayMinutesLabel">Feasibility Report Total</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="may-minutes-pdf"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Rules Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="rules-modal" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Minutes for SGBM Dated 1st Sept,2024</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="rules-pdf"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

     <!-- Doc 4 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc4" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Notice for SGBM Dated 1st Sept,2024</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document4"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!----First offer letter modal---->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="fol" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">First offer letter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="fol5"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 5 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc5" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Feasibility Report Houzer 15th Feb, 2025</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document5"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 6 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc6" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Minutes for SGBM Dated 23rd Feb, 2025</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document6"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 7 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc7" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Notice for SGBM Dated 23rd Feb, 2025</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document7"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 8 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc8" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Minutes for SGBM Dated 23rd March, 2025</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document8"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 9 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc9" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Notice for SGBM Dated 23rd March, 2025</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document9"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 10 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="doc10" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Final Offer Letter from Mahindra Lifespaces Developers Limited 16th july</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="document10"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 11 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="TOInotice" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Time of India Public Notice</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="DocTOInotice"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Doc 12 Modal -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="MTnotice" tabindex="-1" aria-labelledby="rulesModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="rulesModalLabel">Public Notice Maharashtra Times</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="overflow:auto; max-height:70vh;">
            <div id="DocMTnotice"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script>
    function renderPDF(pdfUrl, containerId) {

      const container = document.getElementById(containerId);
      if (!container) {
        console.error(`Container with ID ${containerId} not found.`);
        return;
      }
      container.innerHTML = `<iframe src="${pdfUrl}#toolbar=0&navpanes=0&scrollbar=1" width="100%" height="600px" style="border:none;"></iframe>`;
    }

    // SGBM Notice Modal
     // doc1 Modal
    document.getElementById('doc1').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/30th august.pdf', 'document1');
    });

    // May Minutes Modal
    document.getElementById('may-minutes-modal').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Feasibility Report Total.pdf', 'may-minutes-pdf');
    });

    // Rules Modal
    document.getElementById('rules-modal').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Minutes for SGBM Dated 1st Sept,2024.pdf', 'rules-pdf');
    });
      // doc4 Modal
    document.getElementById('doc4').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Notice for SGBM Dated 1st Sept,2024.pdf', 'document4');
    });
      // first offer letter Modal
    document.getElementById('fol').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/1st offer letter.pdf', 'fol5');
    });
      // doc5 Modal
    document.getElementById('doc5').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Feasibility report houzer 15.2.25.pdf', 'document5');
    });
      // doc6 Modal
    document.getElementById('doc6').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Minutes for SGBM Dated 23rd Feb, 2025.pdf', 'document6');
    });
      // doc7 Modal
    document.getElementById('doc7').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Notice for SGBM Dated 23rd Feb, 2025.pdf', 'document7');
    });
      // doc8 Modal
    document.getElementById('doc8').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Minutes for SGBM Dated 23.03.2025.pdf', 'document8');
    });
     // doc9 Modal
    document.getElementById('doc9').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Notice for SGBM Dated 23.03.2025.pdf', 'document9');
    });
     // doc10 Modal
    document.getElementById('doc10').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Final Offer Letter from Mahindra Lifespaces Developers Limited 16th july.pdf', 'document10');
    });
    // Doc 11 Modal
    document.getElementById('TOInotice').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/Time of india public notice.pdf', 'DocTOInotice');
    });
    // Doc 12 Modal
    document.getElementById('MTnotice').addEventListener('show.bs.modal', function() {
      renderPDF('assets/Documents/public notice Maharashtra Time.pdf', 'DocMTnotice');
    });
   
    
    
  </script>



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
            <li class="mb-2">-redevelopmentsumanchs@gmail.com</li>
       
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

  <!-- script -->
  <script src="./script.js"></script>

  <!-- Bootstrap & GSAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

  <!-- Core Logic -->
  <script>
    function showYear(year) {
      gsap.to("#defaultView", {
        duration: 0.5,
        opacity: 0,
        onComplete: () => {
          document.getElementById("defaultView").classList.add("d-none");
          const yearView = document.getElementById("yearView");
          yearView.classList.remove("d-none");
          gsap.from(yearView, {
            duration: 0.5,
            opacity: 0
          });
          showMonths(year);
        }
      });
    }

    function showMonths(year) {
      const monthColumn = document.getElementById('monthColumn');
      const cardsContainer = document.getElementById('cardsContainer');

      monthColumn.style.display = 'block';
      cardsContainer.innerHTML = `<div class="text-muted text-center">Select a month from <strong>${year}</strong> to view documents.</div>`;

      gsap.fromTo(monthColumn, {
        opacity: 0,
        x: -20
      }, {
        opacity: 1,
        x: 0,
        duration: 0.5
      });
      gsap.fromTo(cardsContainer, {
        opacity: 0,
        y: 20
      }, {
        opacity: 1,
        y: 0,
        duration: 0.5
      });
    }

    function loadMonthData(month) {
      const cardsContainer = document.getElementById('cardsContainer');
      cardsContainer.innerHTML = `
                <div class="col-md-12">
                    <div class="p-4 shadow-sm border rounded">
                        <h5>${month} - Notice Title</h5>
                        <img src="./assets/images/room.jpg" alt="${month}" class="img-fluid mb-3"/>
                        <p>This is a sample notice content for <strong>${month}</strong>. You can update this with actual data.</p>
                    </div>
                </div>
            `;

      gsap.fromTo('#cardsContainer .col-md-12', {
        opacity: 0,
        y: 30
      }, {
        opacity: 1,
        y: 0,
        duration: 0.6,
        ease: "back.out(1.7)"
      });
    }

    // GSAP animations for page load

    gsap.from("div.fw-bold.mb-2", {
      opacity: 0,
      y: 30,
      duration: 1.2,
      delay: 0.5,
      ease: "power2.out"
    });

    gsap.from(".text-center.fw-semibold.mt-2.mb-0", {
      opacity: 0,
      y: 30,
      duration: 1.2,
      delay: 0.6,
      stagger: 0.2,
      ease: "power2.out"
    });

    window.addEventListener("DOMContentLoaded", () => {
      gsap.from(".navbar-nav .nav-item", {
        y: -30,
        opacity: 0,
        duration: 1.2,
        stagger: 0.2,
        ease: "power2.out"
      });

      gsap.from("h1.display-5 ", {
        x: -50,
        opacity: 0,
        duration: 1.4,
        delay: 0.5
      });

      gsap.from("p.mb-4", {
        y: 30,
        opacity: 0,
        duration: 1.2,
        delay: 0.8
      });

      gsap.from("#yearList .nav-link", {
        x: -20,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        delay: 0.9
      });

      gsap.from(".row.g-3 img", {
        scale: 0.8,
        opacity: 0,
        duration: 1.2,
        stagger: 0.3,
        delay: 1.2,
        ease: "back.out(1.7)"
      });

      // Scroll Trigger for Footer
      gsap.from("footer", {
        scrollTrigger: {
          trigger: "footer",
          start: "top bottom"
        },
        y: 100,
        opacity: 0,
        duration: 1,
        ease: "power2.out"
      });
    });

    // GSAP animations for month view
    function showMonths(year) {
      const monthColumn = document.getElementById('monthColumn');
      const cardsContainer = document.getElementById('cardsContainer');

      monthColumn.style.display = 'block';
      cardsContainer.innerHTML = `<div class="text-muted text-center">Select a month from <strong>${year}</strong> to view documents.</div>`;

      gsap.fromTo(monthColumn, {
        opacity: 0,
        x: -20
      }, {
        opacity: 1,
        x: 0,
        duration: 1
      });

      gsap.fromTo(cardsContainer, {
        opacity: 0,
        y: 20
      }, {
        opacity: 1,
        y: 0,
        duration: 1.2
      });

      gsap.from("#monthColumn .month-item", {
        opacity: 0,
        x: -10,
        duration: 1,
        stagger: 0.2,
        delay: 0.5
      });
    }

    // GSAP animations for year view switch
    function showYear(year) {
      gsap.to("#defaultView", {
        duration: 1,
        opacity: 0,
        onComplete: () => {
          document.getElementById("defaultView").classList.add("d-none");
          const yearView = document.getElementById("yearView");
          yearView.classList.remove("d-none");
          gsap.from(yearView, {
            duration: 1,
            opacity: 0
          });

          gsap.from("#yearView .year-item", {
            opacity: 0,
            x: -20,
            duration: 1.2,
            stagger: 0.2,
            delay: 0.4
          });

          showMonths(year);
        }
      });
    }

    // Animate Footer
    gsap.from("footer .row", {
      scrollTrigger: "footer",
      y: 80,
      opacity: 0,
      duration: 1.2,
      ease: "power2.out"
    });
  </script>
</body>

</html>