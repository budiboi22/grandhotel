<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Room extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $data['title'] = 'Room - Grand Malioboro Hotel';
        
        $this->load->view('include/view_header',$data);
        $this->load->view('view_room');
        $this->load->view('include/view_footer');
    }

}
