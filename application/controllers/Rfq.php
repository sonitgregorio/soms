<?php



	class Rfq extends CI_Controller
	{
		
		public function rfq_list()
		{
			$this->load->model('rfq_model');
			$this->api->userMenu('rfq');
			$this->load->view('req_f_quotation/request_for_quotation');
			$this->load->view('include/footer');
		}
		public function print_rfq($id)
		{
			$this->load->model('materialsmd');
			$data['mid'] = $id;
			$this->load->model('rfq_model');
			$this->load->view('req_f_quotation/print_rfq', $data);
			$this->load->view('include/footer');
		}
		public function add_po_mat($poid, $mid)
		{
			$data['mid'] = $mid;
			$data['poid'] = $poid;
			$this->load->model('rfq_model');
			$this->api->userMenu('rfq');
			$this->load->view('req_f_quotation/po_mat', $data);
			$this->load->view('include/footer');
		} 
		public function add_po()
		{
			$this->load->model('materialsmd');
			$supp = $this->input->post('supplier');
			$address = $this->input->post('address');
			$tin = $this->input->post('tin');
			$date = Date('Y-m-d');
			$mid = $this->input->post('mid');


			$coded_no = '';
			$last_id = $this->materialsmd->get_last_id('tbl_po') + 1;
			$length = strlen($last_id);
			for ($i=$length; $i < 4; $i++) { 
				$coded_no .= '0';
			}
			$coded_no .= $last_id;
			$pono = Date('Y-m-d') . '-' . $coded_no;





			$data = ['mid' => $mid, 'supplier' => $supp, 'address' => $address, 'tin' => $tin, 'po_date' => $date, 'pono' => $pono];

			$x = $this->api->table_insert('tbl_po', $data);

			redirect('/add_po_mat/'. $x .'/' . $mid);

		}
		public function get_quantity()
		{
			$matlistid = $this->input->post('x');

			$this->db->where('id', $matlistid);
			$this->db->select('quantity');
			$x = $this->db->get('tbl_material_list')->row_array();
			echo $x['quantity'];
		}
		public function set_prices($id)
		{
			$this->db->where('mid', $id);
			$this->db->select('id');
			$x = $this->db->get('tbl_po')->row_array();

			redirect('/add_po_mat/'. $x['id'] .'/' . $id);
		}
		public function insert_po()
		{
			$mid = $this->input->post('mid');
			$poid = $this->input->post('poid');
			$materialid = $this->input->post('materialid');
			$unitprice = $this->input->post('unitprice');

			$data = ['mid' => $mid, 'poid' => $poid, 'matlistid' => $materialid, 'unitprice' => $unitprice];

			$this->api->table_insert('tbl_po_prices', $data);

			$this->api->set_session_message('success', 'Successfuly Added', 'message');

			redirect('/add_po_mat/'. $poid .'/' . $mid);


		}
		public function rfq_update_status($id)
		{
			$this->db->where('id', $id);
			$this->db->update('tbl_mat_desc', ['status' => 3]);
			redirect('/rfq');
		}
		
	}

?>