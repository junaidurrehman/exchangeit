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
		$this->load->view('common/header');
		$have = $this->ads_model->get_have($id);
		$wants = $this->ads_model->get_want($id);
		$recommends = array();
		foreach ($wants as $want)
		{
			$recommends = $this->ads_model->get_recommendations($have->category_id ,$want->want_category_id,$have->user_id,$have->id,$have->user_name);
			
			foreach ($recommends as $recommend)
			{
				$points  = 10 ;
				/* peoples have matching with my wants */
				if($recommend->company_id == $want->want_company_id)
				{
					$points +=	20 ;
					if(similar_text($recommend->model,$want->want_model,$percent)  >  90)
					{
						$points +=	10 ;
					}
					else if(similar_text($recommend->model,$want->want_model,$percent)  >  70)
					{
						$points +=	5 ;
					}
				}
				/* peoples want matching with my have */
				if($recommend->want_company_id == $have->company_id)
				{
					$points +=	20 ;
					if(similar_text($have->model,$recommend->want_model,$percent)  >  90)
					{
						$points +=	10 ;
					}
					else if(similar_text($have->model,$recommend->want_model,$percent)  >  70)
					{
						$points +=	5 ;
					}
				}
				
				if($recommend->condition>=$want->want_condition)
				{
					$points += 20;
				}
				else if ($recommend->condition == ($want->want_condition-1))
				{
					$points += 10;
				}
				
				if($have->condition>=$recommend->want_condition)
				{
					$points += 20;
				}
				else if ($have->condition == ($recommend->want_condition-1))
				{
					$points += 10;
				}
				
				if($want->want_will_give == 'yes')
				{
					$total = abs($recommend->value+$have->value+$want->want_compensate_value);
					$final_price = abs($recommend->value - ($want->want_compensate_value + $have->value ));
				}
				if($want->want_will_give != 'yes')
				{
					$total = abs($recommend->value+$have->value-$want->want_compensate_value);
					$final_price = abs($recommend->value -( $have->value -$want->want_compensate_value)) ;
				}
				$percentage_price = $final_price/$total ;
				$points += (20 * (1-$percentage_price));	
				
				if($recommend->want_will_give == 'yes')
				{
					$total = abs($have->value+$recommend->want_compensate_value+$recommend->value) ;
					$final_price = abs($have->value - ($recommend->want_compensate_value + $recommend->value ));
				}
				if($recommend->want_will_give != 'yes')
				{
					$total = abs($have->value+$recommend->value -$recommend->want_compensate_value );
					$final_price = abs($have->value -( $recommend->value -$recommend->want_compensate_value ) );
				}
				
				$percentage_price = $final_price/$total ;
				$points += (20 * (1-$percentage_price));
				
				var_dump(($points/150)*100);
				
			}
       echo '<hr>';
			$recommends_array[] = $recommends;
		}
		$data= array();
		$data['have'] = $have;
		$data['wants'] = $wants;
		$data['recommendations'] = $recommends_array;
		$this->load->view('ads',$data);
	}
	public function add_ads()
	{
		$this->load->view('common/header');
		$data['companies'] = $this->ads_model->get_companies();
		$data['categories'] = $this->ads_model->get_categories();
		$this->load->view('add_ads',$data);
		$this->load->view('common/footer');
	}
	
	/*these details will save in 'have' table of database  */
	public function save_ads()
	{
		$input = $this->input->post();
		$wants = $input['want'];
		
		$data = array();
		$data['user_id'] = $this->ion_auth->user()->row()->id;
		$data['user_name'] = $this->ion_auth->user()->row()->first_name;
		$data['category_id'] = $input['category_id'];
		$data['company_id'] = $input['company_id'];
		$data['model'] = $input['model'];
		$data['description'] = $input['description'];
		$data['value'] = $input['value'];
		$data['condition'] = $input['condition'];
		$have_id = $this->ads_model->save_have($data);
		
		/*these details will save in 'want' table of db  */
		foreach ($wants as $want)
		{
			$data = array();
			$data['want_category_id'] = $want['want_category_id'];
			$data['want_company_id'] = $want['want_company_id'];
			$data['want_model'] = $want['want_model'];
			$data['want_compensate_value'] = $want['want_compensate_value'];
			$data['want_will_give'] = $want['want_will_give'];
			$data['want_condition'] = $want['want_condition'];
			$data['have_id'] = $have_id ;
			$this->ads_model->save_want($data);
		}
            /*take id of have of specific ad to function view_ads  */
		$this->view_ads($data['have_id']);
		
	}
	public function edit_ads($id){
	
	
	
		if(empty($id) && $id != 0){
			echo '334';
		}
		
	}
}