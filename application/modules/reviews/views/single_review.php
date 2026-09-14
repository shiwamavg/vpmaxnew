<main class="main">
<link rel="stylesheet" href="<?= base_url('assets/css/reviews_modules.css') ?>">
<?php
$rev = $reviews->result();
$r = isset($rev[0]) ? $rev[0] : null;
?>
<?php if ($r):
$schema_business = array(
    '@type'            => array('LocalBusiness', 'MovingCompany'),
    '@id'              => base_url('reviews/view/' . $r->r_id) . '#business',
    'name'             => $company3,
    'url'              => site_url(),
    'image'            => base_url('assets/images/logo/logo.webp'),
    'telephone'        => $phone,
    'email'            => $mail,
    'address'          => array(
        '@type'           => 'PostalAddress',
        'streetAddress'   => $address1,
        'addressLocality' => $addressRegion,
        'postalCode'      => $postalCode,
        'addressRegion'   => $companystate,
        'addressCountry'  => 'IN'
    ),
    'aggregateRating'  => array(
        '@type'       => 'AggregateRating',
        'ratingValue' => number_format((int) $r->stars, 1, '.', ''),
        'bestRating'  => '5',
        'worstRating' => '1',
        'reviewCount' => 1
    ),
    'review'            => array(
        '@type'        => 'Review',
        '@id'          => base_url('reviews/view/' . $r->r_id) . '#review',
        'author'       => array('@type' => 'Person', 'name' => $r->name),
        'datePublished' => date('Y-m-d', strtotime($r->posted_date)),
        'reviewBody'   => (string) $r->r_desc,
        'reviewRating' => array('@type' => 'Rating', 'ratingValue' => (int) $r->stars, 'bestRating' => '5', 'worstRating' => '1'),
        'itemReviewed' => array('@type' => 'LocalBusiness', '@id' => base_url('reviews/view/' . $r->r_id) . '#business')
    )
);
echo '<script type="application/ld+json">' . json_encode(array('@context' => 'https://schema.org', '@graph' => array($schema_business)), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
endif; ?>
<?php if (!$r): ?>
<div class="reviews-page-shell">
    <div class="container">
        <div class="reviews-empty-state">
            <i class="bi bi-chat-square-heart"></i>
            <h3>Review not found</h3>
            <p>The review you are looking for is unavailable.</p>
            <a href="<?= site_url('reviews') ?>" class="reviews-empty-link"><i class="bi bi-arrow-left"></i> Back to reviews</a>
        </div>
    </div>
</div>
<?php else:
$pdate = explode(" ", $r->posted_date)[0];
$size = max(0, strlen(explode("@", $r->email)[0]) - 4);
$lem = substr($r->email, -12);
$fem = substr($r->email, 0, 4);
$st = str_repeat("*", $size);
$em = $fem . $st . $lem;
$name_parts = preg_split('/\s+/', trim($r->name));
$initials = '';
foreach (array_slice($name_parts, 0, 2) as $np) {
    if ($np !== '') $initials .= strtoupper(mb_substr($np, 0, 1));
}
if ($initials === '') $initials = '?';
$avatar_idx = ord(mb_substr($r->name, 0, 1)) % 5;
?>
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Customer Review',
    'bc_desc' => 'A review shared with ' . htmlspecialchars($company3),
    'breadcrumbs' => [
        ['name' => 'Reviews', 'url' => site_url('reviews')],
        ['name' => 'Review by ' . htmlspecialchars($r->name)]
    ]
]);
?>

