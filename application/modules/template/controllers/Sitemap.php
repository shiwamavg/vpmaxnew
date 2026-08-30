<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends MX_Controller {
    
    public function index() {
        $this->write_file();
    }

    private function slugify($value) {
        $value = strtolower(trim($value));
        $value = preg_replace('/[^a-z0-9]+/', '-', $value);
        return trim($value, '-');
    }

    private function load_state_cities($file, $state_slug) {
        $path = APPPATH . 'modules/packers_movers/views/data/' . $file . '.php';
        if (!is_file($path)) {
            return [];
        }

        $cities = [];
        include $path;

        if (empty($cities) || !is_array($cities)) {
            return [];
        }

        $items = [];
        foreach ($cities as $city) {
            if (empty($city['nm'])) {
                continue;
            }

            $items[] = [
                'city' => $this->slugify($city['nm']),
                'state' => $state_slug
            ];
        }

        return $items;
    }

    private function imported_city_list() {
        $states = [
            'madhya-pradesh' => 'madhya-pradesh',
            'haryana' => 'haryana',
            'punjab' => 'punjab',
            'himachal-pradesh' => 'himachal-pradesh',
            'delhi' => 'delhi',
            'uttarakhand' => 'uttarakhand',
            'jammu-and-kashmir' => 'jammu-and-kashmir',
        ];

        $cities = [];
        foreach ($states as $file => $state_slug) {
            $cities = array_merge($cities, $this->load_state_cities($file, $state_slug));
        }

        return $cities;
    }
    
    public function write_file() {
        // echo 3434;die();
        $xml = $this->generate_sitemap_xml();
        $path = FCPATH . 'sitemap.xml';

        if (file_put_contents($path, $xml) === false) {
            show_error('Unable to write sitemap.xml file.', 500);
            return;
        }

        header('Content-Type: text/plain; charset=utf-8');
        echo 'Sitemap written to ' . $path;
    }

    private function generate_sitemap_xml() {
        $base_url = 'https://vpmaxpackersandmovers.com';
        
        // Cities list from footer.php
        $cities = [
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

        $cities = array_merge( $this->imported_city_list(),$cities);
        
        $services = [
            // 'home-shifting-in-',
            // 'office-shifting-in-',
            'car-transport-in-',
            'bike-transport-in-',
            'iba-approved-packers-in-',
            'international-service-in-',
        ];
        
        $urls = [];
        
        // Static pages
        $static_pages = [
            ['', '1.0', 'weekly'],
            // ['about', '0.8', 'monthly'],
            // ['home-relocation', '0.8', 'monthly'],
            // ['office-relocation', '0.8', 'monthly'],
            // ['car-transportation-service', '0.8', 'monthly'],
            // ['bike-transportation-service', '0.8', 'monthly'],
            // ['loading-and-unloading', '0.8', 'monthly'],
            // ['warehousing-service', '0.8', 'monthly'],
            // ['luggage-delivery', '0.8', 'monthly'],
            // ['goods-insurance', '0.8', 'monthly'],
            // ['packing-and-unpacking', '0.8', 'monthly'],
            // // ['it-relocation', '0.8', 'monthly'],
            // ['courier-and-cargo', '0.8', 'monthly'],
            // ['reviews', '0.9', 'weekly'],
            // ['contacts', '0.7', 'monthly'],
            // // ['blogs', '0.7', 'weekly'],
            // ['photo-gallery', '0.6', 'monthly'],
            // ['our-branches', '0.8', 'monthly'],
            // ['why-choose-us', '0.7', 'monthly'],
            // ['mission-and-vision', '0.7', 'monthly'],
            // ['iba-approved-packers', '0.7', 'monthly'],
            // ['faq', '0.7', 'monthly'],
            // ['our-shifting-process', '0.7', 'monthly'],
        ];
        
        foreach ($static_pages as $page) {
            $urls[] = [
                'loc' => $base_url . '/' . $page[0],
                'priority' => $page[1],
                'changefreq' => $page[2],
                'lastmod' => date('Y-m-d')
            ];
        }
        
        // City + Service pages
        $seen_urls = [];
        foreach ($cities as $city) {
            // Packers movers pages
            $city['city']= str_replace(' ', '-', strtolower($city['city']));
            $city_url = $base_url . '/' . $city['city'] . '-packers-movers-' . $city['state'];
            if (empty($seen_urls[$city_url])) {
                $urls[] = [
                    'loc' => $city_url,
                    'priority' => '0.8',
                    'changefreq' => 'weekly',
                    'lastmod' => date('Y-m-d')
                ];
                $seen_urls[$city_url] = true;
            }
            
            // Service-specific pages
            foreach ($services as $service) {
                $city['city']= str_replace(' ', '-', strtolower($city['city']));
                $service_url = $base_url . '/' . $service . $city['city'];
                if (!empty($seen_urls[$service_url])) {
                    continue;
                }

                $urls[] = [
                    'loc' => $service_url,
                    'priority' => '0.8',
                    'changefreq' => 'weekly',
                    'lastmod' => date('Y-m-d')
                ];
                $seen_urls[$service_url] = true;
            }
        }
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        foreach ($urls as $url) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . htmlspecialchars($url['loc'], ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . "\n";
            $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        
        $xml .= '</urlset>' . "\n";

        return $xml;
    }
}
