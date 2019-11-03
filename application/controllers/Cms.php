<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// CI_Controller is the major controller 
   class Cms extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('form', 'directory','file','write','date');
        
        $this->load->model('Cms_model');
        $this->load->database();
        
    }

    public function index(){
     $this->load->view('templates/header');
      $this->load->view('cms/index');
      $this->load->view('templates/footer');
    }

    public function view(){
      $this->load->view('templates/header');
       $this->load->view('cms/home');
       $this->load->view('templates/footer');
     }

public function file_upload(){
// to upload file to the folder, and writes to a database
$title = $this->input->post('title');
     $config['upload_path'] = $title.date("Y-m-d h:i A");
      $config['allowed_types'] = '*';
      $filetime = $config['upload_path'];
      $filetmp = $title ['tmp_name'];
      
      // for image to save in a folder
      if(!is_dir($filetime && empty($filetime))){
        mkdir($filetime, 0777, true);
        move_uploaded_file($filetmp, "$filetime");
    
    } 
    
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      
      $this->upload->do_upload('file_name');
      $file_name = $this->upload->data();
      $data = array('file_name' => $file_name['file_name'],
      'title'     => $this->input->post('title'),
      'body'  => $this->input->post('body'));
      

      $this->Cms_model->File_upload($data);

      redirect('cms/posts');

      
}

   public function posts(){
     $data['file_upload'] = $this->Cms_model->get_posts(); // calling Post model method getPosts()
      //print_r($data['file_upload']);
      $this->load->view('templates/header');
      $this->load->view('cms/index',$data);
      $this->load->view('templates/footer');
   }
   }