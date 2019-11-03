<?php
// CI_Controller is the major controller 
   class Email extends CI_Controller{
    public function  __construct(){
        parent::__construct();
       
     }

     public function index(){
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

      
     }
   }