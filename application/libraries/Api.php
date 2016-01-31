<?php

class Api
{
    protected $CI;

    function __construct()
    {
        $this->CI =& get_instance();
    }


    // Session for errors
   function set_session_message($type = 'success', $message, $name = 'message')
    {
        $this->CI->session->set_flashdata($name,'<div class="alert alert-'.$type.'">'.$message.'</div>');
    }
    function get_department()
    {
        return $this->CI->db->get('tbl_department')->result_array();
    }
    function insert_users($table, $data)
    {
        $this->CI->db->insert($table, $data);
        return $this->CI->db->insert_id();
    }
    function table_insert($table, $data)
    {
        $this->CI->db->insert($table, $data);
        return $this->CI->db->insert_id();   
    }
    function update_tables($where, $table, $data)
    {
        $this->CI->db->where($where);
        $this->CI->db->update($table, $data);
    }
    function userMenu($desc)
    {
        $nav['params'] = $desc;
        $this->CI->load->view('include/header');
        $this->CI->load->view('include/nav', $nav);
    }
    function delete_tables($where, $table)
    {
        $this->CI->db->where($where);
        $this->CI->db->delete($table);
    }
    function get_unit()
    {
        return $this->CI->db->get('tbl_unit')->result_array();
    }
    function get_director()
    {
        return $this->CI->db->get('tbl_director')->row_array();
    }
    function get_letter($mid)
    {
        $this->CI->db->where('id', $mid);
        return $this->CI->db->get('tbl_mat_desc')->row_array();
    }
    function get_person($id)
    {
        $this->CI->db->where('b.pid = a.id');
        $this->CI->db->where('a.position = c.id');
        $this->CI->db->where('b.id', $id);
        $this->CI->db->select('a.firstname, a.middlename, a.lastname, c.description');
        return $this->CI->db->get('tbl_mat_desc b, tbl_party a, tbl_position c')->row_array();
    }
    function monthselect($val)
    {
        if ($val == 1) {
           $x = 'January';
        }
        elseif ($val == 2) {
            $x = 'February';
        }
         elseif ($val == 3) {
            $x = 'March';
        }
         elseif ($val == 4) {
            $x = 'April';
        }
         elseif ($val == 5) {
            $x = 'May';
        }
         elseif ($val == 6) {
            $x = 'June';
        }
         elseif ($val == 7) {
            $x = 'July';
        }
         elseif ($val == 8) {
            $x = 'Augost';
        }
         elseif ($val == 9) {
            $x = 'September';
        }
         elseif ($val == 10) {
            $x = 'October';
        }
         elseif ($val == 11) {
            $x = 'November';
        }elseif ($val == 12) {
            $x = 'December';
        }
        return $x;
    }
}
