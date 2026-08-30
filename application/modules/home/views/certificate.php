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
        'image' => 'iso-9001-certification.webp',
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
        'image' => 'receipt.png',
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
            <?php foreach ($certificates as $cert): ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="cert-card h-100 bg-white rounded-4 p-2 text-center transition-all">
                        <!-- Image Container -->
                        <div class="cert-img-container rounded-3 mb-4 position-relative overflow-hidden cert-img-box"
                            data-bs-toggle="modal" data-bs-target="#certModal" 
                            onclick="document.getElementById('certModalImg').src='<?= base_url('assets/images/certificate/' . $cert['image']) ?>'; document.getElementById('certModalLabel').innerText='<?= htmlspecialchars($cert['title']) ?>';">
                            <!-- Using object-fit-contain to ensure image is not cut -->
                            <img loading="lazy" src="<?= base_url('assets/images/certificate/' . $cert['image']) ?>"
                                alt="<?= htmlspecialchars($cert['title']) ?>"
                                class="img-fluid h-100 w-100 object-fit-contain cert-image">
                        </div>

                        <!-- Floating Icon -->
                        <div class="cert-icon-wrapper rounded-circle mx-auto d-flex align-items-center justify-content-center mb-3 cert-float-icon" style="background-color: <?= $cert['color'] ?>;">
                            <i class="bi <?= $cert['icon'] ?> text-white fs-6"></i>
                        </div>

                        <!-- Content -->
                        <span class="h5 fw-bold mb-1 d-block cert-title-text"><?= $cert['title'] ?></span>
                        <p class="text-muted mb-1 px-2 small cert-desc-text"><?= $cert['desc'] ?></p>
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

<!-- Certificate Modal -->
<div class="modal fade" id="certModal" tabindex="-1" aria-labelledby="certModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold text-dark" id="certModalLabel">Certificate</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-4">
        <img loading="lazy" id="certModalImg" src="" alt="Certificate Full View" class="img-fluid rounded shadow-sm">
      </div>
    </div>
  </div>
</div>