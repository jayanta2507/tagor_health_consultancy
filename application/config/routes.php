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
$route['default_controller'] = 'welcome';


$route['user_login'] 				= 'user/login';
$route['submit_login'] 				= 'user/submit_login';
$route['submit_registration'] 		= 'user/submit_registration';

$route['user_home'] 				= 'user/home';
$route['user_about'] 				= 'user/user_about';

$route['user_services'] 			= 'user/user_services';
$route['user_vaccine'] 			    = 'user/vaccine';
$route['user_oxygen'] 			    = 'user/oxygen';
$route['user_blood'] 			    = 'user/blood';
$route['user_doctor'] 			    = 'user/doctor';


$route['user_facility'] 			= 'user/facility';
$route['user_contact'] 				= 'user/contact_form';
$route['submit_contact_form'] 		= 'user/submit_contact_form';

$route['user_forgotpassword'] 		= 'user/forgotpassword';
$route['submit_forgotpassword'] 	= 'user/submit_forgotpassword';




$route['user_dashboard'] 			= 'user/user_dashboard';
$route['user_profile_details'] 		= 'user/profile_deatails';
$route['update_profile'] 			= 'user/update_profile';



//==================== Doctor ==============================
$route['doctor_list']    			= 'user/doctor_list';
$route['doctor_form/(:any)'] 	    = 'user/doctor_form/$1';
$route['submit_doctor_form/(:any)'] = 'user/submit_doctor_form/$1';
$route['doctor_appointment_list']   = 'user/doctor_appointment_list';
//==================== Doctor ==============================



$route['user_confirmpassword'] 		= 'user/confirmpassword';
$route['submit_confirmpassword'] 	= 'user/submit_confirmpassword';

$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

$route['user_logout']    			= 'user/user_logout';

$route['blood_list']    			= 'user/blood_list';
$route['bed_list']    	 			= 'user/bed_list';
$route['oxygen_list']    			       = 'user/oxygen_list';
$route['vaccine_list']    			       = 'user/vaccine_list';
$route['upload_image']   			       = 'user/upload_image';

 

 





$route['admin_login']               = 'admin/adminlogin';
$route['submit_adminlogin']         = 'admin/submit_adminlogin';
$route['admin_dashboard']           = 'admin/admin_dashboard';
$route['admin_user_list']           = 'admin/admin_user_list';





// ***************** Start Admin Doctor Section **************//
$route['admin_doctor_list']    		              = 'admin/admin_doctor_list';
$route['admin_doctor_add']     		              = 'admin/admin_doctor_add';
$route['admin_doctor_submit']  		              = 'admin/admin_doctor_submit';
$route['admin_doctor_edit/(:any)']                = 'admin/admin_doctor_edit/$1';
$route['admin_doctor_edit_submit/(:any)']         = 'admin/admin_doctor_edit_submit/$1';
$route['admin_doctor_delete/(:any)']              = 'admin/admin_doctor_delete/$1';
$route['admin_doctor_availability_list/(:any)']   = 'admin/admin_doctor_availability_list/$1';
$route['admin_doctor_availability/(:any)']        = 'admin/admin_doctor_availability/$1';
$route['admin_doctor_availability_submit']        = 'admin/admin_doctor_availability_submit';
$route['admin_doctor_availability_edit/(:any)/(:any)'] = 'admin/admin_doctor_availability_edit/$1/$2';
$route['admin_doctor_availability_edit_submit']   = 'admin/admin_doctor_availability_edit_submit';
$route['admin_doctor_availability_delete/(:any)'] = 'admin/admin_doctor_availability_delete/$1';

// ***************** End Admin Doctor Section **************//





// ***************** Start Admin Blood Section **************//
$route['admin_blood_list']                = 'admin/admin_blood_list';
$route['admin_blood_add']                 = 'admin/admin_blood_add';
$route['admin_blood_submit']              = 'admin/admin_blood_submit';
$route['admin_blood_edit/(:any)']         = 'admin/admin_blood_edit/$1';
$route['admin_blood_edit_submit/(:any)']  = 'admin/admin_blood_edit_submit/$1';
$route['admin_blood_delete/(:any)']       = 'admin/admin_blood_delete/$1';

// ***************** End Admin Blood Section **************//





// ***************** Start Admin Bed Section **************//
$route['admin_bed_list']                = 'admin/admin_bed_list';
$route['admin_bed_add']                 = 'admin/admin_bed_add';
$route['admin_bed_submit']              = 'admin/admin_bed_submit';
$route['admin_bed_edit/(:any)']         = 'admin/admin_bed_edit/$1';
$route['admin_bed_edit_submit/(:any)']  = 'admin/admin_bed_edit_submit/$1';
$route['admin_bed_delete/(:any)']       = 'admin/admin_bed_delete/$1';

// ***************** End Admin Bed Section **************//





// ***************** Start Admin oxygen Section **************//
$route['admin_oxygen_list']                = 'admin/admin_oxygen_list';
$route['admin_oxygen_add']                 = 'admin/admin_oxygen_add';
$route['admin_oxygen_submit']              = 'admin/admin_oxygen_submit';
$route['admin_oxygen_edit/(:any)']         = 'admin/admin_oxygen_edit/$1';
$route['admin_oxygen_edit_submit/(:any)']  = 'admin/admin_oxygen_edit_submit/$1';
$route['admin_oxygen_delete/(:any)']       = 'admin/admin_oxygen_delete/$1';

// ***************** End Admin oxygen Section **************//





// ***************** Start Admin vaccine Section **************//
$route['admin_vaccine_list']  			    = 'admin/admin_vaccine_list';
$route['admin_vaccine_add']   			    = 'admin/admin_vaccine_add';
$route['admin_vaccine_edit']			    = 'admin/admin_vaccine_edit';
$route['admin_vaccine_submit'] 				= 'admin/admin_vaccine_submit';
$route['admin_vaccine_edit/(:any)']         = 'admin/admin_vaccine_edit/$1';
$route['admin_vaccine_edit_submit/(:any)']  = 'admin/admin_vaccine_edit_submit/$1';
$route['admin_vaccine_delete/(:any)']       = 'admin/admin_vaccine_delete/$1';



// ***************** End Admin vaccine Section **************//