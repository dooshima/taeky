<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class Post_model extends CI_Model {
// insert data to table
   public function __construct(){
       $this->load->database();
   }

   public function get_posts($slug = FALSE){
      if($slug == FALSE){
          $query =$this->db->get('posts');
          return $query->result_array();
      }
      $query =$this->db->get_where('posts', array('slug' => $slug));
      return $query->row_array();

    }
}