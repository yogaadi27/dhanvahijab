<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['verify/(:any)/(:any)'] = 'auth/verify_register/$1/$2';

//pertama kali di load
$route['default_controller'] 	 = 'auth';
$route['admin'] 			     = 'admin';	


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
