<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$credentials = [
    [
        'title' => 'ISO 9001:2015',
        'desc' => 'Certificate No: E21421615228, for Courier Services, Packers & Movers, Transportation and Storage of Goods.',
        'image' => 'iso.png',
        'icon' => 'bi-file-earmark-text',
        'highlight' => true
    ],
    [
        'title' => "$ratingValue Star Ratings",
        'desc' => "We have been rated $ratingValue stars by our valuable clients ($ratingCount+) in multiple platforms like Google, Facebook etc.",
        'image' => '5star.png',
        'icon' => 'bi-star',
        'highlight' => false
    ],
    [
        'title' => 'Registered Trademark',
        'desc' => 'Our Logo is registered under the Trade Marks Act 1999.',
        'image' => 'trademark.png',
        'icon' => 'bi-shield-check',
        'highlight' => false
    ],
    [
        'title' => '23+ Years of Trust',
        'desc' => 'Since 2003, we are serving across the country as one of the best Packers and Movers company.',
        'image' => 'since2003.png',
        'icon' => 'bi-people-fill',
        'highlight' => false
    ]
];
?>

<section class="credentials-section">
    <div class="container">
        <!-- Header -->
        <div class="faq-header-wrap text-center mb-4">
            <div class="faq-badge-container d-flex align-items-center justify-content-center mb-2">
                <span class="credential-badge-line"></span>
                <span class="credential-pill-badge px-3 fw-bold">Our Credentials</span>
                <span class="credential-badge-line"></span>
            </div>
            <span class="h2 credential-section-title mb-2 fw-bold d-block">Trust, Quality & Excellence</span>
            <p class="credential-section-subtitle mb-0">Backed by certifications, trusted by thousands of customers.</p>
        </div>

        <!-- Cards Row -->
        <div class="row g-3 justify-content-center">
            <?php foreach ($credentials as $cred): ?>
                <div class="col-lg-3 col-md-6 col-6 d-flex">
                    <div class="credential-card bg-white w-100 position-relative rounded-4">
                        
                        <?php if ($cred['highlight']): ?>
                            <div class="credential-top-left-decor"></div>
                            <div class="credential-top-left-crescent"></div>
                        <?php endif; ?>

                        <!-- Top Image Area (Transparent background) -->
                        <div class="credential-img-area position-relative text-center d-flex align-items-center justify-content-center">
                            <img loading="lazy" src="<?= base_url('assets/images/home_modules/' . $cred['image']) ?>" alt="<?= htmlspecialchars($cred['title']) ?>" class="img-fluid position-relative">
                        </div>

                        <!-- Content Area -->
                        <div class="credential-content px-2 pt-2 pb-1 text-center flex-grow-1">
                            <!-- Small blue dot/line divider -->
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <div class="credential-divider-line"></div>
                                <div class="credential-divider-dot"></div>
                                <div class="credential-divider-line"></div>
                            </div>
                            
                            <span class="h5 fw-bold mb-2 d-block credential-title">
                                <?= htmlspecialchars($cred['title']) ?>
                            </span>
                            <p class="text-muted credential-desc">
                                <?= htmlspecialchars($cred['desc']) ?>
                            </p>
                        </div>

                        <!-- Floating Bottom Icon -->
                        <div class="credential-bottom-icon position-absolute start-50 translate-middle-x rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi <?= htmlspecialchars($cred['icon']) ?>"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>