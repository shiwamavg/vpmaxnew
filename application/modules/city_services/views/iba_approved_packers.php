<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<section class="home-page-slider" itemscope itemtype="https://schema.org/WPHeader">
    <div class="home-page-slider-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 hero-text-col text-start pb-4">
                    <!-- ISO Badge -->
                    <div class="iso-badge d-inline-flex align-items-center mb-4 rounded-3 p-1 pe-3">
                        <div
                            class="iso-icon-wrapper rounded text-white d-flex align-items-center justify-content-center me-3">
                            <i class="bi bi-shield-check fs-5"></i>
                        </div>
                        <span class="text-white fw-medium lh-sm iso-badge-text">ISO Certified & Government
                            Authorised<br>Packers and Movers</span>
                    </div>

                    <div class="hero-text-box ms-0">
                        <h1 class="hero-title" itemprop="name">
                            IBA Approved Packers and Movers in <?= isset($city) ? $city : 'Indore' ?>
                        </h1>
                        <p class="hero-lead mt-3" itemprop="description">
                            Looking for verified and trusted relocation services in
                            <?= isset($city) ? $city : 'Indore' ?>? Get 100% safe, secure, and insured moving solutions
                            with our IBA approved company.
                        </p>
                    </div>
                    <!-- Breadcrumb -->
                    <div class="row">
                        <div class="col-12 pb-3">
                            <nav aria-label="breadcrumb">
                                <ol class="pm-city-breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                        <a itemprop="item" href="<?= site_url() ?>" class="pm-bc-link">
                                            <span itemprop="name">Home</span>
                                        </a>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="pm-bc-sep">›</li>
                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                        <span itemprop="name" class="pm-bc-current" aria-current="page">IBA Approved
                                            Packers</span>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                </ol>
                            </nav>
                        </div>
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
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <div class="text-white fw-bold lh-1 google-rating-val">
                                    <?= isset($ratingValue) ? $ratingValue : '4.8' ?>/5 Rating
                                </div>
                                <div class="text-white-50 mt-1 google-rating-text text-white">Based on <a
                                        href="<?= site_url('reviews') ?>"><?= isset($ratingCount) ? $ratingCount : '1200' ?>+</a>
                                    Reviews</div>
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
                                    <?= isset($ratingCount) ? $ratingCount : '1200' ?>+
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
            <?php $this->load->view('contacts/quoteform', ['selected_service' => 'IBA Approved Packers']) ?>
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

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-lg-12 text-center mt-4 mt-lg-0">
            <img loading="lazy" src="<?= base_url() ?>assets/images/cityservice/iba.webp"
                alt="IBA Approved Packers and Movers in <?= $city ?>" loading="lazy" class="img-fluid rounded shadow">
        </div>
        <div class="col-lg-12 mt-4">
            <h2 class="fw-bold mb-3 red-color">IBA Approved Packers and Movers in <?= $city ?></h2>
            <p>Planning a move in <?= $city ?>? Here's what people usually worry about first: hidden charges, damaged
                furniture, delayed trucks, and movers who stop answering calls after booking. That's exactly why
                customers look for <strong>IBA Approved Packers and Movers in <?= $city ?></strong> instead of random
                local transport options.</p>
            <p>VP Max Packers and Movers has been offering shifting work <strong>since 2003 with IBA Approved, ISO
                    Certified</strong>, Government Authorized moving support across India. Our moving company manages
                household shifting, office relocation, vehicle transport, storage support, international moves with
                trained packing staff and organized coordination teams. In places like <?= $city ?>, where traffic
                delays, society permissions, lift timing restrictions, monsoon shifting challenges create unnecessary
                stress, proper planning matters more than people think.</p>
            <p>Need quick <b>shifting assistance in <?= $city ?></b>? Call <a href="tel:+91 <?= $phone ?>"
                    class="text-danger">
                    <?= $phone ?>
                </a> and get your moving estimate within minutes.</p>
        </div>

    </div>
</div>

