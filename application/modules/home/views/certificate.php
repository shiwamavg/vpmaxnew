<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$certificates = [
    [
        'image' => 'udyam.png',
        'icon' => 'bi-file-earmark-text',
        'color' => '#0d6efd',
        'bg_color' => 'rgba(13, 110, 253, 0.1)',
        'title' => 'UDYAM Certification',
        'desc' => 'Registered under UDYAM with Government of India.'
    ],
    [
        'image' => 'gumasta-certificate.webp',
        'icon' => 'bi-receipt-cutoff',
        'color' => '#0d6efd',
        'bg_color' => 'rgba(13, 110, 253, 0.1)',
        'title' => 'Gumsta Certificate',
        'desc' => 'Official Establishment Registration Certificate (Gumasta Certificate)'
    ],
    [
        'image' => 'iso-certificate-of-vpmaxpackersandmovers.webp',
        'icon' => 'bi-shield-check',
        'color' => '#0d6efd',
        'bg_color' => 'rgba(13, 110, 253, 0.1)',
        'title' => 'ISO Approved',
        'desc' => 'ISO 9001:2015 Certified for Quality Management Systems.'
    ],
    [
        'image' => 'gst.png',
        'icon' => 'bi-bank',
        'color' => '#0d6efd',
        'bg_color' => 'rgba(13, 110, 253, 0.1)',
        'title' => 'GST-IN Registered',
        'desc' => 'Government Registered & GSTIN Approved Company.'
    ],
    [
        'image' => 'receipt.webp',
        'icon' => 'bi-receipt-cutoff',
        'color' => '#0d6efd',
        'bg_color' => 'rgba(13, 110, 253, 0.1)',
        'title' => 'Money Receipt',
        'desc' => 'Official Money Receipt with all transaction details.'
    ]
];

$features = [
    [
        'icon' => 'bi-patch-check',
        'title' => '100% Genuine',
        'desc' => 'All documents are verified & authentic'
    ],
    [
        'icon' => 'bi-person-check',
        'title' => 'Trusted Experts',
        'desc' => 'Backed by experience & professionalism'
    ],
    [
        'icon' => 'bi-lock',
        'title' => 'Secure & Reliable',
        'desc' => 'Your move is in safe hands'
    ],
    [
        'icon' => 'bi-star',
        'title' => 'Quality Assured',
        'desc' => 'We follow industry best practices'
    ]
];
?>

