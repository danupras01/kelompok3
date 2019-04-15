<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| LMS Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
*/

$config['lms_config'] = array(

	// Site name
	'site_name' => '',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),

	

	// Default CSS class for <body> tag
	'body_class' => '',
	
	

	
	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> 'home',
		),
		'contact' => array(
			'name'		=> 'Contact',
			'url'		=> 'contact',
		),
		'login' => array(
			'name'		=> 'Login',
			'url'		=> 'panel/login',
		),
	),

	
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_frontend';