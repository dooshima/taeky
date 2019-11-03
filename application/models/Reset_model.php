<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class Reset_model extends CI_Model {
   public function __construct(){
       $this->load->database();
   }

   public function  update_reset_key($reset_key){
      $email = $this->input->post('email'); 
       $this->db->where('email', $email);
       $data =array('reset_password_key' => $reset_key);
       $this->db->update('users', $data);
       //print_r($data); exit;

       if($this->db->affected_rows() >0){
           return TRUE;
           
       }else{
           return FALSE;
       }

   }

   public function reset_password(){

   $reset_password = $this->input->post('reset_key');
   $password = md5($this->input->post('password'));
   $this->db->where('reset_password_key', $reset_password);
   $data = array('password' => $password);
   //print_r($data);exit;
   $this->db->update('users', $data);
  return($this->db->affected_rows() > 0)? TRUE : FALSE;
   }
  
}