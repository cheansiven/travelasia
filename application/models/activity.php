<?php
class Activity extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function save($data) {
	   $this->db->set($data);
	   if(!$this->db->insert('activity')) return false;
	   return true;
	}
	public function update($id, $data) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('activity', $data)) return false;
	   return true;
	}
	public function delete($id) {
	   $this->db->where('id', $id);
	   if(!$this->db->delete('activity')) return false;
	   return true;
	}
	public function getActivities($limit, $start) {
	 	$this->db->limit($limit, $start);
        $query = $this->db->get("activity");
		
		return $query->result();
	}
	public function record_count() {
        return $this->db->count_all("activity");
    }
	public function getActivityByID($id) {
		
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('activity');
		
      
		if ( $query->num_rows > 0 ) {
         // person has account with us
        return $query->row();
      } 
	  return false;
	}
 public function checkbox_activity_list()
	{ 
		$this->db->from('activity');
		$this->db->order_by('name');
	  	$result = $this->db->get();
	  	
		return $result->result_array();
	}
  
}
?>