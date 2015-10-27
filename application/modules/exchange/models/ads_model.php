<?php defined('BASEPATH') or die('Restricted access');

class Ads_Model extends CI_Model
{
	const ADS = 'ads';
	const CATEGORY = 'category';
	
	public function save_ads($ads){
	
		if($ads['id'] == '')
			return false;
	
		// id = 0 mean new attrib
		if($ads['id'] == 0)
		{
			$data = array();
			$data['name'] = $ads['name'];
			$data['category_id'] = $ads['category_id'];
		$data['user_id'] = $ads['user_id'];
			$data['details'] = $ads['details'];
//  			$data['image'] = $ads['image'];
			
			
			$data['cat_option1'] = $ads['cat_option1'];
			$data['name_option1'] = $ads['name_option1'];
			
			$data['cat_option2'] = $ads['cat_option2'];
			$data['name_option2'] = $ads['name_option2'];
			
			$data['cat_option3'] = $ads['cat_option3'];
			$data['name_option3'] = $ads['name_option3'];
			
			$data['cat_option4'] = $ads['cat_option4'];
			$data['name_option4'] = $ads['name_option4'];
	
			$this->db->trans_start();
			$this->db->insert(self::ADS, $data);
			$ads['id'] = $this->db->insert_id();
			$this->db->trans_complete();
	
			if($this->db->trans_status() === false){
				return false;
			}
			else
			{
				return $this->input->post('action') == 'add' ? $ads['id'] : true;
			}
		}
		else
		{
			//prepare data to update
			$data = array();
				$data['name'] = $ads['name'];
			$data['category_id'] = $ads['category_id'];
			$data['user_id'] = $ads['user_id'];
			$data['details'] = $ads['details'];
			$data['image'] = $ads['image'];
			
			$data['cat_option1'] = $ads['cat_option1'];
			$data['name_option1'] = $ads['name_option1'];
			
			$data['cat_option2'] = $ads['cat_option2'];
			$data['name_option2'] = $ads['name_option2'];
			
			$data['cat_option3'] = $ads['cat_option3'];
			$data['name_option3'] = $ads['name_option3'];
			
			$data['cat_option4'] = $ads['cat_option4'];
			$data['name_option4'] = $ads['name_option4'];
			
			$this->db->where("id", $ads['id']);
	
			if($this->db->update(self::ADS, $data))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

	}
	
	// return array of categories obj
	public function get_categories()
	{	
		$this->db->select('*');
		$this->db->from(self::CATEGORY);
	
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function get_ads($id)
	{
		if(!$id)
			return false;
	
		$this->db->where("id", $id);
	
		$query = $this->db->get(self::ADS);
	
		$ads = $query->result();
	
		if ($query->num_rows() > 0)
		{
			$ads = $query->row();
	
			return $ads;
		}
		else
		{
			return false;
		}
	}
}
