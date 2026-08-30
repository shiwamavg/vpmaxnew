<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    private $config;
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ns11.groveus.org',
            'smtp_port' => 587,
            'smtp_user' => 'info@vpmaxpackersandmovers.com',
            'smtp_pass' => '2tW6:Rr1v;rG8@',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
    }


    public function bookings()
    {
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");


        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $service = $this->input->post('service');
        $qf_time = $this->input->post('qf_time');
        $mfrom = $this->input->post('mfcity');
        $mfstate = $this->input->post('mfstate');
        $mfaddress = $this->input->post('mf_address');
        $mto = $this->input->post('mtcity');
        $mtstate = $this->input->post('mtstate');
        $mtaddress = $this->input->post('mt_address');
        $msg = $this->input->post('message');

        // print_r($mfrom);
        // print_r($_POST);die();

        // Insert booking data into the database
        $this->db->insert('bookings', array(
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "service" => $service,
            "qf_time" => $qf_time,
            "mfcity" => $mfrom,
            "mtcity" => $mto,
            "msg" => $msg
        ));
        $data = array(
            "name" => $name,
            "lead_type" => 0,
            "phone" => $phone,
            "service" => $service,
            "mfcity" => $mfrom,
            "mfstate" => $mfstate,
            "mf_address" => $mfaddress,
            "mtcity" => $mto,
            "mtstate" => $mtstate,
            "mt_address" => $mtaddress,
            "enquiry_date" => date('d-m-Y'),
            "enquiry_time" => date('h:i:s A'),
        );
        //API call
        $api_url = "https://app.vpmaxpackersandmovers.com/contact/insert_enquiry";
        $this->call_app_api($api_url, $data);
        $this->db->insert('bookings', array(
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "mfcity" => $mfrom,
            "mfstate" => $mfstate,
            "mf_address" => $mfaddress,
            "mtcity" => $mto,
            "mtstate" => $mtstate,
            "mt_address" => $mtaddress,
            "msg" => $msg
        ));
        // Admin notification email
        $msgd = "Services Needed";
        $adminMessage = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>$name</b><br><br>From: <b>$mfrom</b><br><br>To: <b>$mto</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b><br><br>Client Msg: <b>$msg</b></div>";

        $this->email->to("vpmaxpackersandmovers@gmail.com");
        $this->email->from("info@vpmaxpackersandmovers.com");
        $this->email->subject('New Booking Enquiry Received VP Max Packers and Movers');
        $this->email->message($adminMessage);
        $this->email->send();



        return true;
    }

    function call_app_api($url, $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);
        return $response;
    }
    public function contact()
    {
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $qry = $this->input->post('message');
        $this->db->insert('contacts', array("name" => $name, "phone" => $phone, "message" => $qry, "email" => $email));
        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$qry</q></b><br><br>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b></div>";
        $this->email->to("vpmaxpackersandmovers@gmail.com");
        $this->email->from("info@vpmaxpackersandmovers.com");

        $this->email->subject('New Contacts Enquiry Received ');
        $this->email->message($message);
        $this->email->send();
        return true;
    }


}
