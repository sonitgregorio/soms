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
		public function get_sampleData($x)
		{
			return $this->db->query("SELECT *, tbl_material_list.id tid FROM tbl_po, tbl_material_list WHERE tbl_po.mid = tbl_material_list.mid and tbl_material_list.mid = '$x' AND tbl_material_list.status != 1")->result_array();
		}

		public function get_sampleDataID($y)
		{
			return $this->db->query("SELECT * FROM tbl_po, tbl_material_list WHERE tbl_po.mid = tbl_material_list.mid and tbl_material_list.mid = '$y' LIMIT 1")->row_array();
		}

		public function add_stat($st, $stat){
			$this->db->query("UPDATE tbl_material_list SET status = '$st' WHERE id = '$stat'");
		}

		public function add_notess($tid, $conote){
			$this->db->query("INSERT INTO tbl_remarks SET mid = '$tid', remarks = '$conote'");
		}

		public function get_Reports()
		{
			return $this->db->query("SELECT * FROM tbl_material_list WHERE status = 1")->result_array();
		}

		public function get_Tracks()
		{
			return $this->db->query("SELECT * FROM tbl_mat_desc, tbl_status WHERE tbl_mat_desc.status = tbl_status.id")->result_array();
		}
		public function getPhysical(){
		    return $this->db->query("SELECT * FROM material_type")->result_array();
        }
        public function getPhysicalItem($item){
            $total = 0;
            $val = $this->db->query("SELECT (a.quantity * b.unitprice) total FROM tbl_material_list a, tbl_po_prices b WHERE mat_type = '{$item}' AND a.id = b.matlistid")->result_array();
            foreach ($val as $key => $value){
                $total += $value['total'];
            }
            return $total;
        }
        public function getDetailedPPE(){
            $val = $this->db->query("SELECT (c.unitprice * b.quantity) total, c.unitprice, d.description mat_type, b.description, b.quantity FROM `tbl_mat_desc` a, tbl_material_list b, tbl_po_prices c, material_type d, material_type e where a.id = b.mid AND b.mat_type = e.id AND b.id = c.matlistid AND b.mat_type = d.id")->result_array();
            return $val;
        }
        public function getSupplyReports(){
            $val = $this->db->query("SELECT (c.unitprice * b.quantity) total, c.unitprice, d.description mat_type, b.description, b.quantity, CONCAT(f.firstname, ' ', f.lastname) req FROM `tbl_mat_desc` a, tbl_material_list b, tbl_po_prices c, material_type d, material_type e, tbl_party f where a.id = b.mid AND b.mat_type = e.id AND b.id = c.matlistid AND b.mat_type = d.id AND a.pid = f.id")->result_array();
            return $val;
        }

	}
?>