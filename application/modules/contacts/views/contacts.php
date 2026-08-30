<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => "We'd love to hear from you. Get in touch with our relocation experts.",
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>
<div class="container">
    <?php $this->load->view('contacts/quoteform1') ?>

</div>
<!-- Main Page Content Section -->
<section class="contact-page-section py-5 bg-light">
    <div class="container">

        <div class="row align-items-stretch gy-4 mb-4">
            <!-- Left Side: Contact Information -->
            <div class="col-lg-12">
                <div class="contact-info-wrapper bg-white p-4 rounded-4 shadow-sm h-100 border-top border-4 border-primary">
                    <div class="text-center mb-4 row">
                        <div class="col-lg-8 mx-auto">
                            <h3 class="fw-bold mb-3">Get In Touch With Us</h3>
                            <p class="text-secondary">
                                Whether you're planning a local move or an international relocation, our team is ready to assist you every step of the way. Reach out to us via phone, email, or visit our office.
                            </p>
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <!-- Head Office -->
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-3 rounded-4 bg-light h-100 border">
                                <div class="icon-box bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm p-3 lh-1">
                                    <i class="bi bi-geo-alt-fill fs-2 lh-1"></i>
                                </div>
                                <h6 class="fw-bold mb-2">Head Office</h6>
                                <p class="text-secondary mb-0 small">
                                    <?= $this->comp['address'] ?? 'Indore, Madhya Pradesh, India' ?>
                                </p>
                            </div>
                        </div>

                        <!-- Call Us -->
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-3 rounded-4 bg-light h-100 border">
                                <div class="icon-box bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm p-3 lh-1">
                                    <i class="bi bi-telephone-fill fs-2 lh-1"></i>
                                </div>
                                <h6 class="fw-bold mb-2">Call Us (24/7)</h6>
                                <p class="mb-1 small"><a href="tel:<?= $this->comp['phone1'] ?>" class="text-decoration-none text-secondary fw-medium"><?= $this->comp['phone1'] ?></a></p>
                                <?php if (!empty($this->comp['phone2'])): ?>
                                    <p class="mb-0 small"><a href="tel:<?= $this->comp['phone2'] ?>" class="text-decoration-none text-secondary fw-medium"><?= $this->comp['phone2'] ?></a></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Email Us -->
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-3 rounded-4 bg-light h-100 border">
                                <div class="icon-box bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm p-3 lh-1">
                                    <i class="bi bi-envelope-fill fs-2 lh-1"></i>
                                </div>
                                <h6 class="fw-bold mb-2">Email Us</h6>
                                <p class="mb-0 small"><a href="<?= $mailhtml ?>" class="text-decoration-none text-secondary fw-medium"><?= $mail ?></a></p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-3 rounded-4 bg-light h-100 border">
                                <div class="icon-box bg-white text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm p-3 lh-1">
                                    <i class="bi bi-clock-fill fs-2 lh-1"></i>
                                </div>
                                <h6 class="fw-bold mb-2">Working Hours</h6>
                                <p class="text-secondary mb-0 small">Monday - Sunday<br>24 Hours Open</p>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-5 text-muted opacity-25">

                    <div class="text-center">
                        <h5 class="fw-bold mb-4 text-dark">Connect With Us on Social Media</h5>
                        <div class="d-flex justify-content-center gap-3 social-icons-wrapper flex-wrap">
                            <a href="<?= $this->comp['facebookhtml'] ?>" class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-3" target="_blank" aria-label="Facebook"><i class="bi bi-facebook fs-5 lh-1"></i></a>
                            <a href="<?= $this->comp['instagramhtml'] ?>" class="btn btn-outline-danger rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-3" target="_blank" aria-label="Instagram"><i class="bi bi-instagram fs-5 lh-1"></i></a>
                            <a href="<?= $this->comp['youtubehtml'] ?>" class="btn btn-outline-danger rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-3" target="_blank" aria-label="YouTube"><i class="bi bi-youtube fs-5 lh-1"></i></a>
                            <a href="<?= $this->comp['pinteresthtml'] ?>" class="btn btn-outline-danger rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-3" target="_blank" aria-label="Pinterest"><i class="bi bi-pinterest fs-5 lh-1"></i></a>
                            <a href="<?= $this->comp['twitterhtml'] ?>" class="btn btn-dark rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-3" target="_blank" aria-label="Twitter"><i class="bi bi-twitter-x fs-5 lh-1"></i></a>
                            <a href="<?= $this->comp['linkedinhtml'] ?>" class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-3" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin fs-5 lh-1"></i></a>
                            <a href="<?= $this->comp['snapchathtml'] ?>" class="btn btn-outline-warning text-dark rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-3" target="_blank" aria-label="Snapchat"><i class="bi bi-snapchat fs-5 lh-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google Map Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="map-wrapper rounded-4 overflow-hidden shadow-sm border">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.5631140022533!2d75.88614617508426!3d22.781589179343335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396303c6274d888b%3A0x16c0c9598b0ea87b!2sVP%20Max%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1785992711715!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $this->load->view('branch_address_widget'); ?>
<!-- Custom JS for Contact Form Submission -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const submitBtn = this.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.innerHTML;
                const resultsDiv = document.getElementById('contactFormResults');

                // Show loading state
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Sending...';
                submitBtn.disabled = true;

                const formData = new FormData(this);
                const url = this.getAttribute('data-url');

                fetch(url, {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(data => {
                        if (data.trim() === '1') {
                            resultsDiv.innerHTML = '<div class="alert alert-success fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Message sent successfully! Our team will contact you shortly.</div>';
                            contactForm.reset();
                        } else {
                            resultsDiv.innerHTML = data; // Usually validation errors returned from CI
                        }
                    })
                    .catch(error => {
                        resultsDiv.innerHTML = '<div class="alert alert-danger fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i>An error occurred. Please try again.</div>';
                    })
                    .finally(() => {
                        submitBtn.innerHTML = originalBtnText;
                        submitBtn.disabled = false;
                    });
            });
        }
    });
</script>