<?php defined('BASEPATH') or die('Restricted access');

class Ads_Model extends CI_Model
{
	const ADS = 'ads';
	const CATEGORY = 'category';
	const COMPANIES = 'companies';
	
	public function save_ads($data)
	{
		$this->db->insert('have',$data);
	}
	
	// return array of categories obj
	public function get_categories()
	{	
		$this->db->select('*');
		$this->db->from(self::CATEGORY);
	
		$query = $this->db->get();
		
		return $query->result();
	}
	public function get_companies()
	{
		$this->db->select('*');
		$this->db->from(self::COMPANIES);
	
		$query = $this->db->get();
	
		return $query->result();
	}
	
	function get_adas($id)
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
	function save_want($data)
	{
		$this->db->insert('want',$data);
	}
	public function get_have($id)
	{
		$this->db->select('a.* , b.id as category_id , b.name as category_name , c.id as company_id , c.company_name');
		$this->db->from('have as a');
		$this->db->join('category as b','a.category_id=b.id');
		$this->db->join('companies as c','a.company_id=c.id');
		$query = $this->db->get();
		$result = $query->row();
		return  $result;
	}
	public function get_want($id)
	{
		$this->db->select('a.* , b.id as category_id , b.name as category_name , c.id as company_id , c.company_name');
		$this->db->from('want as a');
		$this->db->join('category as b','a.want_category_id=b.id');
		$this->db->join('companies as c','a.want_company_id=c.id');
		$query = $this->db->get();
		$result = $query->result();
		return  $result;
	}
}
