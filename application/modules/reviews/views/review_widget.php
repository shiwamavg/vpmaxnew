<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Fallback dynamic variables if not set in controllers or MX_Controller
$companyName = isset($company3) ? $company3 : 'MyCompany';

$CI =& get_instance();
$CI->load->database();
$CI->load->model('reviews/Reviewmdl');
$recent_reviews = $CI->Reviewmdl->get_recent_top_reviews(5);
?>

<link rel="stylesheet" href="<?= base_url('assets/css/reviews_modules.css') ?>">

<section class="reviews-section py-4 position-relative overflow-hidden">
    
    <!-- Background Decor -->
    <div class="review-bg-dots"></div>
    <div class="review-bg-shape-1"></div>
    <div class="review-bg-shape-2"></div>

    <div class="container position-relative review-z2">

        <!-- Header -->
        <div class="text-center mb-4">
            <!-- Platform Directory Badge -->
            <div class="d-inline-flex align-items-center gap-2 mb-3 px-4 py-2 rounded-pill reviews-badge">
                <i class="bi bi-patch-check-fill text-white reviews-badge-icon"></i>
                <span class="text-uppercase fw-bold font-outfit small text-white reviews-badge-text">Verified <?= htmlspecialchars($companyName) ?> Reviews</span>
            </div>

            <!-- Title -->
            <h2 class="mb-2 font-outfit fw-bolder text-white reviews-title">
                Trusted by <span class="reviews-title-highlight">Thousands</span>
            </h2>
            
            <!-- Star Divider -->
            <div class="d-flex align-items-center justify-content-center gap-3 mb-3">
                <div class="reviews-star-line"></div>
                <i class="bi bi-star-fill text-white reviews-star-icon"></i>
                <div class="reviews-star-line"></div>
            </div>

            <p class="mx-auto reviews-subtitle">
                Read genuine reviews from people who have experienced our seamless moving and packing services. We let our customers do the talking.
            </p>
        </div>

        <!-- Reviews Grid (Horizontal Scrollable) -->
        <div class="row flex-nowrap g-4 mb-4 overflow-auto pb-4 review-scroll-container">
            <?php
            $color_classes = ['review-avatar-bg-0', 'review-avatar-bg-1', 'review-avatar-bg-2', 'review-avatar-bg-3', 'review-avatar-bg-4'];
            if (!empty($recent_reviews)):
                foreach ($recent_reviews as $index => $rev):
                    $r_name = isset($rev['name']) ? htmlspecialchars(trim($rev['name'])) : 'Customer';
                    $r_initial = strtoupper(substr($r_name, 0, 1));
                    $r_color_class = $color_classes[$index % count($color_classes)];
                    $r_city = isset($rev['r_title']) ? htmlspecialchars(trim($rev['r_title'])) : 'India';
                    $r_time = isset($rev['posted_date']) ? date('M j, Y', strtotime($rev['posted_date'])) : 'Recently';
                    $r_msg = isset($rev['r_desc']) ? htmlspecialchars($rev['r_desc']) : '';
                    $r_rating = isset($rev['stars']) ? (int) $rev['stars'] : 5;
                    $helpful_count = rand(8, 25); // Simulated helpful count for mockup matching
                    ?>
                    <div class="col-11 col-md-6 col-lg-4 d-flex review-card-wrapper">
                        <div class="card w-100 border-0 shadow-lg rounded-4 p-4 h-100 bg-white position-relative review-card-hover review-card-main">
                            
                            <!-- Quote Decor -->
                            <i class="bi bi-quote position-absolute review-quote-icon"></i>

                            <!-- User Info -->
                            <div class="d-flex align-items-center mb-4 position-relative review-z2">
                                <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold me-3 shadow-sm review-avatar <?= $r_color_class ?>">
                                    <?= $r_initial ?>
                                </div>
                                <div>
                                    <span class="h5 mb-0 fw-bold d-flex align-items-center gap-1 review-username">
                                        <span><?= $r_name ?></span> 
                                        <i class="bi bi-patch-check-fill review-username-icon"></i>
                                    </span>
                                    <div class="text-muted mt-1 review-location">
                                        <i class="bi bi-geo-alt-fill review-location-icon"></i> <?= $r_city ?> &bull; <?= $r_time ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Rating & Verified Badge -->
                            <div class="d-flex align-items-center justify-content-between mb-3 position-relative review-z2">
                                <div class="text-warning review-stars">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="bi bi-star<?= $i <= $r_rating ? '-fill' : '' ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <div class="badge rounded-pill d-flex align-items-center gap-1 review-verified-badge">
                                    <i class="bi bi-check-circle"></i> Verified Customer
                                </div>
                            </div>
                            
                            <!-- Review Text -->
                            <p class="mb-4 position-relative review-text review-z2">
                                <?= $r_msg ?>
                            </p>

                            <!-- Helpful Button -->
                            <div class="mt-auto position-relative review-z2">
                                <button class="btn btn-sm rounded-pill d-inline-flex align-items-center gap-1 review-btn-helpful" onclick="toggleHelpful(this, <?= $helpful_count ?>)">
                                    <i class="bi bi-hand-thumbs-up"></i> <span>Helpful (<?= $helpful_count ?>)</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            else: ?>
                <div class="col-12 text-center text-white">
                    <p>No reviews yet.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <button type="button" data-bs-toggle="modal" data-bs-target="#reviewModal"
                class="btn px-4 py-2 rounded-pill font-outfit fw-bold d-flex align-items-center gap-2 text-white review-btn-write">
                <i class="bi bi-pencil-square"></i> Write a Review
            </button>
            <a href="<?= site_url('reviews') ?>"
                class="btn px-4 py-2 rounded-pill font-outfit fw-bold text-decoration-none d-flex align-items-center gap-2 text-white border-0 shadow-sm review-btn-all">
                Show All Reviews <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<script>
