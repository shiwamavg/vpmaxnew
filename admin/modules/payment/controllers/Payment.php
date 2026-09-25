<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->view('data');
    }

    public function view_data()
    {
        try {
            $database = new PDO('sqlite:' . FCPATH . 'application' . DIRECTORY_SEPARATOR . 'database.sqlite');
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $payments = $database->query('SELECT id, order_id, payment_for, reference_number, name, email, phone, amount, remarks, status, created_at, updated_at, paid_at FROM cashfree_payments ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            $payments = array();
        }

        return $this->output->set_content_type('application/json')->set_output(json_encode($payments));
    }
}
