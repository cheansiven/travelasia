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
	    $this->load->model('tour');
	   $this->load->model('category');
	   $this->load->model('exchange_link');
 	   $this->load->helper(array('form'));
	   $this->load->library("pagination");
	}
	
	public function index()
	{
		$recordCount = $this->exchange_link->record_count(true);
		$config = array();
	        $config['base_url'] = site_url("/exchange-link.html/index/page/");
	        $config["total_rows"] = $recordCount;
	        $config["per_page"] = 20;
	        $config["uri_segment"] = 4;
		
		$data = array();
		$this->pagination->initialize($config); 
	        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	        $data["exchanges"] = $this->exchange_link->listExchangeLink($config["per_page"], $page);
		$data["links"] = $this->pagination->create_links();
		$data['num_results'] =  $recordCount;
		
		$data["destinations"] = $this->tour->getDestinations();
		$data["categories"] = $this->tour->getCategories();
		
		$this->load->view('atoa/exchange_link', $data);
	}
}