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
            $mat_type = $this->input->post('mat_type');
			$unitcost = $this->input->post('unitcost');
			$desc = $this->input->post('description');
			$mid = $this->input->post('mid');
			$quantity = $this->input->post('quantity');
			$units = $this->input->post('units');
			$data = array('description' => $desc, 'unit' => $units, 'quantity' => $quantity, 'mid' => $mid, 'unitcost' => $unitcost, 'mat_type' => $mat_type);
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
		public function filter_physical(){
		    $count = 0;
            $c = '';
            $str = '';
            $total = 0;
            $item = $this->db->query("SELECT id FROM material_type")->result_array();
            foreach ($item as $key => $value){
                if ($count == 0){
                    $c = $value['id'];
                }else{
                    $c .= ', ' . $value['id'];
                }
                $count += 1;
            }
		    $from = $this->input->post('fromdate');
            $to = $this->input->post('todate');
            $val = $this->db->query("SELECT (c.unitprice * b.quantity) total, d.* FROM `tbl_mat_desc` a, tbl_material_list b, tbl_po_prices c, material_type d where a.id = b.mid AND a.date_request BETWEEN '{$from}' AND '{$to}' AND b.mat_type in ({$c}) AND b.id = c.matlistid AND b.mat_type = d.id")->result_array();
            foreach ($val as $key => $value){
                $total += $value['total'];
                $str .= "<tr>
                       <td>" . $value['description'] . "</td>
                       <td>" . number_format($value['total'], 2, '.', ',') . "</td>
                </tr>";
            }
            $str .= "<tr><td>Total</td><td>" . number_format($total, 2, '.', ',') . "</td></tr>";
            echo $str;
		}


		public function filter_ppe(){
		    $str = '';
            $total = 0;
            $from = $this->input->post('fromdate');
            $to = $this->input->post('todate');
            $val = $this->db->query("SELECT (c.unitprice * b.quantity) total, d.description mat_type, b.description, b.quantity, c.unitprice FROM `tbl_mat_desc` a, tbl_material_list b, tbl_po_prices c, material_type d,   material_type e where a.id = b.mid AND a.date_request BETWEEN '{$from}' AND '{$to}' AND b.mat_type = e.id  AND b.id = c.matlistid AND b.mat_type = d.id")->result_array();
            foreach ($val as $key => $value){
                $total += $value['total'];
                $str .= "<tr>
                       <td>" . $value['mat_type'] . "</td>
                       <td>" . $value['description'] . "</td>
                       <td></td>
                        <td>" . $value['quantity'] . "</td>
                        <td>" . $value['unitprice'] . "</td>
                        <td>" . $value['quantity'] . "</td>
                        <td>" . $value['quantity'] . "</td>
                        <td>" . $value['total'] . "</td>
                </tr>";
            }

            $str .= "<tr>
                    <td colspan='7' style='text-align: center'><b>Total</b></td>
                    <td>" . $total ."</td>
                </tr>";
            echo $str;
        }

		public function filter_supply(){
		    $str = '';
            $total = 0;
            $from = $this->input->post('fromdate');
            $to = $this->input->post('todate');
            $val = $this->db->query("SELECT (c.unitprice * b.quantity) total, c.unitprice, d.description mat_type, b.description, b.quantity, CONCAT(f.firstname, ' ', f.lastname) req FROM `tbl_mat_desc` a, tbl_material_list b, tbl_po_prices c, material_type d, material_type e, tbl_party f where a.id = b.mid AND b.mat_type = e.id AND b.id = c.matlistid AND b.mat_type = d.id AND a.pid = f.id AND a.date_request BETWEEN '{$from}' AND '{$to}'")->result_array();
            foreach ($val as $key => $value){
                $total += $value['total'];
                $str .= "<tr>
                       <td>" . $value['req'] . "</td>
                       <td>" . $value['description'] . "</td>
                        <td>" . $value['quantity'] . "</td>
                        <td>" . $value['unitprice'] . "</td>
                        <td>" . number_format($value['total'], 2, '.', ',') . "</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                </tr>";
            }

            $str .= "<tr>
                    <td colspan='4' style='text-align: center'><b>Total</b></td>
                    <td>" . $total ."</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>";
            echo $str;
        }

	}
?>