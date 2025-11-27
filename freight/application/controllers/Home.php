<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/home');
	}
	public function internal()
	{
		$this->load->view('frontend/internal');
	}
}
