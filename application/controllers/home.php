<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $data['title'] = 'Grand Malioboro Hotel';
        $this->load->view('include/view_header',$data);
        $this->load->view('view_home');
        $this->load->view('include/view_footer');
    }

}
