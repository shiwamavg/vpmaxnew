<?php
$locations = [
    ["city" => "Mumbai", "state" => "maharashtra"],
    ["city" => "Delhi", "state" => "delhi"],
    ["city" => "Bengaluru", "state" => "karnataka"],
    ["city" => "Chennai", "state" => "tamil-nadu"],
    ["city" => "Hyderabad", "state" => "telangana"],
    ["city" => "Kolkata", "state" => "west-bengal"],
    ["city" => "Pune", "state" => "maharashtra"],
    ["city" => "Ahmedabad", "state" => "gujarat"],
    ["city" => "Jaipur", "state" => "rajasthan"],
    ["city" => "Chandigarh", "state" => "chandigarh"],
    ["city" => "Gurgaon", "state" => "haryana"],
    ["city" => "Noida", "state" => "uttar-pradesh"],
    ["city" => "Faridabad", "state" => "haryana"],
    ["city" => "Ghaziabad", "state" => "uttar-pradesh"],
    ["city" => "Lucknow", "state" => "uttar-pradesh"],
    ["city" => "Kanpur", "state" => "uttar-pradesh"],
    ["city" => "Indore", "state" => "madhya-pradesh"],
    ["city" => "Bhopal", "state" => "madhya-pradesh"],
    ["city" => "Nagpur", "state" => "maharashtra"],
    ["city" => "Surat", "state" => "gujarat"],
    ["city" => "Vadodara", "state" => "gujarat"],
    ["city" => "Rajkot", "state" => "gujarat"],
    ["city" => "Udaipur", "state" => "rajasthan"],
    ["city" => "Jodhpur", "state" => "rajasthan"],
    ["city" => "Amritsar", "state" => "punjab"],
    ["city" => "Ludhiana", "state" => "punjab"],
    ["city" => "Patiala", "state" => "punjab"],
    ["city" => "Dehradun", "state" => "uttarakhand"],
    ["city" => "Haridwar", "state" => "uttarakhand"],
    ["city" => "Ranchi", "state" => "jharkhand"],
    ["city" => "Jamshedpur", "state" => "jharkhand"],
    ["city" => "Bhubaneswar", "state" => "odisha"],
    ["city" => "Cuttack", "state" => "odisha"],
    ["city" => "Patna", "state" => "bihar"],
    ["city" => "Gaya", "state" => "bihar"],
    ["city" => "Guwahati", "state" => "assam"],
    ["city" => "Shillong", "state" => "meghalaya"],
    ["city" => "Kohima", "state" => "nagaland"],
    ["city" => "Imphal", "state" => "manipur"],
    ["city" => "Aizawl", "state" => "mizoram"],
    ["city" => "Agartala", "state" => "tripura"],
    ["city" => "Itanagar", "state" => "arunachal-pradesh"],
    ["city" => "Thiruvananthapuram", "state" => "kerala"],
    ["city" => "Kochi", "state" => "kerala"],
    ["city" => "Coimbatore", "state" => "tamil-nadu"],
    ["city" => "Madurai", "state" => "tamil-nadu"],
    ["city" => "Trichy", "state" => "tamil-nadu"],
    ["city" => "Salem", "state" => "tamil-nadu"]
];
?>

<section class="search-location-section py-5">
    <div class="container">

        <div class="location-heading mb-4">
            <h2 class="h5 fw-bold mb-0">Search By Location</h2>
        </div>

        <div class="row g-3">
            <?php foreach ($locations as $location):
                $citySlug = strtolower(str_replace(' ', '-', $location['city']));
                $link = $citySlug . "-packers-movers-" . $location['state'];
                ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <ul class="location-list mb-0">
                        <li>
                            <a href="<?= site_url($link) ?>" aria-label="Packers and Movers in <?= $location['city'] ?>">
                                Packers and Movers in <?= $location['city'] ?>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>