<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'ISO Certification',
    'bc_desc' => "VP Max Packers and Movers - An ISO 9001:2015 Certified Company",
    'breadcrumbs' => [
        ['name' => 'ISO Certification']
    ]
]);
?>

<!-- Fancybox CSS (Local) -->


<!-- Main Content -->
<section class="service-details-section py-5">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="service-main-content">
                    <h2 class="mb-4 text-primary">ISO 9001:2015 Certified Packers and Movers</h2>
                    
                    <p class="fs-5 text-muted mb-4">
                        Quality is at the core of everything we do. <strong>VP Max Packers and Movers</strong> is proud to be an ISO 9001:2015 Certified Company, proving our commitment to maintaining the highest global standards in the relocation industry.
                    </p>

                    <div class="mb-4">
                        <h4 class="h5 mb-3"><i class="bi bi-shield-check text-success me-2"></i> What does this mean for you?</h4>
                        <ul class="list-group list-group-flush border-0">
                            <li class="list-group-item border-0 ps-0 bg-transparent">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>Consistent Quality:</strong> We adhere strictly to verified, systematic processes to handle your belongings with ultimate care.
                            </li>
                            <li class="list-group-item border-0 ps-0 bg-transparent">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>Reliable Logistics:</strong> Every stage of packing, loading, moving, and unloading is monitored and optimized for safety.
                            </li>
                            <li class="list-group-item border-0 ps-0 bg-transparent">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>Customer Satisfaction:</strong> Our primary objective aligns with ISO standards: ensuring our customers receive a problem-free and highly satisfying shifting experience.
                            </li>
                            <li class="list-group-item border-0 ps-0 bg-transparent">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> <strong>Continuous Improvement:</strong> We constantly upgrade our methods, packaging materials, and transport vehicles to exceed industry standards.
                            </li>
                        </ul>
                    </div>

                    <div class="mt-5 p-4 bg-light rounded shadow-sm border-start border-4 border-primary">
                        <p class="mb-0 fst-italic">"When you choose an ISO certified mover, you aren't just hiring a truck—you are partnering with a structured, verified, and highly professional organization."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="card border-0 shadow-lg certificate-card overflow-hidden rounded-4">
                    <div class="card-body p-3 bg-white text-center">
                        <a href="<?= base_url('assets/images/certificate/iso-9001-certification.webp') ?>" data-lightbox="image" data-caption="ISO 9001:2015 Quality Management Certification - VP Max Packers and Movers">
                            <img loading="lazy" src="<?= base_url('assets/images/certificate/iso-9001-certification.webp') ?>" 
                                 alt="ISO 9001:2015 Certified Packers and Movers Company" 
                                 title="VP Max Packers and Movers ISO Certification"
                                 class="img-fluid rounded certificate-img" 
                                 loading="lazy">
                        </a>
                        <p class="mt-3 mb-1 text-muted small fw-bold">Click to view certificate</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Fancybox JS (Local) -->
