<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$services = [
    [
        'title' => 'Household Shifting',
        'image' => 'household-shifting-services.webp',
        'desc' => 'Professional, secure, and hassle-free household shifting. We pack and move your precious home belongings with zero damage guarantee.',
        'link' => 'household-shifting',
        'icon' => 'bi-house-heart'
    ],
    [
        'title' => 'Office Shifting',
        'image' => 'office-shifting-services.webp',
        'desc' => 'Streamlined office relocation services designed to minimize downtime. We handle IT equipment and furniture with extreme care.',
        'link' => 'office-shifting',
        'icon' => 'bi-building-gear'
    ],
    [
        'title' => 'Local Shifting',
        'image' => 'local-shifting-services.webp',
        'desc' => 'Fast and efficient local shifting services within the city. Experience same-day moving with our expert local packing team.',
        'link' => 'local-shifting',
        'icon' => 'bi-geo-alt'
    ],
    [
        'title' => 'Domestic Shifting',
        'image' => 'domestic-shifting-services.webp',
        'desc' => 'Seamless long-distance domestic shifting across India. We offer reliable, inter-state moving with real-time tracking.',
        'link' => 'domestic-shifting',
        'icon' => 'bi-truck'
    ],
    [
        'title' => 'International Shifting',
        'image' => 'international-shifting-services.webp',
        'desc' => 'Expert international shifting services with global network coverage. Complete customs assistance and premium export-quality packing.',
        'link' => 'international-shifting',
        'icon' => 'bi-globe-americas'
    ],
    [
        'title' => 'Car Transportation',
        'image' => 'car-transportation-services.webp',
        'desc' => 'Safe and secure door-to-door car transportation. Specially designed enclosed car carriers to protect your vehicle.',
        'link' => 'car-transportation-service',
        'icon' => 'bi-car-front'
    ],
    [
        'title' => 'Bike Transportation',
        'image' => 'bike-transportation-services.webp',
        'desc' => 'Dedicated bike transportation services using multi-layer scratch-proof packaging to ensure zero transit damage.',
        'link' => 'bike-transportation-service',
        'icon' => 'bi-bicycle'
    ],
    [
        'title' => 'Loading and Unloading',
        'image' => 'loading-unloading-services.webp',
        'desc' => 'Professional loading and unloading by trained personnel using modern lifting equipment to prevent any mishandling.',
        'link' => 'loading-and-unloading',
        'icon' => 'bi-boxes'
    ],
];
?>


<section class="premium-services-section py-4 bg-light">
    <div class="container pb-3">
        <!-- Section Header -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <span class="premium-subheading fw-bold text-uppercase tracking-wider">What We Do</span>
                <h2 class="fw-bold text-dark mt-2 mb-3 h2"><span class="fw-normal">Our Core</span> Services</h2>
                <p class="premium-section-desc text-muted fs-6 mx-auto mb-4">We provide comprehensive, end-to-end
                    relocation solutions tailored to your specific needs, ensuring a smooth and stress-free moving
                    experience.</p>
            </div>
        </div>

        <!-- Grid of Services -->
        <div class="row g-4 mt-2">
            <?php foreach ($services as $index => $service): ?>
                <div class="col-lg-3 col-md-4 col-6 d-flex">
                    <div
                        class="premium-srv-card w-100 d-flex flex-column bg-white rounded-4 overflow-hidden position-relative p-4">
                        <!-- Card Header: Icon + Title -->
                        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center mb-3">
                            <div
                                class="premium-srv-icon-wrap d-flex align-items-center justify-content-center rounded-circle flex-shrink-0 me-md-3">
                                <i class="bi <?= $service['icon'] ?> srv-icon-large"></i>
                            </div>
                            <h3 class="fw-bold text-dark mb-0 srv-card-title">
                                <a href="<?= site_url($service['link']) ?>"
                                    class="text-decoration-none text-dark srv-title-link">
                                    <?= htmlspecialchars($service['title']) ?>
                                </a>
                            </h3>
                        </div>

                        <!-- Card Body -->
                        <div class="premium-srv-body d-flex flex-column flex-grow-1">
                            <p class="text-muted flex-grow-1 mb-4 srv-card-desc">
                                <?= htmlspecialchars($service['desc']) ?>
                            </p>

                            <!-- Read More Link -->
                            <div class="mt-auto">
                                <a href="<?= site_url($service['link']) ?>"
                                    class="premium-srv-btn text-decoration-none fw-bold d-inline-flex align-items-center">
                                    <span class="d-none d-sm-inline">Read Details</span><span
                                        class="d-inline d-sm-none">Details</span> <i
                                        class="bi bi-arrow-right ms-2 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
