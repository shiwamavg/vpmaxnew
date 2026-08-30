<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$services = [
    [
        'title' => 'International Service',
        'url' => 'international-service-in-' . $ctlink,
        'image' => 'international-shifting-services.webp',
        'icon' => 'bi-globe'
    ],
    [
        'title' => 'Car Transport',
        'url' => 'car-transport-in-' . $ctlink,
        'image' => 'car-transportation-services.webp',
        'icon' => 'bi-car-front-fill'
    ],
    [
        'title' => 'Bike Transport',
        'url' => 'bike-transport-in-' . $ctlink,
        'image' => 'bike-transportation-services.webp',
        'icon' => 'bi-bicycle'
    ],
    [
        'title' => 'IBA Approved Packers',
        'url' => 'iba-approved-packers-in-' . $ctlink,
        'image' => 'domestic-shifting-services.webp',
        'icon' => 'bi-shield-check'
    ]
];
?>

<link rel="stylesheet" href="<?= base_url('assets/css/packers_movers_modules.css') ?>?v=<?= time() ?>">

<div class="container py-2 mt-2 mb-2">
    <div class="row g-2 g-md-3 justify-content-center">

        <?php foreach ($services as $service): 
            $is_active = (uri_string() == $service['url']) ? 'active' : '';
        ?>
            <div class="col-6 col-md-3 col-lg-3">
                <a href="<?= site_url($service['url']) ?>"
                    class="pm-premium-service-card <?= $is_active ?> text-decoration-none d-flex flex-column align-items-center text-center h-100"
                    style="background-image: url('<?= base_url('assets/images/services/' . $service['image']) ?>');">
                    <div class="pm-premium-service-overlay"></div>
                    <div class="pm-service-content position-relative w-100 z-1">
                        <div class="pm-service-sm-icon-wrap mb-1">
                            <i class="bi <?= $service['icon'] ?>"></i>
                        </div>
                        <h5 class="pm-premium-title mb-0 fw-bold"><?= $service['title'] ?></h5>
                        <p class="pm-premium-desc mb-0">in <?= htmlspecialchars($city) ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>