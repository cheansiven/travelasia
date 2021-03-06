<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Atoa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('tour');
        $this->load->model('region');
        $this->load->model('category');
        $this->load->model('hotel');
        $this->load->model('cruise');
        $this->load->model('language');
        $this->load->model('experience');
        $this->load->model('hotel_category');
        $this->load->model('cruise_category');
        $this->load->helper(array('form', 'text'));
    }

    public function index()
    {
        $data = array();
        $data["total_promotion_tours"] = count($this->tour->getToursPromo());
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $this->load->view('atoa/home', $data);
    }

    public function usefulInformation()
    {
        $data = array();
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $this->load->view('atoa/useful-information', $data);
    }

    public function tours()
    {
        $data = array();
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["tours"] = $this->tour->getAllTours();
        $data["title"] = 'One of the best tour operator in Cambodia : Travel Asia a la carte';
        $data["description"] = 'Travel Asia a la carte in a tour operator in Cambodia that keeps its promises, with high value and exclusive tour packages all over Asia';
        $data["keywords"] = 'tour operator in Cambodia';
        /*$data["tour_title"] = 'Tour in Cambodia';
        $data["tour_description"] = 'Explore Cambodia and beyond on a private or group tour. Itineraries are flexible and can be crafted to meet your own individual needs. A short city break, a few days exploring the temples or comprehensive single destinations tours for a week or two are all offered.';*/
        $data["tour_title"] = 'Tour Operator in Cambodia';
        $data["tour_description"] = 'Tour Operator in Cambodia Traverse the magnificent land of Cambodia with a professional tour operator, whether you decide to travel on a small intimate private tour or choose to join a larger group and meet people who share your emotions. Itineraries are naturally highly modifiable to both your means and your abilities (or desires) and should be crafted to meet your very own individual demands. A short city break, a few days exploring the temples or comprehensive single destinations tours for a week or two are all detailed here below.';
        $this->load->view('atoa/tours', $data);
    }

    public function destinations()
    {
        $data = array();
        $data["name"] = 'Destinations';
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();

        $this->load->view('atoa/destinations', $data);

    }

    public function categories()
    {
        $data = array();
        $data["name"] = 'Holiday Types';
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();

        $this->load->view('atoa/categories', $data);
    }

    public function toursByDestination($id, $title)
    {
        $data = array();
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["tours"] = $this->tour->getToursByDestination($id);
        $description = $this->region->getRegionByID($id);
        $data["title"] = $description->name;
        $data["keywords"] = $description->name;
        $data["description"] = $description->name;
        $data["tour_title"] = $description->name;
        $data["tour_description"] = $description->intro;

        $this->session->set_userdata(
            array(
                'main_navigated_from_id' => $id,
                'main_navigated_from_name' => 'Destinations',
                'main_navigated_from_url' => 'asian-and-cambodia-tours-destinations.html',
                'navigated_from_id' => $id,
                'navigated_from_name' => $title,
                'navigated_from_url' => 'asian-and-cambodia-tours-destinations.html/' . $id . '/' . $this->generateLink($title)
            )
        );

        $data['breadcrumbs'] = array(
            array(
                'url' => 'asian-and-cambodia-tours-destinations.html',
                'name' => 'Destinations'
            )
        );

        $this->load->view('atoa/tours', $data);

    }

    public function toursByCategory($id, $title)
    {
        $data = array();
        $data["name"] = 'Tours';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["tours"] = $this->tour->getToursByCategory($id);
        $description = $this->category->getCategoryByID($id);
        $data["title"] = $description->name;
        $data["keywords"] = $description->name;
        $data["description"] = $description->name;
        $data["tour_title"] = $description->name;
        $data["tour_description"] = $description->description;

        $data['breadcrumbs'] = array(
            array(
                'url' => 'holiday-tours-in-cambodia.html',
                'name' => 'Holiday Types'
            )
        );

        $this->session->set_userdata(
            array(
                'main_navigated_from_id' => $id,
                'main_navigated_from_name' => 'Holiday Types',
                'main_navigated_from_url' => 'holiday-tours-in-cambodia.html',
                'navigated_from_id' => $id,
                'navigated_from_name' => $title,
                'navigated_from_url' => 'holiday-tours-in-cambodia.html/' . $id . '/' . $this->generateLink($title)
            )
        );

        $this->load->view('atoa/tours', $data);
    }


    public function bestValue()
    {
        $data = array();
        $data["name"] = 'Best Value';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["tours"] = $this->tour->getToursPromo();
        $data["title"] = 'A Travel & Tour Agency in Cambodia, choose Travel Asia a la carte first';
        $data["keywords"] = 'Tour agency in Cambodia';
        $data["description"] = 'Looking for an exclusive travel and tour agency in Cambodia? contact Travel Asia a la carte today';

        $data["tour_title"] = 'Agency in Cambodia';
        $data["tour_description"] = 'The best discounts and promotional offers for hotels, cruises and tours. Enjoy a splendid tour of Cambodia and make your money go further with our best value offers.';

        $this->load->view('atoa/tours', $data);
    }


    public function mice()
    {
        $data = array();
        $data['name'] = 'Mice';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();

        $this->load->view('atoa/mice', $data);
    }

    public function experiences()
    {
        $data = array();
        $data['name'] = 'Experiences';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["title"] = 'Travel Asia a la carte is one of the best tour experts in Cambodia';
        $data["description"] = 'When looking for exclusive and quality tours in the kingdom, turn to experts in Cambodia: Travel Asia a la carte';
        $data["keywords"] = 'tips and tricks about Cambodian journey';
        $data["tour_title"] = 'EXPERIENCES';
        $data["tour_description"] = 'The best discounts and promotional offers for hotels, cruises and tours. Enjoy a splendid tour to Cambodia and make money your money go further with best value offers.';
        $data["experiences"] = $this->experience->getAllExperiences();

        $this->load->view('atoa/experiences', $data);
    }


    public function tourDetail($id, $title)
    {
        $data = array();
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["tour"] = $this->tour->getTourByID($id);
        $data['destination'] = $this->tour->getDestinationByTour($id);

        $breadcrumbs = array(
            array(
                'url' => 'tour-operator-in-cambodia.html',
                'name' => 'Tours'
            )
        );

        if ($this->session->userdata('navigated_from_id')) {
            $breadcrumbs = array(
                array(
                    'url' => $this->session->userdata('main_navigated_from_url'),
                    'name' => $this->session->userdata('main_navigated_from_name')
                ),
                array(
                    'url' => $this->session->userdata('navigated_from_url'),
                    'name' => $this->session->userdata('navigated_from_name')
                )
            );
        }

        $data['breadcrumbs'] = $breadcrumbs;

        $data["itineraries"] = $this->tour->getItineraries($id);

        $this->session->unset_userdata('main_navigated_from_id');
        $this->session->unset_userdata('main_navigated_from_name');
        $this->session->unset_userdata('main_navigated_from_url');
        $this->session->unset_userdata('navigated_from_id');
        $this->session->unset_userdata('navigated_from_name');
        $this->session->unset_userdata('navigated_from_url');

        $this->load->view('atoa/tour', $data);
    }

    public function generateLink($text)
    {
        $str = str_replace('&', ' ', $text);
        $str = str_replace('  ', '', $str);
        $str = str_replace(' ', '-', $str);

        return trim(strtolower($str));
    }

    public function search_old()
    {
        $data = array();
        $search = array();
        $search['destination'] = $_GET['destination'];
        $search['category'] = $_GET['category'];
        $search['duration'] = $_GET['duration'];

        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["tours"] = $this->tour->search($search);
        $data["title"] = 'Tours in Cambodia';
        $data["keywords"] = 'Tours in Cambodia';
        $data["description"] = 'Tours in Cambodia';
        $data["tour_title"] = 'Tours in Cambodia';
        $data["tour_description"] = 'Explore Cambodia and beyond on a private or group tour. Itineraries are flexible and can be crafted to meet your own individual needs. A short city break, a few days exploring the temples or comprehensive single destinations tours for a week or two are all offered.';

        $this->load->view('atoa/tours', $data);
    }

    public function search()
    {
        $data = array();
        $search = array();

        $data["name"] = 'Tours';
        $data['main_back_link'] = 'tour-operator-in-cambodia.html';
        $search['destination'] = $_GET['destination'];
        $search['category'] = $_GET['category'];
        $search['duration'] = $_GET['duration'];

        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["tours"] = $this->tour->search($search);
        $data["title"] = 'Tours in Cambodia';
        $data["keywords"] = 'Tours in Cambodia';
        $data["description"] = 'Tours in Cambodia';
        $data["tour_title"] = 'Tours in Cambodia';
        $data["tour_description"] = 'Explore Cambodia and beyond on a private or group tour. Itineraries are flexible and can be crafted to meet your own individual needs. A short city break, a few days exploring the temples or comprehensive single destinations tours for a week or two are all offered.';

        $data['block_google_result'] = true;

        $this->load->view('atoa/tours', $data);
    }

    public function hotels()
    {
        $data = array();
        $data["name"] = 'Hotels';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["hotels"] = $this->hotel->getRegionsHotels();

        $this->load->view('atoa/hotels-categories', $data);
    }

    public function hotelsByCategory($id, $title)
    {
        $data = array();
        $data['name'] = 'Hotels';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["hotels"] = $this->hotel->getHotelsByRegion($id);
        $description = $this->region->getRegionByID($id);
        $data["title"] = $description->name;
        $data["description"] = $description->name;
        $data["hotel_title"] = $description->name;
        $data["hotel_description"] = $description->description;

        $breadcrumbs = array(
            array(
                'url' => 'directory-hotel-in-cambodia.html',
                'name' => 'Hotels'
            )
        );

        $data['breadcrumbs'] = $breadcrumbs;

        $this->load->view('atoa/hotels', $data);
    }

    public function hotelDetail($id, $title)
    {
        $data = array();

        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["hotel"] = $this->hotel->getHotelByID($id);

        $breadcrumbs = array(
            array(
                'url' => 'directory-hotel-in-cambodia.html',
                'name' => 'Hotels'
            ),
            array(
                'url' => 'directory-hotel-in-cambodia.html/' . $data["hotel"]->region_id . '/' . $this->generateLink($data["hotel"]->region_name),
                'name' => $data["hotel"]->region_name
            )
        );

        $data['breadcrumbs'] = $breadcrumbs;

        $this->load->view('atoa/hotel', $data);
    }

    public function searchHotel()
    {
        $data = array();
        $search = array();
        //$search["region"] = $_GET['region'];

        $data["name"] = 'Tours';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();

        $data["hotel_regions"] = $this->hotel->getHotelRegionsListSelected();
        //$data["hotel_categories"] = $this->hotel->getHotelCategoriesListSelected();

        $data["hotels"] = $this->hotel->search($search);
        $data["title"] = 'Tours in Cambodia';
        $data["description"] = 'Hotels in Cambodia';
        $data["keywords"] = 'Hotels in Cambodia';
        $data["hotel_title"] = 'Hotels in Cambodia';
        $data["hotel_description"] = 'Cambodia has a range of hotels to offer for all budgets and tastes. Travel Asia only work with hotels we have personally inspected and in most cases, stayed overnight to test the services.';
        $this->load->view('atoa/hotels', $data);
    }

    public function hotelSearchCriteria()
    {

        $regions = $this->hotel->getHotelRegionsList();

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode(array('regions' => $regions)));
    }


    public function cruises()
    {
        $data = array();
        $data["name"] = 'Cruises';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["cruises"] = $this->cruise->getAllCruises();

        $this->load->view('atoa/cruises', $data);

    }

    public function cruiseDetail($id, $title)
    {
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["cruise"] = $this->cruise->getCruiseByID($id);

        $breadcrumbs = array(
            array(
                'url' => 'best-river-cruises-in-south-east-asia.html',
                'name' => 'Cruises'
            )
        );

        $data['breadcrumbs'] = $breadcrumbs;

        $this->load->view('atoa/cruise', $data);
    }


    public function booking($id, $title)
    {
        $this->load->helper('captcha');
        $data = array();

        // Captcha
        $words = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'));
        shuffle($words);
        $word = substr(implode($words), 0, 5);

        $vals = array(
            'word' => $word,
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            'img_width' => 150,
            'img_height' => '35',
            'expiration' => 7200
        );

        $cap = create_captcha($vals);

        $captcha = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );
        $data['captcha'] = $captcha;

        //$data["language"] = $this->language->generate_language_list();
        $data["category"] = $this->hotel_category->generate_category_list();
        $data["tour"] = $this->tour->getTourByID($id);
        $this->load->view('atoa/book-tour', $data);
    }

    public function bookTour_backup()
    {
        $tour_id = $this->input->post('tour_id');

        $tour = $this->tour->getTourByID($tour_id);
        $subject_guest = "Travel Asia a la carte: Your tour booking information";
        $subject_admin = "Travel Asia a la carte: New tour booking from client";
        $header_admin = 'Booking from client:';
        $header_guest = '<i>Thank you for choosing:</i>';
        $body_tour = '
		<table width="600px" border="0" cellspacing="0" cellpadding="5" style="background-color:#DDDDDD; padding:10px; margin-top:10px;">
			
			<tr><td style="color:#FF0000;"><a href="' . site_url('tour/' . $tour->id) . '/' . strtolower(url_title($tour->name)) . '">' . $tour->name . '</a></td></tr>
			<tr><td><img src="' . base_url() . 'upload/tours/' . $tour->image . '" align="left" style="padding-right:15px;">' . $tour->intro . '</td></tr>
			<tr><td>' . $tour->num_days . 'DAYS - ' . $tour->num_nights . 'NIGHTS</td></tr>
		</table>';
        $body_info = '
		<p>Booking information:</p>
		<table width="600px" border="0" cellspacing="0" cellpadding="5">
		  <tr>
			<td width="250px" valign="top"><i>Title</i>:</td>
			<td valign="top" width="350px"> ' . $this->input->post('title') . '</td>
		  </tr>
		  <tr>
			<td width="250px" valign="top"><i>Last name</i>:</td>
			<td valign="top" width="350px"> ' . $this->input->post('last_name') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>First Name</i>:</td>
			<td valign="top"> ' . $this->input->post('first_name') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Email</i>:</td>
			<td valign="top"> ' . $this->input->post('email') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Country of residence</i>:</td>
			<td valign="top"> ' . $this->input->post('country') . '</td>
		  </tr>
		   <tr>
			<td valign="top"><i>Expected arrival date</i>:</td>
			<td valign="top"> ' . $this->input->post('arrival_date') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Preferred hotel category</i>:</td>
			<td valign="top"> ' . $this->input->post('hotel_category') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Adults<i>:</td>
			<td valign="top"> ' . $this->input->post('adults') . '</td>
		  </tr> 
			<tr>
			<td valign="top"><i>Children</i>:</td>
			<td valign="top"> ' . $this->input->post('children') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Infants</i>:</td>
			<td valign="top"> ' . $this->input->post('infants') . '</td>
		  </tr>
		  
		</table>
		<p><i>Additional detail and request:</i></p>
		<p>' . $this->input->post('message') . '</p>
		<br><br><p>IP Address: <b>' . $_SERVER['REMOTE_ADDR'] . '</b></p>';
        //echo $body_info;
        //exit();

        $body_admin = $header_admin . $body_tour . $body_info;
        $body_guest = $header_guest . $body_tour . $body_info;


        $this->load->library('email');
        $this->email->set_mailtype("html");

        // for admin
        $this->email->from($this->input->post('email'));
        $this->email->to('info@travelasia.travel');
        //$this->email->to('sothy@impact-cambodia.com');
        $this->email->bcc('sothy.chhay@gmail.com');
        $this->email->subject($subject_admin);
        $this->email->message($body_admin);
        $this->email->send();

        // for guest
        //$this->email->from('sothy@impact-cambodia.com');
        $this->email->from('info@travelasia.travel');
        $this->email->to($this->input->post('email'));
        $this->email->subject($subject_guest);
        $this->email->message($body_guest);
        $this->email->send();


        redirect('booking-sucess/?tour=' . $tour->name);
    }

    public function bookTour()
    {
//        echo "<pre>" . print_r($this->input->post(), 1) . '</pre>';
//        exit;
        $tour_id = $this->input->post('tour_id');

        $tour = $this->tour->getTourByID($tour_id);
        $subject_guest = "Travel Asia a la carte: Your tour booking information";
        $subject_admin = "Travel Asia a la carte: New tour booking from client";
        $header_admin = 'Booking from client:';
        $header_guest = '<i>Thank you for choosing:</i>';

        $container_start = "<div style='width: 600px; margin: 10px auto; color: #444'>";
        $container_close = "</div>";

        $body_tour = '
		<table width="600px" border="0" cellspacing="0" cellpadding="5" style="background-color:#f0f0f0; padding:10px; margin-top:10px; color: #444">
			<tr><td style="color:#FF0000;"><a href="' . site_url('tour/' . $tour->id) . '/' . strtolower(url_title($tour->name)) . '" style="color: #004B8D; text-decoration: none; font-weight: 600;">' . $tour->name . '</a></td></tr>
			<tr><td><img src="' . base_url() . 'upload/tours/' . $tour->image . '" align="left" style="padding-right:15px; padding-bottom: 10px;">' . $tour->intro . '</td></tr>
			<tr><td>' . $tour->num_days . 'DAYS - ' . $tour->num_nights . 'NIGHTS</td></tr>
		</table>';

        $body_info = '
		<p>Booking information:</p>
		<table width="600px" border="0" cellspacing="0" cellpadding="5">
		  <tr>
			<td width="250px" valign="top"><i>Last name</i>:</td>
			<td valign="top" width="350px"> ' . ucfirst($this->input->post('lastname')) . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>First Name</i>:</td>
			<td valign="top"> ' . ucfirst($this->input->post('firstname')) . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Email</i>:</td>
			<td valign="top"> ' . $this->input->post('email') . '</td>
		  </tr>
		   <tr>
			<td valign="top"><i>Expected arrival date</i>:</td>
			<td valign="top"> ' . $this->input->post('date') . '</td>
		  </tr>
		</table>';

        $body_admin = $container_start . $header_admin . $body_tour . $body_info . $container_close;
        $body_guest = $container_start . $header_guest . $body_tour . $body_info . $container_close;

        $guest_name = ucfirst($this->input->post('lastname')) . ' ' . ucfirst($this->input->post('firstname'));

        $mail_config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://rsx.websitewelcome.com',
            'smtp_port' => 465,
            'smtp_user' => 'tour-enquire@travelasia.travel',
            'smtp_pass' => 'R7ffob;JwTe1',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $mail_config);

        // for admin
        $this->email->from($this->input->post('email'), $guest_name);
        $this->email->to('info@travelasia.travel', 'Travel Asia');
        $this->email->bcc('lyhong.pon@gmail.com', 'Travel Asia');
        $this->email->subject($subject_admin);
        $this->email->message($body_admin);
        $this->email->send();

        // for guest
        $this->email->from('info@travelasia.travel', 'Travel Asia');
        $this->email->to($this->input->post('email'), $guest_name);
        $this->email->subject($subject_guest);
        $this->email->message($body_guest);
        $this->email->send();

        redirect('booking-sucess/?tour=' . $tour->name);
    }

    public function bookingSucess()
    {
        $data = array();
        $data["name"] = 'Tours';
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["message"] = '<p>Thank you for your interest in <span class="titleBlogBookTour">' . $_GET['tour'] . '</span> program. <br>One of our travel consultants will reply you back within 24 hours.</p>';

        $this->load->view('atoa/sucess', $data);
    }

    public function enquiry()
    {
        $data = array();
        $data["name"] = 'Tours';
        $data["destinations"] = $this->tour->getDestinations();
        $data["categories"] = $this->tour->getCategories();
        $data["category"] = $this->hotel_category->generate_category_list();
        $data["destination"] = $this->region->getDestinationList();
        $this->load->view('atoa/enquiry', $data);
    }

    public function sendEnquiry()
    {
        $subject_guest = "Travel Asia a la carte: Your tour enquiry";
        $subject_admin = "Travel Asia a la carte: New tour enquiry from client";

        $body_info = '
		<p>Enquiry information:</p>
		<table width="600px" border="0" cellspacing="0" cellpadding="5">
		 <tr>
			<td width="250px" valign="top"><i>Title</i>:</td>
			<td valign="top" width="350px"> ' . $this->input->post('title') . '</td>
		  </tr>
		  <tr>
			<td width="250px" valign="top"><i>Last name</i>:</td>
			<td valign="top" width="350px"> ' . $this->input->post('last_name') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>First Name</i>:</td>
			<td valign="top"> ' . $this->input->post('first_name') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Email</i>:</td>
			<td valign="top"> ' . $this->input->post('email') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Country of residence</i>:</td>
			<td valign="top"> ' . $this->input->post('country') . '</td>
		  </tr>
		   <tr>
			<td valign="top"><i>Expected arrival date</i>:</td>
			<td valign="top"> ' . $this->input->post('arrival_date') . '</td>
		  </tr>
		   <tr>
			<td valign="top"><i>Length of stay</i>:</td>
			<td valign="top"> ' . $this->input->post('lenght_stay') . '</td>
		  </tr>
		  
		  <tr>
			<td valign="top"><i>Preferred hotel category</i>:</td>
			<td valign="top"> ' . $this->input->post('hotel_category') . '</td>
		  </tr>
		   <tr>
			<td valign="top"><i>Preferred destination</i>:</td>
			<td valign="top"> ' . $this->input->post('destination') . '</td>
		  </tr>
		   <tr>
			<td valign="top"><i>Adults<i>:</td>
			<td valign="top"> ' . $this->input->post('adults') . '</td>
		  </tr> 
			<tr>
			<td valign="top"><i>Children</i>:</td>
			<td valign="top"> ' . $this->input->post('children') . '</td>
		  </tr>
		  <tr>
			<td valign="top"><i>Infants</i>:</td>
			<td valign="top"> ' . $this->input->post('infants') . '</td>
		  </tr>
		  
		</table>
		<p><i><b>Additional detail and request:</b></i></p>
		<p>' . $this->input->post('message') . '</p><br>
		<p><i><b>How do you hear about us?</b></i></p>
		<p>' . $this->input->post('hearing') . '</p>
		<br><br><p>IP Address: <b>' . $_SERVER['REMOTE_ADDR'] . '</b></p>';


        $this->load->library('email');
        $this->email->set_mailtype("html");
        $this->email->message($body_info);

        // for admin
        $this->email->from($this->input->post('email'));
        $this->email->to('info@travelasia.travel');
        //$this->email->to('sothy@impact-cambodia.com');
        $this->email->bcc('engineer@lox-design.com');
        $this->email->subject($subject_admin);

        $this->email->send();

        // for guest
        //$this->email->from('sothy@impact-cambodia.com');

        /*$this->email->from('info@atouchofasia.travel');*/
        $this->email->from('info@travelasia.travel');
        $this->email->to($this->input->post('email'));
        $this->email->subject($subject_guest);
        $this->email->send();


        redirect('enquiry-sucess');
    }

    public function enquirySucess()
    {
        $data = array();
        $data["name"] = 'Tours';
        $data["categoriesList"] = $this->tour->getCategoriesList();
        $data["destinationsList"] = $this->tour->getDestinationsList();
        $data["duration"] = $this->tour->getToursDuration();
        $data["message"] = '<p>Thank you for your interest in Travel Asia. One of our travel consultants will respond to your request within the next 24 hours.</p>';
        $this->load->view('atoa/sucess', $data);

    }

    public function error404()
    {

        header("Location: 404");
    }

    public function errorMessage()
    {
        $data["name"] = 'Tours';
        $data["title"] = 'Error Page 404';
        $data["description"] = 'Tours in Cambodia';
        $data["tour_title"] = 'Tours in Cambodia';
        $data["tour_description"] = 'Explore Cambodia and beyond on a private or group tour. Itineraries are flexible and can be crafted to meet your own individual needs. A short city break, a few days exploring the temples or comprehensive single destinations tours for a week or two are all offered.';
        $this->load->view('atoa/error404', $data);
    }
}