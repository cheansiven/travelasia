<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Experiences extends CI_Controller {

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
	   $this->load->model('experience');
 	   $this->load->helper(array('form'));
	   $this->load->library("pagination");
	}
	
	public function index()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		$config = array();
        $config['base_url'] = site_url("/admin/experiences/index/");
        $config["total_rows"] = $this->experience->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["experiences"] = $this->experience->getExperiences($config["per_page"], $page);
			
        $data["links"] = $this->pagination->create_links();
		$data['num_results'] = $this->experience->record_count();
		$this->load->view('admin/experiences/default', $data);
	}
	
	public function add()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		$this->load->view('admin/experiences/add');
	}
	
	public function edit()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$data = array();	
			$data['experience'] = $this->experience->getExperienceByID($_GET['id']);
			$this->load->view('admin/experiences/edit', $data);
		}
	}
	
	public function store()
   	{
	  if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      }
	  
	 
	  $image = '';
	if(strlen($_FILES["image"]["name"])>0){
		$config['upload_path'] = './upload/experiences/';
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
			'title' => $this->input->post('title'),
			'location' => $this->input->post('location'),
			'readmore' => $this->input->post('readmore'),
			'image' => $image,
			'description' => $this->input->post('description')
		);
        
        $res = $this->experience->save($data);

         if ( $res !== false ) {
            redirect('admin/experiences');
         }
     
      
   }
   
   public function update()
   	{
	  if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      }
	  
	   
	if(strlen($_FILES["image"]["name"])>0){
		$config['upload_path'] = './upload/experiences/';
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
			'title' => $this->input->post('title'),
			'location' => $this->input->post('location'),
			'readmore' => $this->input->post('readmore'),
			'image' => $filename,
			'description' => $this->input->post('description')
		);
        
        $res = $this->experience->update($this->input->post('id'),$data);

         if ( $res !== false ) {
            redirect('admin/experiences');
         }
     
      
   }
   
   public function delete()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		
		if ($_GET['id'] != ''){
			$data = array();	
			if($this->experience->delete($_GET['id']))
				redirect('admin/experiences');
			else exit;
		}
	}
	
}
