<?php

class UserModel extends CI_model {

    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $this->db
            ->from('users')
            ->where('username', $username)
            ->where('password', md5($password))
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
