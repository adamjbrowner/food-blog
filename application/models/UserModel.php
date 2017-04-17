<?php

class UserModel extends CI_controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password) {
        $this->db
            ->from('users')
            ->where('username', $username)
            ->where('password', $password)
            ->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}

 ?>
