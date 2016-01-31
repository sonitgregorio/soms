<?php

	/**
	* 
	*/
	class Purchase_request extends CI_Controller
	{
		
		public function pr()
		{
			$this->load->model('materialsmd');
			$this->api->userMenu('pr');
			$this->load->view('Purchase_request/pr_list');
			$this->load->view('include/footer');
		}
		public function print_pr($id)
		{
			$data['mid'] = $id;
			$this->load->model('materialsmd');
			$this->load->view('Purchase_request/print_pr', $data);
			$this->load->view('include/footer');
		}
	}
