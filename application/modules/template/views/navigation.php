<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['household-shifting', 'office-shifting', 'car-transportation-service', 'bike-transportation-service', 'warehouse-and-storage-services', 'domestic-shifting', 'international-shifting', 'loading-and-unloading', 'local-shifting'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-location') {
    $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Slim Top Bar -->
  <div class="top-bar">
    <div class="container">
      <!-- First Row -->
      <div
        class="top-bar-inner d-flex justify-content-center justify-content-md-between align-items-center py-0 py-md-2 border-bottom hide-border-on-mobile">
        <!-- Left Side: Contact Info -->
        <div class="top-bar-left d-flex align-items-center flex-wrap gap-2 gap-md-4 text-secondary small">
          <a href="<?= $mailhtml ?>" class="d-none d-md-flex align-items-center text-decoration-none text-dark">
            <i class="bi bi-envelope me-1"></i><span><?= $mail ?></span>
          </a>
          <span class="divider-line text-secondary d-none d-md-inline">|</span>
          <a href="<?= $phonehtml ?>" class="d-none d-md-flex align-items-center gap-2 text-decoration-none text-dark">
            <i class="bi bi-telephone"></i> <span class="fw-medium"><?= $phone ?></span>
          </a>
          <span class="divider-line text-secondary d-none d-md-inline">|</span>
          <div class="d-none d-xl-flex align-items-center gap-2 text-dark">
            <i class="bi bi-geo-alt"></i> <a href="<?= site_url('branch-address') ?>"
              class="text-decoration-none text-dark">Branch Address</a>
          </div>
          <!-- Mobile only ISO badge -->
          <div class="d-block d-lg-none w-100 text-center">
            <a href="<?= site_url('iso-certification') ?>"
              class="text-decoration-none text-dark px-3 py-2 fw-bold iso-badge-main">
              AN ISO 9001:2015 CERTIFIED COMPANY <br><span class="fw-normal text-dark iso-badge-sub">(Click to check
                certificate)</span>
            </a>
          </div>
        </div>

        <!-- Right Side: SEO Links & Reviews Badge -->
        <div class="top-bar-right d-none d-lg-flex align-items-center gap-2 gap-xl-4">
          <!-- SEO Important Links -->
          <nav class="top-seo-nav d-flex align-items-center gap-2 gap-xl-3 fw-medium">
            <a href="<?= site_url('iso-certification') ?>"
              class="text-decoration-none badge bg-success text-white rounded-pill px-2 py-1 ms-1 fw-bold text-center iso-badge-main"
              title="Click to check certificate">AN ISO 9001:2015 CERTIFIED COMPANY</a>
            <a href="<?= site_url('moving-guide') ?>" class="text-decoration-none text-dark">Help &amp; Guides</a>
            <a href="<?= site_url('our-location') ?>" class="text-decoration-none text-dark">Locations</a>
            <a href="<?= site_url('contact-us') ?>" class="text-decoration-none text-dark">Contact</a>
          </nav>
          <a href="<?= site_url('reviews') ?>"
            class="review-badge d-flex align-items-center gap-2 bg-white px-2 px-xl-3 py-1 rounded text-decoration-none text-dark">
            <i class="bi bi-star-fill text-warning"></i> <span class="fw-bold">4.9 Reviews</span>
          </a>
        </div>
      </div>

      <!-- Second Row: Additional Links -->
      <div class="top-bar-inner d-flex justify-content-center justify-content-md-end align-items-center py-1">
        <div class="top-bar-right d-none d-lg-flex align-items-center gap-2 text-secondary fw-medium">
          <a href="<?= site_url('avoid-fraud-packers-and-movers') ?>" class="text-decoration-none text-dark"
            title="Verified & Safe Movers">Verified & Safe Movers</a>
          <span class="divider-line text-secondary">|</span>
          <a href="<?= site_url('our-location') ?>" class="text-decoration-none text-dark"
            title="All India Branches">All India Branches</a>
          <span class="divider-line text-secondary">|</span>
          <a href="#" data-bs-toggle="modal" data-bs-target="#qteModal" class="text-decoration-none text-dark"
            title="Get Free Moving Quote">Get Free Moving Quote</a>
          <span class="divider-line text-secondary">|</span>
          <a href="<?= $phonehtml ?>" class="text-decoration-none text-dark" title="24/7 Relocation Helpline">24/7
            Relocation Helpline <?= $phone ?></a>
          <span class="divider-line text-secondary">|</span>
          <span class="text-danger">* India's Trusted Movers Since <?= $startYear ?> *</span>
        </div>
      </div>
    </div>
  </div>

  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "itemListElement" => [
      ["@type" => "SiteNavigationElement", "position" => 1, "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "position" => 2, "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "position" => 3, "name" => "Services", "url" => site_url('household-shifting')],
      ["@type" => "SiteNavigationElement", "position" => 4, "name" => "Locations", "url" => site_url('our-location')],
      ["@type" => "SiteNavigationElement", "position" => 5, "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "position" => 6, "name" => "Contact Us", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "position" => 7, "name" => "Track", "url" => site_url('tracking')]
    ]
  ];

  $org_schema = [
    "@context" => "https://schema.org",
    "@type" => "Organization",
    "name" => $company3 . " Packers and Movers",
    "url" => site_url(),
    "logo" => base_url() . "assets/images/logo/logo.webp",
    "contactPoint" => [
      "@type" => "ContactPoint",
      "telephone" => $phone,
      "contactType" => "customer service"
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>
  <script type="application/ld+json">
  <?= json_encode($org_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container py-1 d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img loading="eager" src="<?= base_url() ?>assets/images/logo/logo.webp"
          alt="<?= $company3 ?> Packers and Movers" class="brand-logo" fetchpriority="high" loading="eager"
          decoding="async">
      </a>

      <!-- Header Action Buttons -->
      <div class="d-flex align-items-center gap-3 gap-md-4">
        <!-- Phone Helpline -->
        <a href="tel:+919630263460"
          class="header-phone d-none d-lg-flex align-items-center gap-2 text-decoration-none me-2">
          <div
            class="icon-ring-wrapper text-white bg-primary rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div class="phone-text lh-sm">
            <span class="d-block phone-helpline-label">24/7 HELPLINE</span>
            <span class="d-block fw-bolder text-dark phone-number">9630263460</span>
          </div>
        </a>
        <!-- Hamburger for Mobile -->
        <button class="hamburger d-flex" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <!-- Get a Quote Button -->
        <a href="#" class="btn-quote d-none d-lg-flex align-items-center gap-2" data-bs-toggle="modal"
          data-bs-target="#qteModal">
          <i class="bi bi-file-earmark-text"></i>
          <span>GET A QUOTE</span>
        </a>
      </div>
    </div>
  </header>

  <!-- Full Screen Mega Menu (overlay menu when clicking hamburger) -->
  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <div class="mega-close-wrap">
      <button class="mega-close-btn" id="closeMenu" aria-label="Close navigation menu">
        Close <i class="bi bi-x-circle"></i>
      </button>
    </div>

    <div class="mega-inner-container premium-mega-container">
      <div class="row">
        <!-- Column 1: Brand & Contact (New) -->
        <div class="col-lg mega-col text-center border-end d-none d-lg-block">
          <div>
            <img loading="lazy" src="<?= base_url() ?>assets/images/logo/logo.webp"
              alt="<?= $company3 ?> Packers and Movers" class="mega-brand-img">

            <div class="mb-4">
              <h5 class="mega-contact-heading">Contact</h5>
              <p class="mega-contact-sub mb-1">Contact Your Local branch</p>
              <h3 class="mega-contact-phone"><?= $phone ?></h3>
            </div>
          </div>

          <hr class="w-75 mx-auto opacity-25">

          <div class="my-4">
            <i class="bi bi-award mega-globe-icon"></i>
            <h5 class="mega-presence-heading">ISO-CERTIFIED 9001:2015</h5>
            <p class="mega-presence-bold mb-1">Quality Management System</p>
            <p class="mega-presence-text mx-auto">We adhere to international quality standards, ensuring a seamless,
              safe, and secure relocation experience for all our customers.</p>
          </div>

          <hr class="w-75 mx-auto opacity-25">

          <div class="mt-4">
            <h5 class="mega-connect-heading">Connect</h5>
            <div class="d-flex justify-content-center gap-2">
              <a href="<?= $facebookhtml ?? '#' ?>" target="_blank" class="mega-social-icon" aria-label="Facebook"><i
                  class="bi bi-facebook"></i></a>
              <a href="<?= $twitterhtml ?>" target="_blank" class="mega-social-icon" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="<?= $linkedinhtml ?? '#' ?>" target="_blank" class="mega-social-icon" aria-label="LinkedIn"><i
                  class="bi bi-linkedin"></i></a>
              <a href="<?= $youtubehtml ?? '#' ?>" target="_blank" class="mega-social-icon" aria-label="YouTube"><i
                  class="bi bi-youtube"></i></a>
              <a href="<?= $instagramhtml ?? '#' ?>" target="_blank" class="mega-social-icon" aria-label="Instagram"><i
                  class="bi bi-instagram"></i></a>
                  <a href="<?= $pinteresthtml ?? '#' ?>" aria-label="Pinterest" target="_blank" class="mega-social-icon"><i
               class="bi bi-pinterest"></i></a>
              <a href="<?= $snapchathtml ?? '#' ?>" aria-label="Snapchat" target="_blank" class="mega-social-icon"><i
               class="bi bi-snapchat"></i></a>
            </div>
          </div>
        </div>

        <!-- Column 2: The Company -->
        <div class="col-lg mega-col mega-col-styled">
          <span class="mega-col-title d-block active">The Company <i
              class="bi bi-chevron-down d-lg-none float-end"></i></span>

          <div class="mega-col-content show">
            <div class="mega-section">
              <ul class="mega-list">
                <li><a href="<?= site_url('about-us') ?>">History of the Company</a></li>
                <li><a href="<?= site_url('mission-and-vision') ?>">Mission and Vision</a></li>
                <li><a href="<?= site_url('our-philosophy') ?>">Our Philosophy</a></li>
                <li><a href="<?= site_url('iba-approved-packers') ?>">IBA Approved Packers</a></li>
                <li><a href="<?= site_url('certificates') ?>">Our Certificates</a></li>
                <li><a href="<?= site_url('why-choose-us') ?>">Why Choose Us</a></li>
                <li><a href="<?= site_url('iso-certification') ?>">ISO Certification</a></li>
                <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                <li><a href="<?= site_url('terms-and-conditions') ?>">Terms & Conditions</a></li>
                <li><a href="<?= site_url('refund-policy') ?>">Refund Policy</a></li>
                <li><a href="<?= site_url('our-location') ?>">Our Locations</a></li>

              </ul>
            </div>
          </div>
        </div>

        <!-- Column 3: Services -->
        <div class="col-lg mega-col mega-col-styled border-start">
          <span class="mega-col-title d-block">Services <i class="bi bi-chevron-down d-lg-none float-end"></i></span>

          <div class="mega-col-content">
            <div class="mega-section border-0">
              <ul class="mega-list">
                <li><a href="<?= site_url('household-shifting') ?>">Household Shifting</a></li>
                <li><a href="<?= site_url('office-shifting') ?>">Office Shifting</a></li>
                <li><a href="<?= site_url('local-shifting') ?>">Local Shifting</a></li>
                <li><a href="<?= site_url('domestic-shifting') ?>">Domestic Shifting</a></li>
                <li><a href="<?= site_url('international-shifting') ?>">International Shifting</a></li>
                <li><a href="<?= site_url('car-transportation-service') ?>">Car Transportation</a></li>
                <li><a href="<?= site_url('bike-transportation-service') ?>">Bike Transportation</a></li>
                <li><a href="<?= site_url('loading-and-unloading') ?>">Loading and Unloading</a></li>
                <li><a href="<?= site_url('warehouse-and-storage-services') ?>">Warehouse &amp; Storage</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Column 4: Important Links -->
        <div class="col-lg mega-col mega-col-styled border-start">
          <span class="mega-col-title d-block">Important Links <i
              class="bi bi-chevron-down d-lg-none float-end"></i></span>

          <div class="mega-col-content">
            <ul class="mega-list mb-4">
              <li><a href="<?= site_url('tracking') ?>">Track Consignment</a></li>
              <li><a href="<?= site_url('payment-mode') ?>">Payment Mode</a></li>
              <li><a href="<?= site_url('reviews') ?>">Reviews</a></li>
              <li><a href="<?= site_url('photo-gallery') ?>">Photo Gallery</a></li>
              <li><a href="<?= site_url('video-gallery') ?>">Video Gallery</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 5: Help & Support -->
        <div class="col-lg mega-col mega-col-styled border-start">
          <span class="mega-col-title d-block">Help & Support <i
              class="bi bi-chevron-down d-lg-none float-end"></i></span>

          <div class="mega-col-content">
            <ul class="mega-list mb-3">
              <li><a href="<?= site_url('contact-us') ?>">Contact Us</a></li>
              <li><a href="<?= site_url('faqs') ?>">FAQs</a></li>
              <li><a href="<?= site_url('moving-guide') ?>">Moving Guide</a></li>
              <li><a href="<?= site_url('packing-material') ?>">Packing Material Guide</a></li>
              <li><a href="<?= site_url('blog') ?>">Moving Tips & Articles</a></li>
              <li><a href="<?= site_url('avoid-fraud-packers-and-movers') ?>">Avoid Fraud Movers</a></li>
              <li><a href="<?= site_url('reviews') ?>">Post Feedback</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    openMenu.addEventListener('click', () => {
      megaMenu.classList.add('active');
      body.classList.add('menu-open');
    });

    closeMenu.addEventListener('click', () => {
      megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    });

    // Toggle mobile dropdown accordions
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');

        // Close other open dropdowns (accordion style)
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    // Mega menu mobile accordion
    document.querySelectorAll('.mega-col-title').forEach(title => {
      title.addEventListener('click', () => {
        if (window.innerWidth <= 991) {
          title.classList.toggle('active');
          const content = title.nextElementSibling;
          if (content && content.classList.contains('mega-col-content')) {
            content.classList.toggle('show');
          }
        }
      });
    });

    // Close menu when clicking on backdrop overlay
    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      mainHeader.classList.toggle('scrolled', window.scrollY > 20);
    });
  </script>