<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tours extends CI_Controller {

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
	   	$this->load->model('hotel');
	   	$this->load->model('temple');
	   	$this->load->model('language');
	   	$this->load->model('activity');
	    $this->load->model('category');
		$this->load->model('transport');
	   	$this->load->model('tour');
 	   	$this->load->helper(array('form'));
	   	$this->load->library("pagination");		
	}
	
	public function index()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		$config = array();
        $config['base_url'] = site_url("/admin/tours/index/");
        $config["total_rows"] = $this->tour->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["tours"] = $this->tour->getTours($config["per_page"], $page);
			
        $data["links"] = $this->pagination->create_links();
		$data['num_results'] = $this->tour->record_count();
		$this->load->view('admin/tours/default', $data);
	}
	
	public function add()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		$data = array();
		$countries_list = array();
		$countries = $this->country->checkbox_country_list();
		$promo_option = array();
		$promo_option[0] = '-- Please select --';
		$promo_option[1] = 'Best value';
		$promo_option[2] = 'Limited offer';
		$promo_option[3] = 'Added touch';
		
		$data['promo_option'] = $promo_option;
		$data['countries'] = $countries;
		$data['list_cities'] = $this->city->generate_city_list();
		$data['transports'] = $this->transport->checkbox_transport_list();
		$data['categories'] = $this->category->checkbox_category_list();
		$data['activities'] = $this->activity->checkbox_activity_list();
		$data['languages'] = $this->language->checkbox_language_list();
		//$data['city'] = $this->city->generate_city_list();
		$this->load->view('admin/tours/add', $data);
	}
	
	public function edit()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$tour_id = $_GET['id'];
			$tour = $this->tour->getTourByID($tour_id);
			$data = array();
			
			$countries = $this->country->checkbox_country_list();
			$itineraries = $this->tour->getItineraries($tour_id);
			
			$tourDestinations = $this->tour->getTourDestinations($tour_id);
			$tourRegions = array();
			
			$regions_id = array();
			$countries_id = array();
			
			if (count($tourDestinations) > 0)
			{
				foreach ($tourDestinations as $tourDestination){
					$regions_id[] = $tourDestination['region_id'];
				}
				
				$countries_id = $this->region->getCountriesByRegions($regions_id);
				
				foreach ($countries_id as $id){
					$tourRegions[$id] = $this->region->getRegionByCountry($id, 0);
				}
				
			}
			
			$promo_option = array();
			$promo_option[0] = '-- Please select --';
			$promo_option[1] = 'Best value';
			$promo_option[2] = 'Limited offer';
			$promo_option[3] = 'Added touch';
			
			$data['promo_option'] = $promo_option;
			$data['tour'] = $tour;
			$data['tourActivities'] = $this->tour->getTourActivities($tour_id);
			$data['tourCategories'] = $this->tour->getTourCategories($tour_id);
			$data['tourLanguages'] = $this->tour->getTourLanguages($tour_id);
			$data['tourTransports'] = $this->tour->getTourTransports($tour_id);
			$data['tourGalleries'] = $this->tour->getGallery($tour_id);
			
			$data['tourRegions'] = $tourRegions;
			$data['regions_id'] = $regions_id;
			
			$data['tourCountries'] = $countries_id;
			$data['countries'] = $countries;
			$data['itineraries'] = $itineraries;
			$data['list_cities'] = $this->city->generate_city_list();
			$data['transports'] = $this->transport->checkbox_transport_list();
			$data['categories'] = $this->category->checkbox_category_list();
			$data['activities'] = $this->activity->checkbox_activity_list();
			$data['languages'] = $this->language->checkbox_language_list();
			$this->load->view('admin/tours/edit', $data);
		}
	}
	
	public function store()
   	{
		if ($this->session->userdata('username') == '') {
        	redirect('admin/users/login', 'refresh');
      	}
	  
	 	$image =  '';
	 
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['upload_path'] = './upload/tours/';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
   		$config['max_size'] = '2000';
		$config['max_width']  = '1000';
		$config['max_height']  = '1000';
    	$this->load->library('upload');
		
		$config_thumb['image_library'] = 'gd2';
		$config_thumb['new_image'] = './upload/tours/thumbs/';
		$config_thumb['create_thumb'] = FALSE;
		$config_thumb['maintain_ratio'] = TRUE;
		$config_thumb['width'] = 220;
		$config_thumb['height'] = 160;
		$this->load->library('image_lib');
		
		if(strlen($_FILES["image"]["name"])>0){
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$image = $upload_data['file_name'];
		}
		
		
		$data = array(
			'name' => $this->input->post('name'),
			'ordering' => $this->input->post('ordering')==''?NULL:$this->input->post('ordering'),
			'code' => $this->input->post('code'),
			'intro' => $this->input->post('intro'),
			'description' => $this->input->post('description'),
			'rate' => $this->input->post('rate'),
			'promo_rate' => $this->input->post('promo_rate'),
			'start' => $this->input->post('start'),
			'end' => $this->input->post('end'),
			'year_round' => $this->input->post('year_round'),
			'num_days' => $this->input->post('num_days'),
			'num_nights' => $this->input->post('num_nights'),
			'arrival_city' => ($this->input->post('arrival_city')==''?0:$this->input->post('arrival_city')),
			'departure_city' => ($this->input->post('departure_city')== ''?0:$this->input->post('departure_city')),
			'image' => $image,
			'promo_option' => $this->input->post('promo_option'),
			'promo_text' => $this->input->post('promo_text'),
			'active' => $this->input->post('active'),
			'highlight' => $this->input->post('highlight'),
			'meta_title' => $this->input->post('meta_title'),
			'meta_description' => $this->input->post('meta_description'),
			'meta_keyword' => $this->input->post('meta_keyword'),
			'url' => $this->input->post('url')
		);
	
		$tour_id = $this->tour->save($data);
		if ( $tour_id !== false ) {
			if ($this->input->post('region')){
				$regions = $this->input->post('region');
				foreach($regions as $region){
					$destination_data = array(
						'tour_id' => $tour_id,
						'region_id' => $region
					);
					$this->tour->saveTourDestination($destination_data);
				}
			}
			
			if ($this->input->post('activity')) $this->tour->saveTourActivities($this->input->post('activity'), $tour_id);
			if ($this->input->post('category') )$this->tour->saveTourCategories($this->input->post('category'), $tour_id);
			if ($this->input->post('languages') )$this->tour->saveTourLanguages($this->input->post('languages'), $tour_id);
			if ($this->input->post('transport') )$this->tour->saveTourTransports($this->input->post('transport'), $tour_id);
		
			if ($_FILES["gallery"]["error"][0] == 0){ 
				$this->upload->initialize($config);
				
				if (!$this->upload->do_multi_upload('gallery'))
				{ 
					$error = array('error' => $this->upload->display_errors());
					echo  $this->upload->display_errors(); exit;
				}
				$all_data = $this->upload->get_multi_upload_data();
				
				foreach ($all_data as $gallery_data){
					$config_thumb['source_image'] = $gallery_data['full_path'];	
					
					$this->image_lib->initialize($config_thumb);
					
					$this->image_lib->resize();
					$data_gallery = array(
						'tour_id' => $tour_id,
						'image' => $gallery_data['file_name']
					);
				
					$this->tour->saveGallery($data_gallery);
				}
			}
			
			if ($this->input->post('rows'))
			{
				$config['upload_path'] = './upload/tours/itinerary/';
				$itineraryRows = $this->input->post('rows');
				foreach($itineraryRows as $rownum) {
					$itinerary_img = '';
					if(strlen($_FILES["itinerary_img".$rownum]["name"])>0){
						$this->upload->initialize($config);
						
						if (!$this->upload->do_upload('itinerary_img'.$rownum))
						{ 
							$error = array('error' => $this->upload->display_errors());
							echo  $this->upload->display_errors(); exit;
						}
						$itinerary_data = $this->upload->data();
						$itinerary_img = $itinerary_data['file_name'];
					}
					
					
					$data_itinerary = array(
						'tour_id' => $tour_id,
						'day' => $this->input->post('itinerary_day'.$rownum),
						'description' => $this->input->post('itinerary_desc'.$rownum),
						'image' => $itinerary_img
					);
					
					$this->tour->saveItineraries($data_itinerary);
				}
			}
			redirect('admin/tours');
		}
	}
   
	public function update()
	{
		if ($this->session->userdata('username') == '') {
    		redirect('admin/users/login', 'refresh');
    	}
		
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['upload_path'] = './upload/tours/';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
   		$config['max_size'] = '2000';
		$config['max_width']  = '1000';
		$config['max_height']  = '1000';
    	$this->load->library('upload');
		
		$config_thumb['image_library'] = 'gd2';
		$config_thumb['new_image'] = './upload/tours/thumbs/';
		$config_thumb['create_thumb'] = FALSE;
		$config_thumb['maintain_ratio'] = TRUE;
		$config_thumb['width'] = 220;
		$config_thumb['height'] = 160;
		$this->load->library('image_lib');
		
		$image =  $this->input->post('imageold');
		if(strlen($_FILES["image"]["name"])>0){
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$image = $upload_data['file_name'];
		
		}
        
		$data = array(
			'name' => $this->input->post('name'),
			'ordering' => $this->input->post('ordering')==''?NULL:$this->input->post('ordering'),
			'code' => $this->input->post('code'),
			'intro' => $this->input->post('intro'),
			'description' => $this->input->post('description'),
			'rate' => $this->input->post('rate'),
			'promo_rate' => $this->input->post('promo_rate'),
			'start' => $this->input->post('start'),
			'end' => $this->input->post('end'),
			'year_round' => $this->input->post('year_round'),
			'num_days' => $this->input->post('num_days'),
			'num_nights' => $this->input->post('num_nights'),
			'arrival_city' => ($this->input->post('arrival_city')==''?0:$this->input->post('arrival_city')),
			'departure_city' => ($this->input->post('departure_city')== ''?0:$this->input->post('departure_city')),
			'image' => $image,
			'promo_option' => $this->input->post('promo_option'),
			'promo_text' => $this->input->post('promo_text'),
			'active' => $this->input->post('active'),
			'highlight' => $this->input->post('highlight')
		);
        
        $tour_id = $this->input->post('tour_id');
		
		if ( $tour_id != '' ) {
			$this->tour->update($tour_id, $data);
			$this->tour->deleteTourActivities($tour_id);
			$this->tour->deleteTourCategories($tour_id);
			$this->tour->deleteTourLanguages($tour_id);
			$this->tour->deleteTourDestinations($tour_id);
			$this->tour->deleteTourTransports($tour_id);
			$this->tour->deleteItineraries($tour_id);
			$this->tour->deleteGallery($tour_id);
		
			if ($this->input->post('region')){
				$regions = $this->input->post('region');
				foreach($regions as $region){
					$destination_data = array(
						'tour_id' => $tour_id,
						'region_id' => $region
					);
					$this->tour->saveTourDestination($destination_data);
				}
			}
			
			
			if ($this->input->post('activity')) $this->tour->saveTourActivities($this->input->post('activity'), $tour_id);
			if ($this->input->post('category') )$this->tour->saveTourCategories($this->input->post('category'), $tour_id);
			if ($this->input->post('languages') )$this->tour->saveTourLanguages($this->input->post('languages'), $tour_id);
			if ($this->input->post('transport') )$this->tour->saveTourTransports($this->input->post('transport'), $tour_id);
			
			if ($this->input->post('rows'))
			{
				$config['upload_path'] = './upload/tours/itinerary/';
				$itineraryRows = $this->input->post('rows');
				foreach($itineraryRows as $rownum) {
					$itinerary_img = $this->input->post('itinerary_imgold'.$rownum);
					if(strlen($_FILES["itinerary_img".$rownum]["name"])>0){
						$this->upload->initialize($config);
						
						if (!$this->upload->do_upload('itinerary_img'.$rownum))
						{ 
							echo  $this->upload->display_errors(); exit;
						}
						$itinerary_data = $this->upload->data();
						$itinerary_img = $itinerary_data['file_name'];
					}
					
					
					$data_itinerary = array(
						'tour_id' => $tour_id,
						'day' => $this->input->post('itinerary_day'.$rownum),
						'description' => $this->input->post('itinerary_desc'.$rownum),
						'image' => $itinerary_img
					);
					
					$this->tour->saveItineraries($data_itinerary);
				}
			}
			
			if ($this->input->post('galleryOld'))
			{
				$galleriesOld = $this->input->post('galleryOld');
				foreach ($galleriesOld as $galleryOld){
					$data_gallery = array(
						'tour_id' => $tour_id,
						'image' => $galleryOld
					);
				
					$this->tour->saveGallery($data_gallery);
				}
			}
			
			if ($_FILES["gallery"]["error"][0] == 0){ 
				$this->upload->initialize($config);
				
				if (!$this->upload->do_multi_upload('gallery'))
				{ 
					$error = array('error' => $this->upload->display_errors());
					echo  $this->upload->display_errors(); exit;
				}
				$all_data = $this->upload->get_multi_upload_data();
				
				foreach ($all_data as $gallery_data){
					$config_thumb['source_image'] = $gallery_data['full_path'];	
					
					$this->image_lib->initialize($config_thumb);
					
					$this->image_lib->resize();
					$data_gallery = array(
						'tour_id' => $tour_id,
						'image' => $gallery_data['file_name']
					);
				
					$this->tour->saveGallery($data_gallery);
				}
			}
								
			redirect('admin/tours');

		}
	}
   
	public function delete()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$tour_id = $_GET['id'];
			$this->tour->delete($tour_id);
			$this->tour->deleteTourActivities($tour_id);
			$this->tour->deleteTourCategories($tour_id);
			$this->tour->deleteTourLanguages($tour_id);
			$this->tour->deleteTourDestinations($tour_id);
			$this->tour->deleteTourTransports($tour_id);
			$this->tour->deleteItineraries($tour_id);
			$this->tour->deleteItineraries($tour_id);
			$this->tour->deleteGallery($tour_id);
			redirect('admin/tours');
			
		}
	}
	
	public function ordering()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		$orders = $this->input->post('orders');
		foreach ($orders as $id=>$order){
			$this->tour->ordering($id, $order==''?NULL:$order);	
		}
		redirect('admin/tours');
	}
	
	public function getCities() {
    	$region_id = $this->input->post('region_id');
		header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->city->getCityByRegion($region_id)));
	}
	
	public function getRegions() {
    	$country_id = $this->input->post('country_id');
		header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->region->getRegionByCountry($country_id, 0)));
	}
	
	public function meta()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$tour_id = $_GET['id'];
			$tour = $this->tour->getTourMetaByID($tour_id);
			$data = array();
			
			
			
			$data['tour'] = $tour;
			
			$this->load->view('admin/tours/meta', $data);
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
        
        $tour_id = $this->input->post('id');
		
		if ( $tour_id != '' ) {
			$this->tour->updateMeta($tour_id, $data);
			
						
			redirect('admin/tours');

		}
	}
	
}


