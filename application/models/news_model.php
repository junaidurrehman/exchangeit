
<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


public function get_news($id)
{
	$result = $this->db->select('*')->from('news')->where('id',$id)->result();
	return $result ;
}

}