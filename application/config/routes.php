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


$route['user_registration'] 		= 'user/registration';
$route['user_login'] 				= 'user/login';
$route['submit_login'] 				= 'user/submit_login';
$route['submit_home'] 				= 'user/submit_home';
$route['submit_registration'] 		= 'user/submit_registration';
$route['user_home'] 				= 'user/home';
$route['submit_home'] 				= 'user/submit_home';
$route['user_forgotpassword'] 		= 'user/forgotpassword';
$route['submit_forgotpassword'] 	= 'user/submit_forgotpassword';
$route['user_confirmpassword'] 		= 'user/confirmpassword';
$route['submit_confirmpassword'] 	= 'user/submit_confirmpassword';
$route['user_profile_details'] 		= 'user/profile_deatails';
$route['update_profile'] 			= 'user/update_profile';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;
$route['user_dashboard'] 			= 'user/user_dashboard';
$route['user_logout']    			= 'user/user_logout';
$route['doctor_list']    			= 'user/doctor_list';
$route['bed_list']    	 			= 'user/bed_list';
$route['oxygen_list']    			= 'user/oxygen_list';
$route['upload_image']   			= 'user/upload_image';





$route['admin_login']          = 'admin/adminlogin';
$route['submit_adminlogin']    = 'admin/submit_adminlogin';
$route['admin_dashboard']      = 'admin/admin_dashboard';
$route['admin_doctor_list']    = 'admin/admin_doctor_list';
$route['admin_doctor_add']     = 'admin/admin_doctor_add';
$route['admin_doctor_submit']  = 'admin/admin_doctor_submit';
$route['admin_blood_list']     = 'admin/admin_blood_list';
$route['admin_blood_submit']  = 'admin/admin_blood_submit';