<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $this->output->set_status_header(410);
        $data['title'] = "Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The requested page was not found at " . $this->comp['company3'] . ".";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "VP Max Packers and Movers";
        $data['description'] = "We provide safe, fast & affordable home and office shifting across India origin from Indore. Call " . $this->comp['phone'] . " for a free quote today!";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()
    {

        $redirects = [
            'contacts' => 'contact-us',
            'contact.php' => 'contact-us',
            'automobile-relocation' => 'car-transportation-service',
            'car-and-bike-transportation.php' => 'car-transportation-service',
            'warehouse-and-storage-services.php' => 'warehouse-and-storage-services',
            'loading-and-unloading.php' => 'loading-and-unloading',
            'your-trusted-movers-and-packers-in-hisar-haryana.php' => 'hisar-packers-movers-haryana',
            'privacy-policy.html' => 'privacy-policy',
            'terms-conditions.html' => 'terms-and-conditions',
            'disclaimer.html' => 'disclaimer',
            'refund-policy.html' => 'refund-policy',
            'packers-and-movers-in-reva.php' => 'rewa-packers-movers-madhya-pradesh',
            'locations.php' => 'our-location',
            'packers-and-movers-in-indore.php' => 'indore-packers-movers-madhya-pradesh',
            'packers-and-movers-in-bengaluru.php'=> 'bengaluru-packers-movers-karnataka',
            'packers-and-movers-in-bhopal.php' => 'bhopal-packers-movers-madhya-pradesh',
            'packers-and-movers-in-bhubaneswar.php' => 'bhubaneswar-packers-movers-odisha',
            'packers-and-movers-in-chandigarh.php' => 'chandigarh-packers-movers-chandigarh',
            'packers-and-movers-in-shahdol.php' => 'shahdol-packers-movers-madhya-pradesh',
            'packers-and-movers-in-chennai.php' => 'chennai-packers-movers-tamil-nadu',
            'packers-and-movers-in-hyderabad.php' => 'hyderabad-packers-movers-telangana',
            'packers-and-movers-in-jaipur.php' => 'jaipur-packers-movers-rajasthan',
            'packers-and-movers-in-kolkata.php' => 'kolkata-packers-movers-west-bengal',
            'packers-and-movers-in-lucknow.php' => 'lucknow-packers-movers-uttar-pradesh',
            'packers-and-movers-in-mumbai.php' => 'mumbai-packers-movers-maharashtra',
            'packers-and-movers-in-nagpur.php'  => 'nagpur-packers-movers-maharashtra',
            'packers-and-movers-in-patna.php' => 'patna-packers-movers-bihar',
            'packers-and-movers-in-sirsa.php' => 'sirsa-packers-movers-haryana',
            'packers-and-movers-in-bhiwani.php' => 'bhiwani-packers-movers-haryana',
            'packers-and-movers-in-thiruvanathpuram.php' => 'thiruvanathpuram-packers-movers-kerala',
            'packers-and-movers-in-kohima.php' => 'kohima-packers-movers-nagaland',
            'packers-and-movers-in-jhansi.php' => 'jhansi-packers-movers-uttar-pradesh',
            'packers-and-movers-in-deori.php' => 'deori-packers-movers-madhya-pradesh',
            'packers-and-movers-in-rewa.php' => 'rewa-packers-movers-madhya-pradesh',
            'packers-and-movers-in-narsinghpur.php' => 'narsinghpur-packers-movers-madhya-pradesh',
            'packers-and-movers-in-rajiv-chowk.php' => 'rajiv-chowk-packers-movers-delhi',
            'packers-and-movers-in-dwarka.php' => 'dwarka-packers-movers-delhi',
            'packers-and-movers-in-rohini.php' => 'rohini-packers-movers-delhi',
            'packers-and-movers-in-chhatarpur-delhi.php' => 'chhatarpur-packers-movers-delhi',
            'packers-and-movers-in-mayur-vihar.php' => 'mayur-vihar-packers-movers-delhi',
            'packers-and-movers-in-bahadurgarh.php' => 'bahadurgarh-packers-movers-haryana',
            'packers-and-movers-in-manesar-haryana.php' => 'manesar-packers-movers-haryana',
            'packers-and-movers-in-hisar-haryana.php' => 'hisar-packers-movers-haryana',
            'packers-and-movers-in-rewari-haryana.php' => 'rewari-packers-movers-haryana',
            'packers-and-movers-in-panipat.php' => 'panipat-packers-movers-haryana',
            'packers-and-movers-in-ashok-vihar-phase-2.php' => '"ashok-vihar-phase-2-packers-movers-delhi',
            'packers-and-movers-in-sector-49-gurgaon.php' => 'sector-49-gurgaon-packers-movers-haryana',
            'packers-and-movers-in-sector-15-gurgaon.php' => 'sector-15-gurgaon-packers-movers-haryana',
            'packers-and-movers-in-sohna.php' => 'sohna-packers-movers-haryana',
            'packers-and-movers-in-dlf-phase-1.php' => 'dlf-phase-1-packers-movers-haryana',
            'packers-and-movers-in-dharuhera.php' => 'dharuhera-packers-movers-haryana',
            'packers-and-movers-in-manesar.php' => 'manesar-packers-movers-haryana',
            'packers-and-movers-in-palwal.php' => 'palwal-packers-movers-haryana',
            'packers-and-movers-in-rohtak.php' => 'rohtak-packers-movers-haryana',
            'packers-and-movers-in-jhajjar.php' => 'jhajjar-packers-movers-haryana',
            'jharkhand-packers-and-movers.php' => 'jharkhand',
            'nagaland-packers-and-movers.php' => 'nagaland',
            'sagar-packers-movers-indore' => 'sagar-packers-movers-madhya-pradesh',
            'damoh-packers-movers-sagar' => 'damoh-packers-movers-madhya-pradesh',
            'bina-packers-movers-sagar' => 'bina-packers-movers-madhya-pradesh',
            'bina-packers-movers-indore' => 'bina-packers-movers-madhya-pradesh',
            'vidisha-packers-movers-indore' => 'vidisha-packers-movers-madhya-pradesh',
            'vidisha-packers-movers-sagar' => 'vidisha-packers-movers-madhya-pradesh',
            'agar-packers-movers-indore' => 'agar-packers-movers-madhya-pradesh',
            'ashta-packers-movers-indore' => 'ashta-packers-movers-madhya-pradesh',
            'badnawar-packers-movers-indore' => 'badnawar-packers-movers-madhya-pradesh',
            'barwani-packers-movers-indore' => 'barwani-packers-movers-madhya-pradesh',
            'betma-packers-movers-indore' => 'betma-packers-movers-madhya-pradesh',
            'betul-packers-movers-indore' => 'betul-packers-movers-madhya-pradesh',
            'dewas-packers-movers-indore' => 'dewas-packers-movers-madhya-pradesh',
            'ujjain-packers-movers-indore' => 'ujjain-packers-movers-madhya-pradesh',
            'pune-packers-movers-pune' => 'pune-packers-movers-maharashtra',
            'vijay-nagar-packers-movers-jabalpur' => 'vijay-nagar-packers-movers-indore',
            'sindhi-colony-packers-movers-ujjain' => 'sindhi-colony-packers-movers-indore',
            'khurai-packers-movers-sagar' => 'khurai-packers-movers-indore',
            'ram-nagar-packers-movers-dewas' => 'ram-nagar-packers-movers-indore',
            'shivaji-nagar-packers-movers-pune' => 'shivaji-nagar-packers-movers-indore',
            'packers-and-movers-in-damoh.php' => 'damoh-packers-movers-madhya-pradesh',
            'packers-and-movers-in-tikamgarh.php' => 'tikamgarh-packers-movers-madhya-pradesh',
            'packers-and-movers-in-bina.php' => 'bina-packers-movers-madhya-pradesh',
            'local-shifting.php' => 'local-shifting',
            'packers-and-movers-in-raipur.php' => 'raipur-packers-movers-chhattisgarh',
            'packers-and-movers-in-gwalior.php' => 'gwalior-packers-movers-madhya-pradesh',
            'packers-and-movers-in-katni.php' => 'katni-packers-movers-madhya-pradesh',
            'packers-and-movers-in-chhatarpur.php' => 'chhatarpur-packers-movers-madhya-pradesh',
            'packers-and-movers-in-jabalpur.php' => 'jabalpur-packers-movers-madhya-pradesh',
            'packers-and-movers-in-sagar.php' => 'sagar-packers-movers-madhya-pradesh',
            'packers-and-movers-in-satna.php' => 'satna-packers-movers-madhya-pradesh',
            'packers-and-movers-in-panna.php' => 'panna-packers-movers-madhya-pradesh',
            'packers-and-movers-in-vidisha.php' => 'vidisha-packers-movers-madhya-pradesh',
            'about.php' => 'about-us',
            'office-shifting.php' => 'office-shifting',
            'household-shifting.php' => 'household-shifting',
            'telangana-packers-and-movers.php' => 'telangana',
            'delhi-packers-and-movers.php' => 'delhi',
            'madhya-pradesh-packers-and-movers.php' => 'madhya-pradesh',
            'packers-and-movers-in-ranchi.php' => 'ranchi-packers-movers-jharkhand',
            'all-india-packers-and-movers.php' => 'all-india-packers-and-movers',
            'jharkhand-packers-and-movers.php' => 'jharkhand',
            'domestic-and-international-shifting.php' => 'domestic-shifting',
            'gallery.php' => 'photo-gallery',
            'avoid-froud-packers-and-movers.php' => 'avoid-fraud-packers-and-movers',
            'khurai-packers-movers-sagar.php' => 'khurai-packers-movers-indore'
        ];

        $segment = $this->uri->segment(1);

        if (isset($redirects[$segment])) {
            redirect($redirects[$segment], 'location', 301);
        }
    }

    public function sitemap()
    {
        $data['title'] = "Sitemap | " . $this->comp['company3'];
        $data['description'] = "Sitemap of " . $this->comp['company3'] . " website.";
        $data['module'] = "home";
        $data['view_file'] = "sitemap";
        echo Modules::run('template/layout2', $data);
    }
}
