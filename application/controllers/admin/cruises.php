<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cruises extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('city');
	   $this->load->model('region');
	   $this->load->model('country');
	   $this->load->model('cruise');
	   $this->load->model('cruise_category');
 	   $this->load->helper(array('form'));
	   $this->load->library("pagination");
	}
	
	public function index()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		$config = array();
        $config['base_url'] = site_url("/admin/cruises/index/");
        $config["total_rows"] = $this->cruise->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["cruises"] = $this->cruise->getCruises($config["per_page"], $page);
			
        $data["links"] = $this->pagination->create_links();
		$data['num_results'] = $this->cruise->record_count();
		$this->load->view('admin/cruises/default', $data);
	}
	
	public function add()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		$data = array();
		$data['country'] = $this->country->generate_country_list();
		$data['categories'] = $this->cruise_category->checkbox_category_list();
		$this->load->view('admin/cruises/add', $data);
	}
	
	public function edit()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$cruise = $this->cruise->getCruiseByID($_GET['id']);
			$data = array();	
			$data['city'] = $this->city->getCityByCountry($cruise->country_id);
			$data['categories'] = $this->cruise_category->checkbox_category_list();
			$data['country'] = $this->country->generate_country_list();
			$data['cruiseCategories'] = $this->cruise->getCruiseCategories($cruise->id);
			$data['cruise'] = $cruise;
			$this->load->view('admin/cruises/edit', $data);
		}
	}
	
	public function store()
   	{
		if ($this->session->userdata('username') == '') {
			redirect('admin/users/login', 'refresh');
		}
		
		
		$image = '';
		$review_image = '';
		$location_image = '';
		$rooms_image = '';
		$dining_image = '';
		$leisure_image = '';
		 
		$config['upload_path'] = './upload/cruises/';
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
		$config['max_size'] = '2000';
		$config['max_width']  = '1000';
		$config['max_height']  = '1000';
		$this->load->library('upload', $config);
		 
		if(strlen($_FILES["image"]["name"])>0){
			if (!$this->upload->do_upload('image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$image = $upload_data['file_name'];
		} 
		 
		if(strlen($_FILES["review_image"]["name"])>0){
			if (!$this->upload->do_upload('review_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$review_image = $upload_data['file_name'];
		}
		
		if(strlen($_FILES["location_image"]["name"])>0){
			
			if (!$this->upload->do_upload('location_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$location_image = $upload_data['file_name'];
		}
				
		if(strlen($_FILES["rooms_image"]["name"])>0){
			
			if (!$this->upload->do_upload('rooms_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$rooms_image = $upload_data['file_name'];
		}
		
		if(strlen($_FILES["dining_image"]["name"])>0){
			
			if (!$this->upload->do_upload('dining_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$dining_image = $upload_data['file_name'];
		}
		
		if(strlen($_FILES["leisure_image"]["name"])>0){
			
			if (!$this->upload->do_upload('leisure_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$leisure_image = $upload_data['file_name'];
		}
	
		$data = array(
			'name' => $this->input->post('name'),
			'ordering' => $this->input->post('ordering')==''?NULL:$this->input->post('ordering'),
			'city_id' => $this->input->post('city'),
			'description' => $this->input->post('description'),
			'image' => $image,
			'review' => $this->input->post('review'),
			'review_image' => $review_image,
			'location' => $this->input->post('location'),
			'location_image' => $location_image,
			'rooms' => $this->input->post('rooms'),
			'rooms_image' => $rooms_image,
			'dining' => $this->input->post('dining'),
			'dining_image' => $dining_image,
			'leisure' => $this->input->post('leisure'),
			'leisure_image' => $leisure_image,
			'meta_title' => $this->input->post('meta_title'),
			'meta_description' => $this->input->post('meta_description'),
			'meta_keyword' => $this->input->post('meta_keyword'),
			'url' => $this->input->post('url')
			
		);
		$res = $this->cruise->save($data);
		if ( $res !== false ) {
			
			if ($this->input->post('category')) $this->cruise->saveCruiseCategories($this->input->post('category'), $res);
			redirect('admin/cruises');
		}
   
	
   }
   
	public function update()
   	{
		if ($this->session->userdata('username') == '') {
        	redirect('admin/users/login', 'refresh');
      	}
	 
	  	$config['upload_path'] = './upload/cruises/';
   		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
   		$config['max_size'] = '2000';
		$config['max_width']  = '1000';
		$config['max_height']  = '1000';
    	$this->load->library('upload', $config);
		
		if(strlen($_FILES["image"]["name"])>0){
			if (!$this->upload->do_upload('image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$image = $upload_data['file_name'];
		} else $image =  $this->input->post('image_old');
		
		if(strlen($_FILES["review_image"]["name"])>0){
			if (!$this->upload->do_upload('review_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$review_image = $upload_data['file_name'];
		} else $review_image =  $this->input->post('review_image_old');
	  
	 
	 	if(strlen($_FILES["location_image"]["name"])>0){
			if (!$this->upload->do_upload('location_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$location_image = $upload_data['file_name'];
		} else $location_image =  $this->input->post('location_image_old');
		
		if(strlen($_FILES["rooms_image"]["name"])>0){
			if (!$this->upload->do_upload('rooms_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$rooms_image = $upload_data['file_name'];
		} else $rooms_image =  $this->input->post('rooms_image_old');
		
		if(strlen($_FILES["dining_image"]["name"])>0){
			if (!$this->upload->do_upload('dining_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$dining_image = $upload_data['file_name'];
		} else $dining_image =  $this->input->post('dining_image_old');
		
		if(strlen($_FILES["leisure_image"]["name"])>0){
			if (!$this->upload->do_upload('leisure_image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$leisure_image = $upload_data['file_name'];
		} else $leisure_image =  $this->input->post('leisure_image_old');
        
		$data = array(
			'name' => $this->input->post('name'),
			'ordering' => $this->input->post('ordering')==''?NULL:$this->input->post('ordering'),
			'city_id' => $this->input->post('city'),
			'description' => $this->input->post('description'),
			'image' => $image,
			'review' => $this->input->post('review'),
			'review_image' => $review_image,
			'location' => $this->input->post('location'),
			'location_image' => $location_image,
			'rooms' => $this->input->post('rooms'),
			'rooms_image' => $rooms_image,
			'dining' => $this->input->post('dining'),
			'dining_image' => $dining_image,
			'leisure' => $this->input->post('leisure'),
			'leisure_image' => $leisure_image
		);
		
        $cruise_id = $this->input->post('cruise_id');
        $res = $this->cruise->update($cruise_id,$data);

         if ( $res !== false ) {
			 $this->cruise->deletecruiseCategories($cruise_id);
			 if ($this->input->post('category')) $this->cruise->saveCruiseCategories($this->input->post('category'), $cruise_id);
            redirect('admin/cruises');
         }
   }
   
   public function delete()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$cruise_id = $_GET['id'];
			$this->cruise->delete($cruise_id);
			$this->cruise->deleteCruiseCategories($cruise_id);
			redirect('admin/cruises');
			
		}
	}
	
	public function ordering()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		$orders = $this->input->post('orders');
		foreach ($orders as $id=>$order){
			$this->cruise->ordering($id, $order==''?NULL:$order);	
		}
		redirect('admin/cruises');
	}
	
	public function getCities() {
    	$country_id = $this->input->post('country_id');
		header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->city->getCityByCountry($country_id)));
	}
	
	public function meta()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$cruise_id = $_GET['id'];
			$cruise = $this->cruise->getCruiseMetaByID($cruise_id);
			$data = array();
			
			
			
			$data['cruise'] = $cruise;
			
			$this->load->view('admin/cruises/meta', $data);
		}
	}
	
	public function updateMeta()
	{
		if ($this->session->userdata('username') == '') {
    		redirect('admin/users/login', 'refresh');
    	}
		
		
		$data = array(
			'meta_description' => $this->input->post('meta_description'),
			'meta_title' => $this->input->post('meta_title'),
			'meta_keyword' => $this->input->post('meta_keyword'),
			'url' => $this->input->post('url')
		);
        
        $cruise_id = $this->input->post('id');
		
		if ( $cruise_id != '' ) {
			$this->cruise->updateMeta($cruise_id, $data);
			
						
			redirect('admin/cruises');

		}
	}
	
}
