<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $username = $this->input->post('username');
        echo $username;
    }


}
 ?>
