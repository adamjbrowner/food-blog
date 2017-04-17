<?php

class Admin extends CI_controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper('form');
    }

    public function index() {
        if ($this->session->logged_in) {
            $data['username'] = $this->session->logged_in['username'];
            $this->load->view('admin/index', $data);
        } else {
            $this->load->view('admin/login');
        }
    }

    public function checkDatabase() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->UserModel->login($username, $password);

        if ($result) {
            $sessionArray = array();
            foreach ($result as $row) {
                $sessionArray['id'] = $row->id;
                $sessionArray['username'] = $row->username;
                $this->session->logged_in = $sessionArray;
            }
            redirect('admin/index');
        } else {
            $data['error'] = "Your username or password do not match";
            $this->load->view('admin/login', $data);
        }
    }
}

?>
