<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class Post extends CI_Controller {
    
    // public function __construct(){
    //     parent::__construct();
    //     $this->load->library('form_validation');
    //     //$this->load->library('encrypt');
    //     $this->load->model('register_model');

    // }

    public function index(){
     $data['posts'] = $this->post_model->get_posts();
     //print_r($data['post'] = $this->Post_model->get_posts());

     $this->load->view('templates/header');
      $this->load->view('post/index', $data);
      $this->load->view('templates/footer');
    }
}