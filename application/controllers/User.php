<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class User extends CI_Controller {
    public function  __construct(){
       parent::__construct();
       $this->load->library('form_validation');
       $this->load->helper(array('form','string'));
       $this->load->library('session');


    }

public function index(){
  $this->load->view('templates/header');
   $this->load->view('sign/register');
   $this->load->view('templates/footer');
 }
 
 public function log(){
   $this->load->view('templates/header');
    $this->load->view('sign/login');
    $this->load->view('templates/footer');
  }


  public function reset(){
    $this->load->view('templates/header');
     $this->load->view('sign/reset');
     $this->load->view('templates/footer');
   }

   public function change(){
    $this->load->view('templates/header');
     $this->load->view('sign/change_pass');
     $this->load->view('templates/footer');
   }


      
   public function register(){
    $this->load->library('form_validation');

     $this->form_validation->set_rules('first_name', 'First Name','trim|required|max_length[50]|min_length[2]|xss_clean');
     $this->form_validation->set_rules('last_name', 'Last Name','trim|required|max_length[50]|min_length[2]|xss_clean');
     $this->form_validation->set_rules('email', 'Email','trim|required|max_length[100]|min_length[5]|xss_clean|valid_email');
     $this->form_validation->set_rules('username', 'Username','trim|required|max_length[50]|min_length[4]|xss_clean');
     $this->form_validation->set_rules('password', 'Password','trim|required|max_length[50]|min_length[4]|xss_clean');
     $this->form_validation->set_rules('password2', 'Confrim Password','trim|required|max_length[50]|min_length[2]|xss_clean|matches[password]');

     if($this->form_validation->run() == FALSE){
      $data['users'] = $this->Register_model->create_member();
       $data['main_content'] = 'sign/register';
       
       $this->load->view('templates/header');
       $this->load->view('sign/register', $data);
       $this->load->view('templates/footer');
     }else{
       // for redirection
        if($this->Register_model->create_member()!==FALSE){
 // set flash data by the session library
 $this->session->set_flashdata('registered', 'You are have registered');
 redirect('log');      
 }   
      
    }
   }
   
  //  this is for login into the database
   public function login(){
    $this->form_validation->set_rules('username', 'Username','trim|required|max_length[50]|min_length[4]|xss_clean');

     $this->form_validation->set_rules('password', 'Password','trim|required|max_length[50]|min_length[4]|xss_clean');
    

     if($this->form_validation->run() == FALSE){
       
     }else{
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user_id = $this->Register_model->login_user($username, $password);

      if($user_id !=false){
        $user_data= array(
          'user_id' => '$user_id',
          'username' => '$username',
          'logged_in' => true
        );

        $this->session->set_userdata($user_data);

        $this->session->set_flashdata('login_success','the login was successful ');
        redirect('/');
      }else{
        $this->session->set_flashdata('login_failed','sorry, the login info that you entered is invalid');
        redirect('log');
      }
  }
}

    
//use for generating password

   public function login_reset($length = 10){
     
    $this->load->helper('string');
    $this->load->library('email');


    $this->form_validation->set_rules('email', 'Email','trim|required|max_length[100]|min_length[5]|xss_clean|valid_email');
    if($this->form_validation->run() == FALSE){
      echo "wrong email";

    }else{
   $email = $this->input->post('email'); 
    $userid = $this->Register_model->reset_user($email);
    if($userid !=false){
      $user_data= array(
        'email' => $email,
        'logged_in' => true
      );
      $this->session->set_userdata($user_data);
  
  $myresult =$this->Register_model->reset_user($email);
  $tempPass = $myresult;
  //print_r($tempPass);

  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
   $activation_code = $tempPass.$chars;
  $Newpassword = substr( str_shuffle($activation_code), 0, $length );
  //return $Newpassword;
  echo($Newpassword);

  }else{
      redirect('reset');
      echo "You dont have an account";

   }
  }
}

}
