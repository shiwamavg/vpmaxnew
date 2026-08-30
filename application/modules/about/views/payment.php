<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Payment Mode',
    'bc_desc' => "Secure Payment Methods",
    'breadcrumbs' => [
        ['name' => 'Payment Mode']
    ]
]);
?>

<div class="container py-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4 pb-4 border-b border-light border-bottom">
        <div>
            <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary fw-bold px-3 py-2 text-uppercase badge-custom">Secure Payment Gateway</span>
            <h1 class="h2 fw-extrabold text-dark mt-2 mb-0 fw-bold">Payment <span class="text-cyan">Information</span></h1>
            <p class="text-muted mb-0 mt-1">Complete your transaction safely using our verified business details.</p>
        </div>
        </div>
    <div class="bg-cyan-soft border-start border-4 border-success rounded-3 p-4 mb-5 shadow-sm">
        <div class="d-flex gap-3 align-items-start">
            <div class="bg-success text-white p-2 rounded-3 shadow-sm">
                <i class="fa-solid fa-shield-heart fs-4"></i>
            </div>
            <div>
                <h3 class="h5 fw-bold text-dark d-flex flex-wrap align-items-center gap-2 mb-1">
                    Pay After Completion
                    <span class="badge bg-success text-white text-uppercase" style="font-size: 0.65rem;">Customer First</span>
                </h3>
                <p class="text-secondary mb-0 leading-relaxed">Please pay <strong>only after your move is fully completed</strong> and you are satisfied with the delivery. Your satisfaction is our absolute priority.</p>
            </div>
        </div>
    </div>
    <div class="row g-4 mb-5">
                <div class="col-lg-6">
            <div class="bg-white rounded-4 p-3 h-100 shadow-sm border border-light d-flex align-items-center justify-content-center">
                <div class="w-100 text-center">
                    <img loading="lazy" src="<?= base_url('assets/images/about/qrcode_vpmax.webp') ?>" alt="VP Max Packers and Movers SBI QR Code" class="img-fluid rounded-3 shadow-sm border" style="max-height: 520px; object-fit: contain;">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="bg-white rounded-4 p-4 p-md-5 h-100 shadow-sm border border-light d-flex flex-column justify-content-between">
                <div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-cyan-soft p-2.5 rounded-3 text-dark">
                            <i class="fa-solid fa-building-columns fs-5"></i>
                        </div>
                        <h2 class="h5 fw-bold text-dark mb-0">Direct Bank Transfer Details</h2>
                    </div>
                    <div class="border rounded-3 overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom bg-light bg-opacity-50">
                            <span class="text-muted small fw-bold text-uppercase">Beneficiary Name</span>
                            <span class="fw-bold text-dark text-end">VP MAX PACKERS AND MOVERS</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom bg-light bg-opacity-50">
                            <span class="text-muted small fw-bold text-uppercase">Bank Name</span>
                            <span class="fw-bold text-dark">State Bank of India</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                            <span class="text-muted small fw-bold text-uppercase">Account Type</span>
                            <span class="badge bg-cyan-soft text-dark fw-bold border border-info">Current Account</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom bg-cyan-soft">
                            <span class="text-dark small fw-bold text-uppercase">Account A/C</span>
                            <span class="fw-bold text-dark font-monospace fs-5">44473700074</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom bg-cyan-soft">
                            <span class="text-dark small fw-bold text-uppercase">Bank IFSC</span>
                            <span class="fw-bold text-dark font-monospace fs-5">SBIN0003218</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center p-3 bg-primary bg-opacity-10">
                            <span class="text-primary small fw-bold text-uppercase">Merchant UPI ID</span>
                            <span class="fw-bold text-dark text-break ps-2">vp452010maxpackersandmovers@sbi</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4 p-3 bg-primary bg-opacity-10 rounded-3 border border-danger-subtle">
                    <div class="d-flex gap-2.5">
                        <span class="text-primary mt-0.5"><i class="fa-solid fa-circle-exclamation"></i></span>
                        <p class="small text-dark mb-0 leading-relaxed ms-3"><strong>Important:</strong> After successful payment, please send the transaction screenshot on WhatsApp to <a href="https://wa.me/9630263460" target="_blank" class="text-primary fw-bold text-decoration-underline">9630263460</a> for verification.</p>
                    </div>
                </div>
            </div>
        </div>

