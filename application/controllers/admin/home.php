<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

    public function index() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['title'] = 'Admininistrator - Grand Malioboro Hotel';

            $this->load->view('admin/include/view_header', $data);
            $this->load->view('admin/include/view_menubar', $data);
            $this->load->view('admin/view_home');
            $this->load->view('admin/include/view_footer');
        } else {
//If no session, redirect to login page
            redirect('admin/login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        //session_destroy();
        redirect('admin/login', 'refresh');
    }
}
