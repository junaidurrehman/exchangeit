<?php defined('BASEPATH') or die('Restricted access');

class Ads_Model extends CI_Model
{
	const ADS = 'ads';
	const CATEGORY = 'category';
	const COMPANIES = 'companies';
	
	/* for saving have of an ad in database table have */
	public function save_have($data)
	{
		$this->db->insert('have',$data);
		return $this->db->insert_id();
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
	
	/* saving wants of an ad in database table want */
	function save_want($data)
	{
		$this->db->insert('want',$data);
	}
	
	public function get_have($id)
	{
		$this->db->select('a.* , b.id as category_id , b.name as category_name , c.id as company_id , c.company_name');
		$this->db->from('have as a');
		$this->db->join('category as b','a.category_id=b.id and a.id='.$id);
		$this->db->join('companies as c','a.company_id=c.id');
		$query = $this->db->get();
		$result = $query->row();
		return  $result;
	}
	public function get_want($id)
	{
		$this->db->select('a.* , b.id as category_id , b.name as category_name , c.id as company_id , c.company_name');
		$this->db->from('want as a');
		/* joining category table and company table for their specific details based on their id's.. */
		$this->db->join('category as b','a.want_category_id=b.id and a.have_id='.$id);
		$this->db->join('companies as c','a.want_company_id=c.id');
		$query = $this->db->get();
		$result = $query->result();
		return  $result;
	}
	public function get_recommendations($have_category_id,$want_category_id,$user_id,$have_id)
	{
		$this->db->select('a.* , b.* ,c.id as want_company_id , c.company_name as want_company_name ,d.id as want_category_id , d.name as want_category_name,     e.id as have_company_id , e.company_name as have_company_name ,f.id as have_category_id , f.name as have_category_name');
		$this->db->from('want as a');
		$this->db->join('have as b','b.category_id='.$want_category_id.' and b.id=a.have_id and a.want_category_id='.$have_category_id.' and b.id!='.$have_id);
		$this->db->join('category as d','a.want_category_id=d.id');
		$this->db->join('companies as c','a.want_company_id=c.id');
		

		$this->db->join('category as f','b.category_id=f.id');
		$this->db->join('companies as e','b.company_id=e.id');
		$query = $this->db->get();
		$result = $query->result();
		return  $result ;
		
		
 		/* its just haves matching here */
		$this->db->where('category_id='.$id.' and user_id!='.$user_id);
		$query = $this->db->get('have');
		$result = $query->result();
		return $result;
	}
}
