<section class="home-page-slider" itemscope itemtype="https://schema.org/WPHeader">
  <div class="home-page-slider-content">
    <div class="container">
      <div class="row">
        <!-- Text aligns left now -->
        <div class="col-lg-8 col-md-10 hero-text-col text-start pb-4">

          <!-- ISO Badge -->
          <div class="iso-badge d-inline-flex align-items-center mb-4 rounded-3 p-1 pe-3">
            <div class="iso-icon-wrapper rounded text-white d-flex align-items-center justify-content-center me-3">
              <i class="bi bi-shield-check fs-5"></i>
            </div>
            <span class="text-white fw-medium lh-sm iso-badge-text">ISO Certified & Government Authorised<br>Packers and
              Movers</span>
          </div>

          <div class="hero-text-box ms-0">
            <h1 class="hero-title" itemprop="name">
              ISO Certified Government Approved <span class="hero-title-highlight">Packers and Movers</span>
            </h1>
            <p class="hero-lead mt-3" itemprop="description">
              ISO Certified & Government Authorised Packers and Movers offering safe, affordable, and reliable home, office, and vehicle relocation services.
            </p>
          </div>

          <!-- Google Rating Box -->
          <div class="google-rating-box d-inline-flex align-items-center rounded-3 p-3 mt-4 gap-4">
            <div class="d-flex align-items-center gap-3 pe-4 border-end border-secondary border-opacity-50">
              <div
                class="google-icon-wrapper bg-white rounded-circle d-flex align-items-center justify-content-center overflow-hidden">
                <img loading="lazy" src="<?= base_url() ?>assets/images/about/google.webp" alt="Google"
                  style="width: 20px; height: 20px; object-fit: contain;">
              </div>
              <div>
                <div class="text-warning fs-6 mb-1 d-flex gap-1 google-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="text-white fw-bold lh-1 google-rating-val"><?= $ratingValue ?>/5 Rating</div>
                <div class="text-white-50 mt-1 google-rating-text text-white">Based on <a
                    href="<?= site_url('reviews') ?>"><?= $ratingCount ?>+</a> Reviews
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="d-flex position-relative">
                <img loading="lazy" src="<?= base_url() ?>assets/images/reviews/arshad.webp"
                  class="rounded-circle border border-dark border-2 position-relative google-avatar google-avatar-1"
                  alt="Google Avatar" loading="lazy">
                <img loading="lazy" src="<?= base_url() ?>assets/images/reviews/2.webp"
                  class="rounded-circle border border-dark border-2 position-relative google-avatar google-avatar-2"
                  alt="Google Avatar" loading="lazy">
                <img loading="lazy" src="<?= base_url() ?>assets/images/reviews/1.webp"
                  class="rounded-circle border border-dark border-2 position-relative google-avatar google-avatar-3"
                  alt="Google Avatar" loading="lazy">
              </div>
              <div>
                <div class="text-white fw-bold lh-1 google-count-val">
                  <?= $ratingCount ?>+
                </div>
                <div class="text-white mt-1 google-count-text text-white">Happy Customers</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Quote Form Card -->
<div class="container hero-quote-wrapper">
  <div class="row">
    <div class="col-12">
      <?php $this->load->view('contacts/quoteform1') ?>
    </div>
  </div>
</div>

<!-- Mobile Trust Badge Bar (Mobile Only, Outside the Card) -->
<div class="mobile-trust-bar d-flex d-lg-none py-3 bg-white border-bottom">
  <div class="container-fluid px-1">
    <div class="row g-0 justify-content-center align-items-stretch">
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-shield-check trust-icon-circle mb-2"></i>
        <strong>100% Secure</strong>
        <span>Your data is safe</span>
      </div>
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-clock trust-icon-circle mb-2"></i>
        <strong>Quick Reply</strong>
        <span>Under 15 mins</span>
      </div>
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-currency-rupee trust-icon-circle mb-2"></i>
        <strong>Best Price</strong>
        <span>Guaranteed rates</span>
      </div>
      <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">
        <i class="bi bi-headset trust-icon-circle mb-2"></i>
        <strong>24/7 Support</strong>
        <span>Always here</span>
      </div>
    </div>
  </div>
</div>