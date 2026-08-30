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
                            Car Transportation Services in <?= isset($city) ? $city : 'Indore' ?>
                        </h1>
                        <p class="hero-lead mt-3" itemprop="description">
                            Looking for trusted car relocation services from <?= isset($city) ? $city : 'Indore' ?>? Get
                            secure, affordable, and seamless vehicle moving solutions from the leading car shifting
                            experts.
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
                                        <span itemprop="name" class="pm-bc-current" aria-current="page">Car
                                            Transportation</span>
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
            <?php $this->load->view('contacts/quoteform', ['selected_service' => 'Vehicle Transportation']) ?>
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
        <div class="col-lg-12 text-center mt-2 mb-4 mt-lg-0">
            <img loading="lazy" src="<?= base_url() ?>assets/images/cityservice/car-transportation.webp"
                alt="Car Transportation Services in <?= $city ?>" loading="lazy" class="img-fluid rounded shadow">
        </div>
        <div class="col-lg-12">
            <h2 class="fw-bold mb-3 red-color">Car transportation Services in <?= $city ?></h2>
            <p>Moving your vehicle safely from cities or states entails more than a transport truck — it takes
                confidence, experience, and professionalism. <strong>VP Max Packers and Movers</strong> is one of the
                best car moving services in <?= $city ?>, covering complete peace of mind through our trustworthy, safe,
                and cost-effective vehicle shifting services. Whether you’re moving your family car, luxury vehicle, or
                business fleet, our experienced logistics experts ensure every transport is executed with precision and
                care.</p>
            <p>From the initial inspection to the last delivery, we offer door-to-door car transport services in
                <?= $city ?> with special emphasis on safety, punctuality, and customer satisfaction. With a perfect
                combination of technology, expert professionals, and customized carriers, VP Max Packers and Movers has
                emerged as the most trusted one for <strong>Safe Car Transportation Services in <?= $city ?></strong>.
            </p>
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
            <h3 class="fw-bold mb-3 red-color">Why Our Moving Company for Car Transportation in <?= $city ?>?</h3>
            <p>When you transport your car, we know it's not a vehicle — it's an emotion, a prized possession, and a
                part of your daily routine. That is why VP Max Packers and Movers offers an unparalleled blend of
                experience, dependability, and openness in every relocation.</p>

            <h5 class="fw-bold text-dark mt-3">Expert Handling & Modern Equipment</h5>
            <p>Our company employs state-of-the-art loading mechanisms and state-of-the-art car carriers that include
                hydraulic ramps, lock mechanisms for safety, and safety straps to avoid any scratches or damage while
                shipping. Be it a hatchback or an SUV, your vehicle is treated with utmost care.</p>

            <h5 class="fw-bold text-dark mt-3">Pan-India Service Coverage</h5>
            <p>With a wide-ranging operating network, we provide hassle-free Car Transportation Services from
                <?= $city ?> to the major Indian cities — Mumbai, Delhi, Bangalore, Hyderabad, Chennai, and Kolkata. No
                location is too distant in order to facilitate the safe delivery of your vehicle.
            </p>

            <h5 class="fw-bold text-dark mt-3">On-Time Delivery Guarantee</h5>
            <p>We are aware of the value of time in relocations. Our staff provides timely and quick car transport
                services in <?= $city ?>, taking the shortest, safest roads while being completely transparent with
                real-time tracking.</p>

            <h5 class="fw-bold text-dark mt-3">Safe and Fully Insured Transit</h5>
            <p>Each shipment is insured under complete insurance to cover risk and provide peace of mind. Your car's
                safety is our concern — and we treat it as our own.</p>

            <h5 class="fw-bold text-dark mt-3">Economical Pricing – No Surprises</h5>
            <p>We provide the lowest and most transparent car shifting prices in <?= $city ?>. Our rates are tailored to
                distance, vehicle type, and service preference. No surprises — just transparent, competitive pricing
                that suits your pocket.</p>
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
                <h4 class="text-center mb-3">Car Shifting Rate Chart Based on Distance</h4>
                <table class="table table-bordered table-striped text-center align-middle shadow-sm">
                    <thead class="table-primary">
                        <tr>
                            <th>Distance / Route</th>
                            <th>Hatchback (Approx)</th>
                            <th>Sedan (Approx)</th>
                            <th>SUV / Luxury (Approx)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">Within State (up to 500 km)</td>
                            <td>₹ 4,000 - ₹ 7,000</td>
                            <td>₹ 5,000 - ₹ 8,000</td>
                            <td>₹ 6,000 - ₹ 10,000</td>
                        </tr>
                        <tr>
                            <td class="text-start">Interstate (500 km - 1000 km)</td>
                            <td>₹ 6,000 - ₹ 10,000</td>
                            <td>₹ 8,000 - ₹ 12,000</td>
                            <td>₹ 10,000 - ₹ 15,000</td>
                        </tr>
                        <tr>
                            <td class="text-start">Long Distance (1000 km+)</td>
                            <td>₹ 9,000 - ₹ 15,000</td>
                            <td>₹ 12,000 - ₹ 18,000</td>
                            <td>₹ 15,000 - ₹ 25,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold red-color"><?= $city ?> Packers Movers Price per Km – Transparent & Reasonable Charges
            </h3>
            <p>Our pricing strategy for <?= $city ?> Packers Movers Price per Km is clear-cut. The charges of car
                transportation generally rely on:</p>
            <ul>
                <li><strong>Distance of Relocation:</strong> Local or Interstate Movement: Our rates differ depending on
                    whether your vehicle is being moved within <?= $city ?> or between cities, with greater distances
                    normally being just a little more expensive due to fuel, route, and transit time.</li>
                <li><strong>Car Type:</strong> Sedan, SUV, or Luxury Car: Car size, weight, and model determine the cost
                    of transportation. SUVs and luxury vehicles need special handling, carriers, and care, which is
                    included in the per km charge.</li>
                <li><strong>Transportation Method:</strong> Open or Enclosed Carrier: Clients can opt for open carriers,
                    which are economical, or enclosed carriers providing maximum protection against weather, road
                    damage, and dust, impacting pricing per km.</li>
                <li><strong>Pickup and Drop Points:</strong> Door-to-Door Convenience: Our door-to-door service provides
                    for pickup and delivery of your car at precise points, adding safety and convenience, which is part
                    of the clear per km charge.</li>
            </ul>
        </div>

        <div class="col-lg-12 mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img loading="lazy" src="<?= base_url() ?>assets/images/services/car-transportation-services.webp"
                        alt="Secure Car Transportation Services in <?= $city ?>" loading="lazy"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold red-color">Secure Car Transportation Services in <?= $city ?> – Our Safety
                        Commitment</h3>
                    <p>At VP Max Packers and Movers, safety isn't a guarantee — it's our mantra. From the time your
                        vehicle is taken in charge, it's protected under a series of protective layers.</p>

                    <h5 class="fw-bold text-dark mt-3">Enclosed Car Carriers</h5>
                    <p>For luxury and high-end cars, enclosed carriers provide zero exposure to weather, dust, or road
                        abrasive materials.</p>

                    <h5 class="fw-bold text-dark mt-3">Wheel Lock Systems</h5>
                    <p>Safe immobilization to minimize movement during transportation.</p>

                    <h5 class="fw-bold text-dark mt-3">Real-Time GPS Tracking</h5>
                    <p>Get current with live tracking and real-time alerts regarding the location of your vehicle.</p>

                    <h5 class="fw-bold text-dark mt-3">Trained Drivers & Technicians</h5>
                    <p>All our transport staff is vetted, trained, and committed to following high safety standards.</p>

                    <p>That is why we are always among the Top Car Transportation Companies in <?= $city ?> that are
                        trusted by individual clients and corporate companies alike.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold red-color mt-4">How Our Car Transportation Process Works</h3>
            <p>We facilitate the whole process to be smooth, clear, and hassle-free. This is how it happens:</p>
            <ul>
                <li><strong>Request a Quote:</strong> Reach us over call or online query to get your customized quote in
                    accordance with the type of vehicle, distance, and service needed.</li>
                <li><strong>Vehicle Inspection:</strong> Our professionals inspect your vehicle meticulously, recording
                    its condition to maintain transparency and avoid any conflict during transit.</li>
                <li><strong>Safe Loading:</strong> Vehicles are safely loaded with hydraulic ramps, safety locks, and
                    protection against scratches, dents, or damage during transportation.</li>
                <li><strong>In-Transit Tracking:</strong> Be updated during transit with real-time tracking using SMS or
                    calls, providing total transparency and assurance.</li>
                <li><strong>On-Time Delivery:</strong> We have your vehicle reach its destination on time, in the best
                    shape, with doorstep delivery for ultimate convenience and satisfaction.</li>
            </ul>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold red-color mt-4">Conclusion</h3>
            <p>Moving your car should never be stressful — and with VP Max Packers and Movers, it never is. We are one
                of the Best Car Transportation Services in <?= $city ?>, combining cutting-edge logistics, experienced
                staff, and a customer-first approach to provide a seamless and secure experience.</p>
            <p>From car shifting locally in <?= $city ?> to inter-state vehicle transport, all our projects showcase our
                assurance of safety, speed, and satisfaction. So, plan your next move and look for Safe Car
                Transportation Services in <?= $city ?> — and that's where VP Max Packers and Movers come in — because
                your car is worth nothing but the best.</p>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold mb-4" style="color:#ee553b;">Frequently Asked Questions (FAQs)</h3>
            <?php
            $faqs = [
                [
                    'question' => 'How much does it cost to transport a car in ' . $city . '?',
                    'answer' => 'The cost depends on distance, car model (hatchback vs SUV), and the type of carrier (open or enclosed). Contact us for a free quote.'
                ],
                [
                    'question' => 'Is my car insured during transit?',
                    'answer' => 'Yes, we provide full transit insurance for your vehicle to ensure peace of mind during relocation.'
                ],
                [
                    'question' => 'How do I prepare my car for transport?',
                    'answer' => 'Remove personal belongings, leave about a quarter tank of fuel, and ensure there are no fluid leaks.'
                ],
                [
                    'question' => 'Do you offer door-to-door car shifting services?',
                    'answer' => 'Yes! We pick up your vehicle from your current location and deliver it directly to your destination securely.'
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

    </div>
</div>