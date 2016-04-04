<?php
class Cruise extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function save($data) {
	   $this->db->set($data);
	   if(!$this->db->insert('cruise')) return false;
	   return $this->db->insert_id();
	}
	public function update($id, $data) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('cruise', $data)) return false;
	   return true;
	}
	public function delete($id) {
	   $this->db->where('id', $id);
	   if(!$this->db->delete('cruise')) return false;
	   return true;
	}
	public function getCruises($limit, $start) {
	 	$this->db->select('cruise.*, city.name as city');
		$this->db->join('city', 'cruise.city_id=city.id');
		$this->db->order_by('ISNULL(cruise.ordering), cruise.ordering asc');
		$this->db->limit($limit, $start);
		$query = $this->db->get('cruise');
		
		return $query->result();
	}
	
	public function getAllCruises() {
		
		$this->db->select('cruise.*, city.name as city_name');
		$this->db->join('city', 'cruise.city_id=city.id');
		$this->db->order_by('ISNULL(cruise.ordering), cruise.ordering','cruise.name');
		$query = $this->db->get('cruise');
		return $query->result_array();	
	}
	
	public function record_count() {
        return $this->db->count_all("cruise");
    }
	public function getCruiseByID($id) {
		
		$this->db->select('cruise.*, city.name as city_name, city.country_id as country_id');
		$this->db->join('city', 'cruise.city_id=city.id');
		$this->db->where('cruise.id', $id);
		$query = $this->db->get('cruise');
		if ( $query->num_rows > 0 ) {
         // person has account with us
        return $query->row();
      } 
	  return false;
	}
	
	public function getCruiseMetaByID($id) {
		
		$this->db->select('id, meta_description, meta_title, meta_keyword, url');
		$this->db->where('id', $id);
		$query = $this->db->get('cruise');
		
      
		if ( $query->num_rows > 0 ) {
         // person has account with us
        return $query->row();
      } 
	  return false;
	}
	
	public function updateMeta($id, $data) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('cruise', $data)) return false;
	   return true;
	}
	
	public function generate_cruise_list()
	{ 
		$this->db->from('cruise');
		$this->db->order_by('name');
	  	$result = $this->db->get();
	  	$return = array();
	  	$return[''] = '-- Please Select --';
	  	if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
		  		$return[$row['id']] = $row['name'];
			}
	  	}
		return $return;
	}
	
	public function getCategoriesCruises(){
		$this->db->select('cruisel_category.*, category_cruise.name as name, category_cruise.image as image');
		$this->db->join('category_cruise', 'category_cruise.id=cruise_category.category_id');
		$this->db->group_by('cruise_category.category_id');
		$this->db->order_by('ISNULL(category_cruise.ordering), category_cruise.ordering', 'category_cruise.name');
		$query = $this->db->get('cruise_category');
		return $query->result_array();
	}
	
	public function getRegionsCruises(){
		$this->db->select('region_city.*, region.name as name, region.image as image');
		$this->db->join('cruise', 'cruise.city_id=region_city.city_id');
		$this->db->join('region', 'region.id=region_city.region_id');
		$this->db->group_by('region_city.region_id');
		$this->db->order_by('ISNULL(region.ordering), region.ordering', 'region.name');
		$query = $this->db->get('region_city');
		return $query->result_array();
	}
	
	public function getCruisesByCategory($id) {
		
		$this->db->select('cruise.*, city.name as city_name');
		$this->db->join('cruise_category', 'cruise.id=cruise_category.cruise_id');
		$this->db->join('city', 'city.id=cruise.city_id');
		$this->db->where('cruise_category.category_id', $id);
		$this->db->order_by('ISNULL(cruise.ordering), cruise.ordering', 'cruise.name');
		$query = $this->db->get('cruise');
		return $query->result_array();	
	}
	
	public function getCruisesByRegion($id) {
		
		$this->db->select('cruise.*, city.name as city_name');
		$this->db->join('region_city', 'cruise.city_id=region_city.city_id');
		$this->db->join('city', 'city.id=cruise.city_id');
		$this->db->where('region_city.region_id', $id);
		$this->db->order_by('ISNULL(cruise.ordering), cruise.ordering', 'cruise.name');
		$query = $this->db->get('cruise');
		return $query->result_array();	
	}
	
	
	
	public function getCruiseCategoriesList(){
		$this->db->select('cruise_category.*, category_cruise.name as name');
		$this->db->join('category_cruise', 'category_cruise.id=cruise_category.category_id');
		$this->db->group_by('cruise_category.category_id');
		$this->db->order_by('category_cruise.name');
		$result = $this->db->get('cruise_category');
		$return = array();
	  	
	  	if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
		  		$return[$row['category_id']] = $row['name'];
			}
			$return[0] = 'CRUISE TYPES';
	  	}
		else $return[''] = 'CRUISE TYPES';
		return $return;
	}
	
	public function getCruiseRegionsList(){
		$this->db->select('region_city.*, region.name as name, region.ordering as ordering');
		$this->db->join('cruise', 'cruise.city_id=region_city.city_id');
		$this->db->join('region', 'region.id=region_city.region_id');
		$this->db->order_by('ISNULL(region.ordering), region.ordering', 'region.name');
		$this->db->group_by('region_city.region_id');
		
		$result = $this->db->get('region_city');
		$return = array();
	  
	  	if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
		  		$return['@'.$row['region_id']] = $row['name'];
			}
			$return[0] = 'REGION';
	  	}
		else $return[0] = 'REGION';
		
		return $return;
		
	}
	
	
	public function getCruiseCategoriesListSelected(){
		$this->db->select('cruise_category.*, category_cruise.name as name');
		$this->db->join('category_cruisel', 'category_cruise.id=cruise_category.category_id');
		$this->db->group_by('cruise_category.category_id');
		$this->db->order_by('category_cruise.name');
		$result = $this->db->get('cruise_category');
		$return = array();
	  	$return[0] = 'CRUISE TYPES';
	  	if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
		  		$return[$row['category_id']] = $row['name'];
			}
	  	}
		
		return $return;
	}
	
	public function getCruiseRegionsListSelected(){
		$this->db->select('region_city.*, region.name as name');
		$this->db->join('cruise', 'cruise.city_id=region_city.city_id');
		$this->db->join('region', 'region.id=region_city.region_id');
		$this->db->group_by('region_city.region_id');
		$this->db->order_by('region.name');
		$result = $this->db->get('region_city');
		$return = array();
	  	$return[0] = 'REGION';
	  	if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
		  		$return[$row['region_id']] = $row['name'];
			}
	  	}
		
		return $return;
	}
	
	
	
	public function search($data) {
		
		$this->db->select('cruise.*, city.name as city_name');
		$this->db->join('city', 'city.id=cruise.city_id');
		
		if ($data["region"] != "") {
			
			$this->db->join('region_city', 'cruise.city_id=region_city.city_id');
			$this->db->where('region_city.region_id', $data["region"]);
		}
		
		$this->db->order_by('ISNULL(cruise.ordering), cruise.ordering', 'cruise.name');
		$query = $this->db->get('cruise');
		return $query->result_array();	
	}
	
	//////////////////////////////////////////////////////////////////////////////////////////////////
	
	public function saveCruiseCategories($categories, $cruise){
		foreach ($categories as $category) {
			$data = array(
			'cruise_id' => $cruise,
			'category_id' => $category
			);
			$this->db->set($data);	
			$this->db->insert('cruise_category');
		}
		
	}
	
	public function getCruiseCategories($cruise){
		$this->db->select('*');
		$this->db->where('cruise_id', $cruise);
		$query = $this->db->get('cruise_category');
		return $query->result_array();	
	}
	
	
	public function deleteCruiseCategories($cruise) {
	   $this->db->where('cruise_id', $cruise);
	   if(!$this->db->delete('cruise_category')) return false;
	   return true;
	}
	
	public function ordering($id, $order) {
	   $this->db->where('id', $id);
	   if(!$this->db->update('cruise', array('ordering'=>$order))) return false;
	   return true;
	}
}
?>