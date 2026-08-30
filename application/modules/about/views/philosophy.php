<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Philosophy',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Our Philosophy']
    ]
]);
?>

<section class="philosophy-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <span class="text-primary fw-bold text-uppercase about-tracking-wider">What Drives Us</span>
                <h2 class="h1 fw-bolder mt-2 mb-3">Our Core Philosophy</h2>
                <p class="text-muted mx-auto about-mw-700">
                    At <?= htmlspecialchars($company3) ?>, we believe that moving is more than just transporting
                    boxes—it is about moving lives, memories, and dreams. Our philosophy is built on trust,
                    transparency, and a relentless commitment to customer satisfaction.
                </p>
                <div class="heading-divider mx-auto mt-3 mb-4"></div>
            </div>
        </div>

        <div class="row g-4 align-items-center mb-5 pb-4">
            <div class="col-lg-6">
                <img loading="lazy" src="<?= base_url('assets/images/about/our-team.webp') ?>" alt="Our Moving Philosophy"
                    class="img-fluid rounded-4 shadow-lg w-100 about-hero-img">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <h3 class="fw-bold mb-3">Customer First Approach</h3>
                <p class="text-muted mb-4 lead fs-6 about-lh-18">
                    Everything we do revolves around making your relocation as stress-free and seamless as possible. We
                    treat your belongings with the same care and respect as if they were our own.
                </p>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-check-circle-fill text-primary fs-5 me-3 mt-1"></i>
                        <div>
                            <strong class="d-block text-dark">Zero Compromise on Quality</strong>
                            <span class="text-muted small">Using premium multi-layer packing materials to ensure
                                absolute safety.</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="bi bi-check-circle-fill text-primary fs-5 me-3 mt-1"></i>
                        <div>
                            <strong class="d-block text-dark">100% Transparency</strong>
                            <span class="text-muted small">Honest, upfront pricing with no hidden charges or last-minute
                                surprises.</span>
                        </div>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-primary fs-5 me-3 mt-1"></i>
                        <div>
                            <strong class="d-block text-dark">Punctuality is Key</strong>
                            <span class="text-muted small">We respect your time and strictly adhere to our committed
                                schedules.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <!-- Value 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 text-center about-hover-lift bg-white">
                    <div
                        class="icon-wrap bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 about-icon-70">
                        <i class="bi bi-shield-lock fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Trust & Integrity</h5>
                    <p class="text-muted small mb-0">Building long-lasting relationships through honest practices and
                        reliable service delivery.</p>
                </div>
            </div>
            <!-- Value 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 text-center about-hover-lift bg-white">
                    <div
                        class="icon-wrap bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 about-icon-70">
                        <i class="bi bi-heart fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Empathy</h5>
                    <p class="text-muted small mb-0">Understanding the emotional value of your possessions and handling
                        them with utmost care.</p>
                </div>
            </div>
            <!-- Value 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100 p-4 text-center about-hover-lift bg-white">
                    <div
                        class="icon-wrap bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 about-icon-70">
                        <i class="bi bi-lightning-charge fs-2"></i>
                    </div>
                    <h5 class="fw-bold">Innovation</h5>
                    <p class="text-muted small mb-0">Continuously improving our techniques and adopting new technologies
                        for safer moves.</p>
                </div>
            </div>
        </div>

    </div>
</section>