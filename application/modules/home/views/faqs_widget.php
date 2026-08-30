<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$faqs = [
    [
        'question' => '1. What services do VP Max Packers and Movers provide?',
        'answer' => 'We provide a wide range of services including household shifting, office relocation, car transportation, bike transportation, packing & unpacking, loading & unloading, and warehousing & storage solutions.',
        'icon' => ''
    ],
    [
        'question' => '2. How do I get a quote for my move?',
        'answer' => 'You can request a quote by filling out our online form or by contacting our customer support team.',
        'icon' => ''
    ],
    [
        'question' => '3. Do you provide packing materials?',
        'answer' => 'Yes, we provide high-quality packing materials to ensure the safety of your belongings during transit.',
        'icon' => ''
    ],
    [
        'question' => '4. Is my belongings safe during transportation?',
        'answer' => 'Absolutely, we take utmost care of your belongings and offer transit insurance for added safety and peace of mind.',
        'icon' => ''
    ],
    [
        'question' => '5. Do you offer insurance for my goods?',
        'answer' => 'Yes, we provide transit insurance options to ensure your goods and vehicle are fully protected.',
        'icon' => ''
    ],
    [
        'question' => '6. How long does a typical move take?',
        'answer' => 'The duration depends on the distance and volume of goods. Local moves take a day, while inter-city moves can take 3-7 days.',
        'icon' => ''
    ],
    [
        'question' => '7. Do you provide services outside Indore?',
        'answer' => 'Yes, we provide safe and reliable shifting services across India.',
        'icon' => ''
    ]
];
?>

<section class="faq-section py-4">
    <div class="faq-bg-decor top-left"></div>
    <div class="faq-bg-decor bottom-right"></div>

    <div class="container position-relative about-z2">
        <!-- FAQ Badge & Header -->
        <div class="faq-header-wrap text-center mb-4">
            <div class="faq-badge-container d-flex align-items-center justify-content-center mb-2">
                <span class="badge-line"></span>
                <span class="faq-pill-badge px-3 text-primary bg-transparent faq-text-blue-important">FAQS</span>
                <span class="badge-line"></span>
            </div>
            <h2 class="faq-section-title mb-1 fw-bold faq-text-dark">Frequently Asked
                Questions</h2>
            <p class="faq-section-subtitle mb-0 faq-text-muted-custom">Find answers to common
                questions about our packing and moving services.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- Left Column: Support & Image -->
            <div class="col-lg-5 d-flex flex-column">

                <!-- Support Card -->
                <div
                    class="support-card bg-white rounded-3 shadow-sm py-2 px-3 mb-3 d-flex align-items-center justify-content-between border-0">
                    <div class="d-flex align-items-center gap-3">
                        <div class="support-icon rounded-circle d-flex align-items-center justify-content-center bg-primary text-white faq-icon-size-40">
                            <i class="bi bi-headset fs-5"></i>
                        </div>
                        <div>
                            <span class="mb-0 fw-bold text-dark">Still have questions?</span>
                            <p class="mb-0 text-muted small faq-lh-13">Our support team is
                                always ready<br>to help you.</p>
                        </div>
                    </div>
                    <div class="border-start ps-3 ms-2 d-flex align-items-center gap-2 support-phone-wrap faq-border-light">
                        <div class="rounded-circle border d-flex align-items-center justify-content-center bg-white faq-icon-size-30 faq-border-light">
                            <i class="bi bi-telephone text-dark faq-fs-12"></i>
                        </div>
                        <div>
                            <span class="d-block text-muted small faq-mb-1px">Call Us
                                Now</span>
                            <a href="<?= $phonehtml ?>" class="fw-bold text-decoration-none faq-text-blue"><?= $phone ?></a>
                        </div>
                    </div>
                </div>

                <!-- Image and Badges -->
                <div class="faq-image-outer-wrapper position-relative flex-grow-1 faq-card-img-wrap">
                    <div class="faq-image-inner rounded-4 overflow-hidden w-100 h-100 bg-light faq-pos-abs-fill">
                        <img loading="lazy" src="<?= base_url('assets/images/about/packing-box.webp') ?>" alt="VP Max Movers"
                            class="img-fluid w-100 h-100 object-fit-cover">
                    </div>

                    <!-- Blue Banner Badge -->
                    <div class="faq-trust-badge position-absolute start-50 translate-middle-x d-flex align-items-center justify-content-around py-2 px-2 rounded-3 shadow-lg bg-primary text-white faq-overlay-box">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center text-primary faq-icon-size-32">
                                <i class="bi bi-shield-check faq-fs-16"></i>
                            </div>
                            <div>
                                <span class="d-block mb-0 fw-bold text-white">100% Safe & Secure</span>
                                <span class="small faq-text-desc">Your
                                    belongings are<br>in safe hands</span>
                            </div>
                        </div>

                        <div class="border-end border-light opacity-50 h-75 mx-1"></div>

                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center text-primary faq-icon-size-32">
                                <i class="bi bi-hand-thumbs-up faq-fs-16"></i>
                            </div>
                            <div>
                                <span class="d-block mb-0 fw-bold text-white"><?= $experience ?> Years Experience</span>
                                <span class="small faq-text-desc">Trusted
                                    by thousands of<br>happy customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Accordion -->
            <div class="col-lg-7">
                <div class="accordion faq-accordion-custom" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="accordion-item mb-2 bg-white rounded-3 shadow-sm faq-accordion-item">
                            <span class="accordion-header d-block" id="faqHeading<?= $index ?>">
                                <button
                                    class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?> bg-white shadow-none py-2 px-3 d-flex align-items-center gap-3 border-0"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse<?= $index ?>"
                                    aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"
                                    aria-controls="faqCollapse<?= $index ?>">

                                    <!-- Custom Icon -->
                                    <span class="faq-toggle-icon rounded-circle d-flex align-items-center justify-content-center text-white faq-accordion-icon-box">
                                        <i class="bi bi-plus faq-icon-plus faq-accordion-icon"></i>
                                        <i class="bi bi-dash faq-icon-minus faq-accordion-icon"></i>
                                    </span>

                                    <span class="faq-question-text">
                                        <?= htmlspecialchars($faq['question']) ?>
                                    </span>
                                </button>
                            </span>
                            <div id="faqCollapse<?= $index ?>"
                                class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>"
                                aria-labelledby="faqHeading<?= $index ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body pt-2 pb-3 px-4 ms-5 me-3 mb-2 border-0 small faq-accordion-body-custom">
                                    <?= htmlspecialchars($faq['answer']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
