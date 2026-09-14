<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    //wGtRkO8VoEyUjS
    private $type;
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->database();
        $this->ensure_reviews_table();
        $this->load->model('mdl_reviews');
    }

    private function ensure_reviews_table()
    {
        if ($this->db->table_exists('reviews')) {
            return;
        }

        $this->load->dbforge();
        $this->dbforge->add_field(array(
            'r_id' => array('type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE),
            'name' => array('type' => 'VARCHAR', 'constraint' => 150),
            'email' => array('type' => 'VARCHAR', 'constraint' => 190),
            'r_title' => array('type' => 'VARCHAR', 'constraint' => 190, 'null' => TRUE),
            'r_desc' => array('type' => 'TEXT'),
            'stars' => array('type' => 'INT', 'constraint' => 1, 'default' => 5),
            'status' => array('type' => 'INT', 'constraint' => 1, 'default' => 0),
            'b_id' => array('type' => 'INT', 'constraint' => 11, 'default' => 0),
            'r_img' => array('type' => 'TEXT', 'null' => TRUE),
            'views' => array('type' => 'INT', 'constraint' => 11, 'default' => 0),
            'posted_date' => array('type' => 'DATETIME'),
            'r_type' => array('type' => 'VARCHAR', 'constraint' => 100, 'null' => TRUE),
            'admin_reply' => array('type' => 'TEXT', 'null' => TRUE),
            'timestamp' => array('type' => 'DATETIME', 'null' => TRUE)
        ));
        $this->dbforge->add_key('r_id', TRUE);
        $this->dbforge->create_table('reviews', TRUE);
    }
    function index()
    {
        $this->load->view('data');
    }
    function save()
    {
        if($_GET['id']){
            $where['r_id']=$_GET['id'];
            $data['status']=$_GET['status'];
            echo $this->mdl_reviews->update_data($where,$data);
        }
        else 
            echo "invalid Request";
        
    }
    function update_data()
    {
        if (!$this->input->post('r_id')) {
            echo "invalid Request";
            return;
        }
        $where['r_id'] = $this->input->post('r_id');
        $data = array();
        if ($this->input->post('name') !== null) $data['name'] = $this->input->post('name');
        if ($this->input->post('email') !== null) $data['email'] = $this->input->post('email');
        if ($this->input->post('stars') !== null) $data['stars'] = $this->input->post('stars');
        if ($this->input->post('r_desc') !== null) $data['r_desc'] = $this->input->post('r_desc');
        if ($this->input->post('r_title') !== null) $data['r_title'] = $this->input->post('r_title');
        if ($this->input->post('r_type') !== null) $data['r_type'] = $this->input->post('r_type');
        if ($this->input->post('admin_reply') !== null) $data['admin_reply'] = $this->input->post('admin_reply');
        if ($this->input->post('status') !== null) $data['status'] = $this->input->post('status');
        if ($this->input->post('posted_date') !== null) {
            $data['posted_date'] = str_replace('T', ' ', $this->input->post('posted_date'));
        }

        if (empty($data)) {
            echo "invalid Request";
            return;
        }
        echo $this->mdl_reviews->update_data($where, $data);
    }
    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            $this->db->where('r_id', $_GET['id']);
            foreach ($this->db->get("reviews")->result() as $row)
            {
                if (!empty($row->r_img)) {
                    $image_delete_path1="./assets/uploads/reviewimg/$row->r_img";
                    $image_delete_path2="./assets/uploads/reviewimg/thumb/$row->r_img";
                    if (file_exists($image_delete_path1)) unlink($image_delete_path1);
                    if (file_exists($image_delete_path2)) unlink($image_delete_path2);
                }
            }
            $where['r_id']=$_GET['id'];
            echo $this->mdl_reviews->delete_data($where);
        }else echo "Not Deleted";
    }
    function view_data()
    {
        $where=null;
        if (isset($_GET['id']))
	         $where['r_id']=$_GET['id'];
        
        if (isset($_GET['data']))
	        $select=$_GET['data'];
	    else $select="r_id,name as unm,email, r_img as img,stars as rt,r_desc as cmt,posted_date as pd,r_title as t,r_type as ty,admin_reply as ar,timestamp as tm,status as st";
	    
        $return=$this->mdl_reviews->view_data($where,$select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
}
