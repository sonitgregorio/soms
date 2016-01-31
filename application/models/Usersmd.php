<?php
	/**
	* 
	*/
	class Usersmd extends CI_Model
	{
		
		function get_request()
		{
			$this->db->where('status', 0);
			$this->db->where('a.pid = b.id');
			$this->db->where('b.department = c.id');
			$this->db->select('a.pid, b.firstname, b.middlename, b.lastname, c.description, b.address, b.contact');
			$x = $this->db->get('tbl_users a, tbl_party b, tbl_department c')->result_array();
			return $x;
		}
		function get_reg($pid)
		{
			$this->db->where('status', 0);
			$this->db->where('b.id', $pid);
			$this->db->where('b.department = c.id');
			$this->db->select('a.pid, b.firstname, b.middlename, b.lastname, c.description, b.address, b.contact, b.email');
			$x = $this->db->get('tbl_users a, tbl_party b, tbl_department c')->row_array();
			return $x;
		}
		function update_status($id)
		{
			$this->db->where('pid', $id);
			$this->db->update('tbl_users', array('status' => 1));
		}
	}

?>