<?php

	/**
	* Controller for Material Request And Approvals.
	*/
	class Materials extends CI_Controller
	{
		
		function request_material()
		{
			$this->load->model('materialsmd');
			$this->api->userMenu('request_mat');
			$this->load->view('materials/request_material');
			$this->load->view('include/footer');
		}
		function insert_desc()
		{
			$coded_no = "";
			$this->load->model('materialsmd');
			$desc = $this->input->post('desc');
			$pid = $this->session->userdata('pid');
			$section = $this->input->post('section');
			$last_id = $this->materialsmd->get_last_id('tbl_mat_desc') + 1;
			$length = strlen($last_id);
			for ($i=$length; $i < 4; $i++) { 
					$coded_no .= '0';
			 }
			$coded_no .= $last_id;
			$prno = date('Y') .' - '. $coded_no;
			$data = array('description' => $desc, 'pid' => $pid, 'date_request' => Date('Y-m-d'), 'section' => $section, 'prno' => $prno);
			$this->api->insert_users('tbl_mat_desc', $data);
			$this->api->set_session_message('success', 'Successfuly Added', 'message');
			redirect('/request_material');
		}

		function submit_material()
		{
			$this->load->model('materialsmd');
			$unitcost = $this->input->post('unitcost');
			$desc = $this->input->post('description');
			$mid = $this->input->post('mid');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$data = array('description' => $desc, 'unit' => $units, 'quantity' => $quantity, 'mid' => $mid, 'unitcost' => $unitcost);
			$checking = $this->materialsmd->check_exist($mid, $desc);
			if ($checking > 0) {
				echo 1;
			}else{
				$this->api->table_insert('tbl_material_list', $data);
				$this->list_materials($mid);
			}


		}

		function get_item()
		{
			$this->list_materials($this->input->post('x'));
		}
		function list_materials($mid)
		{
			$this->load->model('materialsmd');
			$x = $this->materialsmd->get_items($mid);

			foreach ($x as $key => $value) {
				echo "<tr>
						<td>". $value['description'] ."</td>
						<td>". $value['unit'] . "</td>
						<td>". $value['quantity'] . "</td>
						<td>". $value['unitcost'] . "</td>
						<td>". $value['unitcost'] * $value['quantity']  . "</td>
						<td><a href='#' class='btn btn-danger del_materials' data-param='".  $value['id'] .'/'. $mid ."' onclick='confirm(" . "Are you sure?" . ")'><span class='glyphicon glyphicon-trash'></span></a>
					  </tr>";
			}
			$this->load->view('include/footer');
			
			
		}
		function del_materials()
		{
			$ids = $this->input->post('x');
			$id = explode('/', $ids);
			$matid = $id[0];
			$mid = $id[1];
			$where = array('mid' => $mid, 'id' => $matid);
			$this->api->delete_tables($where, 'tbl_material_list');
			$this->list_materials($mid);
		}
		function list_req_mat()
		{
			$this->load->model('materialsmd');
			$this->api->userMenu('list_request_mat');
			$this->load->view('materials/list_request_mat');
			$this->load->view('include/footer');
		}
		function print_request($id)
		{
			$data['mid'] = $id;
			$this->load->model('materialsmd');
			$this->load->view('materials/print_request', $data);
			$this->load->view('include/footer');
		}
		function update_mat_status($id, $stats)
		{
			$this->api->set_session_message('success', 'Material Request Approved', 'message');
			$this->load->model('materialsmd');
			$coded_no = '';
			$last_id = $this->materialsmd->get_last_id('tbl_rfq') + 1;
			$length = strlen($last_id);
			for ($i=$length; $i < 4; $i++) { 
				$coded_no .= '0';
			}
			$coded_no .= $last_id;
			$this->api->table_insert('tbl_rfq', array('mid' => $id, 'rfq_no' => $coded_no));
			$this->api->set_session_message('success', 'Successfuly Approved', 'message');

			$this->materialsmd->update_mat_status($id, $stats);
			redirect('/list_req_mat');
		}
		public function add_rfq()
		{
			$this->load->model('materialsmd');
			$mid = $this->input->post('mid');
			$delivery = $this->input->post('delivery');

			$coded_no = '';
			$last_id = $this->materialsmd->get_last_id('tbl_rfq') + 1;
			$length = strlen($last_id);
			for ($i=$length; $i < 4; $i++) { 
				$coded_no .= '0';
			}
			$coded_no .= $last_id;	
			$rfqno = date('Y') .' - '. $coded_no;

			$data = array('mid' => $mid, 'delivery' => $delivery, 'rfq_no' => $rfqno);
			$this->api->table_insert('tbl_rfq', $data);






			$this->api->set_session_message('success', 'Successfully Moved to Request For Quotation', 'message');
			$this->api->update_tables(array('id' => $mid), 'tbl_mat_desc', array('status' => 2));

			redirect('/pr');

		}

	}
?>