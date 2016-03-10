<?php

	/**
	* 
	*/
	class Po extends CI_Controller
	{
		
		public function po_list()
		{
			$this->load->model('rfq_model');
			$this->api->userMenu('po');
			$this->load->view('purchase_order/po_list');
			$this->load->view('include/footer');
		}
		public function print_po($id)
		{
			$this->load->model('materialsmd');
			$data['mid'] = $id;
			$this->load->model('rfq_model');
			$this->load->view('purchase_order/print_po', $data);
			$this->load->view('include/footer');
		}
		public function submit_inv()
		{
			$inv = $this->input->post('invoiceno');
			$mid = $this->input->post('mid');
			$date_now = Date('Y-m-d');
			$coded_no = '';
			$last_id = $this->db->query("SELECT * FROM tbl_iar")->num_rows();
			$length = strlen($last_id);
			for ($i=$length; $i < 4; $i++) { 
				$coded_no .= '0';
			}
			$i = $last_id + 1;
			$coded_no .= $i;

			$coded = Date('Y') . ' - ' . $coded_no;

			$data = ['invoice_no' => $inv,'iar_date' => $date_now,'ar_no' => $coded,'mid' => $mid];

			$this->db->insert('tbl_iar', $data);
			$this->api->set_session_message('success', 'Successfully Added to Inspection and Acceptance Report', 'message');
			$this->db->where('id', $mid);
			$this->db->update('tbl_mat_desc', array('status' => 4));
			redirect('/po_list');
		}
	}
?>