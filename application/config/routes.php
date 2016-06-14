<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Login and Sign up
$route['user_login']						= 'login/user_login';
$route['sign_up']							= 'login/sign_up';
$route['users_req_list']					= 'users/users_req_list';
$route['request_material']					= 'materials/request_material';
$route['list_req_mat']						= 'materials/list_req_mat';
$route['print_request/(:any)']				= 'materials/print_request/$1';
$route['update_mat_status/(:num)/(:num)']	= 'materials/update_mat_status/$1/$2';


//Purchase Request
$route['pr']								= 'purchase_request/pr';
$route['print_pr/(:num)']					= 'purchase_request/print_pr/$1';


//Request for Quotation
$route['rfq']								= 'rfq/rfq_list';
$route['print_rfq/(:num)']					= 'rfq/print_rfq/$1';

//Purchase Order

$route['add_po_mat/(:num)/(:num)']			= 'rfq/add_po_mat/$1/$2';
$route['set_prices/(:any)']					= 'rfq/set_prices/$1';
$route['po_list']							= 'po/po_list';
$route['print_po/(:any)']					= 'po/print_po/$1';


$route['submit_inv']						= 'po/submit_inv';

$route['iar']								= 'iar/inspect';

$route['check_item/(:num)']					= 'iar/check_item/$1';

