<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Payment Mode',
    'bc_desc' => 'Secure Payment Methods',
    'breadcrumbs' => [['name' => 'Payment Mode']]
]); ?>

<?php
$payment_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Online Payment - ' . $this->comp['company3'],
    'description' => 'Secure online payment options for ' . $this->comp['company3'] . '.',
    'url' => site_url('payment-mode'),
    'mainEntity' => [
        '@type' => 'Organization',
        'name' => $this->comp['company3'],
        'paymentAccepted' => ['UPI', 'Credit Card', 'Debit Card', 'Net Banking', 'Wallets']
    ]
];
?>
<script type="application/ld+json"><?= json_encode($payment_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>

<div class="container py-4 py-lg-5">
    <div class="row align-items-end g-3 border-bottom pb-4 mb-4">
        <div class="col-lg-8">
            <span class="text-info small fw-bold text-uppercase">Secure payment gateway</span>
            <h2 class="display-6 fw-bold text-dark mt-2 mb-2">Pay your moving bill</h2>
            <p class="text-muted mb-0">Use Cashfree for a secure online payment, or choose direct bank transfer below.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
            
        </div>
    </div>

    <div class="alert alert-success d-flex gap-3 align-items-start mb-4" role="status">
        <i class="fa-solid fa-shield-heart fs-4"></i>
        <div><h3 class="h6 fw-bold mb-1">Pay After Completion</h3><p class="mb-0">Please pay <strong>only after your move is fully completed</strong> and you are satisfied with the delivery.</p></div>
    </div>

    <div class="row g-4 align-items-start">
        <div class="col-lg-6">
            <div class="card border shadow-sm">
                <div class="card-header bg-white d-flex align-items-center gap-3 p-4">
                    <span class="bg-dark text-white rounded p-2"><i class="fa-solid fa-credit-card"></i></span>
                    <div><h3 class="h5 mb-1 fw-bold">Pay online</h3><p class="small text-muted mb-0">Enter your details to continue to Online Payment.</p></div>
                </div>
                <div class="card-body p-4">
                    <div id="cashfree-payment-error" class="alert alert-danger" style="display:none"></div>
                    <form id="cashfree-payment-form" class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-bold">Payment reference</label>
                            <div class="d-flex flex-wrap gap-3">
                                <label class="form-check"><input class="form-check-input" type="radio" name="paymentFor" value="GR Number" required><span class="form-check-label">GR Number</span></label>
                                <label class="form-check"><input class="form-check-input" type="radio" name="paymentFor" value="Bill Number"><span class="form-check-label">Bill Number</span></label>
                                <label class="form-check"><input class="form-check-input" type="radio" name="paymentFor" value="Quotation Number"><span class="form-check-label">Quotation Number</span></label>
                            </div>
                        </div>
                        <div class="col-md-6"><label class="form-label" for="payment-reference">GR/Bill/Quotation number</label><input id="payment-reference" type="text" name="reference_number" maxlength="50" class="form-control" required></div>
                        <div class="col-md-6"><label class="form-label" for="payment-name">Name</label><input id="payment-name" type="text" name="name" maxlength="100" class="form-control" required></div>
                        <div class="col-md-4"><label class="form-label" for="payment-email">Email</label><input id="payment-email" type="email" name="email" maxlength="100" class="form-control" required></div>
                        <div class="col-md-4"><label class="form-label" for="payment-phone">Phone</label><input id="payment-phone" type="tel" name="phone" maxlength="10" pattern="[0-9]{10}" class="form-control" required></div>
                        <div class="col-md-4"><label class="form-label" for="payment-amount">Amount (INR)</label><input id="payment-amount" type="number" name="amount" min="1" step="0.01" class="form-control" required></div>
                        <div class="col-12"><label class="form-label" for="payment-remarks">Remarks <span class="text-muted fw-normal">(optional)</span></label><textarea id="payment-remarks" name="remarks" maxlength="500" class="form-control" rows="3"></textarea></div>
                        <div class="col-12"><button type="submit" id="cashfree-pay-button" class="btn btn-dark px-4"><i class="fa-solid fa-arrow-right me-1"></i> Continue to payment</button></div>
                    </form>
                    <div class="border-top mt-4 pt-4">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="fa-solid fa-shield-halved text-success fs-5"></i>
                            <span class="small fw-bold text-dark">Secure payment options</span>
                            <span class="badge bg-success-subtle text-success border border-success-subtle">Accepted</span>
                        </div>
                        <div class="row row-cols-2 row-cols-md-4 g-2 text-center">
                            <div class="col"><div class="border rounded p-2 h-100"><i class="fa-solid fa-mobile-screen-button text-primary d-block fs-5 mb-1"></i><small class="text-muted">UPI</small></div></div>
                            <div class="col"><div class="border rounded p-2 h-100"><i class="fa-solid fa-credit-card text-primary d-block fs-5 mb-1"></i><small class="text-muted">Cards</small></div></div>
                            <div class="col"><div class="border rounded p-2 h-100"><i class="fa-solid fa-building-columns text-primary d-block fs-5 mb-1"></i><small class="text-muted">Net banking</small></div></div>
                            <div class="col"><div class="border rounded p-2 h-100"><i class="fa-solid fa-wallet text-primary d-block fs-5 mb-1"></i><small class="text-muted">Wallets</small></div></div>
                        </div>
                        <div class="small text-muted mt-3"><i class="fa-solid fa-lock me-1"></i> Protected by <a href="https://www.cashfree.com/" target="_blank" rel="noopener noreferrer">Cashfree</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border shadow-sm">
                <div class="card-header bg-white d-flex align-items-center gap-3 p-4">
                    <span class="bg-dark text-white rounded p-2"><i class="fa-solid fa-building-columns"></i></span>
                    <div><h3 class="h5 mb-1 fw-bold">Bank transfer</h3><p class="small text-muted mb-0">Direct transfer details</p></div>
                </div>
                <div class="card-body p-4">
                    <div class="bg-light rounded p-3 text-center mb-4"><img loading="lazy" src="<?= base_url('assets/images/about/qrcode_vpmax.webp') ?>" alt="VP Max Packers and Movers SBI QR Code" class="img-fluid" style="max-width:80%"></div>
                    <dl class="row small mb-4">
                        <dt class="col-5 text-muted">Beneficiary</dt><dd class="col-7 text-end fw-bold">VP MAX PACKERS AND MOVERS</dd>
                        <dt class="col-5 text-muted">Bank</dt><dd class="col-7 text-end fw-bold">State Bank of India</dd>
                        <dt class="col-5 text-muted">Account type</dt><dd class="col-7 text-end fw-bold">Current Account</dd>
                        <dt class="col-5 text-muted">Account</dt><dd class="col-7 text-end fw-bold">44473700074</dd>
                        <dt class="col-5 text-muted">IFSC</dt><dd class="col-7 text-end fw-bold">SBIN0003218</dd>
                        <dt class="col-5 text-muted">UPI ID</dt><dd class="col-7 text-end fw-bold text-break">vp452010maxpackersandmovers@sbi</dd>
                    </dl>
                    <div class="alert alert-warning small mb-0"><i class="fa-solid fa-circle-info me-1"></i> Send the transaction screenshot on WhatsApp to <a href="https://wa.me/9630263460" target="_blank" class="fw-bold">9630263460</a>.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
<script>
    (function () {
        var form = document.getElementById('cashfree-payment-form');
        var button = document.getElementById('cashfree-pay-button');
        var errorBox = document.getElementById('cashfree-payment-error');
        var cashfree = Cashfree({ mode: <?= json_encode($cashfree_mode === 'production' ? 'production' : 'sandbox') ?> });
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            button.disabled = true;
            button.textContent = 'Processing...';
            errorBox.style.display = 'none';
            fetch('<?= site_url('cashfree/create-order') ?>', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                body: new URLSearchParams(new FormData(form))
            }).then(function (response) {
                return response.json().then(function (data) { return {ok: response.ok, data: data}; });
            }).then(function (result) {
                if (!result.ok || !result.data.success) throw new Error(result.data.message || 'Unable to start the payment.');
                return cashfree.checkout({paymentSessionId: result.data.payment_session_id, redirectTarget: '_self'});
            }).catch(function (error) {
                errorBox.textContent = error.message;
                errorBox.style.display = 'block';
                button.disabled = false;
                button.innerHTML = '<i class="fa-solid fa-arrow-right me-1"></i> Continue to payment';
            });
        });
    }());
</script>
