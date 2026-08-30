<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Best Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/household-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/office-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services from " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/bike-transportation-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    
    {
        $this->load->module('home');
    $this->home->oldurl_to_newurl();
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/car-transportation-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "Secure packing and moving services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/loading-unloading-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function domestic()
    {
        $data['title'] = "Best Domestic Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Professional and secure domestic relocation services across India by " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/domestic-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "domestic";
        echo Modules::run('template/layout2', $data);
    }

    function international()
    {
        $data['title'] = "International Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Safe and reliable international shifting and relocation services by " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/international-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "international";
        echo Modules::run('template/layout2', $data);
    }

    function local()
    {
        $data['title'] = "Local Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Fast and secure local shifting services within the city by " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/local-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "local";
        echo Modules::run('template/layout2', $data);
    }

    function warehouse()
    {
         $this->load->module('home');
    $this->home->oldurl_to_newurl();
        $data['title'] = "Warehouse & Storage Services | " . $this->comp['company3'];
        $data['description'] = "Secure and affordable warehouse and storage services by " . $this->comp['company3'] . ".";
        $data['og_image'] = base_url('assets/images/services/warehouse-storage-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "warehouse";
        echo Modules::run('template/layout2', $data);
    }
}
