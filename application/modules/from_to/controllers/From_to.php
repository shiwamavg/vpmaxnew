<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class From_to extends MX_Controller
{
    function index($from_city = '', $to_city = '')
    {
        $this->load->helper('text');
        
        $from_city = str_replace("_", " ", $from_city);
        $from_city = urldecode(ucwords(str_replace("-", " ", $from_city)));
        
        $to_city = str_replace("_", " ", $to_city);
        $to_city = urldecode(ucwords(str_replace("-", " ", $to_city)));

        $data = array(
            "from_city" => $from_city,
            "to_city" => $to_city,
            "title" => "Best Packers and Movers from $from_city to $to_city | " . $this->comp['company3'],
            "description" => "Hire top-rated packers and movers from $from_city to $to_city. " . $this->comp['company3'] . " offers reliable household shifting and vehicle transport services at affordable rates.",
            "keywords" => "movers and packers from $from_city to $to_city, Movers Packers $from_city to $to_city, Packers and movers from $from_city to $to_city, Moving companies $from_city to $to_city, Movers from $from_city to $to_city",
            "module" => "from_to",
            "view_file" => "index",
        );
        echo Modules::run('template/layout2', $data);
    }
}
