<?php
// CI_Controller is the major controller 
   class Pages extends CI_Controller{
     

      public function view($page='home'){
         //if a view of the page does not exists
         if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
         } 
      // ucfirst() converts your first character of a string to uppercase   
      $data['title'] = ucfirst($page);

      // to load our page
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
         }
   }