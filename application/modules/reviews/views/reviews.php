<main class="main">
<link rel="stylesheet" href="<?= base_url('assets/css/reviews_modules.css?v=2') ?>">

    <div class="reviews-service-page reviews-feature-content-section reviews-page-shell">
        <div class="container">
            <?php
            $visible_reviews = $reviews->result();
            $page_avg = 0;
            if (!empty($visible_reviews)) {
                $page_avg = array_sum(array_map(function ($review) {
                    return (int) $review->stars;
                }, $visible_reviews)) / count($visible_reviews);
            }
            $average_rating = (isset($average_rating) && $average_rating > 0) ? $average_rating : $page_avg;
            $star_filter = isset($star_filter) ? (string) $star_filter : '';
            $rating_dist = isset($rating_dist) && is_array($rating_dist) ? $rating_dist : array(5 => 0, 4 => 0, 3 => 0, 2 => 0, 1 => 0);
            $stars_filled = (int) round($average_rating);
            ?>
            <?php if ($total_reviews > 0):
                $schema_reviews = array();
                foreach ($visible_reviews as $sr) {
                    $schema_reviews[] = array(
                        '@type'         => 'Review',
                        '@id'           => base_url('reviews/view/' . $sr->r_id) . '#review',
                        'author'        => array('@type' => 'Person', 'name' => $sr->name),
                        'datePublished' => date('Y-m-d', strtotime($sr->posted_date)),
                        'reviewBody'    => (string) $sr->r_desc,
                        'reviewRating'  => array('@type' => 'Rating', 'ratingValue' => (int) $sr->stars, 'bestRating' => '5', 'worstRating' => '1'),
                        'itemReviewed'  => array('@type' => 'LocalBusiness', '@id' => site_url('reviews') . '#business')
                    );
                }
                $schema_business = array(
                    '@type'            => array('LocalBusiness', 'MovingCompany'),
                    '@id'              => site_url('reviews') . '#business',
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
                        'ratingValue' => number_format($average_rating, 1, '.', ''),
                        'bestRating'  => '5',
                        'worstRating' => '1',
                        'reviewCount' => (int) $total_reviews
                    ),
                    'review'           => $schema_reviews
                );
                echo '<script type="application/ld+json">' . json_encode(array('@context' => 'https://schema.org', '@graph' => array($schema_business)), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
            endif; ?>
            <section class="reviews-page-hero">
                <span class="reviews-hero-blob reviews-hero-blob-a"></span>
                <span class="reviews-hero-blob reviews-hero-blob-b"></span>
                <div class="reviews-page-hero-copy">
                    <span class="reviews-eyebrow"><i class="bi bi-stars"></i> Real moves. Real stories.</span>
                    <h1>What our customers<br><em>remember most.</em></h1>
                    <p>Honest words from people who trusted VP Max with a new beginning.</p>
                    <div class="reviews-hero-actions">
                        <button class="reviews-write-button" data-bs-toggle="modal" data-bs-target="#reviewModal">
                            <i class="bi bi-pencil-square"></i> Share your experience
                        </button>
                        <?php if (!empty($visible_reviews)): ?>
                        <button class="reviews-skip-button" type="button" onclick="document.getElementById('reviewsListing')?.scrollIntoView({behavior:'smooth'})">
                            Browse reviews <i class="bi bi-arrow-down-short"></i>
                        </button>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="reviews-page-summary" aria-label="Review summary">
                    <span class="reviews-summary-label">Customer score</span>
                    <strong><?= number_format($average_rating, 1) ?><small>/5</small></strong>
                    <div class="reviews-summary-stars" aria-label="<?= number_format($average_rating, 1) ?> out of 5 stars">
                        <?php for ($i = 1; $i <= 5; $i++): ?><i class="bi bi-star-fill<?= $i > $stars_filled ? ' is-muted' : '' ?>"></i><?php endfor; ?>
                    </div>
                    <span class="reviews-summary-count"><?= number_format($total_reviews) ?> published reviews</span>

                    <?php if ($total_reviews > 0): ?>
                    <div class="reviews-distribution">
                        <span class="reviews-distribution-title">Rating breakdown</span>
                        <?php for ($rs = 5; $rs >= 1; $rs--):
                            $cnt = isset($rating_dist[$rs]) ? (int) $rating_dist[$rs] : 0;
                            $pct = ($total_reviews > 0) ? round(($cnt / $total_reviews) * 100) : 0;
                        ?>
                            <div class="reviews-dist-row">
                                <a class="reviews-dist-label" href="<?= site_url('reviews?star=' . $rs) ?>" title="See <?= $rs ?>-star reviews"><?= $rs ?><i class="bi bi-star-fill"></i></a>
                                <div class="reviews-dist-track"><span class="reviews-dist-fill" style="width:<?= $pct ?>%"></span></div>
                                <span class="reviews-dist-count"><?= $cnt ?></span>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </section>

            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show reviews-flash mt-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= $this->session->flashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show reviews-flash mt-4" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?= $this->session->flashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

            <div class="reviews-filter-bar" id="reviewsListing">
                <strong class="reviews-filter-title"><i class="bi bi-funnel"></i> Filter by rating</strong>
                <div class="reviews-filter-pills">
                    <a class="reviews-filter-pill<?= empty($star_filter) ? ' active' : '' ?>" href="<?= site_url('reviews') ?>">All reviews</a>
                    <?php for ($s = 5; $s >= 1; $s--): ?>
                    <a class="reviews-filter-pill<?= (int) $star_filter === $s ? ' active' : '' ?>" href="<?= site_url('reviews?star=' . $s) ?>">
                        <?= $s ?><i class="bi bi-star-fill"></i>
                    </a>
                    <?php endfor; ?>
                </div>
                <span class="reviews-filter-result"><?= count($visible_reviews) ?> of <?= number_format($total_reviews) ?> shown</span>
            </div>

            <div class="reviews-single-reviewr reviews-page-list pb-4">
                <div class="row">
                <?php
                if (empty($visible_reviews)) {
                    $empty_title = !empty($star_filter) ? 'No reviews at this rating' : 'No reviews yet';
                    $empty_desc = !empty($star_filter) ? 'Try another rating filter, or be the first to leave a review.' : 'Be the first to share your moving experience.';
                    echo "<div class='col-12'><div class='reviews-empty-state'><i class='bi bi-chat-square-heart'></i><h3>" . $empty_title . "</h3><p>" . $empty_desc . "</p>";
                    if (!empty($star_filter)) {
                        echo "<a href='" . site_url('reviews') . "' class='reviews-empty-link'><i class='bi bi-arrow-left'></i> Show all reviews</a>";
                    }
                    echo "</div></div>";
                } else {
                    $card_index = 0;
                    foreach ($visible_reviews as $r) {
                        $card_index++;
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
                        $delay = ($card_index % 3) * 0.09;
                ?>
                        <div class="col-lg-4 col-md-6 mb-4 reviews-col" style="animation-delay:<?= $delay ?>s">
                            <article class="reviews-single-review reviews-page-card h-100 reviews-card-enter">
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

                                    <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="<?= (int) $r->stars ?>" />
                                        <meta itemprop="bestRating" content="5" />
                                    </div>
                                    <p itemprop="reviewBody" class="reviews-card-quote mb-3">“<a href='<?= base_url('reviews/view/' . $r->r_id) ?>' target="_blank"><?= htmlspecialchars($r->r_desc) ?></a>”</p>

                                    <?php if (!empty($r->r_img)) {
                                        $images = explode(',', $r->r_img);
                                    ?>
                                        <div class="reviews-card-images d-flex flex-wrap gap-2 mt-2 mb-3">
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
                                    <?php } ?>

                                    <div class="reviews-review-author mt-auto pt-3 border-top">
                                        <span class="reviews-avatar review-avatar-bg-<?= $avatar_idx ?> reviews-avatar-initial"><?= $initials ?></span>
                                        <div class="reviews-author-main">
                                            <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                <span itemprop="name"><?= htmlspecialchars($r->name) ?></span>
                                            </strong>
                                            <small class="d-block reviews-email"><?= $em ?></small>
                                            <div class="d-flex align-items-center flex-wrap reviews-meta">
                                                <?php if (!empty($r->r_title)): ?>
                                                    <span class="me-3"><i class="bi bi-geo-alt-fill me-1"></i><?= htmlspecialchars($r->r_title) ?></span>
                                                <?php endif; ?>
                                                <span><i class="bi bi-calendar3 me-1"></i><?= date('M d, Y', strtotime($r->posted_date)) ?></span>
                                            </div>
                                            <meta itemprop="datePublished" content="<?= $pdate ?>">
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                <?php
                    }
                }
                ?>
                </div>
                <div class="mt-4 w-100 d-flex justify-content-center">
                    <div class="pagination">
                        <?php echo $this->pagination->create_links() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<style>
.reviews-review-content p a{text-decoration:none;color:#000}
</style>
</main>