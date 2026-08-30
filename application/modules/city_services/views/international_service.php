<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<section class="home-page-slider" itemscope itemtype="https://schema.org/WPHeader">
    <div class="home-page-slider-content">
        <div class="container">


            <div class="row">
                <!-- Text aligns left now -->
                <div class="col-lg-8 col-md-10 hero-text-col text-start pb-4">

                    <!-- ISO Badge -->
                    <div class="iso-badge d-inline-flex align-items-center mb-4 rounded-3 p-1 pe-3">
                        <div
                            class="iso-icon-wrapper rounded text-white d-flex align-items-center justify-content-center me-3">
                            <i class="bi bi-shield-check fs-5"></i>
                        </div>
                        <span class="text-white fw-medium lh-sm iso-badge-text">ISO Certified & Government
                            Authorised<br>Packers and
                            Movers</span>
                    </div>

                    <div class="hero-text-box ms-0">
                        <h1 class="hero-title" itemprop="name">
                            International Packers and Movers in <?= isset($city) ? $city : 'Indore' ?>
                        </h1>
                        <p class="hero-lead mt-3" itemprop="description">
                            Looking for trusted international relocation services from
                            <?= isset($city) ? $city : 'Indore' ?>? Get secure, affordable, and seamless overseas moving
                            solutions from the leading international shifting experts.
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
                                        <span itemprop="name" class="pm-bc-current" aria-current="page">International
                                            Services</span>
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
                                <div class="text-white fw-bold lh-1 google-rating-val"><?= $ratingValue ?>/5 Rating
                                </div>
                                <div class="text-white-50 mt-1 google-rating-text text-white">Based on <a
                                        href="<?= site_url('reviews') ?>"><?= $ratingCount ?>+</a> Reviews
                                </div>
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
                                    <?= $ratingCount ?>+
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
            <?php $this->load->view('contacts/quoteform', ['selected_service' => 'International Relocation']) ?>
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
        <div class="col-lg-12 mb-3">
            <img loading="lazy" src="<?= base_url() ?>assets/images/cityservice/International-service.webp"
                alt="International Packers and Movers Service in <?= $city ?>" loading="lazy" class="w-100">
        </div>
        <div class="col-lg-12">
            <h2>International Packers and Movers in
                <?= $city ?>
            </h2>
            <p>Moving internationally can be one of the most thrilling yet stressful experiences of life. Whether you're
                shifting abroad for work, higher education, or just for a fresh start for your family, it’s essential to
                pay attention to every detail. It’s about finding a reliable partner who understands both the emotional
                and practical side of relocating internationally. That’s where VP Max Packers and Movers, as they are
                recognized as the Best International Packers and Movers in
                <?= $city ?>.
            </p>

            <p>We are not just typical moving companies; we specialize in making your international move as smooth and
                secure as possible. With commercial experience in the industry, an experienced team of professionals, a
                solid global presence, we ensure that your journey from
                <?= $city ?> to any part of the world is executed with
                care and precision.
            </p>

            <p>What sets us apart? We provide you with a world-class moving experience that combines our superior
                logistics with personal service. We'll be there every step of the way, from packing up your delicate
                household items, shipping internationally, clearing customs, and final delivery.</p>

            <p>So, if you are looking for International Packers and Movers Near me, who appreciate the complexity of
                global relocation, look no further – you have found your trusted relocation partner here in
                <?= $city ?>!
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

