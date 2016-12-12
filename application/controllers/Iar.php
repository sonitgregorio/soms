<?php

	Class Iar extends CI_Controller
	{
		public function inspect()
		{
			$this->load->model('iar_model');
			$this->api->userMenu('iar');
			$this->load->view('inspection/iar');
			$this->load->view('include/footer');
		}
		public function check_item($id)
		{
			$this->load->model('iar_model');
			$this->api->userMenu('iar');
			$this->load->view('inspection/checking', array('mid' => $id));
			$this->load->view('include/footer');
		}
		public function add_stat(){
			$this->load->model('iar_model');
			$this->iar_model->add_stat($this->input->post('st'), $this->input->post('tid'));
		}

		public function add_notess(){
			$this->load->model('iar_model');
			$this->iar_model->add_notess($this->input->post('tid'), $this->input->post('conote'));
		}
		public function save_disapprove(){
		    $id = $this->input->post('mid_d');
            $reason = $this->input->post('reason');
            $dataa = array('disapprove' => $reason);
            $this->db->where('id', $id);
            $this->db->update('tbl_mat_desc', $dataa);
            echo "<script>alert('Reason successfully sent to the requestor')</script>>";
            redirect('/list_req_mat');
        }

        public function physical(){
            $this->load->model('iar_model');
            $this->api->userMenu('physical');
            $this->load->view('report/physical', '');
            $this->load->view('include/footer');
        }
        public function ppe(){
            $this->load->model('iar_model');
            $this->api->userMenu('ppe');
            $this->load->view('report/ppe', '');
            $this->load->view('include/footer');
        }
        public function reports_supply(){
            $this->load->model('iar_model');
            $this->api->userMenu('supply');
            $this->load->view('report/reports_supply', '');
            $this->load->view('include/footer');
        }

	}
?>