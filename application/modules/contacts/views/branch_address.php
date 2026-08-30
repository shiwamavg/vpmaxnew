<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed'); ?>
<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
  'bc_h1' => 'Our Branches',
  'bc_desc' => "Branch Address",
  'breadcrumbs' => [
    ['name' => 'Branch Address']
  ]
]); ?>

<?php $this->load->view('branch_address_widget'); ?>