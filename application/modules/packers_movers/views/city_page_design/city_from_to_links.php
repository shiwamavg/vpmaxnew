<section class="search-location-section py-5">
    <div class="container cityfromtolink">
        <div class="row mb-4">
            <div class="col-12">
                <div class="location-heading">
                    <h2 class="h5 fw-bold mb-0">Our popular routes from <span
                            class="text-primary"><?= ucwords($city) ?></span></h2>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex align-items-center bg-white border rounded px-3 py-2 shadow-sm"
                    style="max-width: 600px;">
                    <i class="bi bi-search text-muted fs-5"></i>
                    <input type="text" id="routeSearch" class="form-control border-0 shadow-none ms-2 px-0"
                        placeholder="Search route to city..." style="background: transparent;">
                </div>
            </div>
        </div>

        <div class="row g-3" id="routeContainer">
            <?php
            $ct = array(
                "Mumbai", "Delhi", "Bangalore", "Chennai", "Kolkata", "Hyderabad", "Pune", "Ahmedabad",
                "Surat", "Jaipur", "Lucknow", "Kanpur", "Nagpur", "Visakhapatnam", "Indore", "Thane",
                "Bhopal", "Patna", "Vadodara", "Ghaziabad", "Ludhiana", "Agra", "Nashik", "Faridabad",
                "Meerut", "Rajkot", "Varanasi", "Srinagar", "Aurangabad", "Dhanbad", "Amritsar",
                "Allahabad", "Ranchi", "Coimbatore", "Jabalpur", "Gwalior", "Vijayawada", "Jodhpur",
                "Madurai", "Raipur", "Kota", "Salem", "Guwahati", "Mysore", "Tiruchirappalli",
                "Bareilly", "Moradabad", "Jalandhar", "Bhubaneswar", "Gurgaon", "Noida", "Kochi",
                "Muradnagar", "Aligarh", "Bulandshahr", "Hapur", "Haldwani", "Udaipur", "Shillong",
                "Jammu", "Gorakhpur", "Alwar", "Bilaspur", "Nellore", "Howrah", "Dehradun", "Haridwar",
                "Puducherry", "Warangal", "Ujjain", "Tirupati", "Rourkela"
            );

            if (strtolower($city) == 'bhopal') {
                $ct = array(
                    "Mumbai", "Delhi", "Bangalore", "Chennai", "Hyderabad", "Pune", "Ahmedabad",
                    "Jaipur", "Lucknow", "Nagpur", "Gurgaon", "Noida"
                );
            }

            $ct = array_diff($ct, array($city));
            $count = 0;

            foreach ($ct as $c) {
                $flink = strtolower(str_replace(' ', '-', $city));
                $tlink = strtolower(str_replace(' ', '-', $c));
                $hiddenClass = ($count >= 32) ? 'd-none extra-route' : '';
                ?>
                <div class="col-6 col-md-6 col-lg-3 route-item <?= $hiddenClass ?>">
                    <ul class="location-list mb-0">
                        <li>
                            <a href="<?= site_url("packers-movers-from-$flink-to-$tlink") ?>"
                                title="Packers movers from <?= ucwords($city) ?> to <?= $c ?>"
                                aria-label="Packers movers from <?= ucwords($city) ?> to <?= $c ?>">
                                Packers movers from <?= ucwords($city) ?> to <?= $c ?>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php 
                $count++;
            } 
            ?>
        </div>
        
        <?php if (count($ct) > 32): ?>
            <div class="text-center mt-4" id="viewAllRoutesContainer">
                <button type="button" id="btnViewAllRoutes" class="btn btn-outline-primary px-4 py-2 rounded-pill shadow-sm" data-expanded="false">
                    View All Routes <i class="bi bi-chevron-down ms-1"></i>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('routeSearch');
        const routeItems = document.querySelectorAll('.route-item');
        const btnViewAll = document.getElementById('btnViewAllRoutes');
        const viewAllContainer = document.getElementById('viewAllRoutesContainer');

        if (btnViewAll) {
            btnViewAll.addEventListener('click', function() {
                const isExpanded = btnViewAll.getAttribute('data-expanded') === 'true';
                
                if (!isExpanded) {
                    // Expand
                    document.querySelectorAll('.extra-route').forEach(function(item) {
                        item.classList.remove('d-none');
                    });
                    btnViewAll.innerHTML = 'View Less Routes <i class="bi bi-chevron-up ms-1"></i>';
                    btnViewAll.setAttribute('data-expanded', 'true');
                } else {
                    // Collapse
                    document.querySelectorAll('.extra-route').forEach(function(item) {
                        item.classList.add('d-none');
                    });
                    btnViewAll.innerHTML = 'View All Routes <i class="bi bi-chevron-down ms-1"></i>';
                    btnViewAll.setAttribute('data-expanded', 'false');
                }
            });
        }

        if (searchInput) {
            searchInput.addEventListener('input', function (e) {
                const term = e.target.value.toLowerCase().trim();
                
                if (term.length > 0) {
                    // Hide toggle button during search
                    if (viewAllContainer) viewAllContainer.style.display = 'none';
                    
                    routeItems.forEach(function (item) {
                        const text = item.textContent.toLowerCase();
                        if (text.includes(term)) {
                            item.style.display = '';
                            item.classList.remove('d-none'); // show it even if it was an extra route
                        } else {
                            item.style.display = 'none';
                        }
                    });
                } else {
                    // Search cleared, restore view toggle state
                    if (viewAllContainer) viewAllContainer.style.display = '';
                    const isExpanded = btnViewAll && btnViewAll.getAttribute('data-expanded') === 'true';
                    
                    routeItems.forEach(function (item) {
                        item.style.display = ''; // clear JS inline style
                        if (!isExpanded && item.classList.contains('extra-route')) {
                            item.classList.add('d-none');
                        } else {
                            item.classList.remove('d-none');
                        }
                    });
                }
            });
        }
    });
</script>