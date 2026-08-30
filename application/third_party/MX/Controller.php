<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '9630263460';
        $this->comp['phonehtml'] = 'tel:+919630263460';
        $this->comp['phone1'] = '+91 9630263460';
        $this->comp['phonehtml1'] = 'tel:+919630263460';
        $this->comp['phone2'] = '9034951515';
        $this->comp['phonehtml2'] = 'tel:9034951515';
        $this->comp['whatsapp'] = '+919630263460';
        $this->comp['supportmail'] = 'info@vpmaxpackersandmovers.com';
        $this->comp['replyToMail'] = 'info@vpmaxpackersandmovers.com';
        $this->comp['mail'] = 'info@vpmaxpackersandmovers.com';
        $this->comp['mailhtml'] = "mailto:info@vpmaxpackersandmovers.com";
        $this->comp['company3'] = 'VP Max Packers and Movers';
        $this->comp['companydomain'] = 'vpmaxpackersandmovers.com';

        $this->comp['facebookhtml'] = "https://www.facebook.com/VPMAX.Packers.Movers.Madhya.Pradesh";
        $this->comp['youtubehtml'] = "https://www.youtube.com/@vpmaxpackersandmovers?si=w87nAct1AzxpiPWo";
        $this->comp['instagramhtml'] = "https://www.instagram.com/vpmaxpackersandmovers?igsh=MWg2dzcxd3BoZjc1eg%3D%3D";
        $this->comp['twitterhtml'] = "https://x.com/vpmaxpackers?t=opooyR-BeqDQCXw8251aTA&s=09";
        $this->comp['linkedinhtml'] = "https://www.linkedin.com/in/vpmax-packers-18245b319/recent-activity/all/";
        $this->comp['pinteresthtml'] = "https://in.pinterest.com/VP_Max_Packers_And_Movers/";
        $this->comp['snapchathtml'] = "https://www.snapchat.com/add/vpmaxpackers";
        $this->comp['whatsapphtml'] = "https://wa.me/919630263460";

        $this->comp['address'] = "RH 517, Pink City Scheme No.78 Phase No.1 Indore 452010 (MP)";
        $this->comp['address1'] = "RH 517, Pink City Scheme No.78 Phase No.1";
        $this->comp['address2'] = "Indore 452010 (MP)";
        $this->comp['address3'] = "Shop No 44, D-87, Near Chattarpur Enclave, Phase 2, Chhatarpur, New Delhi, Delhi 110074";
        $this->comp['addressRegion'] = "Indore";
        $this->comp['postalCode'] = "452010";
        $this->comp['companystate'] = "Madhya Pradesh";
        $this->comp['themeColor'] = "#0a4ebd";

        $this->comp['experience'] = "23+";
        $this->comp['startYear'] = "2003";

        $this->comp['happyClients'] = "4,850+";
        $this->comp['yearsExperience'] = "23+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "28+";

        $this->comp['sku'] = "VPMAX50463";
        $this->comp['mpn'] = "VPMAX50463";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "4850";
        $this->comp['datePublished'] = "2026-07-23";
        $this->comp['reviewBody'] = "VP Max team is the first choice for safe Packing and Moving services with affordable and genuine rates";
        $this->comp['reviewperson'] = "Ravi Shankar";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
