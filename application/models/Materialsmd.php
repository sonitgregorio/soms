<?php

	/**
	* 
	*/
	class Materialsmd extends CI_Model
	{
		public function get_request()
		{
			$this->db->where('pid', $this->session->userdata('pid'));
			$this->db->where('status', 0);
			return $this->db->get('tbl_mat_desc')->result_array();
		}
		public function get_items($mid)
		{
			$this->db->where('mid', $mid);
			return $this->db->get('tbl_material_list')->result_array();
		}
		public function check_exist($mid, $desc)
		{
			$this->db->where('mid', $mid);
			$this->db->where('description', $desc);
			return $this->db->get('tbl_material_list')->num_rows();

		}
		public function get_request_list()
		{
		    $where = 'b.department = c.id AND a.pid = b.id AND (status = 0 OR status = 1)';
			$this->db->where($where);
//			$this->db->where('a.pid = b.id');
//			$this->db->where('b.department = c.id');
			$this->db->select('a.id, a.prno, a.section, a.description, b.firstname, b.lastname, c.description as department,a.status');
			return $this->db->get('tbl_mat_desc a, tbl_party b, tbl_department c')->result_array();
		}
		public function update_mat_status($id, $stats)
		{
			$this->db->where('id', $id);
			$this->db->update('tbl_mat_desc', array('status' => $stats));
		}
		public function get_last_id($table)
		{
			$this->db->order_by('id DESC');
			$this->db->select('id');
			$x = $this->db->get($table)->row_array();
			return $x['id'];
		}
		public function get_pr_list()
		{
			$this->db->where('status', 1);
			$this->db->where('a.pid = b.id');
			$this->db->where('b.department = c.id');
			$this->db->select('a.id, a.prno, a.section, a.description, b.firstname, b.lastname, c.description as department');
			return $this->db->get('tbl_mat_desc a, tbl_party b, tbl_department c')->result_array();
		}
		public function get_person_pr($id)
		{
			return $this->db->query("SELECT a.prno, a.date_request, a.section,
									 CONCAT(b.firstname, ' ', b.middlename, ' ' ,
									 b.lastname) as names, d.description as position,
									 c.description as department FROM `tbl_mat_desc` a, 
									 tbl_party b, tbl_department c, tbl_position d WHERE 
									 a.pid = b.id AND a.id = '$id' AND b.department = c.id 
									 AND b.position = d.id")->row_array();
			// $where = "a.pid = b.id AND b.department = c.id AND b.position = d.id";
			// $this->db->where($where);
			// $this->db->where('a.id', $id);
			// $this->db->select('a.prno, a.date_request, a.section, CONCAT(b.firstname, " ", b.middlename, " " , b.lastname) as names, d.description as position, c.description as department');
			// return $this->db->get('tbl_mat_desc a, tbl_party b, tbl_department c, tbl_position d')->row_array();
		}
	}
?>