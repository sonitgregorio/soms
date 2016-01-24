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
			$this->load->model('materialsmd');
			$desc = $this->input->post('desc');
			$pid = $this->session->userdata('pid');
			$data = array('description' => $desc, 'pid' => $pid);
			$this->api->insert_users('tbl_mat_desc', $data);
			$this->api->set_session_message('success', 'Successfuly Added', 'message');
			redirect('/request_material');
		}

		function submit_material()
		{
			$this->load->model('materialsmd');
			$desc = $this->input->post('description');
			$mid = $this->input->post('mid');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$data = array('description' => $desc, 'unit' => $units, 'quantity' => $quantity, 'mid' => $mid);
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

	}
?>