<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
        $data['title'] = 'Booking - Grand Malioboro Hotel';
        
        $this->load->view('include/view_header',$data);
        $this->load->view('view_booking');
        $this->load->view('include/view_footer');
    }

}
