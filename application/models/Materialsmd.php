<?php

	/**
	* 
	*/
	class Materialsmd extends CI_Model
	{
		function get_request()
		{
			$this->db->where('pid', $this->session->userdata('pid'));
			return $this->db->get('tbl_mat_desc')->result_array();
		}
		function get_items($mid)
		{
			$this->db->where('mid', $mid);
			return $this->db->get('tbl_material_list')->result_array();
		}
		function check_exist($mid, $desc)
		{
			$this->db->where('mid', $mid);
			$this->db->where('description', $desc);
			return $this->db->get('tbl_material_list')->num_rows();

		}		
	}


?>