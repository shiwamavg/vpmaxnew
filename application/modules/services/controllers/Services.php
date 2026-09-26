<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Home Shifting Services - " . $this->comp['company3'];
        $data['description'] = "Looking for safe home shifting services? " . $this->comp['company3'] . " offers professional door-to-door household relocation with expert packers across India. Get a free quote!";

        $data['og_image'] = base_url('assets/images/services/household-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Office Relocation Services - " . $this->comp['company3'];
        $data['description'] = "Minimize downtime with expert office shifting services by " . $this->comp['company3'] . ". Safe packing of IT assets, furniture & files, with on-time corporate relocation. Get a free quote!";

        $data['og_image'] = base_url('assets/images/services/office-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Bike Transport Services - " . $this->comp['company3'];
        $data['description'] = "Safe and scratch-free two-wheeler & bike transport services by " . $this->comp['company3'] . ". We use enclosed carriers for timely, damage-free delivery. Call for a free estimate today!";

        $data['og_image'] = base_url('assets/images/services/bike-transportation-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    
    {
        $this->load->module('home');
    $this->home->oldurl_to_newurl();
        $data['title'] = "Car Transport Services - " . $this->comp['company3'];
        $data['description'] = "Reliable car carrier transport services by " . $this->comp['company3'] . ". We ensure on-time, damage-free vehicle delivery across India using professional enclosed carriers. Get a free quote!";

        $data['og_image'] = base_url('assets/images/services/car-transportation-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Packing and Moving Services - " . $this->comp['company3'];
        $data['description'] = "Expert packing and moving services by " . $this->comp['company3'] . ". We use high-quality packing materials to ensure safe, secure, and damage-free relocation. Get a free quote!";

        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading Unloading Services - " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ". Our trained teams handle your household goods with care. Call for a free estimate today!";

        $data['og_image'] = base_url('assets/images/services/loading-unloading-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function domestic()
    {
        $data['title'] = "Domestic Shifting Services - " . $this->comp['company3'];
        $data['description'] = "Professional domestic relocation services across India by " . $this->comp['company3'] . ". Safe packing, loading, and door-to-door delivery for home & office. Get a free quote now!";

        $data['og_image'] = base_url('assets/images/services/domestic-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "domestic";
        echo Modules::run('template/layout2', $data);
    }

    function international()
    {
        $data['title'] = "International Shifting Services - " . $this->comp['company3'];
        $data['description'] = "Planning an overseas move? " . $this->comp['company3'] . " offers reliable international shifting services from India with expert customs support and safe packing. Get a free quote!";

        $data['og_image'] = base_url('assets/images/services/international-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "international";
        echo Modules::run('template/layout2', $data);
    }

    function local()
    {
        $data['title'] = "Local Shifting Services - " . $this->comp['company3'];
        $data['description'] = "Fast and affordable local shifting services within your city by " . $this->comp['company3'] . ". Expert packers for home & office moves with same-day service. Call for a free quote!";

        $data['og_image'] = base_url('assets/images/services/local-shifting-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "local";
        echo Modules::run('template/layout2', $data);
    }

    function warehouse()
    {
         $this->load->module('home');
    $this->home->oldurl_to_newurl();
        $data['title'] = "Warehouse & Storage Services - " . $this->comp['company3'];
        $data['description'] = "Secure, affordable warehouse and storage services by " . $this->comp['company3'] . ". Short-term and long-term storage with CCTV and insured facilities. Get a free quote today!";

        $data['og_image'] = base_url('assets/images/services/warehouse-storage-services.webp');
        $data['module'] = "services";
        $data['view_file'] = "warehouse";
        echo Modules::run('template/layout2', $data);
    }
}
