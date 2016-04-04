<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	http://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There area two reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router what URI segments to use if those provided

| in the URL cannot be matched to a valid route.

|

*/



$route['default_controller'] = "atoa";
$route['tour-operator-in-cambodia.html'] = 'atoa/tours';
$route['find-tour'] = 'atoa/search';
$route['asian-and-cambodia-tours-destinations.html'] = 'atoa/destinations';
$route['tour-and-travel-agency-in-cambodia.html'] = 'atoa/bestValue';
$route['holiday-tours-in-cambodia.html'] = 'atoa/categories';
$route['directory-hotel-in-cambodia.html'] = 'atoa/hotels';
$route['best-river-cruises-in-south-east-asia.html'] = 'atoa/cruises';
$route['find-hotel'] = 'atoa/searchHotel';
$route['booking-sucess'] = 'atoa/bookingSucess';
$route['enquiry-about-cambodia-tour'] = 'atoa/enquiry';
$route['enquiry-sucess'] = 'atoa/enquirySucess';
$route['mice-in-cambodia.html'] = 'atoa/mice';
$route['tour-experts-in-cambodia.html'] = 'atoa/experiences';
$route['useful-information'] = 'atoa/usefulInformation';

$route['exchange-link.html'] = 'exchange_links';
$route['exchange-link.html/(:any)'] = 'exchange_links';

$route['asian-and-cambodia-tours-destinations.html/(:any)/(:any)'] = 'atoa/toursByDestination/$1/$2';
$route['holiday-tours-in-cambodia.html/(:any)/(:any)'] = 'atoa/toursByCategory/$1/$2';
$route['tour/(:any)/(:any)'] = 'atoa/tourDetail/$1/$2';
$route['directory-hotel-in-cambodia.html/(:any)/(:any)'] = 'atoa/hotelsByCategory/$1/$2';
$route['hotel/(:any)/(:any)'] = 'atoa/hotelDetail/$1/$2';
//$route['best-river-cruises-in-south-east-asia.html/(:any)/(:any)'] = 'atoa/cruisesByCategory/$1/$2';
$route['cruise/(:any)/(:any)'] = 'atoa/cruiseDetail/$1/$2';
$route['booking/(:any)/(:any)'] = 'atoa/booking/$1/$2';


$route['404_override'] = 'atoa/error404';
$route['404'] = 'atoa/errorMessage';

$route['admin'] = 'admin/users';





/* End of file routes.php */

/* Location: ./application/config/routes.php */