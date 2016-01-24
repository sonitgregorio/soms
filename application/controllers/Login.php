<?php 
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function user_login()
		{
			$this->load->model('loginmd');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check_user = $this->loginmd->check_users($username, $password);
			if ($check_user == "" || $check_user <= 0) 
			{
				$this->api->set_session_message('danger', 'Invalid Username/Password', 'message');
				$this->load->helper('form');
				$this->load->view('include/header');
				$this->load->view('index');
				$this->load->view('include/footer');
			}
			else
			{
				$this->session->set_userdata('pid', $check_user['pid']);
				$this->session->set_userdata('usertype', $check_user['usertype']);
			}
			redirect('/');
		}
		function logout()
		{
			$this->session->unset_userdata('pid');
			$this->session->unset_userdata('usertype');
			redirect('/');
		}
		function sign_up()
		{
			$this->load->helper('form');
			$this->load->view('include/header');
			$this->load->view('admin/signup');
			$this->load->view('include/footer');
		}
		function insert_users()
		{
			$this->load->model('loginmd');
			$fname = $this->input->post('fname');
			$mname = $this->input->post('mname');
			$sname = $this->input->post('sname');
			$address = $this->input->post('address');
			$contact = $this->input->post('contact');
			$email = $this->input->post('emailadd');
			$department = $this->input->post('department');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cpassword = $this->input->post('cpassword');


			$party = array('firstname' => $fname, 'middlename' => $mname,
						   'lastname' => $sname, 'address' => $address,
						   'contact' => $contact, 'email' => $email,
						   'department' => $department);




			$check_username = $this->loginmd->check_username($username);

			//Checking for errors like confirm password and username if exist..

			if ($password != $cpassword) 
			{
				$this->api->set_session_message('danger', 'Invalid Invalid Confirm Password.', 'message');
				$this->sign_up();
			}
			elseif ($check_username > 0)
			{
				$this->api->set_session_message('danger', 'Username Already Exist.', 'message');
				$this->sign_up();
			}
			else
			{
				$pid = $this->api->insert_users('tbl_party', $party);
				$useraccess = array('username' => $username, 'password' => md5($password),
									'usertype' => 2, 'pid' => $pid);
				$this->api->insert_users('tbl_users', $useraccess);
				$this->api->set_session_message('success', 'Succesfuly Registered. Wait until Admin Confirm Your Registration', 'message');
				redirect('/sign_up');
			}
		}		
	}

 ?>