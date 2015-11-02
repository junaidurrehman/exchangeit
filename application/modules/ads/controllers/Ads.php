<?php
defined('BASEPATH') or die('Restricted access');
class Ads extends Public_Restricted_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ads_model');
	}
	public function view_ads($id)
	{
		$have = $this->ads_model->get_have($id);
		$want = $this->ads_model->get_want($id);
		var_dump($have);
		var_dump($want);
		//$this->load->view('ads',$data);
	}
	public function add_ads()
	{
		$this->load->view('common/header');
		$data['companies'] = $this->ads_model->get_companies();
		$data['categories'] = $this->ads_model->get_categories();
		$this->load->view('add_ads',$data);
		$this->load->view('common/footer');
	}
	public function save_ads()
	{
		$input = $this->input->post();
		$wants = $input['want'];
		foreach ($wants as $want)
		{
			$data = array();
			$data['have_id'] = 1 ;
			$data['want_category_id'] = $want['want_category_id'];
			$data['want_company_id'] = $want['want_company_id'];
			$data['want_model'] = $want['want_model'];
			$data['want_compensate_value'] = $want['want_compensate_value'];
			$data['want_will_give'] = $want['want_will_give'];
			$data['want_condition'] = $want['want_condition'];
			$this->ads_model->save_want($data);
		}
		var_dump($input['want']);
		die();
		$data = array();
		$data['user_id'] = $this->ion_auth->user()->row()->id;
		$data['category_id'] = $input['category_id'];
		$data['company_id'] = $input['company_id'];
		$data['model'] = $input['model'];
		$data['description'] = $input['description'];
		$data['value'] = $input['value'];
		$data['condition'] = $input['condition'];
		$this->ads_model->save_ads($data);
		
	}
	public function edit_ads($id){
	
	
	
		if(empty($id) && $id != 0){
			echo '334';
		}
		
	}
}