<?php $this->load->view('packers_movers/city_page_design/city_map'); ?>
<?php $this->load->view('packers_movers/city_page_design/company_details.php'); ?>
<?php include 'city_service.php';
$this->load->view('reviews/review_widget');
$this->load->view('home/credentials');
$this->load->view('home/certificate');
?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="fw-bold mb-3 red-color">Why choose VP Max Packers and Movers for your <?= $city ?> move?</h3>
            <p>People looking for <strong>Best IBA Approved Packers and Movers <?= $city ?></strong> generally compare
                trust first, pricing second.</p>
            <ul class="ms-4 mb-3">
                <li>IBA Approved and ISO Certified relocation support</li>
                <li>23+ years of relocation experience since 2003</li>
                <li>Government Authorized moving company</li>
                <li>Trained movers and dedicated logistics coordinators</li>
                <li>Transit insurance support for valuable goods</li>
                <li>GPS-enabled transport tracking assistance</li>
            </ul>
            <p>Recently, our team helped a family relocate during heavy rain conditions after their apartment possession
                date changed suddenly. The move involved society timing restrictions, basement parking access, and
                fragile furniture handling. Everything had to be coordinated properly. It worked because preparation
                happened before packing started.</p>
            <p>That preparation changes everything.</p>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="text-center fw-bold text-danger mb-4">Our Process</h3>
            <p class="text-center text-muted mb-5">We follow a streamlined, efficient, and professional process for your
                safe move.</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mb-3 d-flex justify-content-center align-items-center bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-box-seam fs-1"></i>
                    </div>
                    <h4>1. Packing</h4>
                    <p class="text-muted">Our expert team uses high-quality materials to ensure your items are packed
                        securely.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mb-3 d-flex justify-content-center align-items-center bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-box-arrow-up fs-1"></i>
                    </div>
                    <h4>2. Loading</h4>
                    <p class="text-muted">Careful and organized loading to prevent any damage during transportation.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mb-3 d-flex justify-content-center align-items-center bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-truck fs-1"></i>
                    </div>
                    <h4>3. Transportation</h4>
                    <p class="text-muted">Fast and secure transportation across cities or states, ensuring complete
                        safety.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mb-3 d-flex justify-content-center align-items-center bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                        style="width: 70px; height: 70px;">
                        <i class="bi bi-box-arrow-down fs-1"></i>
                    </div>
                    <h4>4. Unloading & Delivery</h4>
                    <p class="text-muted">Careful unloading and proper placement of your belongings at your destination.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <div class="table-responsive">
                <h4 class="text-center mb-3">IBA Approved Packers and Movers Charges Chart</h4>
                <table class="table table-bordered table-striped text-center align-middle shadow-sm">
                    <thead class="table-primary">
                        <tr>
                            <th>IBA Approved Shifting Type</th>
                            <th>Loading & Unloading</th>
                            <th>Manpower Required</th>
                            <th>Packing Material Cost</th>
                            <th>Transportation Charges</th>
                            <th>Estimated Total Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">1 BHK</td>
                            <td>₹ 2,500 - ₹ 4,000</td>
                            <td>2-3 Men</td>
                            <td>₹ 2,000 - ₹ 5,000</td>
                            <td>₹ 3,500 - ₹ 5,500</td>
                            <td>₹ 6,000 - ₹ 14,500</td>
                        </tr>
                        <tr>
                            <td class="text-start">2 BHK</td>
                            <td>₹ 3,500 - ₹ 5,500</td>
                            <td>4-5 Men</td>
                            <td>₹ 3,000 - ₹ 7,500</td>
                            <td>₹ 4,500 - ₹ 7,500</td>
                            <td>₹ 8,500 - ₹ 20,500</td>
                        </tr>
                        <tr>
                            <td class="text-start">3 BHK</td>
                            <td>₹ 4,500 - ₹ 7,500</td>
                            <td>5-6 Men</td>
                            <td>₹ 4,500 - ₹ 10,500</td>
                            <td>₹ 6,000 - ₹ 10,500</td>
                            <td>₹ 12,000 - ₹ 28,500</td>
                        </tr>
                        <tr>
                            <td class="text-start">4 or 5 BHK</td>
                            <td>₹ 6,000 - ₹ 10,000</td>
                            <td>7-8 Men</td>
                            <td>₹ 6,500 - ₹ 14,500</td>
                            <td>₹ 8,500 - ₹ 15,500</td>
                            <td>₹ 18,500 - ₹ 40,000</td>
                        </tr>
                        <tr>
                            <td class="text-start">Villa / Bungalow</td>
                            <td>₹ 8,000 - ₹ 14,000</td>
                            <td>8-10 Men</td>
                            <td>₹ 8,500 - ₹ 18,500</td>
                            <td>₹ 12,000 - ₹ 22,500</td>
                            <td>₹ 28,500 - ₹ 55,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img loading="lazy" src="<?= base_url() ?>assets/images/services/car-transportation-services.webp"
                        alt="Shifting Process in <?= $city ?>" loading="lazy" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold red-color mb-3">How our moving process work?</h3>
                    <ol>
                        <li>Requirement discussion and moving assessment</li>
                        <li>Quotation sharing with service planning</li>
                        <li>Booking confirmation and schedule coordination</li>
                        <li>Packing using proper protective materials</li>
                        <li>Structured loading and transport arrangement</li>
                        <li>Safe unloading and placement at destination</li>
                    </ol>

                    <h5 class="fw-bold text-dark mt-4">Packing materials we use</h5>
                    <ul class="ms-4 mb-3">
                        <li>Corrugated moving cartons</li>
                        <li>Bubble wrap for fragile items</li>
                        <li>Foam sheets and edge guards</li>
                        <li>Stretch wrapping rolls</li>
                        <li>Waterproof furniture covers</li>
                        <li>Heavy-duty packing tape</li>
                    </ul>
                    <p>During <?= $city ?> monsoon season, extra wrapping becomes necessary for wooden furniture and
                        electronics. Small detail, big difference.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="text-center fw-bold text-danger mb-4">What do customers say about our <?= $city ?> moving
                service?</h3>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="fw-bold text-danger d-block mb-2">Ravi Sharma, Household Shifting</span>
                            <q class="d-block mb-0 text-muted">Moved in September 2025. The team arrived on time and
                                handled our furniture calmly. No rushing during unloading, which honestly made the
                                experience feel safer.</q>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="fw-bold text-danger d-block mb-2">Neha Verma, Office Relocation</span>
                            <q class="d-block mb-0 text-muted">We shifted our office setup with systems and files. Work
                                resumed next morning because packing and placement were planned properly.</q>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <span class="fw-bold text-danger d-block mb-2">Amit Jain, Interstate Shifting</span>
                            <q class="d-block mb-0 text-muted">My household goods reached safely with regular updates
                                during transit. Communication stayed clear throughout the move.</q>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold mb-4 text-center" style="color:#ee553b;">Frequently asked questions about shifting in
                <?= $city ?>
            </h3>
            <p class="text-center text-muted mb-4">Answers to the most common queries from our customers</p>
            <?php
            $faqs = [
                [
                    'question' => 'How long does a home shift take in ' . $city . '?',
                    'answer' => 'Most local shifting jobs are completed within the same day depending on goods volume and traffic conditions.'
                ],
                [
                    'question' => 'Do you provide transit insurance for household goods?',
                    'answer' => 'Yes, transit insurance support is available for safer household and office relocation.'
                ],
                [
                    'question' => 'Can I book shifting for Sundays or public holidays?',
                    'answer' => 'Yes, bookings are available based on schedule availability and prior confirmation.'
                ],
                [
                    'question' => 'What packing materials do you use?',
                    'answer' => 'Cartons, foam sheets, bubble wrap, furniture covers, and protective wrapping materials are commonly used.'
                ],
                [
                    'question' => 'Are your charges inclusive of GST?',
                    'answer' => 'GST details are discussed clearly during quotation sharing before booking confirmation.'
                ],
                [
                    'question' => 'What happens if something gets damaged during shifting?',
                    'answer' => 'The support team reviews the situation immediately and insurance coverage applies where approved.'
                ]
            ];
            ?>
            <div class="accordion shadow-sm mb-4" id="faqAccordion">
                <?php foreach ($faqs as $index => $faq): ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?= $index ?>">
                            <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?>" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>"
                                aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                aria-controls="collapse<?= $index ?>">
                                <strong><?= $faq['question'] ?></strong>
                            </button>
                        </h2>
                        <div id="collapse<?= $index ?>"
                            class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                            aria-labelledby="heading<?= $index ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?= $faq['answer'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- SEO Friendly FAQ Schema -->
            <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "FAQPage",
              "mainEntity": [
                <?php
                $schema_entities = [];
                foreach ($faqs as $faq) {
                    $schema_entities[] = '{
                      "@type": "Question",
                      "name": "' . htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') . '",
                      "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "' . htmlspecialchars(strip_tags($faq['answer']), ENT_QUOTES, 'UTF-8') . '"
                      }
                    }';
                }
                echo implode(',', $schema_entities);
                ?>
              ]
            }
            </script>
        </div>

        <div class="col-lg-12 mt-4 text-center">
            <p>Moving in <?= $city ?>? Get a free, no-obligation quote in 60 seconds. Call <a
                    href="tel:+91 <?= $phone ?>" class="text-danger fw-bold">
                    <?= $phone ?>
                </a> and plan your move with experienced moving professionals
                who actually understand relocation work.</p>
        </div>

    </div>
</div>