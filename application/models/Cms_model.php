<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class Cms_model extends CI_Model {
      private $another;

// insert data to table
   public function __construct(){
      // $this->load->database();
       $this->another =  $this->load->database("another",TRUE);

   }

   public function File_upload($data){
      return $this->another->insert('file_upload', $data);
      
    }

   public function get_posts($body = FALSE){
      if($body == FALSE){
         $query = $this->another->get('file_upload');
         return $query->result_array(); 
      }

      $query =  $this->another->get_where('file_upload',array('body' =>$body));
      return $query->row_array(); 

      //it select all data from database
      // $this->db->select("*");
      // $query=$this->db->get("file_upload");

      // return $result= $query->result();


   }      

}