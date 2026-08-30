<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Certificates',
    'bc_desc' => "Our Accreditations and Certificates",
    'breadcrumbs' => [
        ['name' => 'Our Certificates']
    ]
]);
?>


<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-main-content mt-5">
                    <h2 class="text-center mb-4">Our Accreditations and Certifications</h2>
                    <p class="text-center mb-5 text-muted" style="max-width: 800px; margin: 0 auto;">We take pride in
                        our various industry certifications that validate our service quality. As a trusted moving
                        company, we maintain the highest standards of safety, reliability, and professionalism across
                        India.</p>

                    <div class="row g-4">
                        <?php
                        $certificates = [
                            ['file' => 'udyam-registration-certificate.webp', 'alt' => 'UDYAM Registration Certificate for VP Max Packers and Movers'],
                            ['file' => 'iso-9001-certification.webp', 'alt' => 'ISO 9001:2015 Quality Management Certification'],
                            ['file' => 'company-quotation-format.webp', 'alt' => 'Official Company Quotation Format'],
                            ['file' => 'packers-and-movers-terms-conditions.webp', 'alt' => 'Standard Terms and Conditions Document'],
                            ['file' => 'gst.png', 'alt' => 'GST-IN Certificate for VP Max Packers and Movers - REG-06'],
                            ['file' => 'government-registered-moving-company-1.webp', 'alt' => 'GST-IN Certificate for VP Max Packers and Movers - Annexure A'],
                            ['file' => 'government-registered-moving-company-2.webp', 'alt' => 'GST-IN Certificate for VP Max Packers and Movers - Annexure B'],
                        ];

                        foreach ($certificates as $cert): ?>
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="card h-100 border-0 shadow-sm certificate-card overflow-hidden">
                                    <div
                                        class="card-body p-2 d-flex align-items-center justify-content-center bg-light rounded">
                                        <a href="<?= base_url('assets/images/certificate/' . $cert['file']) ?>"
                                            data-lightbox="image" data-caption="<?= $cert['alt'] ?>">
                                            <img loading="lazy"
                                                src="<?= base_url('assets/images/certificate/' . $cert['file']) ?>"
                                                alt="<?= $cert['alt'] ?>" title="<?= $cert['alt'] ?>"
                                                class="img-fluid rounded w-100 certificate-img" loading="lazy">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>