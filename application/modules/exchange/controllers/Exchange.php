<?php
if (! defined ('BASEPATH')) exit ('No direct script access allowed');

class Exchange extends Public_Restricted_Controller {

	
	
	
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','language'));
		$this->load->model('ads_model');
		
		$this->lang->load('ads');
	
// 		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
	

	}
	public function index()
	{
		
		$this->add_ads();	 

	} 
	
	public function add_ads(){
		$this->edit_ads(0);
	}
	
	public function edit_ads($id){
		
		
		
		if(empty($id) && $id != 0){
			redirect('home');
		}
		
		$data['categories'] = $this->ads_model->get_categories();
				
		// id = 0 mean new ad
		if($id === 0)
		{
			$data['error_fields'] = $this->session->flashdata('error_fields') != '' ? $this->session->flashdata('error_fields') :
			array('name' => '', 'category_id' => 0, 'user_id' =>0 );
			
			// get user id from session
 			$data['user_id'] = $this->ion_auth->user()->row()->id;
			$this->load->view('common/header');
			$this->load->view('form', $data);
			return;
		}
		
		//saving failed, load with submitted data
		if($this->session->flashdata('ads') != '')
		{
			$data['error_fields'] = $this->session->flashdata('error_fields') != '' ? $this->session->flashdata('error_fields') :
			array('name' => '',  'category_id' => 0,'user_id' =>0);
			
			$data['ads']=$this->session->flashdata('ads');
			
			$this->load->view('common/header');
			$this->load->view('form', $data);
			return;
		}
		
		//try to fetch ads from DB, if failed show error.
		if(!($ads = $this->ads_model->get_ads($id))){
			$this->lang->line('ADS_NOTFOUND_MSG');
// 			$this->output->set_message(, 'error');
			redirect('home');
		}
		
		// check ads's user_id == to session user id
		
		//hurrah we found ads in DB
		$data['ads'] = $ads;
		$data['error_fields'] = $this->session->flashdata('error_fields') != '' ? $this->session->flashdata('error_fields') :
		array('name' => '',  'category_id' => 0,'user_id' =>0);
		
		$this->load->view('common/header');
		$this->load->view('form', $data);
	}
	
	public function save(){
		
		$post = $this->input->post();
		
		$post_data = array();
		
		if(isset($post['submit']))
		{
			unset($post['submit']);
		
			foreach ($post as $key => $value)
			{
				$post_data[$key] = $value;
			}
		}
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Ads name', 'required');
		$this->form_validation->set_rules('category_id', 'Category', 'required');
		//apply validation check on user_id
		$this->form_validation->set_rules('user_id', 'user id', 'required');
		$this->form_validation->set_rules('details', 'Ad description', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
// 			$this->output->set_message((validation_errors()) ? validation_errors(): '', 'error');
		
			$this->session->set_flashdata('ads', (object) $post_data);
		
			$error_fields = array();
			$error_fields['name'] = form_error('name');
			$error_fields['category_id'] = form_error('category_id');
			$this->session->set_flashdata('error_fields', $error_fields);
		
			$this->input->post('action') == 'add' ? redirect('exchange')
			: redirect('exchange/edit_ads/' . $this->input->post('id'));
		}
		else
		{
			//check wheather form submitted user_id == to session user_id
			
// 			if($post_data['user_id'] !== $session_user_id){
				
// 				return;
// 			}
			
			if(!$saved_ads = $this->ads_model->save_ads($post_data)){
// 				$this->output->set_message($this->lang->line('CUSTOMERS_SAVE_FAILURE_MSG'));
				$this->input->post('action') == 'add' ? redirect('exchange')
				: redirect('exchange/edit_ads/' . $this->input->post('id'));
			}
			else
			{
// 			$this->output->set_message($this->lang->line('CUSTOMERS_SAVE_SUCCESS_MSG'));
				$this->input->post('action') == 'add' ? redirect('search' .  $this->input->post('id'))
				: redirect('exchange/edit_ads/' . $this->input->post('id'));
			}
		}

		
	}
}
	?>