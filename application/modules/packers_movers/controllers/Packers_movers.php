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
            "title" => $this->comp['company3'] . " in $state",
            "description" => $this->comp['company3'] . " in $state",
            "keywords" => "$state " . $this->comp['company3'] . " in $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    {
        $seo = array(
            "Sagar" => array(
                "title" => "Packers and Movers in Sagar, MP | Best Moving Company - VP Max",
                "desc" => "Looking for trusted packers and movers in Sagar? VP Max offers safe home/office shifting, packing, loading & transport in Sagar, MP. Get free quotes today!"
            ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        //edit by Arshad 15-11-2024
        return array(
            'title' => "Packers and Movers in $city | VP Max $state",
            "desc" => "We as a packing and moving company in $city assure the best shifting experience with affordable rates and charges, quality service and trusted reviews across all platforms"
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
        $seo = $this->get_title($city, $state);
        $statelink = str_replace(" ", "-", strtolower($state));
        $coordinates = $this->get_city_coordinates($state, $city);
        
        $data = array(
            "city" => $city,
            "state" => $state,
            "related_branch"=>$branches,
            'img' => base_url('assets') . "/images/state/$statelink.webp",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers in $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
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
        }
        echo Modules::run('template/layout2', $data);
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
                ['city' => 'Katni', 'contact_person' => 'Mr. PK Ranoliya', 'address' => 'Shop No-2 Near Sbi Atm Jharra Tikuriya, Katni, Madhya Pradesh 483504', 'phone' => '09630483460'],
                ['city' => 'Bhopal', 'contact_person' => 'Mr.PK', 'address' => 'Office No.542, Rajadhani Paras City Transport Nagar, Kokta Bhopal', 'phone' => '9630153460'],
                ['city' => 'Guwahati', 'contact_person' => '', 'address' => 'Barush Road, Near Surya Tower, Ulubari, Guwahati, Assam-781007', 'phone' => '9630263460'],
                ['city' => 'Vadodara', 'contact_person' => 'Mr. Arvind Sharma', 'address' => 'Sb 1 Rachna Avenues Opp Axis Bank Near Sundam Nagar Gotri, Vadodara, Gujarat-390021', 'phone' => '09993603460'],
                ['city' => 'Nagpur', 'contact_person' => 'Pawan Choudhary', 'address' => 'House No. 901, Plot No.44 Amravati Road Nagpur 440023', 'phone' => '+919671113460'],
                ['city' => 'Jaipur', 'contact_person' => 'Mr. Sarwan Ji', 'address' => 'Shop No-8 Yadav Bhawan Bhoora Patal Nagar Chitrakoot Behaend SBBBJ Jaipur', 'phone' => '9630263460'],
                ['city' => 'Chennai', 'contact_person' => '', 'address' => 'Basement Next to Alsa Mail, 150 Montieth Road, Egmore, Chennai, Tamilnadu-600008', 'phone' => '09109063460'],
                ['city' => 'Chandigarh', 'contact_person' => 'Mr.Amit Kumar', 'address' => 'Plot No. -15, Sector-26,Transport Nagar, Chandigarh -160101', 'phone' => '9289959515'],
                ['city' => 'Jabalpur', 'contact_person' => 'Mr. Mohit Garg', 'address' => '1355, Kanchan Vihar, Vijay Nagar, Jabalpur, Madhya Pradesh 482002', 'phone' => '9993603460'],
                ['city' => 'Bangalore', 'contact_person' => 'Mr.Sandeep Kumar', 'address' => 'Sy.No.65/1, Heggadadevanapura Village, Dasanapura Hobli, Bangalore North Taluk - 562162', 'phone' => '9379005001'],
                ['city' => 'Noida', 'contact_person' => 'Mr Ravi Kumar', 'address' => 'E-168, Near Sharma Transport, Sector-7, Noida, Uttar Pradesh- 201301', 'phone' => '9993983460'],
                ['city' => 'Lucknow', 'contact_person' => 'Manoj Saini', 'address' => 'Shop No. 36, Indira Nagar, Lucknow, Uttar Pradesh-226016', 'phone' => '09630483460'],
                ['city' => 'Bahadurgarh', 'contact_person' => 'Mr. Kuldeep', 'address' => '422,Shiv Chowk, Kailash Colony. Near Shiv Mandir, Bahadurgarh, 125407', 'phone' => '9109063460'],
                ['city' => 'Bengaluru', 'contact_person' => 'Mr Balwan Choudhary', 'address' => '670, 100 Feet Rd, Defence Colony, Indiranagar, Bengaluru, Karnataka 560038', 'phone' => '09630483460'],
                ['city' => 'Hyderabad', 'contact_person' => '', 'address' => 'Road No.13, nearby masjid e Rehmat, Zahara Nagar, Banjara Hills, Hyderabad, Telangana 500034', 'phone' => '09109063460'],
                ['city' => 'Chhatarpur', 'contact_person' => 'Jyoti', 'address' => 'Office No 530, Suncity Colony, Ramji Nagar, Chhatarpur, Madhya Pradesh 471001', 'phone' => '09993983460'],
                ['city' => 'Damoh', 'contact_person' => '', 'address' => 'Shop No.-22, Killai Naka, Near SBI Bank Jabalpur Rd, Damoh, Madhya Pradesh 470661', 'phone' => '09630483460'],
                ['city' => 'Gwalior', 'contact_person' => 'Mr. Monesh Sharma', 'address' => 'Shop No. 8 City Center, Jiwaji University, Mahalgaon, Gwalior, Madhya Pradesh 474002', 'phone' => '09752383460'],
                ['city' => 'Delhi', 'contact_person' => 'KD Singh', 'address' => 'Shop.3 Old Mini Market Janpath Road New Delhi Code 110001', 'phone' => '9310951515'],
                ['city' => 'Tikamgarh', 'contact_person' => 'Pk Singh', 'address' => 'Kile Ka Maidan Shop No. 11 State Bank Near Anand Lodge Tikamgarh MP 472001', 'phone' => '9993983460'],
                ['city' => 'Satna', 'contact_person' => '', 'address' => 'Shop No. 542, Sangram Colony, Satna, Madhya Pradesh 485001', 'phone' => '09109083460'],
                ['city' => 'Bina', 'contact_person' => 'PK Singh', 'address' => 'Shop No. 5 Malkhedi Railway Station Rd, Chitrakoot, Bina, Madhya Pradesh 470113', 'phone' => '9109083460'],
                ['city' => 'Sagar', 'contact_person' => 'Pramod Kumar', 'address' => 'Ground Floor, Shop 2, JL Institute Of Study Center, Tilak Ganj, Ward 14, Sagar, Madhya Pradesh 470002', 'phone' => '9630263460'],
                ['city' => 'Narsinghpur', 'contact_person' => 'PK Singh', 'address' => 'Shop No. 5, Bariya Chouraha Main Road Rani Pipariya, Narsinghpur, Madhya Pradesh 487110', 'phone' => '09109083460'],
                ['city' => 'Rewa', 'contact_person' => 'JP Sir', 'address' => 'Shop No. 41, Ground Floor Vidya Nagar Colony, Rewa, Madhya Pradesh 486001', 'phone' => '09752383460'],
                ['city' => 'Satna', 'contact_person' => '', 'address' => 'Office No. 022, Rajendra Nagar Rd, Rajendra Nagar, Satna, Madhya Pradesh 485001', 'phone' => '9752383460'],
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