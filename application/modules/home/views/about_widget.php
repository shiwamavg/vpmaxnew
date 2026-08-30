<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>

<section class="about-premium-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Image Showcase -->
            <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                <div class="about-premium-image-wrapper">
                    <!-- Image -->
                    <div class="image-primary position-relative z-index-2">
                        <img loading="lazy" src="<?= base_url('assets/images/about/our-team.webp') ?>"
                            alt="Best Packers and Movers <?= isset($city) ? 'in ' . ucfirst($city) : '' ?> - <?= htmlspecialchars($company3) ?>"
                            class="img-fluid shadow-lg w-100 main-img" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-7 col-12 ps-lg-4">
                <div class="about-premium-content">

                    <!-- Subtitle -->
                    <div class="premium-subtitle-wrap d-flex align-items-center mb-2">
                        <div class="sub-line-icon"><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i></div>
                        <span class="premium-subtitle-text text-uppercase font-weight-bold mx-2 text-primary">ABOUT
                            <?= htmlspecialchars($company3) ?></span>
                        <div class="sub-line-icon"><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i></div>
                    </div>

                    <!-- SEO Heading -->
                    <h2 class="premium-title mb-2">
                        <span class="fw-normal">Best</span> Packers and Movers <?= isset($city) ? '<span class="fw-normal">in ' . ucfirst($city) . '</span>' : '' ?>
                    </h2>

                    <div class="heading-divider mb-3"></div>

                    <!-- Descriptions (SEO Optimized) -->
                    <p class="premium-text-desc mb-3">
                        Are you searching for trusted and professional <strong class="text-primary">Packers and
                            Movers<?= isset($city) ? ' in ' . ucfirst($city) : '' ?></strong>? At
                        <?= htmlspecialchars($company3) ?>, we are dedicated to making your moving experience completely
                        stress-free. We specialize in providing top-tier local
                        shifting<?= isset($city) ? ' within ' . ucfirst($city) : '' ?> and highly secure intercity
                        relocation services tailored perfectly to your family or business needs.
                    </p>

                    <p class="premium-text-desc mb-4">
                        With over <?= htmlspecialchars($experience) ?> years of excellence, we have emerged as the
                        leading choice for home shifting, office relocation, and safe vehicle transport. Our highly
                        trained team utilizes advanced multi-layer packaging techniques and a modern GPS-enabled
                        transport fleet to ensure that your belongings are moved safely and securely, on time, every
                        single time.
                    </p>

                    <!-- Features Grid -->
                    <div class="row g-2 g-sm-3 mb-4 premium-features-grid">
                        <div class="col-6 mb-2">
                            <div class="premium-feat-box d-flex align-items-center h-100">
                                <div class="feat-icon me-2 me-sm-3"><i class="bi bi-shield-check"></i></div>
                                <div>
                                    <span class="feat-title mb-1">100% Safe Shifting</span>
                                    <p class="feat-desc mb-0">Secure packing & moving<br>with utmost care</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="premium-feat-box d-flex align-items-center h-100">
                                <div class="feat-icon me-2 me-sm-3"><i class="bi bi-wallet2"></i></div>
                                <div>
                                    <span class="feat-title mb-1">Affordable Rates</span>
                                    <p class="feat-desc mb-0">Transparent pricing with<br>no hidden charges</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="premium-feat-box d-flex align-items-center h-100">
                                <div class="feat-icon me-2 me-sm-3"><i class="bi bi-geo-alt"></i></div>
                                <div>
                                    <span class="feat-title mb-1">Local & Intercity</span>
                                    <p class="feat-desc mb-0">Seamless relocation<br>anywhere in India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="premium-feat-box d-flex align-items-center h-100">
                                <div class="feat-icon me-2 me-sm-3"><i class="bi bi-clock"></i></div>
                                <div>
                                    <span class="feat-title mb-1">On-Time Delivery</span>
                                    <p class="feat-desc mb-0">Fast, reliable & always<br>on schedule</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="premium-cta-area d-flex flex-wrap align-items-center gap-3">
                        <div class="cta-phone-box shadow-sm d-flex align-items-center">
                            <div
                                class="cta-phone-icon bg-white text-primary rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-telephone-outbound"></i>
                            </div>
                            <div class="cta-phone-text ms-3">
                                <span class="d-block small text-light text-uppercase mb-1">Call For Free Quote</span>
                                <a href="<?= htmlspecialchars($phonehtml) ?>"
                                    class="text-white font-weight-bold h5 mb-0 text-decoration-none">
                                    <?= htmlspecialchars($phone) ?>
                                </a>
                            </div>
                        </div>

                        <a href="<?= site_url('about-us') ?>"
                            class="cta-more-box shadow-sm d-flex align-items-center text-decoration-none bg-white">
                            <div
                                class="cta-more-icon text-white rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                            <div class="cta-more-text ms-3">
                                <span class="d-block font-weight-bold text-dark mb-1 h6">Discover More About Us</span>
                                <span class="d-block small text-muted">Learn how we make your move easy &
                                    stress-free</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>