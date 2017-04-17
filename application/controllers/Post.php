<?php

class Post extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function new() {
        $this->load->view('post/new');
    }


}

 ?>
