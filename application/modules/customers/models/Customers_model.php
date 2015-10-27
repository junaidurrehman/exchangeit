<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends CI_Model {
	
	const CUSTOMERS = 'customers';

	function get_customers($filter = false, $limit = 0, $offset = 0)
	{
		$this->db->select('*');
		$this->db->from(self::CUSTOMERS);
		
		if ($limit != 0){
			$this->db->limit($limit, $offset);
		}
				
		// apply filters
		if($filter){
			// apply search filter text
			$search_txt = $this->get_customers_search_filter();
			if($search_txt){
				$this->db->like('name', $search_txt);
				$this->db->or_like('phone', $search_txt);
				$this->db->or_like('address', $search_txt);
				$this->db->or_like('zip', $search_txt);
			}
		}
			
		$query = $this->db->get();
		
		return $query->result();
	}
	
	public function count_customers()
	{
		// apply search filter text
		$search_txt = $this->get_customers_search_filter();
		if($search_txt){
			$this->db->like('name', $search_txt);
			$this->db->or_like('phone', $search_txt);
			$this->db->or_like('address', $search_txt);
			$this->db->or_like('zip', $search_txt);
		}
	
		$this->db->from(self::CUSTOMERS);
	
		return $this->db->count_all_results();
	
	}
	
	public function get_customers_search_filter()
	{
	
		$search_txt = '';
		// set search filter
		if ($this->input->post("filter_search"))
		{
	
			$search_txt = $this->input->post("filter_search");
	
			$this->session->set_userdata("filter_search", $search_txt);
	
		}
		elseif($this->input->post("filter_search") == '')
		{
	
			$this->session->set_userdata("filter_search", $this->input->post("filter_search"));
				
		}
		elseif($this->session->userdata('filter_search') != '')
		{
	
			$search_txt = $this->session->userdata('filter_search');
	
		}
		if($search_txt) return $search_txt;
	
	}
	
	function delete_customer($id)
	{
		if(empty($id))
			return false;
		
// 		$this->delete_product_variations($id);
		
		$this->db->where("id", $id);
		
		return $this->db->delete(self::CUSTOMERS);
		
	}
	
	function get_customer($id)
	{
		if(!$id)
			return false;
		
		$this->db->where("id", $id);
		
		$query = $this->db->get(self::CUSTOMERS);
		
		$customer = $query->result();
		
		if ($query->num_rows() > 0)
		{
			$customer = $query->row();
				
			return $customer;
		}
		else
		{
			return false;
		}
	}
	
	function save_customer($customer)
	{
	
		if($customer['id'] == '')
			return false;
	
		// id = 0 mean new attrib
		if($customer['id'] == 0)
		{
			$data = array();
			$data['name'] = $customer['name'];
			$data['phone'] = $customer['phone'];
			$data['address'] = $customer['address'];
			$data['zip'] = $customer['zip'];
			$data['reviews'] = $customer['reviews'];
			$data['reviews_comment'] = $customer['reviews_comment'];
				
			$this->db->trans_start();
			$this->db->insert(self::CUSTOMERS, $data);
			$customer['id'] = $this->db->insert_id();
			$this->db->trans_complete();
	
			if($this->db->trans_status() === false){
				return false;
			}
			else
			{
				return $this->input->post('action') == 'add' ? $customer['id'] : true;
			}
		}
		else
		{
			//prepare data to update
			$data = array();
			$data['name'] = $customer['name'];
			$data['phone'] = $customer['phone'];
			$data['address'] = $customer['address'];
			$data['zip'] = $customer['zip'];
			$data['reviews'] = $customer['reviews'];
			$data['reviews_comment'] = $customer['reviews_comment'];
				
			$this->db->where("id", $customer['id']);
	
			if($this->db->update(self::CUSTOMERS, $data))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
        
}
