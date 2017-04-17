<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->UserModel->login($username, $password);

        if ($result) {
            $sessionArray = array();
            foreach ($result as $row) {
                $sessionArray['id'] = $row->id;
                $sessionArray['username'] = $row->username;
                $this->session->set_userdata('logged_in', $sessionArray);
            }
            echo "signed in";
        } else {
            echo "Not signed in";
        }
    }


}
 ?>
