<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cruise_categories extends CI_Controller {

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
        $config['base_url'] = site_url("/admin/cruise_categories/index/");
        $config["total_rows"] = $this->cruise_category->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["categories"] = $this->cruise_category->getCategories($config["per_page"], $page);
			
        $data["links"] = $this->pagination->create_links();
		$data['num_results'] = $this->cruise_category->record_count();
		$this->load->view('admin/cruise_categories/default', $data);
	}
	
	public function add()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		$this->load->view('admin/cruise_categories/add');
	}
	
	public function edit()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$data = array();	
			$data['category'] = $this->cruise_category->getCategoryByID($_GET['id']);
			$this->load->view('admin/cruise_categories/edit', $data);
		}
	}
	
	public function store()
   	{	
	  	if ($this->session->userdata('username') == '') {
          	redirect('admin/users/login', 'refresh');
      	}
	  
	  
	  	$image = '';
		if(strlen($_FILES["image"]["name"])>0){
			$config['upload_path'] = './upload/cruises/categories/';
			$config['allowed_types'] = 'jpg|jpeg|gif|png';
			$config['overwrite'] = true;
			$config['remove_spaces'] = true;
			$config['max_size'] = '2000';
			$config['max_width']  = '1000';
			$config['max_height']  = '1000';
			$this->load->library('upload', $config);
			
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
			'image' => $image,
			'description' => $this->input->post('description')
		);
        
        $res = $this->cruise_category->save($data);

         if ( $res !== false ) {
            redirect('admin/cruise_categories');
         }
    
      
   }
   
	public function update()
   	{
		if ($this->session->userdata('username') == '') {
    		redirect('admin/users/login', 'refresh');
    	}
	  
		if(strlen($_FILES["image"]["name"])>0){
			$config['upload_path'] = './upload/cruises/categories/';
			$config['allowed_types'] = 'jpg|jpeg|gif|png';
			$config['overwrite'] = true;
			$config['remove_spaces'] = true;
			$config['max_size'] = '2000';
			$config['max_width']  = '1000';
			$config['max_height']  = '1000';
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('image'))
			{ 
				$error = array('error' => $this->upload->display_errors());
				echo  $this->upload->display_errors(); exit;
			}
			$upload_data = $this->upload->data();
			$filename = $upload_data['file_name'];
			
		} else $filename =  $this->input->post('imageold');
	  
        
		$data = array(
			'name' => $this->input->post('name'),
			'ordering' => $this->input->post('ordering')==''?NULL:$this->input->post('ordering'),
			'image' => $filename,
			'description' => $this->input->post('description')
		);
        
        $res = $this->cruise_category->update($this->input->post('id'),$data);
		
         if ( $res !== false ) {
            redirect('admin/cruise_categories');
         }
      
   }
   
   public function delete()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$data = array();	
			if($this->cruise_category->delete($_GET['id']))
				redirect('admin/cruise_categories');
			else exit;
		}
	}
	
	public function ordering()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		$orders = $this->input->post('orders');
		foreach ($orders as $id=>$order){
			$this->cruise_category->ordering($id, $order==''?NULL:$order);	
		}
		redirect('admin/cruise_categories');
	}
	
}
