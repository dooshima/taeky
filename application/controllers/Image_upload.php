<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class Image_upload extends CI_Controller {
    public function  __construct(){
       parent::__construct();
       $this->load->library('form_validation');
       $this->load->helper('form');
       $this->load->library('session');


    }

}

?>