<link rel="stylesheet" href="<?= base_url("assets/css/services_modules.css") ?>">
<?php
$current_method = $this->router->fetch_method();
$sidebar_services = [
    'homeShifting' => ['url' => 'household-shifting', 'title' => 'Household Shifting'],
    'office' => ['url' => 'office-shifting', 'title' => 'Office Shifting'],
    'local' => ['url' => 'local-shifting', 'title' => 'Local Shifting'],
    'domestic' => ['url' => 'domestic-shifting', 'title' => 'Domestic Shifting'],
    'international' => ['url' => 'international-shifting', 'title' => 'International Shifting'],
    'car' => ['url' => 'car-transportation-service', 'title' => 'Car Transportation'],
    'bike' => ['url' => 'bike-transportation-service', 'title' => 'Bike Transportation'],
    'loadingUnloading' => ['url' => 'loading-and-unloading', 'title' => 'Loading & Unloading'],
    'warehouse' => ['url' => 'warehouse-and-storage-services', 'title' => 'Warehouse Services']
];
?>
<div class="sticky-top" style="top: 120px; z-index: 1;">
    <!-- Related Services Widget -->
    <div class="card shadow-sm border-0 mt-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 fs-5 text-white"><i class="bi bi-link-45deg me-2"></i> Our Services</h4>
        </div>
        <div class="list-group list-group-flush">
            <?php foreach ($sidebar_services as $method => $service): ?>
                <?php
                $isActive = ($current_method == $method) ? 'active' : '';
                $iconClass = ($current_method == $method) ? 'text-white' : 'text-primary';
                ?>
                <a href="<?= site_url($service['url']) ?>" class="list-group-item list-group-item-action <?= $isActive ?>">
                    <i class="bi bi-chevron-right me-2 <?= $iconClass ?>"></i> <?= $service['title'] ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

