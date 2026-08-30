<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us | " . $this->comp['company3'];
        $data['description'] = "Learn about " . $this->comp['company3'] . "—India's leading relocation company offering safe, affordable, and professional packing and moving services across major cities.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | " . $this->comp['company3'];
        $data['description'] = "Discover why customers trust " . $this->comp['company3'] . " for safe, reliable, and transparently priced shifting, vehicle transport, and corporate relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) | " . $this->comp['company3'];
        $data['description'] = "Get answers to common queries about packing and shifting charges, transit insurance, delivery timeline, tracking, and restricted items at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        redirect('reviews');
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "How " . $this->comp['company3'] . " handles and protects your personal data during your relocation.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "The terms and conditions governing our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }

    function mission()
    {
        $data['title'] = "Mission | " . $this->comp['company3'];
        $data['description'] = "Learn about the mission of " . $this->comp['company3'] . " in providing top-notch relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "mission";
        echo Modules::run('template/layout2', $data);
    }

    function iba()
    {
        $data['title'] = "IBA Approved Packers | " . $this->comp['company3'];
        $data['description'] = "VP Max Packers and Movers is an IBA approved packers and movers company providing secure home shifting, office relocation, GST billing, insurance support, and Pan India moving services.";
        $data['module'] = "about";
        $data['view_file'] = "iba";
        echo Modules::run('template/layout2', $data);
    }

    function certificates()
    {
        $data['title'] = "Our Certificates | " . $this->comp['company3'];
        $data['description'] = "View the certificates and accreditations of " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "certificates";
        echo Modules::run('template/layout2', $data);
    }

    function payment()
    {
        $data['title'] = "Payment Mode | " . $this->comp['company3'];
        $data['description'] = "Secure and convenient payment modes for services by " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "payment";
        echo Modules::run('template/layout2', $data);
    }

    function award_gallery()
    {
        $data['title'] = "Awards & Gallery | " . $this->comp['company3'];
        $data['description'] = "View the awards, recognitions, and photo gallery of " . $this->comp['company3'] . " Packers and Movers.";
        $data['module'] = "about";
        $data['view_file'] = "award_gallery";
        echo Modules::run('template/layout2', $data);
    }

    function philosophy()
    {
        $data['title'] = "Our Philosophy | " . $this->comp['company3'];
        $data['description'] = "Learn about the core values, customer commitment, and professional philosophy that drives " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "philosophy";
        echo Modules::run('template/layout2', $data);
    }

    function disclaimer()
    {
        $data['title'] = "Disclaimer | " . $this->comp['company3'];
        $data['description'] = "Disclaimer for " . $this->comp['company3'];
        $data['module'] = "about";
        $data['view_file'] = "disclaimer";
        echo Modules::run('template/layout2', $data);
    }

    function refund()
    {
        $data['title'] = "Refund Policy | " . $this->comp['company3'];
        $data['description'] = "Refund Policy for " . $this->comp['company3'];
        $data['module'] = "about";
        $data['view_file'] = "refund";
        echo Modules::run('template/layout2', $data);
    }

    function iso()
    {
        $data['title'] = "ISO Certification | " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " is an ISO 9001:2015 certified company ensuring quality management systems and professional relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "iso";
        echo Modules::run('template/layout2', $data);
    }

    function fraud()
    {
        $data['title'] = "Important Tips to Avoid Fraud Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Learn how to spot and avoid moving scams and fraudulent packers and movers with these essential tips.";
        $data['module'] = "about";
        $data['view_file'] = "avoid_fraud";
        echo Modules::run('template/layout2', $data);
    }

    function packing_material()
    {
        $data['title'] = "Premium Packing Material Guide | " . $this->comp['company3'];
        $data['description'] = "Discover the high-quality packing materials used by our expert packers and movers to ensure the utmost safety of your belongings during relocation.";
        $data['module'] = "about";
        $data['view_file'] = "packing_material";
        echo Modules::run('template/layout2', $data);
    }

    function moving_guide()
    {
        $data['title'] = "The Ultimate Moving Guide & Checklist | " . $this->comp['company3'];
        $data['description'] = "Follow our comprehensive moving guide and checklist to ensure a smooth, organized, and stress-free relocation for your home or office.";
        $data['module'] = "about";
        $data['view_file'] = "moving_guide";
        echo Modules::run('template/layout2', $data);
    }
}