function toggleHelpful(btn, baseCount) {
    const icon = btn.querySelector('i');
    const textSpan = btn.querySelector('span');
    
    if (btn.classList.contains('active-helpful')) {
        // Remove helpful
        btn.classList.remove('active-helpful');
        btn.classList.remove('btn-primary', 'text-white');
        icon.classList.replace('bi-hand-thumbs-up-fill', 'bi-hand-thumbs-up');
        textSpan.innerHTML = 'Helpful (' + baseCount + ')';
    } else {
        // Add helpful
        btn.classList.add('active-helpful');
        btn.classList.add('btn-primary', 'text-white');
        icon.classList.replace('bi-hand-thumbs-up', 'bi-hand-thumbs-up-fill');
        textSpan.innerHTML = 'Helpful (' + (baseCount + 1) + ')';
    }
}
</script>

<!-- SEO Schema for LocalBusiness and Reviews -->
<?php
if (!empty($recent_reviews)) {
    $schema_reviews = [];
    foreach ($recent_reviews as $rev) {
        $schema_reviews[] = [
            "@type" => "Review",
            "author" => [
                "@type" => "Person",
                "name" => isset($rev['name']) ? $rev['name'] : 'Customer'
            ],
            "datePublished" => isset($rev['posted_date']) ? date('Y-m-d', strtotime($rev['posted_date'])) : date('Y-m-d'),
            "reviewBody" => isset($rev['r_desc']) ? strip_tags($rev['r_desc']) : '',
            "reviewRating" => [
                "@type" => "Rating",
                "bestRating" => "5",
                "ratingValue" => isset($rev['stars']) ? (string)$rev['stars'] : "5"
            ]
        ];
    }
    
    $schema = [
        "@context" => "https://schema.org/",
        "@type" => "LocalBusiness",
        "name" => $companyName,
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => $ratingValue,
            "reviewCount" => $ratingCount,
            "bestRating" => "5"
        ],
        "review" => $schema_reviews
    ];
    
    echo '<script type="application/ld+json">' . "\n";
    echo json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";
    echo '</script>';
}
?>