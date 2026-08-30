<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Awards Gallery ',
    'bc_desc' => '',
    'breadcrumbs' => [
        ['name' => 'Awards']
    ]
]);
?>

<section class="gallery-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-12">
                <span class="text-primary fw-bold text-uppercase about-tracking-wider">Our Achievements</span>
                <h2 class="h1 fw-bolder mt-2 mb-3">Awards & Recognitions</h2>
                <p class="text-muted mx-auto about-mw-600">
                    Take a look at our proud moments, prestigious awards, and the certifications that make us the most
                    trusted packing and moving company in India.
                </p>
                <div class="heading-divider mx-auto mt-3 mb-4"></div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Gallery Item 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 about-hover-lift">
                    <img loading="lazy" src="<?= base_url('assets/images/certificate/iso-9001-certification.webp') ?>"
                        class="card-img-top about-cert-img" alt="ISO Certification">
                    <div class="card-body text-center bg-white border-top">
                        <h5 class="card-title fw-bold">ISO 9001:2015 Certified</h5>
                        <p class="card-text text-muted small">Quality Management System Certification</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 about-hover-lift">
                    <img loading="lazy" src="<?= base_url('assets/images/certificate/government-registered-moving-company-1.webp') ?>"
                        class="card-img-top about-cert-img" alt="Government Approved">
                    <div class="card-body text-center bg-white border-top">
                        <h5 class="card-title fw-bold">Govt. Approved Company</h5>
                        <p class="card-text text-muted small">Recognized and registered with the Government</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 about-hover-lift">
                    <img loading="lazy" src="<?= base_url('assets/images/about/our-team.webp') ?>" class="card-img-top about-team-img" alt="Our Team">
                    <div class="card-body text-center bg-white border-top">
                        <h5 class="card-title fw-bold">Our Professional Team</h5>
                        <p class="card-text text-muted small">Dedicated staff ensuring safe relocations</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5 pt-4">
            <div class="col-12 text-center">
                <div class="bg-white p-5 rounded-4 shadow-sm border border-light">
                    <h3 class="fw-bold mb-3">Experience the Best Moving Services</h3>
                    <p class="text-muted mb-4">Join thousands of satisfied customers who have trusted us with their
                        precious belongings.</p>
                    <a href="<?= site_url('contact-us') ?>"
                        class="btn btn-primary px-5 py-3 rounded-pill fw-bold shadow-sm">
                        Get a Free Quote Now <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>