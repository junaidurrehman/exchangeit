<?php
if (! defined ('BASEPATH')) exit ('No direct script access allowed');


class Search extends Public_Restricted_Controller {

function __construct()
{
	parent::__construct();
	$this->load->database();
	$this->load->helper(array('url','language'));
 	$this->load->model('search_model');

// 	$this->lang->load('ads');

	// 		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));


}


public function index()
{
	
$id=5;


   $user_ad = $this->search_model->get_ad($id);
   $this->search_model->search_ads($user_ad);
	$this->load->view('show');

}
}