<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<section class="home-page-slider" itemscope itemtype="https://schema.org/WPHeader">

    <div class="home-page-slider-content">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-10 hero-text-col text-start pb-4">

                    <div class="iso-badge d-inline-flex align-items-center mb-4 rounded-3 p-1 pe-3">

                        <div
                            class="iso-icon-wrapper rounded text-white d-flex align-items-center justify-content-center me-3">
                            <i class="bi bi-shield-check fs-5"></i>
                        </div>

                        <span class="text-white fw-medium lh-sm iso-badge-text">
                            ISO Certified & Government
                            Authorised<br>
                            Packers and Movers
                        </span>

                    </div>

                    <div class="hero-text-box ms-0">

                        <h1 class="hero-title" itemprop="name">
                            Home Shifting Services in <?= $city ?>
                        </h1>

                        <p class="hero-lead mt-3" itemprop="description">
                            Planning to relocate within <?= $city ?>? Our professional
                            packers and movers ensure safe, secure and hassle-free
                            house shifting services tailored to your needs.
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

                                        <span itemprop="name" class="pm-bc-current" aria-current="page">

                                            Home Shifting Services in <?= $city ?>

                                        </span>

                                        <meta itemprop="position" content="2" />

                                    </li>

                                </ol>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<div class="container hero-quote-wrapper">

    <div class="row">

        <div class="col-12">

            <?php $this->load->view('contacts/quoteform.php'); ?>

        </div>

    </div>

</div>


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

        <div class="col-lg-7">

            <h2 class="fw-bold mb-3 red-color">
                Trusted Home Shifting Services in <?= $city ?>
            </h2>

            <p class="text-muted">
                Planning to relocate within <?= $city ?>? Our professional
                packers and movers ensure safe, secure and hassle-free
                house shifting services tailored to your needs.
            </p>

            <ul class="mt-3">

                <li>Premium packing materials</li>

                <li>Safe loading & transportation</li>

                <li>Experienced relocation experts</li>

                <li>Transparent pricing structure</li>

            </ul>

            <div class="mt-4">

                <button data-bs-target="#qteModal" data-bs-toggle="modal" class="btn btn-danger btn-submit">

                    Get Free Quote in 30 Min

                </button>

            </div>

        </div>


        <div class="col-lg-5 text-center mt-4 mt-lg-0">

            <img src="<?= base_url("assets/images/cityservice/home_shifting.webp") ?>"
                alt="Home Shifting Services in <?= $city ?>" loading="lazy" class="img-fluid rounded shadow">

        </div>

    </div>

</div>


<div class="container mt-5 mb-5">

    <div class="row">

        <div class="col-lg-12">

            <h2 class="fw-bold mb-4 red-color text-center">
                Complete House Relocation Solutions
            </h2>

        </div>


        <div class="col-md-4 mb-4">

            <div class="p-4 h-100 shadow-sm rounded bg-white border">

                <div class="mb-3 d-flex justify-content-center align-items-center
                            bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                    style="width:70px;height:70px;">

                    <i class="bi bi-box-seam fs-1"></i>

                </div>

                <h3 class="fw-bold text-center h5">
                    Professional Packing
                </h3>

                <p class="text-muted text-center">
                    We use bubble wrap, wooden crates and multi-layer
                    packaging to protect fragile items during relocation.
                </p>

            </div>

        </div>


        <div class="col-md-4 mb-4">

            <div class="p-4 h-100 shadow-sm rounded bg-white border">

                <div class="mb-3 d-flex justify-content-center align-items-center
                            bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                    style="width:70px;height:70px;">

                    <i class="bi bi-truck fs-1"></i>

                </div>

                <h3 class="fw-bold text-center h5">
                    Safe Transportation
                </h3>

                <p class="text-muted text-center">
                    Modern fleet with trained drivers ensures timely
                    and damage-free delivery anywhere from <?= $city ?>.
                </p>

            </div>

        </div>


        <div class="col-md-4 mb-4">

            <div class="p-4 h-100 shadow-sm rounded bg-white border">

                <div class="mb-3 d-flex justify-content-center align-items-center
                            bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                    style="width:70px;height:70px;">

                    <i class="bi bi-box-arrow-down fs-1"></i>

                </div>

                <h3 class="fw-bold text-center h5">
                    Unpacking & Setup
                </h3>

                <p class="text-muted text-center">
                    We help unload, unpack and rearrange items
                    for a smooth relocation experience.
                </p>

            </div>

        </div>

    </div>