<section class="certifications-section py-4 bg-white position-relative">
    <!-- Optional dotted background pattern for extra premium feel -->
    <div class="cert-bg-pattern"></div>

    <div class="container position-relative z-1 py-2">
        <!-- Header -->
        <div class="text-center mb-4 pb-1">
            <div class="d-flex align-items-center justify-content-center mb-3">
                <span class="cert-dash-line"></span>
                <div class="cert-badge mx-3 d-flex align-items-center">
                    <div class="cert-badge-icon me-2">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <span class="fw-bold text-uppercase small cert-badge-text">OUR CERTIFICATIONS</span>
                </div>
                <span class="cert-dash-line"></span>
            </div>

            <h2 class="display-6 fw-bolder mb-2 cert-main-heading">
                Certified. Trusted. <span>Reliable.</span>
            </h2>
            <p class="text-muted mx-auto cert-subtitle">
                We are certified and trusted service providers with verified industry standards.
            </p>
        </div>

        <!-- Certificate Cards -->
        <div class="row g-3 justify-content-center mb-4">
            <?php foreach ($certificates as $index => $cert): ?>
                <?php 
                    $modalId = 'certModal' . $index;
                    $certImgUrl = base_url('assets/images/certificate/' . $cert['image']);
                    $certTitleSafe = htmlspecialchars($cert['title'], ENT_QUOTES);
                    $certDescSafe = htmlspecialchars($cert['desc'], ENT_QUOTES);
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="cert-card h-100 bg-white rounded-4 p-2 text-center transition-all d-flex flex-column justify-content-between shadow-sm">
                        <div>
                            <!-- Image Container with Hover Zoom Overlay (Pure Bootstrap Modal Trigger) -->
                            <div class="cert-img-container rounded-3 mb-4 position-relative overflow-hidden cert-img-box"
                                role="button"
                                tabindex="0"
                                data-bs-toggle="modal" 
                                data-bs-target="#<?= $modalId ?>" 
                                title="Click to view full certificate">
                                <!-- Using object-fit-contain to ensure image is not cut -->
                                <img loading="lazy" src="<?= $certImgUrl ?>"
                                    alt="<?= $certTitleSafe ?>"
                                    class="img-fluid h-100 w-100 object-fit-contain cert-image">
                                
                                <!-- Hover Zoom Overlay -->
                                <div class="cert-overlay">
                                    <span class="cert-overlay-btn">
                                        <i class="bi bi-arrows-fullscreen me-1"></i> View Full
                                    </span>
                                </div>
                            </div>

                            <!-- Floating Icon -->
                            <div class="cert-icon-wrapper rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3 cert-float-icon" style="background-color: <?= $cert['color'] ?>;">
                                <i class="bi <?= $cert['icon'] ?> text-white fs-6"></i>
                            </div>

                            <!-- Content -->
                            <span class="h5 fw-bold mb-1 d-block cert-title-text"><?= $cert['title'] ?></span>
                            <p class="text-muted mb-2 px-2 small cert-desc-text"><?= $cert['desc'] ?></p>
                        </div>

                        <!-- View Full Certificate Button (Pure Bootstrap Modal Trigger) -->
                        <div class="mt-2 pt-2 border-top">
                            <button type="button" 
                                class="btn btn-sm btn-outline-primary rounded-pill px-3 w-100 cert-view-btn"
                                data-bs-toggle="modal" 
                                data-bs-target="#<?= $modalId ?>">
                                <i class="bi bi-zoom-in me-1"></i> View Certificate
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="cert-features-bar-responsive bg-white shadow-sm border p-0">
            <div class="row g-0">
                <?php foreach ($features as $index => $feature): ?>
                    <div class="col-lg-3 col-md-6 col-12 cert-feature-col">
                        <div class="d-flex align-items-center justify-content-start justify-content-lg-center px-4 px-lg-2 py-3 py-lg-2">
                            <div class="cert-feature-icon me-3 flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle cert-feat-icon-box">
                                <i class="bi <?= $feature['icon'] ?> fs-5"></i>
                            </div>
                            <div>
                                <span class="h6 fw-bold mb-1 d-block cert-title-text"><?= $feature['title'] ?></span>
                                <p class="text-muted mb-0 small cert-feat-desc">
                                    <?= $feature['desc'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<!-- Pure Bootstrap 5 Modals for Each Certificate (No JavaScript Required) -->
<?php foreach ($certificates as $index => $cert): ?>
    <?php 
        $modalId = 'certModal' . $index;
        $certImgUrl = base_url('assets/images/certificate/' . $cert['image']);
        $certTitleSafe = htmlspecialchars($cert['title'], ENT_QUOTES);
        $certDescSafe = htmlspecialchars($cert['desc'], ENT_QUOTES);
    ?>
    <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content shadow border-0 rounded-4 overflow-hidden">
          <div class="modal-header bg-light border-0 pb-2">
            <div class="d-flex align-items-center">
              <div class="me-2 text-primary fs-4">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <div>
                <h5 class="modal-title fw-bold text-dark mb-0" id="<?= $modalId ?>Label"><?= $certTitleSafe ?></h5>
                <small class="text-muted"><?= $certDescSafe ?></small>
              </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-3 p-md-4 bg-light bg-opacity-25" style="max-height: 80vh; overflow-y: auto;">
            <img loading="lazy" src="<?= $certImgUrl ?>" alt="<?= $certTitleSafe ?>" class="img-fluid rounded-3 shadow-sm border bg-white cert-full-img">
          </div>
          <div class="modal-footer bg-light border-0 py-2 d-flex justify-content-between flex-wrap gap-2">
            <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
              <i class="bi bi-shield-check me-1"></i> Verified &amp; Authentic Document
            </span>
            <div class="d-flex gap-2">
              <a href="<?= $certImgUrl ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                <i class="bi bi-box-arrow-up-right me-1"></i> Open Full View
              </a>
              <button type="button" class="btn btn-sm btn-secondary rounded-pill px-3" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?>

<style>
.cert-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    border: 1px solid #edf1f7;
}
.cert-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
    border-color: #0d6efd;
}
.cert-img-container {
    background: #f8fafc;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.cert-overlay {
    position: absolute;
    inset: 0;
    background: rgba(3, 22, 51, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 3;
}
.cert-img-container:hover .cert-overlay {
    opacity: 1;
}
.cert-overlay-btn {
    background: #ffffff;
    color: #0d6efd;
    font-size: 0.82rem;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 50px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    transform: translateY(8px);
    transition: transform 0.3s ease;
}
.cert-img-container:hover .cert-overlay-btn {
    transform: translateY(0);
}
.cert-view-btn {
    font-size: 0.82rem;
    font-weight: 600;
    transition: all 0.25s ease;
}
.cert-view-btn:hover {
    background-color: #0d6efd;
    color: #ffffff;
}
.cert-full-img {
    max-height: 70vh;
    max-width: 100%;
    width: auto;
    object-fit: contain;
}
</style>