<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class Register_model extends CI_Model {
// insert data to table

public function __construct(){
   $this->load->database();

}

    public function create_member(){
    $enc_password =  md5($this->input->post('password'));
    $data = array(
        'first_name'=> $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email'     => $this->input->post('email'),
        'username'  => $this->input->post('username'),
        'password'  => $enc_password 
      );

        $insert = $this->db->insert('users',$data);
      return $insert; 

      
      
    }

    public function login_user($username, $password){
      $enc_password = md5($password);

      $this->db->where('username', $username);
      $this->db->where('password', $enc_password);
      
      $result = $this->db->get('users');

      if($result->num_rows() == 1){
        return $result->row(0)->id;
      }else{
        return false;
      }

    }
    
    public function reset_user($email){
      $this->db->where('email', $email);

     $result = $this->db->get_where('users', array('email' => $email))->result_array();
     $myresult = $result[0]['username'];
     return $myresult;

    
     // print_r($result);exit;
            //if($result->num_rows() == 1){
              //$myresult = $result[0]['username'];
              //print_r($myresult); exit;
             //return $myresult;

          //     return $result->row(0)->username;
          //  }else{
          //    return false;
          //  }

    }


}