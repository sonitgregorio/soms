<?php 

	/**
	* 
	*/
	class Loginmd extends CI_Model
	{
		
		function check_users($username, $password)
		{
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->where('status', 1);
			$this->db->select('pid, usertype');
			$x = $this->db->get('tbl_users')->row_array();
			return $x;
		}
		function check_username($username)
		{
			$this->db->where('username', $username);
			return $this->db->get('tbl_users')->num_rows();
		}
	}

 ?>