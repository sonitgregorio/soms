<?php
	/**
	* Users Controller
	*/
	class Users extends CI_Controller
	{
		
		function users_req_list()
		{
			$this->load->model('usersmd');
			$this->load->view('include/header');
			$nav['params'] = 'request';
			$this->load->view('include/nav', $nav);
			$this->load->view('admin/user_reg_request');
			$this->load->view('include/footer');
		}
		function get_registration()
		{
			$this->load->model('usersmd');
			$pid = $this->input->post('pid');
			$x = $this->usersmd->get_reg($pid);
			$this->load->view('admin/info', $x);
			// $this->load->view('include/footer');
		}
		function update_status()
		{
			//echo $this->input->post('pids');
			 redirect('/users_req_list');
		}
	}
?>