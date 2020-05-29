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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['about'] = 'Home/about';
$route['enquiry'] = 'Home/enquiry';
$route['products'] = 'Home/products';

$route['login'] = 'Home/login';
$route['register'] = 'Home/register';
$route['check_otp'] = 'Home/check_otp';
$route['otp/(:any)'] = 'Home/otp/$1';
$route['logout'] = 'Home/logout';

$route['Dashbord'] = 'Dashbord';
$route['do_upload'] = 'Dashbord/do_upload';
$route['enquiry_show'] = 'Dashbord/enquiry_show';
$route['view_enquiry/(:any)/(:any)'] = 'Dashbord/view_enquiry/$1/$2';
$route['edite_enquiry/(:any)/(:any)'] = 'Dashbord/edite_enquiry/$1/$2';
$route['delete_enquiry/(:any)/(:any)'] = 'Dashbord/delete_enquiry/$1/$2';

$route['enquiry_show_admin'] = 'Dashbord/enquiry_show_admin';
$route['view_enquiry_admin/(:any)/(:any)'] = 'Dashbord/view_enquiry_admin/$1/$2';
$route['enquiry_form_admin'] = 'Dashbord/enquiry_form_admin';
$route['do_upload_admin'] = 'Dashbord/do_upload_admin';

$route['admin'] = 'Admin/login';
$route['admin_login'] = 'Admin/check_login';
$route['admin_approval/(:any)'] = 'Admin/admin_approval/$1';
$route['admin_unapproval/(:any)'] = 'Admin/admin_unapproval/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