<div class="reviews-service-page reviews-feature-content-section reviews-page-shell">
    <div class="container">
        <section class="reviews-page-hero">
            <span class="reviews-hero-blob reviews-hero-blob-a"></span>
            <span class="reviews-hero-blob reviews-hero-blob-b"></span>
            <div class="reviews-page-hero-copy">
                <span class="reviews-eyebrow"><i class="bi bi-patch-check-fill"></i> Verified customer review</span>
                <h1><?= htmlspecialchars($r->name) ?>'s<br><em>moving experience.</em></h1>
                <p><?= htmlspecialchars($r->r_title ?: 'Customer') ?>, India &bull;
                   Shared <?= date('M d, Y', strtotime($r->posted_date)) ?>.</p>
                <div class="reviews-hero-actions">
                    <button class="reviews-write-button" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square"></i> Share your experience
                    </button>
                    <a href="<?= site_url('reviews') ?>" class="reviews-skip-button reviews-back-link">
                        <i class="bi bi-arrow-left"></i> View all reviews
                    </a>
                </div>
            </div>
            <div class="reviews-page-summary" aria-label="<?= (int) $r->stars ?> out of 5 stars">
                <span class="reviews-summary-label">Rated by customer</span>
                <strong><?= (int) $r->stars ?><small>/5</small></strong>
                <div class="reviews-summary-stars" aria-label="<?= (int) $r->stars ?> out of 5 stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?><i class="bi bi-star-fill<?= $i > (int) $r->stars ? ' is-muted' : '' ?>"></i><?php endfor; ?>
                </div>
                <span class="reviews-summary-count">Posted <?= date('M d, Y', strtotime($r->posted_date)) ?></span>
            </div>
        </section>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <article class="reviews-single-review reviews-page-card reviews-single-card h-100">
                    <span class="reviews-card-accent" aria-hidden="true"></span>
                    <div class="reviews-card-topline">
                        <div class="reviews-review-rating" aria-label="<?= (int) $r->stars ?> out of 5 stars">
                            <?php for ($i = 1; $i <= 5; $i++): ?><i class="bi bi-star-fill<?= $i > (int) $r->stars ? ' is-muted' : '' ?>"></i><?php endfor; ?>
                        </div>
                        <span class="reviews-card-verified"><i class="bi bi-patch-check-fill"></i> Verified</span>
                    </div>

                    <div class="reviews-review-content d-flex flex-column" itemprop="review" itemscope itemtype="https://schema.org/Review">
                        <meta itemprop="name" content="<?= htmlspecialchars($r->r_title ?: 'Customer review') ?>" />
                        <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                            <meta itemprop="name" content="<?= htmlspecialchars($company3) ?>" />
                        </div>

                        <span class="d-none reviews-rating-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating"><span itemprop="ratingValue"><?= $r->stars ?></span> stars</span>
                        <p itemprop="reviewBody" class="reviews-card-quote mb-3 reviews-single-quote">“<?= htmlspecialchars($r->r_desc) ?>”</p>

                        <?php if (!empty($r->r_img)) {
                            $images = explode(',', $r->r_img);
                        ?>
                            <div class="reviews-card-images d-flex flex-wrap gap-2 mt-2 mb-4">
                                <?php foreach ($images as $img) {
                                    if (trim($img) !== '') {
                                ?>
                                    <div class="reviews-image-thumb">
                                        <img loading="lazy" src="<?= base_url(trim($img)) ?>" alt="Review image" class="img-thumbnail shadow-sm review-img-clickable review-img-clickable-custom" onclick="openImageModal(this.src)">
                                    </div>
                                <?php } } ?>
                            </div>
                        <?php } ?>

                        <?php if (!empty($r->admin_reply)) { ?>
                            <div class="admin-reply-box mt-2 mb-3 p-3 rounded admin-reply-box-custom">
                                <h6 class="mb-1 admin-reply-name"><i class="bi bi-person-badge me-1"></i><?= htmlspecialchars($company3) ?><span class="admin-reply-flag">Company response</span></h6>
                                <p class="mb-0 admin-reply-text"><?= nl2br(htmlspecialchars($r->admin_reply)) ?></p>
                            </div>
                        <?php } else {
                            if ((int) $r->stars === 5) {
                                $reply = 'Thank you, <b>' . ucfirst(htmlspecialchars($r->name)) . '</b>, for your exceptional review. Your valuable feedback is a blessing to our business.';
                            } elseif ((int) $r->stars === 4) {
                                $reply = 'Hello <b>' . ucfirst(htmlspecialchars($r->name)) . '</b>, thank you for giving our business a 4-star review. We appreciate your feedback, and we will strive to enhance our services to serve you even better in the future.';
                            } elseif ((int) $r->stars === 3) {
                                $reply = 'Hi <b>' . ucfirst(htmlspecialchars($r->name)) . '</b>, our team is dedicated to improving and aiming for a higher rating from you. We appreciate your valuable review and thank you for taking the time to share your thoughts with us!';
                            } elseif ((int) $r->stars === 2) {
                                $reply = 'Hello <b>' . ucfirst(htmlspecialchars($r->name)) . '</b>, your review challenges us to enhance our services. We value your feedback, and it provides valuable guidance to identify and address areas for improvement. Thank you.';
                            } elseif ((int) $r->stars === 1) {
                                $reply = 'Apologies, <b>' . ucfirst(htmlspecialchars($r->name)) . '</b>, for the unfortunate experience you encountered. We take this matter seriously and will thoroughly investigate to implement appropriate solutions. Thank you for bringing this to our attention.';
                            }
                            if (isset($reply)) { ?>
                            <div class="admin-reply-box mt-2 mb-3 p-3 rounded admin-reply-box-custom">
                                <h6 class="mb-1 admin-reply-name"><i class="bi bi-person-badge me-1"></i><?= htmlspecialchars($company3) ?><span class="admin-reply-flag">Company response</span></h6>
                                <p class="mb-0 admin-reply-text"><?= $reply ?></p>
                            </div>
                            <?php }
                        } ?>

                        <div class="reviews-review-author mt-auto pt-3 border-top">
                            <span class="reviews-avatar review-avatar-bg-<?= $avatar_idx ?> reviews-avatar-initial"><?= $initials ?></span>
                            <div class="reviews-author-main">
                                <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <span itemprop="name"><?= htmlspecialchars($r->name) ?></span>
                                </strong>
                                <small class="d-block reviews-email"><?= $em ?></small>
                                <div class="d-flex align-items-center flex-wrap reviews-meta">
                                    <?php if (!empty($r->r_title)): ?>
                                        <span><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($r->r_title) ?></span>
                                    <?php endif; ?>
                                    <span><i class="bi bi-calendar3 me-1"></i><?= date('M d, Y', strtotime($r->posted_date)) ?></span>
                                </div>
                                <meta itemprop="datePublished" content="<?= $pdate ?>">
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Full Screen Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 pb-0 justify-content-end">
        <button type="button" class="btn-close bg-white rounded-circle p-2 review-modal-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img loading="lazy" id="fullImage" src="" class="img-fluid rounded shadow-lg review-modal-img">
      </div>
    </div>
  </div>
</div>

<script>
function openImageModal(src) {
    document.getElementById('fullImage').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
}
</script>

</main>