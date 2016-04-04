<?php
class Exchange_link extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function save($data) {
	   $this->db->set($data);
	   if(!$this->db->insert('exchange_link')) return false;
	   return $this->db->insert_id();
	}
	public function update($id, $data) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('exchange_link', $data)) return false;
	   return $id;
	}
	public function delete($id) {
	   $this->db->where('id', $id);
	   if(!$this->db->delete('exchange_link')) return false;
	   return true;
	}
	public function getExchangeLink($limit, $start) {
	 	$this->db->limit($limit, $start);
        $query = $this->db->get("exchange_link");
		
		return $query->result();
	}
	public function record_count($status=false) {
		if($status)
			$this->db->where('status', 1);
        return $this->db->count_all("exchange_link");
    }
	public function getExchangeLinkByID($id) {
		
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('exchange_link');
		
      
		if ( $query->num_rows > 0 ) {
         // person has account with us
        return $query->row();
      } 
	  return false;
	}

  	public function checkbox_exchange_link_list()
	{ 
		$this->db->from('exchange_link');
		$this->db->order_by('name');
	  	$result = $this->db->get();
	  	
		return $result->result_array();
	}
	/*For Front page*/
	public function listExchangeLink($limit, $start) {
	 	$this->db->limit($limit, $start)->where('status', 1);
        $query = $this->db->get("exchange_link");
		
		return $query->result();
	}
}
?>