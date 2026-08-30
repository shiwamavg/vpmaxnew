<main class="main bg-light py-5">
  <section class="error-section d-flex align-items-center justify-content-center error-min-h-60">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
          <!-- Modern Giant 404 Header -->
          <div class="error-header mb-4">
            <h1 class="display-1 fw-bolder text-primary mb-0 error-404-text">
              404
            </h1>
          </div>
          
          <h2 class="h3 fw-bold text-dark mb-3">Oops! We couldn't find that page.</h2>
          
          <p class="text-muted mb-5 lead fs-6 error-lh-16">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Don't worry, let's get you back to the right place.
          </p>
          
          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="<?= site_url() ?>" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm d-inline-flex align-items-center fw-medium">
              <i class="bi bi-house-door me-2 fs-5"></i> Back to Homepage
            </a>
            <a href="<?= site_url('contact-us') ?>" class="btn btn-outline-secondary px-4 py-2 rounded-pill shadow-sm d-inline-flex align-items-center fw-medium">
              <i class="bi bi-headset me-2 fs-5"></i> Contact Support
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
