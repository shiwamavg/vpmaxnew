<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');



$this->load->view('service_widget');

// Load the About Us widget
$this->load->view('about_widget');
$this->load->view('template/important_link');
$this->load->view('reviews/review_widget');
// Load the Credentials widget
$this->load->view('credentials');
$this->load->view('certificate');
$this->load->view('working_process');
$this->load->view('chart_table');
// $this->load->view('from_to');
$this->load->view('packers_movers/state_widget.php');
// Load the FAQs widget
$this->load->view('faqs_widget');
?>