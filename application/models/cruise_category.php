<?php
class Cruise_category extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function save($data) {
	   $this->db->set($data);
	   if(!$this->db->insert('category_cruise')) return false;
	   return true;
	}
	public function update($id, $data) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('category_cruise', $data)) return false;
	   return true;
	}
	public function delete($id) {
	   $this->db->where('id', $id);
	   if(!$this->db->delete('category_cruise')) return false;
	   return true;
	}
	public function getCategories($limit, $start) {
		$this->db->order_by('ISNULL(ordering), ordering asc');
	 	$this->db->limit($limit, $start);
        $query = $this->db->get("category_cruise");
		
		return $query->result();
	}
	public function record_count() {
        return $this->db->count_all("category_cruise");
    }
	public function getCategoryByID($id) {
		
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('category_cruise');
		
      
		if ( $query->num_rows > 0 ) {
         // person has account with us
        return $query->row();
      } 
	  return false;
	}
	 public function checkbox_category_list()
	{ 
		$this->db->from('category_cruise');
		$this->db->order_by('name');
	  	$result = $this->db->get();
	  	
		return $result->result_array();
	}
	
	public function generate_category_list()
	{ 
		$this->db->from('category_cruise');
		$this->db->order_by('ISNULL(ordering), ordering', 'name');
	  	$result = $this->db->get();
	  	$return = array();
	  	$return[''] = 'Preferred Cruise Category*';
	  	if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
		  		$return[$row['name']] = $row['name'];
			}
	  	}
		return $return;
	}
	
	public function ordering($id, $order) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('category_cruise', array('ordering'=>$order))) return false;
	   return true;
	}
}
?>