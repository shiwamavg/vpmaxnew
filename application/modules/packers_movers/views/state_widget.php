<link rel="stylesheet" href="<?= base_url("assets/css/packers_movers_modules.css") ?>">
<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$states = [
    ['name' => 'Delhi', 'image' => 'delhi.webp', 'slug' => 'delhi'],
    ['name' => 'Bhopal', 'image' => 'bhopal.webp', 'slug' => 'bhopal'],
    ['name' => 'Madhya Pradesh', 'image' => 'madhya-pradesh.webp', 'slug' => 'madhya-pradesh'],
    ['name' => 'Ghaziabad', 'image' => 'ghaziabad.webp', 'slug' => 'ghaziabad'],
    ['name' => 'Haryana', 'image' => 'haryana.webp', 'slug' => 'haryana'],
    ['name' => 'Chandigarh', 'image' => 'chandigarh.webp', 'slug' => 'chandigarh'],
    ['name' => 'Telangana', 'image' => 'telangana.webp', 'slug' => 'telangana'],
    ['name' => 'Uttar Pradesh', 'image' => 'uttar-pradesh.webp', 'slug' => 'uttar-pradesh'],
    ['name' => 'Nagaland', 'image' => 'nagaland.webp', 'slug' => 'nagaland'],
    ['name' => 'Jharkhand', 'image' => 'jharkhand.webp', 'slug' => 'jharkhand'],
    ['name' => 'Maharashtra', 'image' => 'maharashtra.webp', 'slug' => 'maharashtra'],
    ['name' => 'Kerala', 'image' => 'kerala.webp', 'slug' => 'kerala'],
    ['name' => 'Tamil Nadu', 'image' => 'tamil-nadu.webp', 'slug' => 'tamil-nadu'],
    ['name' => 'West Bengal', 'image' => 'west-bengal.webp', 'slug' => 'west-bengal'],
    ['name' => 'Karnataka', 'image' => 'karnataka.webp', 'slug' => 'karnataka'],
    ['name' => 'Raipur', 'image' => 'raipur.webp', 'slug' => 'raipur'],
    ['name' => 'Odisha', 'image' => 'odisha.webp', 'slug' => 'odisha'],
    ['name' => 'Rajasthan', 'image' => 'rajasthan.webp', 'slug' => 'rajasthan'],
    ['name' => 'Gujrat', 'image' => 'gujrat.webp', 'slug' => 'gujrat'],
    ['name' => 'Chhattisgarh', 'image' => 'chhattisgarh.webp', 'slug' => 'chhattisgarh'],
    ['name' => 'Bihar', 'image' => 'bihar.webp', 'slug' => 'bihar'],
    ['name' => 'Indore', 'image' => 'indore.webp', 'slug' => 'indore'],
    ['name' => 'Ujjain', 'image' => 'ujjain.webp', 'slug' => 'ujjain'],
    ['name' => 'Dewas', 'image' => 'dewas.webp', 'slug' => 'dewas'],
    ['name' => 'Sagar', 'image' => 'sagar.webp', 'slug' => 'sagar'],
    ['name' => 'Jabalpur', 'image' => 'jabalpur.webp', 'slug' => 'jabalpur'],
    ['name' => 'Pune', 'image' => 'pune.webp', 'slug' => 'pune'],
    ['name' => 'Nagpur', 'image' => 'nagpur.webp', 'slug' => 'nagpur'],
    ['name' => 'Wardha', 'image' => 'wardha.webp', 'slug' => 'wardha'],
    ['name' => 'Mumbai', 'image' => 'mumbai.webp', 'slug' => 'mumbai'],
    ['name' => 'Gurugram', 'image' => 'gurugram.webp', 'slug' => 'gurugram']
];
?>

<section class="state-service-section py-5">
    <div class="container">
        <!-- Header -->
        <div class="state-header-wrap mb-4">
            <h2 class="state-section-title">All India Service</h2>
            <div class="state-title-line"></div>
        </div>

        <!-- State Cards Grid -->
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 g-lg-4">
            <?php foreach ($states as $state): ?>
                <div class="col">
                    <a href="<?= site_url($state['slug']) ?>" class="state-card-link text-decoration-none">
                        <div class="state-card">
                            <div class="state-img-wrapper position-relative">
                                <img loading="lazy" src="<?= base_url('assets/images/state/' . $state['image']) ?>"
                                    alt="Packers and Movers in <?= htmlspecialchars($state['name']) ?>"
                                    class="img-fluid state-img">
                                <div class="state-pin-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                            </div>
                            <div class="state-content">
                                <span class="state-name"><?= htmlspecialchars($state['name']) ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>