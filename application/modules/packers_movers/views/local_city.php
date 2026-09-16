<?php
$parent_city = isset($city) ? $city : '';
$locality_name = isset($locality) ? $locality : '';
$company_name = isset($company3) ? $company3 : 'VP Max Packers and Movers';
$phone_number = isset($phone) ? $phone : '';
$phone_link = isset($phonehtml) ? $phonehtml : '';
$nearby_areas = array();
foreach ((array) $areas as $area) {
    if (!empty($area['nm']) && strcasecmp($area['nm'], $locality_name) !== 0) {
        $nearby_areas[] = $area['nm'];
    }
}
$nearby_areas = array_slice($nearby_areas, 0, 8);
?>
<link rel="stylesheet" href="<?= base_url('assets/css/local_city.css') ?>">

<main class="local-city-page">
    

    <section class="local-city-hero">
        <div class="container">
            <div class="local-city-hero-grid">
                <div class="local-city-hero-copy">
                    <span class="local-city-kicker"><i class="bi bi-geo-alt-fill"></i> Local moving specialists</span>
                    <h1>Packers and Movers in <em><?= htmlspecialchars($locality_name) ?></em></h1>
                    <p class="local-city-lead">Move across <?= htmlspecialchars($locality_name) ?> with a team that understands building access, narrow lanes, lift timings, and the details that make local shifting easier.</p>
                    <div class="local-city-actions">
                        <a class="local-city-button local-city-button-primary" href="#local-quote"><i class="bi bi-chat-square-text"></i> Get a free quote</a>
                        <?php if ($phone_link): ?><a class="local-city-button local-city-button-light" href="<?= htmlspecialchars($phone_link) ?>"><i class="bi bi-telephone"></i> <?= htmlspecialchars($phone_number) ?></a><?php endif; ?>
                    </div>
                    <div class="local-city-trust-row">
                        <span><i class="bi bi-shield-check"></i> Safe handling</span>
                        <span><i class="bi bi-clock-history"></i> On-time planning</span>
                        <span><i class="bi bi-receipt"></i> Clear quotation</span>
                    </div>
                </div>
                <div class="local-city-hero-panel">
                    <span class="local-city-panel-label">Your local move, planned</span>
                    <strong><?= htmlspecialchars($locality_name) ?></strong>
                    <span class="local-city-panel-route"><i class="bi bi-arrow-right"></i> <?= htmlspecialchars($parent_city) ?> and beyond</span>
                    <div class="local-city-panel-line"></div>
                    <p>From a single-room move to a complete home or office relocation, our crew plans packing, loading, transport, and placement around your schedule.</p>
                    <a class="local-city-primary-link" href="<?= htmlspecialchars($primary_city_url) ?>">
                        Explore all services in <?= htmlspecialchars($parent_city) ?> <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="local-city-enquiry section-space" id="local-enquiry">
        <div class="container">
            <div class="local-city-enquiry-copy local-city-enquiry-intro">
                <span class="local-city-section-kicker">Get a moving estimate</span>
                <h2>Tell us about your move in <?= htmlspecialchars($locality_name) ?>.</h2>
                <p>Share a few details and our relocation team will call you with practical guidance and a transparent quotation.</p>
                <ul class="local-city-enquiry-points">
                    <li><i class="bi bi-check2-circle"></i> Quick response from <?=$locality_name?> moving specialist</li>
                    <li><i class="bi bi-check2-circle"></i> Packing and transport options for your budget</li>
                    <li><i class="bi bi-check2-circle"></i> No-obligation quotation</li>
                </ul>
            </div>
            <div class="col-sm-12 local-city-enquiry-form">
                <?php 
                $this->load->view('contacts/quoteform', array('city' => "$locality, $city")); ?>
            </div>
        </div>
    </section>

    <section class="local-city-intro section-space">
        <div class="container local-city-narrow-grid">
            <div>
                <span class="local-city-section-kicker">A smoother moving day</span>
                <h2>Local knowledge makes the difference.</h2>
            </div>
            <div class="local-city-intro-copy">
                <p>Moving within <?= htmlspecialchars($parent_city) ?> is not only about distance. Society permissions, parking windows, staircases, lifts, fragile items, and traffic all affect the plan.</p>
                <p><?= htmlspecialchars($company_name) ?> helps households and businesses in <?= htmlspecialchars($locality_name) ?> prepare the move, protect belongings, and settle in with less disruption.</p>
            </div>
        </div>
    </section>

    <section class="local-city-map-section section-space">
        <div class="container">
            <div class="local-city-section-heading">
                <div>
                    <span class="local-city-section-kicker">Find our team</span>
                    <h2><?= htmlspecialchars($parent_city) ?> service location.</h2>
                </div>
                <p>Our <?= htmlspecialchars($parent_city) ?> branch supports moves across <?= htmlspecialchars($locality_name) ?> and nearby areas.</p>
            </div>
            <?php include __DIR__ . '/city_page_design/city_map.php'; ?>
        </div>
    </section>

    <section class="local-city-services section-space">
        <div class="container">
            <div class="local-city-section-heading">
                <div>
                    <span class="local-city-section-kicker">What we handle</span>
                    <h2>Moving support built around your needs.</h2>
                </div>
                <p>Choose the service that fits your move. We can combine services for a complete relocation plan.</p>
            </div>
            <div class="local-city-service-grid">
                <article><i class="bi bi-house-heart"></i><h3>Home shifting</h3><p>Careful packing and organized loading for apartments, houses, and independent homes.</p></article>
                <article><i class="bi bi-building"></i><h3>Office relocation</h3><p>Move workstations, files, equipment, and furniture with a plan that limits downtime.</p></article>
                <article><i class="bi bi-car-front"></i><h3>Car and bike transport</h3><p>Secure vehicle movement alongside your household goods or as a separate service.</p></article>
                <article><i class="bi bi-box-seam"></i><h3>Local packing</h3><p>Right-sized packing for fragile kitchenware, electronics, furniture, and everyday essentials.</p></article>
            </div>
        </div>
    </section>

    <section class="local-city-process section-space">
        <div class="container">
            <div class="local-city-section-heading">
                <div><span class="local-city-section-kicker">How it works</span><h2>A clear plan from door to door.</h2></div>
            </div>
            <div class="local-city-process-grid">
                <div><span>01</span><h3>Understand</h3><p>We discuss your inventory, access, preferred date, and destination.</p></div>
                <div><span>02</span><h3>Protect</h3><p>Our team packs and labels belongings according to their handling needs.</p></div>
                <div><span>03</span><h3>Move</h3><p>We load, transport, unload, and place items with care at the new address.</p></div>
            </div>
        </div>
    </section>

    <?php if (!empty($nearby_areas)): ?>
    <section class="local-city-areas section-space">
        <div class="container">
            <span class="local-city-section-kicker">Nearby service areas</span>
            <h2 class="text-white">Also serving around <?= htmlspecialchars($parent_city) ?>.</h2>
            <div class="local-city-area-list">
                <?php foreach ($nearby_areas as $area): ?>
                    <a href="<?= site_url($parent_slug . '/' . strtolower(str_replace(' ', '-', $area))) ?>"><?= htmlspecialchars($area) ?> <i class="bi bi-arrow-up-right"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="local-city-cta" id="local-quote">
        <div class="container local-city-cta-inner">
            <div><span class="local-city-section-kicker">Ready when you are</span><h2>Let's plan your move in <?= htmlspecialchars($locality_name) ?>.</h2><p>Tell us what you are moving and when. Our team will help you choose the right service.</p></div>
            <a class="local-city-button local-city-button-primary" href="<?= site_url('contact-us') ?>"><i class="bi bi-arrow-right"></i> Request a quotation</a>
        </div>
    </section>
</main>
