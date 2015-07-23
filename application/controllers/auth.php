<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    public $logged;

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function new_data() {
        if (!isset($_SESSION['username'])) {
            redirect('auth/login');
        } else {
            $this->load->view('content/admin/enter_new_data');
        }
    }

    public function login() {
         if (isset($_SESSION['username'])) {
             redirect('auth/new_data');
         }
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

        if ($this->form_validation->run() !== false) {
            // validation passed. get from DB
            $data['un'] = $this->input->post("username");
            $data['pw'] = $this->input->post("password");

            $this->load->model("model_requests");
            $result = $this->model_requests->check_user($data);

            if ($result !== false) {
                //person has account
                $_SESSION['username'] = $this->input->post('username');
                redirect('auth/new_data');
            }
        } 

        $data['title'] = "Login";
        $data['meta_desc'] = "GenoScientific Molecular Diagnostics Laboratory Login";
        $data['meta_keywords'] = $data['title'] . $data['meta_desc'];
        $this->load->view('templates/html_header', $data);
        $this->load->view('templates/header');
        $this->load->view('templates/hidden_sidebar');
        $this->load->view('content/admin/login');
        $this->load->view('templates/footer');
    }

    public function logout() {
        session_destroy();
        redirect('/');
    }

}

/* End of file auth.php */
    /* Location: ./application/controllers/auth.php */
    