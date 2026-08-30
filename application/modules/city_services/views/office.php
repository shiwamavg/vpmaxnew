<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>


<section class="home-page-slider"
    itemscope
    itemtype="https://schema.org/WPHeader">

    <div class="home-page-slider-content">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-10 hero-text-col text-start pb-4">

                    <!-- ISO BADGE -->

                    <div class="iso-badge d-inline-flex align-items-center mb-4 rounded-3 p-1 pe-3">

                        <div class="iso-icon-wrapper rounded text-white d-flex align-items-center justify-content-center me-3">

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

                            Office Shifting Services in <?= $city ?>

                        </h1>

                        <p class="hero-lead mt-3" itemprop="description">

                            Planning to relocate your office in <?= $city ?>?
                            Our professional office shifting services ensure
                            minimal downtime and smooth business transition.

                        </p>

                    </div>


                    <div class="row">

                        <div class="col-12 pb-3">

                            <nav aria-label="breadcrumb">

                                <ol class="pm-city-breadcrumb"
                                    itemscope
                                    itemtype="https://schema.org/BreadcrumbList">

                                    <li itemprop="itemListElement"
                                        itemscope
                                        itemtype="https://schema.org/ListItem">

                                        <a itemprop="item"
                                            href="<?= site_url() ?>"
                                            class="pm-bc-link">

                                            <span itemprop="name">
                                                Home
                                            </span>

                                        </a>

                                        <meta itemprop="position"
                                            content="1" />

                                    </li>


                                    <li class="pm-bc-sep">
                                        ›
                                    </li>


                                    <li itemprop="itemListElement"
                                        itemscope
                                        itemtype="https://schema.org/ListItem">

                                        <span itemprop="name"
                                            class="pm-bc-current"
                                            aria-current="page">

                                            Office Shifting Services in <?= $city ?>

                                        </span>

                                        <meta itemprop="position"
                                            content="2" />

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

                <strong>
                    100% Secure
                </strong>

                <span>
                    Your data is safe
                </span>

            </div>


            <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">

                <i class="bi bi-clock trust-icon-circle mb-2"></i>

                <strong>
                    Quick Reply
                </strong>

                <span>
                    Under 15 mins
                </span>

            </div>


            <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">

                <i class="bi bi-currency-rupee trust-icon-circle mb-2"></i>

                <strong>
                    Best Price
                </strong>

                <span>
                    Guaranteed rates
                </span>

            </div>


            <div class="col-3 d-flex flex-column align-items-center text-center trust-mobile-item">

                <i class="bi bi-headset trust-icon-circle mb-2"></i>

                <strong>
                    24/7 Support
                </strong>

                <span>
                    Always here
                </span>

            </div>

        </div>

    </div>

</div>


<div class="container my-5">

    <div class="row align-items-center">

        <div class="col-lg-7">

            <h2 class="fw-bold mb-3 red-color">

                Reliable Office Shifting Services in <?= $city ?>

            </h2>


            <p class="text-muted">

                Planning to relocate your office in <?= $city ?>?
                Our professional office shifting services ensure
                minimal downtime and smooth business transition.

            </p>


            <ul class="mt-3">

                <li>
                    IT & Server Relocation
                </li>

                <li>
                    Workstation Dismantling & Reinstallation
                </li>

                <li>
                    Secure Document Handling
                </li>

                <li>
                    Weekend & After-Hours Shifting
                </li>

            </ul>


            <button
                data-bs-target="#qteModal"
                data-bs-toggle="modal"
                class="btn btn-danger btn-submit mt-4">

                Get Corporate Quote

            </button>

        </div>


        <div class="col-lg-5 text-center mt-4 mt-lg-0">

            <img
                src="<?= base_url("assets/images/cityservice/office_shifting.webp") ?>"
                alt="Office Shifting Services in <?= $city ?>"
                class="img-fluid rounded shadow"
                loading="lazy">

        </div>

    </div>

</div>

