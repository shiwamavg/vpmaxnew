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
                            Bike Transportation Services in <?= isset($city) ? $city : 'Indore' ?>
                        </h1>
                        <p class="hero-lead mt-3" itemprop="description">
                            Looking for trusted bike relocation services from <?= isset($city) ? $city : 'Indore' ?>?
                            Get secure, affordable, and seamless two-wheeler moving solutions from the leading bike
                            shifting experts.
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
                                        <span itemprop="name" class="pm-bc-current" aria-current="page">Bike
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
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3 red-color">Bike Relocation Service in <?= $city ?></h2>
            <p>For <strong>Bike Transportation Services in <?= $city ?></strong> that you can count on, look no further
                than VP Max Packers and Movers as your trusted, dependable, secure, and expert moving company. We know
                that your bike is not just a mode of transit; it’s an integral part of your daily life journey, your
                adventure partner, and your memory keeper. If it's your daily commuter bike or a prized possession, we
                handle it with extreme care, ensuring your bike’s safety.</p>

            <p>Our expert professionals make sure every stage of the procedure, from picking up to wrapping and
                shipment, is executed with accuracy and precision. We use excellent supplies for safe packaging, modern
                transport methods, and properly maintained vehicles to guarantee your bike arrives at its final location
                securely and on schedule. Either you’re shifting within <?= $city ?> or relocating to a different city,
                our Bike Transport Services by bus and Bike Transport Services by train provide reasonable, versatile
                services suitable to your timetable and affordability.</p>
            <p>Our Packers and Movers Company does not only transport bikes; we relocate assurance, security, and
                fulfillment. With us, you can be relaxed that your ride is in the most secure hands, shipped just the
                way you gave it—effortless, secure, and free of scratches.</p>
        </div>
        <div class="col-lg-6 text-center mt-4 mt-lg-0">
            <img loading="lazy" src="<?= base_url() ?>assets/images/services/bike-transportation-services.webp"
                alt="Bike Relocation Service in <?= $city ?>" loading="lazy" class="img-fluid rounded shadow">
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
            <h3 class="fw-bold mb-3 red-color">Why Prefer Our Moving Company for Bike Relocation Service?</h3>
            <h5 class="fw-bold text-dark mt-3">1. Experience and Trust:</h5>
            <p>With years of experience as the <strong>best bike transportation service in <?= $city ?></strong>, our
                expert has effectively managed bike relocation for thousands of happy clients. Our proven record
                involves effortless shipment to large regions like Mumbai, Bengaluru, Delhi, Hyderabad, and Chennai.
                Each shift is handled by skilled experts who know the specifics of managing bikes and guarantee secure
                loading, transport, and shipment every time. Our increasing base of reliable customers and excellent
                reviews serves as evidence of our dependability and trustworthy nature.</p>

            <h5 class="fw-bold text-dark mt-3">2. Personalized Shipping Techniques:</h5>
            <p>We know that every client has their own individual needs and choices. That’s why we provide versatile
                modes of transport choices customized to your requirements. Select bike transportation service by bus
                for quicker interstate transfers or bike transportation service by train for long-distance transports
                that combine reasonable prices and security. For superior safeguarding, our exclusive transportation
                vehicles offer home-to-home service with extra care. This flexibility guarantees that you get the
                perfect balance of price, speed, and security based on your choice and price range.</p>

            <h5 class="fw-bold text-dark mt-3">3. Insurance coverage and safeguard:</h5>
            <p>We consider your bike’s safety from the time it’s taken up until it arrives at its final location. Every
                bike is wrapped using premium materials such as bubble wrap, foam wrap, and protective covers to prevent
                harm or destruction. For expensive bikes, we also offer wood storage for extra safeguarding. Our
                GPS-based monitoring system allows you to track your delivery in real time, while full transport
                insurance coverage provides you total peace of mind.</p>

            <h5 class="fw-bold text-dark mt-3">4. Honest Costing:</h5>
            <p>We believe in transparency and honesty at every stage. Our cost system is entirely transparent, including
                all necessary expenses such as packing components, fuel expenses, fees, and necessary taxes. There are
                zero hidden fees or unexpected surprises. Prior to booking, our staff offers a detailed quotation
                customized to your vehicle type, distance, and shipping mode, so you know exactly what you’re paying
                for. This dedication to honesty and transparency makes our moving company one of the best bike
                transportation services in <?= $city ?>.</p>
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
                <h4 class="text-center mb-3">Bike Shifting Rate Chart Based on Different Transport Modes</h4>
                <table class="table table-bordered table-striped text-center align-middle shadow-sm">
                    <thead class="table-primary">
                        <tr>
                            <th>Distance / Route</th>
                            <th>By Train (Approx)</th>
                            <th>By Bus (Approx)</th>
                            <th>By Dedicated Carrier (Approx)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">Within State (up to 500 km)</td>
                            <td>₹ 2,000 - ₹ 3,500</td>
                            <td>₹ 3,000 - ₹ 4,500</td>
                            <td>₹ 4,000 - ₹ 6,000</td>
                        </tr>
                        <tr>
                            <td class="text-start">Interstate (500 km - 1000 km)</td>
                            <td>₹ 3,500 - ₹ 5,500</td>
                            <td>₹ 4,500 - ₹ 7,000</td>
                            <td>₹ 6,000 - ₹ 9,000</td>
                        </tr>
                        <tr>
                            <td class="text-start">Long Distance (1000 km+)</td>
                            <td>₹ 5,000 - ₹ 8,000</td>
                            <td>₹ 7,000 - ₹ 10,000</td>
                            <td>₹ 9,000 - ₹ 15,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold red-color">What affects bike transport costs</h3>
            <p>These are the main elements that influence the price of bike transportation services in <?= $city ?>:</p>
            <ul>
                <li><strong>Engine Size and Bike Weight:</strong> Bigger and larger bikes need more robust packing,
                    special handling, and sometimes wood crates, raising total shipping prices.</li>
                <li><strong>Distance to Destination:</strong> Extended routes require more fuel utilization, tax fees,
                    driver provisions, and longer travel duration, increasing the total bike relocation expense.</li>
                <li><strong>Mode of Transportation:</strong> Train transport is budget-friendly but slower; bus and
                    dedicated truck options ensure faster delivery at relatively higher service charges.</li>
                <li><strong>Packing Standard:</strong> Basic packaging offers reasonable prices, while higher-quality
                    choices with anti-shock elements and safeguarding crates provide superior security at extra cost.
                </li>
                <li><strong>Pick-Up and Drop Zones:</strong> House-to-house pickup and shipment give flexibility but add
                    logistics costs in contrast to warehouse- or train-based transit.</li>
                <li><strong>Included Services:</strong> Insurance protection, GPS monitoring, paperwork, and awaiting
                    time expenses during the journey can drastically affect the final journey cost.</li>
            </ul>

            <h3 class="fw-bold red-color mt-4">Packers and Movers in <?= $city ?> Price per km</h3>
            <p>Apart from bikes, we also manage full house and corporate shifting all over India. Our Packers and Movers
                in the <?= $city ?> price-per-km system offer honesty and equitable pricing for every customer. Costs
                generally range from ₹15 to ₹25 per kilometer based on the total load, road circumstances, and vehicle
                dimensions. This versatile costing technique ensures that you only pay for the real miles covered—no
                additional expenses and zero unexpected surprises. Whether you’re shifting a two-wheeler or an entire
                home, VP Max offers cost-effective, dependable shifting.</p>
        </div>

        <div class="col-lg-12 mt-5">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img loading="lazy" src="<?= base_url() ?>assets/images/services/car-transportation-services.webp"
                        alt="Bike Transportation Options in <?= $city ?>" loading="lazy"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold red-color">Transportation Options: Bus, Train, or Specialized Carrier</h3>
                    <p>Selecting the right mode of transport can make a big impact on expenses, duration, and security.
                        Our moving company offers various choices for your comfort:</p>

                    <h5 class="fw-bold text-dark mt-3">1. Bike Relocation Services by Bus</h5>
                    <p>Suitable for short, or medium-distance shifts, bike transport by bus is fast and dependable. We
                        work with trusted shipping partners, making sure of safe treatment and on-time delivery with
                        expert guidance.</p>

                    <h5 class="fw-bold text-dark mt-3">2. Bike Relocation Services by Train</h5>
                    <p>Suitable for long-distance moves, bike transport by train offers reasonable prices and constant
                        dependability as per Indian Railways guidelines. Bikes are safely packed, tagged, and covered
                        for maximum safeguarding all through the transit.</p>

                    <h5 class="fw-bold text-dark mt-3">3. Specialized Vehicle or Truck Transportation</h5>
                    <p>For maximum security and control, we offer customized bike carrier trucks. Meant for high-value
                        or multiple-bike transports, these vehicles guarantee house-to-house service with full GPS
                        monitoring and professional handling.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold red-color mt-4">Conclusion</h3>
            <p>At VP Max Packers and Movers, our dedication to outstanding service is apparent in every step of the
                procedure, from the first quotation to the final departure. By combining advanced packing methods,
                adaptable shipping alternatives, and professional handling, we make sure your bike arrives at its final
                destination in the same state that it left, free of damages and without incident.</p>

            <p>Our clients constantly compliment us for our flawless shipments, punctual interaction, and transparent
                updates all along the journey. Whether you choose Bike Transport Services by Bus, train, or via
                dedicated transport carriers, we customize each trip to meet your requirements combining convenience,
                expense, and security with care.</p>
            <p>So, when you look for “<strong>Bike Transportation Services in <?= $city ?> Near Me</strong>,” trust VP
                Max Packers and Movers to provide more than just your bike; we give you peace of mind, dependability,
                and outstanding service every single time.</p>
        </div>

        <div class="col-lg-12 mt-5">
            <h3 class="fw-bold mb-4" style="color:#ee553b;">Frequently Asked Questions (FAQs)</h3>
            <?php
            $faqs = [
                [
                    'question' => 'Is it safe to relocate a bike by train?',
                    'answer' => 'Yes, given appropriate packaging (crate/wooden frame), insurance coverage, and selecting dependable companies like ours. We make sure everything handled at stations is safe and recorded.'
                ],
                [
                    'question' => 'How long does shipping normally take?',
                    'answer' => 'Within ' . $city . ': 1-2 days<br>To nearby states: 2-3 days<br>Long distances: 4-7 days based on train/bus times and travel permits.'
                ],
                [
                    'question' => 'What documents do I need?',
                    'answer' => 'RC book copy, insurance coverage paper, any ownership evidence, address evidence, and ID proof. If traveling across state boundaries, sometimes a Non Objection Certificate (NOC) could be needed.'
                ],
                [
                    'question' => 'Does VP Max Packers and Movers provide transit insurance?',
                    'answer' => 'Yes. All our bike transportation choices can have insurance coverage. We make it a part of the quotation so you\'re conscious of it upfront.'
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