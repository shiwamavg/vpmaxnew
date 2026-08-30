<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Sitemap',
    'bc_desc' => 'Navigate through our website easily.',
    'breadcrumbs' => [
        ['name' => 'Sitemap']
    ]
]);
?>

<section class="service-details-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sitemap-wrapper bg-white shadow-sm rounded-4 p-4 p-md-5">
                    <h2 class="mb-4">Sitemap</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-4">
                            <h4 class="h5 border-bottom pb-2 mb-3 text-primary">Company</h4>
                            <ul class="list-unstyled sitemap-list">
                                <li><a href="<?= site_url() ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Home</a></li>
                                <li><a href="<?= site_url('about-us') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> About Us</a></li>
                                <li><a href="<?= site_url('mission-and-vision') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Mission and Vision</a></li>
                                <li><a href="<?= site_url('iba-approved-packers') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> IBA Approved Packers</a></li>
                                <li><a href="<?= site_url('certificates') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Our Certificates</a></li>
                                <li><a href="<?= site_url('iso-certification') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> ISO Certification</a></li>
                                <li><a href="<?= site_url('why-choose-us') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Why Choose Us</a></li>
                                <li><a href="<?= site_url('contact-us') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Contact Us</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <h4 class="h5 border-bottom pb-2 mb-3 text-primary">Our Services</h4>
                            <ul class="list-unstyled sitemap-list">
                                <li><a href="<?= site_url('household-shifting') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Household Shifting</a></li>
                                <li><a href="<?= site_url('office-shifting') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Office Shifting</a></li>
                                <li><a href="<?= site_url('local-shifting') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Local Shifting</a></li>
                                <li><a href="<?= site_url('domestic-shifting') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Domestic Shifting</a></li>
                                <li><a href="<?= site_url('international-shifting') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> International Shifting</a></li>
                                <li><a href="<?= site_url('car-transportation-service') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Car Transportation</a></li>
                                <li><a href="<?= site_url('bike-transportation-service') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Bike Transportation</a></li>
                                <li><a href="<?= site_url('loading-and-unloading') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Loading and Unloading</a></li>
                                <li><a href="<?= site_url('warehouse-and-storage-services') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Warehouse & Storage</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h4 class="h5 border-bottom pb-2 mb-3 text-primary">Useful Links</h4>
                            <ul class="list-unstyled sitemap-list">
                                <li><a href="<?= site_url('tracking') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Track Consignment</a></li>
                                <li><a href="<?= site_url('our-location') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Our Network</a></li>
                                <li><a href="<?= site_url('payment-mode') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Payment Mode</a></li>
                                <li><a href="<?= site_url('reviews') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Customer Reviews</a></li>
                                <li><a href="<?= site_url('photo-gallery') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Photo Gallery</a></li>
                                <li><a href="<?= site_url('video-gallery') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Video Gallery</a></li>
                                <li><a href="<?= site_url('blog') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Moving Tips & Blog</a></li>
                                <li><a href="<?= site_url('moving-guide') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Moving Guide</a></li>
                                <li><a href="<?= site_url('packing-material') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Packing Material Guide</a></li>
                                <li><a href="<?= site_url('avoid-fraud-packers-and-movers') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Avoid Fraud Movers</a></li>
                                <li><a href="<?= site_url('privacy-policy') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Privacy Policy</a></li>
                                <li><a href="<?= site_url('terms-and-conditions') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Terms & Conditions</a></li>
                                <li><a href="<?= site_url('refund-policy') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Refund Policy</a></li>
                                <li><a href="<?= site_url('disclaimer') ?>" class="text-decoration-none text-dark"><i class="bi bi-chevron-right small text-muted me-2"></i> Disclaimer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


