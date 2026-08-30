<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Pre-calculated approximate distances in KM from Indore
$routes = [
    ['destination' => 'Mumbai', 'distance' => 583],
    ['destination' => 'Delhi', 'distance' => 820],
    ['destination' => 'Bangalore', 'distance' => 1350],
    ['destination' => 'Chennai', 'distance' => 1530],
    ['destination' => 'Kolkata', 'distance' => 1530],
    ['destination' => 'Hyderabad', 'distance' => 850],
    ['destination' => 'Pune', 'distance' => 600],
    ['destination' => 'Ahmedabad', 'distance' => 390],
    ['destination' => 'Surat', 'distance' => 420],
    ['destination' => 'Jaipur', 'distance' => 600],
    ['destination' => 'Lucknow', 'distance' => 750],
    ['destination' => 'Kanpur', 'distance' => 670],
    ['destination' => 'Nagpur', 'distance' => 450],
    ['destination' => 'Visakhapatnam', 'distance' => 1100],
    ['destination' => 'Thane', 'distance' => 560],
    ['destination' => 'Bhopal', 'distance' => 190],
    ['destination' => 'Patna', 'distance' => 1050],
    ['destination' => 'Vadodara', 'distance' => 340],
    ['destination' => 'Ghaziabad', 'distance' => 810],
    ['destination' => 'Ludhiana', 'distance' => 1100],
    ['destination' => 'Agra', 'distance' => 600],
    ['destination' => 'Nashik', 'distance' => 420],
    ['destination' => 'Faridabad', 'distance' => 790],
    ['destination' => 'Meerut', 'distance' => 860],
    ['destination' => 'Rajkot', 'distance' => 600],
    ['destination' => 'Varanasi', 'distance' => 830],
    ['destination' => 'Srinagar', 'distance' => 1650],
    ['destination' => 'Aurangabad', 'distance' => 400],
    ['destination' => 'Dhanbad', 'distance' => 1200],
    ['destination' => 'Amritsar', 'distance' => 1250],
    ['destination' => 'Allahabad', 'distance' => 700],
    ['destination' => 'Ranchi', 'distance' => 1100],
    ['destination' => 'Coimbatore', 'distance' => 1700],
    ['destination' => 'Jabalpur', 'distance' => 500],
    ['destination' => 'Gwalior', 'distance' => 500],
    ['destination' => 'Vijayawada', 'distance' => 1050],
    ['destination' => 'Jodhpur', 'distance' => 650],
    ['destination' => 'Madurai', 'distance' => 1800],
    ['destination' => 'Raipur', 'distance' => 750],
    ['destination' => 'Kota', 'distance' => 320],
    ['destination' => 'Salem', 'distance' => 1650],
    ['destination' => 'Guwahati', 'distance' => 2100],
    ['destination' => 'Mysore', 'distance' => 1450],
    ['destination' => 'Tiruchirappalli', 'distance' => 1800],
    ['destination' => 'Bareilly', 'distance' => 850],
    ['destination' => 'Moradabad', 'distance' => 900],
    ['destination' => 'Jalandhar', 'distance' => 1150],
    ['destination' => 'Bhubaneswar', 'distance' => 1250],
    ['destination' => 'Gurgaon', 'distance' => 780],
    ['destination' => 'Noida', 'distance' => 800],
    ['destination' => 'Kochi', 'distance' => 1950],
    ['destination' => 'Muradnagar', 'distance' => 850],
    ['destination' => 'Aligarh', 'distance' => 700],
    ['destination' => 'Bulandshahr', 'distance' => 800],
    ['destination' => 'Hapur', 'distance' => 830],
    ['destination' => 'Haldwani', 'distance' => 950],
    ['destination' => 'Udaipur', 'distance' => 400],
    ['destination' => 'Shillong', 'distance' => 2200],
    ['destination' => 'Jammu', 'distance' => 1350],
    ['destination' => 'Gorakhpur', 'distance' => 950],
    ['destination' => 'Alwar', 'distance' => 650],
    ['destination' => 'Bilaspur', 'distance' => 850],
    ['destination' => 'Nellore', 'distance' => 1350],
    ['destination' => 'Howrah', 'distance' => 1500],
    ['destination' => 'Dehradun', 'distance' => 1000],
    ['destination' => 'Haridwar', 'distance' => 950],
    ['destination' => 'Puducherry', 'distance' => 1650],
    ['destination' => 'Warangal', 'distance' => 900],
    ['destination' => 'Ujjain', 'distance' => 55],
    ['destination' => 'Tirupati', 'distance' => 1450],
    ['destination' => 'Rourkela', 'distance' => 1100]
];
?>

<section class="routes-section py-3 bg-white">
    <div class="container py-3">
        <div class="text-center mb-5">
            <span class="route-subtitle text-uppercase fw-bold tracking-wide">Popular Routes</span>
            <h2 class="route-title display-6 fw-bolder mb-3 text-dark">Packers and Movers from Indore</h2>
            <p class="route-desc text-muted mx-auto ft-max-w-700">Explore our top relocation routes from
                Indore across India. We offer safe, timely, and premium moving services to all major cities.</p>
        </div>

        <div class="row g-3" id="routes-container">
            <?php 
            $route_count = 0;
            foreach ($routes as $route):
                $route_count++;
                $is_hidden_class = $route_count > 20 ? 'd-none hidden-route' : '';
                // Create a clean URL slug
                $slug = 'packers-movers-from-indore-to-' . strtolower(str_replace(' ', '-', $route['destination']));
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 <?= $is_hidden_class ?>">
                    <a href="<?= site_url($slug) ?>" class="text-decoration-none h-100 d-block">
                        <div class="route-card h-100 p-2">
                            <div class="route-card-inner d-flex align-items-center justify-content-between">
                                <div class="route-info flex-grow-1 pe-1">
                                    <div class="route-cities d-flex align-items-center mb-1">
                                        <span class="city-full-text small ft-lh-12">Packers
                                            and Movers from Indore to
                                            <?= htmlspecialchars($route['destination']) ?></span>
                                    </div>
                                    <!-- <div class="route-distance text-muted small">
                                        <i class="bi bi-geo-alt-fill text-danger me-1"></i>
                                        <span class="dist-val"><?= $route['distance'] ?></span> km
                                    </div> -->
                                </div>
                                <div class="route-action-icon ms-1 flex-shrink-0"
                                    style="width: 24px; height: 24px;">
                                    <i class="bi bi-chevron-right small"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (count($routes) > 20): ?>
            <div class="text-center mt-4">
                <button id="view-more-routes-btn" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-bold">View More Routes <i class="bi bi-chevron-down ms-1"></i></button>
            </div>
            
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const btn = document.getElementById('view-more-routes-btn');
                    const hiddenRoutes = document.querySelectorAll('.hidden-route');
                    let isExpanded = false;
                    
                    if (btn) {
                        btn.addEventListener('click', function() {
                            isExpanded = !isExpanded;
                            hiddenRoutes.forEach(function(route) {
                                if (isExpanded) {
                                    route.classList.remove('d-none');
                                    // small animation for entering
                                    route.style.animation = 'fadeIn 0.5s ease';
                                } else {
                                    route.classList.add('d-none');
                                }
                            });
                            
                            if (isExpanded) {
                                btn.innerHTML = 'View Less Routes <i class="bi bi-chevron-up ms-1"></i>';
                            } else {
                                btn.innerHTML = 'View More Routes <i class="bi bi-chevron-down ms-1"></i>';
                            }
                        });
                    }
                });
            </script>

        <?php endif; ?>

    </div>
</section>
