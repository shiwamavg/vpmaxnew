<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Payment Status',
    'bc_desc' => 'Cashfree Payment Status',
    'breadcrumbs' => [
        ['name' => 'Payment Status']
    ]
]); ?>

<div class="container py-5 text-center">
    <?php $is_paid = isset($payment['status']) && $payment['status'] === 'PAID'; ?>
    <div class="alert <?= $is_paid ? 'alert-success' : 'alert-warning' ?>">
        <h2 class="h4 mb-2"><?= html_escape($payment['message']) ?></h2>
        <?php if (!empty($payment['order_id'])): ?><p class="mb-0">Order ID: <?= html_escape($payment['order_id']) ?></p><?php endif; ?>
    </div>
    <?php if (!$is_paid): ?><a href="<?= site_url('payment-options') ?>" class="btn btn-primary">Try Again</a><?php endif; ?>
</div>
