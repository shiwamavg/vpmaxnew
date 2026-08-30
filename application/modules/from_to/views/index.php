<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="<?= base_url("assets/css/from_to.css") ?>">

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
                            Packers and Movers from <?= $from_city ?> to <?= $to_city ?>
                        </h1>
                        <p class="hero-lead mt-3" itemprop="description">
                            Looking for trusted relocation services from <?= $from_city ?> to <?= $to_city ?>?
                            Get secure, affordable, and seamless moving solutions from the leading relocation experts.
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
                                        <span itemprop="name" class="pm-bc-current" aria-current="page">From
                                            <?= $from_city ?> to <?= $to_city ?></span>
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
            <?php $this->load->view('contacts/quoteform', ['selected_service' => 'Home Relocation', 'city' => $from_city, 'to_city' => $to_city]) ?>
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
<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-3">
            <iframe
                src="https://maps.google.com/maps?saddr=<?= urlencode($from_city) ?>&daddr=<?= urlencode($to_city) ?>&output=embed"
                width="100%" height="450" allowfullscreen="" loading="lazy" frameborder="0"
                title="Map route from <?= htmlspecialchars($from_city) ?> to <?= htmlspecialchars($to_city) ?>"
                aria-label="Route Map" class="rounded-3 shadow-sm pm-map-iframe w-100"></iframe>
        </div>
        <div class="col-lg-6">
            <h2><?= $from_city ?> to <?= $to_city ?> Packers and Movers</h2>
            <p>Moving from one city to another is rarely a single-day thought. It usually starts weeks earlier,
                sometimes quietly, sometimes suddenly. A job offer. A family decision. A business expansion. Or simply
                the need for a fresh start. And somewhere in the middle of all that planning, one question keeps
                returning: who can really handle the move without creating more problems?</p>
            <p>That is why people searching for Packers and Movers from <?= $from_city ?> to
                <?= $to_city ?> are not just comparing prices. They are comparing trust, experience, and the ability to
                manage long-distance movement without chaos. This is where VP Max Packers and Movers has steadily built
                its reputation as a dependable name in intercity packers and movers services.
            </p>
            <p>Intercity relocation is not forgiving. Once the truck leaves the city, there are no second chances.
                Packing must be right the first time. Loading must be balanced. Route planning must be realistic. And
                communication must stay clear until the last item is unloaded.</p>

        </div>
    </div>
</div>
<?php $this->load->view('packers_movers/city_page_design/company_details.php'); ?>

