<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index() {
        $data['title'] = 'Administrator - Grand Malioboro Hotel';
        $this->load->view('admin/include/view_header', $data);
        $this->load->view('admin/view_login');
        $this->load->view('admin/include/view_footer');
    }

    function check_login() {
        //$this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $data['title'] = 'Login Gagal - Grand Malioboro Hotel';
            $this->load->view('admin/include/view_header', $data);
            $this->load->view('admin/view_login');
            $this->load->view('admin/include/view_footer');
        } else {
            //Go to private area
            redirect('admin/home', 'refresh');
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $this->load->model('model_admin');
        $username = $this->input->post('username');
        //query the database
        $result = $this->model_admin->check_admin($username, $password);
        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    //'id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', '<div class="alert alert-error" role="alert">Invalid username or password</div>');
            return false;
        }
    }

}

?>