<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/locations');
	}

}
