<?php

	/**
	* 
	*/
	class Rfq_model extends CI_Model
	{
		
		public function get_rfq_list()
		{
			$this->db->where('status', 2);
			$this->db->where('a.pid = b.id');
			$this->db->where('b.department = c.id');
			$this->db->where('d.mid = a.id');
			$this->db->select('a.id, a.prno, a.section, a.description, b.firstname, b.lastname, c.description as department, d.rfq_no');
			return $this->db->get('tbl_mat_desc a, tbl_party b, tbl_department c, tbl_rfq d')->result_array();
		}
		public function get_pla($id)
		{
			$this->db->where('mid', $id);
			$this->db->select('delivery');
			$x = $this->db->get('tbl_rfq')->row_array();
			return $x['delivery'];
		}
		public function get_selected_item($mid)
		{
			return $this->db->query("SELECT id, quantity, description 
									 FROM `tbl_material_list` 
									 WHERE mid = $mid 
									 AND id NOT IN(SELECT matlistid 
									 FROM tbl_po_prices 
									 WHERE mid = $mid)")->result_array();
		}
		public function checking_if_exist($mid)
		{
			$this->db->where('mid', $mid);
			return $this->db->get('tbl_po')->num_rows();
		}
		public function get_po_prices($mid, $poid)
		{
			$this->db->where('a.poid', $poid);
			$this->db->where('a.mid', $mid);
			$this->db->where('a.matlistid = b.id');
			$this->db->select('b.description, b.quantity, a.unitprice, b.unit');
			return $this->db->get('tbl_po_prices a, tbl_material_list b')->result_array();
		}
		public function get_po_stat()
		{
			$this->db->where('a.status', 3);
			$this->db->where('a.id = b.mid');
			$this->db->where('a.pid = c.id');
			$this->db->where('c.department = d.id');
			$this->db->select('a.id, b.supplier, c.firstname, c.lastname, b.pono, d.code');
			return $this->db->get('tbl_mat_desc a, tbl_po b, tbl_party c, tbl_department d')->result_array();
		}
		public function get_po_order($mid)
		{
			$this->db->where('a.mid', $mid);
			$this->db->where('a.matlistid = b.id');
			$this->db->select('quantity, unit, unitprice, description');
			return $this->db->get('tbl_po_prices a, tbl_material_list b')->result_array();
		}
		public function get_sup($id)
		{
			$this->db->where('mid', $id);
			return $this->db->get('tbl_po')->row_array();
		}
		public function get_rqui($id)
		{
			$this->db->where('a.id', $id);
			$this->db->where('a.pid = b.id');
			$this->db->select('CONCAT(b.firstname, " ", b.middlename, " ", b.lastname) as names');
			return $this->db->get('tbl_mat_desc a, tbl_party b')->row_array();
		}
		public function get_signa()
		{
			return $this->db->get('tbl_sig_po')->row_array();
		}
	}
	
?>