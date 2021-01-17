<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class M_projek extends CI_Model
{
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
