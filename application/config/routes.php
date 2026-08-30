<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['search'] = 'home/search';

// Company Routes
$route['about-us'] = 'about/index';
$route['contact-us'] = 'contacts/index';
$route['faqs'] = 'about/faqs';
$route['photo-gallery'] = "gallery/photo_gallery";
$route['video-gallery'] = "gallery/video_gallery";
$route['testimonials'] = 'about/testimonials';
$route['reviews'] = 'reviews/index';
$route['sitemap'] = 'home/sitemap';
$route['about/submit_review'] = 'reviews/submit';
$route['blog/view'] = 'blog/view';
$route['blog/view/(:num)'] = 'blog/view/$1';
$route['blog/([a-z0-9-]+)'] = 'blog/read/$1';
$route['blog'] = 'blog/view';
$route['privacy-policy'] = 'about/privacy';
$route['privacy-and-policy'] = 'about/privacy';
$route['disclaimer'] = 'about/disclaimer';
$route['refund-policy'] = 'about/refund';
$route['terms-and-conditions'] = 'about/terms';
$route['mission-and-vision'] = 'about/mission';
$route['iba-approved-packers'] = 'about/iba';
$route['certificates'] = 'about/certificates';
$route['iso-certification'] = 'about/iso';
$route['payment-options'] = 'about/payment';
$route['payment-mode'] = 'about/payment';
$route['award-gallery'] = 'about/award_gallery';
$route['our-philosophy'] = 'about/philosophy';
// City Services Routes
$route["home-shifting-in-(:any)"] = "city_services/home_shifting/$1";
$route["office-shifting-in-(:any)"] = "city_services/office_shifting/$1";
$route["car-transport-in-(:any)"] = "city_services/car_transport/$1";
$route["bike-transport-in-(:any)"] = "city_services/bike_transport/$1";
$route["international-service-in-(:any)"] = "city_services/international_service/$1";
$route["iba-approved-packers-in-(:any)"] = "city_services/iba_approved_packers/$1";

// Services Routes
$route["household-shifting"] = "services/homeShifting";
$route["office-shifting"] = "services/office";
$route["local-shifting"] = "services/local";
$route["domestic-shifting"] = "services/domestic";
$route["international-shifting"] = "services/international";
$route["car-transportation-service"] = "services/car";
$route["bike-transportation-service"] = "services/bike";
$route["loading-and-unloading"] = "services/loadingUnloading";
$route["packing-and-moving"] = "services/packingMoving";
$route["warehouse-and-storage-services"] = "services/warehouse";

$route["infrastructure"] = "about/infrastructure";
$route["why-choose-us"] = "about/choose";

// Branch/City Routes
$route["our-location"] = "packers_movers/state";
$route["packers-movers-(:any)-india"] = "packers_movers/state_services/$1";
$route["(:any)-packers-movers-(:any)"] = "packers_movers/city/$2/$1";
$route["(:any)/packers-movers-(:any)"] = "packers_movers/city/$1/$2";
$route["packers-movers-from-(:any)-to-(:any)"] = "from_to/index/$1/$2";
$route["bihar"] = "packers_movers/state_services/bihar";
$route["delhi"] = "packers_movers/state_services/delhi";
$route["west-bengal"] = "packers_movers/state_services/west-bengal";
$route["gujarat"] = "packers_movers/state_services/gujarat";
$route["punjab"] = "packers_movers/state_services/punjab";
$route["maharashtra"] = "packers_movers/state_services/maharashtra";
$route["haryana"] = "packers_movers/state_services/haryana";
$route["rajasthan"] = "packers_movers/state_services/rajasthan";
$route["uttar-pradesh"] = "packers_movers/state_services/uttar-pradesh";
$route["jharkhand"] = "packers_movers/state_services/jharkhand";
$route["assam"] = "packers_movers/state_services/assam";
$route["karnataka"] = "packers_movers/state_services/karnataka";
$route["bangalore"] = "packers_movers/state_services/bangalore";
$route["tamil-nadu"] = "packers_movers/state_services/tamil-nadu";

// Added missing locations
$route["bhopal"] = "packers_movers/state_services/bhopal";
$route["madhya-pradesh"] = "packers_movers/state_services/madhya-pradesh";
$route["ghaziabad"] = "packers_movers/state_services/ghaziabad";
$route["raipur"] = "packers_movers/state_services/raipur";
$route["chandigarh"] = "packers_movers/state_services/chandigarh";
$route["telangana"] = "packers_movers/state_services/telangana";
$route["nagaland"] = "packers_movers/state_services/nagaland";
$route["kerala"] = "packers_movers/state_services/kerala";
$route["odisha"] = "packers_movers/state_services/odisha";
$route["gujrat"] = "packers_movers/state_services/gujrat";
$route["chhattisgarh"] = "packers_movers/state_services/chhattisgarh";
$route["indore"] = "packers_movers/state_services/indore";
$route["ujjain"] = "packers_movers/state_services/ujjain";
$route["dewas"] = "packers_movers/state_services/dewas";
$route["sagar"] = "packers_movers/state_services/sagar";
$route["jabalpur"] = "packers_movers/state_services/jabalpur";
$route["pune"] = "packers_movers/state_services/pune";
$route["nagpur"] = "packers_movers/state_services/nagpur";
$route["wardha"] = "packers_movers/state_services/wardha";
$route["mumbai"] = "packers_movers/state_services/mumbai";
$route["gurugram"] = "packers_movers/state_services/gurugram";
$route["bhandara"] = "packers_movers/state_services/bhandara";
$route["(:any).htm"] = "home/error";
$route['translate_uri_dashes'] = FALSE;


$route['branch-address'] = 'contacts/branch_address';


$route['avoid-fraud-packers-and-movers'] = 'about/fraud';

$route['packing-material'] = 'about/packing_material';

$route['moving-guide'] = 'about/moving_guide';