<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-lg-12">
            <h3>Why Choose Our Movers Company for Abroad Shifting?</h3>
            <p>When it comes to global relocation every single detail is important — from the way fragile objects are
                packed to customs paperwork. We are one of the most trusted names in relocation, and renowned for its
                professionalism, transparency, and timeliness.</p>

            <p>Here's why thousands of customers prefer us over others:</p>

            <h4>Trusted Global Network</h4>
            <p>We have a well-connected network of professional movers in over 120 countries, ensuring your goods are
                transported safely and efficiently, wherever you are shifting.</p>

            <h4>Expert Packing Standards</h4>
            <p>Our packing experts use high quality materials and multi-layer protection to keep your items safe during
                long-distance transit. Whether it’s furniture, glassware, electronics, or sensitive documents,
                everything is packed with utmost care.</p>

            <h4>Customs Clearance Support</h4>
            <p>Dealing with customs can be overwhelming, but our team helps with the all necessary paperwork, clearance
                process, and compliance to ensure the process is totally hassle-free.</p>

            <h4>Door-to-Door International Shifting</h4>
            <p>From your doorstep in
                <?= $city ?> to your foreign destination, we handle all the logistics, packing, shipping,
                tracking, and delivery.
            </p>

            <h4>Our International Moving Services</h4>
            <p>Our company provides a full range of global moving services designed to make your relocation efficient
                and hassle-free.</p>
        </div>
        <div class="col-lg-12 international-shifting-charge-table">
            <h3 class="mt-4 mb-3">Approximate International Relocation Charges from <?= $city ?></h3>
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-striped table-hover align-middle shadow-sm">
                    <thead class="table-primary text-center">
                        <tr>
                            <th scope="col">Destination Region</th>
                            <th scope="col">Sea Freight (Estimated)</th>
                            <th scope="col">Air Freight (Estimated)</th>
                            <th scope="col">Approx. Transit Time</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="text-start fw-bold">USA & Canada</td>
                            <td>₹ 1,50,000 - ₹ 3,50,000</td>
                            <td>₹ 3,50,000 - ₹ 6,00,000</td>
                            <td>30 - 45 Days (Sea) | 5 - 10 Days (Air)</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-bold">UK & Europe</td>
                            <td>₹ 1,20,000 - ₹ 3,00,000</td>
                            <td>₹ 2,80,000 - ₹ 5,50,000</td>
                            <td>25 - 40 Days (Sea) | 4 - 8 Days (Air)</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-bold">UAE & Middle East</td>
                            <td>₹ 80,000 - ₹ 2,00,000</td>
                            <td>₹ 1,50,000 - ₹ 3,00,000</td>
                            <td>15 - 25 Days (Sea) | 3 - 6 Days (Air)</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-bold">Australia & New Zealand</td>
                            <td>₹ 1,60,000 - ₹ 4,00,000</td>
                            <td>₹ 4,00,000 - ₹ 7,50,000</td>
                            <td>35 - 50 Days (Sea) | 6 - 12 Days (Air)</td>
                        </tr>
                        <tr>
                            <td class="text-start fw-bold">Singapore & Southeast Asia</td>
                            <td>₹ 70,000 - ₹ 1,80,000</td>
                            <td>₹ 1,20,000 - ₹ 2,50,000</td>
                            <td>12 - 20 Days (Sea) | 2 - 5 Days (Air)</td>
                        </tr>
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <td colspan="4" class="text-muted small text-start">
                                <em>* <strong>Disclaimer:</strong> The above international relocation charges are
                                    approximate estimations. Actual pricing may vary significantly based on shipment
                                    volume (CBM), exact destination, current freight rates, customs duties, insurance,
                                    and packing requirements. Contact us for a precise quotation.</em>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-lg-12">
            <h3>International Household Shifting</h3>
            <p>Relocating your residence overseas involves more than just the logistics: it’s an emotional journey. We
                take utmost care to handle each piece of furniture as well as decor and transport it to your new foreign
                address with a perfect finish.</p>

            <h4>Office and Corporate Relocation</h4>
            <p>planning to shift your business operations overseas? Our corporate relocation team guarantees minimal
                downtime through proper planning, rapid execution, while keeping all of your office equipment and data
                secure.</p>

            <h4>Bike and Car Transport</h4>
            <p>Our company specializes in overseas car and bike transport, providing total safety, insurance, and
                door-to-door delivery options.</p>

            <h4>International Pet Relocation</h4>
            <p>Your pets deserve safe travel as well. Our staff coordinates all pet relocation documents, comfort
                arrangements, and customs regulations for hassle-free travel.</p>

            <h4>Cargo and Freight Forwarding</h4>
            <p>We deal in both air cargo and sea cargo with live tracking, making sure your shipment is delivered safely
                and punctually.</p>

            <h4>Packaging, Storage & Insurance</h4>
            <p>We offer export-quality packaging, air-conditioned storage space, and offer a complete insurance option,
                giving you peace of mind while you move.</p>

            <h3>Advantages of Selecting Our Company for Your Global Relocation</h3>
            <p>We blend international relocation standards with profound local familiarity of <?= $city ?> and its
                transportation infrastructure.</p>

            <h4>Personal Relocation Manager</h4>
            <p>Every client is provided with a personal relocation manager to guide them through each stage of the
                process — from initial planning to final delivery.</p>

            <h4>Insurance Cover</h4>
            <p>We provide comprehensive insurance cover against transit risk, so your goods are safe no matter what.</p>

            <h4>Custom Solutions</h4>
            <p>Each overseas relocation is unique. We customize our services according to your budget, destination
                country, and type of shipment.</p>

            <h4>On-Time Delivery</h4>
            <p>Punctuality is key for us: we transport your items within the agreed timeline supported by live tracking
                assistance.</p>

            <h3>Best International Packers and Movers – Trusted by Thousands</h3>
            <p>We are the Best International Packers and Movers because we have thousands of happy customers who've
                moved to places all over the world. Each and every shipment is treated with professionalism, care, and
                dedication.</p>

            <p>Customer satisfaction, timely delivery, and open communication have made us <?= $city ?>'s most
                sought-after international relocation firm. We don't transport goods — we transport peace of mind.</p>


            <h4>Get Your Free Estimate</h4>
            <p>To find your customized Packers and Movers rate per km, call our <?= $city ?> office today. We offer
                on-location estimates and real-time digital quotes so you can estimate your move budget precisely.</p>

            <h4>Conclusion</h4>
            <p>A global relocation is not just a shifting — it's a change. It's a matter of new beginnings, new
                experiences, and new possibilities. We understand that your items do not just hold material worth but
                sentimental stories that need to be handled with respect and compassion.</p>

            <p>With our years of experience, updated machinery, and international affiliations, we have acquired the
                reputation of being the Best International Packers and Movers in <?= $city ?>. From careful planning to
                impeccable execution, we make every shift smooth, secure, and perfectly coordinated. Let VP Max Packers
                and Movers make your international move a cozy, hassle-free, and enjoyable experience.</p>

            <p><strong>VP Max Packers and Movers – Because Your World Deserves a Smooth Move.</strong></p>
        </div>
        <div class="col-lg-12 international-faq mt-5">
            <h3 class="mb-4">Frequently Asked Questions</h3>
            <?php
            $faqs = [
                [
                    'question' => 'How much does international relocation cost from ' . $city . '?',
                    'answer' => 'The cost of international relocation from ' . $city . ' depends on the volume of goods, destination country, mode of transport (air or sea), and customs duties. We provide a customized quote after evaluating your requirements.'
                ],
                [
                    'question' => 'How long does it take to ship household goods internationally?',
                    'answer' => 'Sea freight usually takes between 15 to 45 days depending on the destination, while air freight is much faster, taking about 3 to 10 days.'
                ],
                [
                    'question' => 'Do you provide insurance for international shifting?',
                    'answer' => 'Yes, we provide comprehensive transit insurance for all international relocations to ensure your goods are protected against any unforeseen damage or loss during transit.'
                ],
                [
                    'question' => 'Will you handle the customs clearance process?',
                    'answer' => 'Absolutely! Our expert team handles all the necessary customs documentation, clearance procedures, and compliance for both the origin and destination countries to make your move hassle-free.'
                ],
                [
                    'question' => 'Can I transport my car or bike internationally?',
                    'answer' => 'Yes, we specialize in international vehicle transportation, offering secure packing, documentation, and door-to-door delivery for your cars and bikes anywhere in the world.'
                ]
            ];
            ?>

            <!-- Bootstrap Accordion -->
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
                        "text": "' . htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') . '"
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