<?php

	/**
	* 
	*/
	class Iar_model extends CI_Model
	{
		
		public function get_iar()
		{
			return $this->db->query("SELECT a.mid, a.ar_no, a.invoice_no, b.prno, b.section, b.date_request FROM tbl_iar a, tbl_mat_desc b WHERE a.mid = b.id")->result_array();
		}
	}
?>