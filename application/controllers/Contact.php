<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Contact extends MY_Controller {

	public function index()
	{
		//$this->render('contact');
		$this->load->view('hubungi');
	}

	
}
