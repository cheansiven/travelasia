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
		foreach ($countries as $country){
			$countries_list[$country['id']][0] = $country;
			$countries_list[$country['id']][1] = $this->city->getCityByRegion($country['id']);
		}
		$data['countries'] = $countries_list;
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
			$countries_list = array();
			$countries = $this->country->checkbox_country_list();
			$itineraries = $this->tour->getItineraries($tour_id);
			foreach ($countries as $country){
				$cities = $this->city->getCityByCountry($country['id']);
				$countries_list[$country['id']]['country'] = $country;
				$countries_list[$country['id']]['city'] = $cities;
				$countries_list[$country['id']]['checked'] = false;
				$countries_list[$country['id']]['style'] = 'style="display:none;"';
				foreach ($cities as $id_city=>$city){
					$countries_list[$country['id']][$id_city]['hotel'] = '';
					$countries_list[$country['id']][$id_city]['duration'] = '';
					$countries_list[$country['id']][$id_city]['checked'] = false;
					$countries_list[$country['id']][$id_city]['style'] = 'style="display:none;"';
					foreach ($itineraries as $itinerary){
						if ($itinerary['city_id'] == $id_city){
							$countries_list[$country['id']]['checked'] = true;
							$countries_list[$country['id']]['style'] = '';
							$countries_list[$country['id']][$id_city]['checked'] = true;
							$countries_list[$country['id']][$id_city]['style'] = '';
							$countries_list[$country['id']][$id_city]['hotel'] = $itinerary['hotel_id'];
							$countries_list[$country['id']][$id_city]['duration'] = $itinerary['duration'];
							break;
						}
						
					}	
				}
			}
			
			$data['tour'] = $tour;
			$data['tourActivities'] = $this->tour->getTourActivities($tour_id);
			$data['tourCategories'] = $this->tour->getTourCategories($tour_id);
			$data['tourLanguages'] = $this->tour->getTourLanguages($tour_id);
			$data['tourTransports'] = $this->tour->getTourTransports($tour_id);
			$data['tourTemples'] = $this->tour->getTourTemples($tour_id);
			$data['countries'] = $countries_list;
			$data['hotels'] = $this->hotel->generate_hotel_list();
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
			$config_thumb['source_image'] = $upload_data['full_path'];	
			$this->image_lib->initialize($config_thumb);
			if(!$this->image_lib->resize()) echo $this->image_lib->display_errors();
		}
		
		
		$data = array(
			'name' => $this->input->post('name'),
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
			'best_value' => $this->input->post('best_value'),
			'active' => $this->input->post('active')
		);
	
		$tour_id = $this->tour->save($data);
		if ( $tour_id !== false ) {
			if ($this->input->post('country')){
				$country_array = $this->input->post('country');
				foreach($country_array as $value){
					if ($this->input->post('city'.$value)){
						$city_array = $this->input->post('city'.$value);
						foreach($city_array as $city) {
							$city = array(
								'tour_id' => $tour_id,
								'city_id' => $city
							);
							$this->tour->saveTourCity($city);
						}
					}
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
			
			if ($this->input->post('itinerary_day'))
			{
				$config['upload_path'] = './upload/tours/itinerary/';
				$config_thumb['new_image'] = './upload/tours/itinerary/thumbs/';
				$itineraries = $this->input->post('itinerary_day');
				foreach($itineraries as $rownum => $day) {
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
						$config_thumb['source_image'] = $itinerary_data['full_path'];	
						 $this->image_lib->initialize($config_thumb);
						if(!$this->image_lib->resize()) echo $this->image_lib->display_errors();
					}
					
					
					$data_itinerary = array(
						'tour_id' => $tour_id,
						'day' => $day,
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
	  
	   $this->load->library('form_validation');
      $this->form_validation->set_rules('name', 'Hotel name', 'required');
	  $this->form_validation->set_rules('code', 'Code', 'required');
	  
	if(strlen($_FILES["image"]["name"])>0){
		$config['upload_path'] = './upload/tours/';
   		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['file_name'] = $this->input->post('name');
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
   		$config['max_size'] = '1000';
		$config['max_width']  = '600';
		$config['max_height']  = '400';
    	$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('image'))
		{ 
			$error = array('error' => $this->upload->display_errors());
			echo  $this->upload->display_errors(); exit;
		}
		$upload_data = $this->upload->data();
		$filename = $upload_data['file_name'];
	} else $filename =  $this->input->post('imageold');
	  
	  if ( $this->form_validation->run() !== false ) {
        
		$data = array(
			'name' => $this->input->post('name'),
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
			'arrival_city' => $this->input->post('arrival_city'),
			'departure_city' => $this->input->post('departure_city'),
			'image' => $filename
		);
        
        $tour_id = $this->input->post('id');
		$this->tour->update($tour_id, $data);
		
		$this->tour->deleteTourActivities($tour_id);
		$this->tour->deleteTourCategories($tour_id);
		$this->tour->deleteTourLanguages($tour_id);
		$this->tour->deleteTourTemples($tour_id);
		$this->tour->deleteTourTransports($tour_id);
		$this->tour->deleteItineraries($tour_id);
		
		if ( $tour_id !== false ) {
			if ($this->input->post('country')){
				$country_array = $this->input->post('country');
				foreach($country_array as $value){ 
					if ($this->input->post('city'.$value)){
						$city_array = $this->input->post('city'.$value);
						foreach($city_array as $city) {
							$hotel = $this->input->post('hotel_'.$city);
							$duration = $this->input->post('duration_'.$city);
							$itinerary = array(
								'tour_id' => $tour_id,
								'city_id' => $city,
								'hotel_id' => $hotel,
								'duration' => $duration
							);
							$this->tour->saveItineraries($itinerary);
						}
					}
				}
			}
				
			if ($this->input->post('activity')) $this->tour->saveTourActivities($this->input->post('activity'), $tour_id);
			if ($this->input->post('category') )$this->tour->saveTourCategories($this->input->post('category'), $tour_id);
			if ($this->input->post('languages') )$this->tour->saveTourLanguages($this->input->post('languages'), $tour_id);
			if ($this->input->post('temple') )$this->tour->saveTourTemples($this->input->post('temple'), $tour_id);
			if ($this->input->post('transport') )$this->tour->saveTourTransports($this->input->post('transport'), $tour_id);
			redirect('admin/tours');

		}
      }

     	$data = array();	
		$data['city'] = $this->city->generate_city_list();
		$data['hotel'] = $this->hotel->getHotelByID($this->input->post('hotel_id'));
		$this->load->view('admin/tours/edit', $data);
      
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
			$this->tour->deleteTourCities($tour_id);
			$this->tour->deleteTourTransports($tour_id);
			$this->tour->deleteItineraries($tour_id);
			redirect('admin/tours');
			
		}
	}
	
	public function getCities() {
    	$country_id = $this->input->post('country_id');
		header('Content-Type: application/x-json; charset=utf-8');
        echo json_encode(array('cities'=>$this->city->getCityByCountry($country_id), 'country_id'=>$country_id, 'hotels'=>$this->hotel->generate_hotel_list()));
	}
	
	public function getTemples() {
    	$cities = $this->input->post('cities');
		header('Content-Type: application/x-json; charset=utf-8');
        echo json_encode($this->temple->checkbox_temple_list($cities));
		
		
	}
	
}