<?php $this->load->view('packers_movers/city_page_design/city_map'); ?>
<?php include 'city_service.php';
$this->load->view('reviews/review_widget');
$this->load->view('home/credentials');
$this->load->view('home/certificate');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 from_to_content">
            <h3 class="common-heading mt-5">Why City-to-City Moving Is a Different Challenge Altogether</h3>

            <p>
                Many people assume that shifting from <span><?= $from_city ?> to <?= $to_city ?></span> is just a longer
                version of local moving. In reality, it’s a completely different operation.
            </p>

            <p>Long-distance relocation involves:</p>
            <ul>
                <li>Continuous road vibration for hours or days</li>
                <li>Weather changes across regions</li>
                <li>Loading pressure inside the vehicle</li>
                <li>Delays caused by traffic, tolls, or route diversions</li>
                <li>Greater risk to fragile and high-value items</li>
            </ul>

            <p>
                Professional movers from <span><?= $from_city ?> to <?= $to_city ?></span> work with these realities in
                mind. That’s why VP Max Packers and Movers focuses on preparation rather than speed alone. Their
                approach is slow where it needs to be, fast where it matters, and controlled throughout the journey.
            </p>

            <h4 class="common-heading">Built for Intercity Relocation</h4>

            <p>
                We have been successfully providing intercity relocation services of all shapes and sizes for years,
                from small apartment moves to large corporate relocation projects. The one thing that separates us from
                our competitors is not our "flashy" promises but rather our ability to provide our clients with a
                consistent and high-quality service.
            </p>

            <p>
                People often describe their experience as “calm.” That may sound small, but during a long-distance move,
                calm matters more than anything else.
            </p>

            <ul>
                <li>Verified packers and movers for long distance</li>
                <li>Clear coordination for door-to-door movers from <span><?= $from_city ?> to <?= $to_city ?></span>
                </li>
                <li>Practical packing methods suited for Indian roads</li>
                <li>Experienced drivers familiar with long routes</li>
                <li>Honest discussion of timelines and costs</li>
            </ul>

            <p>
                This is why they are frequently recommended as trusted packers and movers from <span><?= $from_city ?>
                    to <?= $to_city ?></span>.
            </p>

            <h3 class="common-heading">Intercity Moving Services from <?= $from_city ?> to <?= $to_city ?></h3>

            <h4 class="common-heading">1. Home Shifting from <?= $from_city ?> to <?= $to_city ?></h4>
            <p>
                Stress is at its highest when families relocate their entire household. When moving, people move their
                kitchens, wardrobes, bookcases, appliances, etc., but they want to ensure that these items do not get
                rushed during the move.
            </p>

            <p>
                Our moving company provides safe relocation of family households from <?= $from_city ?> to
                <?= $to_city ?> by dividing relocation into smaller tasks.
            </p>

            <ul>
                <li>Packing one room at a time</li>
                <li>Separating fragile items early</li>
                <li>Reinforcing cartons meant for long travel</li>
                <li>Wrapping furniture with protective layers</li>
                <li>Labelling boxes clearly for destination placement</li>
            </ul>

            <p>
                This method reduces confusion during unloading and makes unpacking far easier.
            </p>

            <h4 class="common-heading">2. Apartment Shifting from <?= $from_city ?> to <?= $to_city ?></h4>
            <p>
                Apartments bring extra coordination, lift access, society rules, and parking restrictions. These details
                are planned in advance so there are no last-minute issues.
            </p>

            <p>
                The team manages:
            </p>

            <ul>
                <li>Lift-safe furniture handling</li>
                <li>Timed loading schedules</li>
                <li>Damage prevention in common areas</li>
            </ul>

            <p>
                For families moving between apartment complexes, this makes apartment shifting from <?= $from_city ?> to
                <?= $to_city ?> smoother and more predictable.
            </p>

            <h4 class="common-heading">3. Office Relocation from <?= $from_city ?> to <?= $to_city ?></h4>
            <p>
                Business relocation cannot afford delays.
            </p>

            <ul>
                <li>Dismantling and reassembling workstations</li>
                <li>Packing computers, printers, and servers securely</li>
                <li>Organising files and documents</li>
                <li>Coordinated delivery to avoid operational downtime</li>
            </ul>

            <p>
                This makes commercial relocation from <?= $from_city ?> to <?= $to_city ?> manageable even for growing
                companies.
            </p>

            <h4 class="common-heading">4. Car Transport from <?= $from_city ?> to <?= $to_city ?></h4>
            <p>
                Vehicle transport over long distances requires more than just driving the car.
            </p>

            <p>
                Car transport from <?= $from_city ?> to <?= $to_city ?> includes:
            </p>

            <ul>
                <li>Pre-transport inspection</li>
                <li>Protective wrapping for mirrors and corners</li>
                <li>Wheel stabilisation</li>
            </ul>

            <p>
                Vehicles are delivered clean, stable, and damage-free.
            </p>

            <h4 class="common-heading">5. Bike Transport from <?= $from_city ?> to <?= $to_city ?></h4>
            <p>
                Two-wheelers are sensitive to imbalance and surface pressure. Our moving company treats them
                accordingly.
            </p>

            <p>
                Bike transport from <?= $from_city ?> to <?= $to_city ?> involves:
            </p>

            <ul>
                <li>Foam padding on key contact points</li>
                <li>Bubble wrapping for panels</li>
                <li>Strong strapping to prevent tilt</li>
                <li>Dedicated positioning inside the vehicle</li>
            </ul>

            <p>
                This includes two-wheelers shifting from <?= $from_city ?> to <?= $to_city ?>, scooters, and sports
                bikes.
            </p>

            <h4 class="common-heading">Packing Materials Used for Long-Distance Relocation</h4>

            <p>
                Long routes demand stronger packing. Materials are chosen based on distance, item type, and weight.
            </p>

            <p>Commonly used materials include:</p>
            <ul>
                <li>Multi-layer corrugated cartons</li>
                <li>Heavy bubble wrap</li>
                <li>Stretch film for moisture resistance</li>
                <li>Thermocol sheets for shock absorption</li>
                <li>Corner guards for furniture</li>
                <li>Cloth blankets for wooden items</li>
            </ul>

            <p>
                This level of preparation is what keeps household packing and moving from <span><?= $from_city ?> to
                    <?= $to_city ?></span> safe even on rough roads.
            </p>

            <p>
                Costs depend on distance, volume, packing complexity, and vehicle choice. General estimates are:
            </p>

            <ul>
                <li>Household Shifting: ₹22-₹35/km</li>
                <li>Bike Transport: ₹1500-₹4500 (depends on distance)</li>
                <li>Car Transport: ₹6000-₹15000</li>
            </ul>

            <ul>
                <li>Experienced movers for long-distance shifting</li>
                <li>Strong reputation as best packers and movers from <span><?= $from_city ?> to <?= $to_city ?></span>
                </li>
                <li>Clear communication throughout transit</li>
                <li>Balanced pricing without unrealistic promises</li>
                <li>Consistent service quality across routes</li>
            </ul>

            <!-- Pricing Table Section -->
            <section class="price-list-section my-5" itemscope itemtype="https://schema.org/Service">
                <meta itemprop="name" content="Relocation Services from <?= $from_city ?> to <?= $to_city ?>">
                <meta itemprop="serviceType" content="Intercity Household Shifting Service">

                <h3 class="common-heading mt-4 text-center">Estimated Shifting Rate Chart: <?= $from_city ?> to
                    <?= $to_city ?>
                </h3>
                <p class="text-center text-muted mb-4">The final cost depends on the exact distance, volume of goods,
                    and type of service. Below is an approximate intercity estimate.</p>

                <div class="table-responsive shadow-sm rounded">
                    <table class="table table-bordered table-hover table-striped mb-0 text-center align-middle">
                        <thead class="table-primary border-primary">
                            <tr>
                                <th scope="col" class="py-3">Property Size</th>
                                <th scope="col" class="py-3">Packing Cost</th>
                                <th scope="col" class="py-3">Transport Cost</th>
                                <th scope="col" class="py-3">Labour & Manpower</th>
                                <th scope="col" class="py-3 text-nowrap">Approx. Total Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="fw-semibold">1 BHK</th>
                                <td>₹2,500 - 4,500</td>
                                <td>₹4,500 - 8,000</td>
                                <td>₹2,500 (2-3 Men)</td>
                                <td class="fw-bold text-success">₹9,500 - 15,000</td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-semibold">2 BHK</th>
                                <td>₹3,500 - 6,500</td>
                                <td>₹6,000 - 12,000</td>
                                <td>₹3,500 (3-4 Men)</td>
                                <td class="fw-bold text-success">₹13,000 - 22,000</td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-semibold">3 BHK</th>
                                <td>₹5,000 - 8,500</td>
                                <td>₹9,000 - 16,000</td>
                                <td>₹5,000 (4-6 Men)</td>
                                <td class="fw-bold text-success">₹19,000 - 29,500</td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-semibold">4 BHK / Villa</th>
                                <td>₹7,500 - 12,000</td>
                                <td>₹14,000 - 25,000</td>
                                <td>₹7,500 (6-8 Men)</td>
                                <td class="fw-bold text-success">₹29,000 - 44,500</td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-semibold">Car Transport</th>
                                <td>₹1,500 - 3,000</td>
                                <td>₹6,000 - 15,000</td>
                                <td>₹1,000 (Loading)</td>
                                <td class="fw-bold text-success">₹8,500 - 19,000</td>
                            </tr>
                            <tr>
                                <th scope="row" class="fw-semibold">Bike Transport</th>
                                <td>₹800 - 1,500</td>
                                <td>₹1,500 - 4,500</td>
                                <td>₹500 (Loading)</td>
                                <td class="fw-bold text-success">₹2,800 - 6,500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="faq-section mt-5" itemscope itemtype="https://schema.org/FAQPage">
                <h5 class="faq-title mb-4">Frequently Asked Questions (FAQs)</h5>

                <?php
                $faqs = [
                    [
                        "question" => "What is the cost of Packers and Movers from $from_city to $to_city?",
                        "answer" => "The cost of moving depends on distance, volume of goods, and type of service. If there is a problem with unnecessary expenses, VP Max Packers and Movers will help you keep your costs down and transparent."
                    ],
                    [
                        "question" => "How long will it take for the relocation from $from_city to $to_city?",
                        "answer" => "Typically, it depends on distance, and from $from_city to $to_city the goods will typically take. Before the moves we give a clear timeline."
                    ],
                    [
                        "question" => "Do you provide insurance for your goods?",
                        "answer" => "Yes, we provide comprehensive insurance for losses and damages while moving."
                    ],
                    [
                        "question" => "Can you shift vehicles along with household items?",
                        "answer" => "Absolutely! Not only do we provide safe transport of the car/bike, we will transport the car/bike along with home shifting!"
                    ],
                    [
                        "question" => "Why should I trust VP Max Packers and Movers?",
                        "answer" => "Because we are trusted as the Top Packers and Movers from $from_city to $to_city, and will move you safe, cheap and on time!"
                    ]
                ];
                ?>

                <div class="accordion" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item border-0 border-bottom" itemscope itemprop="mainEntity"
                            itemtype="https://schema.org/Question">
                            <h2 class="accordion-header m-0" itemprop="name">
                                <button class="accordion-button collapsed bg-transparent shadow-none px-0 fw-bold"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq<?= $index ?>"
                                    aria-expanded="false" aria-controls="collapseFaq<?= $index ?>"
                                    style="color: #333; font-size: 16px;">
                                    Q<?= $index + 1 ?>: <?= $faq['question'] ?>
                                </button>
                            </h2>
                            <div id="collapseFaq<?= $index ?>" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion" itemscope itemprop="acceptedAnswer"
                                itemtype="https://schema.org/Answer">
                                <div class="accordion-body px-0 pt-0 text-dark" itemprop="text">
                                    <p class="mb-3"><?= $faq['answer'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <h5 class="common-heading">Conclusion</h5>
            <p>Choosing the correct moving company during intercity relocation is essential for how an individual will
                experience the move.</p>

            <p>Through experienced management, planning, and consistent execution of their business, VP Max Packers and
                Movers have established a reputation for being reliable in the field of intercity relocation. It is
                vital to work with an experienced professional for your intercity move to ensure that you will have the
                best experience possible during the transition and that working with someone who is aware of what is
                required to make a successful move will set you apart from the rest.</p>
        </div>
    </div>
</div>