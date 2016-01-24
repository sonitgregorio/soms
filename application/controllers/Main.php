<?php 

	class Main extends CI_Controller
	{
		
		function index()
		{
			$this->load->helper('form');
			$this->load->view('include/header');
			if ($this->session->userdata('pid') <= '') 
			{
				$this->load->view('index');
			}
			else
			{
				$nav['params'] = '';
				$this->load->view('include/nav', $nav);
				$this->load->view('admin/information');
			}
			$this->load->view('include/footer');
		}
	}

?>