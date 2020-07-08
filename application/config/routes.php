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

$route['new_password_type'] = 'Home/new_password_type';
$route['forgot_password_email/(:any)'] = 'Home/forgot_password_email/$1';
$route['forgot_password_check'] = 'Home/forgot_password_check';
$route['forgot_password'] = 'Home/forgot_password';
$route['login'] = 'Home/login';
$route['register'] = 'Home/register';
$route['cap'] = 'Test/cap';
$route['check_otp'] = 'Home/check_otp';
$route['otp/(:any)'] = 'Home/otp/$1';
$route['logout'] = 'Home/logout';
$route['emailcheck/(:any)'] = 'Home/emailcheck/$1';
$route['checkemail_message'] = 'Home/checkemail_message';
$route['customer_follow_up'] = 'Home/customer_follow_up';

// Dashbord

$route['Dashbord'] = 'Dashbord';
$route['do_upload'] = 'Dashbord/do_upload';
$route['enquiry_show'] = 'Dashbord/enquiry_show';
$route['view_enquiry/(:any)/(:any)'] = 'Dashbord/view_enquiry/$1/$2';
$route['edite_enquiry/(:any)/(:any)'] = 'Dashbord/edite_enquiry/$1/$2';
$route['delete_enquiry/(:any)/(:any)'] = 'Dashbord/delete_enquiry/$1/$2';

// Enquiry

$route['view_enquiry_single_admin/(:any)/(:any)'] = 'Enquiry/view_enquiry_single_admin/$1/$2';
$route['enquiry_edite/(:any)/(:any)'] = 'Enquiry/enquiry_edite/$1/$2';
$route['do_upload_edite/(:any)/(:any)'] = 'Enquiry/do_upload_edite/$1/$2';
$route['enquiry_show_admin'] = 'Enquiry/enquiry_show_admin';
$route['view_enquiry_admin/(:any)/(:any)'] = 'Enquiry/view_enquiry_admin/$1/$2';
$route['enquiry_form_admin'] = 'Enquiry/enquiry_form_admin';
$route['do_upload_admin'] = 'Enquiry/do_upload_admin';
$route['enquiry_follow_up'] = 'Enquiry/enquiry_follow_up';

$route['user_list'] = 'User/user_list';
$route['follow_up'] = 'Dashbord/follow_up';
$route['user_history'] = 'Dashbord/user_history';

// User

$route['view/(:any)'] = 'User/view/$1';
$route['edite/(:any)'] = 'User/edite/$1';
$route['register_update/(:any)'] = 'User/register_update/$1';
$route['create_user'] = 'User/create_user';

// Supplier

$route['supplier_form_admin'] = 'Supplier/supplier_form_admin';
$route['supplier_show_admin'] = 'Supplier/supplier_show_admin';
$route['supplier_form_admin_insert'] = 'Supplier/supplier_form_admin_insert';
$route['supplier_view/(:any)'] = 'Supplier/supplier_view/$1';
$route['supplier_edite/(:any)'] = 'Supplier/supplier_edite/$1';
$route['po_to_supplier'] = 'Supplier/po_to_supplier';

// $route['supplier_form_admin_updatee/(:any)'] = 'Dashbord/supplier_form_admin_update/$1';
$route['supplier_form_admin_update/(:any)'] = 'Dashbord/supplier_form_admin_update/$1';

// Admin

$route['admin'] = 'Admin/login';
$route['admin_login'] = 'Admin/check_login';
$route['admin_approval/(:any)'] = 'Admin/admin_approval/$1';
$route['admin_unapproval/(:any)'] = 'Admin/admin_unapproval/$1';

// PO
$route['po_show'] = 'Po/po_show';
$route['view_po_single/(:any)'] = 'Po/view_po_single/$1';
$route['po_edite/(:any)'] = 'Po/po_edite/$1';
$route['delete_po/(:any)'] = 'Po/delete_po/$1';
$route['follow_up_so'] = 'Po/follow_up_so';
$route['update_po'] = 'Po/update_po';
$route['so_to_po_supplier/(:any)'] = 'Po/so_to_po_supplier/$1';
$route['po_create/(:any)'] = 'Po/po_create/$1';

// POF
$route['pof_show'] = 'Pof';
$route['view_pof_single/(:any)'] = 'Pof/view_pof_single/$1';
$route['pof_follow_up'] = 'Pof/pof_follow_up';

// Quotation
$route['insert_quotation'] = 'Quotation/insert_quotation';
$route['quotation_show'] = 'Quotation/quotation_show';
$route['view_quotation_single/(:any)'] = 'Quotation/view_quotation_single/$1';
$route['edite_quotation_single/(:any)'] = 'Quotation/edite_quotation_single/$1';
$route['update_quotation/(:any)'] = 'Quotation/update_quotation/$1';
$route['quotation_to_po/(:any)'] = 'Quotation/quotation_to_po/$1';
$route['insert_pos'] = 'Quotation/insert_pos';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
