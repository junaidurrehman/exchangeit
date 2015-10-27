<?php


defined('BASEPATH') or die('Restricted access');

class search_Model extends CI_Model
{
	

	
	public function get_ad($id){
		
		
		$query = $this->db->query("Select * from ads where id=".$id);
		$result = $query->result();
		
		return $result[0];
	
	
	}
	public function search_ads($user_add)
	{
		$this->db->select('*');
		$this->db->from('ads');
		
		$this->db->where('category_id='.$user_add['cat_option1']);
		$this->db->where('cat_option1='.$user_add['category_id']);
		if(!$user_add->cat_option2)
		{
			$this->db->or_where('cat_option2='.$user_add['cat_option2']);
		}
		
		if(!$user_add->cat_option3)
		{
		$this->db->or_where('cat_option3='.$user_add['cat_option3']);
		}
		if(!$user_add->cat_option4)
		{
		$this->db->or_where('cat_option4='.$user_add['cat_option4']);
		}
		
		return $result;
		
		
	}
}


?>