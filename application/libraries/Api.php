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
}
