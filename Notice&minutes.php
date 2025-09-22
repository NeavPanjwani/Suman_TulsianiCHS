<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SUMAN TULSANI CHS LTD.</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

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

  <style>
    :root {
      --accent: #4169e1;
      --muted: #6b6b6b;
    }

    body {
      font-family: 'Georgia', serif;
      background: #fff;
      color: #222;
      -webkit-user-select: none;
      user-select: none;
      margin: 0;
    }

    /* preserve your header/footer visuals (kept as provided) */

    main.page {
      padding: 2.5rem 1rem 8rem;
      /* bottom padding to avoid footer overlap */
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Sidebar */
    .sidebar {
      border-right: 1px solid #eee;
      padding-right: 1rem;
    }

    .year-item {
      display: flex;
      align-items: center;
      gap: .5rem;
      padding: .6rem .5rem;
      cursor: pointer;
      position: relative;
      border-radius: 6px;
    }

    .year-item .arrow {
      color: var(--accent);
      font-weight: 700;
      transform: rotate(0deg);
      transition: transform .2s ease;
    }

    .year-item.active {
      font-weight: 700;
      color: var(--accent);
    }

    .year-item.active .arrow {
      transform: rotate(90deg);
    }

    /* underline for active year (placed below the item without overlapping) */
    .year-item.active::after {
      content: "";
      position: absolute;
      left: 8px;
      right: 8px;
      bottom: -10px;
      height: 3px;
      background: var(--accent);
      border-radius: 2px;
      opacity: 0.98;
    }

    /* Month item */
    .month-item {
      padding: .45rem .6rem;
      cursor: pointer;
      border-radius: 6px;
    }

    .month-item:hover {
      background: #f8f9ff;
      color: var(--accent);
    }

    .month-item.active {
      background: var(--accent);
      color: white;
      font-weight: 700;
    }

    /* Docs grid */
    .doc-card {
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
      display: flex;
      flex-direction: column;
      background: #fff;
      height: 100%;
    }

    .doc-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      display: block;
    }

    .doc-card .card-body {
      padding: 1rem;
      display: flex;
      flex-direction: column;
      gap: .5rem;
      flex: 1;
    }

    .btn-accent {
      background: var(--accent);
      color: #fff;
      border: none;
    }

    /* modal/pdf */
    #pdfContainer {
      background: #f5f5f5;
      min-height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    .pdf-iframe {
      width: 100%;
      height: 75vh;
      border: 0;
    }

    /* small text */
    .muted-small {
      color: var(--muted);
      font-size: .95rem;
    }

    @media (max-width: 991px) {
      .sidebar {
        border-right: none;
        padding-right: 0;
        margin-bottom: 1rem;
      }

      main.page {
        padding-bottom: 6rem;
      }
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

  <main class="page">
    <div class="container">
      <div class="row gy-4">
        <!-- LEFT: Sidebar (years and months accordion) -->
        <aside class="col-12 col-lg-3 sidebar">
          <h3 style="font-size:1.25rem; margin-bottom:0.75rem;">Year</h3>

          <!-- Accordion: only 2024 & 2025 -->
          <div class="accordion" id="yearAccordion">
            <!-- 2025 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading2025">
                <button class="accordion-button collapsed year-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2025" aria-expanded="false" aria-controls="collapse2025" data-year="2025">
                  <span class="arrow">&#9658;</span><span style="margin-left:.4rem">2025</span>
                </button>
              </h2>
              <div id="collapse2025" class="accordion-collapse collapse" aria-labelledby="heading2025" data-bs-parent="#yearAccordion">
                <div class="accordion-body p-0">
                  <div class="list-group">
                    <button class="list-group-item month-item" data-year="2025" data-month="January">January</button>
                    <button class="list-group-item month-item" data-year="2025" data-month="February">February</button>
                    <button class="list-group-item month-item" data-year="2025" data-month="March">March</button>
                    <button class="list-group-item month-item" data-year="2025" data-month="July">July</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- 2024 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading2024">
                <button class="accordion-button collapsed year-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024" data-year="2024">
                  <span class="arrow">&#9658;</span><span style="margin-left:.4rem">2024</span>
                </button>
              </h2>
              <div id="collapse2024" class="accordion-collapse collapse" aria-labelledby="heading2024" data-bs-parent="#yearAccordion">
                <div class="accordion-body p-0">
                  <div class="list-group">
                    <button class="list-group-item month-item" data-year="2024" data-month="August">August</button>
                    <button class="list-group-item month-item" data-year="2024" data-month="September">September</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div style="margin-top:1rem;">
            <small class="muted-small">Select a year → then a month to load documents.</small>
          </div>
        </aside>

        <!-- RIGHT: Documents area -->
        <section class="col-12 col-lg-9">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h4 mb-0">NOTICES & MINUTES</h1>
            <input id="searchInput" class="form-control" placeholder="Search documents..." style="max-width:320px;">
          </div>

          <div id="docsGrid" class="row g-4">
            <p>Notices and minutes are essential components of society meetings. A notice informs members in advance about upcoming meetings, including the date, time, venue, and agenda. Minutes are the official record of what was discussed and decided during the meeting, including attendance, key points, and action items. </p>
            <div class="col-12 text-muted">Select a year and month from the left to view documents.</div>
          </div>
        </section>
      </div>
    </div>
  </main>

  <!-- Footer (kept exactly as you provided) -->
  <footer id="footerSection" class="bg-light border-top border-muted">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-5 text-center d-flex flex-column align-items-center justify-content-center">
          <div class="mb-3 d-flex justify-content-center align-items-center" style="height: 80px; width: 100%;">
            <img src="./assets/images/logo2.png" alt="Logo" style="height: 100%; object-fit: contain; max-width: 100%;">
          </div>
          <p class="text-muted small mb-0">
            SUMAN TULSANI CO-OPERATIVE HOUSING SOCIETY,<br>
            Suman CHS, 3rd Cross Rd, Lokhandwala Complex,<br>
            Andheri West, Mumbai, Maharashtra 400053
          </p>
        </div>

        <div class="col-md-1 d-none d-md-flex justify-content-center align-items-center">
          <div style="width: 0.5px; height: 100%; background-color: #999;"></div>
        </div>

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

      <div class="mt-4 mb-3">
        <div style="height: 1px; background-color: #999;"></div>
      </div>

      <div class="text-center text-muted small">
        <p class="mb-0 d-inline">© 2025 Suman Tulsiani CHS LTD</p>
        <span class="mx-2">|</span>
        <p class="mb-0 d-inline">
          DEVELOPED BY
          <a href="https://www.theveenagroup.com/" class="text-primary text-decoration-none">Veena Infotech</a>
        </p>
      </div>

      <div style="position: fixed; bottom: 20px; right: 20px;">
        <a href="#top" id="backToTop" class="btn btn-warning btn-sm rounded-pill px-3" aria-label="Back to Top">↑</a>
      </div>
    </div>
  </footer>

  <!-- PDF modal -->
  <div class="modal fade" id="pdfModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width:1100px;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="pdfModalTitle" class="modal-title">Document</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="modalCloseBtn"></button>
        </div>
        <div class="modal-body" style="padding:0; max-height:85vh; overflow:hidden;">
          <div id="pdfContainer" style="padding:1rem;">
            <span class="text-muted">Loading document...</span>
          </div>
          <div style="padding:.75rem;">
            <!--<div class="muted-small">Right-click & common save/print shortcuts are blocked for casual deterrence. For stronger protection serve PDFs via authenticated streaming + watermarking.</div>-->
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    /***********************
     * Data mapping (months -> documents)
     * Filenames kept exactly as you provided earlier.
     * Order documents month-wise.
     ***********************/
    const DATA = {
      "2024": {
        "August": [{
          title: "Consent Letter Dated 30th Aug, 2024",
          date: "30th Aug, 2024",
          img: "assets/Documents/doc1.png",
          pdf: "assets/Documents/30th august.pdf"
        }],
        "September": [{
            title: "Notice for SGBM Dated 1st Sept, 2024",
            date: "1st Sept, 2024",
            img: "assets/Documents/doc4.png",
            pdf: "assets/Documents/Notice for SGBM Dated 1st Sept,2024.pdf"
          },
          {
            title: "Minutes for SGBM Dated 1st Sept, 2024",
            date: "10th Sept, 2024",
            img: "assets/Documents/doc3.png",
            pdf: "assets/Documents/Minutes for SGBM Dated 1st Sept,2024.pdf"
          }
        ]
      },
      "2025": {
        "January": [{
          title: "Feasibility Report Total",
          date: "14th Jan, 2025",
          img: "assets/Documents/doc2.png",
          pdf: "assets/Documents/Feasibility Report Total.pdf"
        }],
        "February": [{
            title: "Feasibility Report Houzer",
            date: "15th Feb, 2025",
            img: "assets/Documents/doc5.png",
            pdf: "assets/Documents/Feasibility report houzer 15.2.25.pdf"
          },
          {
            title: "EOI from Mahindra Lifespaces Developers Limited",
            date: "13th Feb, 2025",
            img: "assets/Documents/doc10.png",
            pdf: "assets/Documents/Final Offer Letter from Mahindra Lifespaces Developers Limited 16th july.pdf"
          },
          {
            title: "Notice for SGBM Dated 23rd Feb, 2025",
            date: "16th Feb, 2025",
            img: "assets/Documents/doc7.png",
            pdf: "assets/Documents/Notice for SGBM Dated 23rd Feb, 2025.pdf"
          },
          {
            title: "Minutes for SGBM Dated 23rd Feb, 2025",
            date: "25th Feb, 2025",
            img: "assets/Documents/doc6.png",
            pdf: "assets/Documents/Minutes for SGBM Dated 23rd Feb, 2025.pdf"
          }
        ],
        "March": [{
            title: "Notice for SGBM Dated 23.03.2025",
            date: "7th March, 2025",
            img: "assets/Documents/doc9.png",
            pdf: "assets/Documents/Notice for SGBM Dated 23.03.2025.pdf"
          },
          {
            title: "Minutes for SGBM Dated 23.03.2025",
            date: "25th March, 2025",
            img: "assets/Documents/doc8.png",
            pdf: "assets/Documents/Minutes for SGBM Dated 23.03.2025.pdf"
          }
        ],
        "July": [{
            title: "Time of India Public Notice",
            date: "12th July, 2025",
            img: "assets/Documents/Time of india public notice.png",
            pdf: "assets/Documents/Time of india public notice.pdf"
          },
          {
            title: "Public Notice Maharashtra Times",
            date: "12th July, 2025",
            img: "assets/Documents/public notice Maharashtra Time.png",
            pdf: "assets/Documents/public notice Maharashtra Time.pdf"
          },
          {
            title: "Final Offer Letter from Mahindra Lifespaces Developers Limited",
            date: "16th July, 2025",
            img: "assets/Documents/doc10.png",
            pdf: "assets/Documents/Final Offer Letter from Mahindra Lifespaces Developers Limited 16th july.pdf"
          }
        ]
      }
    };

    /* -------------------------
       Helpers
       ------------------------- */
    function safeUrl(url) {
      try {
        const u = new URL(url, window.location.href);
        u.pathname = u.pathname.split('/').map(seg => encodeURIComponent(decodeURIComponent(seg))).join('/');
        return u.toString();
      } catch (e) {
        return url.split('/').map(seg => encodeURIComponent(seg)).join('/');
      }
    }

    function escapeHtml(s) {
      return s ? s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;') : '';
    }

    /* -------------------------
       Render / Interaction logic
       ------------------------- */
    // render docs for selected year/month
    function renderDocs(year, month) {
      const docs = ((DATA[year] || {})[month]) || [];
      const grid = document.getElementById('docsGrid');
      grid.innerHTML = ''; // clear

      if (!docs.length) {
        grid.innerHTML = '<div class="col-12 text-muted">No documents for this month.</div>';
        return;
      }

      // build elements and animate in using GSAP
      const fragment = document.createDocumentFragment();
      docs.forEach(doc => {
        const col = document.createElement('div');
        col.className = 'col-12 col-sm-6 col-md-4 col-lg-4 d-flex';

        const card = document.createElement('div');
        card.className = 'doc-card w-100';
        card.innerHTML = `
          <img src="${doc.img}" alt="${escapeHtml(doc.title)}" />
          <div class="card-body">
            <div class="fw-semibold">${escapeHtml(doc.title)}</div>
            <div class="text-muted">${escapeHtml(doc.date)}</div>
            <div class="mt-auto"><button class="btn btn-accent btn-sm" data-pdf="${escapeHtml(doc.pdf)}" data-title="${escapeHtml(doc.title)}">Open Document</button></div>
          </div>
        `;
        col.appendChild(card);
        fragment.appendChild(col);
      });

      grid.appendChild(fragment);

      // animate cards in: fade + up
      gsap.from(grid.querySelectorAll('.col-12'), {
        opacity: 0,
        y: 20,
        stagger: 0.08,
        duration: 0.45,
        ease: 'power2.out'
      });

      // attach button listeners (delegation)
      grid.querySelectorAll('button[data-pdf]').forEach(btn => {
        btn.removeEventListener('click', onOpenBtnClick);
        btn.addEventListener('click', onOpenBtnClick);
      });

      // ensure page doesn't overlap footer; scroll to top of docs area
      const docsTop = grid.getBoundingClientRect().top + window.pageYOffset - 20;
      window.scrollTo({
        top: docsTop,
        behavior: 'smooth'
      });
    }

    function onOpenBtnClick(ev) {
      const pdf = ev.currentTarget.getAttribute('data-pdf');
      const title = ev.currentTarget.getAttribute('data-title') || 'Document';
      openModalWithPDF(pdf, title);
    }

    /* -------------------------
       Active UI helpers
       ------------------------- */
    function clearActiveMonths() {
      document.querySelectorAll('.month-item').forEach(m => m.classList.remove('active'));
    }

    function clearActiveYears() {
      document.querySelectorAll('.year-item').forEach(y => y.classList.remove('active'));
    }

    // set active year header (underline) and ensure its accordion is expanded
    function setActiveYear(year) {
      clearActiveYears();
      // find the button with data-year attribute in headers
      document.querySelectorAll('.year-item').forEach(btn => {
        if (btn.dataset.year === year || btn.textContent.trim() === year) {
          btn.classList.add('active');
          // expand its collapse manually if collapsed
          const collapseId = (year === '2025') ? '#collapse2025' : '#collapse2024';
          const collapseEl = document.querySelector(collapseId);
          const bs = bootstrap.Collapse.getInstance(collapseEl) || new bootstrap.Collapse(collapseEl, {
            toggle: false
          });
          bs.show();
        } else {
          // collapse others
          const otherCollapseId = (btn.dataset.year === '2025') ? '#collapse2025' : '#collapse2024';
          if (otherCollapseId && otherCollapseId !== ((year === '2025') ? '#collapse2025' : '#collapse2024')) {
            const el = document.querySelector(otherCollapseId);
            const bs2 = bootstrap.Collapse.getInstance(el);
            if (bs2) bs2.hide();
          }
        }
      });
    }

    /* -------------------------
       PDF Modal (scrollable) + security deterrents
       ------------------------- */
    function openModalWithPDF(pdfPath, title = 'Document') {
      const modalTitle = document.getElementById('pdfModalTitle');
      const container = document.getElementById('pdfContainer');

      modalTitle.textContent = title;
      container.innerHTML = '<span class="text-muted">Loading document...</span>';

      const final = safeUrl(pdfPath) + '#toolbar=0&navpanes=0&scrollbar=1';

      // place iframe (pointer events allowed so scrolling works)
      container.innerHTML = `<iframe id="docIframe" class="pdf-iframe" src="${final}" allow="fullscreen"></iframe>`;

      // show modal
      const pdfModal = new bootstrap.Modal(document.getElementById('pdfModal'));
      pdfModal.show();

      // attach iframe-level contextmenu blocking after short delay
      setTimeout(() => {
        const iframe = document.getElementById('docIframe');
        if (iframe) {
          // block context menu events on the iframe element itself (prevents right-click open in many cases)
          iframe.addEventListener('contextmenu', e => {
            e.preventDefault();
            return false;
          });
          iframe.addEventListener('mousedown', e => {
            if (e.button === 2) {
              e.preventDefault();
              return false;
            }
          });
          // note: if iframe content is cross-origin, this prevents the parent-level contextmenu, but cannot control inside PDF viewer's own menu beyond this.
        }
      }, 120);

      // enable modal-specific keyboard blocking
      enableModalSecurity();
    }

    document.getElementById('pdfModal').addEventListener('hidden.bs.modal', function() {
      // clean up iframe
      document.getElementById('pdfContainer').innerHTML = '<span class="text-muted">Loading document...</span>';
      disableModalSecurity();
    });

    /* -------------------------
       Client-side deterrents
       ------------------------- */
    // Disable right-click globally
    document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
    }, {
      passive: false
    });

    // Disable selection
    document.addEventListener('selectstart', function(e) {
      e.preventDefault();
    }, {
      passive: false
    });

    // Keyboard blocks (global)
    function globalKeyBlocker(e) {
      const key = (e.key || '').toLowerCase();
      if (e.ctrlKey && (key === 's' || key === 'p' || key === 'u')) {
        e.preventDefault();
        e.stopPropagation();
      }
      if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && key === 'i')) {
        e.preventDefault();
        e.stopPropagation();
      }
    }
    document.addEventListener('keydown', globalKeyBlocker, true);

    // Mobile long-press basic prevention
    let touchStartAt = 0;
    document.addEventListener('touchstart', e => {
      touchStartAt = Date.now();
    }, {
      passive: true
    });
    document.addEventListener('touchend', e => {
      const dt = Date.now() - touchStartAt;
      if (dt > 700) e.preventDefault();
      touchStartAt = 0;
    }, {
      passive: false
    });

    // Modal-specific keyboard blocking
    function enableModalSecurity() {
      window.addEventListener('keydown', modalKeyBlocker, true);
    }

    function disableModalSecurity() {
      window.removeEventListener('keydown', modalKeyBlocker, true);
    }

    function modalKeyBlocker(e) {
      const key = (e.key || '').toLowerCase();
      if (e.ctrlKey && (key === 's' || key === 'p' || key === 'u')) {
        e.preventDefault();
        e.stopImmediatePropagation();
      }
      if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && key === 'i')) {
        e.preventDefault();
        e.stopImmediatePropagation();
      }
    }

    /* -------------------------
       Click handlers for sidebar months + year animations (GSAP)
       ------------------------- */
    document.querySelectorAll('.month-item').forEach(btn => {
      btn.addEventListener('click', function() {
        const year = this.dataset.year;
        const month = this.dataset.month;

        // set active styling
        clearActiveMonths();
        this.classList.add('active');

        // set active year
        setActiveYear(year);

        // load docs with animation (small fade-out then fade-in)
        const grid = document.getElementById('docsGrid');
        gsap.to(grid, {
          opacity: 0,
          y: 10,
          duration: 0.18,
          onComplete: () => {
            renderDocs(year, month);
            gsap.fromTo(grid, {
              opacity: 0,
              y: 12
            }, {
              opacity: 1,
              y: 0,
              duration: 0.36,
              ease: 'power2.out'
            });
          }
        });
      });
    });

    // Animate accordion expansions (GSAP) for nicer effect
    // Hook into Bootstrap collapse events for 2024/2025 panels
    const collapse2025El = document.getElementById('collapse2025');
    const collapse2024El = document.getElementById('collapse2024');

    [collapse2025El, collapse2024El].forEach(coll => {
      coll.addEventListener('show.bs.collapse', function() {
        // animate interior months sliding down
        const body = coll.querySelector('.accordion-body') || coll;
        gsap.fromTo(body, {
          height: 0,
          opacity: 0
        }, {
          height: 'auto',
          opacity: 1,
          duration: 0.35,
          ease: 'power2.out'
        });
        // mark the corresponding header button active visually
        const headerBtn = coll.previousElementSibling && coll.previousElementSibling.querySelector('.year-item');
        if (headerBtn) {
          clearActiveYears();
          headerBtn.classList.add('active');
        }
      });
      coll.addEventListener('hide.bs.collapse', function() {
        const headerBtn = coll.previousElementSibling && coll.previousElementSibling.querySelector('.year-item');
        if (headerBtn) headerBtn.classList.remove('active');
      });
    });

    // Search: simple filter across currently loaded year docs (will search across DATA of that year)
    document.getElementById('searchInput').addEventListener('input', function(ev) {
      const q = ev.target.value.trim().toLowerCase();
      // find active year and month (if month active)
      const activeMonthEl = document.querySelector('.month-item.active');
      if (!activeMonthEl) return;
      const year = activeMonthEl.dataset.year;
      const month = activeMonthEl.dataset.month;
      const docs = ((DATA[year] || {})[month]) || [];
      const filtered = docs.filter(d => (d.title + ' ' + d.date).toLowerCase().includes(q));
      const grid = document.getElementById('docsGrid');
      grid.innerHTML = '';
      if (!filtered.length) {
        grid.innerHTML = '<div class="col-12 text-muted">No documents match your search.</div>';
        return;
      }
      const frag = document.createDocumentFragment();
      filtered.forEach(doc => {
        const col = document.createElement('div');
        col.className = 'col-12 col-sm-6 col-md-4 col-lg-4 d-flex';
        const card = document.createElement('div');
        card.className = 'doc-card w-100';
        card.innerHTML = `
          <img src="${doc.img}" alt="${escapeHtml(doc.title)}" />
          <div class="card-body">
            <div class="fw-semibold">${escapeHtml(doc.title)}</div>
            <div class="text-muted">${escapeHtml(doc.date)}</div>
            <div class="mt-auto"><button class="btn btn-accent btn-sm" data-pdf="${escapeHtml(doc.pdf)}" data-title="${escapeHtml(doc.title)}">Open Document</button></div>
          </div>`;
        col.appendChild(card);
        frag.appendChild(col);
      });
      grid.appendChild(frag);
      gsap.from(grid.querySelectorAll('.col-12'), {
        opacity: 0,
        y: 20,
        stagger: 0.06,
        duration: 0.4
      });
      // set click listeners
      grid.querySelectorAll('button[data-pdf]').forEach(btn => {
        btn.removeEventListener('click', onOpenBtnClick);
        btn.addEventListener('click', onOpenBtnClick);
      });
    });

    // init: expand default year (optional) — keep collapsed by default; user chooses
    (function init() {
      // ensure collapses are ready (no auto-open)
      // attach click to year headers so visual active state toggles properly
      document.querySelectorAll('.year-item').forEach(h => {
        // store data-year attribute if not present
        if (!h.dataset.year) {
          const txt = (h.textContent || '').trim();
          h.dataset.year = txt;
        }
      });

      // Back to top
      const backBtn = document.getElementById('backToTop');
      if (backBtn) backBtn.addEventListener('click', e => {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });

      // render sidebar active styling when collapse toggled via Bootstrap's button
      // (Handled in collapse event listeners above)

    })();
  </script>
</body>

</html>