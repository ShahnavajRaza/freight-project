<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function sea_freight()
	{
		$this->load->view('frontend/sea_freight');
	}
	public function air_freight()
	{
		$this->load->view('frontend/air_freight');
	}
	public function road_freight()
	{
		$this->load->view('frontend/road_freight');
	}
	public function warehousing()
	{
		$this->load->view('frontend/warehousing');
	}
	public function customs_clearance()
	{
		$this->load->view('frontend/customs_clearance');
	}
	public function multimodal_transport()
	{
		$this->load->view('frontend/multimodal_transport');
	}
}
