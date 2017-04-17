<?php

class Admin extends CI_controller {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $this->load->helper('form');
        $this->load->view('admin/login');
    }

}

?>
