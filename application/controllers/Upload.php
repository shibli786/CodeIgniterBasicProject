<?php
  
   class Upload extends CI_Controller {
	
      public function __construct() { 
         parent::__construct(); 

         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('upload', array('error' => ' ' )); 
      } 
		
      public function do_upload() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|pdf'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  

         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('userfile')) {
            print_r("let see");
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('upload', $error); 
         }
			
         else { 
               print_r("let see 33");
            $data = array('upload_data' => $this->upload->data()); 

            print_r($data);
            $this->load->view('success', $data); 
         } 
      } 
   } 
?>