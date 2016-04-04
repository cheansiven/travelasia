<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exchange_links extends CI_Controller {

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
	   $this->load->model('exchange_link');
 	   $this->load->helper(array('form'));
	   $this->load->library("pagination");
	}
	
	public function index()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		$config = array();
        $config['base_url'] = site_url("/admin/exchange_links/index/");
        $config["total_rows"] = $this->exchange_link->record_count();
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
 
        $this->pagination->initialize($config);
 
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["exchanges"] = $this->exchange_link->getExchangeLink($config["per_page"], $page);
			
        $data["links"] = $this->pagination->create_links();
		$data['num_results'] = $this->exchange_link->record_count();
		$this->load->view('admin/exchange_link/default', $data);
	}
	
	public function form()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}
		$data = array();
		if (!empty($_GET['id'])){
			$data['exchange'] = $this->exchange_link->getExchangeLinkByID($_GET['id']);
		}
		$this->load->view('admin/exchange_link/form', $data);
	}
	
	private function setPathLogo($id, $fname){
		$pathExchange = './upload/exchange_link';
		$path = $pathExchange.'/'.$id;
		if (!is_dir($pathExchange)) {
			mkdir($pathExchange);         
		}
		if (!is_dir($path)) {
			mkdir($path);         
		}
		
		$config['upload_path'] = $path;
   		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
   		$config['max_size'] = '2000';
		/*$config['max_width']  = '1000';
		$config['max_height']  = '1000';*/
		$config['file_name'] = $fname;

    	$this->load->library('upload', $config);
		
	}
	
	public function store()
   	{
		if ($this->session->userdata('username') == '') {
			redirect('admin/users/login', 'refresh');
		}
		$data = array(		
			'id' => $this->input->post('id'),	
			'name' => $this->input->post('name'),
            'url' => $this->input->post('url'),           
			'description' => $this->input->post('description'),           
            'text_use' => $this->input->post('text_use'),
            'status' => $this->input->post('status')
		);
		if($this->input->post('id'))
			$res = $this->exchange_link->update($this->input->post('id'), $data);
		else
			$res = $this->exchange_link->save($data);
			
		if ( $res !== false ) {
			if(strlen($_FILES["logo"]["name"])>0){
				$fname = $res.'-logo';
				$this->setPathLogo($res, $fname);
				if (!$this->upload->do_upload('logo'))
				{ 
					$error = array('error' => $this->upload->display_errors());
					echo  $this->upload->display_errors(); exit;
				}
				$upload_data = $this->upload->data();
				$logo = $upload_data['file_name'];
				$data_logo = array('logo' => $logo);
				$res = $this->exchange_link->update($res, $data_logo);
			}
			redirect('admin/exchange_links');			
		}
	}
	
	public function delete()
	{
		if ($this->session->userdata('username') == '') {
          redirect('admin/users/login', 'refresh');
      	}		
		if (!empty($_GET['id'])){
			$this->exchange_link->delete($_GET['id']);
			redirect('admin/exchange_links');			
		}
	}
}
