<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tipe_kamar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
           $data['title'] = 'Admininistrator - Grand Malioboro Hotel';

            $this->grocery_crud->set_table('tipekamar');
            $output = $this->grocery_crud->render();
            $data['css_files'] = $output->css_files;
            $data['js_files'] = $output->js_files;
            
            //$this->_example_output($output);
            //$data['output'] = $output;\
            //$parent_data =('data' => $data, 'output'=>$output);
            
            $this->load->view('admin/include/view_header', $data);
            $this->load->view('admin/include/view_menubar');
            $this->load->view('admin/view_tipe_kamar', $output);
            $this->load->view('admin/include/view_footer');
        } else {
//If no session, redirect to login page
            redirect('admin/login', 'refresh');
        }
    }

}
