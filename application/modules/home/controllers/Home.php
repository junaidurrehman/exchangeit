<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

        public function index()
        {
 
        	
        	$this->load->view('common/header');
        	$this->load->view('carousel');
        	$this->load->view('content-main');
      	    $this->load->view('footer');
        	
                
        }
}


?>
