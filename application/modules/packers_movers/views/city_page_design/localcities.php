<?php
$localst = strtolower(str_replace(" ", "-", $city));
$data_file = __DIR__ . "/../data/" . $localst . ".php";
if (file_exists($data_file)) {
    include $data_file;
}
?>

<section class="search-location-section py-5">
    <div class="container">
        <?php
        $uniqueCities = array_intersect_key(
            $cities,
            array_unique(array_column($cities, 'nm'))
        );
        $cities = array_values($uniqueCities);
        ?>

        <div class="row mb-4">
            <div class="col-12">
                <div class="location-heading">
                    <h2 class="h5 fw-bold mb-0">We cover all local areas in <span class="text-primary"><?= $city ?></span></h2>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center bg-white border rounded px-3 py-2 shadow-sm" style="max-width: 600px;">
                    <i class="bi bi-search text-muted fs-5"></i>
                    <input type="text" id="localCitySearch" class="form-control border-0 shadow-none ms-2 px-0" placeholder="Search local area in <?= $city ?>..." style="background: transparent;">
                </div>
            </div>
        </div>

        <div class="row g-3" id="localCityContainer">
            <?php
            $cty = $city;
            $count = 0;
            foreach ($cities as $ct) {
                if ($count >= 50) break;
                
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $new_link = $link . "-packers-movers-" . strtolower(str_replace(" ", "-", $cty));
            ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 local-city-item">
                    <ul class="location-list mb-0">
                        <li>
                            <a href="<?= site_url('/') . $new_link; ?>" aria-label="<?= $ct['nm'] ?>">
                                <?= $ct['nm'] ?>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php 
                $count++;
            } 
            ?>
        </div>
        
        <?php if (count($cities) > 50): ?>
            <div class="text-center mt-4">
                <a href="<?= site_url(strtolower(str_replace(" ", "-", $city))) ?>" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                    View All Local Areas in <?= $city ?> <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('localCitySearch');
    const cityItems = document.querySelectorAll('.local-city-item');
    
    if(searchInput) {
        searchInput.addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase().trim();
            cityItems.forEach(function(item) {
                const text = item.textContent.toLowerCase();
                if(text.includes(term)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }
});
</script>