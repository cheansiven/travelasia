<?php
class Experience extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function save($data) {
	   $this->db->set($data);
	   if(!$this->db->insert('experience')) return false;
	   return true;
	}
	public function update($id, $data) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('experience', $data)) return false;
	   return true;
	}
	public function delete($id) {
	   $this->db->where('id', $id);
	   if(!$this->db->delete('experience')) return false;
	   return true;
	}
	public function getExperiences($limit, $start) {
	 	$this->db->limit($limit, $start);
        $query = $this->db->get("experience");
		
		return $query->result();
	}
	public function record_count() {
        return $this->db->count_all("experience");
    }
	public function getExperienceByID($id) {
		
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('experience');
		
      
		if ( $query->num_rows > 0 ) {
         // person has account with us
        return $query->row();
      } 
	  return false;
	}
	 public function checkbox_experience_list()
	{ 
		$this->db->from('experience');
		$this->db->order_by('title');
	  	$result = $this->db->get();
	  	
		return $result->result_array();
	}
	
	public function getAllExperiences() {
		$this->db->order_by('id desc');
        $query = $this->db->get("experience");
		return $query->result();
	}
}
?>