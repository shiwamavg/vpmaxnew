<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{
    function index()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "All India Service " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is best packers and movers service provider.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => $this->comp['company3'] . " branches in $state",
            "description" => "City list of VP Max packers and movers in $state. Check your nearest branch for affordable shifting services.",
            "keywords" => "$state " . $this->comp['company3'] . " in $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    {
        // SEO-optimized titles & descriptions for all branch cities
        // Updated: Sept 2026 — post-August 2026 spam update recovery
        // Strategy: Unique per city, E-E-A-T signals, local address, strong CTA, 50-60 char titles, 140-160 char desc
        $seo = array(

            // ── Madhya Pradesh ──────────────────────────────────────────
            "Sagar" => array(
                "title" => "Packers and Movers in Sagar MP | VP Max – Safe Relocation",
                "desc"  => "VP Max office in Sagar: Shop 2, JL Institute, Tilak Ganj, Sagar MP 470002. Safe home & office shifting, damage-free packing, transparent pricing. Free quote!"
            ),
            "Indore" => array(
                "title" => "Packers and Movers Indore | VP Max – Verified Office Indore",
                "desc"  => "Trusted packers and movers in Indore. Office: RH 517, Pink City, Scheme No.78, Indore 452010. Expert home shifting, car transport & corporate relocation. Call now!"
            ),
            "Bhopal" => array(
                "title" => "Packers and Movers Bhopal | Safe Home & Office Shifting – VP Max",
                "desc"  => "Reliable packers and movers in Bhopal. Office at Transport Nagar, Kokta, Bhopal 462022. Professional packing, insured shifting & door-to-door delivery. Get free quote!"
            ),
            "Katni" => array(
                "title" => "Packers and Movers In Katni | Best Moving Company Katni",
                "desc" => "VP Max Packers And Movers - Shop No 2, near SBI ATM, Jharra Tikuriya, Katni, Madhya Pradesh 483501. Call 96304-83460 for tension-free relocation"
            ),
            "Gwalior" => array(
                "title" => "Packers and Movers Gwalior | VP Max – Trusted Local Movers",
                "desc"  => "Best packers and movers in Gwalior. VP Max office: City Center, Jiwaji University Rd, Gwalior 474002. Safe home relocation, bike & car transport at best price. Call now!"
            ),
            "Jabalpur" => array(
                "title" => "Packers and Movers Jabalpur | VP Max – Affordable Safe Shifting",
                "desc"  => "Top-rated packers and movers in Jabalpur. VP Max office: Kanchan Vihar, Vijay Nagar, Jabalpur MP 482002. Home & office relocation with damage-free guarantee. Free quote!"
            ),
            "Ujjain" => array(
                "title" => "Packers and Movers Ujjain | VP Max – Home & Office Relocation",
                "desc"  => "Reliable packers and movers in Ujjain. VP Max office: Dewas Rd, Rishi Nagar, Ujjain MP 456010. Expert packing, loading & intercity transport. Get free estimate today!"
            ),
            "Rewa" => array(
                "title" => "Packers and Movers in Rewa | VP Max – Verified Moving Company",
                "desc"  => "VP Max Packers Movers Rewa: Shop 41, Vidya Nagar Colony, Rewa MP 486001. Safe home shifting, household goods transport & packing services. Call for free quote!"
            ),
            "Satna" => array(
                "title" => "Packers and Movers Satna | VP Max – Safe & Affordable Movers",
                "desc"  => "Best packers and movers in Satna. VP Max office: Rajendra Nagar Rd, Satna MP 485001. Professional home & office shifting with on-time delivery. Get free estimate!"
            ),
            "Narsinghpur" => array(
                "title" => "Packers and Movers Narsinghpur | VP Max – Trusted Shifting Service",
                "desc"  => "VP Max Packers Movers Narsinghpur: Shop 5, Bariya Chouraha Main Rd, Narsinghpur MP 487110. Reliable home relocation & packing services at affordable rates. Call now!"
            ),
            "Narmadapuram" => array(
                "title" => "Packers and Movers Narmadapuram | VP Max – Home Shifting Experts",
                "desc"  => "VP Max in Narmadapuram: Office 044, near SBI ATM, Harsh Nagar, Narmadapuram MP 461001. Safe household shifting, packing & transport service. Get free quote today!"
            ),
            "Sehore" => array(
                "title" => "Packers and Movers in Sehore | VP Max – Local & Intercity Moving",
                "desc"  => "VP Max Packers Movers Sehore: Office 011, Englishpura Main Rd, near Kotwali Chouraha, Sehore MP 466001. Affordable home shifting & packing. Call for free estimate!"
            ),
            "Dewas" => array(
                "title" => "Packers and Movers Dewas | VP Max – Reliable Relocation Service",
                "desc"  => "Trusted packers and movers in Dewas. VP Max office: Ward 25, Pathan Kuan, Gomti Nagar, Dewas MP 455001. Safe packing, loading & door-to-door shifting. Free quote now!"
            ),
            "Neemuch" => array(
                "title" => "Packers and Movers Neemuch | VP Max – Affordable Shifting Experts",
                "desc"  => "VP Max Packers Movers Neemuch: Shop 13, Sanjavni Colony, Vikas Nagar, Neemuch MP 458441. Expert home relocation, packing & intercity transport. Call for free quote!"
            ),
            "Tikamgarh" => array(
                "title" => "Packers and Movers Tikamgarh | VP Max – Safe Home Shifting",
                "desc"  => "VP Max in Tikamgarh: Shop 11, State Bank, Kile Ka Maidan, near Anand Lodge, Tikamgarh MP 472001. Professional household & office relocation service. Get free estimate!"
            ),
            "Bina" => array(
                "title" => "Packers and Movers in Bina | VP Max – Verified Moving Service",
                "desc"  => "VP Max Packers Movers Bina: Shop 5, Malkhedi Railway Station Rd, Bina MP 470113. Trusted home shifting, packing & loading services at lowest price. Call us now!"
            ),
            "Panna" => array(
                "title" => "Packers and Movers Panna | VP Max – Home & Office Relocation",
                "desc"  => "VP Max office in Panna: Shop 341, Agra Mohalla, Panna MP 488001. Safe household goods packing, loading & moving services at transparent rates. Get free quote!"
            ),
            "Damoh" => array(
                "title" => "Packers and Movers in Damoh | VP Max – Trusted Local Movers",
                "desc"  => "VP Max Packers Movers near Damoh: Shop 22, near SBI Bank, Naka, Killai, Jabalpur Rd, MP 470661. Reliable home shifting & packing services. Call for free estimate!"
            ),
            "Shahdol" => array(
                "title" => "Packers and Movers Shahdol | VP Max – Safe Shifting Service",
                "desc"  => "VP Max office in Shahdol: Swami Vivekanand Complex, near Chaudhary Agency, Itwari Mohalla, Umaria, MP 484001. Home & office relocation at best price. Free quote!"
            ),
            "Chhatarpur" => array(
                "title" => "Packers and Movers Chhatarpur | VP Max – Reliable Home Shifting",
                "desc"  => "VP Max Packers Movers Chhatarpur: Shop 44, D-87, Chhatarpur Enclave Phase 2, New Delhi 110074. Safe household packing, moving & delivery. Get free estimate now!"
            ),

            // ── Delhi NCR ────────────────────────────────────────────────
            "Delhi" => array(
                "title" => "Packers and Movers Delhi | VP Max – Trusted Delhi Movers",
                "desc"  => "Best packers and movers in Delhi. VP Max office: Shop 3, Old Mini Market, Janpath Rd, New Delhi 110001. Home & office shifting with insurance cover. Free quote!"
            ),
            "Noida" => array(
                "title" => "Packers and Movers Noida | VP Max – Safe Home & Office Shifting",
                "desc"  => "Top packers and movers in Noida. VP Max office: E-168, near Sharma Transport, Sector 7, Noida UP 201301. Affordable home relocation & packing service. Call now!"
            ),
            "Ghaziabad" => array(
                "title" => "Packers and Movers Ghaziabad | VP Max – Verified Office Gaur City",
                "desc"  => "Reliable packers and movers in Ghaziabad. VP Max: Office 088, Gaur City 1 Rd, Sector 4, Ghaziabad UP 201009. Safe home & office shifting. Get free estimate today!"
            ),
            "Rohini" => array(
                "title" => "Packers and Movers in Rohini Delhi | VP Max – Local Movers",
                "desc"  => "VP Max Packers Movers Rohini: H1/39, Sector 16H, Rohini, Delhi 110089. Professional home shifting, packing & transport in West Delhi. Call for free quote today!"
            ),
            "Chhatarpur" => array(
                "title" => "Packers and Movers Chhatarpur Delhi | VP Max – Trusted Movers",
                "desc"  => "VP Max Packers Movers Chhatarpur: Shop 44, D-87, Chhatarpur Enclave Phase 2, Delhi 110074. Expert home & office shifting with damage-free guarantee. Free quote!"
            ),

            // ── Haryana ──────────────────────────────────────────────────
            "Gurgaon" => array(
                "title" => "Packers and Movers Gurgaon | VP Max – Trusted Gurugram Movers",
                "desc"  => "Best packers and movers in Gurgaon. VP Max office: Carterpuri Rd, Ashok Vihar Phase 2, Gurugram 122001. Safe home & office relocation at best price. Call now!"
            ),
            "Gurugram" => array(
                "title" => "Packers and Movers Gurugram | VP Max – Safe & Affordable Movers",
                "desc"  => "Reliable packers and movers in Gurugram. VP Max: Plot 5, Gali 1, near CRPF Camp Chowk, Sector 12, Gurugram Haryana 122001. Home shifting experts. Get free quote!"
            ),
            "Bahadurgarh" => array(
                "title" => "Packers and Movers Bahadurgarh | VP Max – Local Home Movers",
                "desc"  => "VP Max Packers Movers Bahadurgarh: 422, Shiv Chowk, Kailash Colony, near Shiv Mandir, Bahadurgarh Haryana 125407. Affordable shifting & packing. Call for free quote!"
            ),
            "Dharuhera" => array(
                "title" => "Packers and Movers Dharuhera | VP Max – Trusted Shifting Service",
                "desc"  => "VP Max office in Dharuhera: Shop 73, Sector 6, Dharuhera Haryana 123106. Expert home relocation, packing & transport services at affordable rates. Free estimate!"
            ),
            "Rohtak" => array(
                "title" => "Packers and Movers Rohtak | VP Max – Safe Home Relocation Experts",
                "desc"  => "Best packers and movers in Rohtak. VP Max: Shop 93, Sonipat Rd, Model Town, Rohtak Haryana 124001. Professional packing, loading & intercity shifting. Call now!"
            ),
            "Shahpura" => array(
                "title" => "Packers and Movers Shahpura | VP Max – Affordable Local Movers",
                "desc"  => "VP Max Packers Movers Shahpura: Shop 29, Sector 15 Part 2, Shahpura, Gurugram Haryana 303103. Reliable home shifting & packing service. Call for free estimate!"
            ),
            "Palwal" => array(
                "title" => "Packers and Movers Palwal | VP Max – Verified Moving Company",
                "desc"  => "VP Max in Palwal: Office 06, Committee Chowk Dharamshala, Minar Gate, Palwal Haryana 121102. Safe household goods shifting & packing at best price. Free quote!"
            ),
            "Jhajjar" => array(
                "title" => "Packers and Movers Jhajjar | VP Max – Trusted Local Movers Haryana",
                "desc"  => "VP Max Packers Movers Jhajjar: Shop 441, Bhatti Gate, Jhajjar Haryana 124103. Professional home relocation, packing & loading services. Get free estimate today!"
            ),
            "Sohna" => array(
                "title" => "Packers and Movers Sohna | VP Max – Safe Relocation Service",
                "desc"  => "VP Max office in Sohna: Office 112, Maharaja Agardsain Rd, Rajoria Nagar, Sohna Haryana 122103. Affordable home & office shifting with careful packing. Free quote!"
            ),
            "Manesar" => array(
                "title" => "Packers and Movers Manesar | VP Max – Home & Office Shifting",
                "desc"  => "VP Max Packers Movers Manesar: Shop 52, opp. Bal Bharti School, Sector 1, Manesar Gurugram 122052. Expert packing, loading & relocation services. Call for free quote!"
            ),
            "Hisar" => array(
                "title" => "Packers and Movers Hisar | VP Max – Reliable Home Shifting Experts",
                "desc"  => "Best packers and movers in Hisar. VP Max office: Shop 31, Sector 15, Hisar Haryana 125001. Professional home relocation, vehicle transport & packing service. Free quote!"
            ),

            // ── Rajasthan ────────────────────────────────────────────────
            "Jaipur" => array(
                "title" => "Packers and Movers Jaipur | VP Max – Trusted Home Shifting Jaipur",
                "desc"  => "Reliable packers and movers in Jaipur. VP Max office: Yadav Bhawan, Bhoora Patal Nagar, Chitrakoot, Jaipur. Expert home shifting, packing & car transport. Free quote!"
            ),

            // ── Uttar Pradesh ────────────────────────────────────────────
            "Lucknow" => array(
                "title" => "Packers and Movers Lucknow | VP Max – Safe & Affordable Movers",
                "desc"  => "Top packers and movers in Lucknow. VP Max office: Shop 36, Indira Nagar, Lucknow UP 226016. Professional home & office shifting, packing & transport. Free quote!"
            ),

            // ── Bihar ────────────────────────────────────────────────────
            "Patna" => array(
                "title" => "Packers and Movers Patna | VP Max – Verified Office Patna",
                "desc"  => "Trusted packers and movers in Patna. VP Max: Shop 39, Singh Market, Cantt Rd, near DRM Office, Patna Bihar 801503. Safe home & office relocation. Call now!"
            ),

            // ── Chandigarh ───────────────────────────────────────────────
            "Chandigarh" => array(
                "title" => "Packers and Movers Chandigarh | VP Max – Trusted Moving Experts",
                "desc"  => "Best packers and movers in Chandigarh. VP Max office: Plot 15, Sector 26, Transport Nagar, Chandigarh 160101. Home & office shifting at lowest price. Free quote!"
            ),

            // ── Gujarat ──────────────────────────────────────────────────
            "Ahmedabad" => array(
                "title" => "Packers and Movers Ahmedabad | VP Max – Safe Home Relocation",
                "desc"  => "Reliable packers and movers in Ahmedabad. VP Max office: 6, Sarvoday Estate, Narol, Ahmedabad Gujarat 382405. Expert packing, loading & shifting service. Free quote!"
            ),
            "Surat" => array(
                "title" => "Packers and Movers Surat | VP Max – Trusted Movers in Surat",
                "desc"  => "Best packers and movers in Surat. VP Max office: Plot 49, Sai Nagar, Dindoli, Surat Gujarat 395009. Safe home & office relocation with careful packing. Free estimate!"
            ),
            "Vadodara" => array(
                "title" => "Packers and Movers Vadodara | VP Max – Affordable Home Shifting",
                "desc"  => "VP Max Packers Movers Vadodara: SB1 Rachna Avenues, opp. Axis Bank, near Sundam Nagar, Gotri, Vadodara Gujarat 390021. Expert relocation services. Call for free quote!"
            ),

            // ── Maharashtra ──────────────────────────────────────────────
            "Mumbai" => array(
                "title" => "Packers and Movers Mumbai | VP Max – Trusted Mumbai Movers",
                "desc"  => "Reliable packers and movers in Mumbai. VP Max office: Shop A-5, Meherzin Society, 109 Wodehouse Rd, Mumbai 400005. Safe home & office shifting. Get free quote!"
            ),
            "Pune" => array(
                "title" => "Packers and Movers Pune | VP Max – Safe & Affordable Pune Movers",
                "desc"  => "Best packers and movers in Pune. VP Max office: House 35, Niranjan Madhav Rd, Shaniwar Peth, Pune Maharashtra 411030. Expert home & office relocation. Free quote!"
            ),
            "Nagpur" => array(
                "title" => "Packers and Movers Nagpur | VP Max – Verified Office Nagpur",
                "desc"  => "Trusted packers and movers in Nagpur. VP Max office: Plot 44, Amravati Rd, Nagpur 440023. Professional packing, loading & intercity home shifting. Get free estimate!"
            ),

            // ── Chhattisgarh ─────────────────────────────────────────────
            "Raipur" => array(
                "title" => "Packers and Movers Raipur | VP Max – Home Shifting Experts Raipur",
                "desc"  => "Reliable packers and movers in Raipur. VP Max office: Avanti Vihar Sector-2, Raipur CG 492001. Expert home & office relocation, packing & transport. Free quote!"
            ),

            // ── Telangana / Andhra Pradesh ───────────────────────────────
            "Hyderabad" => array(
                "title" => "Packers and Movers Hyderabad | VP Max – Safe Home Shifting HYD",
                "desc"  => "Best packers and movers in Hyderabad. VP Max office: Banjara Hills, Hyderabad Telangana 500034. Professional home & office shifting with full insurance cover. Free quote!"
            ),
            "Secunderabad" => array(
                "title" => "Packers and Movers Secunderabad | VP Max – Trusted Local Movers",
                "desc"  => "VP Max Packers Movers Secunderabad: Plot 30, Kistamma Enclave, Old Alwal, Secunderabad. Safe home & office relocation, packing & intercity transport. Get free quote!"
            ),

            // ── Karnataka ────────────────────────────────────────────────
            "Bangalore" => array(
                "title" => "Packers and Movers Bangalore | VP Max – Trusted Bangalore Movers",
                "desc"  => "Reliable packers and movers in Bangalore. VP Max office: Heggadadevanapura Village, Dasanapura Hobli, Bangalore North 562162. Safe home shifting. Get free quote!"
            ),
            "Bengaluru" => array(
                "title" => "Packers and Movers Bengaluru | VP Max – Safe Home Relocation",
                "desc"  => "Best packers and movers in Bengaluru. VP Max office: 670, 100 Feet Rd, Defence Colony, Indiranagar, Bengaluru Karnataka 560038. Expert shifting. Free estimate now!"
            ),

            // ── Tamil Nadu ───────────────────────────────────────────────
            "Chennai" => array(
                "title" => "Packers and Movers Chennai | VP Max – Verified Office Chennai",
                "desc"  => "Trusted packers and movers in Chennai. VP Max office: 150 Montieth Rd, Egmore, Chennai TN 600008. Safe home & office relocation, packing & transport. Free quote!"
            ),

            // ── Assam ────────────────────────────────────────────────────
            "Guwahati" => array(
                "title" => "Packers and Movers Guwahati | VP Max – Home Shifting Experts",
                "desc"  => "Reliable packers and movers in Guwahati. VP Max office: Barush Road, near Surya Tower, Ulubari, Guwahati Assam 781007. Safe home & office shifting. Free quote!"
            ),

            // ── West Bengal ──────────────────────────────────────────────
            "Kolkata" => array(
                "title" => "Packers and Movers Kolkata | VP Max – Trusted Kolkata Movers",
                "desc"  => "Best packers and movers in Kolkata. VP Max office: Shop 783, Ashutosh Mukherjee Rd, Bhowanipore, Kolkata WB 700020. Safe home relocation & packing. Free quote!"
            ),

            // ── Odisha ────────────────────────────────────────────────────
            "Bhubaneswar" => array(
                "title" => "Packers and Movers Bhubaneswar | VP Max – Safe Home Shifting OD",
                "desc"  => "VP Max Packers Movers Bhubaneswar: Shop 441, Prasanti Vihar Rd, Patia, Bhubaneswar Odisha 751024. Affordable home & office shifting with careful packing. Free quote!"
            ),

            // ── Legacy / Catch-all ────────────────────────────────────────
            "Alampur" => array(
                "title" => "Packers and Movers Alampur | VP Max – Home Shifting Service",
                "desc"  => "Trusted packers and movers in Alampur. VP Max offers safe home & office shifting, professional packing, loading & transport. Get a free quote today!"
            ),
        );

        foreach ($seo as $k => $s) {
            if (strcasecmp($k, $city) === 0) {
                return $s;
            }
        }

        // Fallback for any city not in the list (generic but still E-E-A-T focused)
        return array(
            'title' => "Packers and Movers in $city | VP Max – Safe Relocation $state",
            "desc"  => "VP Max Packers and Movers in $city, $state — professional home & office shifting, damage-free packing, transparent pricing and on-time delivery. Call for a free quote!"
        );
    }

     private function get_city_coordinates($state, $city)
    {
        $state_file = strtolower(str_replace(" ", "-", $state));
        $data_file = APPPATH . "modules/packers_movers/views/data/$state_file.php";

        if (!file_exists($data_file)) {
            return array();
        }

        $cities = array();
        include $data_file;

        foreach ($cities as $ct) {
            if (isset($ct['nm'], $ct['lat'], $ct['lon']) && strcasecmp($ct['nm'], $city) === 0) {
                return array(
                    'lat' => $ct['lat'],
                    'lon' => $ct['lon'],
                );
            }
        }

        return array();
    }

    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $branches=$this->get_branches($city);
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $state_slug = strtolower(str_replace(' ', '-', $state));
        $city_slug = strtolower(str_replace(' ', '-', $city));
        $locality_parent_slugs = [
            'bhopal', 'chandigarh', 'dewas', 'ghaziabad', 'gurugram', 'indore',
            'jabalpur', 'mumbai', 'nagpur', 'pune', 'raipur', 'sagar', 'ujjain', 'wardha'
        ];
        $canonical_path = $state_slug . '/' . $city_slug;

        // Redirect legacy locality URLs to the parent-city URL structure.
        if (in_array($state_slug, $locality_parent_slugs, true)
            && trim($this->uri->uri_string(), '/') !== $canonical_path) {
            redirect($canonical_path, 'location', 301);
            return;
        }

        $seo = $this->get_title($city, $state);
        $statelink = $state_slug;
        $coordinates = $this->get_city_coordinates($state, $city);
        
        $data = array(
            "city" => $city,
            "state" => $state,
            "related_branch"=>$branches,
            'img' => base_url('assets') . "/images/state/$statelink.webp",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "packers and movers $city, home shifting, office relocation, safe packing, moving services",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        $data = array_merge($data, $coordinates);
        if(@$branches){
            // if(@$_GET['deb']){print_r($branches['phone']);}
            $phn=$branches['phone'];
            $data['phone'] = $phn;
            $data['phonehtml'] = "tel:+91$phn";
            $data['phone1'] = "+91$phn";
            $data['phonehtml1'] = "tel:+91$phn";
            $data['phone2'] = $phn;
            $data['phonehtml2'] = "tel:+91$phn";
            $data['address1'] = $branches['address'];
        }
        echo Modules::run('template/layout2', $data);
    }

    function local_city($parent_city, $locality)
    {
        $this->load->helper('text');

        $parent_city = $this->format_location_name($parent_city);
        $locality = $this->format_location_name($locality);
        $parent_slug = strtolower(str_replace(' ', '-', $parent_city));
        $locality_slug = strtolower(str_replace(' ', '-', $locality));
        $primary_states = array(
            'bhopal' => 'madhya-pradesh',
            'chandigarh' => 'chandigarh',
            'dewas' => 'madhya-pradesh',
            'ghaziabad' => 'uttar-pradesh',
            'gurugram' => 'haryana',
            'indore' => 'madhya-pradesh',
            'jabalpur' => 'madhya-pradesh',
            'mumbai' => 'maharashtra',
            'nagpur' => 'maharashtra',
            'pune' => 'maharashtra',
            'raipur' => 'chhattisgarh',
            'sagar' => 'madhya-pradesh',
            'ujjain' => 'madhya-pradesh',
            'wardha' => 'maharashtra'
        );
        $areas = $this->get_local_city_areas($parent_slug);

        if (empty($areas) || !$this->locality_exists($areas, $locality)) {
            show_404();
            return;
        }

        $branch = $this->get_branches($parent_city);
        $title = "Packers Movers in $locality, $parent_city";
        $description = "Reliable packers and movers in $locality, $parent_city for home shifting, office relocation, car transport, and local moves. VP Max Packers and Movers $parent_city";
        $data = array(
            'city' => $parent_city,
            'locality' => $locality,
            'locality_slug' => $locality_slug,
            'parent_slug' => $parent_slug,
            'state' => isset($primary_states[$parent_slug])
                ? ucwords(str_replace('-', ' ', $primary_states[$parent_slug]))
                : '',
            'primary_city_url' => isset($primary_states[$parent_slug])
                ? site_url($parent_slug . '-packers-movers-' . $primary_states[$parent_slug])
                : site_url($parent_slug),
            'areas' => $areas,
            'related_branch' => $branch,
            'title' => $title,
            'description' => $description,
            'keywords' => "packers and movers in $locality, movers in $locality, local shifting in $locality $parent_city",
            'module' => 'packers_movers',
            'view_file' => 'local_city'
        );

        if ($branch) {
            $data['phone'] = $branch['phone'];
            $data['phonehtml'] = 'tel:+91' . preg_replace('/[^0-9+]/', '', $branch['phone']);
            $data['address1'] = $branch['address'];
        }

        echo Modules::run('template/layout2', $data);
    }

    private function format_location_name($value)
    {
        return urldecode(ucwords(str_replace('-', ' ', str_replace('_', ' ', trim($value)))));
    }

    private function get_local_city_areas($parent_slug)
    {
        $data_file = APPPATH . 'modules/packers_movers/views/data/' . $parent_slug . '.php';
        if (!is_file($data_file)) {
            return array();
        }

        $cities = array();
        include $data_file;
        return is_array($cities) ? $cities : array();
    }

    private function locality_exists($areas, $locality)
    {
        foreach ($areas as $area) {
            if (!empty($area['nm']) && strcasecmp($area['nm'], $locality) === 0) {
                return true;
            }
        }
        return false;
    }
    function get_branches($city){
        $branches = [
                ['city' => 'Ghaziabad', 'contact_person' => 'Mr Pankaj Sir', 'address' => 'Office No. 088, Gaur City 1 Rd, Gaur City 1, Sector 4, Ghaziabad, Uttar Pradesh 201009', 'phone' => '9870104515'],
                ['city' => 'Pune', 'contact_person' => 'Pawan Choudhary', 'address' => 'House No.35,Niranjan Madhav Rd, Shaniwar Peth, Pune, Maharashtra 411030', 'phone' => '9671113460'],
                ['city' => 'Ahmedabad', 'contact_person' => 'Mr Balwan Choudhary', 'address' => '6, sarvoday estate Narol, Ahmedabad - 382405', 'phone' => '09109083460'],
                ['city' => 'Gurgaon', 'contact_person' => 'Mr. Kuldeep Verma', 'address' => 'Shop No 3, Phase, 2, Carterpuri Rd, Block B, Sheetla Colony, Ashok Vihar Phase 2, Gurugram, 122001', 'phone' => '9034951515'],
                ['city' => 'Secunderabad', 'contact_person' => 'Mr Dusa Ram', 'address' => 'Plot No. 30 Kistamma Enclav Old Alwal Secunderabad', 'phone' => '9630263460'],
                ['city' => 'Surat', 'contact_person' => 'KD Singh', 'address' => 'Plot No.49, Sai Nagar, Dindoli, Surat - 395009 (Gujarat)', 'phone' => '9729809807'],
                ['city' => 'Raipur', 'contact_person' => 'Mr Soni Ji', 'address' => 'Avanti Vihar Sector-2, Raipur-492001', 'phone' => '9630263460'],
                ['city' => 'Indore', 'contact_person' => 'Pramod Kumar', 'address' => 'RH 517, Pink City Scheme No.78 Phase No.1 Indore 452010 (MP)', 'phone' => '9669453460'],
                ['city' => 'Katni', 'contact_person' => 'Mr. PK Ranoliya', 'address' => 'Shop No 2, near SBI ATM, Jharra Tikuriya, Katni, Madhya Pradesh 483501', 'phone' => '09630483460'],
                ['city' => 'Bhopal', 'contact_person' => 'Mr.PK', 'address' => 'Office No.542, Rajadhani Paras City Transport Nagar, Kokta Bhopal', 'phone' => '9630153460'],
                ['city' => 'Guwahati', 'contact_person' => '', 'address' => 'Barush Road, Near Surya Tower, Ulubari, Guwahati, Assam-781007', 'phone' => '9630263460'],
                ['city' => 'Vadodara', 'contact_person' => 'Mr. Arvind Sharma', 'address' => 'Sb 1 Rachna Avenues Opp Axis Bank Near Sundam Nagar Gotri, Vadodara, Gujarat-390021', 'phone' => '09993603460'],
                ['city' => 'Nagpur', 'contact_person' => 'Pawan Choudhary', 'address' => 'House No. 901, Plot No.44 Amravati Road Nagpur 440023', 'phone' => '+919671113460'],
                ['city' => 'Jaipur', 'contact_person' => 'Mr. Sarwan Ji', 'address' => 'Shop No-8 Yadav Bhawan Bhoora Patal Nagar Chitrakoot Behaend SBBBJ Jaipur', 'phone' => '9630263460'],
                ['city' => 'Chennai', 'contact_person' => '', 'address' => 'Basement Next to Alsa Mail, 150 Montieth Road, Egmore, Chennai, Tamilnadu-600008', 'phone' => '09109063460'],
                ['city' => 'Chandigarh', 'contact_person' => 'Mr.Amit Kumar', 'address' => 'Plot No. -15, Sector-26,Transport Nagar, Chandigarh -160101', 'phone' => '9289959515'],
                ['city' => 'Jabalpur', 'contact_person' => 'Mr. Mohit Garg', 'address' => '1355, Kanchan Vihar, Vijay Nagar, Jabalpur, Raksha, Madhya Pradesh 482002', 'phone' => '09993603460'],
                ['city' => 'Bangalore', 'contact_person' => 'Mr.Sandeep Kumar', 'address' => 'Sy.No.65/1, Heggadadevanapura Village, Dasanapura Hobli, Bangalore North Taluk - 562162', 'phone' => '9379005001'],
                ['city' => 'Noida', 'contact_person' => 'Mr Ravi Kumar', 'address' => 'E-168, Near Sharma Transport, Sector-7, Noida, Uttar Pradesh- 201301', 'phone' => '9993983460'],
                ['city' => 'Lucknow', 'contact_person' => 'Manoj Saini', 'address' => 'Shop No. 36, Indira Nagar, Lucknow, Uttar Pradesh-226016', 'phone' => '09630483460'],
                ['city' => 'Bahadurgarh', 'contact_person' => 'Mr. Kuldeep', 'address' => '422,Shiv Chowk, Kailash Colony. Near Shiv Mandir, Bahadurgarh, 125407', 'phone' => '9109063460'],
                ['city' => 'Bengaluru', 'contact_person' => 'Mr Balwan Choudhary', 'address' => '670, 100 Feet Rd, Defence Colony, Indiranagar, Bengaluru, Karnataka 560038', 'phone' => '09630483460'],
                ['city' => 'Hyderabad', 'contact_person' => '', 'address' => 'Road No.13, nearby masjid e Rehmat, Zahara Nagar, Banjara Hills, Hyderabad, Telangana 500034', 'phone' => '09109063460'],
                ['city' => 'Chhatarpur', 'contact_person' => 'Jyoti', 'address' => 'Shop No 44, D-87, near Chattarpur Enclave, Chhatarpur Enclave Phase 2, Chattarpur Enclave, Chhatarpur, New Delhi, Delhi 110074', 'phone' => '09034951515'],
                ['city' => 'Damoh', 'contact_person' => '', 'address' => 'Shop No 22, Rd, near SBI Bank, Naka, Killai, Jabalpur, Madhya Pradesh 470661', 'phone' => '09630483460'],
                ['city' => 'Gwalior', 'contact_person' => 'Mr. Monesh Sharma', 'address' => 'Shop No. 8 City Center, Jiwaji University, Mahalgaon, Gwalior, Madhya Pradesh 474002', 'phone' => '09752383460'],
                ['city' => 'Delhi', 'contact_person' => 'KD Singh', 'address' => 'Shop.3 Old Mini Market Janpath Road New Delhi Code 110001', 'phone' => '9310951515'],
                ['city' => 'Tikamgarh', 'contact_person' => 'Pk Singh', 'address' => 'Shop No. 11, State Bank, Kile Ka Maidan, near Anand Lodge, Tikamgarh, Madhya Pradesh 472001', 'phone' => '09993983460'],
                ['city' => 'Satna', 'contact_person' => 'Pramod Kumar', 'address' => 'Office No. 022, Rajendra Nagar Rd, Rajendra Nagar, Satna, Madhya Pradesh 485001', 'phone' => '09752383460'],
                ['city' => 'Bina', 'contact_person' => 'PK Singh', 'address' => 'Shop No. 5 Malkhedi Railway Station Rd, Chitrakoot, Bina, Madhya Pradesh 470113', 'phone' => '9109083460'],
                ['city' => 'Sagar', 'contact_person' => 'Pramod Kumar', 'address' => 'Ground Floor, Shop 2, JL Institute Of Study Center, Tilak Ganj, Ward 14, Sagar, Madhya Pradesh 470002', 'phone' => '9630263460'],
                ['city' => 'Narsinghpur', 'contact_person' => 'PK Singh', 'address' => 'Shop No. 5, Bariya Chouraha Main Road Rani Pipariya, Narsinghpur, Madhya Pradesh 487110', 'phone' => '09109083460'],
                ['city' => 'Rewa', 'contact_person' => 'JP Sir', 'address' => 'Shop No. 41, Ground Floor Vidya Nagar Colony, Rewa, Madhya Pradesh 486001', 'phone' => '09752383460'],
                // ['city' => 'Satna', 'contact_person' => '', 'address' => 'Office No. 022, Rajendra Nagar Rd, Rajendra Nagar, Satna, Madhya Pradesh 485001', 'phone' => '9752383460'],
                ['city' => 'Panna', 'contact_person' => '', 'address' => 'Shop No. 341, Ground Floore Agra Mohalla, Panna, Madhya Pradesh 488001', 'phone' => '09993603460'],
                ['city' => 'Sehore', 'contact_person' => '', 'address' => 'Office No. 011, Englishpura Main Rd, near Kotwali Chouraha, Sindhi Colony, Sehore, Madhya Pradesh 466001', 'phone' => '9993983460'],
                ['city' => 'Dharuhera', 'contact_person' => '', 'address' => 'Shop No. 73, Sector 6, Dharuhera, Haryana 123106', 'phone' => '09870104515'],
                ['city' => 'Narmadapuram', 'contact_person' => '', 'address' => 'Office No. 044, near SBI Atm, Harsh Nagar, Narayan Nagar, Narmadapuram, Madhya Pradesh 461001', 'phone' => '9685873460'],
                ['city' => 'Rohtak', 'contact_person' => '', 'address' => 'Shop No. 93 Sonipat Rd, Model Town, Rohtak, Haryana 124001', 'phone' => '09034999515'],
                ['city' => 'Shahpura', 'contact_person' => '', 'address' => 'Shop No.29, Sector 15 Part 2, Sector 15, Shahpura, Gurugram, Haryana 303103', 'phone' => '09034999515'],
                ['city' => 'Palwal', 'contact_person' => '', 'address' => 'Office No. 06, Committee Chowk Dharamshala, Minar Gate Area, Palwal, Haryana 121102', 'phone' => '9109063460'],
                ['city' => 'Jhajjar', 'contact_person' => '', 'address' => 'Shop No. 441, Ground Floore Bhatti Gate, Jhajjar, Jhajjarrural, Haryana 124103', 'phone' => '09870104515'],
                ['city' => 'Sohna', 'contact_person' => '', 'address' => 'Office No. 112 Ground Floor, Maharaja Agardsain Rd, Rajoria Nagar, Sohna, Sohna Rural, Haryana 122103', 'phone' => '9870104515'],
                ['city' => 'Rohini', 'contact_person' => '', 'address' => 'H1/39, H-1 Sector 16, Sector 16H, Rohini, Delhi, 110089', 'phone' => '9034999515'],
                ['city' => 'Hisar', 'contact_person' => '', 'address' => 'Shop No. 31, K41, Kaimri- Mangali Rd, Sector 15, PLA, Hisar, Haryana 125001', 'phone' => '09034999515'],
                ['city' => 'Patna', 'contact_person' => 'Nitin Kuma', 'address' => 'Shop. No.39, Singh Market, Cantt Road, near DRM OFFICE, Garikhana, Khagaul, Patna, Bihar 801503', 'phone' => '09109083460'],
                ['city' => 'Mumbai', 'contact_person' => 'Pawan Choudhary', 'address' => 'Shop No. A-5, Meherzin Society, 109, Wodehouse Rd, Mumbai, Maharashtra 400005', 'phone' => '+919671113460'],
                ['city' => 'Kolkata', 'contact_person' => '', 'address' => 'Shop No. 783, Paddapukur, Ashutosh Mukherjee Rd, Jadubabur Bazar, Bhowanipore, Kolkata, West Bengal 700020', 'phone' => '09034921515'],
                ['city' => 'Shahdol', 'contact_person' => '', 'address' => 'Office No. 033, Swami Vivekanand Complex, near Chaudhary Agency, Itwari Mohalla, Umaria, Shahdol, Madhya Pradesh 484001', 'phone' => '9993603460'],
                ['city' => 'Neemuch', 'contact_person' => '', 'address' => 'Shop No. 13, Ward No. 28, Sanjavni Colony, Dr. Radhakrishnan Nagar, Vikas Nagar, Neemuch, Madhya Pradesh 458441', 'phone' => '9109083460'],
                ['city' => 'Dewas', 'contact_person' => '', 'address' => 'Office No. 099 Ward, 25, Pathan Kuan, Sector 1, Gomti Nagar, Dewas, Madhya Pradesh 455001', 'phone' => '9685873460'],
                ['city' => 'Chhatarpur', 'contact_person' => '', 'address' => 'Shop No-44, D-87, Chhatarpur Enclave Phase 2, Chattarpur Enclave, Chhatarpur, New Delhi, Delhi 110074', 'phone' => '09034951515'],
                ['city' => 'Manesar', 'contact_person' => '', 'address' => 'Shop No 52, opposite Bal Bharti School, Sector 1, Manesar, Gurugram, Haryana 122052', 'phone' => '9870104515'],
                ['city' => 'Bhubaneswar', 'contact_person' => '', 'address' => 'Shop No. 441, Prasanti Vihar Rd, Prasanti Vihar, Patia, Bhubaneswar, Odisha 751024', 'phone' => '09993603460'],
                ['city' => 'Sagar', 'contact_person' => 'Pramod Kumar', 'address' => 'Ground Floor, Shop 2, JL Institute Of Study Center, Tilak Ganj, Ward 14, Sagar, Madhya Pradesh 470002', 'phone' => '9630263460'],
                ['city' => 'Ujjain', 'contact_person' => 'SK Singh', 'address' => 'Office No. 066, Dewas Rd, Rishi Nagar, Ujjain, Madhya Pradesh 456010', 'phone' => '9685873460'],
                ['city' => 'Gurugram', 'contact_person' => 'KD Singh', 'address' => 'Plot No. 5, Gali Number 1, near CRPF Camp Chowk, Shiv Vihar, Sector 12, Gurugram, Haryana 122001', 'phone' => '9870104515'],
            ];
            foreach ($branches as $branch) {
                if (strcasecmp($branch['city'], $city) === 0) {
                    return $branch;
                }
            }

            return null;
    } 
}
