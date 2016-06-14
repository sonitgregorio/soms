<?php

	/**
	* 
	*/
	Class Iar extends CI_Controller
	{
		
		public function inspect()
		{
			$this->load->model('iar_model');
			$this->api->userMenu('iar');
			$this->load->view('inspection/iar');
			$this->load->view('include/footer');
		}
		public function check_item()
		{
			$this->load->model('iar_model');
			$this->api->userMenu('iar');
			$this->load->view('inspection/checking');
			$this->load->view('include/footer');
		}
	}
?>