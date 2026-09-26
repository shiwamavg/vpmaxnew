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
        $data['description'] = "View the official certificates and accreditations of " . $this->comp['company3'] . ", including ISO, IBA, GST, and other trust verifications that make us a reliable packers and movers company.";
        $data['module'] = "about";
        $data['view_file'] = "certificates";
        echo Modules::run('template/layout2', $data);
    }

    function payment()
    {
        $this->config->load('cashfree');
        $data['title'] = "Online Safe Payment - " . $this->comp['company3'];
        $data['description'] = "Secure and convenient Cashfree payment modes for services by " . $this->comp['company3'] . ".";
        $data['cashfree_mode'] = $this->config->item('cashfree_mode');
        $data['module'] = "about";
        $data['view_file'] = "payment";
        echo Modules::run('template/layout2', $data);
    }

    function create_cashfree_order()
    {
        $this->config->load('cashfree');

        if ($this->input->method(TRUE) !== 'POST') {
            return $this->json_response(array('success' => FALSE, 'message' => 'Invalid request method.'), 405);
        }

        $payment_for = trim($this->input->post('paymentFor', TRUE));
        $reference_number = trim($this->input->post('reference_number', TRUE));
        $name = trim($this->input->post('name', TRUE));
        $email = trim($this->input->post('email', TRUE));
        $phone = preg_replace('/\D+/', '', $this->input->post('phone', TRUE));
        $amount = trim($this->input->post('amount', TRUE));
        $remarks = trim($this->input->post('remarks', TRUE));
        $errors = array();

        if (!in_array($payment_for, array('GR Number', 'Bill Number', 'Quotation Number'), TRUE)) $errors[] = 'Please select a valid payment reference type.';
        if ($reference_number === '' || strlen($reference_number) > 50) $errors[] = 'Please enter a valid reference number.';
        if ($name === '' || strlen($name) > 100) $errors[] = 'Please enter your name.';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
        if (!preg_match('/^[0-9]{10}$/', $phone)) $errors[] = 'Please enter a valid 10-digit phone number.';
        if (!is_numeric($amount) || (float) $amount <= 0) $errors[] = 'Please enter a valid payment amount.';
        if (strlen($remarks) > 500) $errors[] = 'Remarks cannot exceed 500 characters.';

        $client_id = $this->config->item('cashfree_client_id');
        $client_secret = $this->config->item('cashfree_client_secret');
        if (!$client_id || !$client_secret) $errors[] = 'Cashfree credentials are not configured on the server.';
        if ($errors) return $this->json_response(array('success' => FALSE, 'message' => implode(' ', $errors)), 422);

        $order_id = 'vpmax_' . date('YmdHis') . '_' . bin2hex(random_bytes(4));
        $payload = array(
            'order_id' => $order_id,
            'order_amount' => round((float) $amount, 2),
            'order_currency' => 'INR',
            'customer_details' => array(
                'customer_id' => 'customer_' . substr(hash('sha256', strtolower($email) . $phone), 0, 20),
                'customer_name' => $name,
                'customer_email' => $email,
                'customer_phone' => $phone
            ),
            'order_meta' => array('return_url' => site_url('cashfree/payment-status') . '?order_id=' . rawurlencode($order_id)),
            'order_note' => $remarks ?: ($payment_for . ': ' . $reference_number),
            'order_tags' => array('payment_for' => $payment_for, 'reference_number' => $reference_number)
        );

        $response = $this->cashfree_request('POST', '/orders', $payload);
        if (!$response['success']) return $this->json_response(array('success' => FALSE, 'message' => $response['message']), $response['status']);

        if (!$this->save_cashfree_payment(array(
            'order_id' => $order_id,
            'payment_for' => $payment_for,
            'reference_number' => $reference_number,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'amount' => round((float) $amount, 2),
            'remarks' => $remarks,
            'status' => 'ACTIVE'
        ))) {
            return $this->json_response(array('success' => FALSE, 'message' => 'Payment order was created, but could not be saved locally. Please contact support.'), 500);
        }

        return $this->json_response(array('success' => TRUE, 'order_id' => $order_id, 'payment_session_id' => $response['data']['payment_session_id']));
    }

    function cashfree_payment_status()
    {
        $this->config->load('cashfree');
        $order_id = trim($this->input->get('order_id', TRUE));
        $payment = array('status' => 'UNKNOWN', 'order_id' => $order_id, 'message' => 'Payment status could not be verified.');
        if ($order_id !== '') {
            $response = $this->cashfree_request('GET', '/orders/' . rawurlencode($order_id));
            if ($response['success']) {
                $payment['status'] = strtoupper($response['data']['order_status']);
                $payment['message'] = $payment['status'] === 'PAID' ? 'Payment received successfully.' : 'Payment has not been completed.';
                $this->save_or_update_cashfree_payment($order_id, $payment['status'], $response['data']);
            }
        }
        $data['title'] = "Payment Status - " . $this->comp['company3'];
        $data['description'] = "Check the status of your online payment to " . $this->comp['company3'] . " via Cashfree. View your payment confirmation and transaction details for your relocation booking.";
        $data['payment'] = $payment;
        $data['module'] = "about";
        $data['view_file'] = "payment_status";
        echo Modules::run('template/layout2', $data);
    }

    private function save_cashfree_payment($payment)
    {
        $this->load->database();
        $this->ensure_cashfree_payments_table();
        return $this->db->insert('cashfree_payments', $payment);
    }

    private function update_cashfree_payment_status($order_id, $status)
    {
        $this->load->database();
        $this->ensure_cashfree_payments_table();
        $values = array('status' => $status, 'updated_at' => date('Y-m-d H:i:s'));
        if ($status === 'PAID') $values['paid_at'] = date('Y-m-d H:i:s');
        $this->db->where('order_id', $order_id)->update('cashfree_payments', $values);
    }

    private function save_or_update_cashfree_payment($order_id, $status, $cashfree_order)
    {
        $this->load->database();
        $this->ensure_cashfree_payments_table();
        $existing = $this->db->where('order_id', $order_id)->count_all_results('cashfree_payments');
        if ($existing) {
            $this->update_cashfree_payment_status($order_id, $status);
            return;
        }

        $customer = isset($cashfree_order['customer_details']) ? $cashfree_order['customer_details'] : array();
        $tags = isset($cashfree_order['order_tags']) ? $cashfree_order['order_tags'] : array();
        $this->db->insert('cashfree_payments', array(
            'order_id' => $order_id,
            'payment_for' => isset($tags['payment_for']) ? $tags['payment_for'] : 'Unknown',
            'reference_number' => isset($tags['reference_number']) ? $tags['reference_number'] : 'Unknown',
            'name' => isset($customer['customer_name']) ? $customer['customer_name'] : 'Unknown',
            'email' => isset($customer['customer_email']) ? $customer['customer_email'] : '',
            'phone' => isset($customer['customer_phone']) ? $customer['customer_phone'] : '',
            'amount' => isset($cashfree_order['order_amount']) ? $cashfree_order['order_amount'] : 0,
            'remarks' => isset($cashfree_order['order_note']) ? $cashfree_order['order_note'] : '',
            'status' => $status,
            'paid_at' => $status === 'PAID' ? date('Y-m-d H:i:s') : NULL
        ));
    }

    private function ensure_cashfree_payments_table()
    {
        static $ready = FALSE;
        if ($ready) return;

        $this->db->query("CREATE TABLE IF NOT EXISTS cashfree_payments (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            order_id VARCHAR(80) NOT NULL UNIQUE,
            payment_for VARCHAR(30) NOT NULL,
            reference_number VARCHAR(50) NOT NULL,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(150) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            amount DECIMAL(12,2) NOT NULL,
            remarks TEXT,
            status VARCHAR(30) NOT NULL DEFAULT 'ACTIVE',
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME NULL,
            paid_at DATETIME NULL
        )");
        $ready = TRUE;
    }

    private function cashfree_request($method, $path, $payload = NULL)
    {
        $url = rtrim($this->config->item('cashfree_api_url'), '/') . $path;
        $headers = array(
            'Content-Type: application/json',
            'x-api-version: ' . $this->config->item('cashfree_api_version'),
            'x-client-id: ' . $this->config->item('cashfree_client_id'),
            'x-client-secret: ' . $this->config->item('cashfree_client_secret'),
            'x-request-id: ' . bin2hex(random_bytes(16))
        );
        if ($method === 'POST') $headers[] = 'x-idempotency-key: ' . bin2hex(random_bytes(16));

        $curl = curl_init($url);
        curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => TRUE, CURLOPT_CUSTOMREQUEST => $method, CURLOPT_HTTPHEADER => $headers, CURLOPT_TIMEOUT => 30, CURLOPT_SSL_VERIFYPEER => TRUE));
        if ($payload !== NULL) curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));
        $body = curl_exec($curl);
        $curl_error = curl_error($curl);
        $status = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        $data = json_decode($body, TRUE);
        if ($curl_error || $status < 200 || $status >= 300 || !is_array($data)) {
            $message = $curl_error ?: (isset($data['message']) ? $data['message'] : 'Cashfree request failed.');
            return array('success' => FALSE, 'status' => $status >= 400 ? $status : 502, 'message' => $message);
        }
        return array('success' => TRUE, 'status' => $status, 'data' => $data);
    }

    private function json_response($data, $status = 200)
    {
        return $this->output->set_status_header($status)->set_content_type('application/json')->set_output(json_encode($data));
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
        $data['description'] = "Disclaimer notice for " . $this->comp['company3'] . ". Read our usage terms, liability limitations, and conditions for using our packers and movers website and services.";
        $data['module'] = "about";
        $data['view_file'] = "disclaimer";
        echo Modules::run('template/layout2', $data);
    }

    function refund()
    {
        $data['title'] = "Refund Policy | " . $this->comp['company3'];
        $data['description'] = "Read the refund and cancellation policy of " . $this->comp['company3'] . ". Understand the terms for refund eligibility, processing timelines, and cancellation procedures for shifting services.";
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