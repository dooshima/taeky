<?php
// CI_Controller is the major controller 
   class Reset_password extends CI_Controller{
    public function  __construct(){
        parent::__construct();
       
     }



     public function email_reset_password_validation(){
      $this->load->library('form_validation');

      $this->load->library('email');

    $this->form_validation->set_rules('email', 'Email','trim|required|max_length[100]|min_length[5]|xss_clean|valid_email');
    if($this->form_validation->run()){
       $reset_key = md5(uniqid());
       $this->load->model('reset_model');
       if($this->reset_model->update_reset_key($reset_key)){
       $this->load->library('email');
        $config = array(
          'useragent' => 'Codeigniter',
          'mailpath' => '/usr/bin/sendmail',
          'protocol' =>'smtp',
          'smtp_host' => 'ssl://fpghub.com',
          'smtp_port' => 465,
          'smtp_user' =>'testemail@fpghub.com',
          'smtp_pass' =>'-)S)4-r(odd!',
          'mailtype'  => 'html', 
          'charset' => 'utf-8',
          'newline' => '\r\n',
          'wordwrap' => 'TRUE',
  );

      // $this->load->Email->index();
        $this->email->initialize($config);

        $this->email->from('testemail@fpghub.com');
        $this->email->to($this->input->post('email'));

        $this->email->subject('Email Test');
        $message = "<p> you or someone request to reset your password";
        $message .= "<a href='" .base_url()."reset_password/reset_password/".$reset_key ."'> Click here to reset your password</a>";
        $this->email->message($message);      

        if($this->email->send()){
          echo "Kindly check your email " . $this->input->post('email'). " to reset your password";
       }
      }else{
        show_error($this->email->print_debugger(),true);
    }

    }else{
        $this->load->view('sign/reset');

  
    
   }
 }




 public function reset_password(){
  $this->load->helper('form');
 $this->load->view('templates/header');
 $this->load->view('sign/change_pass');
 $this->load->view('templates/footer');


}
 public function reset_password_validation(){
   $this->load->library('form_validation');
   $this->form_validation->set_rules('password', 'Password','trim|required|max_length[50]|min_length[4]|xss_clean');
     $this->form_validation->set_rules('password', 'confirm_password','trim|required|max_length[50]|min_length[2]|xss_clean|matches[password]');

     if($this->form_validation->run()){
      $this->load->model('reset_model');
      if($this->reset_model->reset_password()){
         echo "Your Password has been";
       }else{
        echo "Some error";

       }

     }else{
      $this->load->view('sign/change_pass');

    }
 }
}     