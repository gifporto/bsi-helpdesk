<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_unit extends CI_Model
{
    public function get_units()
    {
        return $this->db->get('units')->result_array();
    }

    public function get_unit($id)
    {
        return $this->db->get_where('units', ['id' => $id])->row_array();
    }

    public function insert_unit($data)
    {
        return $this->db->insert('units', $data);
    }

    public function update_unit($id, $data)
    {
        return $this->db->where('id', $id)->update('units', $data);
    }

    public function delete_unit($id)
    {
        return $this->db->delete('units', ['id' => $id]);
    }

    public function get_units_by_status($status)
    {
        $this->db->where('status', $status);
        return $this->db->get('units')->result_array();
    }
}
