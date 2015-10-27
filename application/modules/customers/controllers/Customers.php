<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends TM_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('customers_model');
		

		
	}

	public function index()
	{
		$this->customers();
	}
	
	public function customers()
	{
		$this->load->library('table');
		$this->load->library('pagination');
		
		
		$params['total_rows'] = $this->customers_model->count_customers();
		
		$params['base_url'] = base_url().'customers/';
		
		$this->pagination->initialize($params);
		
		
		if ($this->uri->segment(3) == '')
		{
			$offset = 0;
			$data['offset'] = 0;
		}
		else
		{
			$offset = $this->uri->segment(3);
			$data['offset'] = $this->uri->segment(3);
		}
		
		$data['customers'] = $this->customers_model->get_customers(true, $this->config->item('rows_per_page'), $offset);
				
		$this->load->view('customers', $data);
	}
	
	public function delete_customer($id)
	{
		if(empty($id))
			redirect('customers');
				
		$deleted = $this->customers_model->delete_customer($id);
		
		if($deleted)
		{
			$this->output->set_message($this->lang->line('CUSTOMERS_DELETE_SUCCESS_MSG'));
		}
		elseif(!$deleted)
		{
			$this->output->set_message($this->lang->line('CUSTOMERS_DELETE_FAILURE_MSG'), 'info');
		}
		else
		{
			$this->output->set_message($this->lang->line('CUSTOMERS_ALREADY_DELETED_NOTFOUND_MSG'), 'error');
		}
		
		redirect('customers');
	}
	
	public function add_customer()
	{
		$this->edit_customer(0);
	}
	
	public function edit_customer($id)
	{
		if(empty($id) && $id != 0)
			redirect('customers');
				
		// id = 0 mean new cats
		if($id === 0)
		{
			$data['error_fields'] = $this->session->flashdata('error_fields') != '' ? $this->session->flashdata('error_fields') :
			array('name' => '');
		
			$this->load->view('edit_customer', $data);
			return;
		}
		
		if($this->session->flashdata('customer') != '')
		{
			$data['error_fields'] = $this->session->flashdata('error_fields') != '' ? $this->session->flashdata('error_fields') :
			array('name' => '');
			$data['driver']=$this->session->flashdata('driver');
			$this->load->view('edit_customer', $data);
			return;
		}
		
		if(!($customer = $this->customers_model->get_customer($id))){
			$this->output->set_message($this->lang->line('CATEGORY_NOTFOUND_MSG'), 'error');
			redirect('customers');
		}
		
		$data['customer'] = $customer;
		$data['error_fields'] = $this->session->flashdata('error_fields') != '' ? $this->session->flashdata('error_fields') :
		array('name' => '');
		
		$this->load->view('edit_customer', $data);

	}

	public function save_customer()
	{
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
	
		$this->form_validation->set_rules('name', 'Customer Name', 'required');
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->output->set_message((validation_errors()) ? validation_errors(): '', 'error');
	
			$this->session->set_flashdata('customer', (object) $post_data);
	
			$error_fields = array();
			$error_fields['name'] = form_error('name');
			$this->session->set_flashdata('error_fields', $error_fields);
	
			$this->input->post('action') == 'add' ? redirect('customers/add_customer')
			: redirect('customers/edit_customer/' . $this->input->post('id'));
		}
		else
		{
			if(!$saved_customer = $this->customers_model->save_customer($post_data)){
				$this->output->set_message($this->lang->line('CUSTOMERS_SAVE_FAILURE_MSG'));
				$this->input->post('action') == 'add' ? redirect('customers/')
				: redirect('customers/edit_customer/' . $this->input->post('id'));
			}
			else
			{
				$this->output->set_message($this->lang->line('CUSTOMERS_SAVE_SUCCESS_MSG'));
				$this->input->post('action') == 'add' ? redirect('customers/edit_customer/' . $saved_customer)
				: redirect('customers/edit_customer/' . $this->input->post('id'));
			}
		}
	}
}
