<?php

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PostModel');
    }

    public function index() {
        $data['posts'] = $this->PostModel->getPosts();
        $this->load->view('blog/index', $data);
    }

}


 ?>