</div>


<div class="container mt-5 mb-5">

    <div class="row align-items-center">

        <div class="col-lg-8">

            <h2 class="fw-bold red-color">
                Why Choose Our Packers and Movers in <?= $city ?>?
            </h2>

            <p>
                With years of relocation expertise, we deliver secure,
                affordable and professional home shifting services.
            </p>

        </div>


        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">

            <button class="btn btn-danger" data-bs-target="#qteModal" data-bs-toggle="modal">

                Book Your Move Today

            </button>

        </div>

    </div>

</div>


<div class="container mt-5 mb-5">

    <div class="row">

        <div class="col-lg-12">

            <h3 class="text-center fw-bold text-danger mb-4">
                Our Moving Process
            </h3>

            <p class="text-center text-muted mb-5">
                We follow a streamlined, efficient, and professional process
                for your safe move.
            </p>

        </div>


        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div class="mb-3 d-flex justify-content-center align-items-center
                        bg-danger bg-opacity-10 text-danger rounded-circle mx-auto" style="width:70px;height:70px;">

                <i class="bi bi-search fs-1"></i>

            </div>

            <h4>1. Survey</h4>

            <p class="text-muted">
                Free inspection & quotation.
            </p>

        </div>


        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div class="mb-3 d-flex justify-content-center align-items-center
                        bg-danger bg-opacity-10 text-danger rounded-circle mx-auto" style="width:70px;height:70px;">

                <i class="bi bi-box-seam fs-1"></i>

            </div>

            <h4>2. Packing</h4>

            <p class="text-muted">
                Secure professional packing.
            </p>

        </div>


        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div class="mb-3 d-flex justify-content-center align-items-center
                        bg-danger bg-opacity-10 text-danger rounded-circle mx-auto" style="width:70px;height:70px;">

                <i class="bi bi-truck fs-1"></i>

            </div>

            <h4>3. Transport</h4>

            <p class="text-muted">
                Safe & timely relocation.
            </p>

        </div>


        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div class="mb-3 d-flex justify-content-center align-items-center
                        bg-danger bg-opacity-10 text-danger rounded-circle mx-auto" style="width:70px;height:70px;">

                <i class="bi bi-box-arrow-down fs-1"></i>

            </div>

            <h4>4. Delivery</h4>

            <p class="text-muted">
                Unloading & arrangement.
            </p>

        </div>

    </div>

</div>

<div class="container mt-5 mb-5">

    <div class="row">

        <div class="col-lg-12">

            <h2 class="fw-bold mb-4 text-center" style="color:#ee553b;">

                FAQs - Home Shifting in <?= $city ?>

            </h2>


            <div class="accordion shadow-sm mb-4" id="faqAccordion">

                <div class="accordion-item">

                    <span class="accordion-header" id="headingOne">

                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                            <strong>
                                What is the cost of home shifting?
                            </strong>

                        </button>

                        </span>

                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                Pricing depends on distance, item volume and
                                required services. Contact us at <a href="<?= $phonehtml ?>"><?= $phone ?></a> for a
                                free quote.

                            </div>

                        </div>

                </div>

                <div class="accordion-item">

                    <span class="accordion-header" id="headingTwo">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                            <strong>
                                Is transit insurance available?
                            </strong>

                        </button>

                    </span>


                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            Yes, we offer insurance coverage for added protection.

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>