<div class="container mt-5 mb-5">

    <div class="row">

        <div class="col-lg-12">

            <h2 class="fw-bold mb-4 red-color text-center">

                Complete Corporate Relocation Solutions

            </h2>

        </div>


        <div class="col-md-4 mb-4">

            <div class="p-4 h-100 shadow-sm rounded bg-white border">

                <div
                    class="mb-3 d-flex justify-content-center align-items-center
                    bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                    style="width:70px;height:70px;">

                    <i class="bi bi-box-seam fs-1"></i>

                </div>


                <h3 class="fw-bold text-center h5">

                    Corporate Packing

                </h3>


                <p class="text-muted text-center">

                    High-quality packing materials for computers,
                    office furniture and sensitive equipment.

                </p>

            </div>

        </div>


        <div class="col-md-4 mb-4">

            <div class="p-4 h-100 shadow-sm rounded bg-white border">

                <div
                    class="mb-3 d-flex justify-content-center align-items-center
                    bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                    style="width:70px;height:70px;">

                    <i class="bi bi-pc-display fs-1"></i>

                </div>


                <h3 class="fw-bold text-center h5">

                    IT Infrastructure Moving

                </h3>


                <p class="text-muted text-center">

                    Safe handling of servers, networking systems
                    and electronic assets with structured labeling.

                </p>

            </div>

        </div>


        <div class="col-md-4 mb-4">

            <div class="p-4 h-100 shadow-sm rounded bg-white border">

                <div
                    class="mb-3 d-flex justify-content-center align-items-center
                    bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                    style="width:70px;height:70px;">

                    <i class="bi bi-tools fs-1"></i>

                </div>


                <h3 class="fw-bold text-center h5">

                    Reinstallation Support

                </h3>


                <p class="text-muted text-center">

                    Furniture reassembly and workstation setup
                    for quick business resumption.

                </p>

            </div>

        </div>

    </div>

</div>


<div class="container mt-5 mb-5">

    <div class="row align-items-center">

        <div class="col-lg-8">

            <h2 class="fw-bold red-color">

                Why Choose Our Office Shifting Experts in <?= $city ?>?

            </h2>

            <p>

                Our experienced corporate relocation team ensures
                safe, efficient and time-bound office shifting services
                with zero operational disruption.

            </p>

        </div>


        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">

            <button
                class="btn btn-danger"
                data-bs-target="#qteModal"
                data-bs-toggle="modal">

                Schedule Free Site Survey

            </button>

        </div>

    </div>

</div>

<div class="container mt-5 mb-5">

    <div class="row">

        <div class="col-lg-12">

            <h3 class="text-center fw-bold text-danger mb-4">

                Our Office Relocation Process

            </h3>


            <p class="text-center text-muted mb-5">

                We follow a streamlined, efficient, and professional process
                for your safe move.

            </p>

        </div>


        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div
                class="mb-3 d-flex justify-content-center align-items-center
                bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                style="width:70px;height:70px;">

                <i class="bi bi-search fs-1"></i>

            </div>


            <h4>
                1. Site Inspection
            </h4>


            <p class="text-muted">

                Detailed evaluation & planning.

            </p>

        </div>


        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div
                class="mb-3 d-flex justify-content-center align-items-center
                bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                style="width:70px;height:70px;">

                <i class="bi bi-box-seam fs-1"></i>

            </div>


            <h4>
                2. Structured Packing
            </h4>


            <p class="text-muted">

                Labeling & asset tracking.

            </p>

        </div>

        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div
                class="mb-3 d-flex justify-content-center align-items-center
                bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                style="width:70px;height:70px;">

                <i class="bi bi-truck fs-1"></i>

            </div>


            <h4>
                3. Safe Transport
            </h4>


            <p class="text-muted">

                Insured & secure relocation.

            </p>

        </div>


        <div class="col-md-6 col-lg-3 text-center mb-4">

            <div
                class="mb-3 d-flex justify-content-center align-items-center
                bg-danger bg-opacity-10 text-danger rounded-circle mx-auto"
                style="width:70px;height:70px;">

                <i class="bi bi-box-arrow-down fs-1"></i>

            </div>


            <h4>
                4. Setup & Handover
            </h4>


            <p class="text-muted">

                Reinstallation & final verification.

            </p>

        </div>

    </div>

</div>


<div class="container mt-5 mb-5">

    <div class="row">

        <div class="col-lg-12">

            <h2
                class="fw-bold mb-4 text-center"
                style="color:#ee553b;">

                FAQs - Office Shifting in <?= $city ?>

            </h2>


            <div
                class="accordion shadow-sm mb-4"
                id="faqAccordion">


                <div class="accordion-item">

                    <span
                        class="accordion-header"
                        id="headingOne">

                        <button
                            class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne">

                            <strong>

                                Do you handle IT and server relocation?

                            </strong>

                        </button>

                    </span>


                    <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            Yes, our trained professionals manage secure
                            dismantling, packing and reinstallation.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <span
                        class="accordion-header"
                        id="headingTwo">

                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo">

                            <strong>

                                Can office shifting be done after working hours?

                            </strong>

                        </button>

                    </span>


                    <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            Absolutely. We offer weekend and night shifting
                            to avoid business interruption.

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>