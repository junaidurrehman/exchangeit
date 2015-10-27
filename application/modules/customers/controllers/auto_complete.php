<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auto_complete extends TM_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('customers_model');
		$data['get_customers']=$this->customers_model->get_customers();
		
		return $data['get_customers'];
	}
	
}